<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\LiveClasses;
use App\LiveClassRecordings;
use GuzzleHttp\Client;
use GuzzleHttp\Ring\Exception\ConnectException;
use App\Package;
use App\library\OAuth;
use DB;
use App\Subscription;
use App\Transaction as MyTransactions;
use App\User;
use DateTime;
use DateInterval;
use DatePeriod;
use Session;
use App\Events\PaymentSuccessfulEvent;
use App\Events\NewUserRegisteredEvent;
use App\Events\MeetingCreatedEvent;
use AfricasTalking\SDK\AfricasTalking;


use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Mail;
use App\Mail\MeetingEmail;
use App\Mail\RegisterMail;
use View;
use Redirect;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{

    use AuthenticatesUsers;
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function accountActivate($token=null){
        //this function checks if token exists and updates the activation status and redirects to home page
        $user = User::where('token',$token)->first();
        // dd($user);
        if(!is_null($user)){
            //token valid
            $user->verified = 1;
            $user->token = NULL;
            $user->save();
            return redirect()->route('home');
        }
        
    }
    public function downloads()
    {
       return view('downloads');
    }
    public function career()
    {
       return view('career');
    }
    public function sendActivate(Request $request){
        //this function sends activation email to those  who havent activated their accounts
        $user = User::where('email',$request->email)->get()->first();
        // dump($user);
        //generate new token
        $token = str_random(15);
        // dump($token);
        $update = User::where('email',$request->email)->update(['token'=>$token]);
        // dump($update);
        if($update) {
            //write code to send activation email
            //http://localhost.com/register/activate/9TT0e3YmDUV20f8
            $url = url('register/activate/'.$token);
            // dump($url);
            $data=array(
                'link'=>$url,
                'name' => $user->name,
                'email'=>$request->email
            );
            Mail::to($request->email)->send(new RegisterMail($data));
            return back()->with('flash_message_success', 'Account Activation Email Sent');
        }
    }
    public function verify(){
        $email= \Auth::user()->email;
        return view('auth.verify_email')->with(compact('email'));
    }
    public function register2(Request $request){
        if($request->isMethod('post')){
            //user submitting register request
            // dd($request->all());
            
            //check if any of the required fields is empty
            if(empty($request->name) || 
                empty($request->phone) || 
                empty($request->email) ||
                // empty($request->role_id) ||
                empty($request->password) ||
                empty($request->password_confirmation)){
                //missing details on form submit by 'enter key'
                return redirect()->back()->with('flash_message_error','Please fill all details');
            }

            $duplicateUser= User::where('phone',$request->number)->first();
            $duplicateEmail = User::where('email',$request->email)->first();

            if($duplicateUser)
            {
                // $request->session()->flash('Error','duplicate_user');
                return redirect()->back()->with('flash_message_error','Phone already exists');
            }
            if($duplicateEmail)
            {
                // $request->session()->flash('Error','duplicate_email');
                return redirect()->back()->with('flash_message_error','Email already exists');
            }
            if($request->password != $request->password_confirmation)
            {
                $request->session()->flash('Error','password_not_same');
                return redirect()->back()->with('msg',trans('main.pass_confirmation_same'));
            }
            $token = str_random(15);
            //http://localhost.com/register/activate/9TT0e3YmDUV20f8
            $url = url('register/activate/'.$token);


            //id,name,email,phone,verified,password,remember_token,created_at,updated)at
            $newUser = [
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'verified'=>0,
                'password'=>Hash::make($request->password),//encrypt($request->password),
                'token'=>$token
            ];

            // print_r($newUser);die();
            $newUser = User::create($newUser);
            // dd($newUser);

            $data=array(
                'id' =>$newUser['id'],
                'link'=>$url,
                'name' => $request->name,
                'email'=>$request->email
            );
            event(new NewUserRegisteredEvent($data));

            //assign user to selected role
            //$request->role_id 0=student by default
            DB::table('role_user')->insert(
                [
                    "user_id" => $newUser['id'],
                    // "role_id" => $request->role_id
                    "role_id" => '3'
                ]
            );

            return redirect('/login');
        }
        return view('auth.register');
    }
    public function mail(){
        return view('mails.meeting');
    }
    public function fetchRecordings(){
        //fetch live class recordings you have created or have been among
        $meetings = LiveClasses::where('course_id','0')->get()->pluck('meetingID');
        $meetingIDsArray = $meetings->all();

        $classRecordings=(array) null;

        //get the list of recordings
        //get the secure salt
        $salt = env("BBB_SALT", "0");
        //UNCOMMENT //get BBB server
        $bbb_server = env("BBB_SERVER", "0");

        $newListString="getRecordings";


        //get sha1sum of keyword+salt
        $checksumList=sha1($newListString.$salt);
        // echo $newCreateString;
        // echo "<br/>".$checksumCreate;


        $getListURL= $bbb_server.'getRecordings?&checksum='.$checksumList;

        ///getlist of  live class recordings

         $client = new Client();
        $response = $client->request('GET', $getListURL);
        //incase site offline->try & catch
        // try {
        //     $response = $client->request('GET', $getListURL);
        // }
        // //catch exception
        // catch(ConnectException $e) {
        //   echo 'Message: ' .$e->getMessage();
        //   // $response = $client->request('GET', $getListURL);
        // }
        

        $body = $response->getBody(); 
        $xml = simplexml_load_string($body);
        // dd($xml);

        

        if($xml->returncode=="SUCCESS"){
            if($xml->messageKey == "noRecordings"){
                //no recordings available on the server
                //$classRecordings=(array) null;

            }else{

                //recording available->CHECK TO SEE WHETHER TO DISPLAY THE LIST
                //loop through recordings array to get recordings
                foreach($xml->recordings->recording as $records){
                    //get the record id & cross match with tbl_scheduled classes
                    $myRecordID=$records->recordID;
                    $meetingID=$records->meetingID;
                    //check if meeting id is in among meetigns createdon QXP Meetings
                    if(in_array($meetingID,$meetingIDsArray)){
                        //recorded playback belongs to meetings->fetch and display
                        //for every recording->cross check with tbl_scheduled_classes_recordings
                        //to ensure current user has enough permissions to view the recordings


                        $names=array();
                        //save details into the liveclassrecordings table
                        $names = LiveClassRecordings::where('meetingID', $meetingID)->value('users');
                        $namesArray = explode(",", $names);
                        // dump($namesArray);
                        if (in_array(\Auth::id(), $namesArray)) {
                            //user allowed to view this live class recording
                            $owner_id = LiveClasses::where('meetingID',$meetingID)->value('owner');
                            // dump($owner_id);

                            $owner_name = $owner_id == null ? "General User" : DB::table('users')->where('id', $owner_id)->value('name');
                            // dump($owner_name);

                            $classRecordings [] = (object) [
                                'owner'=>$owner_name,
                                'recordID'=>$myRecordID,
                                'name'=>$records->name,
                                'size'=>$records->size,
                                'length'=>$records->playback->format->length,
                                'url'=>$records->playback->format->url
                            ];

                        }else{
                            //user not allowed to view this live class recording
                        }
                    }

                    }
                    // dd($classRecordings);
                    
                    
            }
        }
        return $classRecordings;
    }
    public function getRecordings(){
        //fetch the recordings stored for previous meetings
        if (\Auth::check()) {
            //get package status
            $subscription = Subscription::with('package')->where('user_id',\Auth::id())->get();
            // Date('Y-m-d h:i:s', strtotime('+14 days')),       
            $date_now = date("Y-m-d  h:i:s"); // this format is string comparable
            $expiry_on =$subscription[0]->expiry_on;
            if($expiry_on > $date_now){
                $active = true;//subscription is active
            }else{
                $active = false;//expired or is on free trial
            }
            $recordings = $this->fetchRecordings();
            // dd($recordings);

            // return View::make('meeting', compact('subscription', 'active','expiry_on'));
            return view('meetings.recordings')->with(compact('subscription', 'active','expiry_on','recordings'));
        }else{
            return view('meeting_login');
        }
    }
    public function meetingLogin(){
        if (\Auth::check()) {
            return view('meeting');
        }else{
            return view('meeting_login');
        }
        
    }
    public function test(){
        $data=array(
            'message'=>'Meeting has been created successfully,Meeting ID is',
            'ID'=>"meetingID",
            'link'=>"https://sandbox.register/activate",
            'name' => 'Evans Mwenda',
            'email'=>"evansmwenda.em@gmail.com"
        );
        // dd($data);
        return view('mails.register')->with(compact('data'));
    }
    
    public function pricing(){
    	return view('plans');
    }
    public function industries(){
        return view('industries');
    }
    public function terms(){
        return view('terms');
    }
    public function privacy(){
        return view('privacy');
    }
    public function getstarted(){
        return view('get_started');
    }
    public function features(){
        return view('features');
    }
    public function checkEmailActivationStatus(String $email_address){
        $status = User::where('email',$email_address)->value('verified');
        if($status == '0'){
            //user not verified->redirect to verification page
            // dd("not verif");
            return Redirect::route('verify2');
        }else{
            //user account ok
        }
        // dd($status);
    }
    public function meeting(){
        if (\Auth::check()) {
            $status = User::where('email',\Auth::user()->email)->value('verified');
            if($status == '0'){
                //user not verified->redirect to verification page
                // dd("not verif");
                // return Redirect::route('verify2');
                return redirect()->route('verify2');
            }
            // $this->checkEmailActivationStatus(\Auth::user()->email);
            // check if any unused payments
            $this->checkPaymentStatusDashboard();
            //get package status
            $subscription = Subscription::with('package')->where('user_id',\Auth::id())->get();
            // Date('Y-m-d h:i:s', strtotime('+14 days')),       
            $date_now = date("Y-m-d  h:i:s"); // this format is string comparable
            $expiry_on =$subscription[0]->expiry_on;
            if($expiry_on > $date_now){
                $active = true;//subscription is active
            }else{
                $active = false;//expired or is on free trial
            }

            // return View::make('meeting', compact('subscription', 'active','expiry_on'));
            return view('meeting')->with(compact('subscription', 'active','expiry_on'));
        }else{
            return view('meeting_login');
        }
    }
    public function getPlans(){
        if (\Auth::check()) {
            // check if any unused payments
            // $this->checkPaymentStatusDashboard();
            //get package status
            $subscription = Subscription::with('package')->where('user_id',\Auth::id())->get();
            // Date('Y-m-d h:i:s', strtotime('+14 days')),       
            $date_now = date("Y-m-d  h:i:s"); // this format is string comparable
            $expiry_on =$subscription[0]->expiry_on;
            if($expiry_on > $date_now){
                $active = true;//subscription is active
            }else{
                $active = false;//expired or is on free trial
            }

            // return View::make('meeting', compact('subscription', 'active','expiry_on'));
            return view('meeting_plans')->with(compact('subscription', 'active','expiry_on'));
        }else{
            return view('meeting_login');
        }
    }
    public function about(){
        return view('about_us');
    }
    public function leadership(){
        return view('leadership');
    }


    // for the industries
    public function education(){
    	return view('industries.education');
    }
    public function healthcare(){
    	return view('industries.healthcare');
    }
    public function legal(){
    	return view('industries.legal');
    }
    public function financial(){
    	return view('industries.financial');
    }
    public function resources(){
    	return view('industries.humanresources');
    }
    public function manufacturing(){
        return view('industries.manufacturing');
    }
    public function organizations(){
        return view('industries.organizations');
    }
    public function sports(){
        return view('industries.sports');
    }
    public function sales(){
        return view('industries.sales');
    }
    public function startups(){
        return view('industries.startups');
    }
    public function technology(){
        return view('industries.technology');
    }
    public function automotive(){
        return view('industries.automotive');
    }
    public function franchises(){
        return view('industries.franchises');
    }
    public function checkMySubscriptionStatus(){
        //get package status
        $subscription = Subscription::with('package')->where('user_id',\Auth::id())->get();
        // dd($subscription);
        // Date('Y-m-d h:i:s', strtotime('+14 days')),       
        $date_now = date("Y-m-d  h:i:s"); // this format is string comparable
        $expiry_on =$subscription[0]->expiry_on;
        if($expiry_on > $date_now){
            //subscription valid for either trial period or a specific plan
            if($subscription[0]->package_id == '0'){
                //user is on free trial
                $active = false;//user is on free trial
            }else{
                //user has a valid paid plan
                $active = true;//subscription is active
            }
           
        }else{
            //even if its free version(0) , it has expired
            $active = false;//expired or is on free trial
        }
        return $active;
    }
    public function createMeeting(Request $request){
        //check if user has subscription is valid or expired/free version
        $status = $this->checkMySubscriptionStatus();
        // dd($status);//false=free_trial or expired plan
        $data=$request->all();
            //dd($data);
        //post method
        $user = \Auth::user();
        $title="";
        //in order to schedule a class happens
        //1.get the details of the future class

        $title_array=explode(" ", $request->topic);
        //check if name is has more than one
        $count=count($title_array);
        if($count > 1){
            //this is an array -> loop and get the elements and underscore them
            $title=$title_array[0];
            for($i=1;$i<$count;$i++){
                $title=$title."-".$title_array[$i];
            }
        }else{
            //the title is one word e.g "testing"
            $title=$title_array[0];
        }

        //1.5 create a live class as an event
        // $course_id = $data['course_id'];

        $meetingID=str_random(6);
        $classTime=$request->classTime;
        $attendeePW=str_random(6);;//"ap";//$request->attendeePW;
        $moderatorPW=str_random(6);//"mp";//$request->moderatorPW;
        $duration='30';//$request->duration;

        //format datetime
        $classTime=date("Y-m-d H:i:s",strtotime($classTime));//"2020-04-20 07:30:00"
        //get the secure salt
        $salt = env("BBB_SALT", "0");
        //get BBB server
        $bbb_server = env("BBB_SERVER", "0");
        $logout_url = "http://sandbox.qxp-global.com/home";


        if($status){
            //user can create a normal meeting
            //2.get the checksum(to be computer) and store it in column
        
            //name=$title&meetingID=$meetingID&attendeePW=$attendeePW&moderatorPW=$moderatorPW
            //(a)==> prepend the action to the entire query
            $create_string="name=$title&meetingID=$meetingID&record=true&attendeePW=$attendeePW&moderatorPW=$moderatorPW&logoutURL=$logout_url";

            $newCreateString="create".$create_string;
        }else{
            $timer = 45;
            //user can only create meeting that is 40 mins long
            //2.get the checksum(to be computer) and store it in column
        
            //name=$title&meetingID=$meetingID&attendeePW=$attendeePW&moderatorPW=$moderatorPW
            //(a)==> prepend the action to the entire query
            $create_string="name=$title&meetingID=$meetingID&record=true&attendeePW=$attendeePW&moderatorPW=$moderatorPW&duration=$timer&logoutURL=$logout_url";

            $newCreateString="create".$create_string;
        }
        // dd($newCreateString);

        
                // createname=Test+Meeting&meetingID=abc123&attendeePW=111222&moderatorPW=333444
        //createname=$title&meetingID=$meetingID&attendeePW=$attendeePW&moderatorPW=$moderatorPW

            //(b)==> append the secret salt to end of the new query string with the action
                //secret salt: 639259d4-9dd8-4b25-bf01-95f9567eaf4b
                // $newString = createname=Test+Meeting&meetingID=abc123&attendeePW=111222&moderatorPW=333444639259d4-9dd8-4b25-bf01-95f9567eaf4b
        //$newString = "createname=$title&meetingID=$meetingID&attendeePW=$attendeePW&moderatorPW=$moderatorPW".$salt;
            //(c)==> get the sha1 of the new string and save it as checksum
        $checksumCreate=sha1($newCreateString.$salt);
        // echo $newCreateString;
        // echo "<br/>".$checksumCreate;


        $createURL = $create_string."&checksum=".$checksumCreate;
        $getCreateURL= $bbb_server.'create?'.$createURL;

        //3.create a meeting
        //make get request to create live class
        $url = $getCreateURL;

        //dd($url);
        //  Initiate curl
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL,$url);
        // Execute
        $result=curl_exec($ch);
        // Closing
        curl_close($ch);
            
        // Print the return data
        // print_r(json_decode($result, true));
        // dd($url);
        // die();


        // $client = new Client();
        // $response = $client->request('GET', $getCreateURL);
        // $response = $client->request('GET', 'http://bbb.teledogs.com/bigbluebutton/api/create?name=Flirting&meetingID=quest&attendeePW=ap&checksum=bcfb49cc9dac7b0834c90f1604c7005b9079da7b');

        // $body = $response->getBody(); 
        $xml = simplexml_load_string($result);
        //dd($xml);
        if($xml->returncode == "SUCCESS"){
            //successful on bbb server
            $newLiveClass= [
            'title'=>$title,//class title
            'course_id'=>'0',
            'meetingID'=>$meetingID,//meeting ID
            'classTime'=>$classTime,//classTime
            'attendeePW'=>$attendeePW,//attendee password 
            'moderatorPW'=>$moderatorPW,//moderator password
            'duration'=>$duration,//role=0for normal user accounts
            'owner'=>$user['id']
            ];

            $classRecord = [
            'meetingID'=>$meetingID,
            'users'=>$user['id']
            ];


            $newLiveClass = LiveClasses::create($newLiveClass);
            LiveClassRecordings::create($classRecord);

            if($newLiveClass){
                $url = url('user/live/'.$meetingID);
                //successful
                //UNCOMMENT THIS
                // $update = User::where('email',$user['email'])->update(['token'=>$meetingID]);

                $data=array(
                    'message'=>'Meeting has been created successfully,Meeting ID is',
                    'ID'=>$meetingID,
                    'link'=>$url,
                    'name'=>$user['name'],
                    'email'=>$user['email'],
                    'topic'=>$title
                );

                //send email notification for welcome and account activation
                event(new MeetingCreatedEvent($data));
                // Mail::to($user['email'])->send(new MeetingEmail($data));
                // if( count(Mail::failures()) > 0 ) {

                //     return "Failed";
            
                //  } else{
                //      return "Mail send";
                //  }
                    //sendMail(['template'=>get_option('user_create_meeting_email'),'recipent'=>[$user['email']]]);

                // return redirect()->back()->with('msg',trans('main.thanks_class'));
                // $class_string = 'Meeting created successfully!. Share -> '.$meetingID.' for others to join. Meeting details sent to your E-mail Address';
                $class_string = "Meeting created successfully!.<br> ID: -> ".$meetingID."<br>Link. <a href='$url'>$url</a>";
                
                return redirect()->back()->with('flash_message_success',$class_string);

            }else{
                //not successful
                return redirect()->back()->with('msg',trans('main.error_class'));
            }
        }else{
            //not successful
            return redirect()->back()->with('msg',trans('main.error_class')); 
        }  

    }

    public function joinmeeting(Request $request){
        return $this->join_meeting($request->meetingID);
    }
    public function join_meeting($meetingID){
            // check if the user is logged in
            if(\Auth::check()){
                $user = \Auth::user();
                $currentUser="";
        
                //get the secure salt
                $salt = env("BBB_SALT", "0");
                //get BBB server
                $bbb_server = env("BBB_SERVER", "0");
        
                //1.get the details of the logged in user
                $currentUserArray= explode(" ", $user->name);
                // dd($user);
        
                if(count($currentUserArray) > 1){
                    //has firstname lastname
                    $currentUser=$currentUserArray[0]."_".$currentUserArray[1];//"test_user"
                }else{
                    $currentUser=$currentUserArray[0];//"test"
                }
                
        
                //get the details of the live class
                $live_class = LiveClasses::where('meetingID',$meetingID)->first();
                // dd($live_class->title); = "First Class"
                if($live_class == null){
                    return redirect()->back()->with('flash_message_error','An error occurred when trying to join the meeting');
                }
        
                //check if user is presenter by default or not 
                //if not owner of class assign role of attendee
                $userPass=$user->id == $live_class['owner'] ? 
                $live_class->moderatorPW: $live_class->attendeePW ;   
        
                // dd($meetingID);     
        
                //2.get the checksum(to be computer) and store it in column
                $join_string="fullName=$currentUser&meetingID=$meetingID&password=$userPass";
        
                $newJoinString="join".$join_string;
        
                //(b)==> append the secret salt to end of the new query string with the action
                    //secret salt: 639259d4-9dd8-4b25-bf01-95f9567eaf4b
                    // $newString = createname=Test+Meeting&meetingID=abc123&attendeePW=111222&moderatorPW=333444639259d4-9dd8-4b25-bf01-95f9567eaf4b
                //$newString = "createname=$title&meetingID=$meetingID&attendeePW=$attendeePW&moderatorPW=$moderatorPW".$salt;
                    
        
                //(c)==> get the sha1 of the new string and save it as checksum
                $checksumJoin=sha1($newJoinString.$salt);
        
                $joinURL = $join_string."&checksum=".$checksumJoin;
                $getJoinURL= $bbb_server.'join?'.$joinURL;
        
                // dd($getJoinURL);
                $names=array();
                //save details into the liveclassrecordings table
                $names = DB::table('live_class_recordings')->where('meetingID', $meetingID)->value('users');
                $namesArray = explode(",", $names);
                array_push($namesArray,$user['id']);
                $newlist=implode(",", $namesArray);
                // dd($newlist);
        
        
                $liveRecord=LiveClassRecordings::where('meetingID',$meetingID)->update(['users'=>$newlist]);
        
                // dd($getJoinURL);
                return redirect()->away($getJoinURL);
            }else{
                return view('meeting_login');
            }
    }

    // Meetings subscriptions
    public function subscribe(){
        if (\Auth::check()) {
            //get package status
            $subscription = Subscription::with('package')->where('user_id',\Auth::id())->get();
            // Date('Y-m-d h:i:s', strtotime('+14 days')),       
            $date_now = date("Y-m-d  h:i:s"); // this format is string comparable
            $expiry_on =$subscription[0]->expiry_on;
            if($expiry_on > $date_now){
                $active = true;//subscription is active
            }else{
                $active = false;//expired or is on free trial
            }
            // dd($subscription);

            // return View::make('meeting', compact('subscription', 'active','expiry_on'));
            return view('payments.subscribe')->with(compact('subscription', 'active','expiry_on'));
        }else{
            return view('meeting_login');
        }
    }
    public function startSubscription($id=null){
        //get package status
        $subscription = Subscription::with('package')->where('user_id',\Auth::id())->get();
        // Date('Y-m-d h:i:s', strtotime('+14 days')),       
        $date_now = date("Y-m-d  h:i:s"); // this format is string comparable
        $expiry_on =$subscription[0]->expiry_on;
        if($expiry_on > $date_now){
            $active = true;//subscription is active
        }else{
            $active = false;//expired or is on free trial
        }

        $user = \Auth::user();
        $packages = Package::where('id',$id)->get();
        // dd($packages);

        
        if($packages->isEmpty()){
            return back()->with('flash_message_error','An error occurred, please try again');
        }
        
        //check to see if user is logged in
        if(\Auth::id() == ""){
            return back()->with('flash_message_error','Please login to renew subscription');
        }
        // dd($packages);

        
        $isDemo = env('PESAPAL_IS_DEMO',true);//check if we are in sandbox mode
        if($isDemo)
            $api = 'https://demo.pesapal.com';
        else
            $api = 'https://www.pesapal.com';
        
        $token = $params    = NULL;
        $iframelink         = $api.'/api/PostPesapalDirectOrderV4';

        //Kenyan keys
        $consumer_key       = env('PESAPAL_CONSUMER_KEY','');
        $consumer_secret    = env('PESAPAL_CONSUMER_SECRET','');
         
        $signature_method   = new \OAuthSignatureMethod_HMAC_SHA1();
        $consumer           = new \OAuthConsumer($consumer_key, $consumer_secret);
        
        // dd($packages);
        $package_name = $packages[0]->name;
        $amount = str_replace(',','',$packages[0]->amount);// $_POST['amount'];
        // $amount = number_format($amount, 2);//format amount to 2 decimal places

        $desc ="description";// ;
        $type ="MERCHANT";// ; //default value = MERCHANT
        $reference =uniqid();// //unique order id of the transactionby merchant
        $name = explode(" ", $user['name']);
        $first_name =$name[0];
        if(count($name) >1 ){
            $last_name =$name[1];
        }else{
            $last_name ='';
        }
        
        $email =$user['email'];
        $phonenumber ="";

        $is_used="0";
        $status = 'PLACED';
        $currency ='KES';
        $tracking_id = '';
        $payment_method = '';//CHANGE LATER
        $callback_url   = url("payments/redirect");//URL user to be redirected to after payment
        // dd($callback_url);
        // https://skytoptechnologies.com
        // /?pesapal_transaction_tracking_id=058e9adb-d351-4092-9df7-0bd776900859
        // &pesapal_merchant_reference=5f2ad92d9dc87


        $transactions = new MyTransactions;
        $transactions->user_id       = $user['id'];
        $transactions->phone         = $user['email'];
        $transactions->amount        = $amount;
        $transactions->currency      = $currency;
        $transactions->status        = $status;
        $transactions->reference     = $reference;
        $transactions->is_used       = $is_used;
        $transactions->description   = $desc;
        $transactions->tracking_id   = $tracking_id;
        $transactions->payment_method= $payment_method;
        $transactions->save();

        //update the package_id in user's subscription
        $subscription = Subscription::where('user_id',$user['id'])->first();
        $subscription->package_id = $id;
        $subscription->save();
        
        $post_xml   = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                       <PesapalDirectOrderInfo 
                            xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" 
                            xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" 
                            Currency=\"".$currency."\" 
                            Amount=\"".$amount."\" 
                            Description=\"".$desc."\" 
                            Type=\"".$type."\" 
                            Reference=\"".$reference."\" 
                            FirstName=\"".$first_name."\" 
                            LastName=\"".$last_name."\" 
                            Email=\"".$email."\" 
                            PhoneNumber=\"".$phonenumber."\" 
                            xmlns=\"http://www.pesapal.com\" />";
        $post_xml = htmlentities($post_xml);
        
        //post transaction to pesapal
        $iframe_src = \OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $iframelink, $params);
        $iframe_src->set_parameter("oauth_callback", $callback_url);
        $iframe_src->set_parameter("pesapal_request_data", $post_xml);
        $iframe_src->sign_request($signature_method, $consumer, $token);

        // return view('user.payments.iframe')->with(compact('iframe_src','amount','package_name'));
         return view('payments.subscribe')->with(compact('iframe_src',
         'amount',
         'package_name',
         'subscription', 
         'active',
         'expiry_on'));
    }
    public function getCallback(Request $request){
        //get package status
        $subscription = Subscription::with('package')->where('user_id',\Auth::id())->get();
        // Date('Y-m-d h:i:s', strtotime('+14 days')),       
        $date_now = date("Y-m-d  h:i:s"); // this format is string comparable
        $expiry_on =$subscription[0]->expiry_on;
        if($expiry_on > $date_now){
            $active = true;//subscription is active
        }else{
            $active = false;//expired or is on free trial
        }

        $user= \Auth::user();
        // $status='UNKNOWN';
        // dd($request->all());
        $tracking_id = $request['pesapal_transaction_tracking_id'];
        $reference = $request['pesapal_merchant_reference'];

        /** check status of the transaction made
          *There are 3 available API
          *checkStatusUsingTrackingIdandMerchantRef() - returns Status only. 
          *checkStatusByMerchantRef() - returns status only.
          *getMoreDetails() - returns status, payment method, merchant reference and pesapal tracking id
        **/
        
        //$status           = $this->checkStatusByMerchantRef($reference);
        $responseArray    = $this->getTransactionDetails($reference,$tracking_id);
        // $status             = $this->checkStatusUsingTrackingIdandMerchantRef($reference,$tracking_id);
        // dd($responseArray);
        $transactions = MyTransactions::where('reference',$responseArray['pesapal_merchant_reference'])->first();
        if(!is_null($transactions)){
            //found transaction->updated details
            $transactions->status=$responseArray['status'];
            $transactions->payment_method=$responseArray['payment_method'];
            $transactions->tracking_id=$responseArray['pesapal_transaction_tracking_id'];
            $transactions->save();

            //write code to update data in the subscription table
            // getSubscriptions($user_id,$transaction_status);
            $this->buySubscription($user['id'],$transactions->status,$reference);   
        }
        $status = $responseArray['status'];
        // dd($transactions);

        
        //At this point, you can update your database.
        //In my case i will let the IPN do this for me since it will run
        //IPN runs when there is a status change  and since this is a new transaction, 
        //the status has changed for UNKNOWN to PENDING/COMPLETED/FAILED

        //make query to check status here
        return view('payments.redirect')->with(compact('status',
        'reference',
        'tracking_id',
        'subscription',
         'active',
         'expiry_on'));
    }
    public function checkStatusUsingTrackingIdandMerchantRef($pesapalMerchantReference,$pesapalTrackingId){
        //checkStatusUsingTrackingIdandMerchantRef($pesapalMerchantReference,$pesapalTrackingId)
        $token = $params    = NULL;
        //Kenyan Merchant
        $consumer_key       = env('PESAPAL_CONSUMER_KEY','');
        $consumer_secret    = env('PESAPAL_CONSUMER_SECRET','');

        $signature_method   = new \OAuthSignatureMethod_HMAC_SHA1();
        $consumer           = new \OAuthConsumer($consumer_key, $consumer_secret);
        
        $isDemo =env('PESAPAL_IS_DEMO',true);//check if we are in sandbox mode
        if($isDemo)
            $api = 'https://demo.pesapal.com';
        else
            $api = 'https://www.pesapal.com'; 
            
        $QueryPaymentStatus               =   $api.'/API/QueryPaymentStatus';
        // $QueryPaymentStatusByMerchantRef  =   $api.'/API/QueryPaymentStatusByMerchantRef';
        // $querypaymentdetails              =   $api.'/API/querypaymentdetails';

        //get transaction status
        $request_status = \OAuthRequest::from_consumer_and_token(
                                $consumer, 
                                $token, 
                                "GET", 
                                $QueryPaymentStatus, 
                                $params
                            );
        $request_status->set_parameter("pesapal_merchant_reference", $pesapalMerchantReference);
        $request_status->set_parameter("pesapal_transaction_tracking_id",$pesapalTrackingId);
        $request_status->sign_request($signature_method, $consumer, $token);
        
        $status = $this->curlRequest($request_status);
    
        return $status;
    }
    public function checkStatusByMerchantRef($pesapalMerchantReference){
        //checkStatusByMerchantRef($pesapalMerchantReference)
        $token = $params    = NULL;
        //Kenyan Merchant
        $consumer_key       = env('PESAPAL_CONSUMER_KEY','');
        $consumer_secret    = env('PESAPAL_CONSUMER_SECRET','');

        $signature_method   = new \OAuthSignatureMethod_HMAC_SHA1();
        $consumer           = new \OAuthConsumer($consumer_key, $consumer_secret);
        
        $isDemo =env('PESAPAL_IS_DEMO',true);//check if we are in sandbox mode
        if($isDemo)
            $api = 'https://demo.pesapal.com';
        else
            $api = 'https://www.pesapal.com'; 
            
        // $QueryPaymentStatus               =   $api.'/API/QueryPaymentStatus';
        $QueryPaymentStatusByMerchantRef  =   $api.'/API/QueryPaymentStatusByMerchantRef';
        // $querypaymentdetails              =   $api.'/API/querypaymentdetails';

        $request_status = \OAuthRequest::from_consumer_and_token(
                                $consumer, 
                                $token, 
                                "GET", 
                                $QueryPaymentStatusByMerchantRef, 
                                $params
                            );
        $request_status->set_parameter("pesapal_merchant_reference", $pesapalMerchantReference);
        $request_status->sign_request($signature_method, $consumer, $token);
    
        $status = $this->curlRequest($request_status);
    
        return $status;
    }
    public function getTransactionDetails($pesapalMerchantReference,$pesapalTrackingId){
        //getTransactionDetails($pesapalMerchantReference,$pesapalTrackingId);
        $token = $params    = NULL;
        //Kenyan Merchant
        $consumer_key       = env('PESAPAL_CONSUMER_KEY','');
        $consumer_secret    = env('PESAPAL_CONSUMER_SECRET','');

        $signature_method   = new \OAuthSignatureMethod_HMAC_SHA1();
        $consumer           = new \OAuthConsumer($consumer_key, $consumer_secret);
        
        $isDemo =env('PESAPAL_IS_DEMO',true);//check if we are in sandbox mode
        if($isDemo)
            $api = 'https://demo.pesapal.com';
        else
            $api = 'https://www.pesapal.com'; 
            
        // $QueryPaymentStatus               =   $api.'/API/QueryPaymentStatus';
        // $QueryPaymentStatusByMerchantRef  =   $api.'/API/QueryPaymentStatusByMerchantRef';
        $querypaymentdetails              =   $api.'/API/querypaymentdetails';

        $request_status = \OAuthRequest::from_consumer_and_token(
                                $consumer, 
                                $token, 
                                "GET", 
                                $querypaymentdetails, 
                                $params
                            );
        $request_status->set_parameter("pesapal_merchant_reference", $pesapalMerchantReference);
        $request_status->set_parameter("pesapal_transaction_tracking_id",$pesapalTrackingId);
        $request_status->sign_request($signature_method, $consumer, $token);
    
        $responseData = $this->curlRequest($request_status);
        
        $pesapalResponse = explode(",", $responseData);
        $pesapalResponseArray=array('pesapal_transaction_tracking_id'=>$pesapalResponse[0],
                   'payment_method'=>$pesapalResponse[1],
                   'status'=>$pesapalResponse[2],
                   'pesapal_merchant_reference'=>$pesapalResponse[3]);

        // array:[
        //   "pesapal_transaction_tracking_id" => "9f225cb3-9473-4c83-a30e-2bd58ec87dac"
        //   "payment_method" => "MPESA"
        //   "status" => "PENDING"
        //   "pesapal_merchant_reference" => "5f2b268415a76"
        // ]
                   
        return $pesapalResponseArray;
    }

    public function curlRequest($request_status){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $request_status);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        if(defined('CURL_PROXY_REQUIRED')) if (CURL_PROXY_REQUIRED == 'True'){
            $proxy_tunnel_flag = (
                    defined('CURL_PROXY_TUNNEL_FLAG') 
                    && strtoupper(CURL_PROXY_TUNNEL_FLAG) == 'FALSE'
                ) ? false : true;
            curl_setopt ($ch, CURLOPT_HTTPPROXYTUNNEL, $proxy_tunnel_flag);
            curl_setopt ($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
            curl_setopt ($ch, CURLOPT_PROXY, CURL_PROXY_SERVER_DETAILS);
        }
        
        $response                   = curl_exec($ch);
        $header_size                = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $raw_header                 = substr($response, 0, $header_size - 4);
        $headerArray                = explode("\r\n\r\n", $raw_header);
        $header                     = $headerArray[count($headerArray) - 1];
        
        //transaction status
        $elements = preg_split("/=/",substr($response, $header_size));

        // dd($elements);
        $pesapal_response_data = $elements[1];
        
        return $pesapal_response_data;
    }

    public function buySubscription($user_id,$transaction_status,$reference){
        //check if status was successful
        if($transaction_status == 'COMPLETED'){
            //payment successful->1.award subscription
            $subscription = Subscription::where('user_id',$user_id)->first();
            $subscription->expiry_on = Date('Y-m-d h:i:s', strtotime('+31 days')) ;
            $subscription->save();

            //2.set is_used to true so that payment is not used to buy another subscription
            $transactions = MyTransactions::where('reference',$reference)->first();
            if(!is_null($transactions)){
                //found transaction->updated details
                $transactions->is_used="1";
                $transactions->save();  
            }
            //TODO ADD PAYMENT SUCCESSFUL EVENT
            event(new PaymentSuccessfulEvent(\Auth::user()));

            //check if expiry_on is less than now or greater than
            // if($subscription->expiry_on < date('Y-m-d h:i:s')){
            //     //if less than now->award 30 days subscriptions from now
            //     $subscription->expiry_on = Date('Y-m-d h:i:s', strtotime('+31 days')) ;
            //     $subscription->save();
            // }else{
            //     //if greater than, award 30 days from expiry_on 
            //     $timestamp = date_create($subscription->expiry_on);
            //     date_add($timestamp,date_interval_create_from_date_string("31 days"));
            //     $timestamp = date_format($timestamp,"Y-m-d h:i:s");
            //     $subscription->expiry_on = $timestamp ;
            //     $subscription->save();
            // }
        }else{
            //payment not successful
            //do not give user subscription
        }
    }

    public function checkPaymentStatusDashboard(){
        //check on dashboard if user's payment was successful
        $user = \Auth::user();

        $my_transaction = MyTransactions::where([
            ['user_id','=',$user['id']],
            ['is_used','=','0']
        ])->latest()->first();
        // dd($my_transaction);
        if(!is_null($my_transaction)){
            //logic here
            $status = $this->checkStatusByMerchantRef($my_transaction->reference);
            if($status == 'COMPLETED'){
                //payment is successful
                //1.update the status column 
                $my_transaction->status = $status;
                $my_transaction->save();
                //2.award subscription
                $this->buySubscription($user['id'],$status,$my_transaction->reference); 
            }
            // dd($status);
        }
        
        // http://localhost:8000
        // /user/payments/redirect?pesapal_transaction_tracking_id=23f64864-f610-4c39-b8cc-4a0417349a10&pesapal_merchant_reference=5f4e9cde85297

        // https://skytoptechnologies.com
        // /?pesapal_transaction_tracking_id=058e9adb-d351-4092-9df7-0bd776900859
        // &pesapal_merchant_reference=5f2ad92d9dc87
    }
    public function tester(){
        $this->sendPaymentNotification(\Auth::user());
    }
    public function sendPaymentNotification($user){
        //test function to send sms
        if(!is_null(\Auth::id())){
            $data = \Auth::user();
            // dd($data);
            $sms_recipients="";//empty string

            $username = getenv("AFRICASTALKING_USERNAME");
            $apiKey   = getenv("AFRICASTALKING_API_KEY");

            $AT       = new AfricasTalking($username, $apiKey);
            // Get one of the services
            $sms      = $AT->sms();
            if(empty($data['phone'])){
                //user has no mobile number
                $recipients='+254718145956';//$data['phone'];//'+254712345678'
            }else{
                //user has a valid mobile number
                $phone = substr($data['phone'],1);
                $recipients='+254'.$phone;//$data['phone'];//'+254712345678'
            }

            // Set the numbers you want to send to in international format
            

            // Set your message
            $message    = "Dear Customer,your payment was successful.";

            // Set your shortCode or senderId
            $from       = "QXP";
            // Get one of the services
            try {
                // Thats it, hit send and we'll take care of the rest
                $result = $sms->send([
                    'to'      => $recipients,
                    'message' => $message,
                    'from'    => $from
                    
                ]);

                // print_r($result);
                    
            } catch (Exception $e) {
                //echo "Error: ".$e->getMessage();
                $result=$e->getMessage();
                // print_r($result);
            }
        }
        // dd("logged out");
        
    }
    //for support pages
    public function start(){
        return view('support.get_started');
    }
    public function qxpmeetings(){
        return view('support.qxp_meetings');
    }
}
 


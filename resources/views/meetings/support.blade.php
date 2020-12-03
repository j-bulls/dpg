@extends('layouts.home')

@section('main')
<div class="row meeting-top-row">
</div>
<div class="row meeting-bg">

    <div class="meeting-form">
      <div class="meeting-dash-container">
        <div class="meeting-dash-col-1">
          <div class="meeting-dashboard-sidebar">
            <div class="qxp-logo-meeting-dashboard">
              <img src="{{asset('images/logo/bgAsset-4-2.svg')}}" width="100" alt="qxp-logo">
            </div>
            <hr>
            <div class="meeting-menu">
               @include('partials.meeting_sidebar') 
               {{-- <div class="contact-us-email">
                Contact Us for more Queries 
                <hr>
                info@qxp-global.com
              </div> --}}
            </div>
          </div>
        </div>
        <div class="meeting-dash-col-2">
          <div class="meeting-info" > @include('partials.meeting_topbar')</div>
          <div class="meeting-body">
            {{-- Subscribe Here --}}
            <div class="meeting-content faqs" id="create">
              <div class="get-top-details faqs">
                <h2>FAQs</h2>
            </div>
                  
                    <div class="get-started-content faqs">
                      <h4>Answers to some of the frequently asked questions</h4>
                      <ul>
                       <li data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-angle-right"></span>Getting Started with XQP</li>
                        <div class="collapse" id="collapseExample">
                         <p>With everyone moving online and relying heavily on conferencing to carry out meetings, QXP is an easy, simple and flexible conferencing solution that cuts down the hassle associated with conferencing and makes it easier on you. You can access QXP Global here http://qxp-global.com/</p>
                        </div>
                        <li data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2"><span class="fa fa-angle-right"></span>How do I sign up for QXP</li>
                        <div class="collapse" id="collapseExample2">
                          <p>You can sign up for a free QXP account here; http://qxp-global.com/user/register</p>
                        </div>
                        <li data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3"><span class="fa fa-angle-right"></span>How do I reset my password?</li>
                        <div class="collapse" id="collapseExample3">
                          You can reset your password here.
                        </div>
                        <li data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4"><span class="fa fa-angle-right"></span>Where do I find my meeting/class recording?</li>
                        <div class="collapse" id="collapseExample4">
                          Recordings are saved on the recording portal on the cloud. You will also receive a link to the recording once the meeting is over.
                        </div>
                        <li data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5"><span class="fa fa-angle-right"></span>What is my user role?</li>
                        <div class="collapse" id="collapseExample5">
                         You can find all your account details on the user panel. Your subscriptions, role and all information related to your profile are found here.
                        </div>
                      </ul>
                    </div>
                    <hr>
                    <div class="contact-us-email">
                      <h2>Contact Us for more Queries</h2>
                      <a href="mailto:info@qxp-global.com">
                        <i class="fa fa-envelope"></i>
                        info@qxp-global.com
                      </a>
                    </div>
                  
   
           </div>
 
         </div>
        </div>
        
      </div>
    </div>

</div>
<!-- Modal -->
@endsection
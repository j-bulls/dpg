@extends('layouts.home')

@section('main')
<div class="get-top-details">
    <h2>Joining and Scheduling QXP Meetings</h2>


</div>
<div class="row get-started-bg">
    <div class="get-started-content">
        <h4>Answers to some of the frequently asked questions</h4>
       <ul>
           <li data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-angle-right"></span>How do I join a meeting/class?</li>
           <div class="collapse" id="collapseExample">
            <p>Once you have signed up and chosen a plan, log in to your account and you will be directed you to your dashboard where you can enter the meeting ID for the class you have been invited to attend. The page will then direct you to the live classroom/meeting.  You can join either by audio or listen only modes. Select the desired one and join the meeting. If you select audio, you will perform a private echo test to ensure that your microphone is working properly</p>
          </div>
          <li data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2"><span class="fa fa-angle-right"></span>What is a meeting ID or link?</li>
          <div class="collapse" id="collapseExample2">
            <p>This is a link that a meeting organizer or an SME (Subject Matter Expert) generates and shares with the meeting/class attendees. Click on that link and directly join QXP and once you enter the ID, you can proceed to the class/meeting.</p>
         </div>
         <li data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3"><span class="fa fa-angle-right"></span>Do I need to have a webcam to join a meeting?</li>
         <div class="collapse" id="collapseExample3">
            You can join a meeting with audio only, share your screen, share the whiteboard and chat with the other participants. You only need a webcam if you are required to transmit your video to the participants.
        </div>
        <li data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4"><span class="fa fa-angle-right"></span>Am I able to join from an area with poor Internet connectivity?</li>
        <div class="collapse" id="collapseExample4">
            QXP is not as bandwidth intensive as most conference providers. You can join in and listen with the most basic internet connection.
       </div>
       <li data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5"><span class="fa fa-angle-right"></span>If I have no access to Internet, can I join by dialing in?</li>
       <div class="collapse" id="collapseExample5">
        You can join a meeting/class by dialing in the numbers provided for each region. The numbers will be on your meeting invite just below the link.
      </div>
      {{-- 6 --}}
      <li data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6"><span class="fa fa-angle-right"></span>Do I have the option of audio meeting only?</li>
      <div class="collapse" id="collapseExample6">
        QXP default meeting/class is both in audio and video format. You can join the class in the format that is required by the organizer/SME and also join on a listen only capacity.
     </div>
     {{-- 7 --}}
     <li data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample7"><span class="fa fa-angle-right"></span>If I choose to use audio and video, how do I activate both of them?</li>
     <div class="collapse" id="collapseExample7">
        Once you have logged in to QXP and entered a meeting room. You will be given the option of joining on audio or listen only. While in the meeting room, there are three shortcut icons that give you the option of muting yourself, leaving the meeting or sharing your video. You activate video by clicking the video icon.
    </div>
    {{-- 8 --}}
    <li data-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample8"><span class="fa fa-angle-right"></span>Can I use either a phone or my computer to join?</li>
    <div class="collapse" id="collapseExample8">
        QXP platform is mobile optimized which means you can join in from your phone or your computer.
   </div>
   {{-- 9 --}}
   <li data-toggle="collapse" href="#collapseExample9" role="button" aria-expanded="false" aria-controls="collapseExample9"><span class="fa fa-angle-right"></span>How do I schedule a meeting on QXP?</li>
   <div class="collapse" id="collapseExample9">
    To schedule a meeting on QXP, log in and click on the ‘create meeting’ tab on the landing page. Enter your meeting title and your meeting ID will be generated and displayed for you to share. The ID will also be sent to your email with details of the meeting.
  </div>
        </ul>
    </div>
</div>

@endsection
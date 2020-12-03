<ul class="sidebar-meeting-list">
  <!-- Icons and Lists-->

    <!-- Create Meeting -->
        <div class="list-icons">
          <div class="icon-only">
           <!-- <img src="http://127.0.0.1:8000/images/icons/meetingIcon.svg" alt=""> -->
            <img src="{{asset('images/meeting-icon/video-conference-65.png')}}" alt="">
          </div>
          <div class="list-only" style="color:#0099FE;font-weight:bold;">
            <li onclick="location.href='/home'">Home</li>
          </div>
          <hr>
        </div>

        <!-- Schedule -->
        <div class="list-icons">
          <div class="icon-only">
            <img src="{{asset('images/meeting-icon/icons8-schedule-96.png')}}" alt="">
          </div>
          <div class="list-only">
            <li onclick="location.href='/schedule-meeting'">Schedule</li>
          </div>
          <hr>
        </div>
        
        <!-- Meeting Plans -->
        {{-- <div class="list-icons">
          <div class="icon-only">
            <img src="{{asset('images/meeting-icon/meeting-room.png')}}" alt="">
          </div>
          <div class="list-only">
            <li onclick="location.href='/home/plans'">Meeting Plans</li>
          </div>
          <hr>
        </div>  --}}

        <!-- Billing -->
        <div class="list-icons">
          <div class="icon-only">
            <img src="{{asset('images/meeting-icon/billing-icon.png')}}" alt="">
          </div>
          <div class="list-only">
            <li onclick="location.href='/home/subscribe'">Billing</li>
          </div>
          <hr>
        </div> 


        <!-- Recordings -->
         <div class="list-icons">
          <div class="icon-only">
            <img src="http://127.0.0.1:8000/images/meeting-icon/records-logo.png" alt="">
          </div>
          <div class="list-only">
            <!-- this support button is using the recordings link -->
            <li onclick="location.href='/home/recordings'">Recordings</li>
          </div>
          <hr>
        </div> 

        <!-- Support -->
        <div class="list-icons">
          <div class="icon-only">
            <img src="{{asset('images/meeting-icon/support-logo.png')}}" alt="">
          </div>
          <div class="list-only">
            <!-- this support button is using the recordings link -->
            <li onclick="location.href='/support'">Support</li>
          </div>
        </div>

      <!-- End of Lists and Icons -->
      </ul>


{{-- <ul>
    <li onclick="location.href='/home'">Create Meeting</li>
    <li onclick="location.href='/home/plans'">Meeting Plans</li>
    <li onclick="location.href='/home/subscribe'">Billing</li>
    <li onclick="location.href='/home/recordings'">Recordings</li>
  </ul> --}}
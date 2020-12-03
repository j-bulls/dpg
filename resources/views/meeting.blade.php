@extends('layouts.home')

@section('main')
<div class="row meeting-top-row">
</div>
<div class="row meeting-bg">

    <div class="meeting-form">
     <!-- <div class="small-device-bg">
      <img src="http://127.0.0.1:8000/images/meetings/smaller-ui-devices.png" alt=""></div>-->
      {{-- <div class="row meeting-user">
        @include('partials.meeting_topbar')
      </div> --}}
   
        <div class="meeting-dash-container">
          <div class="meeting-dash-col-1">
            <div class="meeting-dashboard-sidebar">
              <div class="qxp-logo-meeting-dashboard">
                <img src="{{asset('images/logo/bgAsset-4-2.svg')}}" width="100" alt="qxp-logo">
              </div>
              <hr>
              <div class="meeting-menu">
                 @include('partials.meeting_sidebar') 
              </div>
            </div>
          </div>
          <div class="meeting-dash-col-2">
           <div class="meeting-info" > @include('partials.meeting_topbar')</div>
            <div class="meeting-body">
              {{-- create meeting --}}
              <div class="meeting-content" id="create">
                 @if(Session::has("flash_message_error")) 
                <div class="alert alert-error alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{!! session( 'flash_message_error') !!}</strong>
                </div> 
                @endif 

                @if(Session::has("flash_message_success")) 
                <div class="alert progress-bar-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{!! session('flash_message_success') !!}</strong>
                </div> 
                @endif 
                <div class="create-join-container">
                  <h2>{{\Auth::user()->name}} Meetings Room</h2>
                <br>
                 <p>Connecting People Together</p>
                 <i>For meeting and working online with teleconferencing, video conference, remote working, work from home and work from anywhere</i>
                  <br><br>
                 
                   <button data-toggle="modal" data-target="#joinmeeting" style="background-color: #71CA52;">Join</button> 
                    <button data-toggle="modal" data-target="#exampleModalCenter" style="background-color: #11BECC;"> Start a Meeting</button> 
                  <a href="/schedule-meeting"><button style="background-color: #FD6C03;">Schedule</button> </a>
                </div>
                  <hr>
                  
              </div>
              
              <!-- Recordings List 
              <div class="recordings-list-container">
                <div class="recordings-header">
                  <div class="rec-title">Title</div>
                  <div class="vertical-line"></div>
                  <div class="recording-title">Recording</div>
                </div>
               this is where the recording system is added
                <div class="recordings-placeholder">
                  <img src="http://127.0.0.1:8000/images/meetings/recording-placeholder.png" alt="">
                </div>
              </div>
              End of recording list-->

            </div>
          </div>
        </div>

    </div>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        {{-- <div class="icon-only">
          <img src="http://127.0.0.1:8000/images/meeting-icon/meeting-room.png" alt="">
        </div> --}}
        <div class="qxp-logo-meeting-dashboard modal-design">
        <img src="{{asset('images/logo/bgAsset-4-2.svg')}}" width="100" alt="qxp-logo">
        </div>
        <h5 class="modal-title" id="exampleModalLongTitle">Create Your Meeting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="/schedule" method="post">
      @csrf 
          <div class="modal-body create-meeting">
              <div class="form-group">
                  <label for="">Topic</label>
                  <input type="text" name="topic" required class="form-control" placeholder="Enter Meeting Title">
                  <input type="hidden" name="classTime" value="2020-05-12T08:00">
              </div>
              
          </div>
          <div class="modal-footer">
            <button type="submit" style="background-color: #11BECC;" class="create-meeting-button">Create </button>
            <button type="button" class="close-meeting-button" data-dismiss="modal">Close</button>

          </div>
      </form>
    </div>
  </div>

</div>
{{-- join modal --}}
<div class="modal fade" id="joinmeeting" tabindex="-1" role="dialog" aria-labelledby="joinmeeting" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        {{-- <div class="icon-only">
          <img src="http://127.0.0.1:8000/images/meeting-icon/meeting-room.png" alt="">
        </div> --}}
        <div class="qxp-logo-meeting-dashboard modal-design">
        <img src="{{asset('images/logo/bgAsset-4-2.svg')}}" width="100" alt="qxp-logo">
        </div>
        <h5 class="modal-title" id="exampleModalLongTitle">Join Meeting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

          <div class="modal-body create-meeting">
            
              <p> Enter meeting ID to join meeting</p> 
              <form method="post" action="/joinmeeting">{{ csrf_field() }}
                  <input type="text" class="form-control col-md-8" name="meetingID" required placeholder="Enter Meeting Id">
                 <hr>
                  <button type="submit" style="background:#71CA52">Join Meeting</button> 
              </form>
        
          </div>
    </div>
  </div>

</div>
@endsection
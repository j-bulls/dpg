@extends('layouts.home')

@section('main')
<div class="row meeting-top-row">
</div>
<div class="row meeting-bg">

    <div class="meeting-form">
      <div class="row meeting-user">
        @include('partials.meeting_topbar')
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="meeting-menu">
            @include('partials.meeting_sidebar')
          </div>
        </div>
        <div class="col-sm-12 col-md-8">
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
               <h2>Create or Join Meeting</h2>
               <div class="row">
                 {{-- <button><i class="fa fa-group"></i> Join Meeting</button>  --}}
                 <button style="background: #0099FE" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-clock-o"></i> Create Meeting</button> 
               </div>
               <hr>
               <p> Please enter ID to join meeting or create a new meeting</p> 
               <form method="post" action="/joinmeeting">{{ csrf_field() }}
                   <input type="text" class="form-control col-md-8" name="meetingID" required placeholder="Enter Meeting Id">
                   <button type="submit" style="background:#FD6C03" >Join Meeting</button> 
               </form>
            </div>
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
          <h5 class="modal-title" id="exampleModalLongTitle">Create Meeting</h5>
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
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Create </button>
            </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    function createMeeting(){
      document.getElementById('subscribe').style.display="none";
      document.getElementById('create').style.display="block";
    }
    function subscription(){
      document.getElementById('create').style.display="none";
      document.getElementById('subscribe').style.display="block";
    }
  </script>
@endsection
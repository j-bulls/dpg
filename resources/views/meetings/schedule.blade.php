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
                            </div>
                        </div>
                    </div>
                    <div class="meeting-dash-col-2">
                        <div class="meeting-info" > @include('partials.meeting_topbar')</div>
                        <div class="meeting-body">
                            {{-- create meeting --}}
                            <div class="meeting-content" id="create">

                                <!-- Creating Schedule Column -->
                                <div class="schedule-container">
                                    <!-- Heading title-->
                                    <div class="schedule-header title">
                                        Your Scheduled meetings 
                                        <button class="create-schedule" data-toggle="modal" data-target="#exampleModalCenter">Create Schedule</button>
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
                                    </div>


                                    <!--Schedule Column-->
                                    <div class="schedule-body">
                                        <div class="container">
                                            <div class="row title">
                                                <div class="col-md-4">Meeting Title</div>
                                                <div class="col-md-2">Meeting ID</div>
                                                <div class="col-md-4">Time</div>
                                                <div class="col-md-2">Action</div>
                                            </div>
                                            <hr>
                                            <!-- Content -->
                                            @if(count($my_schedules)>1)
                                              @foreach ($my_schedules as $scheduled)
                                              <div class="row colored">
                                                <div class="col-md-4">{{$scheduled->title}}</div>
                                                <div class="col-md-2">{{$scheduled->meetingID}}</div>
                                                <div class="col-md-4">{{substr($scheduled->classTime,0,30)}}</div>
                                                <div class="col-md-1 just-btn">
                                                      <form method="post" action="/live-schedule-start">{{ csrf_field() }}
                                                        <input type="hidden" value="{{$scheduled->id}}" name="meetingID">
                                                          <button type="submit" class="btn-schedule">Start</button>
                                                        </form>

                                                </div>
                                            </div>
                                            <br>
                                              @endforeach
                                              {{$my_schedules->links()}}
                                              @else
                                              <tr >
                                                <td >You dont have any scheduled events</td>
                                              </tr>
                                              
                                            @endif

                                            
                                        </div>
                                    </div>
                                </div>
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
          {{-- <div class="icon-only">
            <img src="http://127.0.0.1:8000/images/meeting-icon/meeting-room.png" alt="">
          </div> --}}
          <div class="qxp-logo-meeting-dashboard modal-design">
            <img src="http://127.0.0.1:8000/images/logo/bgAsset-4-2.svg" alt="qxp-logo">
          </div>
          <h5 class="modal-title" id="exampleModalLongTitle">Schedule Meeting</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <hr>
        <div class="row schedule-class">
            <form method="post" action="/live-schedule">{{ csrf_field() }}
                
                    <label>Meeting Title</label>
                    <input type="text" required class="form-control" name="title" placeholder="Meeting Title">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Start Date</label>
                            <input type="datetime-local" required class="form-control" name="startdate">
                        </div>
                        <div class="col-md-6">
                            <label>End Date</label>
                            <input type="datetime-local" required class="form-control" name="enddate">
                        </div>
                    </div>
                    <label for="">Description</label>
                    <div class="row"><textarea name="" class="form-control" cols="100" id=""rows="5"></textarea></div>
                    
                    <button type="submit">Save</button>
              
             </form>
        </div>

      </div>
    </div>

  </div>
<br><br><br>
@endsection
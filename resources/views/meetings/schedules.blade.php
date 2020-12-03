@extends('layouts.home')

@section('main')
    <div class="row meeting-top-row">
    </div>
    <div class="row meeting-bg">

        <div class="meeting-form">
            <!-- <div class="small-device-bg">
            <img src="http://127.0.0.1:8000/images/meetings/smaller-ui-devices.png" alt=""></div>-->
            <div class="row meeting-user">
                @include('partials.meeting_topbar')
            </div>
            <hr>
                <div class="meeting-dash-container">
                    <div class="meeting-dash-col-1">
                        <div class="meeting-dashboard-sidebar">
                            <div class="qxp-logo-meeting-dashboard">
                                <img src="http://127.0.0.1:8000/images/logo/bgAsset-4-2.svg" alt="qxp-logo">
                            </div>
                            <div class="meeting-menu">
                                @include('partials.meeting_sidebar') 
                            </div>
                        </div>
                    </div>
                    <div class="meeting-dash-col-2">
                        <div class="meeting-body">
                            {{-- create meeting --}}
                            <div class="meeting-content" id="create">

                                <!-- Creating Schedule Column -->
                                <div class="schedule-container">
                                    <!-- Heading title-->
                                    <div class="schedule-header title">
                                        Your Schedule for Today <span>(02/12/2020)</span>
                                        <button class="create-schedule" data-toggle="modal" data-target="#exampleModalCenter">Create Schedule</button>
                                    </div>
                                    {{-- <div class="schedule-header">
                                        Clarice Peru Kibii
                                    </div> --}}

                                    <!--Schedule Column-->
                                    <div class="schedule-body">
                                        <div class="container">
                                            <div class="row title">
                                                <div class="col-md-4">Meeting Title</div>
                                                <div class="col-md-2">Meeting ID</div>
                                                <div class="col-md-4">Start Time</div>
                                                <div class="col-md-2"></div>
                                            </div>
                                            <hr>
                                            <!-- Content -->
                                            <div class="row colored">
                                                <div class="col-md-4">Launch Day</div>
                                                <div class="col-md-2">RxPVui</div>
                                                <div class="col-md-2">1:00pm</div>
                                                <div class="col-md-4">
                                                    <div class="just-btn">
                                                        <button class="btn-schedule" onclick="">Start</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">Launch Day</div>
                                                <div class="col-md-2">RxPVui</div>
                                                <div class="col-md-2">1:00pm</div>
                                                <div class="col-md-4">
                                                    <div class="just-btn">
                                                        <button class="btn-schedule" onclick="">Start</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row colored">
                                                <div class="col-md-4">Launch Day</div>
                                                <div class="col-md-2">RxPVui</div>
                                                <div class="col-md-2">1:00pm</div>
                                                <div class="col-md-4">
                                                    <div class="just-btn">
                                                        <button class="btn-schedule" onclick="">Start</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">Launch Day</div>
                                                <div class="col-md-2">RxPVui</div>
                                                <div class="col-md-2">1:00pm</div>
                                                <div class="col-md-4">
                                                    <div class="just-btn">
                                                        <button class="btn-schedule" onclick="">Start</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row colored">
                                                <div class="col-md-4">Launch Day</div>
                                                <div class="col-md-2">RxPVui</div>
                                                <div class="col-md-2">1:00pm</div>
                                                <div class="col-md-4">
                                                    <div class="just-btn">
                                                        <button class="btn-schedule" onclick="">Start</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">Launch Day</div>
                                                <div class="col-md-2">RxPVui</div>
                                                <div class="col-md-2">1:00pm</div>
                                                <div class="col-md-4">
                                                    <div class="just-btn">
                                                        <button class="btn-schedule" onclick="">Start</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row colored">
                                                <div class="col-md-4">Launch Day</div>
                                                <div class="col-md-2">RxPVui</div>
                                                <div class="col-md-2">1:00pm</div>
                                                <div class="col-md-4">
                                                    <div class="just-btn">
                                                        <button class="btn-schedule" onclick="">Start</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">Launch Day</div>
                                                <div class="col-md-2">RxPVui</div>
                                                <div class="col-md-2">1:00pm</div>
                                                <div class="col-md-4">
                                                    <div class="just-btn">
                                                        <button class="btn-schedule" onclick="">Start</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>

    </div>
    {{-- modal goes here --}}
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
                  <button type="submit" class="create-meeting-button">Create </button>
                  <button type="button" class="close-meeting-button" data-dismiss="modal">Close</button>
    
                </div>
            </form>
          </div>
        </div>
    
      </div>
@endsection
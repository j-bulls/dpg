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
                <img src="http://127.0.0.1:8000/images/logo/logo.svg" alt="qxp-logo">
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
               FAQs

               <!-- Creating Support Column -->
               <div class="support-container">
                   <div>
                       Your FAQS
                   </div>
               </div>
              
            </div>
          </div>
        </div>

    </div>
    </div>
</div>


@endsection
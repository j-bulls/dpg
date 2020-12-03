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
            {{-- Subscribe Here --}}
            <div class="meeting-content" id="create">
             <h2>Renew Subscription</h2>
               <p>
                 Package: {{$subscription[0]->package->name ?? 'Free Version'}}</span>
               </p>
               <a href="/home/subscribe/{{$subscription[0]->package->id ?? '1'}}" class="btn btn-primary">Renew Subscription</a>
             @if(isset($iframe_src))
             <div class="col-xs-12 col-sm-12">
                 <iframe src="{{ $iframe_src }}" width="100%" height="700px" scrolling="no" frameBorder="0">
                   <p>Browser unable to load iFrame</p>
                 </iframe>
             </div>
           @endif
   
           </div>
 
         </div>
        </div>
        
      </div>
    </div>

</div>
<!-- Modal -->
@endsection
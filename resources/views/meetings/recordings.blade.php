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
               <h2>Previous Meeting Recordings</h2>
               <div class="row">
                <ul class="list-group list-group-flush" style="width: 80%;margin-left:20px;">
                    @if(count($recordings) > 0)

                        @foreach($recordings as $key=>$recording)
                        <li class="list-group-item" style="width: 100%">
                            <p><a href="{{$recording->url}}" target="_blank">{{$recording->name ?? ''}}</a> 
                                <span style="padding-left:30px;color:grey">{{$recording->length}} min(s) </span>
                            </p>
                        </li>
                        @endforeach
                   @else
            <h3 class="text-muted" style="margin-top: 50px">You have no recorded meetings</h3>
                   @endif
                </ul>
               </div>

            </div>
         </div>
        </div>
        
        
      </div>
    </div>

</div>

@endsection
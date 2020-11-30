@extends('layouts.home')

@section('main')
<div class="row meeting-top-row">
</div>
<div class="row meeting-bg">

    <div class="meeting-form">
      <div class="row meeting-user">
        @include('partials.meeting_topbar')
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="meeting-menu">
            @include('partials.meeting_sidebar')
          </div>
        </div>
        <div class="col-sm-12 col-md-8">
          <div class="meeting-body">
            {{-- Subscribe Here --}}
            <div>
             <h2>Payment Status</h2>
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 {{-- <b>PAYMENT STATUS</b> --}}
                 <blockquote>
                     <b>Merchant reference: </b> <?php echo $reference; ?><br />
                     <b>Pesapal Tracking ID: </b> <?php echo $tracking_id; ?><br />
                     <b>Status: </b> <?php echo $status; ?><br />
                 </blockquote>
                 <p style="font-size: 16px">Your payment is being processed. We will notify you once it is completed.</p>
                     <hr style="color: #C0C0C0">
                     <div>
                       <button class="btn btn-primary whited"
                       onclick="window.parent.location = window.parent.location.href">Check Status</button>
                     <a style="text-decoration:none;" href="/home" class="btn btn-primary whited" role="button" aria-pressed="true">Goto Homepage</a>
                     </div><br/><br/><br/>
             </div>
   
           </div>
 
         </div>
        </div>
        
      </div>
    </div>

</div>
<!-- Modal -->
@endsection
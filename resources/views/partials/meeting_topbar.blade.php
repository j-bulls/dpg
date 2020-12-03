{{-- <div class="info-1">Welcome to QXP-Meeting
  <div class="vertical-line"></div>
</div> --}}

    <div class="row">
      <div class="col-md-7">
        Logged In : <span class="username-meeting-info">{{\Auth::user()->name}}</span>
      </div>
      <div class="col-md-5">
        Expiry Date :
        @if($active ?? '')
        
          <span style="color:green;" >{{$expiry_on ?? ''}} (Active)</span>
          <br>
        @else
       
          <span style="color:red;">{{$expiry_on ?? ''}} (Expired)</span>
        @endif  
      </div>
    </div>

 


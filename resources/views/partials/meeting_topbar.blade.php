<div class="info-1">Welcome to QXP-Meeting
  <div class="vertical-line"></div>
</div>
<div class="meeting-info">
    <div class="info-2">Logged In : <span class="username-meeting-info">{{\Auth::user()->name}}</span></div>
    <div class="info-3">Expiry Date :<span class="date-meeting-info">
      @if($active ?? '')
      <p class="card-text">
        <span style="color:green;">{{$expiry_on ?? ''}} (Active)</span></p>
      @else
      <p class="card-text">
        <span style="color:red;">{{$expiry_on ?? ''}} (Expired)</span></p>
      @endif  
    </span></div>
</div>

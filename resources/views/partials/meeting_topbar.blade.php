<div class="col-sm-4"><h1>Welcome to QXP-Meeting</h1>
</div>
<div class="col-sm-4">Logged in as: {{\Auth::user()->name}}</div>
<div class="col-sm-4">
  
    @if($active ?? '')
    <p class="card-text">Expiry Date : 
      <span style="color:green;">{{$expiry_on ?? ''}} (Active)</span></p>
    @else
    <p class="card-text">Expiry Date : 
      <span style="color:red;">{{$expiry_on ?? ''}} (Expired)</span></p>
    @endif
    
</div>
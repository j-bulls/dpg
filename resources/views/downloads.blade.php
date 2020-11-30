@extends('layouts.home')

@section('main')

<div class="container">
    <div class="downloads-top">
        <h2>Get The QXP You Need</h2>
        <p>An integrated platform that helps you communicate better, engage real time through multifunctional collaboration tools for meeting and learning.</p>
    </div>
    <div class="row">
        <div class="download-card">
            <img src="{{asset('images/logo/bgAsset-4-2.svg')}}"> 
           <h3 style="color: #11BECC">Reaching Anyone, Anytime, Anywhere.</h3> 
           <button><i class="fa fa-laptop"></i> Download for Windows</button>   
           <p>Also available on:</p>
           <div class="ios">
            <img src="{{asset('images/icons/app-store.png')}}" >
           </div>
           <div class="ios">
            <img src="{{asset('images/icons/Google-Play.png')}}" >
           </div>                         
        </div>

        <div class="download-card">
            <img src="{{asset('images/logo/bgAsset-3-2.svg')}}" > 
           <h3 style="color: #F4BA00">XP for Pre Primary, Primary and Secondary Education (K-12)</h3>                                   
           <button><i class="fa fa-laptop"></i> Download for Windows</button>
           <p>Also available on:</p>
           <div class="ios">
            <img src="{{asset('images/icons/app-store.png')}}">
           </div>
           <div class="ios">
            <img src="{{asset('images/icons/Google-Play.png')}}" >
           </div>
        </div>

        <div class="download-card">
            <img src="{{asset('images/logo/bgAsset-2-2.svg')}}" > 
            <h3 style="color: #71CA52">Immersively Engaging Tertiary Education</h3>                                 
            <button><i class="fa fa-laptop"></i> Download for Windows</button>
            <p>Also available on:</p>
            <div class="ios">
             <img src="{{asset('images/icons/app-store.png')}}">
            </div>
            <div class="ios">
             <img src="{{asset('images/icons/Google-Play.png')}}">
            </div>
        </div>
        <div class="download-card">
            <img src="{{asset('images/logo/bgAsset-1-1.svg')}}"> 
                   <h3 style="color: #C92519">Remain Connected, Stay Organized</h3> 
                   <button><i class="fa fa-laptop"></i> Download for Windows</button>    
                   <p>Also available on:</p>
                   <div class="ios">
                    <img src="{{asset('images/icons/app-store.png')}}" >
                   </div>
                   <div class="ios">
                    <img src="{{asset('images/icons/Google-Play.png')}}">
                   </div>
                       
                          
        </div>

    </div>

</div>

@endsection
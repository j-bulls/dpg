@extends('layouts.home')

@section('main')
<!-- Start hero slider/ Owl Carousel Slider -->
{{-- <div class="tw-hero-slider owl-carousel">

   <div class="slider-1 slider-map-pattern">
      <!-- Slider arrow end -->
      <div class="slider-wrapper d-table">
         <div class="slider-inner d-table-cell">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-md-12">
                     <img src="{{asset('images/sliders/slider1.jpg')}}" alt="" class="slider-img img-fluid">
                  </div>
                  <!-- Col End -->
               </div>
               <!-- Row End -->
               <div class="row justify-content-center text-center">
                  <div class="col-md-10">
                     <h1 class="tw-slider-subtitle">Search Engine Optimization</h1>
                     <h4 class="tw-slider-title">Digital Marketing
                        <span>Solution</span>
                     </h4>
                     <a href="#" class="btn btn-primary">Submit Now</a>
                  </div>
                  <!-- End Col -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Container End -->
         </div>
         <!-- Slider Inner End -->
      </div>
      <!-- Slider Wrapper End -->
   </div>
   <!-- Slider 1 end -->


  <div class="slider-2">
      <div class="slider-arrow">
         <img src="images/pattern_arrow2.png" alt="sliderArrow1">
         <img src="images/pattern_arrow1.png" alt="sliderArrow2">
         <img src="images/pattern_arrow3.png" alt="sliderArrow3">
      </div>
      <div class="slider-wrapper d-table">
         <div class="slider-inner d-table-cell">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-sm-12">
                     <div class="slider-content">
                        <h1>CONNECT,
                           COLLABORATE &
                           LEARN.
                        </h1>
                        <p>Experience Real-time sharing and Engagement through video, calls, messaging, chat, slides and screens.</p>
                        <a href="#" class="btn btn-primary">SIGN UP, ITS FREE</a>
                        <a href="#" class="btn btn-warning" style="margin-left: 5px;">SEE PRICING</a>
                     </div>
                  </div>
                  <!-- Col end -->
                  <div class="col-md-6">
                  
                  </div>
                  <!-- col end -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Container End -->
         </div>
         <!-- Slider Inner End -->
      </div>
      <!-- Slider Wrapper End -->
   </div>
   <!-- Slider 2 end -->


   <div class="slider-3">
      <div class="slider-arrow">
         <img src="images/pattern_arrow2.png" alt="sliderArrow1">
         <img src="images/pattern_arrow1.png" alt="sliderArrow2">
         <img src="images/pattern_arrow3.png" alt="sliderArrow3">
      </div>
      <div class="slider-wrapper d-table">
         <div class="slider-inner d-table-cell">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-md-6">
                     <img src="{{asset('images/sliders/slider1.jpg')}}" alt="" class="img-fluid slider-img">
                  </div>
                  <!-- Col end -->

                  <div class="col-md-6">
                     <div class="slider-content">
                        <h1>We serve best
                           <span>Local SEO</span> service </h1>
                        <p>Start working with an company that provide everything you need to generate awareness, drive traffic,
                           connect with customers, and increase sales montes</p>
                        <a href="#" class="btn btn-dark">Free Analysis</a>
                     </div>
                     <!-- End Slider Content -->
                  </div>
                  <!-- col end -->
               </div>
               <!-- Row End -->
            </div>
            <!-- COntainer End -->
         </div>
         <!-- Slider Inner End -->
      </div>
      <!-- Slider Wrapper End -->
   </div> 
   <!-- Slider 3 end -->
</div> --}}
<!-- End Carousel -->

{{-- LANDING PAGE DESIGN 2 --}}
<div class="home-2">
   <div class="container">

      <h2>Connect, Collaborate & Learn</h2>
      <p>Qxp maximizes productivity through reliable tools -tailor-made for meeting and learning,anytime, anywhere, Across any device.</p>
        <div class="row btns">
         <button style="background: #11BECC" onclick="location.href='/register-user'">SIGN UP, ITS FREE</button>
         <button style="background: #FD6C03" onclick="location.href='/pricing'"> SEE PRICING</button>
        </div>
      <div class="row ">
         <img src="{{asset('images/featured/UX-Ui-01-01smaller-1.png')}}" alt="">
      </div>
     
   </div>
</div>


<section id="tw-features" class="tw-features-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <h3>Secure Communication & Collaboration all in one<br> Unified Platform</h3>
            <br>
            <p style="color:#060646">QXP maximizes productivity through reliable tools tailor-made for meeting and learning,<br> Anytime, Anywhere, Across Any Device</p>
         </div>

      </div>
      {{-- end of Row 1 --}}
      <div class="row">
         <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
            <div class="features-box" id="academy1">
               <div class="features-icon d-table">
                  <div class="features-icon-inner d-table-cell">
                     <img src="images/icons/academyIcon.svg" alt="">
                  </div>
                  <!-- End Features icon inner -->
               </div>
               <!-- End Features Icon -->
               <h3 style="color: #f4ba00">Academy</h3>
               <p class="plan-detail">For Pre-primary, Primary and Secondary Education
               </p>
               <a href="#" class="tw-readmore">Learn More
                  <i class="fa fa-angle-right"></i>
               </a>
               <div class="academy">
                  <div class="academyIcon pull-right">
                  <img src="{{asset('images/icons/academy.svg')}}">
                  </div>
               </div>
            
            </div>
            <!-- End Single Features -->
         </div>
         <!-- End of Academy -->
         <div class="col-lg-3 col-md-12  wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".4s">
            <div class="features-box" id="higher1" >
               <div class="features-icon d-table">
                  <div class="features-icon-inner d-table-cell">
                     <img src="images/icons/higherIcon.svg" alt="">
                  </div>
                  <!-- End Features icon inner -->
               </div>
               <!-- End Features Icon -->
               <h3 style="color: #71CA52">Higher Ed</h3>
               <p class="plan-detail">For Institutes of Higher Learning
               </p>
               <a href="https://higher-ed.qxp-global.com" class="tw-readmore">Learn More
                  <i class="fa fa-angle-right"></i>
               </a>
               <div class="academy">
                  <div class="academyIcon pull-right">
                  <img src="{{asset('images/icons/higher.svg')}}">
                  </div>
               </div>
            
            </div>
            <!-- End Single Features -->
         
         </div>
         <!-- End of higher ed -->
         <div class="col-lg-3 col-md-12  wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".6s">
            <div class="features-box" id="meeting1">
               <div class="features-icon d-table">
                  <div class="features-icon-inner d-table-cell">
                     <img src="images/icons/meetingIcon.svg" alt="">
                  </div>
                  <!-- End Features icon inner -->
               </div>
               <!-- End Features Icon -->
               <h3 style="color: #11BECC">Meeting</h3>
               <p class="plan-detail">Video Conferencing, Realtime Messaging & Content Sharing
               </p>
               <a href="/" class="tw-readmore">Learn More
                  <i class="fa fa-angle-right"></i>
               </a>
               <div class="academy">
                  <div class="academyIcon pull-right">
                  <img src="{{asset('images/icons/meeting.svg')}}">
                  </div>
               </div>
            
            </div>
            <!-- End Single Features -->
         </div>
         <!-- End Meering  -->
         <div class="col-lg-3 col-md-12  wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".6s">
            <div class="features-box" id="business1" >
               <div class="features-icon d-table">
                  <div class="features-icon-inner d-table-cell">
                     <img src="images/icons/businessIcon.svg" alt="">
                  </div>
                  <!-- End Features icon inner -->
               </div>
               <!-- End Features Icon -->
               <h3 style="color: #C92519">For Business</h3>
               <p class="plan-detail">Suited For All Business Trainings and Webinars
               </p>
               <a href="#" class="tw-readmore">Learn More
                  <i class="fa fa-angle-right"></i>
               </a>
               <div class="academy">
                  <div class="academyIcon pull-right">
                  <img src="{{asset('images/icons/business.svg')}}">
                  </div>
               </div>
            
            </div>
            <!-- End Single Features -->
         </div>
         {{-- end Business --}}
      </div>
      <!-- End Row 2 -->
   </div>
</section>
<!-- End Features section -->



<section id="tw-intro" class="tw-intro-area">
   <div class="row">
      <div class="container text-center">
         <h3>Why QXP?</h3>
         <hr>
      </div>
   </div>
   <!-- End Ellipse Pattern -->
   <div class="container">
      <div class="row">
         <div class="tw-ellipse-pattern col-lg-6">
            <div class="container">
               <div class="row">
                 <div class="col-md-1">
                 <img src="{{asset('images/icons/lgIcon.svg')}}">
                 </div>
                 <div class="col-md-11">
                  <h3>Integrated Platform</h3>
                  <p>One unified platform for all your communication & collaboration needs.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-1">
                  <img src="{{asset('images/icons/lgIcon.svg')}}">
                  </div>
                  <div class="col-md-11">
                   <h3>Reliable and Secure</h3>
                   <p>Our platform provides video, voice, messaging and screen securely. Safeguarding customer data and privacy is paramount in our operations and processes.</p>
                   </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                  <img src="{{asset('images/icons/lgIcon.svg')}}">
                  </div>
                  <div class="col-md-11">
                   <h3>Integrated Platform</h3>
                   <p>Our platform provides video, voice, messaging and screen securely. Safeguarding customer data and privacy is paramount in our operations and processes.</p>
                   </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                  <img src="{{asset('images/icons/lgIcon.svg')}}">
                  </div>
                  <div class="col-md-11">
                   <h3>Light on Connectivity
                  </h3>
                   <p>QXP allows users with strong or weak internet connectivity to share and engage , anytime, anywhere, across any device.</p>
                   </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                  <img src="{{asset('images/icons/lgIcon.svg')}}">
                  </div>
                  <div class="col-md-11">
                   <h3>Global Coverage, Yet Local Experience
                  </h3>
                   <p>QXP offers unmetered calling across the globe with superior voice quality and uptime. Users can also pay in their prefered currency.</p>
                   </div>
                </div>
            </div>
         </div>
     
         <div class="col-lg-6 ml-auto col-md-12 wow fadeInRight" data-wow-duration="1s">
         <img src="{{asset('images/featured/Asset1.png')}}" width="100%">
         </div>
         <!-- End Col -->
      </div>
   </div>
   <!-- End Container -->
</section>
<!-- Intro section End -->



@include('partials.features')

<!-- End Tw Client -->
@endsection
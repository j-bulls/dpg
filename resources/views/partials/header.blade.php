<div class="tw-top-bar">

  <div class="row">
     <div class="col-md-3 text-left leftContainer">
        <div class="row">
           <div class="col-md-3 top-social-links">
              <a href="https://www.facebook.com/QXPGLOBAL"><i class="fa fa-facebook "></i></a>                
           </div>
           <div class="col-md-3 top-social-links">
              <a href="https://www.linkedin.com/company/qxp-global"><i class="fa fa-linkedin "></i></a>                
           </div>
           <div class="col-md-3 top-social-links">
              <a href="https://www.twitter.com/qxpglobal"><i class="fa fa-twitter "></i></a>                
           </div>
           <div class="col-md-3 top-social-links">
              <a href="https://www.instagram.com/qxpglobal"><i class="fa fa-instagram fa-2x"></i></a>                
           </div>
        </div>

        </div>
     
     <!-- Col End -->
     <div class="col-md-8 ml-auto">
        <div class="top-contact-info">
           <span class="reg-user"><a href="/register-user" ><i class="fa fa-user"></i>Sign up</a></span>
           <span><i class="fa fa-comment"></i><a href="/login-for-meeting"> Join Meeting</a></span>
           <span><i class="fa fa-envelope"></i><a href="#">info@qxp-global.com</a></span>
        </div>

     </div>
     <!-- Col End -->
  </div>
  <!-- Row End -->

<!-- Container End -->
</div>
<!-- Top Bar end -->


<!-- header======================-->
<header>
   <div class="tw-head">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand tw-nav-brand" href="/">
               <img src="{{url('images/logo/logo.svg')}}" alt="Qxp" class="my-logo">
            </a>
            <!-- End of Navbar Brand -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
            <!-- End of Navbar toggler -->
            <div class="collapse navbar-collapse justify-content-center navbar-qxp" 
               id="navbarSupportedContent" style="height: 80px !important;background-color: #fff !important;">
               <ul class="navbar-nav">
                  <li class="nav-item dropdown active">
                     <a class="nav-link" href="/">
                        Home
                        <span class="tw-indicator"></span>
                     </a>

                     <!-- End of Dropdown menu -->
                  </li>
                  <li class="nav-item dropdown tw-megamenu-wrapper">
                     <a class="nav-link" href="#" data-toggle="dropdown">
                        Products & Solutions
                        <span class="tw-indicator">
                           <i class="fa fa-angle-down"></i>
                        </span>
                     </a>
                     <div id="tw-megamenu" class="dropdown-menu tw-mega-menu">
                        <div class="row">
                        
                           <div class="col-md-8">
                              <h3>Products</h3>
                              <hr style="border-top: 1px solid #ccc">
                                    <div class="row products-menu" onclick="location.href='#';">
                                       <div class="col-sm-2" style="padding-top: 15px">
                                       <img src="{{asset('images/logo/bgAsset-3-2.svg')}}" width="85">
                                       </div>
                                       <div class="col-md-1"></div>
                                       <div class="col-sm-9" style="padding-top: 15px;">
                                          For Pre-primary, Primary and Secondary Education
                                       </div>
                                    </div>   
                                    {{-- <hr style="border-top: 1px solid #ccc"> --}}
                                    <div class="row products-menu" onclick="location.href='https://higher-ed.qxp-global.com/';">
                                       <div class="col-sm-2" style="padding-top: 15px">
                                       <img src="{{asset('images/logo/bgAsset-2-2.svg')}}" width="85">
                                       </div>
                                       <div class="col-md-1"></div>
                                       <div class="col-sm-9" style="padding-top: 15px;">
                                          For Institutes of Higher Learning
                                       </div>
                                    </div>  
                                     
                                    {{-- <hr style="border-top: 1px solid #ccc"> --}}
                                    <div class="row products-menu" onclick="location.href='#';">
                                       <div class="col-sm-2" style="padding-top: 15px">
                                       <img src="{{asset('images/logo/bgAsset-1-1.svg')}}" width="85">
                                       </div>
                                       <div class="col-md-1"></div>
                                       <div class="col-sm-9" style="padding-top: 15px;">
                                          Suited For All Businesses Trainings and Webinars
                                       </div>

                                    </div> 

                                    <div class="row products-menu" onclick="location.href='/login-for-meeting';">
                                       <div class="col-sm-2" style="padding-top: 15px">
                                       <img src="{{asset('images/logo/bgAsset-4-2.svg')}}" width="85">
                                       </div>
                                       <div class="col-md-1"></div>
                                       <div class="col-sm-9" style="padding-top: 15px;">
                                          Video Conferencing, Messaging & Content Sharing
                                       </div>
                                    </div>  
                           </div>
                           <div class="col-md-4 solutions">
                              <h3>Solutions</h3>
                              <hr style="border-top: 1px solid #ccc">
                              <ul>
                                 <li><a href="/industries/education"><span class=" fa fa-angle-right"></span>Education</a></li>
                                
                                 <li><span><a href="/industries/legal"><span class=" fa fa-angle-right"></span>Legal</a></li>
                                 <li><span><a href="/industries/financial-institutions"><span class=" fa fa-angle-right"></span>Financial Institutions</a>
                                 </li>
                                 <li><span><a href="/industries/human-resources"><span class=" fa fa-angle-right"></span>Human Resources</a></li>
                              </ul>
                              <div class="row" style="margin-top: 17px !important;margin-bottom: 20px;">
                                <a id="btn-square" class="btn-square btn-primary btn-lg" href="/industries" role="button" style="letter-spacing: 1.1px;font-size: 15px;font-weight: 500;color: #ffffff;background-color:#079DFF">
                                  SEE MORE INDUSTRIES
                                </a>
                                   
                              </div>
                           </div>
                         
                        </div>
                        <!-- End Row -->
                     </div>
                     <!-- End of Mega menu -->
                  </li>
                  <!-- End Dropdown -->
                  <li class="nav-item">
                     <a class="nav-link" href="/industries" >
                        Industries
                     </a>
                     <!-- End of Dropdown menu -->
                  </li>
                  <!-- End Dropdown -->
                  <li class="nav-item">
                     <a class="nav-link" href="/pricing" >
                        Pricing & Plans
                        
                     </a>
                     <!-- End of Dropdown menu -->
                  </li>
                  <!-- End Dropdown -->
                  <li class="nav-item">
                     <a class="nav-link" href="/features">
                        Features & Benefits

                     </a>
                     <!-- End of Mega menu -->
                  </li>
                  <!-- End MegaMenu -->
                  <li class="nav-item ">
                     <a class="nav-link" href="/get-started">
                        Support Center
                     </a>
                     <!-- End of Dropdown menu -->
                  </li>
                  <!-- End Dropdown -->
                  
               </ul>
               <!-- End Navbar Nav -->
               @if (\Auth::check())
                  <form action="{{ route('logout') }}" method="POST">
                     @csrf
                     <button type="submit" class="btn btn-warning">Logout</button>
                   </form>
               @else
                  <button data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-warning">Login</button>
               @endif
            </div>
            <!-- End of navbar collapse -->
            
                 
            
            <!-- End off canvas menu -->
         </nav>
         <!-- End of Nav -->
      </div>
      <!-- End of Container -->
   </div>
   <!-- End tw head -->
</header>
<!-- End of Header area=-->


{{-- Login modal preview --}}
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
     <div class="modal-content qxp-login">
       <div class="container">
          
          <div class="row pull-right">
             <span data-dismiss="modal">x</span>
          </div>
          <div class="row">
            <div class="col-md-5 academy-login business-login" onclick="location.href='#';">
               <img src="{{asset('images/logo/bgAsset-3-2.svg')}}" width="100">
              
              <p>QXP for Pre Primary, Primary and Secondary Education (K-12)</p>
            </div>
            <div class="col-md-5 higher-login business-login" onclick="location.href='https://higher-ed.qxp-global.com/';">
               <img src="{{asset('images/logo/bgAsset-2-2.svg')}}" width="100">
              
              <p>Immersively Engaging Tertiary Education</p>
            </div>
         </div>
          <div class="row">
             <div class="col-md-5 business-login" onclick="location.href='#';">
               <img src="{{asset('images/logo/bgAsset-1-1.svg')}}" width="100">
               
               <p>Remain Connected, Stay Organized</p>
               </div>
             <div class="col-md-5 meeting-login business-login"onclick="location.href='/login-for-meeting';">
                <img src="{{asset('images/logo/bgAsset-4-2.svg')}}" width="100">
              
              <p>Reaching Anyone, Anytime, Anywhere.</p>
             </div>
          </div>
    

       </div>
      </div>
     </div>
   </div>
 </div>
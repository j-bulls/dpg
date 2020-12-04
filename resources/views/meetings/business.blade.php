@extends('layouts.home')

@section('main')

    <div class="meeting-landing-pg-container">

        {{-- first section --}}
        <div class="container landing-pg">
            <div class="row landing-pg">
                <div class="col-md-4">
                    <div class="meeting-landing-pg-desc business">
                        <h2>Welcome to <span style="color: #c92519"> QXP</span> Business</h2>
                        {{-- <h6>Welcome to <span>QXP Global</span></h6> --}}
                        <h6> <span style="color: #333"> Remain | <span style="color: #c92519">Connected</span> | Organized</span></h6>
                        <div class="meeting-business-paragraph">
                            <p>
                                Remodel how your business works with simple, smart and trusted architecture sure to streamline tasks and drive performance. Enabled video, audio and web conferencing solutions from any region.
                            </p>
                        </div>
                        <a href="#business-link">
                            <button style="background-color: #c92519">Learn More</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="meeting-landing-page">
                        {{-- <img src="http://127.0.0.1:8000/images/meeting-landing-pg/QXP-meetings-landing-desktop.png" alt=""> --}}
                        <img src="http://127.0.0.1:8000/images/business/QXP-business-laptop.png" alt="">
                    </div>
                </div>
            
            </div>
        </div>
        {{-- end of first section --}}
        <hr>
        <div class="container banner">
            <div class="row">
                <div class="col-md-4">
                    <div class="img-banner">
                        <img src="http://127.0.0.1:8000/images/business/QXP-business-desktop.png" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="img-banner-desc">
                        <div class="desc-content-meeting-logo"><img src="https://qxp-global.com/images/logo/bgAsset-1-1.svg" alt=""></div>
                        <h2 style="color: #c92519">Connect <span class="dot-colored red"> .</span> People <span class="dot-colored red"> .</span> Together</h2>
                        {{-- <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu risus quis varius quam quisque id diam. Dolor purus non enim praesent elementum facilisis leo.
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <hr>
        
        {{-- second section --}}
        <div class="desc-bg-img-business" id="business-link">
            <div class="container desc-content-meeting">

                <div class="row">
                    <div class="facts" style="margin: 0px, 15px;">
                        <h3 class="red">QXP Meeting Features</h3>
                        <p>We Have You Covered for All Your Workplace, Collaboration and Training Needs.</p>
                    </div>
                </div>
                {{-- 1st row --}}
                <div class="row desc-content-meeting">
                    <div class="col-md-3 desc-content">
                        <div><img src="http://127.0.0.1:8000/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #c92519;">Join from anyplace</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="http://127.0.0.1:8000/images/icons/013-video-conference-5.svg" alt=""></div>
                        <h4 style="color:#c92519;">Quality Web Audio</h4>
                        <p>Enjoy unparalleled High Definition Audio for a clear and natural sound.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="http://127.0.0.1:8000/images/icons/011-video-conference-3.svg" alt=""></div>
                        <h4 style="color: #c92519;">High Definition Video</h4>
                        <p>Experience higher resolution, high quality video conferencing solutions.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="http://127.0.0.1:8000/images/icons/012-video-conference-4.svg" alt=""></div>
                        <h4 style="color: #c92519;">Screen Sharing</h4>
                        <p>Enable real time collaboration and showcase designs and presentations live with multiple screen sharing.</p>
                    </div>
                </div>
                {{-- 2nd row --}}
                <div class="row desc-content-meeting">
                    <div class="col-md-3 desc-content">
                        <div><img src="http://127.0.0.1:8000/images/icons/018-presentation.svg" alt=""></div>
                        <h4 style="color: #c92519;">Transcript Recording</h4>
                        <p>Unearth important meeting highlights with media recording and automated transcribing.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="http://127.0.0.1:8000/images/icons/021-training.svg" alt=""></div>
                        <h4 style="color: #c92519;">Messaging and Team Chat</h4>
                        <p>Instantly react and interact with your colleagues either publicly or in private with enabled team chat.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="http://127.0.0.1:8000/images/icons/015-online-meeting.svg" alt=""></div>
                        <h4 style="color: #c92519;">Security Compliant</h4>
                        <p>Safeguarding our client’s data and maintaining their privacy is paramount with end-to-end encryption.</p>
                    </div>
                    {{-- <div class="col-md-3 desc-content">
                        <div><img src="https://higher-ed.qxp-global.com/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #c92519;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div> --}}
                </div>
                {{-- 3rd row --}}
                {{-- <div class="row desc-content-meeting">
                    <div class="col-md-3 desc-content">
                        <div><img src="https://higher-ed.qxp-global.com/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #c92519;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="https://higher-ed.qxp-global.com/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #c92519;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="https://higher-ed.qxp-global.com/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #c92519;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="https://higher-ed.qxp-global.com/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #c92519;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                </div> --}}

            </div>
        </div>

        {{-- end of second section --}}

    </div>


@endsection
@extends('layouts.home')

@section('main')

<div class=" career-top">
    <h2>Careers</h2>
</div>
<div class="container">
    <div class="career-higlight">
        <h3>Are You Ready to Unite the Future?</h3>
        <p>As a first of its kind, QXP is shaping how Africa sees communication, connectivity, and learning. Prepare to join a brilliant technological and innovation team purposed to reinvent how students learn and businesses collaborate with world-class video and audio conferencing.</p>
    </div>
    <div class="row">
        <div class="career-content">
        <img src="{{asset('images/featured/career.jpg')}}" alt="">
        </div>
        <div class="career-content">
            <h3>Why Work at QXP?</h3>
            <hr style="border:0.5px solid #0099FE">
            <h4><i class="fa fa-arrow-right"></i>Extraordinary Talent</h4>
            <p>Our team is composed of business consultants and training specialists who have a strong blend of technical and line management experience.</p>
            <h4><i class="fa fa-arrow-right"></i>Extraordinary Talent</h4>
            <p>QXP offers rich experiences and develops skills to help you grow into future roles</p>
            <h4><i class="fa fa-arrow-right"></i>Extraordinary Talent</h4>
            <p>We collaborate and thrive together, championing each other’s success.</p>
        </div>
    </div>
</div>
<div class="career-content-2">
    <div class="row">
        <div class="career-input">
            <h3>Send us your CV</h3>
            <p>Can’t find a role that’s right for you? Send us your CV and we’ll get in touch as soon as we have one that matches your skills and attributes</p>
            <form action="">
                <div class="row">
                    <input type="text" placeholder="name"  class="form-control col-md-6" >
                    <input type="text" placeholder="email" class="form-control col-md-6">
                </div>
                <br>
                <div class="row">
                    <input type="file" class="col-md-2">
                </div>
                <br>
                <div class="row">
                    <button>Send</button>
                </div>
            </form>
        </div>
        <div class="career-input" style="margin-top: -50px">
           <img src="{{asset('images/featured/UX-Ui-01-01smaller-1.png')}}" alt="">
        </div>
</div>
</div>

<div class="container">
    <div class="row">
    <div class="qxp-bg career-featured" style="background-image:url({{asset('images/featured/career1.jpg')}})">
            <div class="qxp-overlay qxp-overlay-legal"></div>
                <div class="container">
                     <h3>Finance</h3>
                 </div>
        </div>
        <div class="qxp-bg career-featured" style="background-image:url({{asset('images/featured/career2.jpg')}})">
            <div class="qxp-overlay qxp-overlay-legal"></div>
                <div class="container">
                     <h3> Information and Digital Technology</h3>
                 </div>
        </div>
        <div class="qxp-bg career-featured" style="background-image:url({{asset('images/featured/career3.jpg')}})">
            <div class="qxp-overlay qxp-overlay-legal"></div>
                <div class="container">
                     <h3>Operations</h3>
                 </div>
        </div>
        <div class="qxp-bg career-featured" style="background-image:url({{asset('images/featured/career4.jpg')}})">
            <div class="qxp-overlay qxp-overlay-legal"></div>
                <div class="container">
                     <h3>Legal and External Affairs</h3>
                 </div>
        </div>
        <div class="qxp-bg career-featured" style="background-image:url({{asset('images/featured/career5.jpg')}})">
            <div class="qxp-overlay qxp-overlay-legal"></div>
                <div class="container">
                     <h3>Marketing and Sales</h3>
                 </div>
        </div>
        <div class="qxp-bg career-featured" style="background-image:url({{asset('images/featured/career6.jpg')}})">
            <div class="qxp-overlay qxp-overlay-legal"></div>
                <div class="container">
                     <h3>Human Resource</h3>
                 </div>
        </div>
    </div>
</div>

@endsection
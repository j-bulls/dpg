@extends('layouts.home')

@section('main')

<div class="row about-top">

    <div class="col-md-6 col-sm-12">
        <h2>Who We Are</h2>
        <hr style="border: 1px solid #007bff ">
        <p>QXP is an <strong style="color: #2b6bf3;"> online meeting and learning software </strong> determined to change the way people work and students learn. Gone are the days of working from the office and driving to school, QXP has modernized how people and businesses <strong style="color: #2b6bf3;">function,</strong><strong style="color: #2b6bf3;"> connect</strong> and <strong style="color: #2b6bf3;">interact</strong> with each other through virtual video and audio communications.</p>
        <p><strong style="color: #2b6bf3;">QXP eLearning Technology is designed for classes, institutions of higher learning</strong> and <strong style="color: #2b6bf3;">corporate training agencies, </strong> an online learning experience that is simple, affordable and just as zealous as a traditional classroom.</p>
    </div>
</div>

<div class="row about-body">
    <div class="col-md-6 col-sm-12">
        <h2>Know about us</h2>
        <hr style="border: 1px solid #007bff ">
        <p>We are breaking location barriers <strong style="color: #2b6bf3;">offering world-class video, audio and web conferencing solutions </strong> where business becomes agile and employees can work from anywhere and still achieve flawless productivity. Businesses seeking stronger employee management and efficient customer engagement communicate better, faster and smarter with consistent communication across all teams.</p>
        <p>Available for both students and trainers, we have created a platform that offers premium learning content from the best accredited tutors in the stated field. Access all the material you will need and master your craft from anywhere in the world.</p>
    </div>
    <div class="col-md-6 col-sm-12">
        <img src="{{asset('images/featured/Dashboard-QXP.jpg')}}" alt="">
    </div>
</div>

<div class="row about-main">
    <div class="col-md-5">
        <h3>Why Us?</h3>
        <hr style="border:0.2px solid #fff">
        <h4>Flexible</h4>
        <p>Join and use from any device and strength of connection.</p>
        <h4>  Easy Engagement</h4>
        <p>Seamless and easy to use; One click to join.</p>
        <h4>Productive</h4>
        <p>Experience faster communication and a simplified flow of daily work.</p>
        <hr style="border:1px solid #fff">
        <h4>Mission</h4>  
        <p>Strengthen business relationships and keep you connected from anywhere in the world.</p>
        <h4>Vision</h4>
        <p>To be consistent, reliable and the go to for every student and global company.</p>

    </div>
    <div class="col-md-1">
        <h2>01</h2>
        <h2>02</h2>
        <h2>03</h2>
        <h2>04</h2>

    </div>
    <div class="col-4 second-side">
        <h3>Core Values</h3>
        <hr style="border:1px solid #fff">
        <h4>Innovative</h4>
        <p>We strive to exceed our customers’ expectations with superior connectivity every time they meet.</p>
        <h4>Creative</h4>
        <p>We work with multiple I.T. developers and designers of all ages and backgrounds to forge the ultimate modern workplace.</p>
        <h4>Collaborative</h4>
        <p>Just like our tools and solutions, our people collaborate to ensure our product is seamless and our customers’ desires are met.</p>
        <hr style="border:0.2px solid #fff">
        <h4>Honest</h4>  
        <p> trusted partnership is built by caring for our customers, community and ourselves.</p>
    </div>
</div>
<div class="about-bottom">
    <h2>Interested? Let's get in touch</h2>
    <br>
    <button>GET STARTED TODAY</button>
</div>

@endsection
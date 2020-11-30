@extends('layouts.home')

@section('main')

<div class="features-top">
    <h2>Why QXP</h2>
    <p>An integrated platform that helps you communicate better, engage real time through multifunctional collaboration tools for meeting and learning.</p>
</div>

<div class="row" style="background: #F2F4F4">
    <div class="container">
        {{-- first row --}}
        <div class="row">
            <div class="col-md-4 col-sm-6 features">
                <img src="{{asset('images/featured/for-students.jpg')}}" alt="">
                <h2>For Students</h2>
                <p>With QXP’s Learning Management System, students can attend classes virtually from wherever they are, access learning calendars, class schedules, assignments, take tests and interact with their teachers or lecturers.</p>
                <span>Learn More</span>
            </div>
            <div class="col-md-4 col-sm-6 features">
                <img src="{{asset('images/featured/for-teachers.jpg')}}" alt="">
                <h2>For Teachers & Lecturers</h2>
                <p>QXP’s Learning Management System helps teachers and lecturers enhance a traditional face-to-face learning environment with an engaging, immersive knowledge experience without borders.</p>
                  <span>Learn More</span>
            </div>
            <div class="col-md-4 col-sm-6 features">
                <img src="{{asset('images/featured/for-parents.jpg')}}" alt="">
                <h2>For Parents</h2>
                <p>A learning management system (LMS) ensures parents have immediate access to their children’s grades and academic progress, as well as the ability to connect with teachers and administrators.</p>
               <span>Learn More</span>
            </div>
        </div>
        {{-- second row --}}
        <div class="row">
            <div class="col-md-4 col-sm-6 features">
                <img src="{{asset('images/featured/for-learning-institutions.jpg')}}" alt="">
                <h2>For Learning Institutions</h2>
                <p>Schools and colleges globally are adopting Leaning Management Systems allowing teachers to deliver personalized learning, engage and connect students.</p>
               <span>Learn More</span>
            </div>
            <div class="col-md-4 col-sm-6 features">
                <img src="{{asset('images/featured/for-business.jpg')}}" alt="">
                <h2>For Businesses</h2>
                <p>QXP’s Learning Management System helps teachers and lecturers enhance a traditional face-to-face learning environment with an engaging, immersive knowledge experience without borders.</p>
                <span>Learn More</span>
            </div>
            <div class="col-md-4 col-sm-6 features">
                <img src="{{asset('images/featured/for-trainers.jpg')}}" alt="">
                <h2>For Trainers</h2>
                <p>Companies and instructors can save valuable time and money by enabling them to easily manage the training of large groups of learners through a web-based environment with anytime, anywhere accessibility</p>
                <span>Learn More</span>
            </div>
        </div>
    </div>
</div>
@include('partials.features')

@endsection
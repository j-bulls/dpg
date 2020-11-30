@extends('layouts.home')

@section('main')
<div class="get-top">
    <h2>Getting started with QXP</h2>
    <div class="col-sm-6 pull-right" style=" margin-top:-40px">
        <input placeholder="Search..." class="elementor-search-form__input col-sm-10" type="search" name="s" title="Search" value="">
        <button class="elementor-search-form__submit" type="submit" title="Search" aria-label="Search">
            <i class="fa fa-search" aria-hidden="true"></i>
    </button>
    </div>

</div>
<div class="row get-started-bg">
    <div class="get-started-content">
        <h4>Answers to some of the frequently asked questions</h4>
       <ul>
           <li><span class="fa fa-arrow-right"></span><a href="/support/get_started">Getting Started with XQP</a> </li>
           <li><span class="fa fa-arrow-right"></span> <a href="/support/qxp_meetings">Joining and Scheduling QXP Meetings</a></li>
           <li><span class="fa fa-arrow-right"></span><a href="#">Upgrade to a QXP Paid Plan with more Features</a></li>
           <li><span class="fa fa-arrow-right"></span><a href="#">Learning Management System(LMS)</a></li>
           <li><span class="fa fa-arrow-right"></span><a href="#">Troubleshooting</a></li>
           <li><span class="fa fa-arrow-right"></span><a href="#">Online Demos & Webinars</a>
           </li>

        </ul>
    </div>
</div>

@endsection
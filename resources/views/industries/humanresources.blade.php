@extends('layouts.home')

@section('main')
	<!-- #code here -->
	<div class="qxp-bg qxp-resources-bg" style="display: flex;justify-content: center;align-items: center;width:100%;">
		<div class="qxp-overlay qxp-overlay-resources"></div>
			<div class="container " style="height: 200px;">
				<div class="row">
					<div class="col-6">
						<div class="spacer" >
							<h1 style="color:#FFFFFF;font-size:21px;font-weight: 800;text-transform: uppercase;letter-spacing: 5px;">HUMAN RESOURCES
							</h1>
							<h2 style="color:#FFFFFF;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);">Interview, train, and engage employees with immersive meeting experiences</h2>
							<button class="btn btn-warning text-center" style="z-index:0;margin-top: 20px;">GET STARTED TODAY</button>
						</div>
					</div>
					<div class="col-6"></div>
				</div>
			</div>
	</div>

	<div class="container" >
		<div class="row" style="margin: 80px auto;">
			<div class="col-md-5 col-sm-12" style="">
				<img src="{{asset('images/icons/007-poll.svg')}}" width="50" height="60">
				<h2 style="color:#079DFF;font-weight:600;margin-top: 50px;">Put your clients first with collaboration tools designed to speed efficiency</h2>

				<p style="margin: 20px 0px;color:#484848;font-size: 1.1em;">Whether a few or hundreds of students, post-secondary students can attend classes virtually from wherever they are, access learning calendars and schedules, assignments, take tests and interact with their lecturers.</p>

			</div>
			<div class="col-md-7 col-sm-12" style="">
				<img style="border-radius: 5px 5px 5px 5px;box-shadow: 0px 0px 30px -7px rgba(0, 0, 0, 0.2);" src="{{asset('images/featured/resources-interview.jpg')}}" height="100%" width="100%" />
			</div>
		</div>
<!-- 		<hr style="width: 100%;border-top:1px solid #079DFF;">
 --><!-- 		<div class="row" style="margin: 80px auto;">
			<div class="col-md-7 col-sm-12" style="padding-top:20px;">
				<img src="{{asset('images/featured/education-teacher2.jpg')}}" height="100%" width="100%" />
			</div>
			<div class="col-md-5 col-sm-12 " style="margin-top:20px;">
				<img src="{{asset('images/icons/017-coaching.svg')}}" width="50" height="60">
				<h4 style="color:#079DFF;margin-top: 50px;">Enrich teaching & learning</h4>
				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Expand traditional classrooms with video communications to meet the growing needs of modern learners</p>

				<h4 style="color:#079DFF;">Maximise your resources</h4>
				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Students can join classes virtually, from any device , boosting attendance and retention.</p>

				<h4 style="color:#079DFF;">Dynamic Content Sharing</h4>
				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Increase student participation and learning retention with virtual and hybrid classrooms and micro learning.</p>

			</div>
			
		</div> -->
	</div>

	@include('partials.features')

	<div class="container">
		<div class="row text-center" style="height: 200px;">
			<div class="col-md-5 col-sm-10" style="margin:auto;">
				<h2 style="font-weight: 600;color:#079DFF">Interested? Lets' get in touch</h2>
				<button class="btn btn-my-warning" style="margin-top: 20px;">GET STARTED TODAY</button>
			</div>	
		</div>
	</div>

@endsection
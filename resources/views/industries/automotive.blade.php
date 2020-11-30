@extends('layouts.home')

@section('main')
	<!-- #code here -->
	<div class="qxp-bg qxp-automotive-bg" style="display: flex;justify-content: center;align-items: center;width:100%;">
		<div class="qxp-overlay qxp-overlay-legal"></div>
			<div class="container " style="height: 200px;">
				<div class="row">
					<div class="col-sm-12 col-md-6"></div>
					<div class="col-sm-6 col-md-6">
						<div class="spacer" >
							<h1 style="color:#FFFFFF;font-size:21px;font-weight: 800;text-transform: uppercase;letter-spacing: 5px;">Automotive
							</h1>
							<h2 style="color:#FFFFFF;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);">A low-cost LMS to train teams, regardless of their geographical location for the automotive and energy sectors.</h2>
							<button class="btn btn-warning text-center" style="z-index:0;margin-top: 20px;">GET STARTED TODAY</button>
						</div>
					</div>
				</div>
			</div>
	</div>

	<div class="container" >
		<div class="row" style="margin: 100px auto;">
			<div class="col-md-5 col-sm-12" style="">
				<img src="{{asset('images/icons/007-poll.svg')}}" width="50" height="60">
				<h2 style="color:#079DFF;font-weight:600;margin-top: 50px;"></h2>

				<p style="margin: 20px 0px;color:#484848;font-size: 1.1em;">In the automotive industry, eLearning with QXP LMS can help businesses in the automotive and energy sectors handle employee training cost-effectively and timely. Management and production can support different facilities globally with a low-cost LMS to train teams, regardless of their geographical location. QXP LMS features ensure:</p>

			</div>
			<div class="col-md-7 col-sm-12" style="">
				<img style="border-radius: 5px 5px 5px 5px;box-shadow: 0px 0px 30px -7px rgba(0, 0, 0, 0.2);" src="{{asset('images/featured/automotive-2.jpg')}}" height="100%" width="100%" />
			</div>
		</div>
		<hr style="width: 100%;border-top:1px solid #777;">

 		<div class="row" style="margin: 140px auto;">

 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;">Standardized Training</h4>
 				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">With heavy regulation and standardized automotive technologies, branches must comply to environmental laws, regional production and safety policies. QXP LMS enables standardization of all e-Learning materials to affiliate facilities and subsidiaries in a centralized manner.</p>
 			</div>
 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;">Energy & Automotive</h4>
 				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">In the automotive industry, eLearning with QXP LMS can help businesses in the automotive and energy sectors handle employee training cost-effectively and timely. Management and production can support different facilities globally with a low-cost LMS to train teams, regardless of their geographical location. QXP LMS features ensure</p>
 			</div>
 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;">Scalable ,Cost-Effective & Flexibility</h4>
 				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Through an all-in-one integrated platform, the energy and automotive sector can have teams pace their learning and access training material from any location or device. This minimizes downtime and saves on training costs.</p>
 			</div>
			
		</div>
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
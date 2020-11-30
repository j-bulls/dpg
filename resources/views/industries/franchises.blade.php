@extends('layouts.home')

@section('main')
	<!-- #code here -->
	<div class="qxp-bg qxp-franchises-bg" style="display: flex;justify-content: center;align-items: center;width:100%;">
		<div class="qxp-overlay qxp-overlay-resources"></div>
			<div class="container " style="height: 200px;">
				<div class="row">
					<div class="col-6">
						<div class="spacer" >
							<h1 style="color:#FFFFFF;font-size:21px;font-weight: 800;text-transform: uppercase;letter-spacing: 5px;">Franchises
							</h1>
							<h2 style="color:#FFFFFF;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);">Turbocharge your revenue across all locations with QXP LMS for franchise training</h2>
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
				<h2 style="color:#079DFF;font-weight:600;margin-top: 50px;">Best eLearning platform for your Franchise</h2>

				<p style="margin: 20px 0px;color:#484848;font-size: 1.1em;">Now you can train and coach your franchisees on the parent brand's standards and operating procedures, employee onboarding and training, saving time and moneywhile centralizing training programs.</p>

				<h3 style="color:#079DFF;font-weight:600;margin-top: 50px;">Standardized Training</h3>
				<ul class="franchises">
					<li>Standardized Training</li>
					<li>Scalability and Cost Effectiveness</li>
					<li>Ease of continuity in training and franchise updates</li>
				</ul>

			</div>
			<div class="col-md-7 col-sm-12" style="text-align:center;margin-top: 50px;">
				<img style="border-radius: 5px 5px 5px 5px;box-shadow: 0px 0px 30px -7px rgba(0, 0, 0, 0.2);" src="{{asset('images/featured/franchises-2.jpg')}}" height="95%" width="100%" />
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
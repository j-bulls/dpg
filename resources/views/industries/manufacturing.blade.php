@extends('layouts.home')

@section('main')
	<!-- #code here -->
	<div class="qxp-bg qxp-manufacturing-bg" style="display: flex;justify-content: center;align-items: center;width:100%;">
		<div class="qxp-overlay qxp-overlay-legal"></div>
			<div class="container " style="height: 200px;">
				<div class="row">
					<div class="col-sm-12 col-md-6"></div>
					<div class="col-sm-6 col-md-6">
						<div class="spacer" >
							<h1 style="color:#FFFFFF;font-size:21px;font-weight: 800;text-transform: uppercase;letter-spacing: 5px;">MANUFACTURING
							</h1>
							<h2 style="color:#FFFFFF;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);">Be there for your clients every step of the way</h2>
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

				<p style="margin: 20px 0px;color:#484848;font-size: 1.1em;">Increase levels of productivity via regularly monitoring and evaluating the cost of production, work flow and time management by regularly holding online meeting, onsite plant inspections and collaborations of all departments through Hd video conferencing and clear audio through QXP.</p>

			</div>
			<div class="col-md-7 col-sm-12" style="">
				<img style="border-radius: 5px 5px 5px 5px;box-shadow: 0px 0px 30px -7px rgba(0, 0, 0, 0.2);" src="{{asset('images/featured/manufacturing-2.jpg')}}" height="100%" width="100%" />
			</div>
		</div>
		<hr style="width: 100%;border-top:1px solid #777;">

 		<div class="row" style="margin: 140px auto;">

 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;">Flexibility while on move</h4>
 				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Conduct a loop inspection or departmental meeting via video conferencing anywhere anytime.</p>
 			</div>
 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;">Synchronize Cooperation</h4>
 				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Ensure every department is on it’s best productivity by regularly sharing content, presentations, videos and spreadsheets during video conferencing.</p>
 			</div>
 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;">Cutting down costs</h4>
 				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Enhance alliances between international sites and departments without need of travel. Coordinate safe network online meetings with clients or suppliers across all platforms.</p>
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
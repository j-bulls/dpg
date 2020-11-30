@extends('layouts.home')

@section('main')
	<!-- #code here -->
	<div class="qxp-bg qxp-sports-bg" style="display: flex;justify-content: center;align-items: center;width:100%;">
		<div class="qxp-overlay qxp-overlay-sports"></div>
			<div class="container text-center" style="height: 200px;display: flex;justify-content: center;align-items: center;z-index: 0">
				<div class="row">
					<div class="spacer text-center" >
						<h1 style="color:#FFFFFF;font-size:21px;font-weight: 800;text-transform: uppercase;letter-spacing: 5px;">SPORTS AND ENTERTAINMENT
						</h1>
						<button class="btn btn-warning text-center" style="z-index:0;margin-top: 20px;">GET STARTED TODAY</button>
					</div>
				</div>
			</div>
	</div>

	<div class="container text-center" >
		<div class="row" style="margin: 80px auto;">
			<div class="col-sm-12 col-md-12">
				<h2 style="color:#079DFF;font-weight:600;margin-top: 50px;">
				Level up output , creativity, distribution and production efficiency</h2>
				<p style="margin: 20px 0px;color:#484848;font-size: 1.1em;">QXP accelerates rapid view, organizing and sports arrangements anywhere. QXP Sports and entrainment extends conversations with crew, directors, trainers or students by QXP video conferencing and screen sharing</p>
			</div>

<!-- 			<div class="col-md-5 col-sm-12" style="">
				<img src="{{asset('images/icons/007-poll.svg')}}" width="50" height="60">
				<h2 style="color:#079DFF;font-weight:600;margin-top: 50px;"></h2>

				<p style="margin: 20px 0px;color:#484848;font-size: 1.1em;">Every business owner is focused on providing valuable solutions to customers while optimizing costs and maximizing profits. QXP for Start Ups helps you securely reach to customers and build solid relationships while remotely collaborating to save on costs while providing great customer experiences.</p>

			</div>
			<div class="col-md-7 col-sm-12" style="">
				<img style="border-radius: 5px 5px 5px 5px;box-shadow: 0px 0px 30px -7px rgba(0, 0, 0, 0.2);" src="{{asset('images/featured/startups-2.jpg')}}" height="100%" width="100%" />
			</div> -->
		</div>

		<div class="row" style="margin: 60px auto;">

 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;">Fast-track output</h4>
 				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Support multi-departmental productivity by easily joining a video call and sharing of content and ideas by bringing production team together on QXP video conferencing.</p>
 			</div>
 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;">Elevate Revenues</h4>
 				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Grow your team track record by first-class promotion press tours, that is effective and efficient in reaching out your audience.</p>
 			</div>

 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;">Fast Discussion Advancement</h4>
 				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Make customers happy by saving time and making presentations and content input by screen-sharing in QXP.</p>
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
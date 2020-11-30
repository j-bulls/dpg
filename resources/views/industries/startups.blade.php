@extends('layouts.home')

@section('main')
	<!-- #code here -->
	<div class="qxp-bg qxp-startups-bg" style="display: flex;justify-content: center;align-items: center;width:100%;">
		<div class="qxp-overlay qxp-overlay-healthcare"></div>
			<div class="container text-center" style="height: 200px;display: flex;justify-content: center;align-items: center;z-index: 0">
				<div class="row">
					<div class="spacer text-center" >
						<h1 style="color:#FFFFFF;font-size:21px;font-weight: 800;text-transform: uppercase;letter-spacing: 5px;">QXP FOR START-UPS
						</h1>
						<button class="btn btn-warning text-center" style="z-index:0;margin-top: 20px;">GET STARTED TODAY</button>
					</div>
				</div>
			</div>
	</div>

	<div class="container" >
		<div class="row" style="margin: 80px auto;">
			<div class="col-md-5 col-sm-12" style="">
				<img src="{{asset('images/icons/007-poll.svg')}}" width="50" height="60">
				<h2 style="color:#079DFF;font-weight:600;margin-top: 50px;"></h2>

				<p style="margin: 20px 0px;color:#484848;font-size: 1.1em;">Every business owner is focused on providing valuable solutions to customers while optimizing costs and maximizing profits. QXP for Start Ups helps you securely reach to customers and build solid relationships while remotely collaborating to save on costs while providing great customer experiences.</p>

			</div>
			<div class="col-md-7 col-sm-12" style="">
				<img style="border-radius: 5px 5px 5px 5px;box-shadow: 0px 0px 30px -7px rgba(0, 0, 0, 0.2);" src="{{asset('images/featured/startups-2.jpg')}}" height="100%" width="100%" />
			</div>
		</div>

		<div class="row" style="margin: 60px auto;">

 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;">Elevate Your Brand</h4>
 				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Take your brand to the next level with powerful collaboration solutions.</p>
 			</div>
 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;">Boost Customer Reach</h4>
 				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Reduce travel and office costs by virtually bringing everyone together in one platform regardless of wherever they are or whichever device, any time.</p>
 			</div>
 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;">Create New Connections</h4>
 				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Grow Your Business and keep your teams working through file sharing, video calling, learning management system, and digital whiteboards.</p>
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
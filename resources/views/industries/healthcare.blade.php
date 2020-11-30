@extends('layouts.home')

@section('main')
	<!-- #code here -->
	<div class="qxp-bg qxp-healthcare-bg" style="display: flex;justify-content: center;align-items: center;width:100%;">
		<div class="qxp-overlay qxp-overlay-healthcare"></div>
			<div class="container " style="height: 200px;">
				<div class="row">
					<div class="col-sm-12 col-md-6"></div>
					<div class="col-sm-6 col-md-6">
						<div class="spacer" >
							<h1 style="color:#FFFFFF;font-size:21px;font-weight: 800;text-transform: uppercase;letter-spacing: 5px;text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.65)">HEALTHCARE
							</h1>
							<h2 style="color:#FFFFFF;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);">Video Conferencing for TeleHealth</h2>
							<button class="btn btn-warning text-center" style="z-index:0;margin-top: 20px;">GET STARTED TODAY</button>
						</div>
					</div>
				</div>
			</div>
	</div>

	<div class="container" >
		<div class="row" style="margin: 80px auto;">
			<div class="col-md-5 col-sm-12" style="">
				<img src="{{asset('images/icons/007-laptop.svg')}}" width="50" height="60">
				<!-- <h2 style="color:#079DFF;font-weight:600;margin-top: 50px;">Put your clients first with collaboration tools designed to speed efficiency</h2> -->

				<p style="margin: 40px 0px;color:#484848;font-size: 1.1em;">Conduct Healthcare conferences that
				 connect with medical professionals, staff, patients or patient’s families over video conferencing
				 and sharing experience, innovations or even medical history or medical conditions that will bring
				 comfort and safety to all healthcare specialists. Expand telemedicine and health initiatives with 
				 video consultation and staff empowerment with latest knowledge and case presentations that highlight
				 sessions and critical learning and sharing of skills or challenges being experienced in healthcare 
				system through screen-sharing and discussion through video conferencing.</p>

			</div>
			<div class="col-md-7 col-sm-12" style="">
				<img style="border-radius: 5px 5px 5px 5px;box-shadow: 0px 0px 30px -7px rgba(0, 0, 0, 0.2);" src="{{asset('images/featured/healthcare-1.jpg')}}" height="100%" width="100%" />
			</div>
		</div>

		<hr class="	.d-block .d-sm-none"/>

 		<div class="row" style="margin: 80px auto;">
 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;margin-top: 30px;font-weight: 600;">Approachability by design</h4>
				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Provide fast effective treatment and physical-like treatment with patients anytime anywhere. Creating every consultation count.</p>
 			</div>
 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;margin-top: 30px;font-weight: 600">First-class video and audio</h4>
				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Feel natural interactions by experiencing immersive Hd videos and clear audio even in poor network connections.</p>
 			</div>
 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;margin-top: 30px;font-weight: 600;">Comprehensive management</h4>
				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Monitor usage and disruptions in appointments that ensure easy availability of rapid healthcare.</p>
 			</div>
 			<div class="col-sm-12 col-md-4" >
 				<h4 style="color:#079DFF;margin-top: 30px;font-weight: 600;">Virtual Family visits</h4>
				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Ensure safety and reduction of in-person visits via connecting patient’s family members/friends over a video.</p>
 			</div>
 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;margin-top: 30px;font-weight: 600;">Virtual conferences</h4>
				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Impact Medical Knowledge, staff’s Training, and medical support with patient communities with virtual video conferencing and content sharing with QXP.</p>
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
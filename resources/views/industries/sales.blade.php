@extends('layouts.home')

@section('main')
	<!-- #code here -->
	<div class="qxp-bg qxp-sales-bg" style="display: flex;justify-content: center;align-items: center;width:100%;">
		<div class="qxp-overlay qxp-overlay-resources"></div>
			<div class="container " style="height: 200px;">
				<div class="row">
					<div class="col-6">
						<div class="spacer" >
							<h1 style="color:#FFFFFF;font-size:21px;font-weight: 800;text-transform: uppercase;letter-spacing: 5px;">SALES
							</h1>
							<h2 style="color:#FFFFFF;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);">Be there for your clients every step of the way</h2>
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
				<h2 style="color:#079DFF;font-weight:600;margin-top: 50px;"></h2>

				<p style="margin: 20px 0px;color:#484848;font-size: 1.1em;">Enlarge your customer base by closing more deals. Meet via two-way HD video, make presentations, share content and spread sheets with prospects anywhere and deliver highly effective trades.</p>

			</div>
			<div class="col-md-7 col-sm-12" style="">
				<img style="border-radius: 5px 5px 5px 5px;box-shadow: 0px 0px 30px -7px rgba(0, 0, 0, 0.2);" src="{{asset('images/featured/manufacturing-2.jpg')}}" height="100%" width="100%" />
			</div>
		</div>

		<div class="row" style="margin: 60px auto;">

 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;">Universal Accessibility</h4>
 				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Delivering , training and getting responses from employees or reach out should be easy. QXP video conferencing attains and ensures responses are heard and outreach is made easier</p>
 			</div>
 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;">Sales Effectiveness</h4>
 				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Organize and call up board members or directors through video conferencing and screen sharing without worrying their expenditure and transport cost through any device.</p>
 			</div>
 			<div class="col-sm-12 col-md-4">
 				<h4 style="color:#079DFF;">Delivery of High-touch Services</h4>
 				<p style="font-size: 1.1em;color:#484848;margin-bottom:1em;">Communicate instantly with employees and members of public and have the first hand information via video conferencing at QXP.</p>
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
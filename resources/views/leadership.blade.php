@extends('layouts.home')

@section('main')

<div class="leader-top">
    <div class="leader-spacer">
        <h2>Leadership Team</h2>
        <p>At every level we seek out intellectual and driven individuals with strong line management experience who combine analytical precision with a human touch.</p>
    </div>
    
</div>
<div class="row">
    <div class="profiles" data-toggle="modal" data-target=".kevin">
        <img src="{{asset('images/profiles/kevin.jpg')}}" alt="">
            <h3>Kevin Baraza</h3>
            <h4>Founder</h4>   
            <a href="https://www.linkedin.com/in/kevin-baraza-6a7a1b16/" target="new"><span class="fa fa-linkedin"></span> </a>   
    </div>
    <div class="profiles" data-toggle="modal" data-target=".mathew">
        <img src="{{asset('images/profiles/mathew.png')}}" alt="">
        <h3>Mathew Mwangi</h3>
        <h4>Co-Founder</h4>  
        <a href="https://www.linkedin.com/in/matthew-mwangi-2ba29419/" target="new"><span class="fa fa-linkedin"></span> </a>
    </div>
          <div class="profiles" data-toggle="modal" data-target=".mary">
            <img src="{{asset('images/profiles/mary.jpg')}}" alt="">
                <h3>Mary Kinyua</h3>
                <h4>Co-Founder</h4>  
                <a href="https://www.linkedin.com/in/mary-kinyua/" target="new"><span class="fa fa-linkedin"></span> </a>
        </div>

</div>
<div class="row">
    <div class=" profiles" data-toggle="modal" data-target=".george">
        <img src="{{asset('images/profiles/george.jpg')}}" alt="">~
            <h3>George Kahinga</h3>
            <h4>Co-Founder</h4>  
            <a href="https://www.linkedin.com/in/george-kahinga-muiruri-2bb51344/" target="new"><span class="fa fa-linkedin"></span> </a>
    </div>
    <div class="profiles" data-toggle="modal" data-target=".kirimi">
        <img src="{{asset('images/profiles/kirimi.jpg')}}" alt="">
            <h3>Kirimi Mpungu</h3>
            <h4>Co-Founder</h4>
            <a href="https://www.linkedin.com/in/kirimi-mpungu-7823239/" target="new"><span class="fa fa-linkedin"></span> </a>

           </div>
    <div class="profiles" data-toggle="modal" data-target=".grace">
        <img src="{{asset('images/profiles/grace.png')}}" alt="">
            <h3>Grace Muinde</h3>
            <h4>Co-Founder</h4>  
            <a href="https://www.linkedin.com/in/cpa-grace-muinde-a06987163/" target="new"><span class="fa fa-linkedin"></span> </a>

     </div>
</div>
<div class="row">
    <div class="profiles" data-toggle="modal" data-target=".doreen">
        <img src="{{asset('images/profiles/doreen.jpeg')}}" alt="">
            <h3>Doreen Gakii</h3>
            <h4>CO-Founder</h4> 
            <a href="https://www.linkedin.com/in/doreen-gakii-970b2068/" target="new"><span class="fa fa-linkedin"></span> </a> 

    </div>
    <div class="profiles" data-toggle="modal" data-target=".sam">
        <img src="{{asset('images/profiles/sam.jpeg')}}" alt="">
            <h3>Sam Njau</h3>
            <h4>Co-Founder</h4> 
            <a href="https://www.linkedin.com/in/sam-njau-9898b189/" target="new"><span class="fa fa-linkedin"></span> </a> 

     </div>
</div>


{{-- DETAILS MODALS --}}

{{-- Login modal preview --}}
<div class="modal fade kevin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content qxp-login">
            <div class="container">
           
                <div class="row">
                    {{-- <span data-dismiss="modal" class="pull-right">x</span> --}}
                 </div>
                 <div class="row profile-modals">
                     <div class="col-md-5">
                        <img src="{{asset('images/profiles/kevin.jpg')}}" alt="">
                     </div>
                     <div class="col-md-7">
                        <h3>Kevin Baraza</h3>
                        <h4>Founder</h4> 
                        <p>A Seasoned business expert acknowledged throughout his career for capacity to cultivate strategic relationships and build trust, while simultaneously steering positive bottom line results. Kevin has worked in many different roles as a Financial Modelling Expert, Strategy Analyst and now sits as a Managing Director</p>
                        <a href="https://www.linkedin.com/in/kevin-baraza-6a7a1b16/  " target="new"><span class="fa fa-linkedin"></span> </a>

                     </div>
                      </div>
            
    
            </div>
       </div>
    </div>
</div>
{{-- mathew modal --}}
<div class="modal fade mathew" tabindex="-2" role="dialog" aria-labelledby="mathew" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content qxp-login">
            <div class="container">
                <div class="row">
                    {{-- <span data-dismiss="modal" class="pull-right">x</span> --}}
                 </div>
                 <div class="row profile-modals">
                     <div class="col-md-5">
                        <img src="{{asset('images/profiles/mathew.png')}}" alt="">
                     </div>
                     <div class="col-md-7">
                        <h3>Mathew Mwangi</h3>
                        <h4>Co-Founder</h4> 
                        <p>Mathew Mwangi is the Director of Business Administration at Ampito Africa. Aside from being an accomplished entrepreneur, he was the Service Integration Engineer at Liquid Telecom and a Software Engineer at Kenya Data Networks.</p>
                        <a href="https://www.linkedin.com/in/matthew-mwangi-2ba29419/" target="new"><span class="fa fa-linkedin"></span> </a>
                     </div>
                    </div>
            </div>
       </div>
    </div>
</div>

{{-- mary modal --}}
<div class="modal fade mary" tabindex="-1" role="dialog" aria-labelledby="mary" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content qxp-login">
            <div class="container">
                <div class="row">
                    {{-- <span data-dismiss="modal" class="pull-right">x</span> --}}
                 </div>
                 <div class="row profile-modals">
                     <div class="col-md-5">
                        <img src="{{asset('images/profiles/mary.jpg')}}" alt="">
                     </div>
                     <div class="col-md-7">
                        <h3>Mary Kinyua</h3>
                        <h4>Co-Founder</h4> 
                        <p>With a PHD in Strategy & HRM and over a decade of experience in senior leadership roles as Human Resource (HR) Manager, Mary has amassed expertise working across multiple sectors in Manufacturing, Financial Services, Service Industry, Horticulture, Consultancy and I.T.</p>
                        <a href="https://www.linkedin.com/in/mary-kinyua/" target="new"><span class="fa fa-linkedin"></span> </a>
                    </div>
                    </div>
            </div>
       </div>
    </div>
</div>
{{-- modal for george --}}
<div class="modal fade george" tabindex="-1" role="dialog" aria-labelledby="george" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content qxp-login">
            <div class="container">
           
                <div class="row">
                    {{-- <span data-dismiss="modal" class="pull-right">x</span> --}}
                 </div>
                 <div class="row profile-modals">
                     <div class="col-md-5">
                        <img src="{{asset('images/profiles/george.jpg')}}" alt="">
                     </div>
                     <div class="col-md-7">
                        <h3>George  Kahinga</h3>
                        <h4>Co-Founder</h4> 
                        <p>George is a serial entrepreneur, owner and Director at Systems Hub Limited. Previously, he was a Systems Administrator for Habib Bank Limited</p>
                        <a href="https://www.linkedin.com/in/george-kahinga-muiruri-2bb51344/" target="new"><span class="fa fa-linkedin"></span> </a>
   
                     </div>
                      </div>
            
    
            </div>
       </div>
    </div>
</div>
{{-- kirimi modal --}}
<div class="modal fade kirimi" tabindex="-2" role="dialog" aria-labelledby="kirimi" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content qxp-login">
            <div class="container">
                <div class="row">
                    {{-- <span data-dismiss="modal" class="pull-right">x</span> --}}
                 </div>
                 <div class="row profile-modals">
                     <div class="col-md-5">
                        <img src="{{asset('images/profiles/kirimi.jpg')}}" alt="">
                     </div>
                     <div class="col-md-7">
                        <h3>Kirimi Mpungu</h3>
                        <h4>Co-Founder</h4> 
                       <p>Kirimi Mpungu is a Business strategist and management expert with a MSc from the University of Liverpool, UK. He previously worked as the Director of Administration at Oserian and prior to that was the General Manager - Strategy at Rift Valley Railways leading the diversification and identification of opportunities.</p>
                        <a href="https://www.linkedin.com/in/kirimi-mpungu-7823239/" target="new"><span class="fa fa-linkedin"></span> </a>
                    </div>
                    </div>
            </div>
       </div>
    </div>
</div>

{{-- grace modal --}}
<div class="modal fade grace" tabindex="-1" role="dialog" aria-labelledby="grace" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content qxp-login">
            <div class="container">
                <div class="row">
                    {{-- <span data-dismiss="modal" class="pull-right">x</span> --}}
                 </div>
                 <div class="row profile-modals">
                     <div class="col-md-5">
                        <img src="{{asset('images/profiles/grace.png')}}" alt="">
                     </div>
                     <div class="col-md-7">
                        <h3>Grace Muinde</h3>
                        <h4>Co-Founder</h4> 
                        <p>Grace is an industrious and responsible leader, driven to create
                            and enforce order within systems and institutions. She is eager to
                            improve systems and processes with her innovative ideas and has a
                            talent for seeing possibilities for improvement in everything.</p>
                       <a href="https://www.linkedin.com/in/cpa-grace-muinde-a06987163/" target="new"><span class="fa fa-linkedin"></span> </a>

                    </div>
                    </div>
            </div>
       </div>
    </div>
</div>

<div class="modal fade doreen" tabindex="-2" role="dialog" aria-labelledby="doreen" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content qxp-login">
            <div class="container">
                <div class="row">
                    {{-- <span data-dismiss="modal" class="pull-right">x</span> --}}
                 </div>
                 <div class="row profile-modals">
                     <div class="col-md-5">
                        <img src="{{asset('images/profiles/doreen.jpeg')}}" alt="">
                     </div>
                     <div class="col-md-7">
                        <h3>Doreen Gakii Mpungu</h3>
                        <h4>Co-Founder</h4> 
                        <p>Doreen is a programmer turned software sales engineer serving as the current Managing Director of Systems Hub Limited. She previously headed the Sales and Commercial team at Systems Hub limited and prior to that was an Accounts Manager at Techno Brain Group driving sales targets worth millions in dollars.</p>
                        <a href="https://www.linkedin.com/in/doreen-gakii-970b2068/" target="new"><span class="fa fa-linkedin"></span> </a> 

                    </div>
                    </div>
            </div>
       </div>
    </div>
</div>

{{-- Sam modal --}}
<div class="modal fade sam" tabindex="-1" role="dialog" aria-labelledby="sam" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content qxp-login">
            <div class="container">
                <div class="row">
                    {{-- <span data-dismiss="modal" class="pull-right">x</span> --}}
                 </div>
                 <div class="row profile-modals">
                     <div class="col-md-5">
                        <img src="{{asset('images/profiles/sam.jpeg')}}" alt="">
                     </div>
                     <div class="col-md-7">
                        <h3>Sam Njau</h3>
                        <h4>Co-Founder</h4> 
                        <p>Sam is presently the Head of Operations and Maintenance at Adcare Ltd. With over a decade of experience in Designing, Implementing and Troubleshooting software and hardware solutions he provides Level 3 and Level 2 support for hardware and software manufacturers. Sam previously held the position of Installation Engineer at Icon Telesec Ltd.</p>
                        <a href="https://www.linkedin.com/in/sam-njau-9898b189/" target="new"><span class="fa fa-linkedin"></span> </a> 

                    </div>
                    </div>
            </div>
       </div>
    </div>
</div>
@endsection
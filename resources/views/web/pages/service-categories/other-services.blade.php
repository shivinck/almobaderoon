@extends('layouts.web')

@section('title', 'Other Services - Almobaderoon Consulting')
@section('description', 'ESR compliance, customs, PRO services, and company formation in the UAE')

@section('content')
<div class="welcomeabout-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="welcomeaboiut2 text-center">
                <h1 class="font-lora font-60 lineh-64 weight-500 margin-b24">Other Services</h1>
                <p class="font-20 weight-500 font-ks lineh-20"><a href="/" class="font-dark">Home</a><span><i class="fa-solid fa-angle-right"></i></span>Other Services</p>
            </div>
        </div>
    </div>
</div>

<div class="service3-section-area section-padding5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="service3-header text-center margin-b60">
                    <h1 class="font-lora font-40 lineh-50 weight-600 color-29 margin-b20">Additional Business Support Services</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30">Beyond accounting and tax, we offer a range of essential business services including ESR compliance, customs code registration, PRO and management consultancy, and company formation to support your complete business journey in the UAE.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="service3-boxarea margin-b30 bgservice2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service3-text2">
                                <a href="{{ url('services/other-services/esr-fiu-goaml-compliance') }}">
                                    <h1 class="font-lora font-22 lineh-24 color-29 weight-600 margin-b">ESR, FIU & GoAML Compliance</h1>
                                </a>
                                <p class="font-ks font-16 lineh-26 weight-500 color-30">Complete Economic Substance Regulations, FIU reporting, and GoAML compliance services.</p>
                                <a href="{{ url('services/other-services/esr-fiu-goaml-compliance') }}" class="font-ks font-16 lineh-16 color-29 weight-700 margin-t d-inline-block laearnmore2">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="service3-imag1">
                                <img src="https://html.vikinglab.agency/consult/assets/images/sectionimg/servicev1img4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="service3-boxarea margin-b30 bgservice2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service3-text2">
                                <a href="{{ url('services/other-services/customs-code-services') }}">
                                    <h1 class="font-lora font-22 lineh-24 color-29 weight-600 margin-b">Customs Code Services</h1>
                                </a>
                                <p class="font-ks font-16 lineh-26 weight-500 color-30">Customs code registration and classification services for import and export operations.</p>
                                <a href="{{ url('services/other-services/customs-code-services') }}" class="font-ks font-16 lineh-16 color-29 weight-700 margin-t d-inline-block laearnmore2">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="service3-imag1">
                                <img src="https://html.vikinglab.agency/consult/assets/images/sectionimg/servicev1img1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="service3-boxarea margin-b30 bgservice2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service3-text2">
                                <a href="{{ url('services/other-services/pro-management-consultancy') }}">
                                    <h1 class="font-lora font-22 lineh-24 color-29 weight-600 margin-b">PRO & Management Consultancy</h1>
                                </a>
                                <p class="font-ks font-16 lineh-26 weight-500 color-30">Public relations officer services and strategic management consultancy for your business operations.</p>
                                <a href="{{ url('services/other-services/pro-management-consultancy') }}" class="font-ks font-16 lineh-16 color-29 weight-700 margin-t d-inline-block laearnmore2">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="service3-imag1">
                                <img src="https://html.vikinglab.agency/consult/assets/images/sectionimg/servicev1img2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="service3-boxarea margin-b30 bgservice2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service3-text2">
                                <a href="{{ url('services/other-services/company-formation-business-services') }}">
                                    <h1 class="font-lora font-22 lineh-24 color-29 weight-600 margin-b">Company Formation & Business Services</h1>
                                </a>
                                <p class="font-ks font-16 lineh-26 weight-500 color-30">End-to-end company formation and business setup services across mainland and free zones.</p>
                                <a href="{{ url('services/other-services/company-formation-business-services') }}" class="font-ks font-16 lineh-16 color-29 weight-700 margin-t d-inline-block laearnmore2">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="service3-imag1">
                                <img src="https://html.vikinglab.agency/consult/assets/images/sectionimg/servicev1img3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta5-section-area section-padding4">
    <img src="https://html.vikinglab.agency/consult/assets/images/elementor/elementor72.png" alt="" class="elementors72">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="cta5-auhtor6-area">
                    <h1 class="font-lora font-48 lineh-52 color weight-600 margin-b text-capitalize">Need help with business setup or compliance?</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-21">Our team provides comprehensive support for company formation, compliance, and government services in the UAE.</p>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="cta5-btn5-sexction">
                    <a href="{{ url('schedule-consulation') }}" class="theme6-btn6 bakgrnd5 font-ks lineh-16 weight-700 color font-16">Schedule Consultation <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    <a href="{{ url('contact') }}" class="theme6-btn6 backgrnd6 font-ks lineh-16 weight-700 color-29 font-16">Contact Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
    <img src="https://html.vikinglab.agency/consult/assets/images/elementor/elementor72.png" alt="" class="elementors73">
</div>
@endsection

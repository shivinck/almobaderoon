@extends('layouts.web')

@section('title', 'ICV Certification - Almobaderoon Consulting')
@section('description', 'ICV certification and optimization services for UAE businesses')

@section('content')
<div class="welcomeabout-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="welcomeaboiut2 text-center">
                <h1 class="font-lora font-60 lineh-64 weight-500 margin-b24">ICV Certification</h1>
                <p class="font-20 weight-500 font-ks lineh-20"><a href="/" class="font-dark">Home</a><span><i class="fa-solid fa-angle-right"></i></span>ICV Certification</p>
            </div>
        </div>
    </div>
</div>

<div class="service3-section-area section-padding5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="service3-header text-center margin-b60">
                    <h1 class="font-lora font-40 lineh-50 weight-600 color-29 margin-b20">In-Country Value Certification & Optimization</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30">Maximize your ICV score and unlock opportunities with UAE government and semi-government contracts. Our experts guide you through the Unified ICV Program requirements and implement strategies to optimize your In-Country Value points for competitive advantage.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="service3-boxarea margin-b30 bgservice2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service3-text2">
                                <a href="{{ url('services/icv-certification/unified-icv-program') }}">
                                    <h1 class="font-lora font-22 lineh-24 color-29 weight-600 margin-b">Unified ICV Program</h1>
                                </a>
                                <p class="font-ks font-16 lineh-26 weight-500 color-30">Complete support for ICV certificate issuance under the UAE Unified ICV Program framework.</p>
                                <a href="{{ url('services/icv-certification/unified-icv-program') }}" class="font-ks font-16 lineh-16 color-29 weight-700 margin-t d-inline-block laearnmore2">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
                                <a href="{{ url('services/icv-certification/icv-point-optimization-program') }}">
                                    <h1 class="font-lora font-22 lineh-24 color-29 weight-600 margin-b">ICV Point Optimization Program</h1>
                                </a>
                                <p class="font-ks font-16 lineh-26 weight-500 color-30">Strategic optimization of your ICV score through targeted initiatives to maximize your points.</p>
                                <a href="{{ url('services/icv-certification/icv-point-optimization-program') }}" class="font-ks font-16 lineh-16 color-29 weight-700 margin-t d-inline-block laearnmore2">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
        </div>
    </div>
</div>

<div class="cta5-section-area section-padding4">
    <img src="https://html.vikinglab.agency/consult/assets/images/elementor/elementor72.png" alt="" class="elementors72">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="cta5-auhtor6-area">
                    <h1 class="font-lora font-48 lineh-52 color weight-600 margin-b text-capitalize">Boost your ICV score and win more contracts</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-21">Our ICV specialists help you achieve the highest possible score to secure government and semi-government contracts.</p>
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

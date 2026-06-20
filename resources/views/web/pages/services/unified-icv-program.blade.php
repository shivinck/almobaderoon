@extends('layouts.web')

@section('title', 'Unified ICV Program - Almobaderoon Consulting')
@section('description', 'Expert guidance on UAE In-Country Value certification. Navigate ICV requirements, win government contracts, and demonstrate economic contribution to the UAE.')

@section('content')
<div class="welcomeabout-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="welcomeaboiut2 text-center">
                <h1 class="font-lora font-60 lineh-64 weight-500 margin-b24">Unified ICV Program</h1>
                <p class="font-20 weight-500 font-ks lineh-20"><a href="/" class="font-dark">Home</a><span><i class="fa-solid fa-angle-right"></i></span>
                 <a href="{{ url('service/icv-certification') }}" class="font-dark">ICV Certification</a><span><i class="fa-solid fa-angle-right"></i></span>Unified ICV Program</p>
            </div>
        </div>
    </div>
</div>
<div class="serviceleft-section-area section-padding5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="serviceour-area">
                    <h1 class="font-lora font-24 lineh-24 weight-600 color-29 margin-b24">ICV Certification</h1>
                    <div class="singlepalnning-area margin-b20">
                        <a href="{{ url('services/icv-certification/unified-icv-program') }}" class="font-18 font-ks lineh-18 weight-600 color-29 ts">Unified ICV Program</a>
                        <span><i class="fa-solid fa-angle-right ts"></i></span>
                    </div>
                    <div class="singlepalnning-area margin-b20">
                        <a href="{{ url('services/icv-certification/icv-point-optimization-program') }}" class="font-18 font-ks lineh-18 weight-600 color-29 ts">ICV Point Optimization Program</a>
                        <span><i class="fa-solid fa-angle-right ts"></i></span>
                    </div>
                </div>
                <div class="needed-section">
                    <h1 class="font-lora font-24 lineh-30 weight-600 color-29 margin-b24">If You Need Any Help Contact With Us</h1>
                    <a href="tel:00971506956500" class="font-16 weight-700 color fon-ks lineh-16"><img src="https://html.vikinglab.agency/consult/assets/images/icons/phone9.svg" alt="">+971 50 695 6500</a>
                </div>
                <div class="quito-contact">
                    <h1 class="font-24 lineh-24 weight-600 color-29 font-lora margin-b20">Get A Free Quote</h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="quitoinput"><input type="text" placeholder="Your Name"></div>
                            <div class="quitoinput"><input type="email" placeholder="Email Address"></div>
                            <div class="quitoinput"><input type="number" placeholder="Phone Number"></div>
                            <div class="quitoinput"><textarea cols="30" rows="10" placeholder="Your Message"></textarea></div>
                            <button type="submit" class="quitobtn font-ks font-16 lineh-16 weight-700 color">Submit Now <span><i class="fa-solid fa-arrow-right"></i></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="serviceauthior-area">
                    <img src="https://html.vikinglab.agency/consult/assets/images/sectionimg/servicedeailsimg1.png" alt="">
                    <h1 class="font-lora font-40 lineh-50 weight-600 color-29 margin-b20 margin-t28">UAE Unified In-Country Value Program</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30 margin-b20">The In-Country Value (ICV) program is a strategic initiative by the UAE government designed to boost economic activity, stimulate GDP growth, and create opportunities for Emirati talent within the private sector. Under the Unified ICV framework, companies supplying goods and services to government entities and major national companies like ADNOC, Emirates Steel, and various federal procurement bodies must obtain ICV certification to qualify for contract awards. The ICV certificate measures a company's contribution to the UAE economy based on specific metrics including local procurement, Emiratization, investment in the country, and local manufacturing.</p>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30">Almobaderoon Consulting provides comprehensive ICV certification services that guide businesses through the entire process—from initial eligibility assessment to certificate issuance by approved Certifying Bodies. Our ICV specialists understand the methodology, calculation frameworks, and documentation requirements needed to obtain certification efficiently. We work with businesses across all sectors including oil and gas, construction, technology, professional services, and manufacturing to ensure they meet ICV requirements and position themselves competitively for government procurement opportunities.</p>
                    <div class="border30"></div>
                    <h1 class="font-lora font-40 lineh-50 weight-600 color-29 margin-b20">How the ICV Program Works</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30">The ICV certification process involves calculating your company's economic contribution to the UAE across defined categories. Key metrics include the percentage of goods and services procured locally, the number of UAE Nationals employed, investments made within the country, and the extent of local manufacturing or value-addition. An approved Certifying Body reviews your financial data, payroll records, procurement documentation, and investment evidence to calculate your ICV score. This score is then issued on an official ICV certificate valid for one year, which procurement entities use as a weighted criterion in their tender evaluation processes.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="approach-area margin-t32">
                                <div class="approach-img">
                                    <img src="https://html.vikinglab.agency/consult/assets/images/icons/stragig1.svg" alt="" class="approahimages ts">
                                </div>
                                <div class="approach-text">
                                    <a href="#" class="font-lora font-20 weight-600 color-29 margin-b ts d-inline-block">Certification Process</a>
                                    <p class="fontks font-16 lineh-26 weight-500 color-30 ts">End-to-end support through the ICV certification journey including data gathering, documentation preparation, score calculation, and coordination with approved Certifying Bodies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="approach-area margin-t32">
                                <div class="approach-img">
                                    <img src="https://html.vikinglab.agency/consult/assets/images/icons/approach1.svg" alt="" class="approahimages ts">
                                </div>
                                <div class="approach-text">
                                    <a href="#" class="font-lora font-20 weight-600 color-29 margin-b ts d-inline-block">Contract Eligibility</a>
                                    <p class="fontks font-16 lineh-26 weight-500 color-30 ts">ICV certification opens doors to government and semi-government contracts where ICV scores carry significant weight in supplier evaluation and tender award decisions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border30"></div>
                    <h1 class="font-lora font-40 lineh-50 weight-600 color-29 margin-b20 margin-t28">Our ICV Certification Services Include</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30 margin-b20">Our comprehensive ICV services cover initial eligibility assessment, ICV score pre-calculation and gap analysis, financial data compilation and verification, procurement spend categorization (local vs. international), Emiratization documentation and workforce analysis, investment evidence compilation, coordination with approved Certifying Bodies, application submission and follow-up, certificate renewal management, and advisory on maintaining or improving your ICV score year over year.</p>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30">With Almobaderoon as your ICV partner, you gain access to specialists who understand the nuances of the scoring methodology and can identify legitimate opportunities to maximize your ICV contribution. We ensure accurate data presentation, proper documentation, and timely submissions so your business maintains uninterrupted access to government procurement opportunities. Our ongoing support means your ICV certification stays current and your score reflects your true economic contribution to the UAE.</p>
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
                    <h1 class="font-lora font-48 lineh-52 color weight-600 margin-b text-capitalize">Get Your ICV Certificate Today</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-21">Unlock government contract opportunities with professional ICV certification support. Our experts guide you through every step of the process.</p>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="cta5-btn5-sexction">
                    <a href="{{ url('contact') }}" class="theme6-btn6 bakgrnd5 font-ks lineh-16 weight-700 color font-16">Get ICV Certified <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    <a href="{{ url('contact') }}" class="theme6-btn6 backgrnd6 font-ks lineh-16 weight-700 color-29 font-16">Contact Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
    <img src="https://html.vikinglab.agency/consult/assets/images/elementor/elementor72.png" alt="" class="elementors73">
</div>
@endsection

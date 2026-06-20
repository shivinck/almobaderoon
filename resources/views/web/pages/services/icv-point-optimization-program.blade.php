@extends('layouts.web')

@section('title', 'ICV Point Optimization Program - Almobaderoon Consulting')
@section('description', 'Maximize your ICV score with strategic optimization. Improve local spend, Emiratization, supply chain planning, and gain competitive advantage in UAE government procurement.')

@section('content')
<div class="welcomeabout-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="welcomeaboiut2 text-center">
                <h1 class="font-lora font-60 lineh-64 weight-500 margin-b24">ICV Point Optimization Program</h1>
                <p class="font-20 weight-500 font-ks lineh-20"><a href="/" class="font-dark">Home</a><span><i class="fa-solid fa-angle-right"></i></span>
                 <a href="{{ url('service/icv-certification') }}" class="font-dark">ICV Certification</a><span><i class="fa-solid fa-angle-right"></i></span>ICV Point Optimization Program</p>
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
                    <h1 class="font-lora font-40 lineh-50 weight-600 color-29 margin-b20 margin-t28">Strategic ICV Score Optimization</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30 margin-b20">While obtaining an ICV certificate is the first step, maximizing your ICV score is what truly differentiates your business in government procurement competitions. A higher ICV score translates directly into competitive advantage—procurement entities assign significant weight to ICV scores when evaluating tenders, meaning the difference between a 40% and 60% score can determine whether you win or lose a major contract. Our ICV Point Optimization Program takes a strategic approach to improving your score through targeted interventions across all scoring categories.</p>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30">Almobaderoon Consulting's optimization program goes beyond basic certification to develop actionable strategies that genuinely increase your economic contribution to the UAE while boosting your competitive position. We analyze your current operations, identify score improvement opportunities, and implement changes that deliver measurable ICV score increases. Our approach considers both quick wins and long-term structural improvements, creating a roadmap that aligns ICV optimization with your broader business strategy and growth objectives.</p>
                    <div class="border30"></div>
                    <h1 class="font-lora font-40 lineh-50 weight-600 color-29 margin-b20">Key Areas for Score Improvement</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30">ICV scores are calculated across multiple weighted categories, each offering distinct optimization potential. Local procurement spend carries significant weight—shifting purchases from international to UAE-based suppliers with valid ICV certificates can substantially increase your score. Emiratization through hiring and developing UAE National talent contributes meaningfully to the calculation. Investment in UAE-based infrastructure, technology, and capabilities demonstrates long-term commitment. Supply chain localization and local manufacturing or value-addition activities further strengthen your position. Our experts identify which categories offer the greatest improvement potential for your specific business.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="approach-area margin-t32">
                                <div class="approach-img">
                                    <img src="https://html.vikinglab.agency/consult/assets/images/icons/stragig1.svg" alt="" class="approahimages ts">
                                </div>
                                <div class="approach-text">
                                    <a href="#" class="font-lora font-20 weight-600 color-29 margin-b ts d-inline-block">Supply Chain Strategy</a>
                                    <p class="fontks font-16 lineh-26 weight-500 color-30 ts">Restructure procurement to maximize local spend by identifying ICV-certified UAE suppliers, localizing supply chains, and optimizing vendor selection for ICV impact.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="approach-area margin-t32">
                                <div class="approach-img">
                                    <img src="https://html.vikinglab.agency/consult/assets/images/icons/approach1.svg" alt="" class="approahimages ts">
                                </div>
                                <div class="approach-text">
                                    <a href="#" class="font-lora font-20 weight-600 color-29 margin-b ts d-inline-block">Emiratization Planning</a>
                                    <p class="fontks font-16 lineh-26 weight-500 color-30 ts">Develop meaningful Emiratization strategies that increase your workforce contribution score through targeted recruitment, training programs, and career development for UAE Nationals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border30"></div>
                    <h1 class="font-lora font-40 lineh-50 weight-600 color-29 margin-b20 margin-t28">Our Optimization Program Includes</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30 margin-b20">Our ICV Point Optimization Program delivers a comprehensive approach including detailed current score analysis and benchmarking against industry peers, category-by-category improvement opportunity assessment, local supplier identification and procurement restructuring plans, Emiratization strategy development and implementation support, investment planning for maximum ICV impact, supply chain localization roadmap, score projection modelling for planned interventions, implementation timeline with milestone tracking, and ongoing advisory to sustain and improve scores across certification cycles.</p>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30">Companies that invest in ICV optimization consistently outperform competitors in government tender evaluations. Our clients have achieved score improvements of 15-30 percentage points through strategic interventions that also deliver genuine business benefits—stronger local supplier relationships, a more diverse workforce, and deeper roots in the UAE economy. With Almobaderoon's optimization program, your ICV score becomes a strategic asset that drives contract wins and positions your business as a preferred partner for government and semi-government entities.</p>
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
                    <h1 class="font-lora font-48 lineh-52 color weight-600 margin-b text-capitalize">Maximize Your ICV Score Today</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-21">Gain a competitive edge in government procurement with a higher ICV score. Our optimization experts develop strategies tailored to your business.</p>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="cta5-btn5-sexction">
                    <a href="{{ url('contact') }}" class="theme6-btn6 bakgrnd5 font-ks lineh-16 weight-700 color font-16">Optimize Your ICV <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    <a href="{{ url('contact') }}" class="theme6-btn6 backgrnd6 font-ks lineh-16 weight-700 color-29 font-16">Contact Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
    <img src="https://html.vikinglab.agency/consult/assets/images/elementor/elementor72.png" alt="" class="elementors73">
</div>
@endsection

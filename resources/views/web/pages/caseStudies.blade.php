@extends('layouts.web')

@section('title', 'Case Studies - Almobaderoon Consulting Services')
@section('description', 'Explore our case studies to see how we have helped UAE businesses with tax compliance, ISO certification, and financial management.')

@section('content')
<div class="welcomeabout-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="welcomeaboiut2 text-center">
                <h1 class="font-lora font-60 lineh-64 weight-500 margin-b24">Case Studies</h1>
                <p class="font-20 weight-500 font-ks lineh-20"><a href="{{ url('/') }}" class="font-dark">Home</a><span><i class="fa-solid fa-angle-right"></i></span>Case Studies</p>
            </div>
        </div>
    </div>
</div>
<div class="casestudy-section-area section-padding5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-portfolio singlecase">
                    <div class="portfolio-images singleportfolio">
                        <img src="{{ url('webstatic/assets/images/case-img1.png') }}" alt="VAT Penalty Reconsideration">
                    </div>
                    <div class="portfolio-textarea">
                        <h1 class="font-24 weight-600 font-outfit lineh-24 color-17 margin-b14"><a href="{{ url('case-study/vat-penalty-reconsideration-trading-company') }}" class="color-17">VAT Penalty Reconsideration for a Trading Company</a></h1>
                        <p class="font-outfit weight-400 color-17 lineh-26 font-16">A Dubai trading company faced AED 180,000 in FTA penalties due to late filings and incorrect input tax claims by their previous accountant.</p>
                        <div class="portfolio-visible-textarea margin-t">
                            <p class="font-outfit weight-400 color-17 lineh-26 font-16">Al Mobaderoon reviewed the case, identified procedural errors, prepared a comprehensive reconsideration request, and successfully reduced the penalties by 75% — saving the client AED 135,000.</p>
                            <a href="{{ url('case-study/vat-penalty-reconsideration-trading-company') }}" class="font-16 font-outfit weight-700 color lineh-26 ts text-uppercase margin-t30 d-inline-block learn-more1 learn-more">LEARN MORE <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="single-portfolio singlecase">
                    <div class="portfolio-images singleportfolio">
                        <img src="{{ url('webstatic/assets/images/case-img2.png') }}" alt="ISO 9001 Certification">
                    </div>
                    <div class="portfolio-textarea">
                        <h1 class="font-24 weight-600 font-outfit lineh-24 color-17 margin-b14"><a href="{{ url('case-study/iso-9001-certification-construction-firm') }}" class="color-17">ISO 9001 Certification for a Construction Firm</a></h1>
                        <p class="font-outfit weight-400 color-17 lineh-26 font-16">An Abu Dhabi construction company with 200+ employees needed ISO 9001 certification to qualify for government infrastructure projects.</p>
                        <div class="portfolio-visible-textarea margin-t">
                            <p class="font-outfit weight-400 color-17 lineh-26 font-16">Al Mobaderoon conducted gap analysis, developed QMS documentation, trained staff, and guided them through certification in just 4 months. The company won 3 government tenders worth AED 45 million within the first year.</p>
                            <a href="{{ url('case-study/iso-9001-certification-construction-firm') }}" class="font-16 font-outfit weight-700 color lineh-26 ts text-uppercase margin-t30 d-inline-block learn-more1 learn-more">LEARN MORE <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="single-portfolio singlecase">
                    <div class="portfolio-images singleportfolio">
                        <img src="{{ url('webstatic/assets/images/case-img3.png') }}" alt="Corporate Tax Setup">
                    </div>
                    <div class="portfolio-textarea">
                        <h1 class="font-24 weight-600 font-outfit lineh-24 color-17 margin-b14"><a href="{{ url('case-study/corporate-tax-setup-free-zone-tech-startup') }}" class="color-17">Corporate Tax Setup for a Free Zone Tech Startup</a></h1>
                        <p class="font-outfit weight-400 color-17 lineh-26 font-16">A DMCC-based technology startup with 50 employees needed to understand their Corporate Tax obligations as a Qualifying Free Zone Person.</p>
                        <div class="portfolio-visible-textarea margin-t">
                            <p class="font-outfit weight-400 color-17 lineh-26 font-16">Al Mobaderoon assessed their activities, set up CT-compliant accounting systems, and ensured they could legitimately benefit from the 0% CT rate — saving an estimated AED 320,000 annually.</p>
                            <a href="{{ url('case-study/corporate-tax-setup-free-zone-tech-startup') }}" class="font-16 font-outfit weight-700 color lineh-26 ts text-uppercase margin-t30 d-inline-block learn-more1 learn-more">LEARN MORE <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.web')

@section('title', 'Blogs - Almobaderoon Consulting Services')
@section('description', 'Explore our blogs for insights on UAE tax compliance, accounting best practices, ISO certifications, and business management tips.')

@section('content')
<div class="welcomeabout-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="welcomeaboiut2 text-center">
                <h1 class="font-lora font-60 lineh-64 weight-500 margin-b24">Blogs</h1>
                <p class="font-20 weight-500 font-ks lineh-20"><a href="{{ url('/') }}" class="font-dark">Home</a><span><i class="fa-solid fa-angle-right"></i></span>Blogs</p>
            </div>
        </div>
    </div>
</div>
<div class="cloginner-3-sevtion-area section-padding5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog1-boxarea">
                    <div class="blog1-img">
                        <img src="{{ url('webstatic/assets/images/blog4.png') }}" alt="Understanding UAE Corporate Tax">
                    </div>
                    <div class="blog1-padding">
                        <div class="blog1-text">
                            <img src="{{ url('webstatic/assets/images/vector1.png') }}" alt="">
                            <p class="font-ks font-16 weight-600 color-29 lineh-26">15 Jan 2024</p>
                        </div>
                        <a href="{{ url('blog/understanding-uae-corporate-tax') }}" class="font-lora font-20 lineh-30 weight-600 color-29 margin-b d-inline-block link-hover">Understanding UAE Corporate Tax: What Every Business Owner Needs to Know</a>
                        <p class="font-16 font-ks lineh-26 weight-500 color-26 margin-b">A comprehensive guide to UAE Corporate Tax — rates, exemptions, registration, and compliance requirements.</p>
                        <a href="{{ url('blog/understanding-uae-corporate-tax') }}" class="font-ks font-16 lineh-16 color-29 weight-700 d-inline-block laearnmore2 bloginnerhover">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog1-boxarea">
                    <div class="blog1-img">
                        <img src="{{ url('webstatic/assets/images/blog5.png') }}" alt="VAT Compliance">
                    </div>
                    <div class="blog1-padding">
                        <div class="blog1-text">
                            <img src="{{ url('webstatic/assets/images/vector1.png') }}" alt="">
                            <p class="font-ks font-16 weight-600 color-29 lineh-26">10 Mar 2024</p>
                        </div>
                        <a href="{{ url('blog/why-your-business-needs-vat-compliance') }}" class="font-lora font-20 lineh-30 weight-600 color-29 margin-b d-inline-block link-hover">Why Your Business Needs VAT Compliance in the UAE</a>
                        <p class="font-16 font-ks lineh-26 weight-500 color-26 margin-b">Learn why VAT compliance is critical, the cost of penalties, and best practices for UAE businesses.</p>
                        <a href="{{ url('blog/why-your-business-needs-vat-compliance') }}" class="font-ks font-16 lineh-16 color-29 weight-700 d-inline-block laearnmore2 bloginnerhover">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog1-boxarea">
                    <div class="blog1-img">
                        <img src="{{ url('webstatic/assets/images/blog6.png') }}" alt="ISO Certification">
                    </div>
                    <div class="blog1-padding">
                        <div class="blog1-text">
                            <img src="{{ url('webstatic/assets/images/vector1.png') }}" alt="">
                            <p class="font-ks font-16 weight-600 color-29 lineh-26">22 May 2024</p>
                        </div>
                        <a href="{{ url('blog/benefits-of-iso-certification-for-uae-businesses') }}" class="font-lora font-20 lineh-30 weight-600 color-29 margin-b d-inline-block link-hover">Benefits of ISO Certification for UAE Businesses</a>
                        <p class="font-16 font-ks lineh-26 weight-500 color-26 margin-b">How ISO certification helps win contracts, improve operations, and build customer confidence.</p>
                        <a href="{{ url('blog/benefits-of-iso-certification-for-uae-businesses') }}" class="font-ks font-16 lineh-16 color-29 weight-700 d-inline-block laearnmore2 bloginnerhover">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
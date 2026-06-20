@extends('layouts.web')

@section('title', 'Accounting & Book Keeping Services - Almobaderoon Consulting')
@section('description', 'Comprehensive bookkeeping and accounting services for UAE businesses')

@section('content')
<div class="welcomeabout-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="welcomeaboiut2 text-center">
                <h1 class="font-lora font-60 lineh-64 weight-500 margin-b24">Accounting & Book Keeping Services</h1>
                <p class="font-20 weight-500 font-ks lineh-20"><a href="/" class="font-dark">Home</a><span><i class="fa-solid fa-angle-right"></i></span>Accounting & Book Keeping Services</p>
            </div>
        </div>
    </div>
</div>

<div class="service3-section-area section-padding5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="service3-header text-center margin-b60">
                    <h1 class="font-lora font-40 lineh-50 weight-600 color-29 margin-b20">Professional Bookkeeping & Financial Management</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30">Keep your financial records organized and up-to-date with our comprehensive bookkeeping and accounting services. We provide expert consultancy, detailed financial statements, and insightful analysis to help you make informed business decisions.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="service3-boxarea margin-b30 bgservice2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service3-text2">
                                <a href="{{ url('services/accounting-bookkeeping-services/accounting-consultancy') }}">
                                    <h1 class="font-lora font-22 lineh-24 color-29 weight-600 margin-b">Accounting Consultancy</h1>
                                </a>
                                <p class="font-ks font-16 lineh-26 weight-500 color-30">Expert guidance on accounting best practices, systems, and process improvements for your business.</p>
                                <a href="{{ url('services/accounting-bookkeeping-services/accounting-consultancy') }}" class="font-ks font-16 lineh-16 color-29 weight-700 margin-t d-inline-block laearnmore2">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
                                <a href="{{ url('services/accounting-bookkeeping-services/financial-statements-pl-balance-sheet') }}">
                                    <h1 class="font-lora font-22 lineh-24 color-29 weight-600 margin-b">Financial Statements (P&L, Balance Sheet)</h1>
                                </a>
                                <p class="font-ks font-16 lineh-26 weight-500 color-30">Preparation of accurate profit & loss statements and balance sheets for regulatory compliance.</p>
                                <a href="{{ url('services/accounting-bookkeeping-services/financial-statements-pl-balance-sheet') }}" class="font-ks font-16 lineh-16 color-29 weight-700 margin-t d-inline-block laearnmore2">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
            <div class="col-lg-6 col-md-6">
                <div class="service3-boxarea margin-b30 bgservice2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service3-text2">
                                <a href="{{ url('services/accounting-bookkeeping-services/ar-ap-aging-reports') }}">
                                    <h1 class="font-lora font-22 lineh-24 color-29 weight-600 margin-b">AR/AP & Aging Reports</h1>
                                </a>
                                <p class="font-ks font-16 lineh-26 weight-500 color-30">Detailed accounts receivable and payable tracking with aging analysis for better cash flow management.</p>
                                <a href="{{ url('services/accounting-bookkeeping-services/ar-ap-aging-reports') }}" class="font-ks font-16 lineh-16 color-29 weight-700 margin-t d-inline-block laearnmore2">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
                                <a href="{{ url('services/accounting-bookkeeping-services/financial-analysis-ratios-break-even') }}">
                                    <h1 class="font-lora font-22 lineh-24 color-29 weight-600 margin-b">Financial Analysis (Ratios, Break-even)</h1>
                                </a>
                                <p class="font-ks font-16 lineh-26 weight-500 color-30">In-depth financial ratio analysis and break-even calculations to guide strategic business decisions.</p>
                                <a href="{{ url('services/accounting-bookkeeping-services/financial-analysis-ratios-break-even') }}" class="font-ks font-16 lineh-16 color-29 weight-700 margin-t d-inline-block laearnmore2">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
        </div>
    </div>
</div>

<div class="cta5-section-area section-padding4">
    <img src="https://html.vikinglab.agency/consult/assets/images/elementor/elementor72.png" alt="" class="elementors72">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="cta5-auhtor6-area">
                    <h1 class="font-lora font-48 lineh-52 color weight-600 margin-b text-capitalize">Get your books in order today</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-21">Our bookkeeping experts will streamline your financial records and provide clarity on your business performance.</p>
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

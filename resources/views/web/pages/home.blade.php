@extends('layouts.web')

@section('title', 'Home - Almobaderoon Consulting Services')
@section('description', 'Discover expert tax and accounting solutions with Almobaderoon Consulting Services. We provide comprehensive services to help your business stay compliant and thrive. From VAT compliance to audits and training, our team ensures your success. Schedule a consultation today!')



@section('content')
    <div class="welcome2-section-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="welcome2-content">
                        <img src="{{ url('/webstatic/assets/images/welcome-element.png') }}" alt="" class="welcome-element">
                    </div>
                    <div class="welcome2-textarea" data-aos="fade-right" data-aos-duration="1000">
                        
                        <span class="maximum font-outfit font-16 lineh-16 color-12 weight-500 margin-b24 d-inline-block">Stay Compliant and Grow Your Business</span>
                        <h1 class="font-outfit font-56 weight-600 lineh-64 color-17 margin-b18">Expert Tax & Accounting <span class="succes">Solutions</span> for Your Success</h1>
                        <p class="font-16 lineh-26 color-17 weight-400 font-outfit">We provide comprehensive accounting, tax, and business consulting services tailored to help your business achieve financial stability and sustainable growth. From VAT compliance to audits and training, our expert team ensures your business stays compliant and thrives.</p>
                        <div class="theme-btn4 margin-t32 d-inline-block margn-left" data-aos="fade-up" data-aos-duration="1200">
                            <a href="{{ url('schedule-consulation') }}" class="theme-btn5 font-outfit font-16  weight-700 ">Schedule a Consultation <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6" data-aos="zoom-out" data-aos-duration="1200">
                    <div class="welcome2-images-area">
                        <div class="welcome-imgs-area">
                            <div class="main-img">
                                <img src="{{ url('/webstatic/assets/images/welcome-img-2.png') }}" alt="" class="main-imgs">
                                <img src="{{ url('/webstatic/assets/images/ecommers-img.png') }}" alt="" class="ecommer aniamtion-key-2" data-aos="fade-left" data-aos-duration="1400">
                            </div>
                            <img src="{{ url('/webstatic/assets/images/elementor7.png') }}" alt="" class="elementor-8 aniamtion-key-1">
                            <img src="{{ url('/webstatic/assets/images/elementor8.png') }}" alt="" class="elementor9 aniamtion-key-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ url('/webstatic/assets/images/elementor6.png') }}" alt="" class="elementor-6">
    </div>



    <div class="about2-section-area section-padding5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about2-author-images">
                        <div class="about2-scetion-images" data-aos="zoom-out" data-aos-duration="1200">
                            <img src="{{ url('/webstatic/assets/images/about3-img.png') }}" alt="">
                        </div>
                        <div class="row">
                            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1400">
                                <div class="about-2-authr1">
                                    <img src="{{ url('/webstatic/assets/images/about4-img.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1600">
                                <div class="about-2-authr1">
                                    <img src="{{ url('/webstatic/assets/images/about5-img.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                    <div class="about-2-textarea">
                        <h1 class="font-outfit font-44 weight-600 lineh-52 color-17 margin-b20" data-aos="fade-left" data-aos-duration="1000">Maximize your potential with expert consultation.</h1>
                        <div class="pera-background" data-aos="fade-left" data-aos-duration="1200">
                            <p class="font-outfit font-16 lineh-26 color-17 weight-500">Ready to experience the benefits of partnering with Al Mobaderoon? Schedule a free consultation with our experienced team today and discover how our expertise can drive growth, optimize operations, and unlock your business's full potential.</p>
                        </div>
                        <p class="font-outfit font-16 lineh-26 colorp weight-400">Experience: Our team brings over 20 years of experience across various industries, allowing us to offer insights and strategies that are tailored to your specific business needs. Results-Driven Approach: We are committed to delivering tangible results and measurable outcomes for our clients.</p>
                        <div class="theme-btn4 margin-t32 d-inline-block margn-left" data-aos="fade-up" data-aos-duration="1400">
                            <a href="{{ url('/about') }}" class="theme-btn5 font-outfit font-16  weight-700 ">Explore services <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="service2-section-areas section-padding8">
        <img src="/webstatic/assets/images/elementor9.png" alt="" class="elementoe5">
        <div class="container">
            <div class="row align-items-center margin-b60">
                <div class="col-lg-6">
                    <div class="lawprovide-textarea">
                        <span class="maximum font-outfit font-16 lineh-16 color-12 weight-500 margin-b24 d-inline-block">Meet Our Visionary</span>
                        <h1 class="font-outfit font-44 weight-600 lineh-52 color-17 margin-b20">Nizamudeen K.M</h1>
                        <p class="font-outfit font-18 lineh-18 weight-600 color-17 margin-b20">B.com, MBA Finance — Managing Director</p>
                        <p class="font-outfit font-16 weight-400 lineh-26 margin-b20 color-17">Mr. Nizamudeen is the Managing Director specializing in financial management of public and private institutions. He has more than 20 years of experience, most of which are concentrated in the field of directing financial operations, accounting, and tax activities in UAE.</p>
                        <p class="font-outfit font-16 weight-400 lineh-26 color-17">Mr. Nizamudeen has a proven track record in the field of financial planning and analysis, development of processes, policies, and systems ensuring integral development, optimization, and effective financial accounting specialties.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about3-images1 text-center">
                        <img src="https://almobaderoon.com/assets/img/pic.jpg" alt="Nizamudeen K.M - Managing Director" style="border-radius: 10px; max-width: 400px; width: 100%;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" data-aos="fade-down" data-aos-duration="800">
                    <div class="service-haeder-text text-center margin-b60">
                        <span class="maximum font-outfit font-16 lineh-16 color-12 weight-500 margin-b20 d-inline-block">Our Services</span>
                        <h1 class="font-outfit font-44 weight-600 lineh-52 color-17 margin-b20">Comprehensive Accounting & Tax Services</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="1000">
                    <div class="service-after-before">
                        <div class="service2-icon">
                            <img src="{{ url('/webstatic/assets/images/icon2.svg') }}" alt="">
                        </div>

                        <a href="{{ url('service/accounting-bookkeeping-services') }}">
                            <h1 class="font-outfit font-22 weight-600 lineh-22 color-17 margin-b">Accounting & Bookkeeping Services</h1>
                        </a>
                        <p class="font-outfit font-16 lineh-26 weight-400 color-15">Professional accounting consultancy, financial statements, AR/AP management, and comprehensive financial analysis.</p>
                        <a href="{{ url('service/accounting-bookkeeping-services') }}" class="font-16 font-outfit weight-700 color-17 lineh-26 text-uppercase margin-t32 d-inline-block learn-more">LEARN MORE <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="1200">
                    <div class="service-after-before">
                        <div class="service2-icon">
                            <img src="{{ url('/webstatic/assets/images/icon1.svg') }}" alt="">
                        </div>

                        <a href="{{ url('service/vat-corporate-tax-services') }}">
                            <h1 class="font-outfit font-22 weight-600 lineh-22 color-17 margin-b">VAT & Corporate Tax Services</h1>
                        </a>
                        <p class="font-outfit font-16 lineh-26 weight-400 color-15">Tax consulting, VAT/CT registration, filing, assessment, penalty reconsideration, and tax refund processing.</p>
                        <a href="{{ url('service/vat-corporate-tax-services') }}" class="font-16 font-outfit weight-700 color-17 lineh-26 text-uppercase margin-t32 d-inline-block learn-more">LEARN MORE <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="1400">
                    <div class="service-after-before">
                        <div class="service2-icon">
                            <img src="{{ url('/webstatic/assets/images/icon3.svg') }}" alt="">
                        </div>

                        <a href="{{ url('service/audit-assurance') }}">
                            <h1 class="font-outfit font-22 weight-600 lineh-22 color-17 margin-b">Audit & Assurance</h1>
                        </a>
                        <p class="font-outfit font-16 lineh-26 weight-400 color-15">Financial, tax, and corporate audits, internal audit, cost audit, and business valuation services.</p>
                        <a href="{{ url('service/audit-assurance') }}" class="font-16 font-outfit weight-700 color-17 lineh-26 text-uppercase margin-t32 d-inline-block learn-more">LEARN MORE <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-easing="linear">
                    <div class="service-after-before">
                        <div class="service2-icon">
                            <img src="{{ url('/webstatic/assets/images/icon4.png') }}" alt="">
                        </div>

                        <a href="{{ url('service/practical-accounting-training') }}">
                            <h1 class="font-outfit font-22 weight-600 lineh-22 color-17 margin-b">Practical Accounting Training</h1>
                        </a>
                        <p class="font-outfit font-16 lineh-26 weight-400 color-15">Specialized courses in accounting and tax, software training, communication skills, and 1-month practical programs.</p>
                        <a href="{{ url('service/practical-accounting-training') }}" class="font-16 font-outfit weight-700 color-17 lineh-26 text-uppercase margin-t32 d-inline-block learn-more">LEARN MORE <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="service-after-before" data-aos="fade-up" data-aos-duration="1400" data-aos-easing="linear">
                        <div class="service2-icon">
                            <img src="{{ url('/webstatic/assets/images/icon5.png') }}" alt="">
                        </div>

                        <a href="{{ url('service/iso-certifications') }}">
                            <h1 class="font-outfit font-22 weight-600 lineh-22 color-17 margin-b">ISO Certifications</h1>
                        </a>
                        <p class="font-outfit font-16 lineh-26 weight-400 color-15">Complete ISO certification services including quality management, environmental, health & safety, and security standards.</p>
                        <a href="{{ url('service/iso-certifications') }}" class="font-16 font-outfit weight-700 color-17 lineh-26 text-uppercase margin-t32 d-inline-block learn-more">LEARN MORE <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1600" data-aos-easing="linear">
                    <div class="service-after-before">
                        <div class="service2-icon">
                            <img src="{{ url('/webstatic/assets/images/icon6.png') }}" alt="">
                        </div>

                        <a href="{{ url('service/other-services') }}">
                            <h1 class="font-outfit font-22 weight-600 lineh-22 color-17 margin-b">Management Consultancy</h1>
                        </a>
                        <p class="font-outfit font-16 lineh-26 weight-400 color-15">ESR/FIU compliance, customs code services, PRO management consultancy, and company formation services.</p>
                        <a href="{{ url('service/other-services') }}" class="font-16 font-outfit weight-700 color-17 lineh-26 text-uppercase margin-t32 d-inline-block learn-more">LEARN MORE <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-duration="1200">
                    <div class="theme-btn4  d-inline-block margin-left service-center">
                        <a href="{{ url('service/tax-accounting-services') }}" class="theme-btn5 font-outfit font-16  weight-700 margin-t32">View More Services <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ url('/webstatic/assets/images/elementor8.png') }}" alt="" class="elementor-7 aniamtion-key-2">
    </div>


    <div class="company-section-area section-padding5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                    <div class="company-progress-area">
                        <span class="maximum font-outfit font-16 lineh-16 color-12 weight-500 margin-b20 d-inline-block">Why Choose Us</span>
                        <h1 class="font-outfit font-44 weight-600 lineh-52 color-17 margin-b20">Over 20 years of expertise in tax accounting and management consultancy.</h1>
                        <p class="margin-b8">At Al Mobaderoon, we specialize in helping businesses achieve financial stability and compliance. Whether you're a startup or an established entity, our expert team provides tailored solutions.</p>
                        <div class="progress7 margin-b12">
                            <div class="bussibess-plan">
                                <span class="font-16 font-outfit lineh-16 color-17 weight-500 international1">Tax & Accounting</span>
                                <p class="font-16 font-outfit lineh-16 color-17 weight-500">98%</p>
                            </div>
                            <div class="progress-wrap3 progress3" data-progress-percent="98">
                                <div class="progress-bar3 progress3"></div>
                            </div>
                        </div>
                        <div class="bussibess-plan">
                            <span class="font-16 font-outfit lineh-16 color-17 weight-500 international1">Business Consulting</span>
                            <p class="font-16 font-outfit lineh-16 color-17 weight-500">96%</p>
                        </div>
                        <div class="progress-wrap3 progress3" data-progress-percent="96">
                            <div class="progress-bar3 progress3"></div>

                        </div>
                        <div class="theme-btn4 margin-t32 d-inline-block margn-left service-center" data-aos="fade-left" data-aos-duration="1200">
                            <a href="{{ url('/contact') }}" class="theme-btn5 font-outfit font-16  weight-700 margin-b12">Request a Quote <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="zoom-out" data-aos-duration="1000">
                    <div class="company-images">
                        <img src="{{ url('/webstatic/assets/images/company-img1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="counter2-section-area">
        <img src="{{ url('/webstatic/assets/images/elementor10.png') }}" alt="" class="elementor-10">
        <div class="container ">
            <div class="row">
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="countre2-boxarea text-center">
                        <div class="counter-box">
                            <h1 class="font-outfit font-44 lineh-52 color-17 weight-600"><span class="counter">20</span>+</h1>
                            <p class="font-outfit font-16 lineh-16 color-15 weight-400 margin-t">Years Experience</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="countre2-boxarea text-center">
                        <div class="counter-box">
                            <h1 class="font-outfit font-44 lineh-52 color-17 weight-600"><span class="counter">500</span>+</h1>
                            <p class="font-outfit font-16 lineh-16 color-15 weight-400 margin-t">Clients Served</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="countre2-boxarea text-center">
                        <div class="counter-box">
                            <h1 class="font-outfit font-44 lineh-52 color-17 weight-600"><span class="counter">50</span>+</h1>
                            <p class="font-outfit font-16 lineh-16 color-15 weight-400 margin-t">Services Offered</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1400">
                    <div class="countre2-boxarea text-center">
                        <div class="counter-box">
                            <h1 class="font-outfit font-44 lineh-52 color-17 weight-600"><span class="counter">100</span>%</h1>
                            <p class="font-outfit font-16 lineh-16 color-15 weight-400 margin-t">Client Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ url('/webstatic/assets/images/elementor8.png') }}" alt="" class="elementor-3 aniamtion-key-2">
    </div>



    <div class="client-section-area section-padding5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="animationdiv" data-aos="fade-left" data-aos-duration="1000">
                        <div class="client-author-area margin-b30">
                            <div class="client-icon">
                                <img src="/webstatic/assets/images/client1.svg" alt="">
                            </div>
                            <div class="client-main-pera">
                                <h1 class="font-24 lineh-26 weight-600 font-outfit color-17 margin-b14"><a href="{{ url('/about') }}" class="color-17">Understanding Your Business</a></h1>
                                <p class="font-outfit font-16 lineh-26 weight-400 color-22 ">We start by understanding your unique business activities, financial structure, and compliance requirements in the UAE.</p>
                            </div>
                        </div>
                    </div>

                    <div class="animationdiv" data-aos="fade-left" data-aos-duration="1200">
                        <div class="client-author-area margin-b30">
                            <div class="client-icon">
                                <img src="/webstatic/assets/images/client2.svg" alt="">
                            </div>
                            <div class="client-main-pera">
                                <h1 class="font-24 lineh-26 weight-600 font-outfit color-17 margin-b14"><a href="{{ url('/about') }}" class="color-17">Comprehensive Financial Analysis</a></h1>
                                <p class="font-outfit font-16 lineh-26 weight-400 color-22 ">Our experts conduct thorough analysis of your financial position, tax obligations, and identify areas for optimization.</p>
                            </div>
                        </div>
                    </div>


                    <div class="animationdiv" data-aos="fade-left" data-aos-duration="1400">
                        <div class="client-author-area">
                            <div class="client-icon">
                                <img src="/webstatic/assets/images/client3.svg" alt="">
                            </div>
                            <div class="client-main-pera">
                                <h1 class="font-24 lineh-26 weight-600 font-outfit color-17 margin-b14"><a href="{{ url('/about') }}" class="color-17 ts">Achieving Your Financial Goals</a></h1>
                                <p class="font-outfit font-16 lineh-26 weight-400 color-22 ">We implement tailored solutions that ensure compliance, optimize tax positions, and drive sustainable business growth.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="works-text-area">
                        <span class="maximum font-outfit font-16 lineh-16 color-12 weight-500 margin-b20 d-inline-block">How We Work</span>
                        <h1 class="font-outfit font-44 weight-600 lineh-52 color-17 margin-b24">Trusted partner for all your accounting, tax, and business consulting needs.</h1>
                        <p class="font-outfit font-16 lineh-26 weight-400 color-17 margin-b">With over 20 years of dedicated experience in the UAE market, Al Mobaderoon provides end-to-end financial management services. From VAT and Corporate Tax compliance to ISO certifications and company formation, we handle the complexities so you can focus on growing your business.</p>
                        <p class="font-outfit font-16 lineh-26 weight-400 color-17 margin-b">Our team of certified professionals brings deep expertise across tax accounting, audit & assurance, business consulting, and practical training. We are committed to building relationships based on performance, integrity, and customer satisfaction.</p>
                        <div class="theme-btn4 margin-t32 margn-left" data-aos="fade-right" data-aos-duration="1200">
                            <a href="{{ url('/schedule-consulation') }}" class="theme-btn5 font-outfit font-16  weight-700 ">Schedule a Consultation <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="case-study-scetion-area section-padding8">
        <img src="{{ url('/webstatic/assets/images/elementor8.png') }}" alt="" class="elementor-5 aniamtion-key-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-down" data-aos-duration="800">
                    <div class="case-study-header text-center margin-b60">
                        <span class="maximum font-outfit font-16 lineh-16 color-12 weight-500 margin-b20 d-inline-block">Case Study</span>
                        <h1 class="font-outfit font-44 weight-600 lineh-52 color-17">View our case study</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-portfolio singlecase">
                        <div class="portfolio-images singleportfolio">
                            <img src="{{ url('/webstatic/assets/images/case-img1.png') }}" alt="">
                        </div>
                        <div class="portfolio-textarea">
                            <h1 class="font-24 weight-600 font-outfit lineh-24 color-17 margin-b14"><a href="{{ url('/case-study/vat-penalty-reconsideration-trading-company') }}" class="color-17">VAT Penalty Reconsideration</a></h1>
                            <p class="font-outfit weight-400 color-17 lineh-26 font-16">Helped a Dubai trading company reduce AED 180,000 in FTA penalties by 75% through expert reconsideration.</p>
                            <div class="portfolio-visible-textarea margin-t">
                                <p class="font-outfit weight-400 color-17 lineh-26 font-16">We reviewed the case, identified procedural errors by the previous accountant, and prepared a comprehensive reconsideration request with supporting documentation.</p>
                                <a href="{{ url('/case-study/vat-penalty-reconsideration-trading-company') }}" class="font-16 font-outfit weight-700 color lineh-26 ts text-uppercase margin-t30 d-inline-block learn-more1 learn-more">LEARN MORE <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="single-portfolio singlecase">
                        <div class="portfolio-images singleportfolio">
                            <img src="{{ url('/webstatic/assets/images/case-img2.png') }}" alt="">
                        </div>
                        <div class="portfolio-textarea">
                            <h1 class="font-24 weight-600 font-outfit lineh-24 color-17 margin-b14"><a href="{{ url('/case-study/iso-9001-certification-construction-firm') }}" class="color-17">ISO 9001 Certification</a></h1>
                            <p class="font-outfit weight-400 color-17 lineh-26 font-16">Guided an Abu Dhabi construction firm to ISO 9001 certification in 4 months, enabling government tenders.</p>
                            <div class="portfolio-visible-textarea margin-t">
                                <p class="font-outfit weight-400 color-17 lineh-26 font-16">The company subsequently won 3 government tenders worth AED 45 million within the first year of certification.</p>
                                <a href="{{ url('/case-study/iso-9001-certification-construction-firm') }}" class="font-16 font-outfit weight-700 color lineh-26 ts text-uppercase margin-t30 d-inline-block learn-more1 learn-more">LEARN MORE <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-portfolio singlecase">
                        <div class="portfolio-images singleportfolio">
                            <img src="{{ url('/webstatic/assets/images/case-img3.png') }}" alt="">
                        </div>
                        <div class="portfolio-textarea">
                            <h1 class="font-24 weight-600 font-outfit lineh-24 color-17 margin-b14"><a href="{{ url('/case-study/corporate-tax-setup-free-zone-tech-startup') }}" class="color-17">Corporate Tax Setup</a></h1>
                            <p class="font-outfit weight-400 color-17 lineh-26 font-16">Helped a DMCC tech startup secure Qualifying Free Zone Person status, saving AED 320,000 annually.</p>
                            <div class="portfolio-visible-textarea margin-t">
                                <p class="font-outfit weight-400 color-17 lineh-26 font-16">We assessed their activities, set up CT-compliant accounting systems, and ensured they could legitimately benefit from the 0% CT rate.</p>
                                <a href="{{ url('/case-study/corporate-tax-setup-free-zone-tech-startup') }}" class="font-16 font-outfit weight-700 color lineh-26 ts text-uppercase margin-t30 d-inline-block learn-more1 learn-more">LEARN MORE <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <img src="{{ url('/webstatic/assets/images/elementor11.png') }}" alt="" class="elementor-11">
    </div>



    <div class="blog2-scetion-area section-padding5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-down" data-aos-duration="800">
                    <div class="blog2-textarea text-center margin-b60">
                        <span class="maximum font-outfit font-16 lineh-16 color-12 weight-500 margin-b20 d-inline-block">Our Blog</span>
                        <h1 class="font-outfit font-44 weight-600 lineh-52 color-17">Our latest news & blog</h1>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="zoom-out" data-aos-duration="1000">
                    <div class="blog2-author-area">
                        <div class="blog2-images">
                            <img src="{{ url('webstatic/assets/images/blog2-img.png') }}" alt="">
                        </div>

                        <div class="blog-auhtor2-text blog2-author-poition " data-aos="zoom-out" data-aos-duration="1400">
                            <div class="blog2-ahtuor2 blog-2ahthor">
                                <div class="blog-date-list margin-b">
                                    <img src="{{ url('/webstatic/assets/images/icons/daterange1.png') }}" alt="">
                                    <a href="#" class="font-16 lineh-16 font-outfit weight-500 color ts">15 Jan 2024</a>
                                </div>
                                <a href="{{ url('blog/understanding-uae-corporate-tax') }}" class="ts">
                                    <h1 class="font-20 font-outfit color lineh-20 weight-600 margin-b ts">Understanding UAE Corporate Tax: What Every Business Owner Needs to Know</h1>
                                </a>
                                <p class="font-16 font-outfit lineh-26 weight-400 color ts">A comprehensive guide to UAE Corporate Tax — rates, exemptions, registration requirements, and how to stay compliant.</p>
                                <a href="{{ url('blog/understanding-uae-corporate-tax') }}" class="font-16 font-outfit weight-700 color lineh-26 text-uppercase margin-t32 d-inline-block learn-more learn-more1 ts">LEARN MORE <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-auhtor2-text margin-b30" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="blog2-ahtuor2">
                            <div class="blog-date-list margin-b">
                                <img src="{{ url('/webstatic/assets/images/icons/daterane.png') }}" alt="" class="ts">
                                <a href="#" class="font-16 lineh-16 font-outfit weight-500 color-17 ts">10 Mar 2024</a>
                            </div>
                            <a href="{{ url('blog/why-your-business-needs-vat-compliance') }}">
                                <h1 class="font-20 font-outfit color-17 lineh-20 weight-600 margin-b14 ts">Why Your Business Needs VAT Compliance in the UAE</h1>
                            </a>
                            <p class="font-16 font-outfit lineh-26 weight-400 color-17 margin-b24 ts">Learn why VAT compliance is critical for UAE businesses, the cost of penalties, and best practices to protect your business.</p>
                            <a href="{{ url('blog/why-your-business-needs-vat-compliance') }}" class="font-16 font-outfit weight-700 color-17 ts lineh-26 text-uppercase d-inline-block learn-more">LEARN MORE <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>

                    <div class="blog-auhtor2-text " data-aos="zoom-in" data-aos-duration="1400">
                        <div class="blog2-ahtuor2">
                            <div class="blog-date-list margin-b">
                                <img src="{{ url('/webstatic/assets/images/icons/daterane.png') }}" alt="" class="ts">
                                <a href="#" class="font-16 lineh-16 font-outfit weight-500 color-17 ts">22 May 2024</a>
                            </div>
                            <a href="{{ url('blog/benefits-of-iso-certification-for-uae-businesses') }}">
                                <h1 class="font-20 font-outfit color-17 lineh-20 weight-600 margin-b14 ts">Benefits of ISO Certification for UAE Businesses</h1>
                            </a>
                            <p class="font-16 font-outfit lineh-26 weight-400 color-17 margin-b24 ts">How ISO certification helps win contracts, improve operations, and build customer confidence in the competitive UAE market.</p>
                            <a href="{{ url('blog/benefits-of-iso-certification-for-uae-businesses') }}" class="font-16 font-outfit weight-700 color-17 ts lineh-26 text-uppercase d-inline-block learn-more">LEARN MORE <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


<div class="contcat5-section-area section-padding5">
  <img src="{{ url('/webstatic/assets/images/elementor23.png') }}" alt="" class="elementor24">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
        <div class="contcat5-textarea5">
          <span class="about3span font-ks lineh-16 font-16 weight-600 color-29 d-inline-block margin-b24">Contact Us</span>
          <h1 class="font-lora font-48 lineh-56 weight-600 color-29 margin-b20 clienth2">Contact Us for Expert Financial Guidance</h1>
          <p class="font-ks font-16 weight-500 lineh-26 color-30">Get professional advice and guidance on tax accounting, business compliance, and financial management. Our expert team is here to help your business succeed in the UAE.</p>
          <div class="phone7-textarea margin-t32" data-aos="fade-right" data-aos-duration="1000"> 
            <div class="phone7-icon">
              <img src="{{ url('/webstatic/assets/images/phone8.png') }}" alt="">
            </div>
            <div class="phone7-text">
              <p class="font-16 lineh-16 weight-500 font-ks color-30 margin-b">Give us a Call</p>
              <a href="tel:+971506956500" class="font-lora font-24 weight-700 lineh-24 color-29">+971 50 695 6500</a>
            </div>
          </div>

          <div class="phone7-textarea margin-t" data-aos="fade-right" data-aos-duration="1200">
            <div class="phone7-icon">
              <img src="{{ url('/webstatic/assets/images/email7.png') }}" alt="">
            </div>
            <div class="phone7-text">
              <p class="font-16 lineh-16 weight-500 font-ks color-30 margin-b">Send us an Email</p>
              <a href="mailto:info@almobaderoon.com" class="font-lora font-24 weight-700 lineh-24 color-29">info@almobaderoon.com</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
        <div class="contact5-main-section">
          <div class="contact-main-text">
            <h1 class="font-lora font-24 lineh-24 weight-600 color">Send us a Message</h1>
            <p class="font-ks font-16 lineh-26 weight-500 color margin-t">Get a free consultation. Our response time is within 30 minutes during business hours.</p>
          </div>
          <form id="homeContactForm" action="{{ route('post.contactForm') }}" method="POST" novalidate>
            @csrf
            <div class="contac5-input5area">
              <div class="row">
                <div class="col-lg-6">
                  <div class="input-5area margin-t32">
                    <input type="text" name="fname" id="contact_fname" placeholder="First Name *" required minlength="2" maxlength="50" pattern="[A-Za-z\s]+" title="Only letters and spaces allowed">
                    <small class="text-danger d-none" id="fname_error"></small>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="input-5area margin-t32">
                    <input type="text" name="lname" id="contact_lname" placeholder="Last Name *" required minlength="2" maxlength="50" pattern="[A-Za-z\s]+" title="Only letters and spaces allowed">
                    <small class="text-danger d-none" id="lname_error"></small>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="input-5area margin-t">
                    <input type="email" name="email" id="contact_email" placeholder="Email Address *" required maxlength="100">
                    <small class="text-danger d-none" id="email_error"></small>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="input-5area margin-t">
                    <input type="tel" name="phone" id="contact_phone" placeholder="Phone Number *" required minlength="7" maxlength="20" pattern="[\+]?[0-9\s\-]+" title="Valid phone number (digits, spaces, dashes, + allowed)">
                    <small class="text-danger d-none" id="phone_error"></small>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="input-5area margin-t">
                    <textarea name="message" id="contact_message" cols="30" rows="5" placeholder="Your Message *" required minlength="10" maxlength="1000"></textarea>
                    <small class="text-danger d-none" id="message_error"></small>
                  </div>
                  <div id="form_success" class="d-none margin-t" style="color: #28a745; font-weight: 600;"></div>
                  <div id="form_error" class="d-none margin-t" style="color: #dc3545; font-weight: 600;"></div>
                  <div class="contact5-btn5" data-aos="fade-right" data-aos-duration="1200">
                    <button class="font-ks font-16 lineh-16 weight-700 color margin-t32 contcat5" type="submit" id="contactSubmitBtn">Submit Now <span><i class="fa-solid fa-arrow-right"></i></span></button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <script>
          document.addEventListener('DOMContentLoaded', function() {
              const form = document.getElementById('homeContactForm');
              const submitBtn = document.getElementById('contactSubmitBtn');
              const successDiv = document.getElementById('form_success');
              const errorDiv = document.getElementById('form_error');

              const fields = ['fname', 'lname', 'email', 'phone', 'message'];

              function clearErrors() {
                  fields.forEach(function(field) {
                      const el = document.getElementById(field + '_error');
                      if (el) { el.classList.add('d-none'); el.textContent = ''; }
                  });
                  successDiv.classList.add('d-none');
                  errorDiv.classList.add('d-none');
              }

              function showFieldError(field, msg) {
                  const el = document.getElementById(field + '_error');
                  if (el) { el.textContent = msg; el.classList.remove('d-none'); }
              }

              function validateForm() {
                  let valid = true;
                  clearErrors();

                  const fname = document.getElementById('contact_fname');
                  const lname = document.getElementById('contact_lname');
                  const email = document.getElementById('contact_email');
                  const phone = document.getElementById('contact_phone');
                  const message = document.getElementById('contact_message');

                  if (!fname.value.trim() || fname.value.trim().length < 2) {
                      showFieldError('fname', 'First name is required (min 2 characters)');
                      valid = false;
                  } else if (!/^[A-Za-z\s]+$/.test(fname.value.trim())) {
                      showFieldError('fname', 'Only letters and spaces allowed');
                      valid = false;
                  }

                  if (!lname.value.trim() || lname.value.trim().length < 2) {
                      showFieldError('lname', 'Last name is required (min 2 characters)');
                      valid = false;
                  } else if (!/^[A-Za-z\s]+$/.test(lname.value.trim())) {
                      showFieldError('lname', 'Only letters and spaces allowed');
                      valid = false;
                  }

                  if (!email.value.trim()) {
                      showFieldError('email', 'Email is required');
                      valid = false;
                  } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())) {
                      showFieldError('email', 'Please enter a valid email address');
                      valid = false;
                  }

                  if (!phone.value.trim() || phone.value.trim().length < 7) {
                      showFieldError('phone', 'Phone number is required (min 7 digits)');
                      valid = false;
                  } else if (!/^[\+]?[0-9\s\-]+$/.test(phone.value.trim())) {
                      showFieldError('phone', 'Please enter a valid phone number');
                      valid = false;
                  }

                  if (!message.value.trim() || message.value.trim().length < 10) {
                      showFieldError('message', 'Message is required (min 10 characters)');
                      valid = false;
                  }

                  return valid;
              }

              form.addEventListener('submit', function(e) {
                  e.preventDefault();

                  if (!validateForm()) return;

                  submitBtn.disabled = true;
                  submitBtn.innerHTML = 'Sending... <span><i class="fa-solid fa-spinner fa-spin"></i></span>';

                  const formData = new FormData(form);

                  fetch(form.action, {
                      method: 'POST',
                      headers: {
                          'X-Requested-With': 'XMLHttpRequest',
                          'Accept': 'application/json',
                      },
                      body: formData
                  })
                  .then(function(response) { return response.json(); })
                  .then(function(data) {
                      submitBtn.disabled = false;
                      submitBtn.innerHTML = 'Submit Now <span><i class="fa-solid fa-arrow-right"></i></span>';

                      if (data.success || data.message === '') {
                          successDiv.textContent = data.message || 'Thank you! Your message has been sent successfully.';
                          successDiv.classList.remove('d-none');
                          form.reset();
                      } else {
                          errorDiv.textContent = data.message || 'Something went wrong. Please try again.';
                          errorDiv.classList.remove('d-none');
                      }
                  })
                  .catch(function(err) {
                      submitBtn.disabled = false;
                      submitBtn.innerHTML = 'Submit Now <span><i class="fa-solid fa-arrow-right"></i></span>';
                      errorDiv.textContent = 'Network error. Please try again later.';
                      errorDiv.classList.remove('d-none');
                  });
              });
          });
          </script>
        </div>
      </div>
    </div>
  </div>
  <img src="{{ url('/webstatic/assets/images/elementor23.png') }}" alt="" class="elementor25">
</div>

 <div class="cta5-section-area section-padding4">
  <img src="{{ url('/webstatic/assets/images/elementor72.png') }}" alt="" class="elementors72">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="cta5-auhtor6-area">
          <h1 class="font-lora font-48 lineh-52 color weight-600 margin-b text-capitalize">Get Expert Financial Advice for Your Business</h1>
          <p class="font-ks font-16 lineh-26 weight-500 color-21">We believe that informed clients make better business decisions. Let our 20+ years of experience guide your tax, accounting, and compliance strategy.</p>
        </div>
      </div>
      <div class="col-lg-2"></div>
      <div class="col-lg-4">
        <div class="cta5-btn5-sexction">
            <a href="{{ url('/schedule-consulation') }}" class="theme6-btn6 bakgrnd5 font-ks lineh-16 weight-700 color font-16">Schedule Consultation <span><i class="fa-solid fa-arrow-right"></i></span></a>
            <a href="{{ url('/contact') }}" class="theme6-btn6 backgrnd6 font-ks lineh-16 weight-700 color-29 font-16">Contact Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
      </div>
    </div>
  </div>
  <img src="{{ url('/webstatic/assets/images/elementor72.png') }}" alt="" class="elementors73">
</div>
@endsection
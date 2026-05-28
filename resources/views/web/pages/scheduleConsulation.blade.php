@extends('layouts.web')

@section('title', 'Schedule Consultation - Almobaderoon Consulting')
@section('description', 'Book your free consultation with our expert consultants. Get professional guidance for your business needs.')

@section('content')
<div class="welcomeabout-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="welcomeaboiut2 text-center">
                <h1 class="font-lora font-60 lineh-64 weight-500  margin-b24">Schedule Your Consultation</h1>
                <p class="font-20 weight-500 font-ks lineh-20 "><a href="{{ url('/') }}" class="font-dark">Home</a><span><i class="fa-solid fa-angle-right"></i></span>Schedule Consultation</p>
            </div>
        </div>
    </div>
</div>

<div class="consultation-section-area section-padding5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="consultation-content">
                    <h1 class="font-lora font-40 lineh-50 weight-600 color-29 margin-b20">Book Your Expert Consultation Today</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30 margin-b20">Take the first step toward transforming your business. Our experienced consultants are ready to discuss your unique challenges, goals, and opportunities. Schedule a free consultation to explore how Almobaderoon Consulting can help you achieve sustainable growth and operational excellence.</p>
                    
                    <div class="consultation-benefits margin-t30">
                        <h2 class="font-lora font-24 lineh-30 weight-600 color-29 margin-b20">Why Consult With Us?</h2>
                        <div class="benefit-item margin-b15">
                            <div class="benefit-icon">
                                <img src="https://html.vikinglab.agency/consult/assets/images/icons/check1.png" alt="">
                            </div>
                            <div class="benefit-text">
                                <p class="font-ks font-16 lineh-26 weight-500 color-30"><strong>Expert Guidance</strong> - Access decades of combined industry experience and best practices knowledge.</p>
                            </div>
                        </div>

                        <div class="benefit-item margin-b15">
                            <div class="benefit-icon">
                                <img src="https://html.vikinglab.agency/consult/assets/images/icons/check1.png" alt="">
                            </div>
                            <div class="benefit-text">
                                <p class="font-ks font-16 lineh-26 weight-500 color-30"><strong>Customized Solutions</strong> - Receive tailored recommendations specific to your business needs and goals.</p>
                            </div>
                        </div>

                        <div class="benefit-item margin-b15">
                            <div class="benefit-icon">
                                <img src="https://html.vikinglab.agency/consult/assets/images/icons/check1.png" alt="">
                            </div>
                            <div class="benefit-text">
                                <p class="font-ks font-16 lineh-26 weight-500 color-30"><strong>Actionable Insights</strong> - Gain practical recommendations you can implement immediately.</p>
                            </div>
                        </div>

                        <div class="benefit-item margin-b15">
                            <div class="benefit-icon">
                                <img src="https://html.vikinglab.agency/consult/assets/images/icons/check1.png" alt="">
                            </div>
                            <div class="benefit-text">
                                <p class="font-ks font-16 lineh-26 weight-500 color-30"><strong>No Obligation</strong> - Free initial consultation with no commitment required.</p>
                            </div>
                        </div>

                        <div class="benefit-item margin-b15">
                            <div class="benefit-icon">
                                <img src="https://html.vikinglab.agency/consult/assets/images/icons/check1.png" alt="">
                            </div>
                            <div class="benefit-text">
                                <p class="font-ks font-16 lineh-26 weight-500 color-30"><strong>Fast Response</strong> - We respond to consultation requests within 24 hours.</p>
                            </div>
                        </div>
                    </div>

                    <div class="consultation-contact margin-t40">
                        <h2 class="font-lora font-24 lineh-30 weight-600 color-29 margin-b20">Prefer to Call?</h2>
                        <a href="tel:00971506956500" class="font-ks font-16 lineh-26 weight-600 color"><img src="https://html.vikinglab.agency/consult/assets/images/icons/phone9.svg" alt="">+971 50 695 6500</a>
                        <p class="font-ks font-14 lineh-24 weight-400 color-30 margin-t10">Available Monday to Friday, 9:00 AM - 6:00 PM UAE Time</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="consultation-form">
                    <div class="form-header">
                        <h2 class="font-lora font-28 lineh-32 weight-600 color-29 margin-b10">Schedule Your Consultation</h2>
                        <p class="font-ks font-14 lineh-22 weight-400 color-30">Fill out the form below and we'll be in touch within 24 hours to confirm your consultation time.</p>
                    </div>

                    <form class="consultation-form-group margin-t30" method="POST" action="{{ url('schedule-consultation') }}">
                        @csrf
                        
                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Full Name *</label>
                            <input type="text" name="full_name" class="form-control consultation-input" placeholder="Enter your full name" required>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Email Address *</label>
                            <input type="email" name="email" class="form-control consultation-input" placeholder="Enter your email address" required>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Phone Number *</label>
                            <input type="tel" name="phone" class="form-control consultation-input" placeholder="Enter your phone number" required>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Company Name</label>
                            <input type="text" name="company_name" class="form-control consultation-input" placeholder="Enter your company name">
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Service of Interest *</label>
                            <select name="service_interest" class="form-control consultation-input" required>
                                <option value="">Select a service</option>
                                <option value="tax-accounting">Tax & Accounting Services</option>
                                <option value="accounting-bookkeeping">Accounting & Bookkeeping Services</option>
                                <option value="audit">Audit Services</option>
                                <option value="financial-consulting">Financial Consulting</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Preferred Consultation Date *</label>
                            <input type="date" name="consultation_date" class="form-control consultation-input" required>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Preferred Time *</label>
                            <select name="consultation_time" class="form-control consultation-input" required>
                                <option value="">Select preferred time</option>
                                <option value="09:00">9:00 AM</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="12:00">12:00 PM</option>
                                <option value="14:00">2:00 PM</option>
                                <option value="15:00">3:00 PM</option>
                                <option value="16:00">4:00 PM</option>
                                <option value="17:00">5:00 PM</option>
                            </select>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Consultation Format *</label>
                            <div class="format-options">
                                <label class="radio-option">
                                    <input type="radio" name="consultation_format" value="video" required>
                                    <span class="font-ks font-14 color-29">Video Call</span>
                                </label>
                                <label class="radio-option margin-l20">
                                    <input type="radio" name="consultation_format" value="phone">
                                    <span class="font-ks font-14 color-29">Phone Call</span>
                                </label>
                                <label class="radio-option margin-l20">
                                    <input type="radio" name="consultation_format" value="in-person">
                                    <span class="font-ks font-14 color-29">In-Person</span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Tell Us About Your Business Challenge *</label>
                            <textarea name="business_challenge" class="form-control consultation-textarea" placeholder="Describe your business challenge or what you'd like to discuss" rows="4" required></textarea>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="checkbox-option">
                                <input type="checkbox" name="agree_terms" required>
                                <span class="font-ks font-12 color-30">I agree to the privacy policy and terms of service</span>
                            </label>
                        </div>

                        <button type="submit" class="consultation-submit-btn font-ks font-16 lineh-16 weight-700 color">Schedule Consultation <span><i class="fa-solid fa-arrow-right"></i></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="consultation-process-area section-padding8">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="section-heading text-center margin-b60">
                    <h1 class="font-lora font-40 lineh-50 weight-600 color-29">How Our Consultation Process Works</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">
                        <span class="font-lora font-32 weight-600 color">1</span>
                    </div>
                    <h3 class="font-lora font-20 lineh-24 weight-600 color-29 margin-b15 margin-t15">Book Your Slot</h3>
                    <p class="font-ks font-14 lineh-22 weight-400 color-30">Select your preferred date, time, and consultation format using our simple scheduling form.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">
                        <span class="font-lora font-32 weight-600 color">2</span>
                    </div>
                    <h3 class="font-lora font-20 lineh-24 weight-600 color-29 margin-b15 margin-t15">Confirmation</h3>
                    <p class="font-ks font-14 lineh-22 weight-400 color-30">We'll send you a confirmation email with all details and a reminder 24 hours before your consultation.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">
                        <span class="font-lora font-32 weight-600 color">3</span>
                    </div>
                    <h3 class="font-lora font-20 lineh-24 weight-600 color-29 margin-b15 margin-t15">Expert Consultation</h3>
                    <p class="font-ks font-14 lineh-22 weight-400 color-30">Meet with our expert consultant to discuss your challenges and explore tailored solutions.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">
                        <span class="font-lora font-32 weight-600 color">4</span>
                    </div>
                    <h3 class="font-lora font-20 lineh-24 weight-600 color-29 margin-b15 margin-t15">Next Steps</h3>
                    <p class="font-ks font-14 lineh-22 weight-400 color-30">Receive a summary of recommendations and discuss how we can support your success.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="consultation-faq-area section-padding5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="section-heading text-center margin-b60">
                    <h1 class="font-lora font-40 lineh-50 weight-600 color-29">Frequently Asked Questions</h1>
                </div>

                <div class="faq-items">
                    <div class="faq-item margin-b20">
                        <div class="faq-question">
                            <h3 class="font-lora font-18 lineh-24 weight-600 color-29">Is the initial consultation really free?</h3>
                            <span class="faq-toggle"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer" style="display: none;">
                            <p class="font-ks font-14 lineh-22 weight-400 color-30">Yes, absolutely! We offer a complimentary initial consultation to understand your needs and discuss how we can help. There's no obligation to engage our services.</p>
                        </div>
                    </div>

                    <div class="faq-item margin-b20">
                        <div class="faq-question">
                            <h3 class="font-lora font-18 lineh-24 weight-600 color-29">How long is a consultation?</h3>
                            <span class="faq-toggle"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer" style="display: none;">
                            <p class="font-ks font-14 lineh-22 weight-400 color-30">Typically, initial consultations last 45-60 minutes. This gives us enough time to understand your situation and provide valuable preliminary recommendations.</p>
                        </div>
                    </div>

                    <div class="faq-item margin-b20">
                        <div class="faq-question">
                            <h3 class="font-lora font-18 lineh-24 weight-600 color-29">What should I prepare for my consultation?</h3>
                            <span class="faq-toggle"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer" style="display: none;">
                            <p class="font-ks font-14 lineh-22 weight-400 color-30">Please have your business overview ready, including current challenges, goals, and any relevant financial documents. We'll guide you on specific documents needed before your consultation.</p>
                        </div>
                    </div>

                    <div class="faq-item margin-b20">
                        <div class="faq-question">
                            <h3 class="font-lora font-18 lineh-24 weight-600 color-29">Can I reschedule my consultation?</h3>
                            <span class="faq-toggle"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer" style="display: none;">
                            <p class="font-ks font-14 lineh-22 weight-400 color-30">Yes, we understand that plans change. Please notify us at least 24 hours before your scheduled consultation if you need to reschedule.</p>
                        </div>
                    </div>

                    <div class="faq-item margin-b20">
                        <div class="faq-question">
                            <h3 class="font-lora font-18 lineh-24 weight-600 color-29">What services does your consultancy cover?</h3>
                            <span class="faq-toggle"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer" style="display: none;">
                            <p class="font-ks font-14 lineh-22 weight-400 color-30">We provide expertise across tax and accounting services, bookkeeping, audit, financial reporting, business consultancy, and more. During consultation, we'll discuss which services best fit your needs.</p>
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
                    <h1 class="font-lora font-48 lineh-52 color weight-600 margin-b text-capitalize">Ready to Transform Your Business?</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-21">Don't wait another day. Schedule your free consultation today and discover how Almobaderoon Consulting can help you achieve your business goals.</p>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="cta5-btn5-sexction">
                    <a href="#consultation-form" class="theme6-btn6 bakgrnd5 font-ks lineh-16 weight-700 color font-16">Schedule Now <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    <a href="tel:00971506956500" class="theme6-btn6 backgrnd6 font-ks lineh-16 weight-700 color-29 font-16">Call Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
    <img src="https://html.vikinglab.agency/consult/assets/images/elementor/elementor72.png" alt="" class="elementors73">
</div>
@endsection
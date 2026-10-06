@extends('layouts.web')

@section('title', 'Schedule Consultation - Almobaderoon Consulting')
@section('description', 'Book your free consultation with our expert consultants. Get professional guidance for your business needs.')

@push('styles')
<style>
    :root {
        --sc-primary: #172b5c;
        --sc-accent: #c99a3f;
        --sc-ink: #1f2a44;
        --sc-muted: #5c6b86;
        --sc-line: #e4e8f0;
        --sc-bg: #f6f8fc;
    }

    /* ---------- Layout spacing ---------- */
    .consultation-section-area { background: var(--sc-bg); }
    .consultation-content { padding-right: 20px; }

    /* ---------- Benefits list ---------- */
    .consultation-benefits { background: #fff; border: 1px solid var(--sc-line); border-radius: 16px; padding: 28px 28px 14px; box-shadow: 0 10px 30px rgba(23,43,92,.05); }
    .benefit-item { display: flex; align-items: flex-start; gap: 14px; }
    .benefit-icon { flex: 0 0 auto; width: 34px; height: 34px; border-radius: 50%; background: rgba(201,154,63,.12); display: flex; align-items: center; justify-content: center; margin-top: 2px; }
    .benefit-icon img { width: 16px; height: 16px; }
    .benefit-icon::before { content: "\f00c"; font-family: "Font Awesome 6 Free"; font-weight: 900; color: var(--sc-accent); font-size: 14px; }
    .benefit-icon img { display: none; }
    .benefit-text p { margin: 0; }

    .consultation-contact { background: var(--sc-primary); border-radius: 16px; padding: 26px 28px; color: #fff; }
    .consultation-contact h2 { color: #fff !important; }
    .consultation-contact a { display: inline-flex; align-items: center; gap: 10px; color: #fff !important; font-size: 22px; }
    .consultation-contact a img { width: 22px; height: 22px; filter: brightness(0) invert(1); }
    .consultation-contact p { color: rgba(255,255,255,.75) !important; }

    /* ---------- Form card ---------- */
    .consultation-form { background: #fff; border: 1px solid var(--sc-line); border-radius: 18px; padding: 36px 34px; box-shadow: 0 20px 50px rgba(23,43,92,.08); position: sticky; top: 20px; }
    .consultation-form .form-header { border-bottom: 1px solid var(--sc-line); padding-bottom: 18px; margin-bottom: 8px; }
    .consultation-form .form-label { display: block; margin-bottom: 8px; }
    .consultation-form .form-group { margin-bottom: 18px !important; }

    .consultation-input,
    .consultation-textarea {
        width: 100%;
        border: 1px solid var(--sc-line);
        background: #fbfcfe;
        border-radius: 10px;
        padding: 13px 16px;
        font-size: 15px;
        color: var(--sc-ink);
        font-family: inherit;
        transition: border-color .2s ease, box-shadow .2s ease, background .2s ease;
        outline: none;
    }
    .consultation-textarea { resize: vertical; min-height: 120px; }
    .consultation-input:focus,
    .consultation-textarea:focus {
        border-color: var(--sc-primary);
        background: #fff;
        box-shadow: 0 0 0 3px rgba(23,43,92,.1);
    }
    select.consultation-input { appearance: none; -webkit-appearance: none; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='14' viewBox='0 0 24 24' fill='none' stroke='%23172b5c' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 16px center; padding-right: 42px; cursor: pointer; }

    /* ---------- Format radios ---------- */
    .format-options { display: flex; flex-wrap: wrap; gap: 12px; }
    .radio-option {
        flex: 1 1 auto; min-width: 120px;
        display: flex; align-items: center; justify-content: center; gap: 8px;
        border: 1px solid var(--sc-line); border-radius: 10px;
        padding: 12px 14px; cursor: pointer; margin: 0;
        transition: all .2s ease; background: #fbfcfe;
    }
    .radio-option input { accent-color: var(--sc-primary); cursor: pointer; }
    .radio-option:hover { border-color: var(--sc-primary); }
    .radio-option:has(input:checked) { border-color: var(--sc-primary); background: rgba(23,43,92,.06); box-shadow: 0 0 0 2px rgba(23,43,92,.08); }

    /* ---------- Checkbox ---------- */
    .checkbox-option { display: flex; align-items: flex-start; gap: 10px; cursor: pointer; margin: 0; }
    .checkbox-option input { margin-top: 3px; accent-color: var(--sc-primary); cursor: pointer; }

    /* ---------- Submit button ---------- */
    .consultation-submit-btn {
        width: 100%;
        display: inline-flex; align-items: center; justify-content: center; gap: 10px;
        background: var(--sc-primary); color: #fff !important;
        border: none; border-radius: 10px; padding: 16px 24px;
        cursor: pointer; transition: background .2s ease, transform .15s ease;
    }
    .consultation-submit-btn:hover { background: #0f1f45; transform: translateY(-1px); }
    .consultation-submit-btn span { display: inline-flex; }

    /* ---------- Alerts ---------- */
    .consultation-alert { display: flex; align-items: flex-start; gap: 10px; border-radius: 10px; padding: 14px 18px; margin-bottom: 20px; font-size: 14px; font-weight: 600; line-height: 1.5; }
    .consultation-alert i { margin-top: 2px; font-size: 16px; }
    .consultation-alert ul { margin: 0; padding-left: 18px; }
    .consultation-alert-success { background: #e6f7ec; border: 1px solid #28a745; color: #1e7e34; }
    .consultation-alert-error { background: #fdecea; border: 1px solid #dc3545; color: #a71d2a; }

    /* ---------- Process steps ---------- */
    .consultation-process-area { background: #fff; }
    .process-step { background: var(--sc-bg); border: 1px solid var(--sc-line); border-radius: 16px; padding: 34px 22px; height: 100%; transition: transform .2s ease, box-shadow .2s ease; }
    .process-step:hover { transform: translateY(-4px); box-shadow: 0 16px 36px rgba(23,43,92,.08); }
    .step-number { width: 64px; height: 64px; margin: 0 auto; border-radius: 50%; background: var(--sc-primary); display: flex; align-items: center; justify-content: center; }
    .step-number span { color: #fff !important; }

    /* ---------- FAQ ---------- */
    .consultation-faq-area { background: var(--sc-bg); }
    .faq-item { background: #fff; border: 1px solid var(--sc-line); border-radius: 12px; overflow: hidden; transition: box-shadow .2s ease; }
    .faq-item.active { box-shadow: 0 12px 30px rgba(23,43,92,.08); }
    .faq-question { display: flex; align-items: center; justify-content: space-between; gap: 16px; padding: 20px 24px; cursor: pointer; }
    .faq-question h3 { margin: 0; }
    .faq-toggle { flex: 0 0 auto; width: 30px; height: 30px; border-radius: 50%; background: rgba(23,43,92,.07); display: flex; align-items: center; justify-content: center; color: var(--sc-primary); transition: transform .25s ease, background .2s ease; }
    .faq-item.active .faq-toggle { transform: rotate(180deg); background: var(--sc-primary); color: #fff; }
    .faq-answer { padding: 0 24px 20px; }

    /* ---------- Responsive ---------- */
    @media (max-width: 991px) {
        .consultation-content { padding-right: 0; margin-bottom: 40px; }
        .consultation-form { position: static; }
    }
    @media (max-width: 575px) {
        .consultation-form { padding: 26px 20px; }
        .format-options { flex-direction: column; }
    }
</style>
@endpush

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

<div class="consultation-section-area section-padding5" id="consultation-form">
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

                    @if (session('success'))
                        <div class="consultation-alert consultation-alert-success">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="consultation-alert consultation-alert-error">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <span>{{ session('error') }}</span>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="consultation-alert consultation-alert-error">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="consultation-form-group margin-t30" method="POST" action="{{ route('post.scheduleConsulation') }}">
                        @csrf
                        
                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Full Name *</label>
                            <input type="text" name="full_name" value="{{ old('full_name') }}" class="form-control consultation-input" placeholder="Enter your full name" required>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Email Address *</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control consultation-input" placeholder="Enter your email address" required>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Phone Number *</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control consultation-input" placeholder="Enter your phone number" required>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Company Name</label>
                            <input type="text" name="company_name" value="{{ old('company_name') }}" class="form-control consultation-input" placeholder="Enter your company name">
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Service of Interest *</label>
                            <select name="service_interest" class="form-control consultation-input" required>
                                <option value="">Select a service</option>
                                <option value="Tax & Accounting Services" @selected(old('service_interest') === 'Tax & Accounting Services')>Tax & Accounting Services</option>
                                <option value="Accounting & Bookkeeping Services" @selected(old('service_interest') === 'Accounting & Bookkeeping Services')>Accounting & Bookkeeping Services</option>
                                <option value="VAT & Corporate Tax Services" @selected(old('service_interest') === 'VAT & Corporate Tax Services')>VAT & Corporate Tax Services</option>
                                <option value="Audit & Assurance" @selected(old('service_interest') === 'Audit & Assurance')>Audit & Assurance</option>
                                <option value="ISO Certifications" @selected(old('service_interest') === 'ISO Certifications')>ISO Certifications</option>
                                <option value="ICV Certification" @selected(old('service_interest') === 'ICV Certification')>ICV Certification</option>
                                <option value="Practical Accounting Training" @selected(old('service_interest') === 'Practical Accounting Training')>Practical Accounting Training</option>
                                <option value="Other" @selected(old('service_interest') === 'Other')>Other</option>
                            </select>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Preferred Consultation Date *</label>
                            <input type="date" name="consultation_date" value="{{ old('consultation_date') }}" min="{{ now()->toDateString() }}" class="form-control consultation-input" required>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Preferred Time *</label>
                            <select name="consultation_time" class="form-control consultation-input" required>
                                <option value="">Select preferred time</option>
                                <option value="09:00 AM" @selected(old('consultation_time') === '09:00 AM')>9:00 AM</option>
                                <option value="10:00 AM" @selected(old('consultation_time') === '10:00 AM')>10:00 AM</option>
                                <option value="11:00 AM" @selected(old('consultation_time') === '11:00 AM')>11:00 AM</option>
                                <option value="12:00 PM" @selected(old('consultation_time') === '12:00 PM')>12:00 PM</option>
                                <option value="02:00 PM" @selected(old('consultation_time') === '02:00 PM')>2:00 PM</option>
                                <option value="03:00 PM" @selected(old('consultation_time') === '03:00 PM')>3:00 PM</option>
                                <option value="04:00 PM" @selected(old('consultation_time') === '04:00 PM')>4:00 PM</option>
                                <option value="05:00 PM" @selected(old('consultation_time') === '05:00 PM')>5:00 PM</option>
                            </select>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Consultation Format *</label>
                            <div class="format-options">
                                <label class="radio-option">
                                    <input type="radio" name="consultation_format" value="video" @checked(old('consultation_format') === 'video') required>
                                    <span class="font-ks font-14 color-29">Video Call</span>
                                </label>
                                <label class="radio-option">
                                    <input type="radio" name="consultation_format" value="phone" @checked(old('consultation_format') === 'phone')>
                                    <span class="font-ks font-14 color-29">Phone Call</span>
                                </label>
                                <label class="radio-option">
                                    <input type="radio" name="consultation_format" value="in-person" @checked(old('consultation_format') === 'in-person')>
                                    <span class="font-ks font-14 color-29">In-Person</span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="form-label font-ks font-14 weight-600 color-29">Tell Us About Your Business Challenge *</label>
                            <textarea name="business_challenge" class="form-control consultation-textarea" placeholder="Describe your business challenge or what you'd like to discuss" rows="4" required>{{ old('business_challenge') }}</textarea>
                        </div>

                        <div class="form-group margin-b20">
                            <label class="checkbox-option">
                                <input type="checkbox" name="agree_terms" value="1" @checked(old('agree_terms')) required>
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

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // FAQ accordion
        document.querySelectorAll('.faq-item .faq-question').forEach(function (q) {
            q.addEventListener('click', function () {
                var item = q.closest('.faq-item');
                var answer = item.querySelector('.faq-answer');
                var isOpen = item.classList.contains('active');

                // Close all
                document.querySelectorAll('.faq-item').forEach(function (other) {
                    other.classList.remove('active');
                    var a = other.querySelector('.faq-answer');
                    if (a) a.style.display = 'none';
                });

                // Open the clicked one if it was closed
                if (!isOpen) {
                    item.classList.add('active');
                    if (answer) answer.style.display = 'block';
                }
            });
        });

        // Scroll to the form when there is a message to show
        @if (session('success') || session('error') || $errors->any())
            var target = document.getElementById('consultation-form');
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        @endif

        // Submit button loading state
        var form = document.querySelector('.consultation-form-group');
        if (form) {
            form.addEventListener('submit', function () {
                var btn = form.querySelector('.consultation-submit-btn');
                if (btn) {
                    btn.disabled = true;
                    btn.style.opacity = '0.75';
                    btn.innerHTML = 'Sending... <span><i class="fa-solid fa-spinner fa-spin"></i></span>';
                }
            });
        }
    });
</script>
@endpush
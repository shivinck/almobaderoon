@extends('layouts.web')

@section('title', 'Contact Us - Almobaderoon Consulting Services')
@section('description', 'Contact Almobaderoon Consulting Services for expert tax, accounting, and business advisory. Our team is ready to assist you. Get in touch today!')

@section('content')
<div class="welcomeabout-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="welcomeaboiut2 text-center">
                <h1 class="font-lora font-60 lineh-64 weight-500 margin-b24">Contact Us</h1>
                <p class="font-20 weight-500 font-ks lineh-20"><a href="{{ url('/') }}" class="font-dark">Home</a><span><i class="fa-solid fa-angle-right"></i></span>Contact Us</p>
            </div>
        </div>
    </div>
</div>

<div class="contcatinner2-scetio-area section-padding5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact2-all-contact contact2inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="contact2-maincontact">
                                <h1 class="font-24 font-lora lineh-24 color-29 weight-600 margin-b">Send Us A Message</h1>
                                <p class="font-16 font-ks lineh-26 weight-500 color-30 margin-b24">Our response time is within 30 minutes during business hours</p>

                                <form id="contactPageForm" action="{{ route('post.contactForm') }}" method="POST" novalidate>
                                    @csrf
                                    <div class="contact-from-area">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="first-input">
                                                    <input type="text" name="fname" id="cp_fname" placeholder="First Name *" required minlength="2" maxlength="50" pattern="[A-Za-z\s]+" title="Only letters and spaces allowed">
                                                    <small class="text-danger d-none" id="cp_fname_error"></small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="first-input">
                                                    <input type="text" name="lname" id="cp_lname" placeholder="Last Name *" required minlength="2" maxlength="50" pattern="[A-Za-z\s]+" title="Only letters and spaces allowed">
                                                    <small class="text-danger d-none" id="cp_lname_error"></small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="first-input">
                                                    <input type="tel" name="phone" id="cp_phone" placeholder="Phone Number *" required minlength="7" maxlength="20" pattern="[\+]?[0-9\s\-]+" title="Valid phone number">
                                                    <small class="text-danger d-none" id="cp_phone_error"></small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="first-input">
                                                    <input type="email" name="email" id="cp_email" placeholder="Email Address *" required maxlength="100">
                                                    <small class="text-danger d-none" id="cp_email_error"></small>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="textarea">
                                                    <textarea name="message" id="cp_message" cols="30" rows="10" placeholder="Your Message *" required minlength="10" maxlength="1000"></textarea>
                                                    <small class="text-danger d-none" id="cp_message_error"></small>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div id="cp_form_success" class="d-none margin-t" style="color: #28a745; font-weight: 600;"></div>
                                                <div id="cp_form_error" class="d-none margin-t" style="color: #dc3545; font-weight: 600;"></div>
                                                <div class="contact5-btn5 text-left">
                                                    <button class="font-ks font-16 lineh-16 weight-700 color margin-t32 contcat5" type="submit" id="cpSubmitBtn">Send Message <span><i class="fa-solid fa-arrow-right-long"></i></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-padding">
                                <div class="contact2-auhtor-section contacrtblogbg">
                                    <div class="clock-area">
                                        <img src="{{ url('/webstatic/assets/images/icons/clock1.svg') }}" alt="">
                                    </div>
                                    <div class="contact-location">
                                        <h1 class="font-20 font-lora lineh-24 color-29 weight-600 margin-b">Our Office</h1>
                                        <p class="font-ks font-16 lineh-26 color-30 weight-500">Microland Computers Building, Building No. 8,
Office No. 107, 1st Floor,
Khalid Bin Sinan St.
Khalidiyah, W4 <br>Abu Dhabi, UAE</p>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-padding margin-t">
                                <div class="contact2-auhtor-section contacblogbg contacrtblogbg">
                                    <div class="clock-area">
                                        <img src="{{ url('/webstatic/assets/images/icons/phone4.svg') }}" alt="">
                                    </div>
                                    <div class="contact-location">
                                        <h1 class="font-20 font-lora lineh-24 color weight-600 margin-b">Call or Text</h1>
                                        <p class="font-ks font-16 lineh-26 color weight-400"><a href="tel:+971506956500" class="color">+971 50 695 6500</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-padding margin-t">
                                <div class="contact2-auhtor-section contacrtblogbg">
                                    <div class="clock-area">
                                        <img src="{{ url('/webstatic/assets/images/icons/email3.svg') }}" alt="">
                                    </div>
                                    <div class="contact-location">
                                        <h1 class="font-20 font-lora lineh-24 color-29 weight-600 margin-b">Email Us</h1>
                                        <p class="font-ks font-16 lineh-26 color-30 weight-400"><a href="mailto:info@almobaderoon.com" class="color-17">info@almobaderoon.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 margin-t60">
                <div class="map-section-area">
                    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" style="width:100%; height:400px; border:0; border-radius:10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2228.9757304745585!2d54.35043710242987!3d24.47517608940329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e67d0880fa455%3A0x3c4225c8a9b44795!2sMICROLAND%20COMPUTERS%20LLC!5e0!3m2!1sen!2sin!4v1779895547775!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe></div></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="faq-section-area section-padding5">
    <img src="{{ url('/webstatic/assets/images/elementor23.png') }}" alt="" class="elementor24">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="faq-textarea margin-b60">
                    <h1 class="font-lora font-48 lineh-52 color-29 weight-600 margin-b">Frequently Asked Questions</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="accordian-area accourbutton">
                    <div class="accordion accordian4" id="accordionExample">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accordion-item bordernone">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What services does Al Mobaderoon offer?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="font-ks font-16 lineh-26 weight-500 color-22">We offer comprehensive tax & accounting services, VAT and Corporate Tax compliance, audit & assurance, ISO certifications, practical accounting training, ICV certification, company formation, and management consultancy.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bordernone">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How long does VAT registration take?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="font-ks font-16 lineh-26 weight-500 color-30">VAT registration with the FTA typically takes 5–10 business days once all required documents are submitted correctly. Our team handles the entire process to ensure a smooth and timely registration.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bordernone">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Do you help with Corporate Tax registration?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="font-ks font-16 lineh-26 weight-500 color-30">Yes, we provide end-to-end Corporate Tax services including registration, return filing, tax planning, and ongoing compliance advisory for businesses of all sizes across the UAE.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item m-0 bordernone">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            How long does ISO certification take?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="font-ks font-16 lineh-26 weight-500 color-30">Depending on the standard and your organization's readiness, ISO certification typically takes 3–6 months. We have achieved certifications in as little as 4 months with our accelerated implementation approach.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordian-area accourbutton">
                                    <div class="accordion accordian4">
                                        <div class="accordion-item bordernone">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                                    What can I expect during an initial consultation?
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p class="font-ks font-16 lineh-26 weight-500 color-22">During your free initial consultation, we'll discuss your business needs, assess your current compliance status, and recommend the most suitable services. There's no obligation — it's a chance to understand how we can help.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item bordernone">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    Do you serve businesses outside Abu Dhabi?
                                                </button>
                                            </h2>
                                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p class="font-ks font-16 lineh-26 weight-500 color-30">Yes, while our office is in Abu Dhabi, we serve clients across all emirates including Dubai, Sharjah, Ajman, and more. Many of our services can be delivered remotely for your convenience.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item bordernone">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                    Can you help reduce existing FTA penalties?
                                                </button>
                                            </h2>
                                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p class="font-ks font-16 lineh-26 weight-500 color-30">Yes, we have extensive experience with FTA penalty reconsideration applications. We review your case, identify grounds for reduction, prepare documentation, and submit reconsideration requests on your behalf.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item m-0 bordernone">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                    What are your working hours?
                                                </button>
                                            </h2>
                                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p class="font-ks font-16 lineh-26 weight-500 color-30">Our office hours are Sunday to Thursday, 9:00 AM to 6:00 PM. We respond to all inquiries within 30 minutes during business hours. For urgent matters, you can reach us by phone at +971 50 695 6500.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <p class="font-ks font-16 lineh-26 weight-500 color-21">With over 20 years of experience, we ensure you always get the best guidance for your tax, accounting, and business management needs.</p>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="cta5-btn5-sexction">
                    <a href="{{ url('/schedule-consulation') }}" class="theme6-btn6 bakgrnd5 font-ks lineh-16 weight-700 color font-16">Schedule Consultation <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    <a href="tel:+971506956500" class="theme6-btn6 backgrnd6 font-ks lineh-16 weight-700 color-29 font-16">Call Now <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ url('/webstatic/assets/images/elementor72.png') }}" alt="" class="elementors73">
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactPageForm');
    const submitBtn = document.getElementById('cpSubmitBtn');
    const successDiv = document.getElementById('cp_form_success');
    const errorDiv = document.getElementById('cp_form_error');

    const fields = ['fname', 'lname', 'email', 'phone', 'message'];

    function clearErrors() {
        fields.forEach(function(field) {
            const el = document.getElementById('cp_' + field + '_error');
            if (el) { el.classList.add('d-none'); el.textContent = ''; }
        });
        successDiv.classList.add('d-none');
        errorDiv.classList.add('d-none');
    }

    function showFieldError(field, msg) {
        const el = document.getElementById('cp_' + field + '_error');
        if (el) { el.textContent = msg; el.classList.remove('d-none'); }
    }

    function validateForm() {
        let valid = true;
        clearErrors();

        const fname = document.getElementById('cp_fname');
        const lname = document.getElementById('cp_lname');
        const email = document.getElementById('cp_email');
        const phone = document.getElementById('cp_phone');
        const message = document.getElementById('cp_message');

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
            submitBtn.innerHTML = 'Send Message <span><i class="fa-solid fa-arrow-right-long"></i></span>';

            if (data.success || data.message === '') {
                successDiv.textContent = data.message || 'Thank you! Your message has been sent successfully. We will get back to you shortly.';
                successDiv.classList.remove('d-none');
                form.reset();
            } else {
                errorDiv.textContent = data.message || 'Something went wrong. Please try again.';
                errorDiv.classList.remove('d-none');
            }
        })
        .catch(function(err) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Send Message <span><i class="fa-solid fa-arrow-right-long"></i></span>';
            errorDiv.textContent = 'Network error. Please try again later.';
            errorDiv.classList.remove('d-none');
        });
    });
});
</script>
@endsection
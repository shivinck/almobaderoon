@extends('layouts.web')

@section('title', 'Contact Us - Team Work Business Management Abu Dhabi')
@section('description', 'Get in touch with Team Work Business Management, leading business consultancy in Abu Dhabi since 1994. Contact us for business setup, property management, and real estate services.')

@section('content')
<div class="page-header bg-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Contact Us</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('get.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-contact-us">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="contact-us-content">
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Get In Touch</span>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Ready to start your <span>business journey in Abu Dhabi?</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">With 32 years of leadership in Abu Dhabi's business landscape, our expert team is here to guide you through business setup, property management, and real estate investments.</p>
                    </div>
                    
                    <div class="contact-info-list">
                        <div class="contact-info-item wow fadeInUp">
                            <h2><a href="mailto:teamworkmarine@gmail.com">teamworkmarine@gmail.com</a></h2>
                            <h3><a href="tel:+0097126446415">+009712 6446415</a></h3>
                            <h3><a href="tel:+914844300474">+91 484 4300 474</a></h3>
                        </div>
                        
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <h4>Our Office Address (UAE):</h4>
                            <p>Office NO:1304, ADCP Business Tower C, Electra Road, Abu Dhabi, United Arab Emirates</p>
                        </div>
                        
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <h4>Our Office Address (India):</h4>
                            <p>Office NO: 411, Hilte Platino, NH 47 ByPass, Maradu, Ernakulam, Kerala, India</p>
                        </div>

                        <div class="contact-business-hours wow fadeInUp" data-wow-delay="0.6s">
                            <h4>Business Hours:</h4>
                            <p>Sunday - Thursday: 9:00 AM - 6:00 PM<br>
                            Friday - Saturday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-7">
                <div class="contact-form">
                    <h3 class="form-title wow fadeInUp">Send us a message</h3>
                    <p class="form-subtitle wow fadeInUp" data-wow-delay="0.1s">Have questions about business setup or property investment? Our team will get back to you within 24 hours.</p>
                    
                    <form id="contactForm" action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 mb-4">
                                <label>First Name <span class="required">*</span></label>
                                <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter your first name" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label>Last Name <span class="required">*</span></label>
                                <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter your last name" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label>Email Address <span class="required">*</span></label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label>Phone Number <span class="required">*</span></label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone number" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <label>Service Interested In</label>
                                <select name="service" class="form-control" id="service">
                                    <option value="">Select a service</option>
                                    <option value="business-setup">Business Setup</option>
                                    <option value="property-management">Property Management</option>
                                    <option value="real-estate">Real Estate Services</option>
                                    <option value="legal-assistance">Legal Assistance</option>
                                    <option value="education-training">Education & Training</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12 mb-5">
                                <label>Message <span class="required">*</span></label>
                                <textarea name="message" class="form-control" id="message" rows="5" placeholder="Tell us about your requirements or questions..." required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn-default btn-highlighted">Send Message</button>
                                <div id="msgSubmit" class="h3 hidden"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="google-map">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <div class="section-title section-title-center">
                    <span class="section-sub-title wow fadeInUp">Visit Our Office</span>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Find us in the heart of <span>Abu Dhabi</span></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">Conveniently located on Electra Road, our office is easily accessible for consultations regarding business setup, property investment, and real estate services.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="google-map-iframe wow fadeInUp" data-wow-delay="0.4s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3632.1221111111117!2d54.366666!3d24.466667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDI4JzAwLjAiTiA1NMKwMjInMDAuMCJF!5e0!3m2!1sen!2sae!4v1234567890123!5m2!1sen!2sae" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

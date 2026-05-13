@extends('layouts.web')

@section('title', 'Customer Service for Property in Abu Dhabi | TEAM WORK')
@section('description', 'Exceptional customer service for property clients in Abu Dhabi by TEAM WORK. 32 years of leadership. Our team is always available to answer questions, address concerns, and ensure a smooth experience.')

@section('content')
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Customer <span>Service</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">Home</a></li>
                                <li class="breadcrumb-item"><a href="/services">Services</a></li>
                                <li class="breadcrumb-item"><a >Customer Service</a></li>
                            </ol>
                        </nav>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    

    
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    
                    <div class="page-single-sidebar">
                        
                        
                        <div class="page-category-list wow fadeInUp">
                            <h2>Explore Our Services</h2>
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/services/property-management') }}">Property Management</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/services/real-estate') }}">Real Estate Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/services/property-marketing') }}">Property Marketing</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/services/customer-service') }}">Customer Service</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/services/legal-assistance') }}">Legal Assistance</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/services/expert-guidance') }}">Expert Guidance</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/services/business-setup') }}">Business Setup</a></li>
                            </ul>
                        </div>
                        
                        
                        
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
                            
                            <div class="sidebar-cta-image">
                                <figure>
                                    <img src="{{ URL::cdn('images/sidebar-cta-image.jpg') }}" alt="">
                                </figure>
                            </div>
                            
                            
                            
                            <div class="sidebar-cta-body">
    
                                
                                <div class="sidebar-cta-content">
                                    <h2>Relocate to Abu Dhabi?</h2>
                                    <p style="color: #fff; margin-top: 10px;">Are you looking for a reliable and professional property management and real estate company in Abu Dhabi, UAE?</p>
                                </div>
                                

                                
                                <div class="sidebar-cta-btn">
                                    <a href="{{ url('/contact') }}" class="btn-default btn-highlighted">Contact Us</a>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>

                <div class="col-lg-8">
                    
                    <div class="service-single-content">
                        
                        <div class="page-single-image">
                            <figure class="image-anime reveal">
                                <img src="https://cdn.pixabay.com/photo/2016/01/08/17/59/stars-1128772_1280.jpg" alt="Customer Service">
                            </figure>
                        </div>
                        
                        
                        
                        <div class="service-entry">
                            <!-- Main description with 32 years leadership and customer service focus -->
                            <p class="wow fadeInUp"><strong>Team Work Business Management Company</strong> is a leading business consultancy firm in Abu Dhabi, UAE, serving the community for more than <strong>32 years</strong>. Our customer service philosophy is simple: we are committed to providing our clients with the highest level of support, ensuring every interaction is positive, helpful, and efficient.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Whether you are a property owner, tenant, investor, or someone looking to relocate to Abu Dhabi, our team is always available to answer your questions, address any concerns, and guide you through every step of your journey with us.</p>

                            <!-- "Ready Home" / Welcome section integrated for customer service angle -->
                            <div class="service-approach-box">
                                <h2 class="text-anime-style-2">Ready Home: Dedicated Support for Indian Investors & Families</h2>
                                <p class="wow fadeInUp">We understand that moving to a new country or investing abroad comes with many questions. Our customer service team is specially trained to assist Indian clients with cultural sensitivity and clear communication, ensuring you feel supported and informed throughout your property journey in Abu Dhabi.</p>
                                
                                <!-- Three customer service-focused approach items -->
                                <div class="service-approach-item-list">
                                    
                                    <div class="service-approach-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="service-approach-item-header">
                                            <div class="icon-box">
                                                <img src="{{ URL::cdn('images/icon-service-approach-item-1.svg') }}" alt="">
                                            </div>
                                            <div class="service-approach-item-title">
                                                <h3>Always Available & Responsive</h3>
                                            </div>
                                        </div>
                                        <div class="service-approach-item-content">
                                            <p>Our team is available via phone, email, WhatsApp, and in-person meetings. We pride ourselves on quick response times—no waiting days for an answer. Your questions are our priority.</p>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="service-approach-item wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="service-approach-item-header">
                                            <div class="icon-box">
                                                <img src="{{ URL::cdn('images/icon-service-approach-item-1.svg') }}" alt="">
                                            </div>
                                            <div class="service-approach-item-title">
                                                <h3>Personalized Client Support</h3>
                                            </div>
                                        </div>
                                        <div class="service-approach-item-content">
                                            <p>Every client is assigned a dedicated customer service representative who understands your specific needs—whether you're a tenant, landlord, or investor. This personalized approach ensures continuity and care.</p>
                                        </div>
                                    </div>
                                    

                                    
                                    <div class="service-approach-item wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="service-approach-item-header">
                                            <div class="icon-box">
                                                <img src="{{ URL::cdn('images/icon-service-approach-item-1.svg') }}" alt="">
                                            </div>
                                            <div class="service-approach-item-title">
                                                <h3>Multilingual & Culturally Aware</h3>
                                            </div>
                                        </div>
                                        <div class="service-approach-item-content">
                                            <p>Our team speaks multiple languages, including Hindi and other Indian languages, to ensure clear communication. We understand the cultural nuances and concerns of Indian clients, making your experience comfortable and trustworthy.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            
                            <!-- Overview of all services (with customer service emphasis) -->
                            <div class="service-projects-box">
                                <h2 class="text-anime-style-2">Exceptional support <span>across all services</span></h2>
                                <p class="wow fadeInUp">Our commitment to customer service extends to every area of our business. No matter which service you use, you can expect the same high standard of care.</p>
                                
                                <!-- Three highlighted service items with customer service spin -->
                                <div class="service-project-item-list">
                                    
                                    <div class="service-project-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="service-project-item-content">
                                            <h3>Property Management Support</h3>
                                            <p>For landlords and tenants, we provide clear communication on maintenance requests, rent queries, and tenancy matters. Our team ensures issues are resolved quickly and professionally.</p>
                                        </div>

                                    </div>
                                    
                                    
                                    
                                    <div class="service-project-item wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="service-project-item-content">
                                            <h3>Real Estate Client Care</h3>
                                            <p>Whether you are buying or leasing, we guide you through viewings, negotiations, and paperwork with patience and clarity. We're here to answer all your questions—no matter how small.</p>
                                        </div>

                                    </div>
                                    
                                    
                                    
                                    <div class="service-project-item wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="service-project-item-content">
                                            <h3>Marketing & Legal Assistance</h3>
                                            <p>Our marketing and legal teams work hand-in-hand with customer service to ensure you understand every campaign and every legal document. We explain complex terms in simple language.</p>
                                        </div>

                                    </div>
                                    
                                </div>

                                <!-- Additional service descriptions highlighting customer care -->
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <p><strong>Expert Guidance:</strong> Our 32 years of experience means we can answer your questions with authority. We provide honest, clear advice to help you make informed decisions.</p>
                                        <p><strong>Business Setup Support:</strong> For entrepreneurs and companies, we offer dedicated assistance with business setup queries, licensing, and PRO services, ensuring a smooth establishment process.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>After-Hours Support:</strong> We know that questions can arise anytime. Our team provides after-hours support for urgent matters, especially for international clients in different time zones.</p>
                                        <p><strong>Feedback & Continuous Improvement:</strong> We actively seek your feedback to improve our services. Your satisfaction is our measure of success.</p>
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                            <!-- Why Customer Service section -->
                            <div class="service-entry-info-box">
                                <h2 class="text-anime-style-2">Why exceptional <span>customer service matters</span></h2>
                                <p class="wow fadeInUp">In the world of property and real estate, transactions can be complex and stressful. Exceptional customer service transforms that experience—providing clarity, reducing anxiety, and building trust. With 32 years of leadership, we've learned that our clients return because of how we make them feel: valued, heard, and supported.</p>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">Whether you are an overseas investor, a first-time tenant, or a family relocating to Abu Dhabi, our customer service team is your constant companion. We are exclusively dedicated to helping Indians navigate the property market with confidence, offering research‑backed guidance and a caring, responsive approach.</p>
                                <ul class="wow fadeInUp" data-wow-delay="0.4s">
                                    <li>32 years of leadership built on client trust and satisfaction</li>
                                    <li>Dedicated, multilingual team for Indian clients</li>
                                    <li>Quick response times and personalized support</li>
                                    <li>Commitment to clarity, care, and long-term relationships</li>
                                </ul>
                            </div>
                            
                        </div>
                        

                        
                        <div class="page-single-faqs">
                            
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Your customer service questions <span>answered</span></h2>
                            </div>
                            

                            
                            <div class="faq-accordion" id="faqaccordion">
                                
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            1. How quickly do you respond to customer inquiries?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse" role="region" aria-labelledby="heading1" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We aim to respond to all inquiries within 24 hours on business days. For urgent matters, we provide direct contact numbers and after-hours support to ensure you get timely assistance.</p>
                                            <ul>
                                                <li>Email: response within 24 hours</li>
                                                <li>Phone/WhatsApp: immediate during office hours</li>
                                                <li>Urgent after-hours: dedicated contact provided</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                

                                
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            2. Do you have Hindi-speaking staff for Indian clients?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" role="region" aria-labelledby="heading2" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes, we have team members who speak Hindi and other Indian languages. We understand the importance of clear communication and cultural comfort, especially for complex property matters.</p>
                                        </div>
                                    </div>
                                </div>
                                

                                
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            3. Can I get updates on my property management status?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse show" role="region" aria-labelledby="heading3" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Absolutely. We provide regular updates on maintenance, tenant matters, rent collection, and any issues. You can also contact your dedicated representative anytime for a status update.</p>
                                        </div>
                                    </div>
                                </div>
                                

                                
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            4. What if I have a problem or complaint?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" role="region" aria-labelledby="heading4" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We take all concerns seriously. Please contact your dedicated representative or our customer service manager directly. We will investigate promptly and work to resolve the issue to your satisfaction. Your feedback helps us improve.</p>
                                        </div>
                                    </div>
                                </div>
                                

                                
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            5. How can I reach your customer service team?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" role="region" aria-labelledby="heading5" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>You can reach us by phone, email, WhatsApp, or by visiting our office in Abu Dhabi. All our contact details are available on our website. We look forward to hearing from you!</p>
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
@endsection
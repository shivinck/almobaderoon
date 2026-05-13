@extends('layouts.web')

@section('title', 'Business Setup in Abu Dhabi | TEAM WORK')
@section('description', 'Expert business setup services in Abu Dhabi by TEAM WORK. 32 years of leadership. Assistance with company formation, trade licenses, PRO services, and commercial property setup.')

@section('content')
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Business <span>Setup</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">Home</a></li>
                                <li class="breadcrumb-item"><a href="/services">Services</a></li>
                                <li class="breadcrumb-item"><a >Business Setup</a></li>
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
                                <img src="https://cdn.pixabay.com/photo/2020/07/08/04/12/work-5382501_1280.jpg" alt="Business Setup">
                            </figure>
                        </div>
                        
                        
                        
                        <div class="service-entry">
                            <!-- Main description with 32 years leadership and business setup focus -->
                            <p class="wow fadeInUp"><strong>Team Work Business Management Company</strong> is a leading business consultancy firm in Abu Dhabi, UAE, serving the community for more than <strong>32 years</strong>. Our business setup division provides comprehensive support for entrepreneurs, investors, and companies looking to establish or expand their presence in Abu Dhabi.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">From company formation and trade license acquisition to PRO services and visa processing, we handle all the administrative and legal procedures, allowing you to focus on your core business activities. We also assist with finding the perfect commercial property for your operations.</p>

                            <!-- "Ready Home" / Welcome section integrated for business setup angle -->
                            <div class="service-approach-box">
                                <h2 class="text-anime-style-2">Ready Home: Business Setup Support for Indian Entrepreneurs</h2>
                                <p class="wow fadeInUp">Are you an Indian entrepreneur looking to start a business in Abu Dhabi? Our team has decades of experience guiding Indian nationals through the company formation process. We understand the unique requirements and opportunities for Indian businesses in the UAE and provide tailored support every step of the way.</p>
                                
                                <!-- Three business setup-focused approach items -->
                                <div class="service-approach-item-list">
                                    
                                    <div class="service-approach-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="service-approach-item-header">
                                            <div class="icon-box">
                                                <img src="{{ URL::cdn('images/icon-service-approach-item-1.svg') }}" alt="">
                                            </div>
                                            <div class="service-approach-item-title">
                                                <h3>Company Formation & Licensing</h3>
                                            </div>
                                        </div>
                                        <div class="service-approach-item-content">
                                            <p>We assist with all types of company formation in Abu Dhabi—mainland, free zone, or offshore. We handle trade license applications, initial approvals, memorandum drafting, and all regulatory submissions.</p>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="service-approach-item wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="service-approach-item-header">
                                            <div class="icon-box">
                                                <img src="{{ URL::cdn('images/icon-service-approach-item-1.svg') }}" alt="">
                                            </div>
                                            <div class="service-approach-item-title">
                                                <h3>PRO & Government Services</h3>
                                            </div>
                                        </div>
                                        <div class="service-approach-item-content">
                                            <p>Our PRO team manages all government interactions—visa processing, immigration cards, labour contracts, and document attestation. We ensure your business remains compliant with UAE regulations.</p>
                                        </div>
                                    </div>
                                    

                                    
                                    <div class="service-approach-item wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="service-approach-item-header">
                                            <div class="icon-box">
                                                <img src="{{ URL::cdn('images/icon-service-approach-item-1.svg') }}" alt="">
                                            </div>
                                            <div class="service-approach-item-title">
                                                <h3>Commercial Property Setup</h3>
                                            </div>
                                        </div>
                                        <div class="service-approach-item-content">
                                            <p>Finding the right office, retail, or industrial space is crucial. We help you identify and secure commercial properties that meet your business needs, and assist with tenancy contracts and registration.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            
                            <!-- Overview of all services (with business setup emphasis) -->
                            <div class="service-projects-box">
                                <h2 class="text-anime-style-2">Comprehensive business <span>setup solutions</span></h2>
                                <p class="wow fadeInUp">Our business setup services are designed to make your entry into the Abu Dhabi market seamless and efficient, backed by 32 years of leadership.</p>
                                
                                <!-- Three highlighted service items with business setup spin -->
                                <div class="service-project-item-list">
                                    
                                    <div class="service-project-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="service-project-item-content">
                                            <h3>Mainland Company Formation</h3>
                                            <p>Establish your business on the Abu Dhabi mainland with a local partner or under 100% foreign ownership (where applicable). We guide you through the entire process, including DED approvals.</p>
                                        </div>

                                    </div>
                                    
                                    
                                    
                                    <div class="service-project-item wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="service-project-item-content">
                                            <h3>Free Zone Company Setup</h3>
                                            <p>Take advantage of 100% foreign ownership, tax benefits, and simplified import/export procedures. We help you choose the right free zone and complete all registration formalities.</p>
                                        </div>

                                    </div>
                                    
                                    
                                    
                                    <div class="service-project-item wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="service-project-item-content">
                                            <h3>Offshore Company Registration</h3>
                                            <p>For international holding structures or asset protection, we assist with offshore company formation in compliant jurisdictions, ensuring all legal and banking requirements are met.</p>
                                        </div>

                                    </div>
                                    
                                </div>

                                <!-- Additional service descriptions highlighting business setup expertise -->
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <p><strong>Visa & Immigration Services:</strong> We handle investor visas, employment visas, dependent visas, and residency processing for you and your employees.</p>
                                        <p><strong>Legal & Compliance Support:</strong> Our legal team ensures all documentation—trade licenses, tenancy contracts, employment contracts—complies with UAE law.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Expert Guidance:</strong> 32 years of experience means we can advise on the optimal business structure, jurisdiction, and local regulations for your specific industry.</p>
                                        <p><strong>Ongoing PRO Services:</strong> We continue to support your business with annual license renewal, visa renewals, and all government transactions.</p>
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                            <!-- Why Business Setup section -->
                            <div class="service-entry-info-box">
                                <h2 class="text-anime-style-2">Why choose our <span>business setup services</span></h2>
                                <p class="wow fadeInUp">Setting up a business in a new country involves navigating complex regulations, cultural nuances, and administrative procedures. With 32 years of leadership in Abu Dhabi, we provide the expertise and local knowledge to make your business setup smooth, compliant, and efficient.</p>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">Whether you are an individual entrepreneur, a family business, or a large corporation, our team offers personalized support tailored to your goals. We are exclusively dedicated to helping Indian entrepreneurs establish and grow their businesses in Abu Dhabi, offering research‑backed guidance and end‑to‑end assistance.</p>
                                <ul class="wow fadeInUp" data-wow-delay="0.4s">
                                    <li>32 years of leadership in Abu Dhabi business consultancy</li>
                                    <li>Specialized support for Indian entrepreneurs and investors</li>
                                    <li>Comprehensive services: formation, licensing, PRO, visas, property</li>
                                    <li>Commitment to integrity, efficiency, and client success</li>
                                </ul>
                            </div>
                            
                        </div>
                        

                        
                        <div class="page-single-faqs">
                            
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Your business setup questions <span>answered by experts</span></h2>
                            </div>
                            

                            
                            <div class="faq-accordion" id="faqaccordion">
                                
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            1. What are the steps to set up a business in Abu Dhabi?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse" role="region" aria-labelledby="heading1" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>The typical steps include:</p>
                                            <ul>
                                                <li>Choosing the business activity and legal structure</li>
                                                <li>Selecting a jurisdiction (mainland, free zone, offshore)</li>
                                                <li>Trade name reservation and initial approval</li>
                                                <li>Drafting Memorandum of Association</li>
                                                <li>Leasing office/commercial space</li>
                                                <li>Submitting documents for trade license issuance</li>
                                                <li>Visa processing for owners and employees</li>
                                            </ul>
                                            <p>We manage all these steps for you.</p>
                                        </div>
                                    </div>
                                </div>
                                

                                
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            2. Can Indian nationals own 100% of a company in Abu Dhabi?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" role="region" aria-labelledby="heading2" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes, in most free zones, Indian nationals can own 100% of their company. On the mainland, recent reforms allow 100% foreign ownership for many business activities. We'll advise you on the best structure for your specific situation.</p>
                                        </div>
                                    </div>
                                </div>
                                

                                
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            3. What is the cost and time required to set up a company?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse show" role="region" aria-labelledby="heading3" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>The cost and timeline vary based on business activity, jurisdiction, and license type. Typically, company formation can take 1-4 weeks. We provide a transparent quote after understanding your requirements, with no hidden fees.</p>
                                        </div>
                                    </div>
                                </div>
                                

                                
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            4. Do you help with finding office or commercial space?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" role="region" aria-labelledby="heading4" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes, we assist in finding the ideal commercial property for your business—whether office, retail, or industrial space. We handle lease negotiations, tenancy contracts, and Ejari registration as part of our service.</p>
                                        </div>
                                    </div>
                                </div>
                                

                                
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            5. How do I start the business setup process with TEAM WORK?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" role="region" aria-labelledby="heading5" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Simply contact us to schedule a consultation. We'll discuss your business idea, goals, and budget. Our experts will then propose the optimal setup strategy and provide a clear roadmap and quote. We're here to make your business journey smooth and successful.</p>
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
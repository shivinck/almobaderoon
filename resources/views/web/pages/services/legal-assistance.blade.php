@extends('layouts.web')

@section('title', 'Legal Assistance for Property in Abu Dhabi | TEAM WORK')
@section('description', 'Expert legal assistance for property transactions in Abu Dhabi by TEAM WORK. 32 years of leadership. Services include contract review, Ejari registration, freehold ownership transfers, and more for Indian and global investors.')

@section('content')
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Legal <span>Assistance</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">Home</a></li>
                                <li class="breadcrumb-item"><a href="/services">Services</a></li>
                                <li class="breadcrumb-item"><a >Legal Assistance</a></li>
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
                                <img src="https://cdn.pixabay.com/photo/2025/12/18/06/35/business-law-10021863_1280.jpg" alt="Legal Assistance">
                            </figure>
                        </div>
                        
                        
                        
                        <div class="service-entry">
                            <!-- Main description with 32 years leadership and legal assistance focus -->
                            <p class="wow fadeInUp"><strong>Team Work Business Management Company</strong> is a leading business consultancy firm in Abu Dhabi, UAE, serving the community for more than <strong>32 years</strong>. Our legal assistance division ensures that all property transactions and management activities are completed smoothly, efficiently, and in full compliance with UAE laws.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Whether you are buying, selling, leasing, or managing a property, navigating the legal landscape in a foreign country can be complex. We provide expert guidance on contracts, registrations, and regulatory requirements, giving you complete peace of mind.</p>

                            <!-- "Ready Home" / Welcome section integrated for legal angle -->
                            <div class="service-approach-box">
                                <h2 class="text-anime-style-2">Ready Home: Legal Support for Indian Freehold Property Buyers</h2>
                                <p class="wow fadeInUp">Are you an Indian looking to buy a freehold property in Abu Dhabi? Our legal team specializes in assisting Indian nationals through every legal step—from title deed verification to final registration. We ensure your investment is secure and fully compliant with local regulations.</p>
                                
                                <!-- Three legal-focused approach items -->
                                <div class="service-approach-item-list">
                                    
                                    <div class="service-approach-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="service-approach-item-header">
                                            <div class="icon-box">
                                                <img src="{{ URL::cdn('images/icon-service-approach-item-1.svg') }}" alt="">
                                            </div>
                                            <div class="service-approach-item-title">
                                                <h3>Contract Review & Drafting</h3>
                                            </div>
                                        </div>
                                        <div class="service-approach-item-content">
                                            <p>Our experts review and draft all property-related contracts—sales agreements, lease contracts, and management agreements—ensuring your interests are protected and terms are clear.</p>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="service-approach-item wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="service-approach-item-header">
                                            <div class="icon-box">
                                                <img src="{{ URL::cdn('images/icon-service-approach-item-1.svg') }}" alt="">
                                            </div>
                                            <div class="service-approach-item-title">
                                                <h3>Ejari Registration & Tenancy Contracts</h3>
                                            </div>
                                        </div>
                                        <div class="service-approach-item-content">
                                            <p>We handle the entire Ejari registration process for rental properties, ensuring your tenancy contract is officially registered with the Abu Dhabi government, which is essential for utility connections and visa processing.</p>
                                        </div>
                                    </div>
                                    

                                    
                                    <div class="service-approach-item wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="service-approach-item-header">
                                            <div class="icon-box">
                                                <img src="{{ URL::cdn('images/icon-service-approach-item-1.svg') }}" alt="">
                                            </div>
                                            <div class="service-approach-item-title">
                                                <h3>Freehold Ownership Transfers</h3>
                                            </div>
                                        </div>
                                        <div class="service-approach-item-content">
                                            <p>For Indian investors buying freehold property, we manage the entire transfer process at the Abu Dhabi Department of Municipalities and Transport, ensuring all documentation is accurate and deadlines are met.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            
                            <!-- Overview of all services (with legal emphasis) -->
                            <div class="service-projects-box">
                                <h2 class="text-anime-style-2">Comprehensive legal support <span>for every service</span></h2>
                                <p class="wow fadeInUp">Our legal expertise underpins every service we offer. From property management to business setup, we ensure all legal formalities are handled correctly.</p>
                                
                                <!-- Three highlighted service items with legal spin -->
                                <div class="service-project-item-list">
                                    
                                    <div class="service-project-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="service-project-item-content">
                                            <h3>Property Management Legalities</h3>
                                            <p>We handle all legal aspects of property management, including drafting tenancy contracts, managing security deposits as per law, and handling dispute resolution if needed.</p>
                                        </div>

                                    </div>
                                    
                                    
                                    
                                    <div class="service-project-item wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="service-project-item-content">
                                            <h3>Real Estate Transaction Legal Support</h3>
                                            <p>For sales and leasing, we manage MOU drafting, title deed verification, transfer forms, and registration with the relevant authorities, ensuring a smooth and legal transfer.</p>
                                        </div>

                                    </div>
                                    
                                    
                                    
                                    <div class="service-project-item wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="service-project-item-content">
                                            <h3>Property Marketing Compliance</h3>
                                            <p>Our marketing campaigns adhere to UAE advertising standards and real estate regulations. We ensure all promotional materials are compliant and accurately represent the property.</p>
                                        </div>

                                    </div>
                                    
                                </div>

                                <!-- Additional service descriptions with legal connection -->
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <p><strong>Customer Service:</strong> Our team provides clear explanations of legal processes, answering your questions and keeping you informed at every stage.</p>
                                        <p><strong>Expert Guidance:</strong> 32 years of experience means we anticipate legal challenges and guide you away from potential pitfalls, whether you're a first-time buyer or a seasoned investor.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Business Setup:</strong> For commercial property investors, we assist with the legal aspects of establishing a business in Abu Dhabi, including trade licenses and PRO services.</p>
                                        <p><strong>Visa & Documentation:</strong> We help property buyers and investors with visa documentation, residency processes, and other legal paperwork required for living and investing in the UAE.</p>
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                            <!-- Why Legal Assistance section -->
                            <div class="service-entry-info-box">
                                <h2 class="text-anime-style-2">Why professional <span>legal assistance</span></h2>
                                <p class="wow fadeInUp">Property transactions involve complex legal procedures, especially for international buyers. Professional legal assistance ensures your investment is protected, contracts are enforceable, and you remain compliant with UAE laws. With 32 years of leadership, our legal team provides the expertise you need.</p>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">Whether you are an investor living overseas or a local owner, our proactive legal support minimizes risks, handles all documentation, and provides transparent advice. We are exclusively dedicated to helping Indians navigate freehold property laws, offering research‑backed guidance and end‑to‑end legal support.</p>
                                <ul class="wow fadeInUp" data-wow-delay="0.4s">
                                    <li>32 years of leadership in Abu Dhabi real estate law</li>
                                    <li>Specialized legal team for Indian freehold property buyers</li>
                                    <li>Comprehensive services: contracts, registration, transfers, visas</li>
                                    <li>Commitment to accuracy, transparency, and client peace of mind</li>
                                </ul>
                            </div>
                            
                        </div>
                        

                        
                        <div class="page-single-faqs">
                            
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Your legal questions answered <span>by our experts</span></h2>
                            </div>
                            

                            
                            <div class="faq-accordion" id="faqaccordion">
                                
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            1. What legal documents are required to buy freehold property in Abu Dhabi?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse" role="region" aria-labelledby="heading1" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Typically, you need a valid passport, UAE residency visa (if applicable), and proof of funds. Our legal team will guide you through the specific requirements based on your nationality and residency status. For Indian buyers, we ensure all documents are properly attested and translated if needed.</p>
                                            <ul>
                                                <li>Passport copy & UAE ID (if resident)</li>
                                                <li>Proof of income/funds</li>
                                                <li>Title deed search & verification</li>
                                                <li>MOU & Sale/Purchase Agreement</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                

                                
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            2. Can you help with Ejari registration for my rental property?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" role="region" aria-labelledby="heading2" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Absolutely. We handle the complete Ejari registration process, including preparing the tenancy contract, submitting documents to the Abu Dhabi Municipality, and obtaining the Ejari certificate, which is essential for utilities and visa processing.</p>
                                        </div>
                                    </div>
                                </div>
                                

                                
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            3. What is the process for transferring freehold property ownership?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse show" role="region" aria-labelledby="heading3" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>The process involves: signing a Memorandum of Understanding (MOU), obtaining a No Objection Certificate (NOC) from the developer (if applicable), paying transfer fees, and registering the new title deed at the Abu Dhabi Department of Municipalities and Transport. We manage every step for you.</p>
                                        </div>
                                    </div>
                                </div>
                                

                                
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            4. Do you assist with visa documentation for property investors?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" role="region" aria-labelledby="heading4" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes, property investors may be eligible for residency visas. We assist with the documentation required for visa applications, including title deed copies, tenancy contracts, and other supporting documents as per UAE immigration rules.</p>
                                        </div>
                                    </div>
                                </div>
                                

                                
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            5. How can I get legal assistance for my property transaction?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" role="region" aria-labelledby="heading5" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Simply contact us to discuss your needs. Whether you are buying, selling, renting, or managing a property, we'll schedule a consultation with our legal team, explain the process, and provide a transparent quote for our services.</p>
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
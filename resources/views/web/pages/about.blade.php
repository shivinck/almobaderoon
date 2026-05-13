@extends('layouts.web')

@section('title', '')
@section('description', '')

@section('content')
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">About us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('get.home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('get.about') }}">About Us</a></li>
                            </ol>
                        </nav>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    

    
    <div class="about-us-prime">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">

                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Who We Are</span>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Leading business consultancy firm in Abu Dhabi <span>serving the community for 32 years</span></h2>
                    </div>

                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-xl-6">

                    <div class="about-us-image-box-prime wow fadeInUp">

                        <div class="about-us-image-box-1-prime">

                            <div class="about-us-image-prime">
                                <figure class="image-anime">
                                    <img src="{{ URL::cdn('images/about-us-image-1-prime.jpg') }}" alt="About Us">
                                </figure>
                            </div>





                        </div>



                        <div class="about-us-image-box-2-prime">

                            <div class="about-us-image-prime">
                                <figure class="image-anime">
                                    <img src="{{ URL::cdn('images/about-us-image-2-prime.jpg') }}" alt="">
                                </figure>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-xl-6">

                    <div class="about-us-content-prime">

                        <div class="about-us-body-prime">

                            <div class="about-us-body-item-prime wow fadeInUp">
                                <div class="icon-box">
                                    <img src="{{ URL::cdn('images/icon-about-body-1-prime.svg') }}" alt="">
                                </div>
                                <div class="about-body-item-content-prime">
                                    <h3>Expert Leadership Team</h3>
                                    <p>Under the guidance of Khamis Saeed Al Suwaidi, a member of a prominent family and MBA graduate, our company has provided exceptional services for over three decades.</p>
                                </div>
                            </div>



                            <div class="about-us-body-item-prime wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="{{ URL::cdn('images/icon-about-body-2-prime.svg') }}" alt="">
                                </div>
                                <div class="about-body-item-content-prime">
                                    <h3>Decades of Gulf Experience</h3>
                                    <p>Our Managing Director, Ansar Moolayil, brings over 42 years of experience in Gulf and 35 years in business, while our CEO Nirosy Jeyaraj adds 6 years of dedicated expertise.</p>
                                </div>
                            </div>

                        </div>



                        <div class="about-counter-item-list-prime wow fadeInUp">

                            <div class="about-counter-item-prime">
                                <div class="about-counter-item-header-prime">
                                    <div class="about-counter-item-no-prime">
                                        <h2><span class="counter">750</span>+</h2>
                                    </div>
                                    <div class="icon-box">
                                        <img src="{{ URL::cdn('images/icon-about-counter-item-1-prime.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="about-counter-item-content-prime">
                                    <h3>Completed Projects</h3>
                                    <p>Residential, commercial, and business setups completed successfully.</p>
                                </div>
                            </div>



                            <div class="about-counter-item-prime">
                                <div class="about-counter-item-header-prime">
                                    <div class="about-counter-item-no-prime">
                                        <h2><span class="counter">5</span>K+</h2>
                                    </div>
                                    <div class="icon-box">
                                        <img src="{{ URL::cdn('images/icon-about-counter-item-2-prime.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="about-counter-item-content-prime">
                                    <h3>Satisfied Clients</h3>
                                    <p>Homeowners, investors & businesses who trust our expertise.</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    
<div class="our-approach bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    
                    <div class="our-approach-images">
                        
                        <div class="our-approach-image-box-1">
                            
                            <div class="our-approach-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ URL::cdn('images/our-approach-image-1.jpg') }}" alt="Our Approach Image 1">
                                </figure>
                            </div> 
                            
                        </div>
                        

                        
                        <div class="our-approach-image-box-2">
                            
                            <div class="our-approach-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ URL::cdn('images/our-approach-image-2.jpg') }}" alt="Our Approach Image 2">
                                </figure>
                            </div> 
                            
                        </div>
                        
                    </div>
                    
                </div>

                <div class="col-xl-6">
                    
                    <div class="our-approach-content">
                        
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Our Approach</span>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Creating a great tomorrow for <span>everyone</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We believe that we are enablers of people’s dreams. Our approach combines vision, mission, and specialized services to deliver exceptional real estate solutions.</p>
                        </div>
                        

                        
                        <div class="approach-item-box">
                            
                            
                            <div class="approach-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="https://html.awaikenthemes.com/skyvilla/images/icon-approach-item-1.svg" alt="">
                                </div>
                                <div class="approach-item-content">
                                    <h3>Our Mission</h3>
                                    <p>To be the most trusted name in real estate globally. To provide exceptional property management and real estate services tailored to the unique needs of each client, ensuring peace of mind and maximizing the value of their investments. </p>
                                </div>
                            </div>
                            

                            
                            <div class="approach-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="https://html.awaikenthemes.com/skyvilla/images/icon-approach-item-2.svg" alt="">
                                </div>
                                <div class="approach-item-content">
                                    <h3>Our Vision</h3>
                                    <p>To be the premier destination for property management and real estate solutions, recognized for our commitment to excellence, innovation, and client satisfaction. We believe that we are enablers of people’s dreams. </p>
                                </div>
                            </div>
                            

                            
                            <div class="approach-item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="icon-box">
                                    <img src="https://html.awaikenthemes.com/skyvilla/images/icon-approach-item-3.svg" alt="">
                                </div>
                                <div class="approach-item-content">
                                    <h3>What we do</h3>
                                    <p>We offer full-service property management, real estate brokerage, and strategic property marketing. From tenant management and maintenance to sales, leasing, valuation, and multi-channel marketing campaigns—we maximize your property’s potential and returns. </p>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<!--     
    <div class="our-history">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    
                    <div class="our-history-content">
                        
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Our History</span>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Our journey growth and <span>construction excellence</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Our journey reflects steady growth, industry expertise, and a commitment to construction excellence, built through years of successful projects and trusted client relationships.</p>
                        </div>
                        

                        
                        <div class="explore-project-circle wow fadeInUp" data-wow-delay="0.4s">
                            <a href="projects.html">
                                <img src="https://html.awaikenthemes.com/skyvilla/images/explore-project-circle-accent.svg" alt="">
                            </a>
                        </div>
                        
                    </div>
                    
                </div>

                <div class="col-xl-8">
                    
                    <div class="history-item-list">
                        
                        <div class="history-item wow fadeInUp">
                            
                            <div class="history-item-header">
                                <h2>2010</h2>
                                <div class="history-item-content">
                                    <h3>Foundation & Vision</h3>
                                    <p>Our journey began in 2010 with a clear vision deliver dependable, high-quality construction.</p>
                                </div>
                            </div>
                            

                            
                            <div class="history-item-image">
                                <figure>
                                    <img src="https://html.awaikenthemes.com/skyvilla/images/our-history-image-1.png" alt="">
                                </figure>
                            </div>
                            
                        </div>
                        

                        
                        <div class="history-item wow fadeInUp" data-wow-delay="0.2s">
                            
                            <div class="history-item-header">
                                <h2>2014</h2>
                                <div class="history-item-content">
                                    <h3>Early Growth & First Milestone</h3>
                                    <p>Our journey began in 2010 with a clear vision deliver dependable, high-quality construction.</p>
                                </div>
                            </div>
                            

                            
                            <div class="history-item-image">
                                <figure>
                                    <img src="https://html.awaikenthemes.com/skyvilla/images/our-history-image-2.png" alt="">
                                </figure>
                            </div>
                            
                        </div>
                        

                        
                        <div class="history-item wow fadeInUp" data-wow-delay="0.4s">
                            
                            <div class="history-item-header">
                                <h2>2018</h2>
                                <div class="history-item-content">
                                    <h3>Expertise Development</h3>
                                    <p>Our journey began in 2010 with a clear vision deliver dependable, high-quality construction.</p>
                                </div>
                            </div>
                            

                            
                            <div class="history-item-image">
                                <figure>
                                    <img src="https://html.awaikenthemes.com/skyvilla/images/our-history-image-3.png" alt="">
                                </figure>
                            </div>
                            
                        </div>
                        

                        
                        <div class="history-item wow fadeInUp" data-wow-delay="0.6s">
                            
                            <div class="history-item-header">
                                <h2>2021</h2>
                                <div class="history-item-content">
                                    <h3>Sustainable Practices</h3>
                                    <p>Our journey began in 2010 with a clear vision deliver dependable, high-quality construction.</p>
                                </div>
                            </div>
                            

                            
                            <div class="history-item-image">
                                <figure>
                                    <img src="https://html.awaikenthemes.com/skyvilla/images/our-history-image-4.png" alt="">
                                </figure>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
     -->

    
  
    

    
    <!-- <div class="our-team">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Team</span>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Skilled professionals behind every <span>successful project</span></h2>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    
                    <div class="team-item wow fadeInUp">
                        
                        <div class="team-item-content">
                            <h2><a href="team-single.html">John Smith</a></h2>
                            <p>Chief Architect</p>
                        </div>
                        

                        
                        <div class="team-item-image">
                            <figure>
                                <img src="https://html.awaikenthemes.com/skyvilla/images/team-1.png" alt="">
                            </figure>
                        </div>
                        

                        
                        <div class="team-social-list">
                            <ul>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>

                <div class="col-xl-3 col-md-6">
                    
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        
                        <div class="team-item-content">
                            <h2><a href="team-single.html">Albert Flores</a></h2>
                            <p>Project Manager</p>
                        </div>
                        

                        
                        <div class="team-item-image">
                            <figure>
                                <img src="https://html.awaikenthemes.com/skyvilla/images/team-2.png" alt="">
                            </figure>
                        </div>
                        

                        
                        <div class="team-social-list">
                            <ul>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>

                <div class="col-xl-3 col-md-6">
                    
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        
                        <div class="team-item-content">
                            <h2><a href="team-single.html">Michael Brown</a></h2>
                            <p>Civil Engineer</p>
                        </div>
                        

                        
                        <div class="team-item-image">
                            <figure>
                                <img src="https://html.awaikenthemes.com/skyvilla/images/team-3.png" alt="">
                            </figure>
                        </div>
                        

                        
                        <div class="team-social-list">
                            <ul>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>

                <div class="col-xl-3 col-md-6">
                    
                    <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
                        
                        <div class="team-item-content">
                            <h2><a href="team-single.html">Sarah Wilson</a></h2>
                            <p>Project Manager</p>
                        </div>
                        

                        
                        <div class="team-item-image">
                            <figure>
                                <img src="https://html.awaikenthemes.com/skyvilla/images/team-4.png" alt="">
                            </figure>
                        </div>
                        

                        
                        <div class="team-social-list">
                            <ul>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>

                <div class="col-lg-12">
                    
                    <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.4s">
                        
                        <div class="satisfy-client-images">
                            <div class="satisfy-client-image">
                                <figure class="image-anime">
                                    <img src="images/author-1.jpg" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image add-more">
                                <img src="images/icon-phone-primary.svg" alt="">
                            </div>
                        </div>
                            
                        <p>Complete Real Estate And Construction Solutions - <a href="contact.html">Get Free Quote</a></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
     -->

    
    <div class="cta-box bg-section dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    
                    <div class="cta-box-content">
                        
                        <div class="cta-box-content-header">
                            
                            <div class="section-title">
                                <span class="section-sub-title wow fadeInUp">Quick Support</span>
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Quick support when you<span>need it most</span></h2>
                            </div>
                            
                        </div>
                        

                        
                        <div class="cta-box-contact-details wow fadeInUp" data-wow-delay="0.2s">
                            
                            <div class="cta-item-box-list">
                                
                                <div class="cta-box-item">
                                    <div class="icon-box">
                                        <img src="images/icon-cta-box-item-1.svg" alt="">
                                    </div>
                                    <div class="cta-box-item-content">
                                        <p>Call Us Now!</p>
                                        <h3><a href="tel:+009712 6446415">+009712 6446415</a></h3>
                                    </div>
                                </div>
                                

                                
                                <div class="cta-box-item">
                                    <div class="icon-box">
                                        <img src="images/icon-cta-box-item-2.svg" alt="">
                                    </div>
                                    <div class="cta-box-item-content">
                                        <p>E-mail Us Now!</p>
                                        <h3><a href="mailto:teamworkmarine@gmail.com">teamworkmarine@gmail.com</a></h3>
                                    </div>
                                </div>
                                

                                
                                <div class="cta-box-item">
                                    <div class="icon-box">
                                        <img src="images/icon-cta-box-item-3.svg" alt="">
                                    </div>
                                    <div class="cta-box-item-content">
                                        <p>Our Location</p>
                                        <h3>Office NO:1304, ADCP Business Tower C, Electra Road, Abu Dhabi, United Arab Emirates</h3>
                                    </div>
                                </div>
                                
                            </div>
                                                       
                        </div>
                        
                    </div>
                    
                </div>

                <div class="col-xl-7">
                    
                    <div class="cta-form-box">
                        
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Get In Toucht</span>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Send us a <span>message</span></h2>
                        </div>
                        

                        
                        <div class="cta-contact-form">
                            <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.2s">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
            
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name ="email" class="form-control" id="email" placeholder="Email Address" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
            
                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="5" placeholder="Write Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
            
                                    <div class="col-lg-12">
                                        <div class="cta-contact-form-btn">
                                            <button type="submit" class="btn-default"><span>Send Message</span></button>
                                            <div id="msgSubmit" class="h3 hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    

    <div class="our-services-prime bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">

                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Services</span>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">We offer a wide range of property management and real estate services</h2>
                    </div>

                </div>
            </div>

            <div class="row service-item-list-prime">
                <div class="col-xl-3 col-md-6">

                    <div class="service-item-prime wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{ URL::cdn('images/icon-service-item-1-prime.svg') }}" alt="">
                        </div>
                        <div class="service-item-body-prime">
                            <div class="service-item-content-prime">
                                <h2><a href="service-single.html">Property Management</a></h2>
                                <p>We provide a full range of property management services, including property maintenance, tenant management, rent collection, and more.</p>
                            </div>
                            <div class="service-item-btn-prime">
                                <a href="service-single.html"><img src="{{ URL::cdn('images/arrow-primary.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-md-6">

                    <div class="service-item-prime active wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="{{ URL::cdn('images/icon-service-item-2-prime.svg') }}" alt="">
                        </div>
                        <div class="service-item-body-prime">
                            <div class="service-item-content-prime">
                                <h2><a href="service-single.html">Real Estate Services</a></h2>
                                <p>We offer a wide range of real estate services, including property sales, property leasing, property valuation, and more.</p>
                            </div>
                            <div class="service-item-btn-prime">
                                <a href="service-single.html"><img src="{{ URL::cdn('images/arrow-primary.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-md-6">

                    <div class="service-item-prime wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="{{ URL::cdn('images/icon-service-item-3-prime.svg') }}" alt="">
                        </div>
                        <div class="service-item-body-prime">
                            <div class="service-item-content-prime">
                                <h2><a href="service-single.html">Property Marketing</a></h2>
                                <p>We use the latest marketing techniques to promote your property to potential buyers and tenants, including social media and online advertising.</p>
                            </div>
                            <div class="service-item-btn-prime">
                                <a href="service-single.html"><img src="{{ URL::cdn('images/arrow-primary.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-md-6">

                    <div class="service-item-prime wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="{{ URL::cdn('images/icon-service-item-4-prime.svg') }}" alt="">
                        </div>
                        <div class="service-item-body-prime">
                            <div class="service-item-content-prime">
                                <h2><a href="service-single.html">Legal Assistance</a></h2>
                                <p>We ensure that all legal formalities are completed smoothly and efficiently, giving you peace of mind throughout the process.</p>
                            </div>
                            <div class="service-item-btn-prime">
                                <a href="service-single.html"><img src="{{ URL::cdn('images/arrow-primary.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    
<div class="our-testimonials bg-section">
        <div class="container">
             <div class="row section-row align-items-center">
                <div class="col-xl-7">
                    
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Our Testimonials</span>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">What our clients say about our <span>construction services</span></h2>
                    </div>
                    
                </div>

                <div class="col-xl-5">
                    
                    <div class="section-content-btn">
                        
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>Our clients' feedback reflects our commitment to quality, reliability, and professionalism.</p>
                        </div>
                        
                        
                        
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a class="btn-default" href="testimonials.html">View All Reviews</a>
                        </div>
                        
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="testimonial-slider wow fadeInUp">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                
                                
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        
                                        <div class="testimonial-item-header">
                                            <div class="testimonial-item-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            
                                            <div class="testimonial-item-quote" style="display: none;">
                                                <img src="images/icon-testimonial-quote.svg" alt="">
                                            </div>
                                        </div>

                                        
                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-content">
                                                <p>“I’ve been working with TEAM WORK for several years now, and I couldn’t be happier with their services. From managing my properties to finding quality tenants, they’ve consistently exceeded my expectations. Their professionalism, attention to detail, and proactive approach make them stand out in the industry. Highly recommended!”</p>
                                            </div>
                                            
                                            <div class="testimonial-item-author">
                                                
                                                <div class="testimonial-author-image" style="display: none;">
                                                    <figure>
                                                        <img src="images/author-1.jpg" alt="">
                                                    </figure>
                                                </div>
                                                <div class="testimonial-author-content">
                                                    <h3>USER</h3>
                                                    <p>UAE</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-header">
                                            <div class="testimonial-item-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-item-quote" style="display: none;">
                                                <img src="images/icon-testimonial-quote.svg" alt="">
                                            </div>
                                        </div>

                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-content">
                                                <p>“Renting through TEAM WORK has been a breeze. Their team is always responsive, friendly, and quick to address any maintenance issues. They truly care about their tenants’ comfort and satisfaction, which is refreshing to see. I feel confident knowing that my rental property is in good hands.”</p>
                                            </div>
                                            
                                            <div class="testimonial-item-author">
                                                <div class="testimonial-author-image" style="display: none;">
                                                    <figure>
                                                        <img src="images/author-2.jpg" alt="">
                                                    </figure>
                                                </div>
                                                <div class="testimonial-author-content">
                                                    <h3>USER</h3>
                                                    <p>INDIA</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-header">
                                            <div class="testimonial-item-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-item-quote" style="display: none;">
                                                <img src="images/icon-testimonial-quote.svg" alt="">
                                            </div>
                                        </div>

                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-content">
                                                <p>“As an investor, I rely on TEAM WORK to manage my properties and maximize my returns. Their expertise in the Abu Dhabi real estate market is unmatched, and they’ve helped me navigate through various challenges with ease. Their transparent communication and proactive approach give me peace of mind knowing that my investments are in safe hands.”</p>
                                            </div>
                                            
                                            <div class="testimonial-item-author">
                                                <div class="testimonial-author-image" style="display: none;">
                                                    <figure>
                                                        <img src="images/author-3.jpg" alt="">
                                                    </figure>
                                                </div>
                                                <div class="testimonial-author-content">
                                                    <h3>USER</h3>
                                                    <p>UAE</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Keeping the 4th slide as a repeat of the first to maintain slider length, or could remove. 
                                     For simplicity, we'll repeat the first new testimonial to have at least 4 slides. -->
                                
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-header">
                                            <div class="testimonial-item-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-item-quote" style="display: none;">
                                                <img src="images/icon-testimonial-quote.svg" alt="">
                                            </div>
                                        </div>

                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-content">
                                                <p>“I’ve been working with TEAM WORK for several years now, and I couldn’t be happier with their services. From managing my properties to finding quality tenants, they’ve consistently exceeded my expectations. Their professionalism, attention to detail, and proactive approach make them stand out in the industry. Highly recommended!”</p>
                                            </div>
                                            
                                            <div class="testimonial-item-author">
                                                <div class="testimonial-author-image" style="display: none;">
                                                    <figure>
                                                        <img src="images/author-4.jpg" alt="">
                                                    </figure>
                                                </div>
                                                <div class="testimonial-author-content">
                                                    <h3>USER</h3>
                                                    <p>UAE</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> 
                        </div> 
                    </div> 
                    
                </div> 

                <div class="col-lg-12">
                    
                    <div class="company-supports-slider-box wow fadeInUp" data-wow-delay="0.2s">
                        
                        <div class="company-supports-content">
                            <hr>
                            <p>1000+ Trusted Clients Over Worldwide</p>
                            <hr>
                        </div>
                        

                        
                        <div class="company-supports-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    
                                    <div class="swiper-slide">
                                        <div class="company-supports-logo">
                                            <img src="images/company-supports-logo-1.svg" alt="">
                                        </div>
                                    </div>
                                    
    
                                    
                                    <div class="swiper-slide">
                                        <div class="company-supports-logo">
                                            <img src="images/company-supports-logo-2.svg" alt="">
                                        </div>
                                    </div>
                                    
    
                                    
                                    <div class="swiper-slide">
                                        <div class="company-supports-logo">
                                            <img src="images/company-supports-logo-3.svg" alt="">
                                        </div>
                                    </div>
                                    
    
                                    
                                    <div class="swiper-slide">
                                        <div class="company-supports-logo">
                                            <img src="images/company-supports-logo-4.svg" alt="">
                                        </div>
                                    </div>
                                    
    
                                    
                                    <div class="swiper-slide">
                                        <div class="company-supports-logo">
                                            <img src="images/company-supports-logo-5.svg" alt="">
                                        </div>
                                    </div>
                                    
    
                                    
                                    <div class="swiper-slide">
                                        <div class="company-supports-logo">
                                            <img src="images/company-supports-logo-1.svg" alt="">
                                        </div>
                                    </div>
                                    

                                    
                                    <div class="swiper-slide">
                                        <div class="company-supports-logo">
                                            <img src="images/company-supports-logo-2.svg" alt="">
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
    

    
    <div class="our-faqs-prime">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">

                    <div class="faq-image-box-prime wow fadeInUp">

                        <div class="faq-image-prime">
                            <figure class="image-anime">
                                <img src="{{ URL::cdn('images/faqs-image-prime.jpg') }}" alt="">
                            </figure>
                        </div>



                        <div class="faq-cta-box-prime">

                            <div class="faq-cta-content-box-prime">
                                <div class="icon-box">
                                    <img src="{{ URL::cdn('images/icon-headphone-primary.svg') }}" alt="">
                                </div>
                                <div class="faq-cta-content-prime">
                                    <h3>Get Free Consultation</h3>
                                    <p><a href="tel:+0097126446415">+009712 6446415</a></p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-xl-7">

                    <div class="faqs-content-prime">

                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Frequently Asked Questions</span>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Everything you need to know about <span>buying property in Abu Dhabi</span></h2>
                        </div>



                        <div class="faq-accordion-prime" id="accordion">

                            <div class="accordion-item-prime wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Q1. Can Indians buy freehold properties in Abu Dhabi?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" role="region" aria-labelledby="heading1" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Yes, Indians can buy freehold properties in designated areas of Abu Dhabi. Our research authorized team is exclusively dedicated to helping Indians navigate the process smoothly and find the best properties that meet their requirements.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="accordion-item-prime wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Q2. What types of properties can Indians buy in Abu Dhabi?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" role="region" aria-labelledby="heading2" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Indian nationals can purchase freehold flats, villas, townhouses, and commercial spaces in designated freehold zones across Abu Dhabi. Our team specializes in helping Indian buyers find the perfect property for their needs and budget.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="accordion-item-prime wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Q3. How long does the property buying process take?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" role="region" aria-labelledby="heading3" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>The property buying process typically takes 4-8 weeks from offer acceptance to completion, depending on factors like financing, legal formalities, and property type. Our team ensures all legal formalities are completed smoothly and efficiently.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="accordion-item-prime wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Q4. Do you provide legal assistance for property purchase?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" role="region" aria-labelledby="heading4" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Yes, we provide comprehensive legal assistance to ensure all legal formalities are completed smoothly and efficiently. Our team guides you through documentation, registration, and all legal requirements, giving you complete peace of mind.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="accordion-item-prime wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        Q5. What makes your team different from other real estate agents?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" role="region" aria-labelledby="heading5" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>We are a research authorized team exclusively dedicated to helping Indians buy freehold properties in Abu Dhabi. With 32 years of market experience, we understand the unique needs of Indian buyers and provide personalized guidance through every step of the process.</p>
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

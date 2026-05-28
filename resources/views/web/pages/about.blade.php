@extends('layouts.web')

@section('title', '')
@section('description', '')

@section('content')
<div class="welcomeabout-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="welcomeaboiut2 text-center">
                <h1 class="font-lora font-60 lineh-64 weight-500  margin-b24">About US</h1>
                <p class="font-20 weight-500 font-ks  lineh-20 "><a href="{{ url('/') }}" class="font-dark">Home</a><span><i class="fa-solid fa-angle-right"></i></span> About Us</p>
            </div>
        </div>
    </div>
</div>
<div class="about3-section-area section-padding5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about3-images1">
          <img src="{{ url('/webstatic/assets/images/about3-img1.png') }}" alt="">
          <img src="{{ url('/webstatic/assets/images/elementor17.png') }}" alt="" class="elementor-9 keyframe3">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="about3-textarea1">
          <span class="about3span font-ks lineh-16 font-16 weight-600 color-29 d-inline-block margin-b24">About Us</span>
          <h1 class="font-lora font-48 lineh-56 weight-600 color-29 margin-b20">Mission & Values Of Your Law Consult Firm</h1>
          <p class="font-ks font-16 lineh-26 weight-500 color-30 ">Provide professional advice and guidance on legal matters, helping clients understand their rights, obligations, and potential courses.</p>
        <div class="counter3-area3">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="counter3-boxarea4 text-center margin-b20 margin-t32">
               <div class="counter4-boxarea4">
                <h1 class="font-lora font-40 lineh-40 color-29 margin-b weight-600"><span class="counter">959</span>+</h1>
                <p class="font-ks font-16 lineh-16 weight-500 color-30">Case Settlement</p>
               </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="counter3-boxarea4 text-center margin-b20 margin-t32">
               <div class="counter4-boxarea4">
                <h1 class="font-lora font-40 lineh-40 color-29 margin-b weight-600"><span class="counter">250</span>+</h1>
                <p class="font-ks font-16 lineh-16 weight-500 color-30">Insurance Settlment</p>
               </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="counter3-boxarea4 text-center" >
               <div class="counter4-boxarea4">
                <h1 class="font-lora font-40 lineh-40 color-29 margin-b weight-600"><span class="counter">388</span>+</h1>
                <p class="font-ks font-16 lineh-16 weight-500 color-30">Personal Injury</p>
               </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="counter3-boxarea4 text-center">
               <div class="counter4-boxarea4">
                <h1 class="font-lora font-40 lineh-40 color-29 margin-b weight-600"><span class="counter">400</span>+</h1>
                <p class="font-ks font-16 lineh-16 weight-500 color-30">Divorce Case</p>
               </div>
              </div>
            </div>
          </div>
        </div>
        <a href="about.html" class="theme6-btn6 font-ks lineh-16 weight-700 color font-16 margin-t32">About Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="lawprovide-section-area section-padding5">
    <img src="{{ url('/webstatic/assets/images/elementor23.png') }}" alt="" class="elementor24">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="lawprovide-textarea">
                    <h1 class="font-lora font-48 lineh-56 weight-600 color-29 margin-b20">Our Team Provide Customer Centric Advice to Corporations</h1>
                    <p class="font-ks font-16 weight-500 lineh-26 margin-b20 color-30">Business Law Consulting: Detailed information about your business law services, including entity formation, contracts, mergers, acquisitions, and more. ntellectual Property.</p>
                    <p class="font-ks font-16 weight-500 lineh-26 color-30">Our team of seasoned legal professionals brings a wealth of experience across various practice areas. You can trust us to provide accurate, up-to-date, and effective legal advice.</p>
                    <a href="{{ url('/team') }}" class="theme6-btn6 font-ks lineh-16 weight-700 color font-16 margin-t32">Meet Our Attorneys <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="lawprovide-boaxrea margin-b30">
                    <div class="guidiance-boxarea">
                        <img src="{{ url('/webstatic/assets/images/gudeiance1.svg') }}" alt="" class="ts">
                    </div>
                    <div class="lax-conultingprovide">
                        <a href="{{ url('/services') }}" class="color-29"><h1 class="font-lora font-24 lineh-24 weight-600 color-29 margin-b14 ts">Personal Legal Guidance</h1></a>
                        <p class="font-ks lineh-26 weight-500 color-30 font-16 ts">The first and most crucial step is understanding your unique financial aspirations and challenges.</p>
                    </div>
                </div>

                <div class="lawprovide-boaxrea margin-b30">
                    <div class="guidiance-boxarea">
                        <img src="{{ url('/webstatic/assets/images/consulting1.svg') }}" alt="" class="ts">
                    </div>
                    <div class="lax-conultingprovide">
                        <a href="{{ url('/services') }}" class="color-29"><h1 class="font-lora font-24 lineh-24 weight-600 color-29 margin-b14 ts">Business Strategy Consulting</h1></a>
                        <p class="font-ks lineh-26 weight-500 color-30 font-16 ts">The first and most crucial step is understanding your unique financial aspirations and challenges.</p>
                    </div>
                </div>


                <div class="lawprovide-boaxrea">
                    <div class="guidiance-boxarea">
                        <img src="{{ url('/webstatic/assets/images/support1.svg') }}" alt="" class="ts">
                    </div>
                    <div class="lax-conultingprovide">
                        <a href="servicemiddle.html" class="color-29"><h1 class="font-lora font-24 lineh-24 weight-600 color-29 margin-b14 ts">Litigation Support</h1></a>
                        <p class="font-ks lineh-26 weight-500 color-30 font-16 ts">The first and most crucial step is understanding your unique financial aspirations and challenges.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ url('/webstatic/assets/images/elementor23.png') }}" alt="" class="elementor25">
</div>

<div class="mission-area-starts section-padding5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="missionimg">
                    <img src="{{ url('/webstatic/assets/images/missionimg1.png') }}" alt="" class="missionimg2">
                    <img src="{{ url('/webstatic/assets/images/elementor17.png') }}" alt="" class="elementor-9 keyframe3">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="missiontextarea">
                    <h1 class="font-lora font-48 lineh-56 weight-600 color-29 margin-b20">Our Mission</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30 margin-b">Business  Consulting: Detailed information about your business law services, including entity formation, contracts, mergers, acquisitions, and more. ntellectual Property.</p>
                    <p class="font-ks font-16 lineh-26 weight-500 color-30 margin-b">We are dedicated to achieving favorable results for our clients. Whether it's a business deal, personal matter, or legal dispute, we strive for excellence in all aspects of our work.</p>
                    <ul>
                        <li class="font-ks font-16 lineh-16 weight-600 color-17 margin-b20"><span><img src="{{ url('/webstatic/assets/images/check1.png') }}" alt=""></span>Client-Focused Solutions and Results</li>
                        <li class="font-ks font-16 lineh-16 weight-600 color-17 margin-b20"><span><img src="{{ url('/webstatic/assets/images/check1.png') }}" alt=""></span>Flexible, Value Driven Approach</li>
                        <li class="font-ks font-16 lineh-16 weight-600 color-17 margin-b20"><span><img src="{{ url('/webstatic/assets/images/check1.png') }}" alt=""></span>Warning of updated legal risks for customers</li>
                        <li class="font-ks font-16 lineh-16 weight-600 color-17"><span><img src="{{ url('/webstatic/assets/images/check1.png') }}" alt=""></span>A team of experienced and highly specialized</li>
                    </ul>
                    <a href="servicev1.html" class="theme6-btn6 font-ks lineh-16 weight-700 color font-16 margin-t32">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== MISSION END=======-->

<!--===== VISSION STARTS=======-->
<div class="vission-section-area section-padding5">
    <img src="{{ url('/webstatic/assets/images/elementor23.png') }}" alt="" class="elementor24">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="vission-textarea">
                    <h1 class="font-48 lineh-56 font-lora weight-600 color-29 margin-b20">The First Choice For Your Problem</h1>
                    <p class="font-16 lineh-26 weight-500 color-30 margin-b24">We understand that every case is unique. That's why we take the time to listen to your concerns and tailor our services to your specific situation, ensuring the best possible outcomes.</p>
                    <div class="border7 margin-b20"></div>

                  <div class="nav-section-area">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active nav-btn1" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Our Vission</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link nav-btn1" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Our History</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link nav-btn1" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Why Choose Us</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <p class="font-ks font-16 weight-500 lineh-26 margin-b20 color-30"><span class="weight-700 color-29">Personalized Approach:</span> We understand that every case unique. That's why we take the time to listen to your concerns and tailor our services to your specific situation.</p>
                            <p class="font-ks font-16 weight-500 lineh-26 color-30"><span class="weight-700 color-29">Client-Centric:</span> Your satisfaction is our priority. We maintain to open communication, keeping you informed at every step of the process. Your questions and feedback are always welcome.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <p class="font-ks font-16 weight-500 lineh-26 margin-b20 color-30"><span class="weight-700 color-29">Personalized Approach:</span> We understand that every case unique. That's why we take the time to listen to your concerns and tailor our services to your specific situation.</p>
                            <p class="font-ks font-16 weight-500 lineh-26 color-30"><span class="weight-700 color-29">Client-Centric:</span> Your satisfaction is our priority. We maintain to open communication, keeping you informed at every step of the process. Your questions and feedback are always welcome.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <p class="font-ks font-16 weight-500 lineh-26 margin-b20 color-30"><span class="weight-700 color-29">Personalized Approach:</span> We understand that every case unique. That's why we take the time to listen to your concerns and tailor our services to your specific situation.</p>
                            <p class="font-ks font-16 weight-500 lineh-26 color-30"><span class="weight-700 color-29">Client-Centric:</span> Your satisfaction is our priority. We maintain to open communication, keeping you informed at every step of the process. Your questions and feedback are always welcome.</p>
                        </div>
                      </div>
                  </div>
                      <a href="servicev1.html" class="theme6-btn6 font-ks lineh-16 weight-700 color font-16 margin-t32">Get Started Now <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="vissionimages">
                    <img src="{{ url('/webstatic/assets/images/vissionimg.png') }}" alt="">
                    <img src="{{ url('/webstatic/assets/images/elementor17.png') }}" alt="" class="elementor-23 keyframe3">

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
          <h1 class="font-lora font-48 lineh-52 color weight-600 margin-b text-capitalize">Get expert Law advice on criminal strategies</h1>
          <p class="font-ks font-16 lineh-26 weight-500 color-21">We believe that informed clients make better Law decisions. As part of our service, we'll provide educational resources and workshops to help.</p>
        </div>
      </div>
      <div class="col-lg-2"></div>
      <div class="col-lg-4">
        <div class="cta5-btn5-sexction">
            <a href="{{ url('/contact') }}" class="theme6-btn6 bakgrnd5 font-ks lineh-16 weight-700 color font-16">Get Law Advice <span><i class="fa-solid fa-arrow-right"></i></span></a>
            <a href="{{ url('/contact') }}" class="theme6-btn6 backgrnd6 font-ks lineh-16 weight-700 color-29 font-16">Contact Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
      </div>
    </div>
  </div>
  <img src="{{ url('/webstatic/assets/images/elementor72.png') }}" alt="" class="elementors73">
</div>
@endsection

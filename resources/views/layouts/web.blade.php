<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#172b5c">
    <link rel="manifest" href="{{ url('/manifest.json') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @hasSection('title')
    <title>@yield('title') </title>
    @else
    <title>Team Work Business Management | Leading Business Consultancy in Abu Dhabi Since 1994</title>
    @endif
    @hasSection('description')
    <meta name="description" content="@yield('description')">
    @else
    <meta name="description" content="">
    @endif
    @isset($common_meta)
    @if ($common_meta)
    {!! $common_meta !!}
    @endif
    @endisset
    @isset($meta)
    @if ($meta)
    {!! $meta !!}
    @endif
    @endisset

    <link rel="icon" type="image/png" sizes="72x72" href="/icons/icon-72x72.png" />
<link rel="icon" type="image/png" sizes="96x96" href="/icons/icon-96x96.png" />
<link rel="icon" type="image/png" sizes="128x128" href="/icons/icon-128x128.png" />
<link rel="icon" type="image/png" sizes="192x192" href="/icons/icon-192x192.png" />

<link rel="apple-touch-icon" sizes="192x192" href="/icons/icon-192x192.png" />

<!-- Android / PWA -->
<meta name="mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="default" />
<meta name="apple-mobile-web-app-title" content="AMT Consultancy" />


    <link rel="stylesheet" href="{{ url('/webstatic/assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/webstatic/assets/css/plugins/swiper.bundle.css') }}">
    <link rel="stylesheet" href="{{ url('/webstatic/assets/css/plugins/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ url('/webstatic/assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('/webstatic/assets/css/plugins/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('/webstatic/assets/css/plugins/modal-video.min.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;500;600;700;800&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Nunito+Sans:ital,opsz,wght@0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900&family=Nunito:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/webstatic/assets/css/plugins/mobile.css') }}">
    <link rel="stylesheet" href="{{ url('/webstatic/assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ url('/webstatic/assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ url('/webstatic/assets/css/master.css') }}?v=1.0.2">
    <link rel="stylesheet" href="{{ url('/webstatic/assets/css/plugins/responsive.css') }}">

    <script src="{{ url('/webstatic/assets/js/plugins/jquery-3-6-0.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
</head>

<body>
    <div class="paginacontainer">

        <div class="progress-wrap">
            <svg class="progress-circle svg-content" viewBox="-1 -1 102 102">

                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>

    <header class="header about-bg d-none d-lg-block">
        <div class="header-area header" id="header">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="header-elements">
                            <div class="site-logo">
                                <a href="{{ url('/') }}">

                                    <img src="{{ url('/webstatic/assets/images/logo/logo1.png') }}" alt="">
                                    
                                </a>
                            </div>
                            <div class="main-menu-ex homepage5 mainmenuex">
                                <ul>
                                    <li><a href="{{ url('/') }}" class="font-outfit font-18 weight-500 color-1">Home</a></li>
                                    <li><a href="{{ url('/about') }}" class="font-outfit font-18 weight-500 color-1">About Us</a></li>
                                    <li><a href="#" class="font-outfit font-18 weight-500 color-1">Our Services <span><i class="fa-solid fa-angle-down"></i></span></a>
                                        <ul class="dropdown-padding">
                                            <li><a href="{{ url('services/tax-accounting-services') }}" class="font-outfit font-16 weight-500 color">Tax & Accounting Services <span><i class="fa-solid fa-angle-right"></i></span></a>
                                                <ul>
                                                    <li><a href="{{ url('services/tax-accounting-services/accounting-setup-vat-ct') }}" class="font-outfit font-16 weight-500 color-1">Accounting Setup (VAT & CT)</a></li>
                                                    <li><a href="{{ url('services/tax-accounting-services/tax-registration') }}" class="font-outfit font-16 weight-500 color-1">Tax Registration</a></li>
                                                    <li><a href="{{ url('services/tax-accounting-services/tax-return-filing') }}" class="font-outfit font-16 weight-500 color-1">Tax Return Filing</a></li>
                                                    <li><a href="{{ url('services/tax-accounting-services/tax-financial-accounting-vat-ct') }}" class="font-outfit font-16 weight-500 color-1">Tax Financial Accounting (VAT & CT)</a></li>
                                                    <li><a href="{{ url('services/tax-accounting-services/tax-accounting-review-vat-ct') }}" class="font-outfit font-16 weight-500 color-1">Tax Accounting Review (VAT & CT)</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('services/accounting-bookkeeping-services') }}" class="font-outfit font-16 weight-500 color">Accounting & Book Keeping Services <span><i class="fa-solid fa-angle-right"></i></span></a>
                                                <ul>
                                                    <li><a href="{{ url('services/accounting-bookkeeping-services/accounting-consultancy') }}" class="font-outfit font-16 weight-500 color-1">Accounting Consultancy</a></li>
                                                    <li><a href="{{ url('services/accounting-bookkeeping-services/financial-statements-pl-balance-sheet') }}" class="font-outfit font-16 weight-500 color-1">Financial Statements (P&L, Balance Sheet)</a></li>
                                                    <li><a href="{{ url('services/accounting-bookkeeping-services/ar-ap-aging-reports') }}" class="font-outfit font-16 weight-500 color-1">AR/AP & Aging Reports</a></li>
                                                    <li><a href="{{ url('services/accounting-bookkeeping-services/financial-analysis-ratios-break-even') }}" class="font-outfit font-16 weight-500 color-1">Financial Analysis (Ratios, Break-even)</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('services/vat-corporate-tax-services') }}" class="font-outfit font-16 weight-500 color">VAT & Corporate Tax Services <span><i class="fa-solid fa-angle-right"></i></span></a>
                                                <ul>
                                                    <li><a href="{{ url('services/vat-corporate-tax-services/tax-consulting-advisory') }}" class="font-outfit font-16 weight-500 color-1">Tax Consulting & Advisory</a></li>
                                                    <li><a href="{{ url('services/vat-corporate-tax-services/vat-corporate-tax-registration-deregistration') }}" class="font-outfit font-16 weight-500 color-1">VAT/Corporate Tax Registration & De-registration</a></li>
                                                    <li><a href="{{ url('services/vat-corporate-tax-services/filing-assessment-disclosures') }}" class="font-outfit font-16 weight-500 color-1">Filing, Assessment & Disclosures</a></li>
                                                    <li><a href="{{ url('services/vat-corporate-tax-services/penalty-reconsideration') }}" class="font-outfit font-16 weight-500 color-1">Penalty Reconsideration</a></li>
                                                    <li><a href="{{ url('services/vat-corporate-tax-services/tax-refund-processing') }}" class="font-outfit font-16 weight-500 color-1">Tax Refund Processing</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('services/audit-assurance') }}" class="font-outfit font-16 weight-500 color">Audit & Assurance <span><i class="fa-solid fa-angle-right"></i></span></a>
                                                <ul>
                                                    <li><a href="{{ url('services/audit-assurance/financial-tax-corporate-audits') }}" class="font-outfit font-16 weight-500 color-1">Financial, Tax & Corporate Audits</a></li>
                                                    <li><a href="{{ url('services/audit-assurance/internal-audit-external-audit') }}" class="font-outfit font-16 weight-500 color-1">Internal Audit & External Audit</a></li>
                                                    <li><a href="{{ url('services/audit-assurance/cost-audit') }}" class="font-outfit font-16 weight-500 color-1">Cost Audit</a></li>
                                                    <li><a href="{{ url('services/audit-assurance/accounting-supervision') }}" class="font-outfit font-16 weight-500 color-1">Accounting Supervision</a></li>
                                                    <li><a href="{{ url('services/audit-assurance/company-liquidation-business-valuation') }}" class="font-outfit font-16 weight-500 color-1">Company Liquidation & Business Valuation</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('services/practical-accounting-training') }}" class="font-outfit font-16 weight-500 color">Practical Accounting Training <span><i class="fa-solid fa-angle-right"></i></span></a>
                                                <ul>
                                                    <li><a href="{{ url('services/practical-accounting-training/accounting-tax-courses-vat-corporate-tax-financial-accounting') }}" class="font-outfit font-16 weight-500 color-1">Accounting & Tax Courses (VAT, Corporate Tax, Financial Accounting)</a></li>
                                                    <li><a href="{{ url('services/practical-accounting-training/software-training-excel-quickbooks-tally') }}" class="font-outfit font-16 weight-500 color-1">Software Training (Excel, QuickBooks, Tally)</a></li>
                                                    <li><a href="{{ url('services/practical-accounting-training/communication-group-discussion') }}" class="font-outfit font-16 weight-500 color-1">Communication & Group Discussion</a></li>
                                                    <li><a href="{{ url('services/practical-accounting-training/1-month-practical-training') }}" class="font-outfit font-16 weight-500 color-1">1-Month Practical Training</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('services/iso-certifications') }}" class="font-outfit font-16 weight-500 color">ISO Certifications <span><i class="fa-solid fa-angle-right"></i></span></a>
                                                <ul>
                                                    <li><a href="{{ url('services/iso-certifications/iso-9001-quality-management') }}" class="font-outfit font-16 weight-500 color-1">ISO 9001 – Quality Management</a></li>
                                                    <li><a href="{{ url('services/iso-certifications/iso-14001-environmental-management') }}" class="font-outfit font-16 weight-500 color-1">ISO 14001 – Environmental Management</a></li>
                                                    <li><a href="{{ url('services/iso-certifications/iso-45001-occupational-health-safety') }}" class="font-outfit font-16 weight-500 color-1">ISO 45001 – Occupational Health & Safety</a></li>
                                                    <li><a href="{{ url('services/iso-certifications/iso-22000-haccp-food-safety') }}" class="font-outfit font-16 weight-500 color-1">ISO 22000 / HACCP – Food Safety</a></li>
                                                    <li><a href="{{ url('services/iso-certifications/iso-27001-information-security') }}" class="font-outfit font-16 weight-500 color-1">ISO 27001 – Information Security</a></li>
                                                    <li><a href="{{ url('services/iso-certifications/iso-20000-it-service-management') }}" class="font-outfit font-16 weight-500 color-1">ISO 20000 – IT Service Management</a></li>
                                                    <li><a href="{{ url('services/iso-certifications/iso-30401-knowledge-management') }}" class="font-outfit font-16 weight-500 color-1">ISO 30401 – Knowledge Management</a></li>
                                                    <li><a href="{{ url('services/iso-certifications/iso-13485-medical-devices-quality-management') }}" class="font-outfit font-16 weight-500 color-1">ISO 13485 – Medical Devices Quality Management</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('services/other-services') }}" class="font-outfit font-16 weight-500 color">Other Services <span><i class="fa-solid fa-angle-right"></i></span></a>
                                                <ul>
                                                    <li><a href="{{ url('services/other-services/esr-fiu-goaml-compliance') }}" class="font-outfit font-16 weight-500 color-1">ESR, FIU & GoAML Compliance</a></li>
                                                    <li><a href="{{ url('services/other-services/customs-code-services') }}" class="font-outfit font-16 weight-500 color-1">Customs Code Services</a></li>
                                                    <li><a href="{{ url('services/other-services/pro-management-consultancy') }}" class="font-outfit font-16 weight-500 color-1">PRO & Management Consultancy</a></li>
                                                    <li><a href="{{ url('services/other-services/company-formation-business-services') }}" class="font-outfit font-16 weight-500 color-1">Company Formation & Business Services</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('services/icv-certification') }}" class="font-outfit font-16 weight-500 color">ICV Certification <span><i class="fa-solid fa-angle-right"></i></span></a>
                                                <ul>
                                                    <li><a href="{{ url('services/icv-certification/unified-icv-program') }}" class="font-outfit font-16 weight-500 color-1">Unified ICV Program</a></li>
                                                    <li><a href="{{ url('services/icv-certification/icv-point-optimization-program') }}" class="font-outfit font-16 weight-500 color-1">ICV Point Optimization Program</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                     <li><a href="{{ url('case-studies') }}" class="font-outfit font-18 weight-500 color-1">Case Studies</a></li>
                                     <li><a href="{{ url('blogs') }}" class="font-outfit font-18 weight-500 color-1">Blogs</a></li>
                                    <li><a href="{{ url('contact') }}" class="font-outfit font-18 weight-500 color-1">Contact</a></li>

                                </ul>
                            </div>
                            <div class="contact-3 d-lg-block d-none">
                                <div class="all-3-btn theme-btn1">

                                    <div class="theme-btn4">
                             
                                                                                <a href="{{ url('schedule-consulation') }}" class="theme-btn5 font-outfit font-16 weight-700">Schedule Consulation<span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <div class="mobile-header mobile-header-4 d-block d-lg-none homepagesmall">
        <div class="container-fluid">
            <div class="col-12">
                <div class="mobile-header-elements">
                    <div class="mobile-logo">
                        <a href="index.html"><img src="{{ url('webstatic/assets/images/logo/logo-white.png') }}" alt=""></a>
                    </div>
                    <div class="mobile-nav-icon dots-menu">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-sidebar">
        <div class="logoicons-area">
            <div class="logos">
                <img src="{{ url('webstatic/assets/images/logo/logo-white.png') }}" alt="">
            </div>
            <div class="menu-close">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
        <div class="mobile-nav">

            <ul class="mobile-nav-list">
                <li><a href="{{ url('/') }}" class="font-outfit font-16 weight-500 color">Home</a></li>
                <li><a href="{{ url('/about') }}" class="font-outfit font-18 weight-600 color">About Us</a></li>

                <li><a href="#" class="font-outfit font-16 weight-500 color">Our Services</a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('services/tax-accounting-services') }}" class="font-outfit font-16 weight-500 color">Tax & Accounting Services</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('services/tax-accounting-services/accounting-setup-vat-ct') }}" class="font-outfit font-16 weight-500 color-1">Accounting Setup (VAT & CT)</a></li>
                                <li><a href="{{ url('services/tax-accounting-services/tax-registration') }}" class="font-outfit font-16 weight-500 color-1">Tax Registration</a></li>
                                <li><a href="{{ url('services/tax-accounting-services/tax-return-filing') }}" class="font-outfit font-16 weight-500 color-1">Tax Return Filing</a></li>
                                <li><a href="{{ url('services/tax-accounting-services/tax-financial-accounting-vat-ct') }}" class="font-outfit font-16 weight-500 color-1">Tax Financial Accounting (VAT & CT)</a></li>
                                <li><a href="{{ url('services/tax-accounting-services/tax-accounting-review-vat-ct') }}" class="font-outfit font-16 weight-500 color-1">Tax Accounting Review (VAT & CT)</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('services/accounting-bookkeeping-services') }}" class="font-outfit font-16 weight-500 color">Accounting & Bookkeeping Services</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('services/accounting-bookkeeping-services/accounting-consultancy') }}" class="font-outfit font-16 weight-500 color-1">Accounting Consultancy</a></li>
                                <li><a href="{{ url('services/accounting-bookkeeping-services/financial-statements-pl-balance-sheet') }}" class="font-outfit font-16 weight-500 color-1">Financial Statements (P&L, Balance Sheet)</a></li>
                                <li><a href="{{ url('services/accounting-bookkeeping-services/ar-ap-aging-reports') }}" class="font-outfit font-16 weight-500 color-1">AR/AP & Aging Reports</a></li>
                                <li><a href="{{ url('services/accounting-bookkeeping-services/financial-analysis-ratios-break-even') }}" class="font-outfit font-16 weight-500 color-1">Financial Analysis (Ratios, Break-even)</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('services/vat-corporate-tax-services') }}" class="font-outfit font-16 weight-500 color">VAT & Corporate Tax Services</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('services/vat-corporate-tax-services/tax-consulting-advisory') }}" class="font-outfit font-16 weight-500 color-1">Tax Consulting & Advisory</a></li>
                                <li><a href="{{ url('services/vat-corporate-tax-services/vat-corporate-tax-registration-deregistration') }}" class="font-outfit font-16 weight-500 color-1">VAT/Corporate Tax Registration & De-registration</a></li>
                                <li><a href="{{ url('services/vat-corporate-tax-services/filing-assessment-disclosures') }}" class="font-outfit font-16 weight-500 color-1">Filing, Assessment & Disclosures</a></li>
                                <li><a href="{{ url('services/vat-corporate-tax-services/penalty-reconsideration') }}" class="font-outfit font-16 weight-500 color-1">Penalty Reconsideration</a></li>
                                <li><a href="{{ url('services/vat-corporate-tax-services/tax-refund-processing') }}" class="font-outfit font-16 weight-500 color-1">Tax Refund Processing</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('services/audit-assurance') }}" class="font-outfit font-16 weight-500 color">Audit & Assurance</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('services/audit-assurance/financial-tax-corporate-audits') }}" class="font-outfit font-16 weight-500 color-1">Financial, Tax & Corporate Audits</a></li>
                                <li><a href="{{ url('services/audit-assurance/internal-audit-external-audit') }}" class="font-outfit font-16 weight-500 color-1">Internal Audit & External Audit</a></li>
                                <li><a href="{{ url('services/audit-assurance/cost-audit') }}" class="font-outfit font-16 weight-500 color-1">Cost Audit</a></li>
                                <li><a href="{{ url('services/audit-assurance/accounting-supervision') }}" class="font-outfit font-16 weight-500 color-1">Accounting Supervision</a></li>
                                <li><a href="{{ url('services/audit-assurance/company-liquidation-business-valuation') }}" class="font-outfit font-16 weight-500 color-1">Company Liquidation & Business Valuation</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('services/practical-accounting-training') }}" class="font-outfit font-16 weight-500 color">Practical Accounting Training</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('services/practical-accounting-training/accounting-tax-courses-vat-corporate-tax-financial-accounting') }}" class="font-outfit font-16 weight-500 color-1">Accounting & Tax Courses (VAT, Corporate Tax, Financial Accounting)</a></li>
                                <li><a href="{{ url('services/practical-accounting-training/software-training-excel-quickbooks-tally') }}" class="font-outfit font-16 weight-500 color-1">Software Training (Excel, QuickBooks, Tally)</a></li>
                                <li><a href="{{ url('services/practical-accounting-training/communication-group-discussion') }}" class="font-outfit font-16 weight-500 color-1">Communication & Group Discussion</a></li>
                                <li><a href="{{ url('services/practical-accounting-training/1-month-practical-training') }}" class="font-outfit font-16 weight-500 color-1">1-Month Practical Training</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('services/iso-certifications') }}" class="font-outfit font-16 weight-500 color">ISO Certifications</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('services/iso-certifications/iso-9001-quality-management') }}" class="font-outfit font-16 weight-500 color-1">ISO 9001 – Quality Management</a></li>
                                <li><a href="{{ url('services/iso-certifications/iso-14001-environmental-management') }}" class="font-outfit font-16 weight-500 color-1">ISO 14001 – Environmental Management</a></li>
                                <li><a href="{{ url('services/iso-certifications/iso-45001-occupational-health-safety') }}" class="font-outfit font-16 weight-500 color-1">ISO 45001 – Occupational Health & Safety</a></li>
                                <li><a href="{{ url('services/iso-certifications/iso-22000-haccp-food-safety') }}" class="font-outfit font-16 weight-500 color-1">ISO 22000 / HACCP – Food Safety</a></li>
                                <li><a href="{{ url('services/iso-certifications/iso-27001-information-security') }}" class="font-outfit font-16 weight-500 color-1">ISO 27001 – Information Security</a></li>
                                <li><a href="{{ url('services/iso-certifications/iso-20000-it-service-management') }}" class="font-outfit font-16 weight-500 color-1">ISO 20000 – IT Service Management</a></li>
                                <li><a href="{{ url('services/iso-certifications/iso-30401-knowledge-management') }}" class="font-outfit font-16 weight-500 color-1">ISO 30401 – Knowledge Management</a></li>
                                <li><a href="{{ url('services/iso-certifications/iso-13485-medical-devices-quality-management') }}" class="font-outfit font-16 weight-500 color-1">ISO 13485 – Medical Devices Quality Management</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('services/other-services') }}" class="font-outfit font-16 weight-500 color">Other Services</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('services/other-services/esr-fiu-goaml-compliance') }}" class="font-outfit font-16 weight-500 color-1">ESR, FIU & GoAML Compliance</a></li>
                                <li><a href="{{ url('services/other-services/customs-code-services') }}" class="font-outfit font-16 weight-500 color-1">Customs Code Services</a></li>
                                <li><a href="{{ url('services/other-services/pro-management-consultancy') }}" class="font-outfit font-16 weight-500 color-1">PRO & Management Consultancy</a></li>
                                <li><a href="{{ url('services/other-services/company-formation-business-services') }}" class="font-outfit font-16 weight-500 color-1">Company Formation & Business Services</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('services/icv-certification') }}" class="font-outfit font-16 weight-500 color">ICV Certification</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('services/icv-certification/unified-icv-program') }}" class="font-outfit font-16 weight-500 color-1">Unified ICV Program</a></li>
                                <li><a href="{{ url('services/icv-certification/icv-point-optimization-program') }}" class="font-outfit font-16 weight-500 color-1">ICV Point Optimization Program</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="{{ url('case-studies') }}" class="font-outfit font-16 weight-500 color">Case Studies</a></li>
                <li><a href="{{ url('blogs') }}" class="font-outfit font-16 weight-500 color">Blogs</a></li>
                <li><a href="{{ url('contact') }}" class="font-outfit font-16 weight-500 color">Contact</a></li>
            </ul>
            <div class="allmobilesection">
                <a href="#" class="font-outfit font-18 lineh-18 weight-700 color mobilemenubtn">Get Started</a>
                <div class="single-footer single-footer-menu single-footer4">
                    <h3 class="font-outfit font-24 lineh-24 weight-600 color margin-b margin-t24">Contact Info</h3>
                    <div class="footer4-contact-info">
                        <div class="contact-info-single">
                            <div class="contact-info-icon">
                                <img src="{{ url('webstatic/assets/images/phone5.svg') }}" alt="">
                            </div>
                            <div class="contact-info-text">
                                <a href="tel:+3(924)4596512" class="font-outfit font-16 lineh-26 weight-500 color-21">+3(924)4596512</a>
                            </div>
                        </div>

                        <div class="contact-info-single">
                            <div class="contact-info-icon">
                                <img src="{{ url('webstatic/assets/images/email4.svg') }}" alt="">
                            </div>
                            <div class="contact-info-text">
                                <a href="mailto:info@almobaderoon.com" class="font-outfit font-16 lineh-26 weight-500 color-21">info@almobaderoon.com</a>
                            </div>
                        </div>

                        <div class="single-footer single-footer-menu single-footer4">
                            <h3 class="font-outfit font-24 lineh-24 weight-600 color margin-b margin-t24">Our Location</h3>

                            <div class="contact-info-single">
                                <div class="contact-info-icon">
                                    <img src="{{ url('webstatic/assets/images/location2.png') }}" alt="">
                                </div>
                                <div class="contact-info-text">
                                    <a href="mailto:info@example.com" class="font-outfit font-16 lineh-26 weight-500 color-21">Office No. 107, 1st Floor, Building No. 8, Next to Technical Scissors, Khalidiya, Abu Dhabi, UAE</a>
                                </div>
                            </div>

                        </div>
                        <div class="single-footer single-footer-menu single-footer4">
                            <h3 class="font-outfit font-24 lineh-24 weight-600 color margin-b margin-t24">Social Links</h3>

                            <div class="social social4-menu social4">
                                <ul>
                                    <li>
                                        <a data-bs-toggle="tooltip" title="Linked in" href="#"><svg class="svg-inline--fa fa-facebook" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.8 90.69 226.4 209.3 245V327.7h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.3 482.4 504 379.8 504 256z"></path>
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" title="Facebook" href="#"><svg class="svg-inline--fa fa-linkedin-in" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M100.3 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.6 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.3 61.9 111.3 142.3V448z"></path>
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" title="Instagram" href="#"><svg class="svg-inline--fa fa-youtube" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M549.7 124.1c-6.281-23.65-24.79-42.28-48.28-48.6C458.8 64 288 64 288 64S117.2 64 74.63 75.49c-23.5 6.322-42 24.95-48.28 48.6-11.41 42.87-11.41 132.3-11.41 132.3s0 89.44 11.41 132.3c6.281 23.65 24.79 41.5 48.28 47.82C117.2 448 288 448 288 448s170.8 0 213.4-11.49c23.5-6.321 42-24.17 48.28-47.82 11.41-42.87 11.41-132.3 11.41-132.3s0-89.44-11.41-132.3zm-317.5 213.5V175.2l142.7 81.21-142.7 81.2z"></path>
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" title="TikTok" href="#"><svg class="svg-inline--fa fa-twitter" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M459.4 151.7c.325 4.548 .325 9.097 .325 13.65 0 138.7-105.6 298.6-298.6 298.6-59.45 0-114.7-17.22-161.1-47.11 8.447 .974 16.57 1.299 25.34 1.299 49.06 0 94.21-16.57 130.3-44.83-46.13-.975-84.79-31.19-98.11-72.77 6.498 .974 12.99 1.624 19.82 1.624 9.421 0 18.84-1.3 27.61-3.573-48.08-9.747-84.14-51.98-84.14-102.1v-1.299c13.97 7.797 30.21 12.67 47.43 13.32-28.26-18.84-46.78-51.01-46.78-87.39 0-19.49 5.197-37.36 14.29-52.95 51.65 63.67 129.3 105.3 216.4 109.8-1.624-7.797-2.599-15.92-2.599-24.04 0-57.83 46.78-104.9 104.9-104.9 30.21 0 57.5 12.67 76.67 33.14 23.72-4.548 46.46-13.32 66.6-25.34-7.798 24.37-24.37 44.83-46.13 57.83 21.12-2.273 41.58-8.122 60.43-16.24-14.29 20.79-32.16 39.31-52.63 54.25z"></path>
                                            </svg><!-- <i class="fa-brands fa-x-twitter"></i>
                            Font Awesome fontawesome.com --></a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


@yield('content')


    <div class="footer2-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-all-padding section-padding5">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="footer-logo2">
                                    <a href="{{ url('/') }}"><img src="/webstatic/assets/images/logo/logo-footer.png" alt=""></a>
                                    <p class="font-16 lineh-26 color weight-400 font-outfit margin-b24 margin-t">Include any additional information that may <br> be relevant or helpful for visitors, such as <br> FAQs, pricing options, or service packages. <br> Provide contact details.</p>
                                    <div class="social2-links">
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="ml1"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                            <li><a href="#" class="ml1"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#" class="ml1"><i class="fa-brands fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="our-service-area">
                                    <h1 class="font-20 color-21 lineh-20 font-outfit margin-b24 weight-600">Our services</h1>
                                    <div class="servicefooter-list">
                                        <ul>
                                            <li><a href="#" class="font-outfit font-16 color-21 lineh-16 weight-400">Tax & Accounting Services</a></li>
                                            <li><a href="#" class="font-outfit font-16 color-21 lineh-16 weight-400 margin-t d-inline-block">VAT & Corporate Tax</a></li>
                                            <li><a href="#" class="font-outfit font-16 color-21 lineh-16 weight-400 margin-t d-inline-block">Audit & Assurance</a></li>
                                            <li><a href="#" class="font-outfit font-16 color-21 lineh-16 weight-400 margin-t d-inline-block">ISO Certifications</a></li>
                                            <li><a href="#" class="font-outfit font-16 color-21 lineh-16 weight-400 margin-t d-inline-block">ICV Certification</a></li>
                                            <li><a href="#" class="font-outfit font-16 color-21 lineh-16 weight-400 margin-t d-inline-block">Training Programs</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2 col-md-6">
                                <div class="our-service-area">
                                    <h1 class="font-20 color-21 lineh-20 font-outfit margin-b24 weight-600">Useful Links</h1>
                                    <div class="servicefooter-list">
                                        <ul>
                                            <li><a href="index.html" class="font-outfit font-16 color-21 lineh-16 weight-400">Home</a></li>
                                            <li><a href="about.html" class="font-outfit font-16 color-21 lineh-16 weight-400 margin-t d-inline-block">About Us </a></li>
                                            <li><a href="servicev1.html" class="font-outfit font-16 color-21 lineh-16 weight-400 margin-t d-inline-block">Our Services</a></li>
                                            <li><a href="casestudy1.html" class="font-outfit font-16 color-21 lineh-16 weight-400 margin-t d-inline-block">Case Study</a></li>
                                            <li><a href="blog2.html" class="font-outfit font-16 color-21 lineh-16 weight-400 margin-t d-inline-block">Blog</a></li>
                                            <li><a href="team.html" class="font-outfit font-16 color-21 lineh-16 weight-400 margin-t d-inline-block">Team</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="contact-footer">
                                    <h1 class="font-20 color-21 lineh-20 font-outfit margin-b24 weight-600">Contact Us</h1>
                                    <div class="email4">
                                        <img src="/webstatic/assets/images/email4.svg" alt="">
                                        <a href="mailto:info@almobaderoon.com" class="font-16 lineh-24 color-21 weight-400 font-outfit">info@almobaderoon.com</a>
                                    </div>
                                    <div class="email4 margin-t">
                                        <img src="/webstatic/assets/images/location3.svg" alt="">
                                        <a href="mailto:info@almobaderoon.com" class="font-16 lineh-24 color-21 weight-400 font-outfit">Microland Comuters Building, Building No. 8,
Office No. 107, 1st Floor, 
Khalid Bin Sinan St. 
Khalidiyah, W4 <br>Abu Dhabi, UAE</a>
                                    </div>
                                    <div class="email4 margin-t">
                                        <img src="/webstatic/assets/images/phone5.svg" alt="">
                                        <a href="tel:123-456-7890" class="font-16 lineh-24 color-21 weight-400 font-outfit">009 7150 6956 500</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-10"></div>
        <div class="copyright">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright1">
                        <p class="font-outfit font-16 lineh-26 weight-400 ">© 2026 Almobaderoon Consulting Services. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <img src="/webstatic/assets/images/elementor35.png" alt="" class="elementor-14">
    </div>



    <script src="{{ url('/webstatic/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ url('/webstatic/assets/js/plugins/swiper.bundle.js') }}"></script>
    <script src="{{ url('/webstatic/assets/js/plugins/owl.carousel.min.js') }}"></script>
    <script src="{{ url('/webstatic/assets/js/plugins/jquery-modal-video.min.js') }}"></script>
    <script src="{{ url('/webstatic/assets/js/plugins/fontawesome.js') }}"></script>
    <script src="{{ url('/webstatic/assets/js/plugins/counter.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ url('/webstatic/assets/js/plugins/jquery.nice-select.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
    <script src="{{ url('/webstatic/assets/js/plugins/jquery.lineProgressbar.js') }}"></script>
    <script src="{{ url('/webstatic/assets/js/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('/webstatic/assets/js/plugins/propper.min.js') }}"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js"></script>
    <script src="{{ url('/webstatic/assets/js/plugins/tippy.js') }}"></script>
    <script src="{{ url('/webstatic/assets/js/plugins/jquery.nice-select.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="{{ url('/webstatic/assets/js/plugins/mobilemenu.js') }}"></script>
    <script src="{{ url('/webstatic/assets/js/main.js') }}"></script>
</body>

</html>
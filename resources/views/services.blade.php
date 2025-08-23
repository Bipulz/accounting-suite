@extends('layouts.sidebar')

@section('styles')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter & Lora -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lora:wght@500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <style>
        :root {
            --primary: #00213f;
            --secondary: #0090d4;
            --accent: #00b4f2;
            --light: #f8fcff;
            --lighter: #e8f0fc;
            --white: #ffffff;
            --gray: #6c757d;
            --shadow: rgba(0, 33, 63, 0.15);
            --transition: all 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        }

        .rka-scope {
            font-family: 'Inter', sans-serif;
            background: var(--light);
            color: var(--primary);
            line-height: 1.8;
            overflow-x: hidden;
        }

        .rka-scope h1, .rka-scope h2, .rka-scope h3, .rka-scope h4, .rka-scope h5, .rka-scope h6 {
            font-family: 'Lora', serif;
            font-weight: 700;
            color: var(--primary);
            letter-spacing: 0.3px;
        }

        .section-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 90vh;
            min-height: 600px;
            overflow: hidden;
            background: var(--primary);
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .hero-slider {
            width: 100%;
            height: 100%;
        }

        .hero-slide {
            position: relative;
            width: 100%;
            height: 90vh;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-slide-1 {
            background: linear-gradient(135deg, rgba(0, 33, 63, 0.8), rgba(0, 144, 212, 0.7)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1920&h=1080') center/cover;
        }

        .hero-slide-2 {
            background: linear-gradient(135deg, rgba(0, 33, 63, 0.8), rgba(0, 144, 212, 0.7)), url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1920&h=1080') center/cover;
        }

        .hero-slide-3 {
            background: linear-gradient(135deg, rgba(0, 33, 63, 0.8), rgba(0, 144, 212, 0.7)), url('https://images.unsplash.com/photo-1516321310769-65e85b8e6351?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1920&h=1080') center/cover;
        }

        .hero-content {
            text-align: center;
            max-width: 900px;
            width: 90%;
            margin: auto;
            padding: 2.5rem;
            color: var(--white);
            background: rgba(0, 33, 63, 0.15);
            backdrop-filter: blur(8px);
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0, 33, 63, 0.2);
        }

        .hero-content h1 {
            font-size: 4.5rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--white), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-content p {
            font-size: 1.3rem;
            font-weight: 400;
            margin-bottom: 2.5rem;
            opacity: 0.9;
        }

        .btn-primary-filled, .btn-primary-outline {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            padding: 0.8rem 2.5rem;
            border-radius: 50px;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin: 0 0.8rem;
            position: relative;
            overflow: hidden;
        }

        .btn-primary-filled {
            background: linear-gradient(90deg, var(--secondary), var(--accent));
            color: var(--white);
            border: none;
        }

        .btn-primary-filled:hover {
            background: linear-gradient(90deg, var(--accent), var(--secondary));
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 144, 212, 0.3);
        }

        .btn-primary-outline {
            background: transparent;
            border: 2px solid var(--white);
            color: var(--white);
        }

        .btn-primary-outline:hover {
            background: var(--white);
            color: var(--primary);
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 33, 63, 0.2);
        }

        .btn-primary-filled i, .btn-primary-outline i {
            margin-left: 8px;
            transition: transform 0.3s;
        }

        .btn-primary-filled:hover i, .btn-primary-outline:hover i {
            transform: translateX(4px);
        }

        .slick-dots {
            position: absolute;
            bottom: 40px;
            display: flex !important;
            gap: 12px;
            justify-content: center;
        }

        .slick-dots li button {
            width: 12px;
            height: 12px;
            background: rgba(255, 255, 255, 0.6) !important;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            font-size: 0;
        }

        .slick-dots li button::before {
            content: none !important;
        }

        .slick-dots li button:hover {
            background: rgba(255, 255, 255, 0.8) !important;
            transform: scale(1.2);
        }

        .slick-dots li.slick-active button {
            background: var(--accent) !important;
            transform: scale(1.4);
        }

        /* Services Section */
        .services-section {
            padding: 6rem 0;
            background: var(--light);
        }

        .services-section h2 {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 1.8rem;
        }

        .services-section .lead {
            font-size: 1.3rem;
            color: var(--gray);
            max-width: 1000px;
            margin: 0 auto 3.5rem;
            text-align: center;
        }

        .service-card {
            background: linear-gradient(135deg, var(--white), var(--light));
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px var(--shadow);
            min-height: 320px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .service-card h3 {
            font-size: 2rem;
            margin-bottom: 1.2rem;
            position: relative;
            transition: var(--transition);
        }

        .service-card h3:hover {
            color: var(--accent);
            transform: scale(1.05);
        }

        .service-card h3::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: width 0.3s ease;
        }

        .service-card h3:hover::after {
            width: 100%;
        }

        .service-card p {
            color: var(--gray);
            font-size: 1.1rem;
            flex-grow: 1;
        }

        .learn-more {
            font-weight: 600;
            color: var(--secondary);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: var(--transition);
        }

        .learn-more:hover {
            color: var(--accent);
            transform: translateX(8px);
        }

        .learn-more i {
            margin-left: 10px;
            transition: transform 0.3s;
        }

        .learn-more:hover i {
            transform: translateX(6px);
        }

        /* Service Details Section */
        .service-details-section {
            padding: 6rem 0;
            background: linear-gradient(180deg, var(--white), var(--lighter));
        }

        .service-details-section h2 {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 3.5rem;
        }

        .detail-card {
            background: linear-gradient(135deg, var(--white), var(--light));
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px var(--shadow);
            margin-bottom: 2rem;
        }

        .detail-card img {
            width: 100%;
            max-width: 600px;
            height: auto;
            border-radius: 20px;
            margin: 0 auto;
            display: block;
        }

        .detail-content {
            max-width: 500px;
            text-align: left;
        }

        .detail-content h3 {
            font-size: 2rem;
            margin-bottom: 1.2rem;
            position: relative;
            transition: var(--transition);
        }

        .detail-content h3:hover {
            color: var(--accent);
            transform: scale(1.05);
        }

        .detail-content h3::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: width 0.3s ease;
        }

        .detail-content h3:hover::after {
            width: 100%;
        }

        .detail-content p {
            color: var(--gray);
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
        }

        .detail-content h4 {
            font-size: 1.6rem;
            margin: 1.5rem 0 0.8rem;
            color: var(--secondary);
            position: relative;
            display: inline-block;
        }

        .detail-content h4::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: width 0.3s ease;
        }

        .detail-content:hover h4::after {
            width: 100%;
        }

        .detail-content ul, .detail-content .no-bullets {
            padding: 0;
            margin: 0 0 1.5rem;
        }

        .detail-content ul li {
            font-size: 1rem;
            color: var(--gray);
            position: relative;
            padding-left: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .detail-content ul li::before {
            content: '•';
            position: absolute;
            left: 0;
            color: var(--accent);
            font-size: 1.2rem;
        }

        .detail-content .no-bullets li {
            list-style: none;
            font-size: 1rem;
            color: var(--gray);
            margin-bottom: 0.5rem;
        }

        .detail-divider {
            width: 100px;
            height: 2px;
            background: var(--accent);
            margin: 2rem auto;
        }

        /* Industry Expertise Section */
        .industries-section {
            padding: 6rem 0;
            background: linear-gradient(180deg, var(--lighter), var(--white));
        }

        .industries-section .section-container {
            margin-left: 10px;
        }

        .industries-section h2 {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 1.8rem;
        }

        .industries-section .lead {
            font-size: 1.3rem;
            color: var(--gray);
            max-width: 1000px;
            margin: 0 auto 3.5rem;
            text-align: center;
        }

        .industry-item {
            background: linear-gradient(135deg, var(--white), var(--light));
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: 0 8px 25px var(--shadow);
            text-align: center;
            min-height: 180px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .industry-item i {
            font-size: 2rem;
            color: var(--secondary);
            margin-bottom: 1rem;
            transition: var(--transition);
        }

        .industry-item:hover i {
            color: var(--accent);
            transform: scale(1.25);
        }

        .industry-item .no-bullets {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .industry-item .no-bullets li {
            font-size: 0.95rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
            position: relative;
            font-weight: 600;
            transition: var(--transition);
        }

        .industry-item .no-bullets li:hover {
            color: var(--accent);
            transform: scale(1.05);
        }

        .industry-item .no-bullets li::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: width 0.3s ease;
        }

        .industry-item .no-bullets li:hover::after {
            width: 100%;
        }

        .btn-all {
            background: linear-gradient(90deg, var(--secondary), var(--accent));
            color: var(--white);
            border: none;
            padding: 0.6rem 1.5rem;
            font-size: 0.95rem;
            font-weight: 600;
            border-radius: 50px;
            margin: 3.5rem auto 0;
            display: block;
            text-align: center;
            text-decoration: none;
            transition: var(--transition);
            width: 180px;
        }

        .btn-all:hover {
            background: linear-gradient(90deg, var(--accent), var(--secondary));
            transform: translateY(-6px);
            box-shadow: 0 12px 35px rgba(0, 144, 212, 0.3);
        }

        /* Responsive */
        @media (min-width: 1400px) {
            .section-container {
                max-width: 1400px;
            }
        }

        @media (max-width: 991px) {
            .hero-section {
                height: 80vh;
                min-height: 500px;
            }
            .hero-content h1 {
                font-size: 3.5rem;
            }
            .hero-content p {
                font-size: 1.2rem;
            }
            .services-section h2, .service-details-section h2, .industries-section h2 {
                font-size: 2.6rem;
            }
            .service-card {
                min-height: 340px;
            }
            .detail-card img {
                max-width: 450px;
                margin-bottom: 1.5rem;
            }
            .detail-content {
                max-width: 100%;
            }
            .industries-section .section-container {
                margin-left: -20px;
            }
            .industry-item {
                min-height: 180px;
            }
            .industry-item i {
                font-size: 1.8rem;
            }
            .industry-item .no-bullets li {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 767px) {
            .hero-section {
                height: 70vh;
                min-height: 450px;
            }
            .hero-content {
                padding: 2rem;
            }
            .hero-content h1 {
                font-size: 2.8rem;
            }
            .hero-content p {
                font-size: 1.1rem;
            }
            .btn-primary-filled, .btn-primary-outline {
                padding: 0.7rem 2rem;
                font-size: 0.95rem;
            }
            .services-section, .service-details-section, .industries-section {
                padding: 4.5rem 0;
            }
            .services-section h2, .service-details-section h2, .industries-section h2 {
                font-size: 2.3rem;
            }
            .service-card h3, .detail-content h3 {
                font-size: 1.8rem;
            }
            .service-card p, .detail-content p, .services-section .lead, .industries-section .lead {
                font-size: 1rem;
            }
            .detail-content h4 {
                font-size: 1.4rem;
            }
            .detail-content ul li, .detail-content .no-bullets li {
                font-size: 0.9rem;
            }
            .industry-item {
                min-height: 160px;
            }
            .industry-item i {
                font-size: 1.6rem;
            }
            .industry-item .no-bullets li {
                font-size: 0.85rem;
            }
            .btn-all {
                width: 160px;
                padding: 0.5rem 1.2rem;
                font-size: 0.9rem;
            }
            .detail-card .row {
                flex-direction: column-reverse;
            }
            .detail-card img {
                margin-top: 1.5rem;
                max-width: 350px;
            }
            .industries-section .section-container {
                margin-left: -16px;
                padding: 0 16px;
            }
        }

        @media (max-width: 576px) {
            .hero-section {
                height: 60vh;
                min-height: 400px;
            }
            .hero-content {
                padding: 1.5rem;
            }
            .hero-content h1 {
                font-size: 2.2rem;
            }
            .hero-content p {
                font-size: 0.95rem;
            }
            .btn-primary-filled, .btn-primary-outline {
                padding: 0.6rem 1.8rem;
                font-size: 0.9rem;
                width: 100%;
                max-width: 280px;
            }
            .services-section h2, .service-details-section h2, .industries-section h2 {
                font-size: 2rem;
            }
            .service-card h3, .detail-content h3 {
                font-size: 1.6rem;
            }
            .service-card p, .detail-content p, .services-section .lead, .industries-section .lead {
                font-size: 0.95rem;
            }
            .detail-content h4 {
                font-size: 1.3rem;
            }
            .detail-content ul li, .detail-content .no-bullets li {
                font-size: 0.85rem;
            }
            .industry-item .no-bullets li {
                font-size: 0.8rem;
            }
            .industry-item i {
                font-size: 1.4rem;
            }
            .btn-all {
                width: 140px;
                padding: 0.5rem 1rem;
                font-size: 0.85rem;
            }
            .detail-card img {
                max-width: 300px;
            }
            .section-container {
                padding: 0 16px;
            }
        }
    </style>
@endsection

@section('content')
    <div class="rka-scope" style="margin: 0; padding: 0; overflow-x: hidden;">
        <main style="margin: 0; padding: 0; width: 100vw;">
            <!-- Hero Section -->
            <section class="hero-section">
                <div class="hero-slider">
                    <div class="hero-slide hero-slide-1">
                        <div class="hero-content gsap-animate">
                            <h1>Our Professional Services</h1>
                            <p>Comprehensive audit, tax, and advisory services tailored to meet your business needs and drive growth.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="#services" class="btn-primary-filled">Explore Services <i class="fas fa-arrow-right"></i></a>
                                <a href="#contact" class="btn-primary-outline">Contact Us <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide-2">
                        <div class="hero-content gsap-animate">
                            <h1>Driving Business Success</h1>
                            <p>Expert solutions in audit, tax, and consulting to empower your organization’s growth and compliance.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="#services" class="btn-primary-filled">Our Expertise <i class="fas fa-arrow-right"></i></a>
                                <a href="#contact" class="btn-primary-outline">Get in Touch <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide-3">
                        <div class="hero-content gsap-animate">
                            <h1>Strategic Financial Solutions</h1>
                            <p>Partner with us for tailored advisory and reporting services that ensure sustainable success.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="#services" class="btn-primary-filled">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="#contact" class="btn-primary-outline">Reach Out <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Core Services -->
            <section class="services-section" id="services">
                <div class="section-container">
                    <h2 class="gsap-animate">Our Core Services</h2>
                    <p class="lead gsap-animate">Explore our comprehensive service offerings and discover how we can support your business goals.</p>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 gsap-animate">
                            <div class="service-card">
                                <h3>Audit & Assurance</h3>
                                <p>Independent audits, reviews, and assurance services that provide confidence in your financial reporting and compliance with regulatory requirements.</p>
                                <a href="#audit-details" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 gsap-animate" data-delay="0.2">
                            <div class="service-card">
                                <h3>Tax Advisory</h3>
                                <p>Strategic tax planning, compliance, and advisory services to optimize your tax position and ensure regulatory adherence across all jurisdictions.</p>
                                <a href="#tax-details" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 gsap-animate" data-delay="0.4">
                            <div class="service-card">
                                <h3>Risk Advisory</h3>
                                <p>Comprehensive risk assessment, management strategies, and internal control solutions to protect and strengthen your organization against uncertainties.</p>
                                <a href="#risk-details" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 gsap-animate" data-delay="0.6">
                            <div class="service-card">
                                <h3>Business Consulting</h3>
                                <p>Strategic advisory services, process optimization, and growth planning to help your business reach its full potential in competitive markets.</p>
                                <a href="#contact" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 gsap-animate" data-delay="0.8">
                            <div class="service-card">
                                <h3>Financial Reporting</h3>
                                <p>Professional financial statement preparation, analysis, and reporting services that meet international standards and regulatory requirements.</p>
                                <a href="#contact" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 gsap-animate" data-delay="1.0">
                            <div class="service-card">
                                <h3>Corporate Advisory</h3>
                                <p>Strategic corporate guidance, governance consulting, and transaction advisory to support your business objectives and stakeholder interests.</p>
                                <a href="#contact" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <a href="#service-details" class="btn-all gsap-animate">View All Services</a>
                </div>
            </section>

            <!-- Service Details Section -->
            <section class="service-details-section" id="service-details">
                <div class="section-container">
                    <h2 class="gsap-animate">Service Details</h2>
                    <div class="row g-4">
                        <div class="col-12 gsap-animate" id="audit-details">
                            <div class="detail-card">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 detail-content">
                                        <h3>Audit & Assurance</h3>
                                        <p>Our audit and assurance services provide independent verification of your financial information, helping stakeholders make informed decisions with confidence.</p>
                                        <h4>Statutory Audits</h4>
                                        <ul>
                                            <li>Annual financial audits</li>
                                            <li>Regulatory compliance audits</li>
                                            <li>Special purpose audits</li>
                                        </ul>
                                        <h4>Internal Audits</h4>
                                        <ul>
                                            <li>Operational audits</li>
                                            <li>IT audits</li>
                                            <li>Process audits</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=600&auto=format&fit=crop" alt="Audit & Assurance">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail-divider gsap-animate" data-delay="0.2"></div>
                        <div class="col-12 gsap-animate" id="tax-details" data-delay="0.4">
                            <div class="detail-card">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 detail-content">
                                        <h3>Tax Advisory</h3>
                                        <p>Our comprehensive tax advisory services help you navigate complex tax regulations while optimizing your tax position and ensuring full compliance.</p>
                                        <h4>Tax Planning</h4>
                                        <ul class="no-bullets">
                                            <li>Corporate tax strategies</li>
                                            <li>Personal tax planning</li>
                                            <li>Tax-efficient structuring</li>
                                        </ul>
                                        <h4>Tax Compliance</h4>
                                        <ul class="no-bullets">
                                            <li>VAT registration and filing</li>
                                            <li>Income tax returns</li>
                                            <li>Withholding tax compliance</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?q=80&w=600&auto=format&fit=crop" alt="Tax Advisory">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail-divider gsap-animate" data-delay="0.6"></div>
                        <div class="col-12 gsap-animate" id="risk-details" data-delay="0.8">
                            <div class="detail-card">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 detail-content">
                                        <h3>Risk Advisory</h3>
                                        <p>Our risk advisory services help organizations identify, assess, and manage risks while building robust internal control systems.</p>
                                        <h4>Risk Assessment</h4>
                                        <ul>
                                            <li>Enterprise risk evaluation</li>
                                            <li>Operational risk analysis</li>
                                            <li>Financial risk assessment</li>
                                        </ul>
                                        <h4>Control Systems</h4>
                                        <ul>
                                            <li>Internal control design</li>
                                            <li>Control testing</li>
                                            <li>Remediation support</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=600&auto=format&fit=crop" alt="Risk Advisory">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Industry Expertise Section -->
            <section class="industries-section">
                <div class="section-container">
                    <h2 class="gsap-animate">Industry Expertise</h2>
                    <p class="lead gsap-animate">Specialized knowledge across key sectors, bringing industry-specific insights to every engagement.</p>
                    <div class="row g-3">
                        <div class="col-6 col-md-4 col-lg-2 gsap-animate">
                            <div class="industry-item">
                                <i class="fas fa-heartbeat"></i>
                                <ul class="no-bullets">
                                    <li>Healthcare & Medical</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 gsap-animate" data-delay="0.2">
                            <div class="industry-item">
                                <i class="fas fa-industry"></i>
                                <ul class="no-bullets">
                                    <li>Manufacturing & Industrial</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 gsap-animate" data-delay="0.4">
                            <div class="industry-item">
                                <i class="fas fa-laptop-code"></i>
                                <ul class="no-bullets">
                                    <li>Technology & Software</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 gsap-animate" data-delay="0.6">
                            <div class="industry-item">
                                <i class="fas fa-building"></i>
                                <ul class="no-bullets">
                                    <li>Real Estate & Construction</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 gsap-animate" data-delay="0.8">
                            <div class="industry-item">
                                <i class="fas fa-university"></i>
                                <ul class="no-bullets">
                                    <li>Financial Services</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 gsap-animate" data-delay="1.0">
                            <div class="industry-item">
                                <i class="fas fa-hand-holding-heart"></i>
                                <ul class="no-bullets">
                                    <li>Non-Profit & NGOs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="#contact" class="btn-all gsap-animate">View All Industries</a>
                </div>
            </section>
        </main>
    </div>
@endsection

@section('scripts')
    <!-- jQuery (required for Slick Slider) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <!-- GSAP and ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script>
        // Initialize Slick Slider
        $(document).ready(function(){
            $('.hero-slider').slick({
                dots: true,
                infinite: true,
                speed: 800,
                fade: true,
                cssEase: 'cubic-bezier(0.4, 0, 0.2, 1)',
                autoplay: true,
                autoplaySpeed: 5000,
                arrows: false,
                pauseOnHover: true,
                pauseOnFocus: true
            });

            // Animate hero content on slide change
            $('.hero-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
                const nextContent = $(slick.$slides[nextSlide]).find('.hero-content');
                gsap.fromTo(nextContent, 
                    { opacity: 0, y: 50 },
                    { opacity: 1, y: 0, duration: 1.2, ease: 'power3.out' }
                );
            });
        });

        // GSAP Animations
        window.addEventListener('load', function () {
            gsap.registerPlugin(ScrollTrigger);

            // General reveal animations
            gsap.utils.toArray('.gsap-animate').forEach((el) => {
                const delay = parseFloat(el.getAttribute('data-delay')) || 0;
                gsap.fromTo(el,
                    { opacity: 0, y: 40 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 1.2,
                        delay,
                        ease: 'power3.out',
                        scrollTrigger: {
                            trigger: el,
                            start: 'top 85%',
                            once: true,
                            invalidateOnRefresh: true
                        }
                    }
                );
            });

            // Recalc positions after Slick/images affect layout
            ScrollTrigger.refresh();
        });
    </script>
@endsection

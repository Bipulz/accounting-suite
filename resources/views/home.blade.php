@extends('layouts.sidebar')

@section('styles')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Lora & Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- GSAP for Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        :root {
            --primary: #002b4a;
            --secondary: #0080c0;
            --accent: #00a3e0;
            --light: #f7fbff;
            --lighter: #eef4fc;
            --white: #ffffff;
            --gray: #6c757d;
            --shadow: rgba(0, 43, 74, 0.15);
            --shadow-lg: rgba(0, 43, 74, 0.25);
            --transition: all 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        }

        .rka-scope {
            font-family: 'Roboto', sans-serif;
            background: var(--light);
            color: var(--primary);
            line-height: 1.8;
        }

        .rka-scope h1, .rka-scope h2, .rka-scope h3, .rka-scope h4, .rka-scope h5, .rka-scope h6 {
            font-family: 'Lora', serif;
            font-weight: 700;
            color: var(--primary);
            letter-spacing: 0.5px;
        }

        .rka-scope .section-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 90vh;
            min-height: 500px;
            overflow: hidden;
            background: var(--primary);
        }

        .hero-slider {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
        }

        .hero-slide.active {
            opacity: 1;
            z-index: 2;
        }

        .hero-slide-1 {
            background: linear-gradient(135deg, rgba(0, 43, 74, 0.9), rgba(0, 128, 192, 0.75)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1920&h=1080') center/cover;
        }

        .hero-slide-2 {
            background: linear-gradient(135deg, rgba(0, 43, 74, 0.9), rgba(0, 128, 192, 0.75)), url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1920&h=1080') center/cover;
        }

        .hero-slide-3 {
            background: linear-gradient(135deg, rgba(0, 43, 74, 0.9), rgba(0, 128, 192, 0.75)), url('https://images.unsplash.com/photo-1516321310769-65e85b8e6351?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1920&h=1080') center/cover;
        }

        .hero-content {
            text-align: center;
            max-width: 900px;
            padding: 2rem;
            color: var(--white);
            z-index: 3;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1.25rem;
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.35);
            color: var(--white);
        }

        .hero-content p {
            font-size: 1.25rem;
            font-weight: 400;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        .btn-primary-filled, .btn-primary-outline {
            font-family: 'Roboto', sans-serif;
            font-size: 1.1rem;
            font-weight: 500;
            padding: 0.8rem 2.5rem;
            border-radius: 50px;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin: 0 0.5rem;
        }

        .btn-primary-filled {
            background: linear-gradient(90deg, var(--secondary), var(--accent));
            color: var(--white);
            border: none;
        }

        .btn-primary-filled:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 128, 192, 0.3);
        }

        .btn-primary-outline {
            background: transparent;
            border: 2px solid var(--white);
            color: var(--white);
        }

        .btn-primary-outline:hover {
            background: var(--white);
            color: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .btn-primary-filled i, .btn-primary-outline i {
            margin-left: 6px;
            transition: transform 0.3s;
        }

        .btn-primary-filled:hover i, .btn-primary-outline:hover i {
            transform: translateX(3px);
        }

        .hero-indicators {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 12px;
            z-index: 4;
        }

        .hero-indicator {
            width: 10px;
            height: 10px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            cursor: pointer;
            transition: var(--transition);
        }

        .hero-indicator:hover {
            background: rgba(255, 255, 255, 0.8);
            transform: scale(1.15);
        }

        .hero-indicator.active {
            background: var(--white);
            transform: scale(1.3);
        }

        /* Stats Section */
        .stats-section {
            padding: 5rem 0;
            background: linear-gradient(180deg, var(--lighter), var(--light));
            position: relative;
        }

        .stats-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            opacity: 0.5;
            z-index: 0;
        }

        .stats-section h2 {
            font-size: 2.8rem;
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
            z-index: 1;
        }

        .stat-item {
            background: var(--white);
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 8px 25px var(--shadow);
            transition: var(--transition);
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .stat-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px var(--shadow-lg);
        }

        .stat-number {
            font-family: 'Lora', serif;
            font-size: 3rem;
            font-weight: 700;
            color: var(--secondary);
            margin-bottom: 0.75rem;
        }

        .stat-label {
            font-size: 1.1rem;
            color: var(--primary);
            font-weight: 400;
        }

        /* Services Section */
        .services-section {
            padding: 5rem 0;
            background: var(--light);
        }

        .services-section h2 {
            font-size: 2.8rem;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .services-section .lead {
            font-size: 1.2rem;
            color: var(--gray);
            max-width: 1000px;
            margin: 0 auto 3rem;
            text-align: center;
        }

        .service-card {
            background: var(--white);
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 8px 25px var(--shadow);
            transition: var(--transition);
            min-height: 280px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px var(--shadow-lg);
        }

        .service-card h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .service-card p {
            color: var(--gray);
            font-size: 1rem;
            flex-grow: 1;
        }

        .learn-more {
            font-weight: 500;
            color: var(--secondary);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: var(--transition);
        }

        .learn-more:hover {
            color: var(--accent);
            transform: translateX(6px);
        }

        .learn-more i {
            margin-left: 8px;
            transition: transform 0.3s;
        }

        .learn-more:hover i {
            transform: translateX(4px);
        }

        .btn-all {
            background: linear-gradient(90deg, var(--secondary), var(--accent));
            color: var(--white);
            border: none;
            padding: 0.5rem 1.5rem;
            font-size: 0.85rem;
            font-weight: 500;
            border-radius: 50px;
            margin: 3rem auto 0;
            display: block;
            text-align: center;
            text-decoration: none;
            transition: var(--transition);
            width: 200px;
        }

        .btn-all:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 128, 192, 0.3);
        }

        /* Why Choose Us */
        .why-choose-us {
            padding: 5rem 0;
            background: linear-gradient(180deg, var(--white), var(--lighter));
            position: relative;
        }

        .why-choose-us::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            opacity: 0.5;
            z-index: 0;
        }

        .why-choose-us h2 {
            font-size: 2.8rem;
            text-align: center;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .why-choose-us .lead {
            font-size: 1.2rem;
            color: var(--gray);
            max-width: 1000px;
            margin: 0 auto 3rem;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .why-choose-us img {
            border-radius: 16px;
            box-shadow: 0 8px 25px var(--shadow);
            object-fit: cover;
            width: 100%;
            max-height: 500px;
            transition: var(--transition);
        }

        .why-choose-us img:hover {
            transform: scale(1.03);
        }

        .feature-item {
            background: var(--white);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 6px 20px var(--shadow);
            display: flex;
            align-items: flex-start;
            gap: 1.2rem;
            transition: var(--transition);
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px var(--shadow-lg);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--secondary), var(--accent));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: var(--transition);
        }

        .feature-icon:hover {
            transform: scale(1.1);
        }

        .feature-icon i {
            color: var(--white);
            font-size: 1.5rem;
        }

        .feature-title {
            font-size: 1.6rem;
            margin-bottom: 0.5rem;
        }

        .feature-description {
            color: var(--gray);
            font-size: 1rem;
        }

        /* Industries Section */
        .industries-section {
            padding: 5rem 0;
            background: linear-gradient(180deg, var(--lighter), var(--white));
        }

        .industries-section h2 {
            font-size: 2.8rem;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .industries-section .lead {
            font-size: 1.2rem;
            color: var(--gray);
            max-width: 1000px;
            margin: 0 auto 3rem;
            text-align: center;
        }

        .industry-item {
            background: var(--white);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 6px 20px var(--shadow);
            text-align: center;
            transition: var(--transition);
        }

        .industry-item:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 30px var(--shadow-lg);
        }

        .industry-item i {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 1rem;
            transition: var(--transition);
        }

        .industry-item:hover i {
            color: var(--accent);
            transform: scale(1.2);
        }

        .industry-item p {
            font-weight: 500;
            color: var(--primary);
            font-size: 1.1rem;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--white);
            padding: 5rem 0;
            text-align: center;
            position: relative;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            opacity: 0.5;
            z-index: 0;
        }

        .cta-section h2 {
            font-size: 2.8rem;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
            color: var(--white);
        }

        .cta-section p {
            font-size: 1.2rem;
            max-width: 900px;
            margin: 0 auto 2.5rem;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            flex-wrap: wrap;
            position: relative;
            z-index: 1;
        }

        /* Responsive */
        @media (min-width: 1400px) {
            .rka-scope .section-container {
                max-width: 1400px;
            }
        }

        @media (max-width: 992px) {
            .hero-section {
                height: 80vh;
                min-height: 450px;
            }
            .hero-content h1 {
                font-size: 3rem;
            }
            .hero-content p {
                font-size: 1.1rem;
            }
            .stats-section h2, .services-section h2, .why-choose-us h2, .industries-section h2, .cta-section h2 {
                font-size: 2.5rem;
            }
            .stat-number {
                font-size: 2.8rem;
            }
            .service-card {
                min-height: 300px;
            }
            .why-choose-us img {
                margin-bottom: 2rem;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                height: 70vh;
                min-height: 400px;
            }
            .hero-content h1 {
                font-size: 2.5rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            .btn-primary-filled, .btn-primary-outline {
                padding: 0.7rem 2rem;
                font-size: 1rem;
            }
            .stats-section, .services-section, .why-choose-us, .industries-section, .cta-section {
                padding: 4rem 0;
            }
            .stats-section h2, .services-section h2, .why-choose-us h2, .industries-section h2, .cta-section h2 {
                font-size: 2.2rem;
            }
            .stat-number {
                font-size: 2.5rem;
            }
            .stat-label, .industry-item p {
                font-size: 1rem;
            }
            .service-card h3 {
                font-size: 1.6rem;
            }
            .service-card p, .services-section .lead, .why-choose-us .lead, .industries-section .lead {
                font-size: 0.95rem;
            }
            .feature-title {
                font-size: 1.5rem;
            }
            .feature-description {
                font-size: 0.95rem;
            }
            .btn-all {
                padding: 0.5rem 1.5rem;
                font-size: 0.85rem;
                width: 180px;
            }
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            .service-card {
                min-height: 320px;
            }
        }

        @media (max-width: 576px) {
            .hero-section {
                height: 60vh;
                min-height: 350px;
            }
            .hero-content h1 {
                font-size: 2rem;
            }
            .hero-content p {
                font-size: 0.95rem;
            }
            .btn-primary-filled, .btn-primary-outline {
                padding: 0.6rem 1.8rem;
                font-size: 0.95rem;
                width: 100%;
                max-width: 280px;
            }
            .stats-section h2, .services-section h2, .why-choose-us h2, .industries-section h2, .cta-section h2 {
                font-size: 1.9rem;
            }
            .stat-number {
                font-size: 2.2rem;
            }
            .stat-label, .industry-item p {
                font-size: 0.95rem;
            }
            .service-card h3 {
                font-size: 1.5rem;
            }
            .service-card p, .services-section .lead, .why-choose-us .lead, .industries-section .lead {
                font-size: 0.9rem;
            }
            .feature-title {
                font-size: 1.4rem;
            }
            .feature-description {
                font-size: 0.9rem;
            }
            .feature-icon {
                width: 45px;
                height: 45px;
            }
            .feature-icon i {
                font-size: 1.3rem;
            }
            .industry-item i {
                font-size: 2.2rem;
            }
            .btn-all {
                padding: 0.5rem 1.5rem;
                font-size: 0.85rem;
                width: 160px;
            }
            .service-card {
                min-height: auto;
            }
            .rka-scope .section-container {
                padding: 0 16px;
            }
        }
    </style>
@endsection

@section('content')
    <div class="rka-scope">
        <main>
            <!-- Hero Section -->
            <section class="hero-section">
                <div class="hero-slider">
                    <div class="hero-slide hero-slide-1 active">
                        <div class="hero-content gsap-animate">
                            <h1>Chartered Insights: Your Trusted Partner</h1>
                            <p>Premier chartered accountancy firm in Nepal, offering expert audit, tax, risk advisory, and consulting services for sustainable growth.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="#" class="btn-primary-filled">Explore Our Expertise <i class="fas fa-arrow-right"></i></a>
                                <a href="#" class="btn-primary-outline">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide-2">
                        <div class="hero-content gsap-animate">
                            <h1>Driving Financial Excellence</h1>
                            <p>Empowering businesses with precise financial reporting and strategic advisory services tailored to your needs.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="#" class="btn-primary-filled">Discover Our Solutions <i class="fas fa-arrow-right"></i></a>
                                <a href="#" class="btn-primary-outline">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide-3">
                        <div class="hero-content gsap-animate">
                            <h1>Navigating Complex Challenges</h1>
                            <p>Comprehensive risk management and compliance solutions to safeguard and strengthen your organization.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="#" class="btn-primary-filled">Learn More Today <i class="fas fa-arrow-right"></i></a>
                                <a href="#" class="btn-primary-outline">Our Approach <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-indicators">
                    <div class="hero-indicator active" data-slide="0"></div>
                    <div class="hero-indicator" data-slide="1"></div>
                    <div class="hero-indicator" data-slide="2"></div>
                </div>
            </section>

            <!-- Key Statistics -->
            <section class="stats-section">
                <div class="section-container">
                    <h2 class="gsap-animate">Our Impact by the Numbers</h2>
                    <div class="row g-4">
                        <div class="col-6 col-md-3">
                            <div class="stat-item gsap-animate">
                                <div class="stat-number" data-target="100">0</div>
                                <div class="stat-label">Satisfied Clients</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="stat-item gsap-animate" data-delay="0.2">
                                <div class="stat-number" data-target="15">0</div>
                                <div class="stat-label">Years of Excellence</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="stat-item gsap-animate" data-delay="0.4">
                                <div class="stat-number" data-target="500">0</div>
                                <div class="stat-label">Successful Projects</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="stat-item gsap-animate" data-delay="0.6">
                                <div class="stat-number" data-target="25">0</div>
                                <div class="stat-label">Expert Advisors</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Core Services -->
            <section class="services-section">
                <div class="section-container">
                    <h2 class="gsap-animate">Our Core Services</h2>
                    <p class="lead gsap-animate">Comprehensive chartered accountancy services designed to drive your business forward with precision, integrity, and strategic insight.</p>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 gsap-animate">
                            <div class="service-card">
                                <h3>Audit & Assurance</h3>
                                <p>Independent audits, reviews, and assurance services that provide confidence in your financial reporting and compliance with regulatory requirements.</p>
                                <a href="#" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 gsap-animate" data-delay="0.2">
                            <div class="service-card">
                                <h3>Tax Advisory</h3>
                                <p>Strategic tax planning, compliance, and advisory services to optimize your tax position and ensure regulatory adherence across all jurisdictions.</p>
                                <a href="#" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 gsap-animate" data-delay="0.4">
                            <div class="service-card">
                                <h3>Risk Advisory</h3>
                                <p>Comprehensive risk assessment, management strategies, and internal control solutions to protect and strengthen your organization against uncertainties.</p>
                                <a href="#" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 gsap-animate" data-delay="0.6">
                            <div class="service-card">
                                <h3>Business Consulting</h3>
                                <p>Strategic advisory services, process optimization, and growth planning to help your business reach its full potential in competitive markets.</p>
                                <a href="#" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 gsap-animate" data-delay="0.8">
                            <div class="service-card">
                                <h3>Financial Reporting</h3>
                                <p>Professional financial statement preparation, analysis, and reporting services that meet international standards and regulatory requirements.</p>
                                <a href="#" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 gsap-animate" data-delay="1.0">
                            <div class="service-card">
                                <h3>Corporate Advisory</h3>
                                <p>Strategic corporate guidance, governance consulting, and transaction advisory to support your business objectives and stakeholder interests.</p>
                                <a href="#" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn-all gsap-animate">View All Services</a>
                </div>
            </section>

            <!-- Why Choose Us -->
            <section class="why-choose-us">
                <div class="section-container">
                    <h2 class="gsap-animate">Why Choose Chartered Insights</h2>
                    <p class="lead gsap-animate">Partner with us for unmatched expertise, innovative solutions, and a dedication to your business success.</p>
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6 gsap-animate">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=800&h=600" alt="Team collaboration" class="w-100">
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-item gsap-animate">
                                <div class="feature-icon"><i class="fas fa-user-tie"></i></div>
                                <div>
                                    <h4 class="feature-title">Partner-Led Excellence</h4>
                                    <p class="feature-description">Senior professionals oversee every project, ensuring quality, accountability, and strategic insight.</p>
                                </div>
                            </div>
                            <div class="feature-item gsap-animate" data-delay="0.2">
                                <div class="feature-icon"><i class="fas fa-briefcase"></i></div>
                                <div>
                                    <h4 class="feature-title">Sector-Specific Expertise</h4>
                                    <p class="feature-description">Customized solutions driven by deep knowledge across diverse industries.</p>
                                </div>
                            </div>
                            <div class="feature-item gsap-animate" data-delay="0.4">
                                <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                                <div>
                                    <h4 class="feature-title">Technology-Driven Results</h4>
                                    <p class="feature-description">Advanced tools and platforms deliver efficient, accurate outcomes.</p>
                                </div>
                            </div>
                            <div class="feature-item gsap-animate" data-delay="0.6">
                                <div class="feature-icon"><i class="fas fa-hand-holding-heart"></i></div>
                                <div>
                                    <h4 class="feature-title">Client-First Commitment</h4>
                                    <p class="feature-description">Fostering lasting partnerships through exceptional service and clear communication.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Industries We Serve -->
            <section class="industries-section">
                <div class="section-container">
                    <h2 class="gsap-animate">Industries We Serve</h2>
                    <p class="lead gsap-animate">Deep industry expertise across diverse sectors, bringing specialized knowledge to meet your unique challenges.</p>
                    <div class="row g-4">
                        <div class="col-6 col-md-3 gsap-animate">
                            <div class="industry-item">
                                <i class="fas fa-heartbeat"></i>
                                <p>Healthcare & Medical</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 gsap-animate" data-delay="0.2">
                            <div class="industry-item">
                                <i class="fas fa-industry"></i>
                                <p>Manufacturing & Industrial</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 gsap-animate" data-delay="0.4">
                            <div class="industry-item">
                                <i class="fas fa-laptop-code"></i>
                                <p>Technology & Software</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 gsap-animate" data-delay="0.6">
                            <div class="industry-item">
                                <i class="fas fa-building"></i>
                                <p>Real Estate & Construction</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn-all gsap-animate">View All Industries</a>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="cta-section">
                <div class="section-container">
                    <div class="gsap-animate">
                        <h2>Elevate Your Business Today</h2>
                        <p>Join forces with Chartered Insights to unlock expert guidance and transformative solutions tailored to your needs.</p>
                        <div class="cta-buttons">
                            <a href="#" class="btn-primary-filled">Get Started Now <i class="fas fa-arrow-right"></i></a>
                            <a href="#" class="btn-primary-outline">Discover Our Services <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);

        // Hero Slider
        const slides = document.querySelectorAll('.hero-slide');
        const indicators = document.querySelectorAll('.hero-indicator');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
                if (i === index) {
                    gsap.fromTo(slide.querySelector('.hero-content'), 
                        { opacity: 0, y: 50 },
                        { opacity: 1, y: 0, duration: 1.2, ease: 'power3.out' }
                    );
                }
            });
            indicators.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
        }

        indicators.forEach((indicator, i) => {
            indicator.addEventListener('click', () => {
                currentSlide = i;
                showSlide(currentSlide);
            });
        });

        setInterval(() => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }, 5000);

        // Animate Stats
        gsap.utils.toArray('.stat-number').forEach((num, i) => {
            const target = num.getAttribute('data-target');
            gsap.fromTo(num, 
                { innerText: 0 },
                {
                    innerText: target,
                    duration: 2.5,
                    ease: 'power2.out',
                    snap: { innerText: 1 },
                    scrollTrigger: {
                        trigger: num.parentElement,
                        start: 'top 80%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });

        // General Animations
        gsap.utils.toArray('.gsap-animate').forEach((el, i) => {
            const delay = el.getAttribute('data-delay') || 0;
            gsap.fromTo(el, 
                { opacity: 0, y: 40 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 1.2,
                    delay: parseFloat(delay),
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 80%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });

        // Parallax-like effect for hero slides
        gsap.utils.toArray('.hero-slide').forEach(slide => {
            gsap.to(slide, {
                backgroundPosition: '50% 60%',
                ease: 'none',
                scrollTrigger: {
                    trigger: slide,
                    scrub: 1,
                    start: 'top bottom',
                    end: 'bottom top'
                }
            });
        });
    </script>
@endsection
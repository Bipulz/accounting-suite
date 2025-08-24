
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
    <!-- GSAP for Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
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
            --shadow-lg: rgba(0, 33, 63, 0.25);
            --transition: all 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        }

        .rka-scope {
            font-family: 'Inter', sans-serif;
            background: var(--light);
            color: var(--primary);
            line-height: 1.8;
            overflow-x: hidden;
            width: 100vw;
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
            padding: 0 1rem;
            width: 100%;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 95vh;
            overflow: hidden;
            background: var(--primary);
            margin: 0;
            padding: 0;
            width: 100vw;
        }

        .hero-slider {
            width: 100vw;
            height: 100%;
        }

        .hero-slide {
            position: relative;
            width: 100vw;
            min-height: 95vh;
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
            max-width: 90%;
            margin: auto;
            padding: 2rem;
            color: var(--white);
            background: rgba(0, 33, 63, 0.15);
            backdrop-filter: blur(8px);
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0, 33, 63, 0.2);
        }

        .hero-content h1 {
            font-size: clamp(2rem, 6vw, 3.5rem);
            margin-bottom: 1rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--white), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-content p {
            font-size: clamp(0.9rem, 3vw, 1.2rem);
            font-weight: 400;
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }

        .btn-primary-filled, .btn-primary-outline {
            font-family: 'Inter', sans-serif;
            font-size: clamp(0.8rem, 2.5vw, 0.95rem);
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin: 0.5rem;
        }

        .btn-primary-filled {
            background: linear-gradient(90deg, var(--secondary), var(--accent));
            color: var(--white);
            border: none;
        }

        .btn-primary-filled:hover {
            background: linear-gradient(90deg, var(--accent), var(--secondary));
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 144, 212, 0.3);
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
            box-shadow: 0 10px 25px rgba(0, 33, 63, 0.2);
        }

        .btn-primary-filled i, .btn-primary-outline i {
            margin-left: 8px;
            transition: transform 0.3s;
        }

        .btn-primary-filled:hover i, .btn-primary-outline:hover i {
            transform: translateX(4px);
        }

        /* Slick Slider Dots */
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

        /* Stats Section */
        .stats-section {
            padding: 4rem 0;
            background: linear-gradient(180deg, var(--light), var(--lighter));
            position: relative;
            width: 100vw;
        }

        .stats-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2), transparent 70%);
            opacity: 0.4;
        }

        .stats-section h2 {
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            text-align: center;
            margin-bottom: 2rem;
        }

        .stat-item {
            background: linear-gradient(135deg, var(--white), var(--light));
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 0 8px 25px var(--shadow);
            transition: var(--transition);
            text-align: center;
        }

        .stat-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px var(--shadow-lg);
        }

        .stat-number {
            font-family: 'Lora', serif;
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 700;
            color: var(--secondary);
            margin-bottom: 0.75rem;
        }

        .stat-label {
            font-size: clamp(0.9rem, 2.5vw, 1.1rem);
            color: var(--primary);
            font-weight: 500;
        }

        /* Services Section */
        .services-section {
            padding: 4rem 0;
            background: var(--light);
            width: 100vw;
        }

        .services-section h2 {
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .services-section .lead {
            font-size: clamp(0.95rem, 2.5vw, 1.1rem);
            color: var(--gray);
            max-width: 1000px;
            margin: 0 auto 2rem;
            text-align: center;
        }

        .service-card {
            background: linear-gradient(135deg, var(--white), var(--light));
            border-radius: 1rem;
            padding: 1.5rem;
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
            font-size: clamp(1.5rem, 3vw, 1.8rem);
            margin-bottom: 1rem;
        }

        .service-card p {
            color: var(--gray);
            font-size: clamp(0.9rem, 2.5vw, 1rem);
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
            transform: translateX(6px);
        }

        .learn-more i {
            margin-left: 0.5rem;
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
            font-size: clamp(0.85rem, 2.5vw, 0.9rem);
            font-weight: 600;
            border-radius: 50px;
            margin: 2rem auto 0;
            display: block;
            text-align: center;
            text-decoration: none;
            transition: var(--transition);
            width: clamp(140px, 20vw, 160px);
        }

        .btn-all:hover {
            background: linear-gradient(90deg, var(--accent), var(--secondary));
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 144, 212, 0.3);
        }

        /* Why Choose Us */
        .why-choose-us {
            padding: 4rem 0;
            background: linear-gradient(180deg, var(--white), var(--lighter));
            position: relative;
            width: 100vw;
        }

        .why-choose-us::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2), transparent 70%);
            opacity: 0.4;
        }

        .why-choose-us h2 {
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .why-choose-us .lead {
            font-size: clamp(0.95rem, 2.5vw, 1.1rem);
            color: var(--gray);
            max-width: 1000px;
            margin: 0 auto 2rem;
            text-align: center;
        }

        .why-choose-us img {
            border-radius: 1rem;
            box-shadow: 0 8px 25px var(--shadow);
            object-fit: cover;
            width: 100%;
            max-height: 400px;
            transition: var(--transition);
        }

        .why-choose-us img:hover {
            transform: scale(1.03);
        }

        .feature-item {
            background: linear-gradient(135deg, var(--white), var(--light));
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 0 8px 25px var(--shadow);
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            transition: var(--transition);
            margin-bottom: 1.5rem;
        }

        .feature-item:hover {
            transform: translateY(-6px);
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
            font-size: clamp(1.4rem, 2.5vw, 1.6rem);
            margin-bottom: 0.5rem;
        }

        .feature-description {
            color: var(--gray);
            font-size: clamp(0.9rem, 2.5vw, 1rem);
        }

        /* Industries Section */
        .industries-section {
            padding: 4rem 0;
            background: linear-gradient(180deg, var(--lighter), var(--white));
            width: 100vw;
        }

        .industries-section h2 {
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .industries-section .lead {
            font-size: clamp(0.95rem, 2.5vw, 1.1rem);
            color: var(--gray);
            max-width: 1000px;
            margin: 0 auto 2rem;
            text-align: center;
        }

        .industry-item {
            background: linear-gradient(135deg, var(--white), var(--light));
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 0 8px 25px var(--shadow);
            text-align: center;
            transition: var(--transition);
        }

        .industry-item:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 30px var(--shadow-lg);
        }

        .industry-item i {
            font-size: clamp(2rem, 5vw, 2.5rem);
            color: var(--secondary);
            margin-bottom: 1rem;
            transition: var(--transition);
        }

        .industry-item:hover i {
            color: var(--accent);
            transform: scale(1.2);
        }

        .industry-item p {
            font-weight: 600;
            color: var(--primary);
            font-size: clamp(0.9rem, 2.5vw, 1.1rem);
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--white);
            padding: 4rem 0;
            text-align: center;
            position: relative;
            width: 100vw;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2), transparent 70%);
            opacity: 0.4;
        }

        .cta-section h2 {
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            margin-bottom: 1.5rem;
            color: var(--white);
        }

        .cta-section p {
            font-size: clamp(0.95rem, 2.5vw, 1.1rem);
            max-width: 90%;
            margin: 0 auto 2rem;
            opacity: 0.9;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        /* Responsive Design */
        @media (min-width: 1200px) {
            .section-container {
                max-width: 1400px;
                padding: 0 1rem;
            }
        }

        @media (max-width: 992px) {
            .hero-section, .hero-slide {
                min-height: 80vh;
            }
            .hero-content h1 {
                font-size: clamp(1.8rem, 5vw, 3rem);
            }
            .hero-content p {
                font-size: clamp(0.85rem, 2.8vw, 1.1rem);
            }
            .stats-section h2, .services-section h2, .why-choose-us h2, .industries-section h2, .cta-section h2 {
                font-size: clamp(1.6rem, 3.5vw, 2.3rem);
            }
            .stat-number {
                font-size: clamp(1.8rem, 4.5vw, 2.8rem);
            }
            .service-card {
                min-height: 300px;
            }
            .why-choose-us img {
                margin-bottom: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .hero-section, .hero-slide {
                min-height: 70vh;
            }
            .hero-content {
                padding: 1.5rem;
                max-width: 95%;
            }
            .hero-content h1 {
                font-size: clamp(1.6rem, 4.5vw, 2.5rem);
            }
            .hero-content p {
                font-size: clamp(0.8rem, 2.5vw, 1rem);
            }
            .btn-primary-filled, .btn-primary-outline {
                padding: 0.6rem 1.5rem;
                font-size: clamp(0.75rem, 2.2vw, 0.9rem);
                width: 100%;
                max-width: 220px;
            }
            .stats-section, .services-section, .why-choose-us, .industries-section, .cta-section {
                padding: 3rem 0;
            }
            .stats-section h2, .services-section h2, .why-choose-us h2, .industries-section h2, .cta-section h2 {
                font-size: clamp(1.5rem, 3.2vw, 2rem);
            }
            .stat-number {
                font-size: clamp(1.6rem, 4vw, 2.5rem);
            }
            .stat-label, .industry-item p {
                font-size: clamp(0.85rem, 2.2vw, 1rem);
            }
            .service-card h3 {
                font-size: clamp(1.4rem, 2.8vw, 1.6rem);
            }
            .service-card p, .services-section .lead, .why-choose-us .lead, .industries-section .lead {
                font-size: clamp(0.85rem, 2.2vw, 0.95rem);
            }
            .feature-title {
                font-size: clamp(1.3rem, 2.3vw, 1.5rem);
            }
            .feature-description {
                font-size: clamp(0.85rem, 2.2vw, 0.95rem);
            }
            .btn-all {
                width: 140px;
                padding: 0.5rem 1rem;
                font-size: clamp(0.8rem, 2vw, 0.85rem);
            }
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
        }

        @media (max-width: 576px) {
            .hero-section, .hero-slide {
                min-height: 60vh;
            }
            .hero-content {
                padding: 1rem;
                max-width: 98%;
            }
            .hero-content h1 {
                font-size: clamp(1.4rem, 4vw, 2.2rem);
            }
            .hero-content p {
                font-size: clamp(0.75rem, 2.2vw, 0.9rem);
            }
            .section-container {
                padding: 0 0.5rem;
            }
            .btn-primary-filled, .btn-primary-outline {
                padding: 0.5rem 1.2rem;
                max-width: 200px;
            }
            .feature-icon {
                width: 40px;
                height: 40px;
            }
            .feature-icon i {
                font-size: 1.2rem;
            }
            .industry-item i {
                font-size: clamp(1.8rem, 4vw, 2rem);
            }
        }

        @media (max-width: 320px) {
            .hero-section, .hero-slide {
                min-height: 50vh;
            }
            .hero-content {
                padding: 0.8rem;
            }
            .hero-content h1 {
                font-size: clamp(1.2rem, 3.8vw, 1.8rem);
            }
            .hero-content p {
                font-size: clamp(0.7rem, 2vw, 0.85rem);
            }
            .btn-primary-filled, .btn-primary-outline {
                padding: 0.4rem 1rem;
                font-size: clamp(0.7rem, 2vw, 0.85rem);
                max-width: 180px;
            }
            .section-container {
                padding: 0 0.3rem;
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
                    <div class="hero-slide hero-slide-1">
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

    <!-- jQuery (required for Slick Slider) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
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
                pauseOnFocus: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            speed: 600,
                            autoplaySpeed: 4000
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            speed: 500,
                            autoplaySpeed: 3500
                        }
                    }
                ]
            });

            $('.hero-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
                const nextContent = $(slick.$slides[nextSlide]).find('.hero-content');
                gsap.fromTo(nextContent, 
                    { opacity: 0, y: 50 },
                    { opacity: 1, y: 0, duration: 1.2, ease: 'power3.out' }
                );
            });
        });

        window.addEventListener('load', function () {
            gsap.registerPlugin(ScrollTrigger);

            const nf = new Intl.NumberFormat();
            document.querySelectorAll('.stat-number').forEach((num) => {
                const target = parseInt(num.getAttribute('data-target'), 10);
                if (!Number.isFinite(target)) return;

                const obj = { val: 0 };
                gsap.to(obj, {
                    val: target,
                    duration: 2,
                    ease: 'power2.out',
                    onUpdate: () => {
                        num.textContent = nf.format(Math.round(obj.val)) + '+';
                    },
                    scrollTrigger: {
                        trigger: num.closest('.stat-item') || num,
                        start: 'top 85%',
                        once: true,
                        invalidateOnRefresh: true
                    }
                });
            });

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

            ScrollTrigger.refresh();
        });
    </script>
@endsection

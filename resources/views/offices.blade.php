@extends('layouts.sidebar')

@section('styles')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter & Lora -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lora:wght@500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #00213f;
            --secondary: #0090d4;
            --accent: #00b4f2;
            --light: #f8fcff;
            --lighter: #e8f0fc;
            --white: #ffffff;
            --gray: #6c757d;
            --shadow: rgba(0, 33, 63, 0.2);
            --transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .rka-scope {
            font-family: 'Inter', sans-serif;
            background: var(--light);
            color: var(--gray);
            line-height: 1.7;
            overflow-x: hidden;
        }

        .rka-scope h1, .rka-scope h2, .rka-scope h3, .rka-scope h4 {
            font-family: 'Lora', serif;
            font-weight: 600;
            color: var(--primary);
            letter-spacing: 0.2px;
        }

        .section-container {
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 95vh;
            margin-top:10rem;
            min-height: 550px;
            overflow: hidden;
            background: linear-gradient(135deg, rgba(0, 33, 63, 0.8), rgba(0, 144, 212, 0.7)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1920&h=1080') center/cover;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle, rgba(0, 180, 242, 0.15) 0%, transparent 60%);
            animation: wave 10s infinite ease-in-out;
        }

        @keyframes wave {
            0%, 100% { opacity: 0.6; transform: scale(1); }
            50% { opacity: 0.3; transform: scale(1.05); }
        }

        .hero-content {
            text-align: center;
            max-width: 800px;
            width: 90%;
            margin-top: 10%;
            margin-left: 20%;
            position: relative;
            padding: 2.5rem;
            color: var(--white);
            background: rgba(0, 33, 63, 0.15);
            backdrop-filter: blur(8px);
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0, 33, 63, 0.2);
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--white), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-content p {
            font-size: 1.2rem;
            font-weight: 400;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn-primary-filled, .btn-primary-outline, .btn-cta-filled, .btn-cta-outline, .btn-office {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            padding: 0.9rem 2.2rem;
            border-radius: 50px;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            position: relative;
            margin: 0.5rem;
        }

        .btn-primary-filled, .btn-cta-filled, .btn-office {
            background: linear-gradient(90deg, var(--secondary), var(--accent));
            color: var(--white);
            border: none;
            box-shadow: 0 6px 20px rgba(0, 144, 212, 0.3);
        }

        .btn-primary-filled:hover, .btn-cta-filled:hover, .btn-office:hover {
            background: linear-gradient(90deg, var(--accent), var(--secondary));
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 144, 212, 0.3);
        }

        .btn-primary-outline, .btn-cta-outline {
            background: transparent;
            border: 2px solid var(--white);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(0, 144, 212, 0.2);
        }

        .btn-primary-outline:hover, .btn-cta-outline:hover {
            background: var(--white);
            color: var(--primary);
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 33, 63, 0.2);
        }

        .btn-primary-filled i, .btn-primary-outline i, .btn-cta-filled i, .btn-cta-outline i, .btn-office i {
            margin-left: 8px;
            transition: transform 0.3s;
        }

        .btn-primary-filled:hover i, .btn-primary-outline:hover i, .btn-cta-filled:hover i, .btn-cta-outline:hover i, .btn-office:hover i {
            transform: translateX(4px);
        }

        /* Locations Section */
        .locations-section, .access-section, .services-section {
            padding: 5rem 0;
            background: var(--white);
             padding-right: 5rem;
        }

        .locations-section h2, .access-section h2, .services-section h2 {
            font-size: 2.8rem;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .locations-section .lead, .access-section .lead, .services-section .lead {
            font-size: 1.15rem;
            font-weight: 400;
            color: var(--gray);
            max-width: 900px;
            margin: 0 auto 2.5rem;
            text-align: center;
        }

        .office-card {
            background: linear-gradient(145deg, var(--white), var(--lighter));
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 30px var(--shadow);
            transition: var(--transition);
            overflow: hidden;
            position: relative;
            min-height: 580px;
        }

        .office-card:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(0, 33, 63, 0.3);
        }

        .office-card .office-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 20px 20px 0 0;
        }

        .office-card .content {
            padding: 2rem;
        }

        .office-card .office-badge {
            display: inline-block;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--white);
            background: var(--accent);
            padding: 0.4rem 1rem;
            border-radius: 12px;
            margin-bottom: 1rem;
        }

        .office-card h3 {
            font-size: 1.8rem;
            margin-bottom: 0.8rem;
            font-weight: 600;
        }

        .office-card p {
            font-size: 1rem;
            color: var(--gray);
            margin-bottom: 1.2rem;
            font-weight: 400;
        }

        .office-card .details {
            font-size: 0.95rem;
            color: var(--gray);
            margin-bottom: 1.5rem;
        }

        .office-card .details i {
            margin-right: 0.6rem;
            color: var(--secondary);
            font-size: 0.95rem;
        }

        /* Access Section */
        .access-section .card {
            background: linear-gradient(145deg, var(--white), var(--lighter));
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 30px var(--shadow);
            padding: 2rem;
            transition: var(--transition);
        }

        .access-section .card:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 35px rgba(0, 33, 63, 0.25);
        }

        .access-section .card h3 {
            font-size: 1.6rem;
            margin-bottom: 1rem;
        }

        .access-section .card p, .access-section .card ul {
            font-size: 1rem;
            color: var(--gray);
            font-weight: 400;
        }

        .access-section .card ul {
            padding-left: 1.2rem;
            margin-bottom: 1.2rem;
        }

        .access-section .card ul li {
            margin-bottom: 0.4rem;
        }

        /* Services Section */
        .services-section .service-card {
            background: linear-gradient(145deg, var(--white), var(--lighter));
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 30px var(--shadow);
            padding: 2rem;
            text-align: center;
            transition: var(--transition);
             padding-right: 5rem;
        }

        .services-section .service-card:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(0, 33, 63, 0.3);
        }

        .services-section .service-card i {
            font-size: 2.2rem;
            color: var(--secondary);
            background: var(--lighter);
            border-radius: 50%;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            transition: var(--transition);
        }

        .services-section .service-card:hover i {
            transform: scale(1.1);
            color: var(--accent);
        }

        .services-section .service-card h3 {
            font-size: 1.6rem;
            margin-bottom: 0.8rem;
        }

        .services-section .service-card p {
            font-size: 1rem;
            color: var(--gray);
            font-weight: 400;
        }

        /* CTA Section */
        .cta-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--white);
        }

        .cta-section h2 {
            font-size: 2.8rem;
            text-align: center;
            margin-bottom: 1.5rem;
            color: var(--white);
        }

        .cta-section p {
            font-size: 1.15rem;
            max-width: 800px;
            margin: 0 auto 2rem;
            text-align: center;
            opacity: 0.9;
        }

        /* Responsive */
        @media (min-width: 1400px) {
            .section-container {
                max-width: 1320px;
            }
        }

        @media (max-width: 991px) {
            .hero-section {
                height: 75vh;
                min-height: 500px;
            }
            .hero-content h1 {
                font-size: 3rem;
            }
            .hero-content p {
                font-size: 1.1rem;
            }
            .locations-section, .access-section, .services-section, .cta-section {
                padding: 4rem 0;
            }
            .locations-section h2, .access-section h2, .services-section h2, .cta-section h2 {
                font-size: 2.4rem;
            }
            .locations-section .lead, .access-section .lead, .services-section .lead, .cta-section p {
                font-size: 1.05rem;
            }
            .office-card {
                min-height: 540px;
            }
            .office-card .office-image {
                height: 180px;
            }
            .office-card .content {
                padding: 1.5rem;
            }
            .office-card h3 {
                font-size: 1.6rem;
            }
            .office-card p, .office-card .details {
                font-size: 0.9rem;
            }
            .office-card .office-badge {
                font-size: 0.8rem;
                padding: 0.3rem 0.8rem;
            }
            .btn-office, .btn-cta-filled, .btn-cta-outline {
                padding: 0.7rem 1.6rem;
                font-size: 0.9rem;
            }
            .access-section .card {
                padding: 1.5rem;
            }
            .access-section .card h3 {
                font-size: 1.4rem;
            }
            .access-section .card p, .access-section .card ul {
                font-size: 0.9rem;
            }
            .services-section .service-card {
                padding: 1.5rem;
            }
            .services-section .service-card h3 {
                font-size: 1.4rem;
            }
            .services-section .service-card i {
                font-size: 2rem;
                padding: 1.2rem;
                margin-bottom: 1.2rem;
            }
        }

        @media (max-width: 767px) {
            .hero-section {
                height: 65vh;
                min-height: 450px;
            }
            .hero-content {
                padding: 2rem;
            }
            .hero-content h1 {
                font-size: 2.5rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            .locations-section, .access-section, .services-section, .cta-section {
                padding: 3.5rem 0;
            }
            .locations-section h2, .access-section h2, .services-section h2, .cta-section h2 {
                font-size: 2rem;
            }
            .locations-section .lead, .access-section .lead, .services-section .lead, .cta-section p {
                font-size: 0.95rem;
            }
            .office-card {
                min-height: 500px;
            }
            .office-card .office-image {
                height: 160px;
            }
            .office-card .content {
                padding: 1.2rem;
            }
            .office-card h3 {
                font-size: 1.4rem;
            }
            .office-card p, .office-card .details {
                font-size: 0.85rem;
            }
            .btn-office, .btn-cta-filled, .btn-cta-outline {
                padding: 0.6rem 1.5rem;
                font-size: 0.85rem;
                width: 100%;
                max-width: 280px;
            }
            .office-card .d-flex {
                flex-direction: column;
                gap: 0.5rem;
            }
            .access-section .card {
                padding: 1.2rem;
            }
            .access-section .card h3 {
                font-size: 1.3rem;
            }
            .access-section .card p, .access-section .card ul {
                font-size: 0.85rem;
            }
            .services-section .service-card {
                padding: 1.2rem;
            }
            .services-section .service-card h3 {
                font-size: 1.3rem;
            }
            .services-section .service-card i {
                font-size: 1.8rem;
                padding: 1rem;
                margin-bottom: 1rem;
            }
            .cta-section .d-flex {
                flex-direction: column;
                gap: 0.5rem;
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
                font-size: 2rem;
            }
            .hero-content p {
                font-size: 0.9rem;
            }
            .locations-section, .access-section, .services-section, .cta-section {
                padding: 3rem 0;
            }
            .locations-section h2, .access-section h2, .services-section h2, .cta-section h2 {
                font-size: 1.8rem;
            }
            .locations-section .lead, .access-section .lead, .services-section .lead, .cta-section p {
                font-size: 0.9rem;
            }
            .office-card {
                min-height: 460px;
            }
            .office-card .office-image {
                height: 140px;
            }
            .office-card .content {
                padding: 1rem;
            }
            .office-card h3 {
                font-size: 1.3rem;
            }
            .office-card p, .office-card .details {
                font-size: 0.8rem;
            }
            .office-card .office-badge {
                font-size: 0.75rem;
                padding: 0.25rem 0.6rem;
            }
            .btn-office, .btn-cta-filled, .btn-cta-outline {
                padding: 0.6rem 1.4rem;
                font-size: 0.8rem;
                max-width: 260px;
            }
            .access-section .card {
                padding: 1rem;
            }
            .access-section .card h3 {
                font-size: 1.2rem;
            }
            .access-section .card p, .access-section .card ul {
                font-size: 0.8rem;
            }
            .services-section .service-card {
                padding: 1rem;
            }
            .services-section .service-card h3 {
                font-size: 1.2rem;
            }
            .services-section .service-card i {
                font-size: 1.6rem;
                padding: 0.8rem;
                margin-bottom: 0.8rem;
            }
            .section-container {
                padding: 0 12px;
            }
        }
    </style>
@endsection

@section('content')
    <div class="rka-scope" style="margin: 0; padding: 0; overflow-x: hidden;">
        <main style="margin: 0; padding: 0; width: 100vw;">
            <!-- Hero Section -->
            <section class="hero-section">
                <div class="hero-content gsap-animate">
                    <h1>Our Offices</h1>
                    <p>Find our locations across Nepal and connect with our local teams for personalized service.</p>
                    <div class="d-flex flex-wrap flex-column flex-md-row justify-content-center gap-3">
                        <a href="#contact" class="btn-primary-filled">Contact Us <i class="fas fa-arrow-right"></i></a>
                        <a href="#services" class="btn-primary-outline">Our Services <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </section>

            <!-- Locations Section -->
            <section class="locations-section" id="locations">
                <div class="section-container">
                    <h2 class="gsap-animate">Our Locations</h2>
                    <p class="lead gsap-animate">With offices strategically located across Nepal, we're always close to our clients, providing personalized service and local expertise.</p>
                    <div class="row g-4">
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate">
                            <div class="office-card">
                                <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=1200&auto=format&fit=crop" class="office-image" alt="Kathmandu office">
                                <div class="content">
                                    <span class="office-badge">Head Office</span>
                                    <h3>Kathmandu Office</h3>
                                    <p>Our flagship office in the heart of Nepal's capital serves as our headquarters and primary service center. This modern facility houses our executive team, specialized departments, and state-of-the-art meeting facilities.</p>
                                    <div class="details">
                                        <p><i class="fas fa-map-marker-alt"></i> Chartered House, Durbar Marg, Kathmandu 44600, Nepal</p>
                                        <p><i class="fas fa-phone"></i> +977-1-4234567</p>
                                        <p><i class="fas fa-envelope"></i> kathmandu@charteredinsights.com</p>
                                        <p><i class="fas fa-clock"></i> Sunday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM</p>
                                    </div>
                                    <div class="d-flex flex-wrap flex-lg-row justify-content-center gap-2">
                                        <a href="#directions" class="btn-office">Get Directions <i class="fas fa-map"></i></a>
                                        <a href="#appointment" class="btn-office">Book Appointment <i class="fas fa-calendar-check"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.2">
                            <div class="office-card">
                                <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=1200&auto=format&fit=crop" class="office-image" alt="Pokhara office">
                                <div class="content">
                                    <span class="office-badge">Branch Office</span>
                                    <h3>Pokhara Office</h3>
                                    <p>Our Pokhara office provides comprehensive accounting and financial advisory services to businesses and individuals in the Gandaki region, ensuring local expertise with global standards.</p>
                                    <div class="details">
                                        <p><i class="fas fa-map-marker-alt"></i> Lake Side, Pokhara-6, Kaski, Nepal</p>
                                        <p><i class="fas fa-phone"></i> +977-61-465432</p>
                                        <p><i class="fas fa-envelope"></i> pokhara@charteredinsights.com</p>
                                        <p><i class="fas fa-clock"></i> Sunday - Friday: 9:30 AM - 5:30 PM<br>Saturday: 10:00 AM - 3:00 PM</p>
                                    </div>
                                    <div class="d-flex flex-wrap flex-lg-row justify-content-center gap-2">
                                        <a href="#directions" class="btn-office">Get Directions <i class="fas fa-map"></i></a>
                                        <a href="#appointment" class="btn-office">Book Appointment <i class="fas fa-calendar-check"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.4">
                            <div class="office-card">
                                <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=1200&auto=format&fit=crop" class="office-image" alt="Chitwan office">
                                <div class="content">
                                    <span class="office-badge">Branch Office</span>
                                    <h3>Chitwan Office</h3>
                                    <p>Our Bharatpur office provides comprehensive accounting and financial advisory services to businesses and individuals in the Bagmati region, ensuring local expertise with global standards.</p>
                                    <div class="details">
                                        <p><i class="fas fa-map-marker-alt"></i> Narayangarh-4, Bharatpur, Chitwan, Nepal</p>
                                        <p><i class="fas fa-phone"></i> +977-56-526789</p>
                                        <p><i class="fas fa-envelope"></i> chitwan@charteredinsights.com</p>
                                        <p><i class="fas fa-clock"></i> Sunday - Friday: 9:00 AM - 5:00 PM<br>Saturday: Closed</p>
                                    </div>
                                    <div class="d-flex flex-wrap flex-lg-row justify-content-center gap-2">
                                        <a href="#directions" class="btn-office">Get Directions <i class="fas fa-map"></i></a>
                                        <a href="#appointment" class="btn-office">Book Appointment <i class="fas fa-calendar-check"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Access Section -->
            <section class="access-section" id="access">
                <div class="section-container">
                    <h2 class="gsap-animate">Getting to Our Offices</h2>
                    <p class="lead gsap-animate">Easy access and convenient transportation options to all our locations.</p>
                    <div class="row g-4">
                        <div class="col-12 col-lg-6 card gsap-animate">
                            <h3>Schedule Appointment</h3>
                            <p>Book an appointment at any of our offices for personalized consultation and service.</p>
                            <a href="#appointment" class="btn-office">Book Now <i class="fas fa-calendar-check"></i></a>
                        </div>
                        <div class="col-12 col-lg-6 card gsap-animate" data-delay="0.2">
                            <h3>Parking & Transport</h3>
                            <p><strong>Parking Information</strong></p>
                            <ul>
                                <li>Free parking available: 20 car parking slots</li>
                                <li>Covered parking</li>
                                <li>Security guard on duty</li>
                                <li>Visitor parking passes available on request</li>
                            </ul>
                            <p><strong>Directions & Transport</strong></p>
                            <ul>
                                <li><strong>Public Transport Options:</strong></li>
                                <li>Bus: Regular bus service from major areas</li>
                                <li>Micro: Available from Ratna Park and other key locations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services Section -->
            <section class="services-section" id="services">
                <div class="section-container">
                    <h2 class="gsap-animate">Services Available at All Locations</h2>
                    <p class="lead gsap-animate">Each of our offices provides the complete range of our professional services, ensuring consistent quality and expertise regardless of location.</p>
                    <div class="row g-4">
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate">
                            <div class="service-card">
                                <i class="fas fa-file-alt"></i>
                                <h3>Audit & Assurance</h3>
                                <p>Independent audits, reviews, and assurance services that provide confidence in your financial reporting and compliance with regulatory requirements.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.2">
                            <div class="service-card">
                                <i class="fas fa-calculator"></i>
                                <h3>Tax Advisory</h3>
                                <p>Strategic tax planning, compliance, and advisory services to optimize your tax position and ensure regulatory adherence across all jurisdictions.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.4">
                            <div class="service-card">
                                <i class="fas fa-shield-alt"></i>
                                <h3>Risk Advisory</h3>
                                <p>Comprehensive risk assessment, management strategies, and internal control solutions to protect and strengthen your organization against uncertainties.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate">
                            <div class="service-card">
                                <i class="fas fa-chart-line"></i>
                                <h3>Business Consulting</h3>
                                <p>Strategic advisory services, process optimization, and growth planning to help your business reach its full potential in competitive markets.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.2">
                            <div class="service-card">
                                <i class="fas fa-book"></i>
                                <h3>Financial Reporting</h3>
                                <p>Professional financial statement preparation, analysis, and reporting services that meet international standards and regulatory requirements.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.4">
                            <div class="service-card">
                                <i class="fas fa-briefcase"></i>
                                <h3>Corporate Advisory</h3>
                                <p>Strategic corporate guidance, governance consulting, and transaction advisory to support your business objectives and stakeholder interests.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="cta-section">
                <div class="section-container">
                    <h2 class="gsap-animate">Visit Us Today</h2>
                    <p class="gsap-animate">Whether you need a quick consultation or comprehensive business advisory services, our team is ready to help. Visit any of our offices or contact us to schedule an appointment.</p>
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 gsap-animate" data-delay="0.2">
                        <a href="#contact" class="btn-cta-filled">Schedule a Consultation <i class="fas fa-arrow-right"></i></a>
                        <a href="#services" class="btn-cta-outline">Explore Our Services <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection

@section('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- GSAP and ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script>
        $(document).ready(function(){
            // Card Hover Animation
            $('.office-card').on('mouseenter', function() {
                gsap.to(this, {
                    scale: 1.05,
                    boxShadow: '0 20px 40px rgba(0, 33, 63, 0.3)',
                    duration: 0.3,
                    ease: 'power2.out'
                });
            }).on('mouseleave', function() {
                gsap.to(this, {
                    scale: 1,
                    boxShadow: '0 8px 30px rgba(0, 33, 63, 0.2)',
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });

            $('.access-section .card').on('mouseenter', function() {
                gsap.to(this, {
                    scale: 1.05,
                    boxShadow: '0 15px 35px rgba(0, 33, 63, 0.25)',
                    duration: 0.3,
                    ease: 'power2.out'
                });
            }).on('mouseleave', function() {
                gsap.to(this, {
                    scale: 1,
                    boxShadow: '0 8px 30px rgba(0, 33, 63, 0.2)',
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });

            $('.service-card').on('mouseenter', function() {
                gsap.to(this, {
                    scale: 1.05,
                    boxShadow: '0 20px 40px rgba(0, 33, 63, 0.3)',
                    duration: 0.3,
                    ease: 'power2.out'
                });
            }).on('mouseleave', function() {
                gsap.to(this, {
                    scale: 1,
                    boxShadow: '0 8px 30px rgba(0, 33, 63, 0.2)',
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
        });

        // GSAP Animations
        window.addEventListener('load', function () {
            gsap.registerPlugin(ScrollTrigger);

            // Hero Parallax
            gsap.to('.hero-section', {
                backgroundPosition: '50% 70%',
                ease: 'none',
                scrollTrigger: {
                    trigger: '.hero-section',
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: 1.5
                }
            });

            // Section and Card Reveal
            gsap.utils.toArray('.gsap-animate').forEach((el, index) => {
                const delay = parseFloat(el.getAttribute('data-delay')) || (index * 0.1);
                gsap.fromTo(el,
                    { opacity: 0, y: 30 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 1,
                        delay,
                        ease: 'power3.out',
                        scrollTrigger: {
                            trigger: el,
                            start: 'top 80%',
                            once: true,
                            invalidateOnRefresh: true
                        }
                    }
                );
            });
        });
    </script>
@endsection
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
            --shadow: rgba(0, 33, 63, 0.15);
            --transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .rka-scope {
            font-family: 'Inter', sans-serif;
            background: var(--light);
            color: var(--gray);
            line-height: 1.8;
            overflow-x: hidden;
        }

        .rka-scope h1, .rka-scope h2, .rka-scope h3, .rka-scope h4 {
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
        .about-hero-section {
            position: relative;
            height: 90vh;
            min-height: 600px;
            overflow: hidden;
            background: linear-gradient(135deg, rgba(0, 33, 63, 0.8), rgba(0, 144, 212, 0.7)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1920&h=1080') center/cover;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .about-hero-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle, rgba(0, 180, 242, 0.15) 0%, transparent 60%), url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" opacity="0.1"><circle cx="10" cy="10" r="2" fill="white"/><circle cx="40" cy="10" r="2" fill="white"/><circle cx="70" cy="10" r="2" fill="white"/><circle cx="10" cy="40" r="2" fill="white"/><circle cx="40" cy="40" r="2" fill="white"/><circle cx="70" cy="40" r="2" fill="white"/><circle cx="10" cy="70" r="2" fill="white"/><circle cx="40" cy="70" r="2" fill="white"/><circle cx="70" cy="70" r="2" fill="white"/></svg>') repeat;
            animation: wave 10s infinite ease-in-out;
        }

        @keyframes wave {
            0%, 100% { opacity: 0.6; transform: scale(1); }
            50% { opacity: 0.3; transform: scale(1.05); }
        }

        .about-hero-content {
           text-align: center;
    max-width: 800px;
    width: 90%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 3rem;
    color: var(--white);
    background: rgba(0, 33, 63, 0.15);
    backdrop-filter: blur(10px);
    border-radius: 24px;
    box-shadow: 0 10px 40px rgba(0, 33, 63, 0.2);
        }

        .about-hero-content h1 {
            font-size: 4rem;
            margin-bottom: 1.2rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--white), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .about-hero-content p {
            font-size: 1.1rem;
            font-weight: 400;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        /* Sections */
        .story-section, .values-section, .expertise-section, .why-choose-section {
            padding: 7rem 0;
            background: var(--light);
            margin-right: 5rem;
        }

        .leadership-section, .cta-section {
            padding: 5rem 0;
            background: var(--light);
            margin-right: 5rem;
        }

        .cta-section {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--white);
        }

        .story-section h2, .values-section h2, .leadership-section h2, .expertise-section h2, .why-choose-section h2, .cta-section h2 {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 2rem;
        }

        .cta-section h2 {
            color: var(--white);
        }

        .story-section .lead, .values-section .lead, .leadership-section .lead, .expertise-section .lead, .why-choose-section .lead, .cta-section .lead {
            font-size: 1.3rem;
            font-weight: 400;
            color: var(--gray);
            max-width: 1000px;
            margin: 0 auto 2rem;
            text-align: center;
            line-height: 1.6;
        }

        .cta-section .lead {
            max-width: 900px;
            margin: 0 auto 2rem;
            opacity: 0.9;
            color: var(--white);
        }

        /* Story Section Layout */
        .story-content {
            display: flex;
            flex-wrap: wrap;
            gap: 3rem;
            align-items: center;
        }

        .story-image {
            width: 100%;
            max-width: 500px;
            height: 400px;
            object-fit: cover;
            border-radius: 16px;
            box-shadow: 0 6px 20px var(--shadow);
            border: 1px solid var(--lighter);
        }

        .story-text {
            flex: 1;
            min-width: 300px;
        }

        .story-text p {
            font-size: 1rem;
            margin-bottom: 1.2rem;
            line-height: 1.7;
        }

        /* Cards */
        .value-card, .leader-card, .expertise-card, .reason-card {
            background: linear-gradient(135deg, var(--white), var(--light));
            border: 1px solid var(--lighter);
            border-radius: 16px;
            box-shadow: 0 6px 20px var(--shadow);
            transition: var(--transition);
            overflow: hidden;
            position: relative;
            
        }

        .value-card, .reason-card {
            min-height: 320px;
        }

        .expertise-card {
            min-height: 360px;
        }

        .leader-card {
            min-height: 380px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .value-card:hover, .leader-card:hover, .expertise-card:hover, .reason-card:hover {
            transform: scale(1.06);
            box-shadow: 0 12px 30px rgba(0, 33, 63, 0.2);
        }

        .value-card .content, .leader-card .content, .expertise-card .content, .reason-card .content {
            padding: 1.6rem;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .value-card .content, .expertise-card .content, .reason-card .content {
            padding-top: 2.2rem;
        }

        .value-card i, .expertise-card i, .reason-card i {
            font-size: 2.4rem;
            color: var(--secondary);
            margin-bottom: 1rem;
            transition: var(--transition);
        }

        .value-card:hover i, .expertise-card:hover i, .reason-card:hover i {
            color: var(--accent);
            transform: scale(1.1);
        }

        .leader-card img {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 50%;
            margin: 0 auto 0.8rem;
            display: block;
            box-shadow: 0 4px 15px rgba(0, 33, 63, 0.2);
        }

        .value-card h3, .leader-card h3, .expertise-card h3, .reason-card h3 {
            font-size: 1.7rem;
            margin-bottom: 0.8rem;
            position: relative;
            transition: var(--transition);
        }

        .value-card h3:hover, .leader-card h3:hover, .expertise-card h3:hover, .reason-card h3:hover {
            color: var(--accent);
        }

        .value-card h3::after, .leader-card h3::after, .expertise-card h3::after, .reason-card h3::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: width 0.3s ease;
        }

        .value-card h3:hover::after, .leader-card h3:hover::after, .expertise-card h3::after:hover, .reason-card h3::after:hover {
            width: 50%;
        }

        .leader-card .title {
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--secondary);
            margin-bottom: 1rem;
        }

        .value-card p, .leader-card p, .expertise-card p, .reason-card p {
            font-size: 1.05rem;
            color: var(--gray);
            font-weight: 400;
            margin-bottom: 1.2rem;
            line-height: 1.7;
        }

        /* CTA Button */
        .btn-cta-filled {
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            font-weight: 600;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            background: var(--accent);
            color: var(--white);
            border: none;
            box-shadow: 0 6px 20px rgba(0, 144, 212, 0.3);
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .btn-cta-filled:hover {
            background: var(--secondary);
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 144, 212, 0.3);
        }

        .btn-cta-filled i {
            margin-left: 8px;
            transition: transform 0.3s;
        }

        .btn-cta-filled:hover i {
            transform: translateX(4px);
        }

        /* Responsive */
        @media (min-width: 1400px) {
            .section-container {
                max-width: 1400px;
            }
        }

        @media (max-width: 991px) {
            .about-hero-section {
                height: 80vh;
                min-height: 500px;
            }
            .about-hero-content h1 {
                font-size: 3.2rem;
            }
            .about-hero-content p {
                font-size: 1rem;
            }
            .story-section, .values-section, .expertise-section, .why-choose-section {
                padding: 5rem 0;
            }
            .leadership-section, .cta-section {
                padding: 4rem 0;
            }
            .story-section h2, .values-section h2, .leadership-section h2, .expertise-section h2, .why-choose-section h2, .cta-section h2 {
                font-size: 2.6rem;
            }
            .story-section .lead, .values-section .lead, .leadership-section .lead, .expertise-section .lead, .why-choose-section .lead, .cta-section .lead {
                font-size: 1.2rem;
            }
            .story-text p {
                font-size: 0.95rem;
            }
            .story-image {
                height: 320px;
                max-width: 100%;
            }
            .story-content {
                flex-direction: column;
                gap: 2rem;
            }
            .value-card, .reason-card {
                min-height: 300px;
            }
            .expertise-card {
                min-height: 340px;
            }
            .leader-card {
                min-height: 360px;
            }
            .value-card .content, .leader-card .content, .expertise-card .content, .reason-card .content {
                padding: 1.4rem;
            }
            .value-card .content, .expertise-card .content, .reason-card .content {
                padding-top: 2rem;
            }
            .value-card h3, .leader-card h3, .expertise-card h3, .reason-card h3 {
                font-size: 1.5rem;
            }
            .leader-card .title {
                font-size: 1rem;
            }
            .value-card p, .leader-card p, .expertise-card p, .reason-card p {
                font-size: 0.95rem;
            }
            .leader-card img {
                width: 80px;
                height: 80px;
            }
            .value-card i, .expertise-card i, .reason-card i {
                font-size: 2.2rem;
            }
            .btn-cta-filled {
                padding: 0.7rem 1.8rem;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 767px) {
            .about-hero-section {
                height: 70vh;
                min-height: 450px;
            }
            .about-hero-content {
                padding: 1.5rem;
            }
            .about-hero-content h1 {
                font-size: 2.6rem;
            }
            .about-hero-content p {
                font-size: 0.95rem;
            }
            .story-section, .values-section, .expertise-section, .why-choose-section {
                padding: 4rem 0;
            }
            .leadership-section, .cta-section {
                padding: 3.5rem 0;
            }
            .story-section h2, .values-section h2, .leadership-section h2, .expertise-section h2, .why-choose-section h2, .cta-section h2 {
                font-size: 2.3rem;
            }
            .story-section .lead, .values-section .lead, .leadership-section .lead, .expertise-section .lead, .why-choose-section .lead, .cta-section .lead {
                font-size: 1rem;
            }
            .story-text p {
                font-size: 0.9rem;
            }
            .story-image {
                height: 280px;
            }
            .value-card, .reason-card {
                min-height: 280px;
            }
            .expertise-card {
                min-height: 320px;
            }
            .leader-card {
                min-height: 340px;
            }
            .value-card .content, .leader-card .content, .expertise-card .content, .reason-card .content {
                padding: 1.2rem;
            }
            .value-card .content, .expertise-card .content, .reason-card .content {
                padding-top: 1.8rem;
            }
            .value-card h3, .leader-card h3, .expertise-card h3, .reason-card h3 {
                font-size: 1.4rem;
            }
            .leader-card .title {
                font-size: 0.95rem;
            }
            .value-card p, .leader-card p, .expertise-card p, .reason-card p {
                font-size: 0.9rem;
            }
            .leader-card img {
                width: 70px;
                height: 70px;
            }
            .value-card i, .expertise-card i, .reason-card i {
                font-size: 2rem;
            }
            .btn-cta-filled {
                padding: 0.7rem 1.8rem;
                font-size: 0.9rem;
                width: 100%;
                max-width: 260px;
            }
        }

        @media (max-width: 576px) {
            .about-hero-section {
                height: 60vh;
                min-height: 400px;
            }
            .about-hero-content {
                padding: 1rem;
            }
            .about-hero-content h1 {
                font-size: 2rem;
            }
            .about-hero-content p {
                font-size: 0.9rem;
            }
            .story-section, .values-section, .expertise-section, .why-choose-section {
                padding: 3rem 0;
            }
            .leadership-section, .cta-section {
                padding: 3rem 0;
            }
            .story-section h2, .values-section h2, .leadership-section h2, .expertise-section h2, .why-choose-section h2, .cta-section h2 {
                font-size: 2rem;
            }
            .story-section .lead, .values-section .lead, .leadership-section .lead, .expertise-section .lead, .why-choose-section .lead, .cta-section .lead {
                font-size: 0.95rem;
            }
            .story-text p {
                font-size: 0.85rem;
            }
            .story-image {
                height: 240px;
            }
            .value-card, .reason-card {
                min-height: 260px;
            }
            .expertise-card {
                min-height: 300px;
            }
            .leader-card {
                min-height: 320px;
            }
            .value-card .content, .leader-card .content, .expertise-card .content, .reason-card .content {
                padding: 1rem;
            }
            .value-card .content, .expertise-card .content, .reason-card .content {
                padding-top: 1.6rem;
            }
            .value-card h3, .leader-card h3, .expertise-card h3, .reason-card h3 {
                font-size: 1.3rem;
            }
            .leader-card .title {
                font-size: 0.9rem;
            }
            .value-card p, .leader-card p, .expertise-card p, .reason-card p {
                font-size: 0.85rem;
            }
            .leader-card img {
                width: 60px;
                height: 60px;
            }
            .value-card i, .expertise-card i, .reason-card i {
                font-size: 1.8rem;
            }
            .btn-cta-filled {
                padding: 0.6rem 1.6rem;
                font-size: 0.85rem;
                max-width: 240px;
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
            <section class="about-hero-section">
                <div class="about-hero-content gsap-animate">
                    <h1>About Chartered Insights</h1>
                    <p>Discover our journey, values, and commitment to delivering exceptional financial and business solutions.</p>
                </div>
            </section>

            <!-- Our Story Section -->
            <section class="story-section" id="story">
                <div class="section-container">
                    <h2 class="gsap-animate">Our Story</h2>
                    <div class="story-content gsap-animate" data-delay="0.1">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=800&auto=format&fit=crop" alt="Professional team collaboration" class="story-image">
                        <div class="story-text">
                            <p>Chartered Insights is a full-service Chartered Accountancy firm headquartered in Biratnagar, Nepal, delivering a complete range of Audit & Assurance, Taxation, Risk Advisory, Accounting, and Business Consulting services to businesses, not-for-profit organizations, and government entities.</p>
                            <p>We were founded with a vision to empower businesses with financial clarity, robust compliance, and strategic insights that help them navigate challenges and seize opportunities in a competitive, evolving marketplace.</p>
                            <p>By combining deep technical knowledge, sector-specific expertise, and a client-focused service approach, Chartered Insights has become a trusted partner for organizations seeking professional, ethical, and growth-oriented solutions.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Core Values Section -->
            <section class="values-section" id="values">
                <div class="section-container">
                    <h2 class="gsap-animate">Our Core Values & Client-First Philosophy</h2>
                    <p class="lead gsap-animate">These foundational principles guide every interaction, decision, and service we provide to our clients.</p>
                    <div class="row g-5">
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.1">
                            <div class="value-card">
                                <div class="content">
                                    <i class="fas fa-user-tie gsap-animate" data-delay="0.15"></i>
                                    <h3>Partner-Led Engagements</h3>
                                    <p>Every assignment is directly supervised by a partner or senior professional to ensure quality, accountability, and strategic insight from start to finish.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.2">
                            <div class="value-card">
                                <div class="content">
                                    <i class="fas fa-trophy gsap-animate" data-delay="0.25"></i>
                                    <h3>Culture of Excellence</h3>
                                    <p>We adhere to international best practices while delivering solutions tailored to the Nepali business landscape, ensuring both compliance and practical value.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.3">
                            <div class="value-card">
                                <div class="content">
                                    <i class="fas fa-heart gsap-animate" data-delay="0.35"></i>
                                    <h3>Client-First Mindset</h3>
                                    <p>We prioritize client goals and challenges, providing customized solutions that not only meet legal and regulatory requirements but also support business performance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.4">
                            <div class="value-card">
                                <div class="content">
                                    <i class="fas fa-handshake gsap-animate" data-delay="0.45"></i>
                                    <h3>Long-Term Relationships</h3>
                                    <p>Our focus extends beyond one-time engagements. We cultivate lasting partnerships built on trust, reliability, and consistent delivery.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.5">
                            <div class="value-card">
                                <div class="content">
                                    <i class="fas fa-user-check gsap-animate" data-delay="0.55"></i>
                                    <h3>Personal Ownership</h3>
                                    <p>Every team member takes ownership of their work, ensuring timely execution, high quality, and measurable results for clients.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.6">
                            <div class="value-card">
                                <div class="content">
                                    <i class="fas fa-graduation-cap gsap-animate" data-delay="0.65"></i>
                                    <h3>Commitment to Learning & Growth</h3>
                                    <p>We invest in our people by offering training, professional certifications, and leadership opportunities to continually enhance our service quality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Leadership Team Section -->
            <section class="leadership-section" id="leadership">
                <div class="section-container">
                    <h2 class="gsap-animate">Our Leadership Team</h2>
                    <p class="lead gsap-animate">Meet the experienced professionals leading our firm with vision, expertise, and unwavering commitment to client success.</p>
                    <div class="row g-5">
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.1">
                            <div class="leader-card">
                                <div class="content">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&q=80&w=800&auto=format&fit=crop" alt="CA Roshan Kumar Yadav" class="gsap-animate" data-delay="0.15">
                                    <h3>CA Roshan Kumar Yadav</h3>
                                    <p class="title">Founder & Managing Partner</p>
                                    <p>A member of ICAN, excelling in Audit, Taxation, and Advisory across multiple sectors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.2">
                            <div class="leader-card">
                                <div class="content">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&q=80&w=800&auto=format&fit=crop" alt="CA Sunil Shrestha" class="gsap-animate" data-delay="0.25">
                                    <h3>CA Sunil Shrestha</h3>
                                    <p class="title">Leader - Internal Audit & Risk Advisory</p>
                                    <p>Specialist in internal audits, risk management, and corporate governance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.3">
                            <div class="leader-card">
                                <div class="content">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&q=80&w=800&auto=format&fit=crop" alt="Senior Partner" class="gsap-animate" data-delay="0.35">
                                    <h3>Senior Partner</h3>
                                    <p class="title">Leader - Offshore & Outsourced Services</p>
                                    <p>Delivers accounting, CFO services, and compliance for global clients.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our People Section -->
            <section class="expertise-section" id="expertise">
                <div class="section-container">
                    <h2 class="gsap-animate">Our People – Expertise that Drives Value</h2>
                    <p class="lead gsap-animate">Our multidisciplinary team combines diverse skills and industry experience to deliver exceptional results.</p>
                    <div class="row g-5">
                        <div class="col-12 col-md-6 col-lg-3 gsap-animate" data-delay="0.1">
                            <div class="expertise-card">
                                <div class="content">
                                    <i class="fas fa-star gsap-animate" data-delay="0.15"></i>
                                    <h3>Trailblazing Professional Expertise</h3>
                                    <p>Our leadership team has delivered impactful assignments in Nepal and abroad, covering sectors such as healthcare, manufacturing, banking, technology, education, and development organizations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 gsap-animate" data-delay="0.2">
                            <div class="expertise-card">
                                <div class="content">
                                    <i class="fas fa-book-open gsap-animate" data-delay="0.25"></i>
                                    <h3>Multidisciplinary Knowledge Base</h3>
                                    <p>We combine the skills of Chartered Accountants, ACCA members, semi-qualified professionals, and industry specialists, enabling us to address diverse and complex challenges.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 gsap-animate" data-delay="0.3">
                            <div class="expertise-card">
                                <div class="content">
                                    <i class="fas fa-chalkboard-teacher gsap-animate" data-delay="0.35"></i>
                                    <h3>Mentoring & Knowledge Sharing</h3>
                                    <p>We maintain a strong mentorship culture, where experienced professionals guide the next generation, fostering growth, innovation, and technical mastery.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 gsap-animate" data-delay="0.4">
                            <div class="expertise-card">
                                <div class="content">
                                    <i class="fas fa-handshake gsap-animate" data-delay="0.45"></i>
                                    <h3>Collaborative, Client-Centric Teamwork</h3>
                                    <p>Our team works in close partnership with clients, ensuring our strategies align with their vision and objectives while delivering sustainable results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why Choose Us Section -->
            <section class="why-choose-section" id="why-choose">
                <div class="section-container">
                    <h2 class="gsap-animate">Why Businesses Choose Chartered Insights</h2>
                    <p class="lead gsap-animate">Our track record speaks for itself - proven expertise, exceptional service, and measurable results.</p>
                    <div class="row g-5">
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.1">
                            <div class="reason-card">
                                <div class="content">
                                    <i class="fas fa-check-circle gsap-animate" data-delay="0.15"></i>
                                    <h3>Proven Expertise</h3>
                                    <p>100+ successful client engagements across industries with measurable impact and results.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.2">
                            <div class="reason-card">
                                <div class="content">
                                    <i class="fas fa-user-tie gsap-animate" data-delay="0.25"></i>
                                    <h3>Partner-Level Involvement</h3>
                                    <p>Senior professionals lead every assignment, ensuring quality and strategic oversight.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.3">
                            <div class="reason-card">
                                <div class="content">
                                    <i class="fas fa-cogs gsap-animate" data-delay="0.35"></i>
                                    <h3>Comprehensive Services</h3>
                                    <p>One firm for all your audit, tax, risk, and advisory needs with integrated solutions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.4">
                            <div class="reason-card">
                                <div class="content">
                                    <i class="fas fa-laptop-code gsap-animate" data-delay="0.45"></i>
                                    <h3>Technology-Enabled Solutions</h3>
                                    <p>Cloud-based systems, secure client portals, and real-time reporting capabilities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.5">
                            <div class="reason-card">
                                <div class="content">
                                    <i class="fas fa-shield-alt gsap-animate" data-delay="0.55"></i>
                                    <h3>Ethical & Transparent</h3>
                                    <p>Clear fee structures, no hidden charges, and unwavering commitment to confidentiality.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.6">
                            <div class="reason-card">
                                <div class="content">
                                    <i class="fas fa-chart-line gsap-animate" data-delay="0.65"></i>
                                    <h3>Results-Driven Approach</h3>
                                    <p>Focus on measurable outcomes and sustainable business improvements for every client.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="cta-section">
                <div class="section-container">
                    <h2 class="gsap-animate">Get in Touch</h2>
                    <p class="lead gsap-animate">Ready to experience the Chartered Insights difference? Contact us to discuss your needs.</p>
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 gsap-animate" data-delay="0.2">
                        <a href="#contact" class="btn-cta-filled">Contact Us <i class="fas fa-arrow-right"></i></a>
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
            $('.value-card, .leader-card, .expertise-card, .reason-card').on('mouseenter', function() {
                gsap.to(this, {
                    scale: 1.06,
                    boxShadow: '0 12px 30px rgba(0, 33, 63, 0.2)',
                    duration: 0.3,
                    ease: 'power2.out'
                });
            }).on('mouseleave', function() {
                gsap.to(this, {
                    scale: 1,
                    boxShadow: '0 6px 20px rgba(0, 33, 63, 0.15)',
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });

            // Icon Hover Animation
            $('.value-card, .expertise-card, .reason-card').on('mouseenter', function() {
                gsap.to($(this).find('i'), {
                    scale: 1.1,
                    color: 'var(--accent)',
                    duration: 0.3,
                    ease: 'power2.out'
                });
            }).on('mouseleave', function() {
                gsap.to($(this).find('i'), {
                    scale: 1,
                    color: 'var(--secondary)',
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });

            // Heading Hover Animation
            $('.value-card h3, .leader-card h3, .expertise-card h3, .reason-card h3').on('mouseenter', function() {
                gsap.to(this, {
                    color: 'var(--accent)',
                    duration: 0.3,
                    ease: 'power2.out'
                });
            }).on('mouseleave', function() {
                gsap.to(this, {
                    color: 'var(--primary)',
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });

            // Button Click Animation
            $('.btn-cta-filled').on('mousedown', function() {
                gsap.to(this, {
                    scale: 0.95,
                    duration: 0.1,
                    ease: 'power2.out'
                });
            }).on('mouseup', function() {
                gsap.to(this, {
                    scale: 1,
                    duration: 0.1,
                    ease: 'power2.out'
                });
            });
        });

        // GSAP Animations
        window.addEventListener('load', function () {
            gsap.registerPlugin(ScrollTrigger);

            // Hero Parallax
            gsap.to('.about-hero-section', {
                backgroundPosition: '50% 70%',
                ease: 'none',
                scrollTrigger: {
                    trigger: '.about-hero-section',
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: 1.5
                }
            });

            // Section and Card Reveal
            gsap.utils.toArray('.gsap-animate').forEach((el, index) => {
                const delay = parseFloat(el.getAttribute('data-delay')) || (index * 0.15);
                gsap.fromTo(el,
                    { opacity: 0, y: 30 },
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
        });
    </script>
@endsection
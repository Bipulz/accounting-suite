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
            --shadow: rgba(0, 33, 63, 0.2);
            --transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
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
               position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    max-width: 90%;
    padding: 2rem;
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

        /* Industry Expertise Section */
        .industries-section {
            padding: 7rem 0;
            margin-right: 5rem;
            background: var(--light);
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

        .industry-card {
            background: linear-gradient(135deg, var(--white), var(--light));
            border: 1px solid var(--lighter);
            border-radius: 20px;
            padding: 1.25rem;
            box-shadow: 0 10px 30px var(--shadow);
            height: 380px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: var(--transition);
        }

        .industry-card:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(0, 33, 63, 0.3);
        }

        .industry-card h3 {
            font-size: 2rem;
            margin-bottom: 1.2rem;
            position: relative;
            transition: var(--transition);
        }

        .industry-card h3:hover {
            color: var(--accent);
            transform: scale(1.05);
        }

        .industry-card h3::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: width 0.3s ease;
        }

        .industry-card h3:hover::after {
            width: 100%;
        }

        .industry-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
            flex-grow: 1;
        }

        .industry-card ul li {
            font-size: 0.95rem;
            color: var(--gray);
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.5rem;
            transition: var(--transition);
        }

        .industry-card ul li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--accent);
            font-weight: bold;
        }

        .industry-card ul li:hover {
            color: var(--accent);
        }

        .industry-card i {
            font-size: 2.2rem;
            color: var(--secondary);
            margin-bottom: 1rem;
            transition: var(--transition);
        }

        .industry-card:hover i {
            color: var(--accent);
            transform: scale(1.1);
        }

        /* Industry Insights Section */
        .insights-section {
            padding: 7rem 0;
            background: linear-gradient(180deg, var(--white), var(--lighter));
            margin-right: 4.8rem;
        }

        .insights-section h2 {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 1.8rem;
        }

        .insights-section .lead {
            font-size: 1.3rem;
            color: var(--gray);
            max-width: 1000px;
            margin: 0 auto 3.5rem;
            text-align: center;
        }

        .insight-card {
            background: linear-gradient(135deg, var(--white), var(--light));
            border: 1px solid var(--lighter);
            border-radius: 16px;
            box-shadow: 0 8px 25px var(--shadow);
            overflow: hidden;
            transition: var(--transition);
        }

        .insight-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .insight-card .image-container {
            position: relative;
            width: 100%;
            height: 320px;
        }

        .insight-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .insight-card:hover img {
            transform: scale(1.1);
        }

        .insight-card .gradient-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .insight-card:hover .gradient-overlay {
            opacity: 0;
        }

        .insight-card .title-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1.5rem;
            color: var(--white);
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .insight-card:hover .title-overlay {
            opacity: 0;
        }

        .insight-card .title-overlay h3 {
            font-size: 1.6rem;
            margin: 0;
        }

        .insight-card .content-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 33, 63, 0.85), rgba(0, 33, 63, 0.45));
            opacity: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 1.5rem;
            transform: translateY(100%);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .insight-card:hover .content-overlay {
            opacity: 1;
            transform: translateY(0);
        }

        .insight-card .category {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background: var(--accent);
            color: var(--white);
            font-size: 0.9rem;
            border-radius: 9999px;
            margin-bottom: 0.5rem;
            width: fit-content;
            transition: var(--transition);
        }

        .insight-card .category:hover {
            box-shadow: 0 2px 8px rgba(0, 144, 212, 0.3);
        }

        .insight-card h3 {
            font-size: 1.8rem;
            color: var(--white);
            margin-bottom: 0.5rem;
            transition: var(--transition);
        }

        .insight-card h3:hover {
            color: var(--accent);
            transform: scale(1.05);
        }

        .insight-card .date {
            font-size: 0.9rem;
            color: var(--white);
            opacity: 0.8;
            margin-bottom: 0.8rem;
        }

        .insight-card p {
            font-size: 1rem;
            color: var(--white);
            margin-bottom: 0;
        }

        @media (max-width: 768px) {
            .insight-card .content-overlay {
                opacity: 1;
                transform: translateY(0);
                background: rgba(0, 33, 63, 0.55);
            }
            .insight-card .gradient-overlay,
            .insight-card .title-overlay {
                opacity: 0;
            }
        }

        /* Why Choose Section */
        .why-choose-section {
            padding: 7rem 0;
            background: var(--light);
            margin-right: 4.8rem;
        }

        .why-choose-section h2 {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 1.8rem;
        }

        .why-choose-section .lead {
            font-size: 1.3rem;
            color: var(--gray);
            max-width: 1000px;
            margin: 0 auto 3.5rem;
            text-align: center;
        }

        .why-card {
            background: linear-gradient(135deg, var(--white), var(--light));
            border: 1px solid var(--lighter);
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: 0 8px 25px var(--shadow);
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
            transition: var(--transition);
        }

        .why-card:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 35px rgba(0, 33, 63, 0.25);
        }

        .why-card i {
            font-size: 2.2rem;
            color: var(--secondary);
            margin-bottom: 1rem;
            transition: var(--transition);
        }

        .why-card:hover i {
            color: var(--accent);
            transform: scale(1.1);
        }

        .why-card h4 {
            font-size: 1.6rem;
            margin-bottom: 0.8rem;
            position: relative;
            transition: var(--transition);
        }

        .why-card h4:hover {
            color: var(--accent);
        }

        .why-card h4::after {
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

        .why-card h4:hover::after {
            width: 50%;
        }

        .why-card p {
            font-size: 1rem;
            color: var(--gray);
        }

        /* CTA Section */
        .cta-section {
            padding: 7rem 0;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--white);
            margin-right: 4.8rem;
        }

        .cta-section h2 {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 1.5rem;
            color: var(--white);
        }

        .cta-section p {
            font-size: 1.3rem;
            max-width: 900px;
            margin: 0 auto 2.5rem;
            text-align: center;
            opacity: 0.9;
        }

        .btn-cta-filled, .btn-cta-outline {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin: 0 0.8rem;
        }

        .btn-cta-filled {
            background: var(--accent);
            color: var(--white);
            border: none;
        }

        .btn-cta-filled:hover {
            background: var(--secondary);
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 144, 212, 0.3);
        }

        .btn-cta-outline {
            background: transparent;
            border: 2px solid var(--white);
            color: var(--white);
        }

        .btn-cta-outline:hover {
            background: var(--white);
            color: var(--primary);
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 33, 63, 0.2);
        }

        .btn-cta-filled i, .btn-cta-outline i, .btn-all i {
            margin-left: 8px;
            transition: transform 0.3s;
        }

        .btn-cta-filled:hover i, .btn-cta-outline:hover i, .btn-all:hover i {
            transform: translateX(4px);
        }

        .btn-all {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--accent);
            color: var(--white);
            border: none;
            margin: 4rem auto 0;
            text-align: center;
            z-index: 10;
            position: relative;
        }

        .btn-all:hover {
            background: var(--secondary);
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 144, 212, 0.3);
        }

        .industries-section .btn-all-container,
        .insights-section .btn-all-container {
            display: flex;
            justify-content: center;
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
            .industries-section h2, .insights-section h2, .why-choose-section h2, .cta-section h2 {
                font-size: 2.6rem;
            }
            .industry-card {
                height: 360px;
            }
            .industry-card h3 {
                font-size: 1.8rem;
            }
            .industry-card ul li {
                font-size: 0.9rem;
            }
            .industry-card i {
                font-size: 2rem;
            }
            .insight-card .image-container {
                height: 300px;
            }
            .insight-card .title-overlay h3 {
                font-size: 1.4rem;
            }
            .insight-card .content-overlay h3 {
                font-size: 1.6rem;
            }
            .insight-card .category,
            .insight-card .date {
                font-size: 0.85rem;
            }
            .insight-card p {
                font-size: 0.95rem;
            }
            .why-card h4 {
                font-size: 1.4rem;
            }
            .why-card p {
                font-size: 0.95rem;
            }
            .why-card i {
                font-size: 2rem;
            }
            .cta-section p {
                font-size: 1.2rem;
            }
            .btn-all, .btn-cta-filled, .btn-cta-outline {
                padding: 0.7rem 2rem;
                font-size: 0.95rem;
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
            .btn-primary-filled, .btn-primary-outline, .btn-cta-filled, .btn-cta-outline, .btn-all {
                padding: 0.7rem 2rem;
                font-size: 0.95rem;
            }
            .industries-section, .insights-section, .why-choose-section, .cta-section {
                padding: 4.5rem 0;
            }
            .industries-section h2, .insights-section h2, .why-choose-section h2, .cta-section h2 {
                font-size: 2.3rem;
            }
            .industries-section .lead, .insights-section .lead, .why-choose-section .lead, .cta-section p {
                font-size: 1rem;
            }
            .industry-card {
                height: 340px;
            }
            .industry-card h3 {
                font-size: 1.6rem;
            }
            .industry-card ul li {
                font-size: 0.85rem;
            }
            .industry-card i {
                font-size: 1.8rem;
            }
            .insight-card .image-container {
                height: 280px;
            }
            .insight-card .title-overlay h3 {
                font-size: 1.2rem;
            }
            .insight-card .content-overlay h3 {
                font-size: 1.4rem;
            }
            .insight-card .category,
            .insight-card .date {
                font-size: 0.85rem;
            }
            .insight-card p {
                font-size: 0.9rem;
            }
            .why-card h4 {
                font-size: 1.3rem;
            }
            .why-card p {
                font-size: 0.9rem;
            }
            .why-card i {
                font-size: 1.8rem;
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
            .btn-primary-filled, .btn-primary-outline, .btn-cta-filled, .btn-cta-outline, .btn-all {
                padding: 0.6rem 1.8rem;
                font-size: 0.9rem;
                width: 100%;
                max-width: 280px;
            }
            .industries-section h2, .insights-section h2, .why-choose-section h2, .cta-section h2 {
                font-size: 2rem;
            }
            .industries-section .lead, .insights-section .lead, .why-choose-section .lead, .cta-section p {
                font-size: 0.95rem;
            }
            .industry-card {
                height: 320px;
            }
            .industry-card h3 {
                font-size: 1.5rem;
            }
            .industry-card ul li {
                font-size: 0.8rem;
            }
            .industry-card i {
                font-size: 1.6rem;
            }
            .insight-card .image-container {
                height: 260px;
            }
            .insight-card .title-overlay h3 {
                font-size: 1.1rem;
            }
            .insight-card .content-overlay h3 {
                font-size: 1.3rem;
            }
            .insight-card .category,
            .insight-card .date {
                font-size: 0.85rem;
            }
            .insight-card p {
                font-size: 0.9rem;
            }
            .why-card h4 {
                font-size: 1.2rem;
            }
            .why-card p {
                font-size: 0.85rem;
            }
            .why-card i {
                font-size: 1.6rem;
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
                            <h1>Industry Expertise</h1>
                            <p>Tailored financial and advisory solutions for your industry’s unique challenges and opportunities.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="#industries" class="btn-primary-filled">Explore Industries <i class="fas fa-arrow-right"></i></a>
                                <a href="#contact" class="btn-primary-outline">Contact Us <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide-2">
                        <div class="hero-content gsap-animate">
                            <h1>Sector-Specific Solutions</h1>
                            <p>Deep industry knowledge to drive growth and compliance across diverse sectors.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="#industries" class="btn-primary-filled">Our Expertise <i class="fas fa-arrow-right"></i></a>
                                <a href="#contact" class="btn-primary-outline">Get in Touch <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide-3">
                        <div class="hero-content gsap-animate">
                            <h1>Strategic Industry Insights</h1>
                            <p>Partner with us for innovative solutions tailored to your industry’s needs.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="#industries" class="btn-primary-filled">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="#contact" class="btn-primary-outline">Reach Out <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Industry Expertise Section -->
            <section class="industries-section" id="industries">
                <div class="section-container">
                    <h2 class="gsap-animate">Our Industry Expertise</h2>
                    <p class="lead gsap-animate">We understand that every industry has its unique challenges, regulations, and opportunities. Our specialized teams deliver targeted solutions that drive results.</p>
                    <div class="row g-5">
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate">
                            <div class="industry-card">
                                <i class="fas fa-heartbeat"></i>
                                <h3>Healthcare & Medical</h3>
                                <ul>
                                    <li>Medical practice accounting</li>
                                    <li>Healthcare compliance audits</li>
                                    <li>Revenue cycle management</li>
                                    <li>Medical equipment financing</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.2">
                            <div class="industry-card">
                                <i class="fas fa-industry"></i>
                                <h3>Manufacturing & Industrial</h3>
                                <ul>
                                    <li>Cost accounting systems</li>
                                    <li>Inventory management</li>
                                    <li>Supply chain finance</li>
                                    <li>Industrial tax planning</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.4">
                            <div class="industry-card">
                                <i class="fas fa-laptop-code"></i>
                                <h3>Technology & Software</h3>
                                <ul>
                                    <li>Software revenue recognition</li>
                                    <li>R&D tax incentives</li>
                                    <li>IP valuation</li>
                                    <li>Startup financial planning</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.6">
                            <div class="industry-card">
                                <i class="fas fa-building"></i>
                                <h3>Real Estate & Construction</h3>
                                <ul>
                                    <li>Project cost accounting</li>
                                    <li>Property valuation</li>
                                    <li>Construction audits</li>
                                    <li>Real estate tax planning</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.8">
                            <div class="industry-card">
                                <i class="fas fa-university"></i>
                                <h3>Financial Services</h3>
                                <ul>
                                    <li>Banking compliance</li>
                                    <li>Insurance accounting</li>
                                    <li>Investment audits</li>
                                    <li>Fintech advisory</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="1.0">
                            <div class="industry-card">
                                <i class="fas fa-hand-holding-heart"></i>
                                <h3>Non-Profit & NGOs</h3>
                                <ul>
                                    <li>Grant accounting</li>
                                    <li>Donor compliance</li>
                                    <li>Impact reporting</li>
                                    <li>Non-profit audits</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="1.2">
                            <div class="industry-card">
                                <i class="fas fa-hotel"></i>
                                <h3>Hospitality & Tourism</h3>
                                <ul>
                                    <li>Hotel revenue management</li>
                                    <li>Restaurant accounting</li>
                                    <li>Tourism tax planning</li>
                                    <li>Seasonal cash flow</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="1.4">
                            <div class="industry-card">
                                <i class="fas fa-graduation-cap"></i>
                                <h3>Education & Training</h3>
                                <ul>
                                    <li>Educational accounting</li>
                                    <li>Student fee management</li>
                                    <li>Institutional audits</li>
                                    <li>Education compliance</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="1.6">
                            <div class="industry-card">
                                <i class="fas fa-shopping-cart"></i>
                                <h3>Retail & E-commerce</h3>
                                <ul>
                                    <li>Retail accounting systems</li>
                                    <li>E-commerce analytics</li>
                                    <li>Multi-channel reporting</li>
                                    <li>Customer profitability</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="btn-all-container gsap-animate">
                        <a href="#contact" class="btn-all">View All Industries <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </section>

            <!-- Industry Insights Section -->
            <section class="insights-section" id="insights">
                <div class="section-container">
                    <h2 class="gsap-animate">Industry-Specific Insights</h2>
                    <p class="lead gsap-animate">Stay informed with our latest industry analysis and expert commentary on sector-specific trends and challenges.</p>
                    <div class="row g-4">
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate">
                            <div class="insight-card">
                                <div class="image-container">
                                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=1200&auto=format&fit=crop" alt="Digital Health Revolution">
                                    <div class="gradient-overlay"></div>
                                    <div class="title-overlay">
                                        <h3>Digital Health Revolution: Financial Implications</h3>
                                    </div>
                                    <div class="content-overlay">
                                        <span class="category">Healthcare</span>
                                        <h3>Digital Health Revolution: Financial Implications</h3>
                                        <div class="date">January 12, 2024 • 6 min read</div>
                                        <p>How telemedicine and digital health platforms are transforming healthcare finance and what providers need to know.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.2">
                            <div class="insight-card">
                                <div class="image-container">
                                    <img src="https://images.unsplash.com/photo-1565514020179-026b92b84bb6?q=80&w=1200&auto=format&fit=crop" alt="Industry 4.0">
                                    <div class="gradient-overlay"></div>
                                    <div class="title-overlay">
                                        <h3>Industry 4.0: Cost Accounting for Smart Manufacturing</h3>
                                    </div>
                                    <div class="content-overlay">
                                        <span class="category">Manufacturing</span>
                                        <h3>Industry 4.0: Cost Accounting for Smart Manufacturing</h3>
                                        <div class="date">January 8, 2024 • 7 min read</div>
                                        <p>Understanding the financial impact of automation and IoT integration in modern manufacturing operations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.4">
                            <div class="insight-card">
                                <div class="image-container">
                                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=1200&auto=format&fit=crop" alt="Startup Valuations">
                                    <div class="gradient-overlay"></div>
                                    <div class="title-overlay">
                                        <h3>Startup Valuations in Nepal's Tech Ecosystem</h3>
                                    </div>
                                    <div class="content-overlay">
                                        <span class="category">Technology</span>
                                        <h3>Startup Valuations in Nepal's Tech Ecosystem</h3>
                                        <div class="date">January 5, 2024 • 8 min read</div>
                                        <p>Analysis of valuation methodologies and financial planning strategies for Nepal's growing tech startup scene.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-all-container gsap-animate">
                        <a href="#insights" class="btn-all">View All Insights <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </section>

            <!-- Why Choose Section -->
            <section class="why-choose-section">
                <div class="section-container">
                    <h2 class="gsap-animate">Why Choose Our Industry Expertise?</h2>
                    <p class="lead gsap-animate">We combine deep industry knowledge with technical excellence to deliver solutions that address your sector's unique challenges.</p>
                    <div class="row g-4">
                        <div class="col-12 col-md-6 col-lg-3 gsap-animate">
                            <div class="why-card">
                                <i class="fas fa-book"></i>
                                <h4>Specialized Knowledge</h4>
                                <p>Our team brings deep industry-specific expertise and understanding of unique challenges and opportunities within each sector.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 gsap-animate" data-delay="0.2">
                            <div class="why-card">
                                <i class="fas fa-check-circle"></i>
                                <h4>Proven Results</h4>
                                <p>We have a track record of delivering measurable outcomes and driving growth for businesses across various industries.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 gsap-animate" data-delay="0.4">
                            <div class="why-card">
                                <i class="fas fa-handshake"></i>
                                <h4>Strategic Partnerships</h4>
                                <p>We build long-term relationships with our clients, serving as trusted advisors and strategic partners in their growth journey.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 gsap-animate" data-delay="0.6">
                            <div class="why-card">
                                <i class="fas fa-lightbulb"></i>
                                <h4>Innovation Focus</h4>
                                <p>We stay ahead of industry trends and leverage cutting-edge technologies to provide innovative solutions that drive competitive advantage.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="cta-section">
                <div class="section-container">
                    <h2 class="gsap-animate">Ready to Partner with Industry Experts?</h2>
                    <p class="gsap-animate">Whether you're looking to optimize operations, ensure compliance, or drive growth, our industry-specialized teams are ready to help you achieve your goals.</p>
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

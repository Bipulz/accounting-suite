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
            margin-top: 5rem;
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

        /* Featured and Recent Articles Sections */
        .articles-section, .recent-articles-section {
            padding: 7rem 0;
            margin-right: 4.8rem;
            background: linear-gradient(180deg, var(--white), var(--lighter));
        }

        .articles-section h2, .recent-articles-section h2 {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 1.8rem;
        }

        .articles-section .lead, .recent-articles-section .lead {
            font-size: 1.3rem;
            color: var(--gray);
            max-width: 1000px;
            margin: 0 auto 3.5rem;
            text-align: center;
        }

        .article-card {
            background: linear-gradient(135deg, var(--white), var(--light));
            border: 1px solid var(--lighter);
            border-radius: 16px;
            box-shadow: 0 8px 25px var(--shadow);
            overflow: hidden;
            transition: var(--transition);
            cursor: pointer;
        }

        .article-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .article-card .image-container {
            position: relative;
            width: 100%;
            height: 320px;
        }

        .article-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .article-card:hover img {
            transform: scale(1.1);
        }

        .article-card .gradient-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .article-card:hover .gradient-overlay {
            opacity: 0;
        }

        .article-card .title-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1.5rem;
            color: var(--white);
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .article-card:hover .title-overlay {
            opacity: 0;
        }

        .article-card .title-overlay h3 {
            font-size: 1.6rem;
            margin: 0;
        }

        .article-card .content-overlay {
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

        .article-card:hover .content-overlay {
            opacity: 1;
            transform: translateY(0);
        }

        .article-card .category {
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

        .article-card .category:hover {
            box-shadow: 0 2px 8px rgba(0, 144, 212, 0.3);
        }

        .article-card h3 {
            font-size: 1.8rem;
            color: var(--white);
            margin-bottom: 0.5rem;
            transition: var(--transition);
        }

        .article-card h3:hover {
            color: var(--accent);
            transform: scale(1.05);
        }

        .article-card p {
            font-size: 1rem;
            color: var(--white);
            margin-bottom: 0;
        }

        /* Article Overlay */
        .article-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 33, 63, 0.95);
            display: none;
            align-items: flex-start;
            justify-content: center;
            z-index: 1000;
            overflow-y: auto;
            padding: 2rem;
        }

        .article-overlay.active {
            display: flex;
        }

        .article-overlay-content {
            background: var(--white);
            max-width: 900px;
            width: 100%;
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 33, 63, 0.3);
            position: relative;
            margin: 2rem auto;
        }

        .article-overlay-content .category {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background: var(--accent);
            color: var(--white);
            font-size: 0.9rem;
            border-radius: 9999px;
            margin-bottom: 1rem;
        }

        .article-overlay-content h3 {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .article-overlay-content .lead {
            font-size: 1.1rem;
            color: var(--gray);
            margin-bottom: 1rem;
        }

        .article-overlay-content .meta {
            font-size: 0.95rem;
            color: var(--gray);
            margin-bottom: 1.5rem;
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .article-overlay-content .content {
            font-size: 1.1rem;
            color: var(--primary);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .article-overlay-content .tags {
            margin-bottom: 2rem;
        }

        .article-overlay-content .tag {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background: var(--lighter);
            color: var(--primary);
            font-size: 0.9rem;
            border-radius: 9999px;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            transition: var(--transition);
        }

        .article-overlay-content .tag:hover {
            background: var(--accent);
            color: var(--white);
        }

        .article-overlay-content .share {
            margin-bottom: 2rem;
        }

        .btn-share {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            background: var(--secondary);
            color: var(--white);
            border: none;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .btn-share:hover {
            background: var(--accent);
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 144, 212, 0.3);
        }

        .btn-share i {
            margin-left: 8px;
        }

        .article-overlay-content .back-link {
            font-size: 1rem;
            color: var(--primary);
            text-decoration: none;
            margin-bottom: 2rem;
            display: inline-block;
            transition: var(--transition);
        }

        .article-overlay-content .back-link:hover {
            color: var(--accent);
            text-decoration: underline;
        }

        .article-overlay-content .toc {
            margin-bottom: 2rem;
            padding: 1rem;
            background: var(--light);
            border-radius: 8px;
        }

        .article-overlay-content .toc h4 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .article-overlay-content .toc p {
            font-size: 0.95rem;
            color: var(--gray);
        }

        .article-overlay-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--white);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .article-overlay-close i {
            font-size: 1.5rem;
            color: var(--primary);
        }

        .article-overlay-close:hover {
            background: var(--accent);
            transform: scale(1.1);
        }

        .article-overlay-close:hover i {
            color: var(--white);
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

        .btn-all i {
            margin-left: 8px;
            transition: transform 0.3s;
        }

        .btn-all:hover i {
            transform: translateX(4px);
        }

        .articles-section .btn-all-container,
        .recent-articles-section .btn-all-container {
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
            .articles-section h2, .recent-articles-section h2 {
                font-size: 2.6rem;
            }
            .article-card .image-container {
                height: 300px;
            }
            .article-card .title-overlay h3 {
                font-size: 1.4rem;
            }
            .article-card .content-overlay h3 {
                font-size: 1.6rem;
            }
            .article-card .category,
            .article-card p {
                font-size: 0.95rem;
            }
            .btn-all, .btn-share {
                padding: 0.7rem 2rem;
                font-size: 0.95rem;
            }
            .article-overlay-content {
                padding: 2rem;
            }
            .article-overlay-content h3 {
                font-size: 1.8rem;
            }
            .article-overlay-content .lead,
            .article-overlay-content .content {
                font-size: 1rem;
            }
            .article-overlay-content .meta,
            .article-overlay-content .toc p,
            .article-overlay-content .tag {
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
            .articles-section, .recent-articles-section {
                padding: 4.5rem 0;
            }
            .articles-section h2, .recent-articles-section h2 {
                font-size: 2.3rem;
            }
            .articles-section .lead, .recent-articles-section .lead {
                font-size: 1rem;
            }
            .article-card .image-container {
                height: 280px;
            }
            .article-card .content-overlay {
                opacity: 1;
                transform: translateY(0);
                background: rgba(0, 33, 63, 0.55);
            }
            .article-card .gradient-overlay,
            .article-card .title-overlay {
                opacity: 0;
            }
            .article-card .title-overlay h3 {
                font-size: 1.2rem;
            }
            .article-card .content-overlay h3 {
                font-size: 1.4rem;
            }
            .article-card .category,
            .article-card p {
                font-size: 0.9rem;
            }
            .btn-all, .btn-share {
                padding: 0.7rem 2rem;
                font-size: 0.95rem;
            }
            .article-overlay-content {
                padding: 1.5rem;
            }
            .article-overlay-content h3 {
                font-size: 1.6rem;
            }
            .article-overlay-content .lead,
            .article-overlay-content .content {
                font-size: 0.95rem;
            }
            .article-overlay-content .meta,
            .article-overlay-content .toc p,
            .article-overlay-content .tag {
                font-size: 0.85rem;
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
            .articles-section h2, .recent-articles-section h2 {
                font-size: 2rem;
            }
            .articles-section .lead, .recent-articles-section .lead {
                font-size: 0.95rem;
            }
            .article-card .image-container {
                height: 260px;
            }
            .article-card .title-overlay h3 {
                font-size: 1.1rem;
            }
            .article-card .content-overlay h3 {
                font-size: 1.3rem;
            }
            .article-card .category,
            .article-card p {
                font-size: 0.9rem;
            }
            .btn-all, .btn-share {
                padding: 0.6rem 1.8rem;
                font-size: 0.9rem;
                width: 100%;
                max-width: 280px;
            }
            .article-overlay-content {
                padding: 1.25rem;
            }
            .article-overlay-content h3 {
                font-size: 1.5rem;
            }
            .article-overlay-content .lead,
            .article-overlay-content .content {
                font-size: 0.9rem;
            }
            .article-overlay-content .meta,
            .article-overlay-content .toc p,
            .article-overlay-content .tag {
                font-size: 0.85rem;
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
                            <h1>Insights & Articles</h1>
                            <p>Stay ahead with our latest thought leadership, industry analysis, and expert perspectives on accounting, taxation, and business trends.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="#articles" class="btn-primary-filled">Explore Insights <i class="fas fa-arrow-right"></i></a>
                                <a href="#contact" class="btn-primary-outline">Contact Us <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Featured Articles Section -->
            <section class="articles-section" id="articles">
                <div class="section-container">
                    <h2 class="gsap-animate">Featured Articles</h2>
                    <p class="lead gsap-animate">Our most popular and impactful insights that are shaping business decisions across industries.</p>
                    <div class="row g-4">
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate">
                            <div class="article-card">
                                <div class="image-container">
                                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1200&auto=format&fit=crop" alt="Strategic Tax Planning">
                                    <div class="gradient-overlay"></div>
                                    <div class="title-overlay">
                                        <h3>Strategic Tax Planning for Growing Businesses in Nepal</h3>
                                    </div>
                                    <div class="content-overlay">
                                        <span class="category">TAX ADVISORY</span>
                                        <h3>Strategic Tax Planning for Growing Businesses in Nepal</h3>
                                        <p>Essential tax strategies and compliance considerations for businesses expanding in Nepal's evolving regulatory landscape.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.2">
                            <div class="article-card">
                                <div class="image-container">
                                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1200&auto=format&fit=crop" alt="Digital Transformation">
                                    <div class="gradient-overlay"></div>
                                    <div class="title-overlay">
                                        <h3>Digital Transformation in Modern Accounting Practices</h3>
                                    </div>
                                    <div class="content-overlay">
                                        <span class="category">TECHNOLOGY</span>
                                        <h3>Digital Transformation in Modern Accounting Practices</h3>
                                        <p>Exploring how technology is reshaping the accounting landscape and what it means for businesses in Nepal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.4">
                            <div class="article-card">
                                <div class="image-container">
                                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=1200&auto=format&fit=crop" alt="Risk Management">
                                    <div class="gradient-overlay"></div>
                                    <div class="title-overlay">
                                        <h3>Understanding Risk Management in Financial Reporting</h3>
                                    </div>
                                    <div class="content-overlay">
                                        <span class="category">RISK MANAGEMENT</span>
                                        <h3>Understanding Risk Management in Financial Reporting</h3>
                                        <p>A comprehensive guide to identifying and mitigating risks in financial reporting processes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Recent Articles Section -->
            <section class="recent-articles-section">
                <div class="section-container">
                    <h2 class="gsap-animate">Recent Articles</h2>
                    <p class="lead gsap-animate">Stay updated with our latest insights and expert commentary.</p>
                    <div class="row g-4">
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate">
                            <div class="article-card" 
                                 data-category="COMPLIANCE" 
                                 data-title="NFRS Updates: What Businesses Need to Know" 
                                 data-description="Latest updates to Nepal Financial Reporting Standards and their impact on business financial reporting requirements." 
                                 data-author="Sita Rai, Sustainability Consultant" 
                                 data-date="August 14, 2025" 
                                 data-read-time="7 min read" 
                                 data-content="Latest updates to Nepal Financial Reporting Standards (NFRS) are reshaping how businesses approach financial reporting. This article explores key changes and their implications for compliance and transparency." 
                                 data-tags="#NFRS,#compliance,#financialreporting">
                                <div class="image-container">
                                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=1200&auto=format&fit=crop" alt="NFRS Updates">
                                    <div class="gradient-overlay"></div>
                                    <div class="title-overlay">
                                        <h3>NFRS Updates: What Businesses Need to Know</h3>
                                    </div>
                                    <div class="content-overlay">
                                        <span class="category">COMPLIANCE</span>
                                        <h3>NFRS Updates: What Businesses Need to Know</h3>
                                        <p>Latest updates to Nepal Financial Reporting Standards and their impact on business financial reporting requirements.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.2">
                            <div class="article-card" 
                                 data-category="BUSINESS STRATEGY" 
                                 data-title="ESG Reporting: A Growing Imperative for Businesses" 
                                 data-description="Understanding Environmental, Social, and Governance reporting requirements and best practices for sustainable business operations." 
                                 data-author="Sita Rai, Sustainability Consultant" 
                                 data-date="August 14, 2025" 
                                 data-read-time="7 min read" 
                                 data-content="Environmental, Social, and Governance (ESG) reporting has moved from a voluntary initiative to a business imperative. Companies worldwide are facing increasing pressure from investors, regulators, and stakeholders to demonstrate their commitment to sustainable practices." 
                                 data-tags="#ESG,#sustainability,#reporting,#governance">
                                <div class="image-container">
                                    <img src="https://images.unsplash.com/photo-1565514020179-026b92b84bb6?q=80&w=1200&auto=format&fit=crop" alt="ESG Reporting">
                                    <div class="gradient-overlay"></div>
                                    <div class="title-overlay">
                                        <h3>ESG Reporting: A Growing Imperative for Businesses</h3>
                                    </div>
                                    <div class="content-overlay">
                                        <span class="category">BUSINESS STRATEGY</span>
                                        <h3>ESG Reporting: A Growing Imperative for Businesses</h3>
                                        <p>Understanding Environmental, Social, and Governance reporting requirements and best practices for sustainable business operations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.4">
                            <div class="article-card" 
                                 data-category="AUDIT & ASSURANCE" 
                                 data-title="Internal Audit Best Practices for SMEs" 
                                 data-description="Essential internal audit practices that small and medium enterprises can implement to improve operations and compliance." 
                                 data-author="Sita Rai, Sustainability Consultant" 
                                 data-date="August 14, 2025" 
                                 data-read-time="7 min read" 
                                 data-content="Internal audits are critical for SMEs to ensure operational efficiency and regulatory compliance. This article outlines best practices to implement effective audit processes tailored for smaller businesses." 
                                 data-tags="#audit,#SME,#compliance,#bestpractices">
                                <div class="image-container">
                                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=1200&auto=format&fit=crop" alt="Internal Audit">
                                    <div class="gradient-overlay"></div>
                                    <div class="title-overlay">
                                        <h3>Internal Audit Best Practices for SMEs</h3>
                                    </div>
                                    <div class="content-overlay">
                                        <span class="category">AUDIT & ASSURANCE</span>
                                        <h3>Internal Audit Best Practices for SMEs</h3>
                                        <p>Essential internal audit practices that small and medium enterprises can implement to improve operations and compliance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-all-container gsap-animate">
                        <a href="#articles" class="btn-all">View All Articles <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </section>

            <!-- Article Overlay -->
            <div class="article-overlay">
                <div class="article-overlay-content">
                    <button class="article-overlay-close"><i class="fas fa-times"></i></button>
                    <span class="category"></span>
                    <h3></h3>
                    <p class="lead"></p>
                    <div class="meta"></div>
                    <div class="content"></div>
                    <div class="tags">
                        <strong>Related Tags</strong><br>
                    </div>
                    <div class="share">
                        <a href="#" class="btn-share">Share this insight <i class="fas fa-share-alt"></i></a>
                    </div>
                    <a href="#articles" class="back-link">Back to Insights</a>
                    <div class="toc">
                        <h4>Table of Contents</h4>
                        <p>No headings found</p>
                    </div>
                </div>
            </div>
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
        $(document).ready(function(){
            // Initialize Slick Slider
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

            // Article Overlay Logic
            $('.recent-articles-section .article-card').on('click', function() {
                const category = $(this).data('category');
                const title = $(this).data('title');
                const description = $(this).data('description');
                const author = $(this).data('author');
                const date = $(this).data('date');
                const readTime = $(this).data('read-time');
                const content = $(this).data('content');
                const tags = $(this).data('tags').split(',');

                $('.article-overlay .category').text(category);
                $('.article-overlay h3').text(title);
                $('.article-overlay .lead').text(description);
                $('.article-overlay .meta').text(`${author} • ${date} • ${readTime}`);
                $('.article-overlay .content').text(content);
                $('.article-overlay .tags').html('<strong>Related Tags</strong><br>');
                tags.forEach(tag => {
                    $('.article-overlay .tags').append(`<a href="#" class="tag">${tag}</a>`);
                });

                $('.article-overlay').addClass('active');
                gsap.fromTo('.article-overlay-content', 
                    { opacity: 0, y: 50 },
                    { opacity: 1, y: 0, duration: 0.5, ease: 'power3.out' }
                );
            });

            $('.article-overlay-close, .article-overlay').on('click', function(e) {
                if (e.target === this || $(e.target).hasClass('article-overlay-close') || $(e.target).hasClass('fa-times')) {
                    $('.article-overlay').removeClass('active');
                    gsap.to('.article-overlay-content', {
                        opacity: 0,
                        y: 50,
                        duration: 0.5,
                        ease: 'power3.in',
                        onComplete: () => {
                            $('.article-overlay .category').text('');
                            $('.article-overlay h3').text('');
                            $('.article-overlay .lead').text('');
                            $('.article-overlay .meta').text('');
                            $('.article-overlay .content').text('');
                            $('.article-overlay .tags').html('<strong>Related Tags</strong><br>');
                        }
                    });
                }
            });

            $('.article-overlay').on('click', '.btn-share', function(e) {
                e.preventDefault();
                alert('Share functionality to be implemented (e.g., social media sharing).');
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
@extends('layouts.sidebar')

@section('styles')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter & Lora -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Lora:wght@500;700&display=swap" rel="stylesheet">
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
            --transition: all 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .rka-scope {
            font-family: 'Inter', sans-serif;
            background: var(--light);
            color: var(--primary);
            line-height: 1.8;
            overflow-x: hidden;
        }

        .rka-scope h1, .rka-scope h2, .rka-scope h3, .rka-scope h4 {
            font-family: 'Lora', serif;
            font-weight: 700;
            color: var(--primary);
            letter-spacing: -0.2px;
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
            background: linear-gradient(135deg, rgba(0, 33, 63, 0.8), rgba(0, 144, 212, 0.7)), url('https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1920&auto=format&fit=crop') center/cover;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle, rgba(0, 180, 242, 0.1) 0%, transparent 70%);
            animation: wave 8s infinite ease-in-out;
        }

        @keyframes wave {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 0.3; }
        }

        .hero-content {
            text-align: center;
            max-width: 900px;
            width: 90%;
            margin: auto;
            padding: 3rem;
            color: var(--white);
            background: rgba(0, 33, 63, 0.25);
            backdrop-filter: blur(12px);
            border-radius: 24px;
            box-shadow: 0 10px 50px rgba(0, 33, 63, 0.3);
        }

        .hero-content h1 {
            font-size: 4.5rem;
            margin-bottom: 1.2rem;
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
            font-size: 1.1rem;
            font-weight: 600;
            padding: 0.9rem 2.5rem;
            border-radius: 50px;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin: 0 0.8rem;
        }

        .btn-primary-filled {
            background: linear-gradient(90deg, var(--secondary), var(--accent));
            color: var(--white);
            border: none;
            box-shadow: 0 6px 20px rgba(0, 144, 212, 0.3);
        }

        .btn-primary-filled:hover {
            background: linear-gradient(90deg, var(--accent), var(--secondary));
            transform: scale(1.02);
            box-shadow: 0 12px 30px rgba(0, 144, 212, 0.4);
        }

        .btn-primary-outline {
            background: transparent;
            border: 2px solid var(--white);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(0, 144, 212, 0.2);
        }

        .btn-primary-outline:hover {
            background: var(--white);
            color: var(--primary);
            transform: scale(1.02);
            box-shadow: 0 10px 25px rgba(0, 144, 212, 0.3);
        }

        .btn-primary-filled i, .btn-primary-outline i {
            margin-left: 8px;
            transition: transform 0.2s;
        }

        .btn-primary-filled:hover i, .btn-primary-outline:hover i {
            transform: translateX(6px);
        }

        /* Events Section */
        .events-section, .past-events-section, .custom-training-section {
            padding: 8rem 0;
            margin-right: 4.8rem;
            background: linear-gradient(180deg, var(--white), var(--lighter));
        }

        .events-section h2, .past-events-section h2, .custom-training-section h2 {
            font-size: 3.2rem;
            text-align: center;
            margin-bottom: 2rem;
        }

        .events-section .lead, .past-events-section .lead, .custom-training-section .lead {
            font-size: 1.3rem;
            font-weight: 400;
            color: var(--gray);
            max-width: 1000px;
            margin: 0 auto 3rem;
            text-align: center;
        }

        .filter-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            background: var(--lighter);
            border-radius: 50px;
            padding: 0.5rem;
        }

        .btn-filter {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            padding: 0.7rem 2rem;
            border-radius: 50px;
            background: transparent;
            color: var(--primary);
            border: none;
            transition: var(--transition);
            cursor: pointer;
        }

        .btn-filter:hover {
            color: var(--white);
            background: var(--accent);
            transform: scale(1.05);
        }

        .btn-filter.active {
            background: linear-gradient(90deg, var(--secondary), var(--accent));
            color: var(--white);
            box-shadow: 0 6px 15px rgba(0, 144, 212, 0.4);
        }

        .event-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 2rem;
        }

        .event-card {
            background: var(--white);
            border: 1px solid var(--lighter);
            border-radius: 16px;
            box-shadow: 0 8px 25px var(--shadow);
            transition: var(--transition);
            overflow: hidden;
            cursor: pointer;
            position: relative;
            margin-bottom: 2rem;
        }

        .event-card:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 35px rgba(0, 33, 63, 0.25);
            border-color: var(--accent);
        }

        .event-card .event-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 16px 16px 0 0;
            position: relative;
            z-index: 1;
        }

        .event-card .date-container {
            position: absolute;
            top: 0px;
            right: -1px;
            background: rgba(0, 180, 242, 0.95);
            color: var(--white);
            padding: 1rem;
            width: 75px;
            border: 3px solid var(--white);
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 8px 16px rgba(0, 144, 212, 0.5);
            z-index: 10;
        }

        .event-card .day {
            font-size: 1.9rem;
            font-weight: 700;
            line-height: 1;
        }

        .event-card .month {
            font-size: 0.95rem;
            text-transform: uppercase;
        }

        .event-card .content {
            padding: 2rem;
        }

        .event-card .category {
            display: inline-block;
            padding: 0.4rem 1rem;
            background: var(--accent);
            color: var(--white);
            font-size: 0.9rem;
            border-radius: 9999px;
            margin-bottom: 0.8rem;
        }

        .event-card h3 {
            font-size: 1.9rem;
            margin-bottom: 0.8rem;
            font-weight: 700;
        }

        .event-card p {
            font-size: 1.1rem;
            color: var(--gray);
            margin-bottom: 0;
            font-weight: 400;
        }

        .btn-event, .btn-resource {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin-right: 1rem;
        }

        .btn-event {
            background: linear-gradient(90deg, var(--secondary), var(--accent));
            color: var(--white);
            border: none;
            box-shadow: 0 6px 15px rgba(0, 144, 212, 0.3);
        }

        .btn-event:hover {
            background: linear-gradient(90deg, var(--accent), var(--secondary));
            transform: scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 144, 212, 0.4);
        }

        .btn-resource {
            background: transparent;
            border: 2px solid var(--accent);
            color: var(--accent);
            box-shadow: 0 4px 10px rgba(0, 144, 212, 0.2);
        }

        .btn-resource:hover {
            background: var(--accent);
            color: var(--white);
            transform: scale(1.02);
            box-shadow: 0 8px 15px rgba(0, 144, 212, 0.3);
        }

        .btn-event i, .btn-resource i {
            margin-left: 8px;
            transition: transform 0.2s;
        }

        .btn-event:hover i, .btn-resource:hover i {
            transform: translateX(6px);
        }

        /* Past Events */
        .past-events-section .event-card .category {
            background: var(--gray);
        }

        .past-events-section .event-card .date-container {
            background: rgba(108, 117, 125, 0.95);
            box-shadow: 0 8px 16px rgba(108, 117, 125, 0.5);
            border: 3px solid var(--white);
        }

        /* Custom Training Section */
        .custom-training-section .training-card {
            background: var(--white);
            border: 1px solid var(--lighter);
            border-radius: 16px;
            box-shadow: 0 8px 25px var(--shadow);
            padding: 3rem;
            text-align: center;
            transition: var(--transition);
        }

        .custom-training-section .training-card:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 35px rgba(0, 33, 63, 0.25);
            border-color: var(--accent);
        }

        .custom-training-section .training-card i {
            font-size: 2.5rem;
            color: var(--accent);
            background: var(--lighter);
            border-radius: 50%;
            padding: 1.8rem;
            margin-bottom: 2.5rem;
            transition: var(--transition);
        }

        .custom-training-section .training-card:hover i {
            transform: scale(1.1);
        }

        .custom-training-section .training-card h3 {
            font-size: 1.7rem;
            margin-bottom: 0.8rem;
        }

        .custom-training-section .training-card p {
            font-size: 1.1rem;
            color: var(--gray);
            font-weight: 400;
        }

        .btn-custom {
            font-family: 'Inter', sans-serif;
            font-size: 1.1rem;
            font-weight: 600;
            padding: 0.9rem 2.5rem;
            border-radius: 50px;
            background: linear-gradient(90deg, var(--secondary), var(--accent));
            color: var(--white);
            border: none;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin: 2rem auto 0;
            box-shadow: 0 6px 20px rgba(0, 144, 212, 0.3);
        }

        .btn-custom:hover {
            background: linear-gradient(90deg, var(--accent), var(--secondary));
            transform: scale(1.02);
            box-shadow: 0 12px 30px rgba(0, 144, 212, 0.4);
        }

        .btn-custom i {
            margin-left: 8px;
            transition: transform 0.2s;
        }

        .btn-custom:hover i {
            transform: translateX(6px);
        }

        /* Event Overlay */
        .event-overlay {
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

        .event-overlay.active {
            display: flex;
        }

        .event-overlay-content {
            background: var(--white);
            max-width: 900px;
            width: 100%;
            padding: 3rem;
            border-radius: 16px;
            box-shadow: 0 10px 50px rgba(0, 33, 63, 0.3);
            position: relative;
            margin: 2rem auto;
        }

        .event-overlay-content .category {
            display: inline-block;
            padding: 0.4rem 1rem;
            background: var(--accent);
            color: var(--white);
            font-size: 0.9rem;
            border-radius: 9999px;
            margin-bottom: 1rem;
        }

        .event-overlay-content h3 {
            font-size: 2.1rem;
            margin-bottom: 1rem;
        }

        .event-overlay-content .lead {
            font-size: 1.1rem;
            color: var(--gray);
            margin-bottom: 1.5rem;
        }

        .event-overlay-content .details {
            font-size: 1rem;
            color: var(--primary);
            margin-bottom: 2rem;
        }

        .event-overlay-content .details i {
            margin-right: 0.75rem;
            color: var(--accent);
            font-size: 1rem;
        }

        .event-overlay-content .btn-event, .event-overlay-content .btn-resource {
            margin-right: 1rem;
        }

        .event-overlay-close {
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
            box-shadow: 0 4px 10px rgba(0, 33, 63, 0.2);
        }

        .event-overlay-close i {
            font-size: 1.5rem;
            color: var(--primary);
        }

        .event-overlay-close:hover {
            background: var(--accent);
            transform: scale(1.1);
            box-shadow: 0 6px 15px rgba(0, 144, 212, 0.3);
        }

        .event-overlay-close:hover i {
            color: var(--white);
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
            .events-section h2, .past-events-section h2, .custom-training-section h2 {
                font-size: 2.8rem;
            }
            .events-section .lead, .past-events-section .lead, .custom-training-section .lead {
                font-size: 1.2rem;
            }
            .event-card .event-image {
                height: 200px;
            }
            .event-card .date-container {
                top: 8px;
                right: -25px;
                width: 65px;
                padding: 0.8rem;
                border: 2px solid var(--white);
                box-shadow: 0 6px 12px rgba(0, 144, 212, 0.4);
            }
            .event-card .day {
                font-size: 1.7rem;
            }
            .event-card .month {
                font-size: 0.85rem;
            }
            .event-card h3 {
                font-size: 1.7rem;
            }
            .event-card p {
                font-size: 1rem;
            }
            .btn-event, .btn-resource, .btn-custom {
                padding: 0.7rem 1.8rem;
                font-size: 0.95rem;
            }
            .btn-filter {
                padding: 0.6rem 1.8rem;
                font-size: 0.95rem;
            }
            .custom-training-section .training-card {
                padding: 2rem;
            }
            .custom-training-section .training-card h3 {
                font-size: 1.5rem;
            }
            .custom-training-section .training-card i {
                font-size: 2.2rem;
                padding: 1.2rem;
                margin-bottom: 1.5rem;
            }
            .event-overlay-content {
                padding: 2rem;
            }
            .event-overlay-content h3 {
                font-size: 1.9rem;
            }
            .event-overlay-content .lead, .event-overlay-content .details {
                font-size: 0.95rem;
            }
            .custom-training-section .row {
                gap: 2rem;
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
            .events-section, .past-events-section, .custom-training-section {
                padding: 6rem 0;
            }
            .events-section h2, .past-events-section h2, .custom-training-section h2 {
                font-size: 2.5rem;
            }
            .events-section .lead, .past-events-section .lead, .custom-training-section .lead {
                font-size: 1.1rem;
            }
            .event-card .event-image {
                height: 180px;
            }
            .event-card .date-container {
                top: 8px;
                right: -20px;
                width: 60px;
                padding: 0.7rem;
                border: 2px solid var(--white);
                box-shadow: 0 6px 12px rgba(0, 144, 212, 0.4);
            }
            .event-card .day {
                font-size: 1.5rem;
            }
            .event-card .month {
                font-size: 0.75rem;
            }
            .event-card h3 {
                font-size: 1.6rem;
            }
            .event-card p {
                font-size: 0.95rem;
            }
            .btn-event, .btn-resource, .btn-custom {
                padding: 0.6rem 1.8rem;
                font-size: 0.9rem;
            }
            .btn-filter {
                padding: 0.6rem 1.8rem;
                font-size: 0.9rem;
            }
            .custom-training-section .training-card {
                padding: 1.8rem;
            }
            .custom-training-section .training-card h3 {
                font-size: 1.4rem;
            }
            .custom-training-section .training-card i {
                font-size: 2rem;
                padding: 1rem;
                margin-bottom: 1.2rem;
            }
            .filter-buttons {
                flex-direction: column;
                align-items: center;
                border-radius: 12px;
            }
            .event-overlay-content {
                padding: 1.5rem;
            }
            .event-overlay-content h3 {
                font-size: 1.7rem;
            }
            .event-overlay-content .lead, .event-overlay-content .details {
                font-size: 0.9rem;
            }
            .event-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 1.5rem;
            }
            .custom-training-section .row {
                gap: 1.5rem;
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
            .events-section h2, .past-events-section h2, .custom-training-section h2 {
                font-size: 2.2rem;
            }
            .events-section .lead, .past-events-section .lead, .custom-training-section .lead {
                font-size: 0.95rem;
            }
            .event-card .event-image {
                height: 140px;
            }
            .event-card .date-container {
                top: 6px;
                right: -15px;
                width: 55px;
                padding: 0.5rem;
                border: 1px solid var(--white);
                box-shadow: 0 4px 8px rgba(0, 144, 212, 0.4);
            }
            .event-card .day {
                font-size: 1.3rem;
            }
            .event-card .month {
                font-size: 0.65rem;
            }
            .event-card h3 {
                font-size: 1.4rem;
            }
            .event-card p {
                font-size: 0.85rem;
            }
            .btn-event, .btn-resource, .btn-custom {
                padding: 0.6rem 1.8rem;
                font-size: 0.9rem;
                width: 100%;
                max-width: 260px;
            }
            .btn-filter {
                padding: 0.6rem 1.5rem;
                font-size: 0.9rem;
                width: 100%;
                max-width: 260px;
            }
            .custom-training-section .training-card {
                padding: 1.2rem;
            }
            .custom-training-section .training-card h3 {
                font-size: 1.2rem;
            }
            .custom-training-section .training-card i {
                font-size: 1.8rem;
                padding: 0.7rem;
                margin-bottom: 0.8rem;
            }
            .section-container {
                padding: 0 12px;
            }
            .event-overlay-content {
                padding: 1rem;
            }
            .event-overlay-content h3 {
                font-size: 1.4rem;
            }
            .event-overlay-content .lead, .event-overlay-content .details {
                font-size: 0.8rem;
            }
            .event-grid {
                grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
                gap: 1.2rem;
            }
            .custom-training-section .row {
                gap: 1.2rem;
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
                    <h1>Events & Seminars</h1>
                    <p>Join our educational events, workshops, and seminars to stay updated with the latest industry developments.</p>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <a href="#events" class="btn-primary-filled">Explore Events <i class="fas fa-arrow-right"></i></a>
                        <a href="#contact" class="btn-primary-outline">Contact Us <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </section>

            <!-- Events Section -->
            <section class="events-section" id="events">
                <div class="section-container">
                    <h2 class="gsap-animate">Upcoming Events</h2>
                    <p class="lead gsap-animate">Don't miss these upcoming opportunities to enhance your knowledge and network with industry professionals.</p>
                    <div class="filter-buttons gsap-animate">
                        <button class="btn-filter active" data-filter="all">All Events</button>
                        <button class="btn-filter" data-filter="Webinar">Webinars</button>
                        <button class="btn-filter" data-filter="Workshop">Workshops</button>
                        <button class="btn-filter" data-filter="Conference">Conferences</button>
                        <button class="btn-filter" data-filter="Training">Trainings</button>
                    </div>
                    <div class="event-grid">
                        <div class="event-card gsap-animate" data-category="Conference" 
                             data-title="Annual Accounting & Finance Conference 2024" 
                             data-description="Join Nepal's premier gathering of accounting and finance professionals for a full day of insights, networking, and knowledge sharing. Features keynote speakers, panel discussions, and workshops on the latest industry trends." 
                             data-details="Hotel Annapurna, Kathmandu|9:00 AM - 5:00 PM|NPR 2500.00 (Early Bird: NPR 2000.00)" 
                             data-button-text="Register Now" data-button-link="#register">
                            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=1200&auto=format&fit=crop" class="event-image" alt="Conference event">
                            <div class="date-container">
                                <div class="day">16</div>
                                <div class="month">Sep</div>
                            </div>
                            <div class="content">
                                <span class="category">Conference</span>
                                <h3>Annual Accounting & Finance Conference 2024</h3>
                                <p>Join Nepal's premier gathering of accounting and finance professionals for a full day of insights, networking, and knowledge sharing.</p>
                            </div>
                        </div>
                        <div class="event-card gsap-animate" data-category="Webinar" data-delay="0.2" 
                             data-title="Tax Compliance Updates for FY 2023/24" 
                             data-description="Stay updated with the latest changes in tax regulations and compliance requirements. Essential for all business owners and finance professionals." 
                             data-details="Online (Zoom)|2:00 PM - 3:30 PM|Free" 
                             data-button-text="Join Webinar (Free)" data-button-link="#webinar">
                            <img src="https://images.unsplash.com/photo-1611162616305-c69b3fa7fbe0?q=80&w=1200&auto=format&fit=crop" class="event-image" alt="Webinar event">
                            <div class="date-container">
                                <div class="day">24</div>
                                <div class="month">Aug</div>
                            </div>
                            <div class="content">
                                <span class="category">Webinar</span>
                                <h3>Tax Compliance Updates for FY 2023/24</h3>
                                <p>Stay updated with the latest changes in tax regulations and compliance requirements.</p>
                            </div>
                        </div>
                        <div class="event-card gsap-animate" data-category="Workshop" data-delay="0.4" 
                             data-title="Strategic Financial Planning for SMEs" 
                             data-description="Interactive workshop covering budgeting, forecasting, and financial strategy for small and medium enterprises. Includes practical exercises and case studies." 
                             data-details="CI Training Center|10:00 AM - 4:00 PM|NPR 1500.00" 
                             data-button-text="Register Now" data-button-link="#register">
                            <img src="https://images.unsplash.com/photo-1516321310769-65e85b8e6351?q=80&w=1200&auto=format&fit=crop" class="event-image" alt="Workshop event">
                            <div class="date-container">
                                <div class="day">31</div>
                                <div class="month">Aug</div>
                            </div>
                            <div class="content">
                                <span class="category">Workshop</span>
                                <h3>Strategic Financial Planning for SMEs</h3>
                                <p>Interactive workshop covering budgeting, forecasting, and financial strategy for SMEs.</p>
                            </div>
                        </div>
                        <div class="event-card gsap-animate" data-category="Training" 
                             data-title="Advanced Excel for Financial Analysis" 
                             data-description="Master advanced Excel functions, pivot tables, and financial modeling techniques. Perfect for accounting professionals and analysts." 
                             data-details="CI Training Center|10:00 AM - 4:00 PM|NPR 3000.00" 
                             data-button-text="Register Now" data-button-link="#register">
                            <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1200&auto=format&fit=crop" class="event-image" alt="Training event">
                            <div class="date-container">
                                <div class="day">7</div>
                                <div class="month">Sep</div>
                            </div>
                            <div class="content">
                                <span class="category">Training</span>
                                <h3>Advanced Excel for Financial Analysis</h3>
                                <p>Master advanced Excel functions, pivot tables, and financial modeling techniques.</p>
                            </div>
                        </div>
                        <div class="event-card gsap-animate" data-category="Webinar" data-delay="0.2" 
                             data-title="Enterprise Risk Management in Uncertain Times" 
                             data-description="Learn how to identify, assess, and mitigate business risks in today's volatile economic environment. Expert insights and practical frameworks." 
                             data-details="Online (Teams)|3:00 PM - 4:30 PM|Free" 
                             data-button-text="Join Webinar (Free)" data-button-link="#webinar">
                            <img src="https://images.unsplash.com/photo-1594125730766-91d63d7e7a7b?q=80&w=1200&auto=format&fit=crop" class="event-image" alt="Webinar event">
                            <div class="date-container">
                                <div class="day">14</div>
                                <div class="month">Sep</div>
                            </div>
                            <div class="content">
                                <span class="category">Webinar</span>
                                <h3>Enterprise Risk Management in Uncertain Times</h3>
                                <p>Learn how to identify, assess, and mitigate business risks in today's volatile environment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Past Events Section -->
            <section class="past-events-section">
                <div class="section-container">
                    <h2 class="gsap-animate">Past Events</h2>
                    <p class="lead gsap-animate">Missed an event? Catch up on key insights and access recordings from our previous sessions.</p>
                    <div class="event-grid">
                        <div class="event-card gsap-animate" data-category="Webinar" 
                             data-title="Digital Transformation in Accounting" 
                             data-description="Explored automation tools, cloud accounting, and AI applications in modern accounting practices." 
                             data-details="July 26, 2025" 
                             data-button-text="View Recording|Download Resources" data-button-link="#recording|#resources">
                            <img src="https://images.unsplash.com/photo-1516321310769-65e85b8e6351?q=80&w=1200&auto=format&fit=crop" class="event-image" alt="Webinar event">
                            <div class="date-container">
                                <div class="day">26</div>
                                <div class="month">Jul</div>
                            </div>
                            <div class="content">
                                <span class="category">Webinar</span>
                                <h3>Digital Transformation in Accounting</h3>
                                <p>Explored automation tools, cloud accounting, and AI applications in modern accounting.</p>
                            </div>
                        </div>
                        <div class="event-card gsap-animate" data-category="Workshop" data-delay="0.2" 
                             data-title="Internal Audit Best Practices Workshop" 
                             data-description="Comprehensive training on risk-based auditing, compliance frameworks, and audit technology." 
                             data-details="July 19, 2025" 
                             data-button-text="View Recording|Download Resources" data-button-link="#recording|#resources">
                            <img src="https://images.unsplash.com/photo-1542744173-05336fcc7ad4?q=80&w=1200&auto=format&fit=crop" class="event-image" alt="Workshop event">
                            <div class="date-container">
                                <div class="day">19</div>
                                <div class="month">Jul</div>
                            </div>
                            <div class="content">
                                <span class="category">Workshop</span>
                                <h3>Internal Audit Best Practices Workshop</h3>
                                <p>Comprehensive training on risk-based auditing and compliance frameworks.</p>
                            </div>
                        </div>
                        <div class="event-card gsap-animate" data-category="Webinar" data-delay="0.4" 
                             data-title="Business Valuation Methodologies" 
                             data-description="In-depth look at different valuation approaches, market multiples, and DCF modeling techniques." 
                             data-details="July 11, 2025" 
                             data-button-text="View Recording|Download Resources" data-button-link="#recording|#resources">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1200&auto=format&fit=crop" class="event-image" alt="Webinar event">
                            <div class="date-container">
                                <div class="day">11</div>
                                <div class="month">Jul</div>
                            </div>
                            <div class="content">
                                <span class="category">Webinar</span>
                                <h3>Business Valuation Methodologies</h3>
                                <p>In-depth look at valuation approaches and DCF modeling techniques.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Custom Training Section -->
            <section class="custom-training-section">
                <div class="section-container">
                    <h2 class="gsap-animate">Need Custom Training?</h2>
                    <p class="lead gsap-animate">Looking for specialized training for your team? We offer custom workshops, corporate training sessions, and on-site seminars tailored to your organization's specific needs.</p>
                    <div class="row g-10">
                        <div class="col-12 col-md-6 col-lg-4 training-card gsap-animate">
                            <i class="fas fa-users"></i>
                            <h3>Team Training</h3>
                            <p>Custom workshops designed for your team's specific skill development needs.</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 training-card gsap-animate" data-delay="0.2">
                            <i class="fas fa-building"></i>
                            <h3>On-site Seminars</h3>
                            <p>Bring our experts to your location for comprehensive training sessions.</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 training-card gsap-animate" data-delay="0.4">
                            <i class="fas fa-certificate"></i>
                            <h3>Certification Programs</h3>
                            <p>Structured certification programs with measurable learning outcomes.</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#contact" class="btn-custom">Discuss Custom Training <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </section>

            <!-- Event Overlay -->
            <div class="event-overlay">
                <div class="event-overlay-content">
                    <button class="event-overlay-close"><i class="fas fa-times"></i></button>
                    <span class="category"></span>
                    <h3></h3>
                    <p class="lead"></p>
                    <div class="details"></div>
                    <div class="buttons"></div>
                </div>
            </div>
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
            // Filter Logic
            $('.btn-filter').on('click', function() {
                $('.btn-filter').removeClass('active');
                $(this).addClass('active');
                const filter = $(this).data('filter');
                $('.event-card').each(function() {
                    const category = $(this).data('category');
                    if (filter === 'all' || category === filter) {
                        $(this).show();
                        gsap.fromTo(this, 
                            { opacity: 0, y: 20 },
                            { opacity: 1, y: 0, duration: 0.5, ease: 'power3.out' }
                        );
                    } else {
                        $(this).hide();
                    }
                });
            });

            // Event Overlay Logic
            $('.event-card').on('click', function() {
                const category = $(this).data('category');
                const title = $(this).data('title');
                const description = $(this).data('description');
                const details = $(this).data('details').split('|');
                const buttonText = $(this).data('button-text').split('|');
                const buttonLink = $(this).data('button-link').split('|');

                $('.event-overlay .category').text(category);
                $('.event-overlay h3').text(title);
                $('.event-overlay .lead').text(description);
                $('.event-overlay .details').html('');
                details.forEach(detail => {
                    const icon = detail.includes('Online') ? 'fa-globe' : detail.includes('July') ? 'fa-calendar-alt' : detail.includes('AM') || detail.includes('PM') ? 'fa-clock' : detail.includes('NPR') || detail.includes('Free') ? 'fa-ticket-alt' : 'fa-map-marker-alt';
                    $('.event-overlay .details').append(`<p><i class="fas ${icon}"></i> ${detail}</p>`);
                });
                $('.event-overlay .buttons').html('');
                buttonText.forEach((text, index) => {
                    const icon = text.includes('Recording') ? 'fa-play' : text.includes('Resources') ? 'fa-download' : 'fa-arrow-right';
                    const className = text.includes('Recording') || text.includes('Resources') ? 'btn-resource' : 'btn-event';
                    $('.event-overlay .buttons').append(`<a href="${buttonLink[index]}" class="${className}">${text} <i class="fas ${icon}"></i></a>`);
                });

                $('.event-overlay').addClass('active');
                gsap.fromTo('.event-overlay-content', 
                    { opacity: 0, y: 20 },
                    { opacity: 1, y: 0, duration: 0.5, ease: 'power3.out' }
                );
            });

            $('.event-overlay-close, .event-overlay').on('click', function(e) {
                if (e.target === this || $(e.target).hasClass('event-overlay-close') || $(e.target).hasClass('fa-times')) {
                    $('.event-overlay').removeClass('active');
                    gsap.to('.event-overlay-content', {
                        opacity: 0,
                        y: 20,
                        duration: 0.5,
                        ease: 'power3.in',
                        onComplete: () => {
                            $('.event-overlay .category').text('');
                            $('.event-overlay h3').text('');
                            $('.event-overlay .lead').text('');
                            $('.event-overlay .details').html('');
                            $('.event-overlay .buttons').html('');
                        }
                    });
                }
            });

            // Card Hover Animation
            $('.event-card, .training-card').on('mouseenter', function() {
                gsap.to(this, {
                    scale: 1.03,
                    boxShadow: '0 15px 35px rgba(0, 33, 63, 0.25)',
                    duration: 0.2,
                    ease: 'power2.out'
                });
            }).on('mouseleave', function() {
                gsap.to(this, {
                    scale: 1,
                    boxShadow: '0 8px 25px rgba(0, 33, 63, 0.15)',
                    duration: 0.2,
                    ease: 'power2.out'
                });
            });
        });

        // GSAP Animations
        window.addEventListener('load', function () {
            gsap.registerPlugin(ScrollTrigger);

            // Hero Parallax
            gsap.to('.hero-section', {
                backgroundPosition: '50% 60%',
                ease: 'none',
                scrollTrigger: {
                    trigger: '.hero-section',
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: 1
                }
            });

            // Section and Card Reveal
            gsap.utils.toArray('.gsap-animate').forEach((el) => {
                const delay = parseFloat(el.getAttribute('data-delay')) || 0;
                gsap.fromTo(el,
                    { opacity: 0, y: 20 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.8,
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
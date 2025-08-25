@extends('layouts.sidebar')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    @include('layouts.links')
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
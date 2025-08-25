@extends('layouts.sidebar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    @include('layouts.links')
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
  
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

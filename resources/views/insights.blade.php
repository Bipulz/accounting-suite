@extends('layouts.sidebar')

@section('styles')
    @include('layouts.links')
    <link rel="stylesheet" href="{{ asset('css/insights.css') }}">
@endsection

@section('content')
    <div class="rka-scope" style="margin: 0; padding: 0; overflow-x: hidden;">
        <main style="margin: 0; padding: 0; width: 100vw;">
            <!-- Hero Section (Simplified to single slide without slider) -->
            <section class="hero-section">
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
        </main>
    </div>
    @include('layouts.contactusform')
@endsection

@section('scripts')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- GSAP and ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script>
        // Article Redirect Logic
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.recent-articles-section .article-card').forEach(card => {
                card.addEventListener('click', function() {
                    const category = encodeURIComponent(this.dataset.category);
                    const title = encodeURIComponent(this.dataset.title);
                    const description = encodeURIComponent(this.dataset.description);
                    const author = encodeURIComponent(this.dataset.author);
                    const date = encodeURIComponent(this.dataset.date);
                    const readTime = encodeURIComponent(this.dataset.readTime);
                    const content = encodeURIComponent(this.dataset.content);
                    const tags = encodeURIComponent(this.dataset.tags);

                    // Redirect to article page with query parameters
                    window.location.href = `/article?category=${category}&title=${title}&description=${description}&author=${author}&date=${date}&readTime=${readTime}&content=${content}&tags=${tags}`;
                });
            });

            document.querySelectorAll('.btn-share').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('Share functionality to be implemented (e.g., social media sharing).');
                });
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
        });
    </script>
@endsection
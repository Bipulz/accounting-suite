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

        /* Blog Hero Section */
        .blog-hero-section {
            position: relative;
            height: 95vh;
            min-height: 550px;
            overflow: hidden;
            background: linear-gradient(135deg, rgba(0, 33, 63, 0.8), rgba(0, 144, 212, 0.7)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1920&h=1080') center/cover;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .blog-hero-section::before {
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
.blog-hero-content {
    text-align: center;
    max-width: 800px;
    width: 90%;
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 3rem;
    color: var(--white);
    background: rgba(0, 33, 63, 0.15);
    backdrop-filter: blur(10px);
    border-radius: 24px;
    box-shadow: 0 10px 40px rgba(0, 33, 63, 0.2);
}

        .blog-hero-content h1 {
            font-size: 3.8rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--white), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 8px rgba(0, 33, 63, 0.3);
        }

        .blog-hero-content p {
            font-size: 1.25rem;
            font-weight: 400;
            margin-bottom: 2rem;
            opacity: 0.9;
            line-height: 1.6;
        }

        /* Blog Articles Section */
        .blog-articles-section, .contribute-section {
            padding: 5rem 0;
            background: var(--white);
        }

        .blog-articles-section h2, .contribute-section h2 {
            font-size: 2.8rem;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .blog-articles-section .lead, .contribute-section .lead {
            font-size: 1.15rem;
            font-weight: 400;
            color: var(--gray);
            max-width: 900px;
            margin: 0 auto 2.5rem;
            text-align: center;
            line-height: 1.6;
        }

        .blog-card, .contribute-card {
            background: linear-gradient(145deg, var(--white), var(--lighter));
            border: 2px solid transparent;
            border-radius: 20px;
            box-shadow: 0 8px 30px var(--shadow);
            transition: var(--transition);
            overflow: hidden;
            position: relative;
            min-height: 380px;
        }

        .blog-card:hover, .contribute-card:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(0, 33, 63, 0.3);
        }

        .blog-card .content, .contribute-card .content {
            padding: 2rem;
        }

        .blog-card h3, .contribute-card h3 {
            font-size: 1.6rem;
            margin-bottom: 0.8rem;
        }

        .blog-card p, .contribute-card p {
            font-size: 1rem;
            color: var(--gray);
            font-weight: 400;
            margin-bottom: 1.2rem;
            line-height: 1.6;
        }

        .blog-card .btn-blog, .contribute-card .btn-contribute, .cta-section .btn-cta-filled {
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            font-weight: 600;
            padding: 0.7rem 1.8rem;
            border-radius: 50px;
            background: linear-gradient(90deg, var(--secondary), #00ccff);
            color: var(--white);
            border: none;
            box-shadow: 0 6px 20px rgba(0, 144, 212, 0.3);
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .blog-card .btn-blog:hover, .contribute-card .btn-contribute:hover, .cta-section .btn-cta-filled:hover {
            background: linear-gradient(90deg, #00ccff, var(--secondary));
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 144, 212, 0.3);
        }

        .blog-card .btn-blog i, .contribute-card .btn-contribute i, .cta-section .btn-cta-filled i {
            margin-left: 8px;
            transition: transform 0.3s;
        }

        .blog-card .btn-blog:hover i, .contribute-card .btn-contribute:hover i, .cta-section .btn-cta-filled:hover i {
            transform: translateX(4px);
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

        .cta-section .lead {
            font-size: 1.15rem;
            max-width: 800px;
            margin: 0 auto 2rem;
            text-align: center;
            line-height: 1.6;
        }

        /* Responsive */
        @media (min-width: 1400px) {
            .section-container {
                max-width: 1320px;
            }
        }

        @media (max-width: 991px) {
            .blog-hero-section {
                height: 75vh;
                min-height: 500px;
            }
            .blog-hero-content h1 {
                font-size: 3.2rem;
            }
            .blog-hero-content p {
                font-size: 1.1rem;
            }
            .blog-articles-section, .contribute-section, .cta-section {
                padding: 4rem 0;
            }
            .blog-articles-section h2, .contribute-section h2, .cta-section h2 {
                font-size: 2.4rem;
            }
            .blog-articles-section .lead, .contribute-section .lead, .cta-section .lead {
                font-size: 1.05rem;
            }
            .blog-card, .contribute-card {
                min-height: 360px;
            }
            .blog-card .content, .contribute-card .content {
                padding: 1.5rem;
            }
            .blog-card h3, .contribute-card h3 {
                font-size: 1.4rem;
            }
            .blog-card p, .contribute-card p {
                font-size: 0.9rem;
            }
            .blog-card .btn-blog, .contribute-card .btn-contribute, .cta-section .btn-cta-filled {
                padding: 0.6rem 1.5rem;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 767px) {
            .blog-hero-section {
                height: 65vh;
                min-height: 450px;
            }
            .blog-hero-content {
                padding: 2rem;
            }
            .blog-hero-content h1 {
                font-size: 2.8rem;
            }
            .blog-hero-content p {
                font-size: 1rem;
            }
            .blog-articles-section, .contribute-section, .cta-section {
                padding: 3.5rem 0;
            }
            .blog-articles-section h2, .contribute-section h2, .cta-section h2 {
                font-size: 2rem;
            }
            .blog-articles-section .lead, .contribute-section .lead, .cta-section .lead {
                font-size: 0.95rem;
            }
            .blog-card, .contribute-card {
                min-height: 340px;
            }
            .blog-card .content, .contribute-card .content {
                padding: 1.2rem;
            }
            .blog-card h3, .contribute-card h3 {
                font-size: 1.3rem;
            }
            .blog-card p, .contribute-card p {
                font-size: 0.85rem;
            }
            .blog-card .btn-blog, .contribute-card .btn-contribute, .cta-section .btn-cta-filled {
                padding: 0.6rem 1.4rem;
                font-size: 0.85rem;
                width: 100%;
                max-width: 280px;
            }
        }

        @media (max-width: 576px) {
            .blog-hero-section {
                height: 60vh;
                min-height: 400px;
            }
            .blog-hero-content {
                padding: 1.5rem;
            }
            .blog-hero-content h1 {
                font-size: 2.2rem;
            }
            .blog-hero-content p {
                font-size: 0.9rem;
            }
            .blog-articles-section, .contribute-section, .cta-section {
                padding: 3rem 0;
            }
            .blog-articles-section h2, .contribute-section h2, .cta-section h2 {
                font-size: 1.8rem;
            }
            .blog-articles-section .lead, .contribute-section .lead, .cta-section .lead {
                font-size: 0.9rem;
            }
            .blog-card, .contribute-card {
                min-height: 320px;
            }
            .blog-card .content, .contribute-card .content {
                padding: 1rem;
            }
            .blog-card h3, .contribute-card h3 {
                font-size: 1.2rem;
            }
            .blog-card p, .contribute-card p {
                font-size: 0.8rem;
            }
            .blog-card .btn-blog, .contribute-card .btn-contribute, .cta-section .btn-cta-filled {
                padding: 0.5rem 1.3rem;
                font-size: 0.8rem;
                max-width: 260px;
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
            <!-- Blog Hero Section -->
            <section class="blog-hero-section">
                <div class="blog-hero-content gsap-animate">
                    <h1>Blog Articles</h1>
                    <p>Read our latest blog posts covering industry trends, regulatory updates, and business insights.</p>
                </div>
            </section>

            <!-- Blog Articles Section -->
            <section class="blog-articles-section" id="blog-articles">
                <div class="section-container">
                    <h2 class="gsap-animate">Latest Posts</h2>
                    <p class="lead gsap-animate">Stay informed with our expert insights and updates.</p>
                    <div class="row g-4">
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate">
                            <div class="blog-card">
                                <div class="content">
                                    <h3>Navigating Tax Reforms in 2025</h3>
                                    <p>Explore the latest tax regulatory changes and how they impact your business strategy.</p>
                                    <a href="#read-more" class="btn-blog">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.2">
                            <div class="blog-card">
                                <div class="content">
                                    <h3>Technology Trends in Accounting</h3>
                                    <p>Discover how AI and automation are transforming the accounting industry.</p>
                                    <a href="#read-more" class="btn-blog">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.4">
                            <div class="blog-card">
                                <div class="content">
                                    <h3>Building a Resilient Business</h3>
                                    <p>Learn strategies to strengthen your business against economic uncertainties.</p>
                                    <a href="#read-more" class="btn-blog">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Share Your Expertise Section -->
            <section class="contribute-section" id="contribute">
                <div class="section-container">
                    <h2 class="gsap-animate">Share Your Expertise</h2>
                    <p class="lead gsap-animate">Are you an industry expert with valuable insights to share? We welcome guest contributions from accounting professionals, business leaders, and industry specialists. Join our community of thought leaders and help shape the conversation.</p>
                    <div class="row g-4">
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate">
                            <div class="contribute-card">
                                <div class="content">
                                    <h3>Write for Us</h3>
                                    <p>Share your expertise through guest articles and thought leadership pieces.</p>
                                    <a href="#contact" class="btn-contribute">Submit Article <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.2">
                            <div class="contribute-card">
                                <div class="content">
                                    <h3>Expert Interviews</h3>
                                    <p>Participate in interviews and panel discussions on industry topics.</p>
                                    <a href="#contact" class="btn-contribute">Join Discussion <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 gsap-animate" data-delay="0.4">
                            <div class="contribute-card">
                                <div class="content">
                                    <h3>Case Studies</h3>
                                    <p>Contribute real-world case studies and success stories from your experience.</p>
                                    <a href="#contact" class="btn-contribute">Share Story <i class="fas fa-arrow-right"></i></a>
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
                    <p class="lead gsap-animate">Ready to contribute or learn more? Contact us to join our community of thought leaders.</p>
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
            $('.blog-card, .contribute-card').on('mouseenter', function() {
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

            // Button Click Animation
            $('.btn-blog, .btn-contribute, .btn-cta-filled').on('mousedown', function() {
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
            gsap.to('.blog-hero-section', {
                backgroundPosition: '50% 70%',
                ease: 'none',
                scrollTrigger: {
                    trigger: '.blog-hero-section',
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
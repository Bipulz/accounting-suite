@extends('layouts.sidebar')

@section('styles')
    @include('layouts.links')
    <link rel="stylesheet" href="{{ asset('css/article.css') }}">
    
   
@endsection

@section('content')
    <div class="rka-scope" style="margin: 0; padding: 0; overflow-x: hidden;">
        <main style="margin: 0; padding: 0; width: 100vw;">
            <section class="section-container">
                <div class="article-content">
                    <p class="lead gsap-animate" id="content">Understanding Environmental, Social, and Governance reporting requirements and best practices for sustainable business operations.</p>
                    <div class="content gsap-animate">Environmental, Social, and Governance (ESG) reporting has moved from a voluntary initiative to a business imperative. Companies worldwide are facing increasing pressure from investors, regulators, and stakeholders to demonstrate their commitment to sustainable practices.</div>
                    <div class="tags gsap-animate">
                        <strong>Related Tags</strong>
                        <a href="#" class="tag">#ESG</a>
                        <a href="#" class="tag">#sustainability</a>
                        <a href="#" class="tag">#reporting</a>
                        <a href="#" class="tag">#governance</a>
                    </div>
                    <div class="share gsap-animate">
                        <a href="#" class="btn-share">Share this insight <i class="fas fa-share-alt"></i></a>
                    </div>
                    <a href="/insights" class="back-link gsap-animate"><i class="fas fa-arrow-left"></i> Back to Insights</a>
                    <div class="toc gsap-animate">
                        <h4>Table of Contents</h4>
                        <p>No headings found</p>
                    </div>
                    <div class="cta-section gsap-animate">
                        <h3>Ready to Partner with Industry Experts?</h3>
                        <p>Whether you're looking to optimize operations, ensure compliance, or drive growth, our industry-specialized teams are ready to help you achieve your goals.</p>
                        <div class="cta-buttons">
                            <a href="#contact" class="btn-cta-filled">Schedule a Consultation <i class="fas fa-arrow-right"></i></a>
                            <a href="#services" class="btn-cta-outline">Explore Our Services <i class="fas fa-arrow-right"></i></a>
                        </div>
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
        // Share Button Functionality
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.btn-share').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    if (navigator.share) {
                        navigator.share({
                            title: 'ESG Reporting: A Growing Imperative for Businesses',
                            text: 'Learn about ESG reporting and sustainable business practices.',
                            url: window.location.href
                        }).catch(err => console.log('Share failed:', err));
                    } else {
                        alert('Share functionality not supported. Copy the link to share!');
                    }
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
                                start: 'top 90%',
                                once: true,
                                invalidateOnRefresh: true
                            }
                        }
                    );
                });
            });
        });
    </script>
@endsection
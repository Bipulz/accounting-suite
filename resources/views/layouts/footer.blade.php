<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Enhanced Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        .rka-footer-scope {
            --primary: #0f172a;
            --secondary: #1e293b;
            --accent: #3b82f6;
            --accent-hover: #2563eb;
            --white: #ffffff;
            --gray: #cbd5e1;
            --gray-light: #e2e8f0;
            --shadow: rgba(15, 23, 42, 0.2);
            --shadow-glow: rgba(59, 130, 246, 0.3);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--white);
        }

        .rka-footer-scope .footer * {
            box-sizing: border-box;
        }

        .rka-footer-scope .footer {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 50%, #334155 100%);
            padding: clamp(2rem, 5vw, 4rem) 0 clamp(1.5rem, 4vw, 3rem);
            position: relative;
            width: 100%;
            z-index: 10;
            overflow: hidden;
        }

        .rka-footer-scope .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 200%;
            height: 200%;
            background: 
                radial-gradient(circle at 20% 20%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(147, 51, 234, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 40% 60%, rgba(16, 185, 129, 0.06) 0%, transparent 50%);
            animation: gradientShift 20s ease-in-out infinite;
            z-index: 0;
        }

        @keyframes gradientShift {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(-5%, -5%) rotate(120deg); }
            66% { transform: translate(5%, 5%) rotate(240deg); }
        }

        .rka-footer-scope .footer::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--accent), transparent);
            opacity: 0.6;
        }

        .rka-footer-scope .section-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 clamp(1rem, 4vw, 2rem);
            position: relative;
            z-index: 1;
        }

        .rka-footer-scope .footer h3 {
            font-family: 'Lora', serif;
            font-weight: 700;
            font-size: clamp(1.2rem, 3vw, 1.5rem);
            color: var(--white);
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.75rem;
            letter-spacing: -0.025em;
        }

        .rka-footer-scope .footer h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--accent), var(--accent-hover));
            border-radius: 2px;
            box-shadow: 0 0 10px var(--shadow-glow);
        }

        .rka-footer-scope .footer p, 
        .rka-footer-scope .footer a {
            font-size: clamp(0.8rem, 2.5vw, 0.9rem);
            color: var(--gray);
            line-height: 1.7;
            transition: var(--transition);
            font-weight: 400;
        }

        .rka-footer-scope .footer p {
            opacity: 0.9;
        }

        .rka-footer-scope .footer a:hover {
            color: var(--white);
            transform: translateX(4px);
        }

        .rka-footer-scope .footer-links {
            space-y: 0.75rem;
        }

        .rka-footer-scope .footer-links a {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
            position: relative;
            padding: 0.5rem 0;
            border-radius: 6px;
            transition: var(--transition);
        }

        .rka-footer-scope .footer-links a::before {
            content: '';
            position: absolute;
            left: -0.5rem;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: var(--transition);
            border-radius: 1px;
        }

        .rka-footer-scope .footer-links a:hover::before {
            width: 1rem;
        }

        .rka-footer-scope .footer-links a:hover {
            background: rgba(59, 130, 246, 0.05);
            padding-left: 1rem;
            color: var(--white);
        }

        .rka-footer-scope .social-icons {
            display: flex;
            gap: clamp(0.5rem, 2vw, 1rem);
            margin-top: 2rem;
            flex-wrap: wrap;
            justify-content: flex-start;
        }

        .rka-footer-scope .social-icons a {
            font-size: clamp(0.9rem, 2.5vw, 1.1rem);
            color: var(--gray);
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: clamp(40px, 10vw, 52px);
            height: clamp(40px, 10vw, 52px);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
            touch-action: manipulation;
        }

        .rka-footer-scope .social-icons a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, var(--accent), var(--accent-hover));
            opacity: 0;
            transition: var(--transition);
            z-index: -1;
        }

        .rka-footer-scope .social-icons a:hover {
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px var(--shadow-glow);
            border-color: var(--accent);
        }

        .rka-footer-scope .social-icons a:hover::before {
            opacity: 1;
        }

        .rka-footer-scope .newsletter {
            margin-top: 2rem;
        }

        .rka-footer-scope .newsletter p {
            margin-bottom: 1.5rem;
            font-size: clamp(0.85rem, 2.5vw, 0.95rem);
        }

        .rka-footer-scope .newsletter form {
            display: flex;
            max-width: 400px;
            border-radius: 16px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            transition: var(--transition);
        }

        .rka-footer-scope .newsletter form:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(59, 130, 246, 0.3);
            box-shadow: 0 12px 40px rgba(59, 130, 246, 0.15);
        }

        .rka-footer-scope .newsletter input {
            padding: clamp(0.75rem, 3vw, 1.25rem) clamp(1rem, 3vw, 1.5rem);
            border: none;
            background: transparent;
            color: var(--white);
            font-size: clamp(0.8rem, 2.5vw, 0.9rem);
            width: 100%;
            outline: none;
            font-weight: 400;
        }

        .rka-footer-scope .newsletter input::placeholder {
            color: rgba(255, 255, 255, 0.5);
            font-weight: 300;
        }

        .rka-footer-scope .newsletter button {
            padding: clamp(0.75rem, 3vw, 1.25rem) clamp(1rem, 4vw, 2rem);
            border: none;
            background: linear-gradient(135deg, var(--accent), var(--accent-hover));
            color: var(--white);
            font-size: clamp(0.8rem, 2.5vw, 0.9rem);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            letter-spacing: 0.025em;
            white-space: nowrap;
        }

        .rka-footer-scope .newsletter button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .rka-footer-scope .newsletter button:hover::before {
            left: 100%;
        }

        .rka-footer-scope .newsletter button:hover {
            background: linear-gradient(135deg, var(--accent-hover), var(--accent));
            transform: translateY(-1px);
            box-shadow: 0 10px 25px var(--shadow-glow);
        }

        .rka-footer-scope .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: clamp(1.5rem, 4vw, 2.5rem);
            margin-top: clamp(2rem, 5vw, 4rem);
            text-align: center;
            position: relative;
        }

        .rka-footer-scope .footer-bottom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--accent), transparent);
        }

        .rka-footer-scope .footer-bottom p {
            font-size: clamp(0.75rem, 2.5vw, 0.85rem);
            color: var(--gray);
            font-weight: 300;
            margin-top: 1rem;
        }

        .rka-footer-scope .company-tagline {
            font-style: italic;
            color: var(--accent);
            font-weight: 500;
            margin-top: 1rem;
            opacity: 0.8;
            font-size: clamp(0.8rem, 2.5vw, 0.9rem);
        }

        /* Enhanced Grid Layout */
        .rka-footer-scope .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: clamp(1.5rem, 4vw, 2.5rem);
        }

        /* Floating Elements Animation */
        .rka-footer-scope .floating-element {
            animation: floating 6s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .rka-footer-scope .footer-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: clamp(1.5rem, 3vw, 2rem);
            }
            .rka-footer-scope .newsletter form {
                max-width: 100%;
            }
        }

        @media (max-width: 768px) {
            .rka-footer-scope .footer {
                padding: clamp(2rem, 5vw, 3rem) 0 clamp(1.5rem, 4vw, 2rem);
            }
            .rka-footer-scope .section-container {
                padding: 0 clamp(0.75rem, 3vw, 1.5rem);
            }
            .rka-footer-scope .footer-grid {
                grid-template-columns: 1fr;
                gap: clamp(1.5rem, 4vw, 2rem);
                text-align: center;
            }
            .rka-footer-scope .footer h3::after {
                left: 50%;
                transform: translateX(-50%);
            }
            .rka-footer-scope .social-icons {
                justify-content: center;
            }
            .rka-footer-scope .newsletter form {
                flex-direction: column;
                max-width: 100%;
                border-radius: 12px;
            }
            .rka-footer-scope .newsletter input {
                width: 100%;
                border-radius: 12px 12px 0 0;
                padding: clamp(0.75rem, 3vw, 1rem);
            }
            .rka-footer-scope .newsletter button {
                border-radius: 0 0 12px 12px;
                padding: clamp(0.75rem, 3vw, 1rem);
            }
            .rka-footer-scope .footer-links a {
                justify-content: center;
            }
            .rka-footer-scope .footer-links a::before {
                display: none;
            }
            .rka-footer-scope .footer-links a:hover {
                padding-left: 0;
            }
        }

        @media (max-width: 576px) {
            .rka-footer-scope .footer {
                padding: clamp(1.5rem, 5vw, 2rem) 0 clamp(1rem, 4vw, 1.5rem);
            }
            .rka-footer-scope .section-container {
                padding: 0 clamp(0.5rem, 2vw, 1rem);
            }
            .rka-footer-scope .footer h3 {
                font-size: clamp(1.1rem, 3vw, 1.3rem);
            }
            .rka-footer-scope .social-icons a {
                width: clamp(36px, 8vw, 44px);
                height: clamp(36px, 8vw, 44px);
                font-size: clamp(0.8rem, 2.5vw, 1rem);
            }
            .rka-footer-scope .newsletter input {
                font-size: clamp(0.75rem, 2.5vw, 0.85rem);
            }
            .rka-footer-scope .newsletter button {
                font-size: clamp(0.75rem, 2.5vw, 0.85rem);
            }
        }

        @media (max-width: 360px) {
            .rka-footer-scope .footer-grid {
                gap: clamp(1rem, 3vw, 1.5rem);
            }
            .rka-footer-scope .social-icons {
                gap: clamp(0.5rem, 2vw, 0.75rem);
            }
        }

        /* Touch Device Optimizations */
        @media (hover: none) {
            .rka-footer-scope .footer a:hover,
            .rka-footer-scope .social-icons a:hover,
            .rka-footer-scope .newsletter button:hover {
                transform: none;
                box-shadow: none;
            }
            .rka-footer-scope .footer-links a:hover::before {
                width: 0;
            }
            .rka-footer-scope .newsletter button::before {
                display: none;
            }
        }

        /* Accessibility Improvements */
        @media (prefers-reduced-motion: reduce) {
            .rka-footer-scope .footer::before,
            .rka-footer-scope .floating-element {
                animation: none;
            }
            .rka-footer-scope * {
                transition: none;
            }
        }

        /* High Contrast Mode */
        @media (prefers-contrast: high) {
            .rka-footer-scope {
                --primary: #000000;
                --secondary: #1a1a1a;
                --accent: #ffffff;
                --white: #ffffff;
                --gray: #cccccc;
            }
        }
    </style>
</head>
<body>
    <div class="rka-footer-scope">
        <footer class="footer">
            <div class="section-container">
                <div class="footer-grid">
                    <div class="gsap-animate floating-element">
                        <h3>About Us</h3>
                        <p>Roshan Kumar & Associates is a premier chartered accountancy firm in Nepal, delivering expert audit, tax, risk advisory, and consulting services for sustainable growth.</p>
                        <p class="company-tagline">Your trusted partner for financial excellence.</p>
                        <div class="social-icons">
                            <a href="#" title="LinkedIn" aria-label="Follow us on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" title="Twitter" aria-label="Follow us on Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" title="Facebook" aria-label="Follow us on Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" title="Instagram" aria-label="Follow us on Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    
                    <div class="gsap-animate">
                        <h3>Services</h3>
                        <div class="footer-links">
                            <a href="/services">Audit & Assurance</a>
                            <a href="/services">Tax Advisory</a>
                            <a href="/services">Risk Advisory</a>
                            <a href="/services">Business Consulting</a>
                            <a href="/services">Financial Planning</a>
                        </div>
                    </div>
                    
                    <div class="gsap-animate">
                        <h3>Quick Links</h3>
                        <div class="footer-links">
                            <a href="/industries">Industries</a>
                            <a href="/about">About Us</a>
                            <a href="/careers">Careers</a>
                            <a href="/contact">Contact Us</a>
                            <a href="/blog">Insights</a>
                        </div>
                    </div>
                    
                    <div class="gsap-animate floating-element">
                        <h3>Stay Connected</h3>
                        <p>Subscribe to receive the latest insights, industry updates, and expert analysis from our team of professionals.</p>
                        <div class="newsletter">
                            <form onsubmit="handleNewsletterSubmit(event)" role="form" aria-label="Newsletter subscription">
                                <input type="email" placeholder="Enter your email address" required aria-label="Email address">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="footer-bottom gsap-animate">
                    <p>© 2025 Roshan Kumar & Associates. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Register ScrollTrigger plugin
            gsap.registerPlugin(ScrollTrigger);
            
            // Enhanced GSAP Animations for Footer
            gsap.fromTo('.rka-footer-scope .gsap-animate', 
                { 
                    opacity: 0, 
                    y: 50,
                    scale: 0.95
                },
                {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    duration: 1.2,
                    stagger: 0.2,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.rka-footer-scope .footer',
                        start: 'top 90%',
                        toggleActions: 'play none none none'
                    }
                }
            );

            // Social icons interaction
            const socialIcons = document.querySelectorAll('.social-icons a');
            socialIcons.forEach(icon => {
                icon.addEventListener('mouseenter', () => {
                    if (!window.matchMedia('(hover: none)').matches) {
                        gsap.to(icon, { scale: 1.1, duration: 0.3, ease: 'back.out(1.7)' });
                    }
                });
                
                icon.addEventListener('mouseleave', () => {
                    gsap.to(icon, { scale: 1, duration: 0.3, ease: 'back.out(1.7)' });
                });
                
                icon.addEventListener('click', () => {
                    gsap.to(icon, { scale: 0.95, duration: 0.1, yoyo: true, repeat: 1 });
                });
            });

            // Newsletter form interaction
            const newsletterInput = document.querySelector('.newsletter input');
            const newsletterForm = document.querySelector('.newsletter form');
            
            if (newsletterInput && newsletterForm) {
                newsletterInput.addEventListener('focus', () => {
                    if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                        gsap.to(newsletterForm, { scale: 1.02, duration: 0.3 });
                    }
                });
                
                newsletterInput.addEventListener('blur', () => {
                    gsap.to(newsletterForm, { scale: 1, duration: 0.3 });
                });
            }
        });

        // Newsletter Form Handler
        function handleNewsletterSubmit(event) {
            event.preventDefault();
            const email = event.target.querySelector('input').value;
            const button = event.target.querySelector('button');
            
            if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                gsap.to(button, { scale: 0.95, duration: 0.1, yoyo: true, repeat: 1 });
            }
            
            button.textContent = 'Subscribed!';
            button.style.background = 'linear-gradient(135deg, #10b981, #059669)';
            
            setTimeout(() => {
                button.textContent = 'Subscribe';
                button.style.background = '';
                event.target.reset();
            }, 2000);
            
            console.log('Newsletter subscription:', email);
        }

        // Performance optimization for reduced motion
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            gsap.globalTimeline.clear();
        }
    </script>
</body>
</html>
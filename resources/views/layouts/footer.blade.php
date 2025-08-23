<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        .rka-footer-scope {
            --primary: #001828;
            --secondary: #004a6e;
            --accent: #00a3e0;
            --white: #ffffff;
            --gray: #a0aec0;
            --shadow: rgba(0, 24, 40, 0.15);
            --transition: all 0.2s ease;
            font-family: 'Roboto', sans-serif;
            color: var(--white);
        }

        .rka-footer-scope .footer * {
            box-sizing: border-box;
        }

        .rka-footer-scope .footer {
            background: linear-gradient(180deg, var(--primary), var(--secondary));
            padding: 4rem 0 2.5rem;
            position: relative;
            width: 100%;
            z-index: 10;
        }

        .rka-footer-scope .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.05) 0%, transparent 70%);
            opacity: 0.4;
            z-index: 0;
        }

        .rka-footer-scope .section-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }

        .rka-footer-scope .footer h3 {
            font-family: 'Lora', serif;
            font-weight: 700;
            font-size: 1.4rem;
            color: var(--white);
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .rka-footer-scope .footer h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--accent);
        }

        .rka-footer-scope .footer p, 
        .rka-footer-scope .footer a {
            font-size: 0.85rem;
            color: var(--white);
            opacity: 0.9;
            transition: var(--transition);
        }

        .rka-footer-scope .footer a:hover {
            color: var(--accent);
            opacity: 1;
        }

        .rka-footer-scope .footer-links a {
            display: block;
            margin-bottom: 0.5rem;
            position: relative;
        }

        .rka-footer-scope .footer-links a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--accent);
            transition: width 0.2s ease;
        }

        .rka-footer-scope .footer-links a:hover::after {
            width: 100%;
        }

        .rka-footer-scope .social-icons a {
            font-size: 1.25rem;
            margin-right: 1rem;
            color: var(--white);
            opacity: 0.9;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            border-radius: 50%;
        }

        .rka-footer-scope .social-icons a:hover {
            color: var(--accent);
            opacity: 1;
            transform: scale(1.1);
            box-shadow: 0 0 6px rgba(0, 163, 224, 0.5);
        }

        .rka-footer-scope .newsletter form {
            display: flex;
            max-width: 360px;
            border-radius: 9999px;
            overflow: hidden;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.1));
        }

        .rka-footer-scope .newsletter input {
            padding: 1rem 1.5rem;
            border: none;
            background: transparent;
            color: var(--white);
            font-size: 0.85rem;
            width: 70%;
            outline: none;
        }

        .rka-footer-scope .newsletter input:focus {
            box-shadow: 0 0 5px rgba(0, 163, 224, 0.5);
        }

        .rka-footer-scope .newsletter input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .rka-footer-scope .newsletter button {
            padding: 1.1rem 1.5rem;
            border: none;
            background: linear-gradient(90deg, var(--secondary), var(--accent));
            color: var(--white);
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            border-radius: 0 9999px 9999px 0;
            transition: var(--transition);
        }

        .rka-footer-scope .newsletter button:hover {
            background: linear-gradient(90deg, var(--accent), var(--secondary));
            box-shadow: 0 4px 12px rgba(0, 163, 224, 0.4);
        }

        .rka-footer-scope .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 2rem;
            margin-top: 4rem;
            text-align: center;
            font-size: 0.8rem;
            color: var(--gray);
        }

        @media (max-width: 1024px) {
            .rka-footer-scope .footer {
                padding: 3rem 0 2rem;
            }
            .rka-footer-scope .section-container {
                padding: 0 20px;
            }
        }

        @media (max-width: 768px) {
            .rka-footer-scope .footer h3 {
                font-size: 1.3rem;
                text-align: center;
            }
            .rka-footer-scope .footer h3::after {
                left: 50%;
                transform: translateX(-50%);
            }
            .rka-footer-scope .footer p, 
            .rka-footer-scope .footer a {
                font-size: 0.8rem;
            }
            .rka-footer-scope .social-icons {
                justify-content: center;
                gap: 1.25rem;
            }
            .rka-footer-scope .newsletter form {
                flex-direction: column;
                max-width: 100%;
                background: none;
            }
            .rka-footer-scope .newsletter input {
                border-radius: 9999px;
                width: 100%;
                margin-bottom: 0.75rem;
                background: rgba(255, 255, 255, 0.15);
            }
            .rka-footer-scope .newsletter button {
                border-radius: 9999px;
            }
            .rka-footer-scope .footer-links {
                text-align: center;
            }
        }

        @media (max-width: 576px) {
            .rka-footer-scope .footer {
                padding: 2rem 0 1.5rem;
            }
            .rka-footer-scope .section-container {
                padding: 0 16px;
            }
            .rka-footer-scope .footer h3 {
                font-size: 1.2rem;
            }
            .rka-footer-scope .footer p, 
            .rka-footer-scope .footer a {
                font-size: 0.75rem;
            }
            .rka-footer-scope .social-icons a {
                font-size: 1.1rem;
                width: 40px;
                height: 40px;
            }
            .rka-footer-scope .footer-bottom {
                font-size: 0.75rem;
            }
        }
    </style>
</head>
<body>
    <div class="rka-footer-scope">
        <footer class="footer">
            <div class="section-container">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                    <div class="col-span-1 md:col-span-1">
                        <h3>About Us</h3>
                        <p>Roshan Kumar & Associates is a premier chartered accountancy firm in Nepal, delivering expert audit, tax, risk advisory, and consulting services for sustainable growth.</p>
                        <p class="text-sm opacity-80 mt-2">Your trusted partner for financial excellence.</p>
                        <div class="social-icons flex mt-4 gsap-animate">
                            <a href="{{ $footerSetting->social_links['linkedin'] ?? '#' }}" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                            <a href="{{ $footerSetting->social_links['twitter'] ?? '#' }}" title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $footerSetting->social_links['facebook'] ?? '#' }}" title="Facebook"><i class="fab fa-facebook"></i></a>
                            <a href="{{ $footerSetting->social_links['instagram'] ?? '#' }}" title="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-span-1 md:col-span-1">
                        <h3>Services</h3>
                    <div class="footer-links gsap-animate">
    <a href="/services">Audit & Assurance</a>
    <a href="/services">Tax Advisory</a>
    <a href="/services">Risk Advisory</a>
    <a href="/services">Business Consulting</a>
</div>
</div>
<div class="col-span-1 md:col-span-1">
    <h3>Quick Links</h3>
    <div class="footer-links gsap-animate">
        <a href="/industries">Industries</a>
        <a href="/about">About</a>
        <a href="/careers">Careers</a>
        <a href="/contact">Contact Us</a>
    </div>
</div>
                    <div class="col-span-1 md:col-span-1">
                        <h3>Stay Connected</h3>
                        <p>Receive the latest insights and updates from our team.</p>
                        <div class="newsletter mt-4 gsap-animate">
                            <form onsubmit="handleNewsletterSubmit(event)">
                                <input type="email" placeholder="Enter your email" required>
                                <button type="submit">Join Us</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom gsap-animate">
                    <p>Copyright © 2025 Roshan Kumar & Associates</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // GSAP Animations for Footer
            gsap.fromTo('.rka-footer-scope .gsap-animate', 
                { opacity: 0, y: 30 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                    stagger: 0.15,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.rka-footer-scope .footer',
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });

        // Newsletter Form Handler
        function handleNewsletterSubmit(event) {
            event.preventDefault();
            const email = event.target.querySelector('input').value;
            console.log('Newsletter subscription:', email);
            alert('Joined with email: ' + email);
            event.target.reset();
        }
    </script>
</body>
</html>
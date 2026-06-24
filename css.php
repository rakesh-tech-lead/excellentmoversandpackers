<style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary-color: #0056b3;
            --primary-dark: #003d80;
            --secondary-color: #00a86b;
            --secondary-dark: #008857;
            --accent-color: #ffc107;
            --whatsapp: #25d366;
            --dark-color: #1f2733;
            --light-color: #f4f7fb;
            --text-color: #4a5568;
            --muted: #718096;
            --white: #fff;
            --border: #e2e8f0;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 10px 25px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 20px 45px rgba(0, 0, 0, 0.12);
            --primary-gradient: linear-gradient(135deg, #0056b3, #0072e8);
            --radius: 14px;
            --transition: all 0.3s ease;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4 {
            color: var(--dark-color);
            margin-bottom: 1rem;
        }
        
        h1 {
            font-size: 2.5rem;
        }
        
        h2 {
            font-size: 2rem;
            position: relative;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }
        
        h2:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--secondary-color);
        }
        
        p {
            margin-bottom: 1rem;
        }
        
        a {
            text-decoration: none;
            color: var(--primary-color);
            transition: var(--transition);
        }
        
        a:hover {
            color: var(--secondary-color);
        }
        
        img {
            max-width: 100%;
            height: auto;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background: var(--primary-color);
            color: var(--white);
            padding: 13px 28px;
            border: 2px solid transparent;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            line-height: 1.2;
        }

        .btn:hover {
            background: var(--primary-dark);
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
        }

        .btn-secondary {
            background: var(--secondary-color);
        }

        .btn-secondary:hover {
            background: var(--secondary-dark);
        }

        .btn-accent {
            background: var(--accent-color);
            color: var(--dark-color);
        }

        .btn-accent:hover {
            background: #e6ac00;
            color: var(--dark-color);
        }

        .btn-whatsapp {
            background: var(--whatsapp);
        }

        .btn-whatsapp:hover {
            background: #1da851;
        }

        .btn-outline {
            background: transparent;
            border-color: rgba(255, 255, 255, 0.7);
            color: var(--white);
        }

        .btn-outline:hover {
            background: var(--white);
            color: var(--primary-color);
            border-color: var(--white);
        }
        
        .text-center {
            text-align: center;
        }
        
        .section {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        /* Header Styles */
        header {
            background-color: var(--white);
            box-shadow: var(--shadow);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 12px;
            padding-bottom: 12px;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo h1 {
            font-size: 1.5rem;
            margin: 0;
            color: var(--primary-color);
        }
        
        .logo span {
            color: var(--secondary-color);
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 30px;
        }
        
        nav ul li a {
            color: var(--dark-color);
            font-weight: 600;
            position: relative;
        }
        
        nav ul li a:after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary-color);
            transition: var(--transition);
        }
        
        nav ul li a:hover:after {
            width: 100%;
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark-color);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(13, 27, 51, 0.78), rgba(13, 27, 51, 0.85)), url('/Excellent-Professional-Moving-and-Packing-Services-in-Visakhapatnam.jpeg?height=800&width=1600') no-repeat center center/cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            text-align: center;
            color: var(--white);
            margin-top: 122px;
            padding: 60px 0;
        }

        .hero-content {
            max-width: 850px;
            margin: 0 auto;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: #fff;
            padding: 7px 18px;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 22px;
            backdrop-filter: blur(6px);
        }

        .hero h1 {
            font-size: 3.4rem;
            line-height: 1.18;
            margin-bottom: 20px;
            color: var(--white);
        }

        .hero h1 .accent {
            color: var(--accent-color);
        }

        .hero p {
            font-size: 1.18rem;
            margin-bottom: 32px;
            color: rgba(255, 255, 255, 0.9);
            max-width: 680px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-cta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .hero-trust {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px 28px;
            margin-top: 34px;
            color: rgba(255, 255, 255, 0.92);
            font-size: 0.95rem;
            font-weight: 500;
        }

        .hero-trust span {
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .hero-trust .tick {
            color: var(--secondary-color);
            font-weight: 700;
        }
        
        /* Services Section */
        .services {
            background-color: var(--light-color);
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .service-img {
            height: 200px;
            overflow: hidden;
        }
        
        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .service-card:hover .service-img img {
            transform: scale(1.1);
        }
        
        .service-content {
            padding: 20px;
        }
        
        .service-content h3 {
            color: var(--primary-color);
            margin-bottom: 10px;
        }
        
        /* About Section */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }
        
        .about-img {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        .about-content h2:after {
            left: 0;
            transform: none;
        }
        
        /* Why Choose Us */
        .why-us {
            background-color: var(--light-color);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background: var(--white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: var(--transition);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .feature-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        /* Testimonials */
        .testimonials {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('/safe-packers-and-movers-in-visakhapatnam.jpeg?height=600&width=1200') no-repeat center center/cover;
            color: var(--white);
        }
        
        .testimonials h2 {
            color: var(--white);
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
        }
        
        .client-info {
            display: flex;
            align-items: center;
        }
        
        .client-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .client-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 15px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.3rem;
            color: #fff;
            background: var(--secondary-color);
        }
        
        .client-name {
            font-weight: 600;
        }
        
        /* Service Areas */
        .service-areas {
            background-color: var(--white);
        }
        
        .areas-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        
        .area-item {
            background: var(--light-color);
            padding: 15px 25px;
            border-radius: 30px;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .area-item:hover {
            background: var(--primary-color);
            color: var(--white);
        }
        
        /* Contact Section */
        .contact {
            background-color: var(--light-color);
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }
        
        .contact-info h3 {
            margin-bottom: 20px;
        }
        
        .contact-detail {
            display: flex;
            margin-bottom: 20px;
        }
        
        .contact-icon {
            margin-right: 15px;
            color: var(--primary-color);
            font-size: 1.5rem;
        }
        
        .contact-form {
            background: var(--white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
        }
        
        textarea.form-control {
            height: 150px;
            resize: none;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: var(--white);
            padding: 50px 0 20px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .footer-col h3 {
            color: var(--white);
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-col h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--secondary-color);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #ccc;
        }
        
        .footer-links a:hover {
            color: var(--secondary-color);
            padding-left: 5px;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            color: var(--white);
            transition: var(--transition);
        }
        
        .social-links a:hover {
            background: var(--secondary-color);
            transform: translateY(-5px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #aaa;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            h1 {
                font-size: 2rem;
            }
            
            h2 {
                font-size: 1.8rem;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .about-grid, .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .about-img {
                order: -1;
            }
        }
        
        @media (max-width: 992px) {
            .mobile-menu-btn {
                display: block;
            }
            
            nav {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 80%;
                height: calc(100vh - 70px);
                background: var(--white);
                transition: var(--transition);
                box-shadow: var(--shadow);
            }
            
            nav.active {
                left: 0;
            }
            
            nav ul {
                flex-direction: column;
                padding: 30px;
            }
            
            nav ul li {
                margin: 0 0 20px 0;
            }
            
            .hero {
                height: auto;
                min-height: 100vh;
                padding: 100px 0;
            }
            
            .section {
                padding: 60px 0;
            }
        }
        
        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .btn {
                padding: 10px 20px;
                font-size: 0.8rem;
            }
            
            .service-card, .feature-card, .testimonial-card {
                padding: 15px;
            }
        }
		
		/* Logo Styles */
.logo img {
    height: 60px;
    width: auto;
    display: block;
    transition: var(--transition);
}

.footer-logo img {
    height: 80px;
    width: auto;
    margin-bottom: 20px;
}

/* Responsive logo sizes */
@media (max-width: 992px) {
    .logo img {
        height: 50px;
    }
    
    .footer-logo img {
        height: 70px;
    }
}

@media (max-width: 576px) {
    .logo img {
        height: 40px;
    }

    .footer-logo img {
        height: 60px;
    }
}

/* ============================================================
   UI ENHANCEMENTS — top bar, header CTA, stats, process,
   floating action buttons, and responsive refinements
   ============================================================ */

/* Top contact bar (desktop + tablet) */
.top-bar {
    background: var(--dark-color);
    color: #dfe6f0;
    font-size: 0.88rem;
}

.top-bar .top-bar-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    padding: 9px 20px;
    max-width: 1200px;
    margin: 0 auto;
    flex-wrap: wrap;
}

.top-bar .top-contacts {
    display: flex;
    align-items: center;
    gap: 22px;
    flex-wrap: wrap;
}

.top-bar a,
.top-bar span {
    color: #dfe6f0;
    display: inline-flex;
    align-items: center;
    gap: 7px;
}

.top-bar a:hover {
    color: var(--accent-color);
}

.top-bar .top-social {
    display: flex;
    gap: 14px;
}

/* Header CTA button (desktop) */
.header-cta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--secondary-color);
    color: #fff;
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: 700;
    white-space: nowrap;
    margin-left: 25px;
}

.header-cta:hover {
    background: var(--secondary-dark);
    color: #fff;
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

.header-actions {
    display: flex;
    align-items: center;
}

/* Section eyebrow label */
.section-title .eyebrow {
    display: inline-block;
    color: var(--secondary-color);
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    font-size: 0.82rem;
    margin-bottom: 8px;
}

.section-title p {
    max-width: 640px;
    margin: 0 auto;
    color: var(--muted);
}

/* Stats / counters strip */
.stats {
    background: var(--primary-gradient);
    color: #fff;
    padding: 55px 0;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    text-align: center;
}

.stat-item .stat-number {
    font-size: 2.8rem;
    font-weight: 800;
    line-height: 1;
    color: #fff;
}

.stat-item .stat-number .plus {
    color: var(--accent-color);
}

.stat-item .stat-label {
    margin-top: 8px;
    font-size: 0.98rem;
    color: rgba(255, 255, 255, 0.88);
    font-weight: 500;
}

/* Service card refinements */
.service-card {
    border: 1px solid var(--border);
    display: flex;
    flex-direction: column;
}

.service-content {
    display: flex;
    flex-direction: column;
    flex: 1;
}

.service-link {
    margin-top: auto;
    padding-top: 12px;
    font-weight: 700;
    color: var(--secondary-color);
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.service-link:hover {
    gap: 11px;
    color: var(--primary-color);
}

/* How It Works / Process */
.process {
    background: var(--white);
}

.process-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 28px;
}

.process-step {
    text-align: center;
    padding: 30px 22px;
    border-radius: var(--radius);
    background: var(--light-color);
    border: 1px solid var(--border);
    position: relative;
    transition: var(--transition);
}

.process-step:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-md);
}

.process-step .step-num {
    width: 54px;
    height: 54px;
    margin: 0 auto 18px;
    border-radius: 50%;
    background: var(--primary-gradient);
    color: #fff;
    font-size: 1.4rem;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
}

.process-step h3 {
    font-size: 1.15rem;
    color: var(--primary-color);
    margin-bottom: 8px;
}

.process-step p {
    color: var(--muted);
    margin-bottom: 0;
    font-size: 0.95rem;
}

/* Feature card icon polish */
.feature-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    border-radius: 50%;
    background: rgba(0, 86, 179, 0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem !important;
}

/* Floating action buttons (all devices) */
.fab-stack {
    position: fixed;
    right: 18px;
    bottom: 22px;
    z-index: 1200;
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.fab {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 1.6rem;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.fab:hover {
    transform: scale(1.08);
    color: #fff;
}

.fab-whatsapp {
    background: var(--whatsapp);
}

.fab-call {
    background: var(--primary-color);
    animation: fab-pulse 2s infinite;
}

@keyframes fab-pulse {
    0% { box-shadow: 0 0 0 0 rgba(0, 86, 179, 0.55); }
    70% { box-shadow: 0 0 0 16px rgba(0, 86, 179, 0); }
    100% { box-shadow: 0 0 0 0 rgba(0, 86, 179, 0); }
}

/* Mobile sticky call/quote bar */
.mobile-cta-bar {
    display: none;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1150;
    background: var(--white);
    box-shadow: 0 -3px 14px rgba(0, 0, 0, 0.12);
}

.mobile-cta-bar a {
    flex: 1;
    text-align: center;
    padding: 14px 8px;
    font-weight: 700;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-size: 0.95rem;
}

.mobile-cta-bar .mc-call { background: var(--primary-color); }
.mobile-cta-bar .mc-quote { background: var(--secondary-color); }

/* Inner-page heroes (service / area pages) clear the taller desktop header */
@media (min-width: 993px) {
    .hero-section { padding-top: 150px; }
    .area-hero { padding-top: 160px; }
}

/* ---------- Responsive refinements ---------- */

/* Tablets */
@media (max-width: 992px) {
    .stats-grid { grid-template-columns: repeat(2, 1fr); gap: 35px 20px; }
    .process-grid { grid-template-columns: repeat(2, 1fr); }
    .hero h1 { font-size: 2.7rem; }
    .header-cta { padding: 9px 16px; font-size: 0.9rem; }
}

/* Phones + tablets (hamburger menu range) */
@media (max-width: 992px) {
    .top-bar { display: none; }
    .header-cta { display: none; }

    nav {
        top: 70px;
        width: 78%;
        max-width: 320px;
        overflow-y: auto;
    }

    .hero { margin-top: 70px; padding: 90px 0 110px; }
    .hero h1 { font-size: 2.1rem; }
    .hero p { font-size: 1.05rem; }
    .hero-cta .btn { flex: 1 1 100%; }

    .mobile-cta-bar { display: flex; }
    .fab-stack { bottom: 74px; }

    .stat-item .stat-number { font-size: 2.3rem; }

    /* keep content clear of the sticky mobile bar */
    footer { padding-bottom: 70px; }
}

@media (max-width: 576px) {
    .stats-grid { grid-template-columns: repeat(2, 1fr); }
    .process-grid { grid-template-columns: 1fr; }
    .hero-badge { font-size: 0.78rem; }
    .hero-trust { font-size: 0.88rem; gap: 8px 18px; }
    .fab { width: 50px; height: 50px; font-size: 1.4rem; }
}

/* ===== Reviews / star ratings ===== */
.stars { color: var(--accent-color); letter-spacing: 2px; font-size: 1.1rem; line-height: 1; }
.stars .star-empty { color: rgba(255, 255, 255, 0.3); }
.testimonial-card .stars { margin-bottom: 14px; }

.rating-summary {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 8px 14px;
    margin: -20px 0 36px;
    color: #fff;
}
.rating-summary .rs-score { font-size: 2.4rem; font-weight: 800; line-height: 1; }
.rating-summary .stars { font-size: 1.5rem; }
.rating-summary .rs-text { font-size: 1rem; color: rgba(255, 255, 255, 0.9); }
/* On light review cards the empty stars need a darker tint */
.testimonial-card .stars .star-empty { color: #d9dee6; }

/* ===== Gallery ===== */
.gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
}
.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: var(--radius);
    cursor: pointer;
    aspect-ratio: 4 / 3;
    box-shadow: var(--shadow);
}
.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
    display: block;
}
.gallery-item:hover img { transform: scale(1.08); }
.gallery-item .g-cap {
    position: absolute;
    left: 0; right: 0; bottom: 0;
    padding: 28px 16px 12px;
    color: #fff;
    font-weight: 600;
    font-size: 0.95rem;
    background: linear-gradient(transparent, rgba(0,0,0,0.7));
    opacity: 0;
    transform: translateY(8px);
    transition: var(--transition);
}
.gallery-item:hover .g-cap { opacity: 1; transform: translateY(0); }
.gallery-item .g-zoom {
    position: absolute;
    top: 12px; right: 12px;
    width: 34px; height: 34px;
    border-radius: 50%;
    background: rgba(255,255,255,0.85);
    color: var(--primary-color);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.1rem;
    opacity: 0;
    transition: var(--transition);
}
.gallery-item:hover .g-zoom { opacity: 1; }

@media (max-width: 768px) { .gallery-grid { grid-template-columns: repeat(2, 1fr); gap: 12px; } }
@media (max-width: 460px) { .gallery-grid { grid-template-columns: 1fr; } }

/* Lightbox */
.lightbox {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.92);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 2000;
}
.lightbox.open { display: flex; }
.lightbox img {
    max-width: 92vw;
    max-height: 82vh;
    border-radius: 8px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.5);
}
.lightbox .lb-cap {
    position: absolute;
    bottom: 24px; left: 0; right: 0;
    text-align: center;
    color: #fff;
    font-weight: 600;
    font-size: 1.05rem;
}
.lightbox .lb-btn {
    position: absolute;
    background: rgba(255,255,255,0.14);
    color: #fff;
    border: none;
    width: 50px; height: 50px;
    border-radius: 50%;
    font-size: 1.6rem;
    cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    transition: var(--transition);
}
.lightbox .lb-btn:hover { background: rgba(255,255,255,0.3); }
.lightbox .lb-close { top: 22px; right: 22px; }
.lightbox .lb-prev { left: 22px; top: 50%; transform: translateY(-50%); }
.lightbox .lb-next { right: 22px; top: 50%; transform: translateY(-50%); }
@media (max-width: 576px) {
    .lightbox .lb-prev { left: 10px; }
    .lightbox .lb-next { right: 10px; }
    .lightbox .lb-btn { width: 42px; height: 42px; font-size: 1.3rem; }
}
    </style>
</head>
<body>
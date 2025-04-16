<?php
// Define dynamic variables
$pageTitle = "Keriton Tech Uganda";

// Dynamic navigation items
$navItems = [
    ['name' => 'Home', 'link' => '#home', 'dropdown' => [
        ['name' => 'Intro', 'link' => '#intro'],
        ['name' => 'Hero', 'link' => '#hero']
    ]],
    ['name' => 'Services', 'link' => '#services', 'dropdown' => [
        ['name' => 'Web Development', 'link' => '#webdev'],
        ['name' => 'Graphics Design', 'link' => '#graphics'],
        ['name' => 'SEO', 'link' => '#seo']
    ]],
    ['name' => 'Portfolio', 'link' => '#portfolio', 'dropdown' => [
        ['name' => 'Innovative Designs', 'link' => '#designs'],
        ['name' => 'Projects', 'link' => '#projects']
    ]],
    ['name' => 'Blog', 'link' => '#blog', 'dropdown' => [
        ['name' => 'AI in Marketing', 'link' => '#blog1'],
        ['name' => 'Cloud Computing', 'link' => '#blog2']
    ]],
    ['name' => 'Contact Us', 'link' => '#contact', 'dropdown' => [
        ['name' => 'Get a Quote', 'link' => '#quote'],
        ['name' => 'Support', 'link' => '#support']
    ]]
];

// Dynamic services
$services = [
    ['icon' => 'fas fa-code', 'title' => 'Web Development', 'desc' => 'We deliver top-tier web development services using the latest technologies like React, Node.js, and WordPress.', 'link' => '#webdev', 'linkText' => 'Learn More'],
    ['icon' => 'fas fa-paint-brush', 'title' => 'Graphics Design', 'desc' => 'Communicate your brand’s story with stunning typography, vibrant colors, and creative illustrations.', 'link' => '#portfolio', 'linkText' => 'See Examples'],
    ['icon' => 'fas fa-search', 'title' => 'SEO', 'desc' => 'Outrank your competitors with our expert SEO strategies to boost visibility and drive traffic.', 'link' => '#contact', 'linkText' => 'Boost Rankings'],
    ['icon' => 'fas fa-megaphone', 'title' => 'Digital Marketing', 'desc' => 'Maximize your online presence with tailored digital marketing solutions. Free consultation included!', 'link' => '#quote', 'linkText' => 'Get a Free Quote'],
    ['icon' => 'fas fa-mobile-alt', 'title' => 'Mobile App Development', 'desc' => 'Bring your ideas to life with custom mobile apps for iOS and Android, seamless across all devices.', 'link' => '#contact', 'linkText' => 'Start Your App'],
    ['icon' => 'fas fa-video', 'title' => 'CCTV Installation', 'desc' => 'Secure your premises with our professional CCTV installation and maintenance services.', 'link' => '#cctv', 'linkText' => 'Secure Now']
];

// Dynamic portfolio items
$portfolioItems = [
    ['img' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=600&auto=format&fit=crop', 'title' => 'Logo Design', 'desc' => 'Unique and memorable logos tailored to your brand identity.'],
    ['img' => 'https://images.unsplash.com/photo-1509281373149-e957c6296406?q=80&w=600&auto=format&fit=crop', 'title' => 'Flyers Design & Print', 'desc' => 'Eye-catching flyers for promotions and events.'],
    ['img' => 'https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?q=80&w=600&auto=format&fit=crop', 'title' => 'Shirt Branding', 'desc' => 'Custom apparel designs to boost your brand visibility.'],
    ['img' => 'https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?q=80&w=600&auto=format&fit=crop', 'title' => 'Certificate Design', 'desc' => 'Professional certificates for recognition and awards.'],
    ['img' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=600&auto=format&fit=crop', 'title' => 'Sign Post', 'desc' => 'Durable and striking signposts for your business.'],
    ['img' => 'https://images.unsplash.com/photo-1502945015378-0e284ca1a5be?q=80&w=600&auto=format&fit=crop', 'title' => 'Banner Design', 'desc' => 'Bold banners to make a statement at any event.']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary: #FF0000;
            --secondary: #800000;
            --highlight: #FFA500;
            --text-light: #FFFFFF;
            --text-dark: #333333;
            --bg-base: #FFFFFF;
        }

        body {
            color: var(--text-dark);
            line-height: 1.6;
            background: var(--bg-base);
            position: relative;
            overflow-x: hidden;
        }

        .tech-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .tech-particle {
            position: absolute;
            background: rgba(255, 0, 0, 0.3);
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
            animation: drift 20s infinite ease-in-out;
        }

        .tech-particle:nth-child(1) { width: 120px; height: 120px; top: 10%; left: 15%; animation-duration: 18s; }
        .tech-particle:nth-child(2) { width: 150px; height: 150px; top: 35%; left: 65%; animation-duration: 25s; }
        .tech-particle:nth-child(3) { width: 90px; height: 90px; top: 60%; left: 25%; animation-duration: 22s; }
        .tech-particle:nth-child(4) { width: 130px; height: 130px; top: 80%; left: 75%; animation-duration: 28s; }
        .tech-particle:nth-child(5) { width: 100px; height: 100px; top: 20%; left: 40%; animation-duration: 20s; }

        @keyframes drift {
            0% { transform: translate(0, 0); opacity: 0.3; }
            20% { transform: translate(120px, -80px); opacity: 0.6; }
            40% { transform: translate(-100px, 60px); opacity: 0.4; }
            60% { transform: translate(80px, -100px); opacity: 0.5; }
            80% { transform: translate(-60px, 70px); opacity: 0.6; }
            100% { transform: translate(0, 0); opacity: 0.3; }
        }

        .contact-bar {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .contact-bar.left { left: 20px; }
        .contact-bar.right { right: 20px; }

        .contact-icon {
            position: relative;
            width: 50px;
            height: 50px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            font-size: 1.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .contact-icon:hover {
            transform: scale(1.1);
            background: var(--highlight);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        .contact-icon::after {
            content: attr(data-tooltip);
            position: absolute;
            background: var(--secondary);
            color: var(--text-light);
            padding: 0.5rem 1rem;
            border-radius: 5px;
            font-size: 0.9rem;
            white-space: nowrap;
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }

        .contact-bar.left .contact-icon::after { right: 60px; }
        .contact-bar.right .contact-icon::after { left: 60px; }
        .contact-icon:hover::after { opacity: 1; }

        header {
            background: var(--bg-base);
            padding: 1.5rem 3rem;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
        }

        .logo img { width: 40px; height: 40px; margin-right: 10px; }

        nav { display: flex; align-items: center; }

        nav ul {
            list-style: none;
            display: flex;
            gap: 2rem;
        }

        nav ul li { position: relative; }

        nav a {
            text-decoration: none;
            color: var(--secondary);
            font-weight: 400;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        nav a:hover { color: var(--highlight); }

        .dropdown-content {
            display: none;
            position: absolute;
            background: var(--bg-base);
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
            top: 100%;
            left: 0;
        }

        .dropdown-content a {
            color: var(--secondary);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 0.9rem;
        }

        .dropdown-content a:hover {
            background: var(--primary);
            color: var(--text-light);
        }

        .dropdown:hover .dropdown-content { display: block; }

        .nav-toggle {
            display: none;
            font-size: 1.5rem;
            background: none;
            border: none;
            color: var(--secondary);
            cursor: pointer;
        }

        .cta-btn {
            background: var(--primary);
            color: var(--text-light);
            padding: 0.8rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .cta-btn:hover {
            transform: scale(1.05);
            background: #CC0000;
        }

        .hero {
            position: relative;
            height: 80vh;
            overflow: hidden;
        }

        .slideshow {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide.active { opacity: 1; }

        .slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .slide-1 { background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=1920&auto=format&fit=crop'); }
        .slide-2 { background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=1920&auto=format&fit=crop'); }
        .slide-3 { background-image: url('https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?q=80&w=1920&auto=format&fit=crop'); }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 900px;
            padding: 2rem;
        }

        .hero-content .hashtags {
            font-size: 1rem;
            color: var(--highlight);
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--text-light);
            margin-bottom: 1rem;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .hero-content p {
            font-size: 1.2rem;
            color: var(--text-light);
            margin-bottom: 2rem;
        }

        .hero-content .cta-btn {
            background: var(--highlight);
            color: var(--text-dark);
            padding: 0.8rem 2rem;
            border-radius: 5px;
            font-weight: 600;
            font-size: 1rem;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .hero-content .cta-btn:hover {
            transform: scale(1.05);
            background: #E69500;
        }

        .slide-dots {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 2;
        }

        .dot {
            width: 10px;
            height: 10px;
            background: var(--text-light);
            border-radius: 50%;
            opacity: 0.5;
            cursor: pointer;
            transition: opacity 0.3s ease, background 0.3s ease;
        }

        .dot.active {
            opacity: 1;
            background: var(--highlight);
        }

        .section {
            max-width: 1400px;
            margin: 5rem auto;
            padding: 3rem;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: var(--primary);
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--secondary);
            text-align: center;
            margin-bottom: 2rem;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: rgba(255, 165, 0, 0.1);
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
        }

        .service-card i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .service-card h3 {
            font-size: 1.6rem;
            color: var(--secondary);
            margin-bottom: 0.8rem;
        }

        .service-card p {
            font-size: 1rem;
            color: #666;
        }

        .service-card a {
            color: var(--highlight);
            text-decoration: none;
            font-weight: 600;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            padding: 1rem;
        }

        .portfolio-item {
            position: relative;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 1.5rem;
        }

        .portfolio-item:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(255, 0, 0, 0.2);
        }

        .portfolio-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .portfolio-item h3 {
            font-size: 1.4rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .portfolio-item p {
            font-size: 0.95rem;
            color: var(--secondary);
            text-align: center;
        }

        footer {
            background: var(--secondary);
            padding: 4rem 3rem 2rem;
            position: relative;
            color: var(--text-light);
        }

        footer::before {
            content: '';
            position: absolute;
            top: -50px;
            left: 0;
            width: 100%;
            height: 50px;
            background: var(--secondary);
            border-radius: 50% 50% 0 0;
            z-index: -1;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            text-align: center;
        }

        .footer-section h3 {
            font-size: 1.6rem;
            color: var(--highlight);
            margin-bottom: 1rem;
        }

        .footer-section p, .footer-section a {
            color: var(--text-light);
            text-decoration: none;
            font-size: 0.95rem;
        }

        .social-links a {
            font-size: 1.8rem;
            margin: 0 0.8rem;
            color: var(--primary);
            transition: transform 0.3s ease;
        }

        .social-links a:hover {
            transform: scale(1.2);
            color: var(--highlight);
        }

        .newsletter-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .newsletter-form input {
            padding: 0.8rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        .newsletter-form button {
            background: var(--primary);
            color: var(--text-light);
            padding: 0.8rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .newsletter-form button:hover { background: #CC0000; }

        .map-container iframe {
            width: 100%;
            height: 200px;
            border: none;
            border-radius: 10px;
        }

        @media (max-width: 1024px) {
            .hero { height: 60vh; }
            .hero-content h1 { font-size: 2.5rem; }
            .hero-content p { font-size: 1rem; }
            .services-grid, .portfolio-grid { grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); }
            .contact-bar { display: none; }
        }

        @media (max-width: 768px) {
            header { padding: 1rem 2rem; }
            .nav-container { flex-wrap: wrap; justify-content: space-between; }
            .nav-toggle { display: block; }
            nav ul { display: none; flex-direction: column; width: 100%; text-align: center; padding: 1rem 0; background: var(--bg-base); }
            nav ul.active { display: flex; }
            .dropdown-content { position: static; box-shadow: none; background: rgba(255, 0, 0, 0.1); }
            .hero { height: 50vh; }
            .hero-content h1 { font-size: 2rem; }
            .hero-content p { font-size: 0.9rem; }
            .hero-content .hashtags { font-size: 0.8rem; }
            .section { margin: 3rem 1rem; padding: 2rem; }
            .slide-dots { right: 10px; }
        }

        @media (max-width: 480px) {
            .logo { font-size: 1.5rem; }
            .logo img { width: 30px; height: 30px; }
            .cta-btn { padding: 0.6rem 1.5rem; font-size: 0.9rem; }
            .hero { height: 40vh; }
            .hero-content h1 { font-size: 1.5rem; }
            .hero-content p { font-size: 0.8rem; }
            .hero-content .hashtags { font-size: 0.7rem; }
            .section-title { font-size: 2rem; }
            .slide-dots { right: 5px; }
            .dot { width: 8px; height: 8px; }
        }
    </style>
</head>
<body>
    <div class="tech-background">
        <div class="tech-particle"></div>
        <div class="tech-particle"></div>
        <div class="tech-particle"></div>
        <div class="tech-particle"></div>
        <div class="tech-particle"></div>
    </div>

    <div class="contact-bar left">
        <a href="https://wa.me/+256123456789" target="_blank" class="contact-icon" data-tooltip="WhatsApp Me"><i class="fab fa-whatsapp"></i></a>
        <a href="https://facebook.com/yourusername" target="_blank" class="contact-icon" data-tooltip="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://tiktok.com/@yourusername" target="_blank" class="contact-icon" data-tooltip="TikTok"><i class="fab fa-tiktok"></i></a>
    </div>

    <div class="contact-bar right">
        <a href="https://twitter.com/yourusername" target="_blank" class="contact-icon" data-tooltip="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="https://instagram.com/yourusername" target="_blank" class="contact-icon" data-tooltip="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://linkedin.com/in/yourusername" target="_blank" class="contact-icon" data-tooltip="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
    </div>

    <header>
        <div class="nav-container">
            <div class="logo">
                <img src="https://images.unsplash.com/photo-1581092160607-1e41e0b13b93?q=80&w=40&h=40&auto=format&fit=crop" alt="Tech Logo">
                Keriton Tech Uganda
            </div>
            <button class="nav-toggle"><i class="fas fa-bars"></i></button>
            <nav>
                <ul>
                    <?php foreach ($navItems as $item): ?>
                        <li class="dropdown">
                            <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                            <?php if (!empty($item['dropdown'])): ?>
                                <div class="dropdown-content">
                                    <?php foreach ($item['dropdown'] as $dropdown): ?>
                                        <a href="<?php echo $dropdown['link']; ?>"><?php echo $dropdown['name']; ?></a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <a href="#quote" class="cta-btn">Get a Quote</a>
        </div>
    </header>

    <section class="hero">
        <div class="slideshow">
            <div class="slide slide-1 active">
                <div class="hero-content">
                    <div class="hashtags">#WEB_HOSTING #SEO #DOMAINS</div>
                    <h1>WEB DEVELOPMENT</h1>
                    <p>Let's turn your idea into a high-quality web-based solution today.</p>
                    <a href="#services" class="cta-btn">Get Started</a>
                </div>
            </div>
            <div class="slide slide-2">
                <div class="hero-content">
                    <div class="hashtags">#WEB_HOSTING #SEO #DOMAINS</div>
                    <h1>DIGITAL MARKETING</h1>
                    <p>Elevate your brand with our expert digital marketing strategies.</p>
                    <a href="#services" class="cta-btn">Get Started</a>
                </div>
            </div>
            <div class="slide slide-3">
                <div class="hero-content">
                    <div class="hashtags">#WEB_HOSTING #SEO #DOMAINS</div>
                    <h1>CCTV SOLUTIONS</h1>
                    <p>Secure your business with our advanced CCTV solutions.</p>
                    <a href="#services" class="cta-btn">Get Started</a>
                </div>
            </div>
        </div>
        <div class="slide-dots">
            <span class="dot active" data-index="0"></span>
            <span class="dot" data-index="1"></span>
            <span class="dot" data-index="2"></span>
        </div>
    </section>

    <section class="section" id="intro">
        <h2 class="section-title">Looking for Professional Website Developers?</h2>
        <p>At Keriton Tech Uganda, we specialize in crafting custom websites tailored to your unique business needs. From stunning informative sites to robust e-commerce platforms and dynamic web applications, we’ve got you covered. Let’s take your brand digital and make it unforgettable!</p>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="#services" class="cta-btn">Let’s Go Digital</a>
        </div>
    </section>

    <section class="section" id="services">
        <h2 class="section-title">What We Do</h2>
        <p class="section-subtitle">Explore our comprehensive digital solutions designed to elevate your business.</p>
        <div class="services-grid">
            <?php foreach ($services as $service): ?>
                <div class="service-card">
                    <i class="<?php echo $service['icon']; ?>"></i>
                    <h3><?php echo $service['title']; ?></h3>
                    <p><?php echo $service['desc']; ?></p>
                    <a href="<?php echo $service['link']; ?>"><?php echo $service['linkText']; ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Elevate Your Brand!</h2>
        <p>Capture your audience’s attention with engaging and eye-catching social media flyer designs tailored to your brand.</p>
        <img src="https://images.unsplash.com/photo-1509281373149-e957c6296406?q=80&w=600&auto=format&fit=crop" alt="Flyer Example" style="max-width: 100%; margin: 2rem auto; display: block; border-radius: 10px;">
        <div style="text-align: center;">
            <a href="#order" class="cta-btn">Order a Flyer</a>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Choose Us for Digital Printing & Design</h2>
        <p>We provide high-quality, personalized digital prints to make your brand stand out. Our offerings include:</p>
        <ul style="list-style: none; padding: 1rem; text-align: center;">
            <li><i class="fas fa-address-card"></i> Business Cards - Professional designs that impress.</li>
            <li><i class="fas fa-file-alt"></i> Flyers - Perfect for promotions and events.</li>
            <li><i class="fas fa-image"></i> Posters - Bold and vibrant for maximum impact.</li>
            <li><i class="fas fa-star"></i> Stickers - Custom shapes and sizes for any purpose.</li>
            <li><i class="fas fa-book"></i> Brochures - Informative and stylish marketing tools.</li>
            <li><i class="fas fa-ticket-alt"></i> Tickets & Envelopes - Tailored for events and correspondence.</li>
        </ul>
        <div style="text-align: center;">
            <a href="#quote" class="cta-btn">Request a Quote</a>
        </div>
    </section>

    <section class="section" id="portfolio">
        <h2 class="section-title">Our Innovative Designs</h2>
        <p class="section-subtitle">We craft eye-catching graphic designs that make your brand shine.</p>
        <div class="portfolio-grid">
            <?php foreach ($portfolioItems as $item): ?>
                <div class="portfolio-item">
                    <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
                    <h3><?php echo $item['title']; ?></h3>
                    <p><?php echo $item['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Professional CCTV Installation</h2>
        <p>Ensure your safety with Keriton Tech Uganda’s reliable CCTV camera installation. Tailored security solutions for peace of mind.</p>
        <img src="https://images.unsplash.com/photo-1558089687-0e03f7e1d3f9?q=80&w=600&auto=format&fit=crop" alt="CCTV" style="max-width: 100%; margin: 2rem auto; display: block; border-radius: 10px;">
        <div style="text-align: center;">
            <a href="#security" class="cta-btn">Get a Free Security Assessment</a>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Our Satisfied Clients</h2>
        <p>We proudly partner with a diverse range of clients, delivering exceptional IT services.</p>
        <div style="display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap; margin-top: 2rem;">
            <div style="width: 150px; height: 100px; background: rgba(255, 0, 0, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: var(--secondary);">TechCorp</div>
            <div style="width: 150px; height: 100px; background: rgba(255, 0, 0, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: var(--secondary);">ShopEasy</div>
            <div style="width: 150px; height: 100px; background: rgba(255, 0, 0, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: var(--secondary);">SecureNow</div>
        </div>
    </section>

    <section class="section" id="blog">
        <h2 class="section-title">Blog</h2>
        <p class="section-subtitle">Stay informed with the latest insights from Keriton Tech Uganda.</p>
        <div class="services-grid">
            <div class="service-card">
                <h3>How AI is Revolutionizing Digital Marketing</h3>
                <p>From chatbots to predictive analytics, AI is reshaping marketing. Discover how we harness these tools.</p>
                <a href="#blog1">Read More</a>
            </div>
            <div class="service-card">
                <h3>The Benefits of Cloud Computing</h3>
                <p>Cloud computing offers scalable solutions for small businesses. Learn how we leverage it.</p>
                <a href="#blog2">Read More</a>
            </div>
            <div class="service-card">
                <h3>The Future of E-Commerce</h3>
                <p>Explore trends and innovations in online shopping with Keriton Tech Uganda’s cutting-edge solutions.</p>
                <a href="#blog3">Read More</a>
            </div>
        </div>
    </section>

    <footer id="contact">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Keriton Tech Uganda</h3>
                <p>Crafting digital excellence since 2020.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <p><a href="#home">Home</a> | <a href="#services">Services</a> | <a href="#portfolio">Portfolio</a> | <a href="#blog">Blog</a> | <a href="#contact">Contact Us</a></p>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Email: <a href="mailto:info@keritontech.com">info@keritontech.com</a><br>Phone: +256-123-456-789<br>Address: St. Margaret College, Makerere, Uganda</p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="https://twitter.com/yourusername"><i class="fab fa-twitter"></i></a>
                    <a href="https://facebook.com/yourusername"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://instagram.com/yourusername"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com/in/yourusername"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Newsletter</h3>
                <form class="newsletter-form" method="POST" action="">
                    <input type="email" name="email" placeholder="Your Email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
            <div class="footer-section map-container">
                <h3>Our Location</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.800714682614!2d32.56780431475475!3d0.3296066996681351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb6c5e6e6b6b%3A0x8e6e6f6e6e6e6e6e!2sMakerere%20University!5e0!3m2!1sen!2sug!4v1698765432109!5m2!1sen!2sug" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const dots = document.querySelectorAll(".dot");
            let currentSlide = 0;

            function showSlide(index) {
               -slides.forEach((slide, i) => {
                    slide.classList.remove("active");
                    dots[i].classList.remove("active");
                    if (i === index) {
                        slide.classList.add("active");
                        dots[i].classList.add("active");
                    }
                });
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }

            showSlide(currentSlide);
            setInterval(nextSlide, 5000);

            dots.forEach(dot => {
                dot.addEventListener("click", () => {
                    const index = parseInt(dot.getAttribute("data-index"));
                    currentSlide = index;
                    showSlide(currentSlide);
                });
            });

            const navToggle = document.querySelector(".nav-toggle");
            const navLinks = document.querySelector("nav ul");

            navToggle.addEventListener("click", () => {
                navLinks.classList.toggle("active");
            });
        });
    </script>
</body>
</html>
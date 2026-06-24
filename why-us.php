<?php
$title       = "Why Choose Us | Excellent Movers and Packers Visakhapatnam";
$description = "Why choose Excellent Movers and Packers in Visakhapatnam? Experienced team, safe handling, affordable transparent pricing, on-time service and quality packing for every move.";
$keywords    = "why choose packers and movers Visakhapatnam, best movers Vizag, reliable packers and movers, affordable moving company Andhra Pradesh";
$canonical   = "https://excellentmoversandpackers.com/why-us.php";
include('header.php');
include('css.php');
$biz = emp_business();
?>
<style>
    .page-hero {
        background: linear-gradient(rgba(13,27,51,0.78), rgba(13,27,51,0.85)), url('/safe-packers-and-movers-in-visakhapatnam.jpeg') no-repeat center center/cover;
        color: var(--white); padding: 150px 0 70px; text-align: center;
    }
    .page-hero h1 { color: var(--white); font-size: 2.6rem; }
    .page-hero p { font-size: 1.15rem; max-width: 780px; margin: 0 auto; color: rgba(255,255,255,0.9); }
    .breadcrumb { background: var(--light-color); padding: 12px 0; font-size: 0.9rem; }
    .breadcrumb a { color: var(--primary-color); }
</style>
<?php include('navigation.php'); ?>

<section class="page-hero">
    <div class="container">
        <h1>Why Choose Excellent Movers and Packers</h1>
        <p>Here's why families and businesses across Visakhapatnam trust us with their most important moves.</p>
    </div>
</section>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container"><a href="/">Home</a> &raquo; <span>Why Us</span></div>
</nav>

<!-- Reasons -->
<section class="section why-us">
    <div class="container">
        <div class="section-title">
            <span class="eyebrow">Our Strengths</span>
            <h2>The Excellent Difference</h2>
            <p>Everything we do is built around a safe, smooth and affordable move for you</p>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon">★</div><h3>Experienced Team</h3><p>Skilled, background-checked professionals trained to handle every type of relocation efficiently.</p></div>
            <div class="feature-card"><div class="feature-icon">⚡</div><h3>Timely Service</h3><p>We value your time and complete every move within the agreed timeframe.</p></div>
            <div class="feature-card"><div class="feature-icon">🛡️</div><h3>Safe Handling</h3><p>Your belongings are packed and handled with care to reach your destination intact.</p></div>
            <div class="feature-card"><div class="feature-icon">💰</div><h3>Affordable Rates</h3><p>Competitive, transparent pricing with no hidden charges — quality you can afford.</p></div>
            <div class="feature-card"><div class="feature-icon">📦</div><h3>Quality Packing</h3><p>High-grade packing materials and proven techniques protect your items in transit.</p></div>
            <div class="feature-card"><div class="feature-icon">🤝</div><h3>Customer Support</h3><p>A dedicated team to answer your questions before, during and after the move.</p></div>
        </div>
    </div>
</section>

<!-- How it works -->
<section class="section process">
    <div class="container">
        <div class="section-title">
            <span class="eyebrow">Simple Process</span>
            <h2>How We Make Moving Easy</h2>
            <p>Four straightforward steps from quote to settled-in</p>
        </div>
        <div class="process-grid">
            <div class="process-step"><div class="step-num">1</div><h3>Get a Quote</h3><p>Call or WhatsApp us for a free, transparent estimate.</p></div>
            <div class="process-step"><div class="step-num">2</div><h3>Pre-Move Survey</h3><p>We plan the move, schedule a date and arrange materials.</p></div>
            <div class="process-step"><div class="step-num">3</div><h3>Pack &amp; Move</h3><p>We safely pack, load and transport your belongings.</p></div>
            <div class="process-step"><div class="step-num">4</div><h3>Unpack &amp; Settle</h3><p>We unload, unpack and reassemble at your new home.</p></div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item"><div class="stat-number" data-target="2500">0<span class="plus">+</span></div><div class="stat-label">Successful Moves</div></div>
            <div class="stat-item"><div class="stat-number" data-target="4">0<span class="plus">.9</span></div><div class="stat-label">Average Rating</div></div>
            <div class="stat-item"><div class="stat-number" data-target="50">0<span class="plus">+</span></div><div class="stat-label">Trained Professionals</div></div>
            <div class="stat-item"><div class="stat-number" data-target="100">0<span class="plus">%</span></div><div class="stat-label">Committed to You</div></div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section" style="text-align:center;">
    <div class="container">
        <h2>Experience the Difference Yourself</h2>
        <p style="max-width:640px;margin:0 auto 22px;color:var(--muted);">Get a free, no-obligation quote today and see why we're a preferred choice in Visakhapatnam.</p>
        <a href="/contact-us.php" class="btn btn-accent">Get Your Free Quote</a>
        <a href="tel:<?php echo $biz['phone']; ?>" class="btn btn-secondary">Call <?php echo $biz['phoneDisp']; ?></a>
    </div>
</section>

<?php
$breadcrumbSchema = array(
    '@context' => 'https://schema.org', '@type' => 'BreadcrumbList',
    'itemListElement' => array(
        array('@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $biz['url'] . '/'),
        array('@type' => 'ListItem', 'position' => 2, 'name' => 'Why Us', 'item' => $canonical),
    ),
);
$flags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
echo "\n<script type=\"application/ld+json\">\n" . json_encode($breadcrumbSchema, $flags) . "\n</script>\n";

include('footer.php');
include('js.php');

<?php
$title       = "About Us | Excellent Movers and Packers Visakhapatnam";
$description = "Learn about Excellent Movers and Packers — a trusted, locally owned moving company in Visakhapatnam offering safe, affordable home & office relocation across Andhra Pradesh and India.";
$keywords    = "about Excellent Movers and Packers, moving company Visakhapatnam, packers and movers Vizag about, relocation company Andhra Pradesh";
$canonical   = "https://excellentmoversandpackers.com/about.php";
include('header.php');
include('css.php');
$biz = emp_business();
?>
<style>
    .page-hero {
        background: linear-gradient(rgba(13,27,51,0.78), rgba(13,27,51,0.85)), url('/best-packers-and-movers-in-visakhapatnam.jpeg') no-repeat center center/cover;
        color: var(--white); padding: 150px 0 70px; text-align: center;
    }
    .page-hero h1 { color: var(--white); font-size: 2.6rem; }
    .page-hero p { font-size: 1.15rem; max-width: 780px; margin: 0 auto; color: rgba(255,255,255,0.9); }
    .breadcrumb { background: var(--light-color); padding: 12px 0; font-size: 0.9rem; }
    .breadcrumb a { color: var(--primary-color); }
    .values-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-top: 10px; }
    .value-card { background: var(--white); border: 1px solid var(--border); border-radius: var(--radius); padding: 26px; box-shadow: var(--shadow); }
    .value-card h3 { color: var(--primary-color); font-size: 1.15rem; }
    .value-card .v-icon { font-size: 2rem; margin-bottom: 10px; }
</style>
<?php include('navigation.php'); ?>

<section class="page-hero">
    <div class="container">
        <h1>About Excellent Movers and Packers</h1>
        <p>A trusted, locally owned relocation company making moves in and from Visakhapatnam safe, simple and stress-free.</p>
    </div>
</section>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container"><a href="/">Home</a> &raquo; <span>About Us</span></div>
</nav>

<!-- Story -->
<section class="section">
    <div class="container">
        <div class="about-grid">
            <div class="about-content">
                <h2>Who We Are</h2>
                <p><?php echo $biz['name']; ?> is a premier moving company based in Visakhapatnam, Andhra Pradesh. With years of hands-on experience, we've grown into a trusted name for home and office relocation across Vizag and all over India.</p>
                <p>Our mission is simple: to take the stress out of moving. From the first phone call to the last box unpacked, we handle every detail with care, honesty and professionalism — so you can focus on settling into your new space.</p>
                <p>What sets us apart is our commitment to customer satisfaction, attention to detail, transparent pricing and a skilled team trained to treat your belongings as their own.</p>
                <a href="/contact-us.php" class="btn btn-accent">Get a Free Quote</a>
                <a href="tel:<?php echo $biz['phone']; ?>" class="btn btn-secondary">Call <?php echo $biz['phoneDisp']; ?></a>
            </div>
            <div class="about-img">
                <img src="/best-packers-and-movers-in-visakhapatnam.jpeg" alt="About Excellent Movers and Packers Visakhapatnam">
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item"><div class="stat-number" data-target="12">0<span class="plus">+</span></div><div class="stat-label">Years of Experience</div></div>
            <div class="stat-item"><div class="stat-number" data-target="2500">0<span class="plus">+</span></div><div class="stat-label">Successful Moves</div></div>
            <div class="stat-item"><div class="stat-number" data-target="50">0<span class="plus">+</span></div><div class="stat-label">Trained Professionals</div></div>
            <div class="stat-item"><div class="stat-number" data-target="24">0</div><div class="stat-label">Areas Served in Vizag</div></div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <span class="eyebrow">Our Promise</span>
            <h2>What We Stand For</h2>
            <p>The values that guide every move we make</p>
        </div>
        <div class="values-grid">
            <div class="value-card"><div class="v-icon">🤝</div><h3>Trust &amp; Honesty</h3><p>Transparent, upfront pricing with no hidden charges — ever.</p></div>
            <div class="value-card"><div class="v-icon">🛡️</div><h3>Safety First</h3><p>Quality packing and careful handling so your goods arrive intact.</p></div>
            <div class="value-card"><div class="v-icon">⚡</div><h3>On-Time Service</h3><p>We respect your schedule and deliver within the promised timeframe.</p></div>
            <div class="value-card"><div class="v-icon">💬</div><h3>Customer First</h3><p>Friendly support that answers your questions before and after the move.</p></div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section why-us" style="text-align:center;">
    <div class="container">
        <h2>Ready to Move With a Team You Can Trust?</h2>
        <p style="max-width:640px;margin:0 auto 22px;color:var(--muted);">Join thousands of happy families and businesses who chose <?php echo $biz['name']; ?> for a smooth relocation.</p>
        <a href="/contact-us.php" class="btn btn-accent">Get Your Free Quote</a>
        <a href="/why-us.php" class="btn">Why Choose Us</a>
    </div>
</section>

<?php
$breadcrumbSchema = array(
    '@context' => 'https://schema.org', '@type' => 'BreadcrumbList',
    'itemListElement' => array(
        array('@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $biz['url'] . '/'),
        array('@type' => 'ListItem', 'position' => 2, 'name' => 'About Us', 'item' => $canonical),
    ),
);
$aboutSchema = array(
    '@context' => 'https://schema.org', '@type' => 'AboutPage',
    'name' => 'About ' . $biz['name'], 'url' => $canonical,
    'about' => array('@id' => $biz['url'] . '/#business'),
);
$flags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
echo "\n<script type=\"application/ld+json\">\n" . json_encode($aboutSchema, $flags) . "\n</script>\n";
echo "<script type=\"application/ld+json\">\n" . json_encode($breadcrumbSchema, $flags) . "\n</script>\n";

include('footer.php');
include('js.php');

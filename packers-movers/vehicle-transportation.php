<?php
$title = "Vehicle Transportation Services | Excellent Movers and Packers Visakhapatnam";
$description = "Safe and reliable car and bike transportation services in Visakhapatnam. Excellent Movers and Packers offers insured vehicle relocation across Andhra Pradesh and India.";
$keywords = "vehicle transportation Visakhapatnam, car carrier Vizag, bike transport Visakhapatnam, car shifting services, vehicle relocation Andhra Pradesh, two wheeler transport";
$canonical = "https://excellentmoversandpackers.com/packers-movers/vehicle-transportation.php";

include('../header.php');
include('../css.php');
?>
<style>
    .svc-hero {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('/Excellent-Vehicle-Transportation.jpeg') no-repeat center center/cover;
        color: var(--white); padding: 110px 0 70px; text-align: center;
    }
    .svc-hero h1 { color: var(--white); font-size: 2.6rem; }
    .svc-hero p { font-size: 1.15rem; max-width: 820px; margin: 0 auto 25px; }
    .breadcrumb { background: var(--light-color); padding: 12px 0; font-size: 0.9rem; }
</style>
<?php include('../navigation.php'); ?>

<section class="svc-hero">
    <div class="container">
        <h1>Vehicle Transportation Services in Visakhapatnam</h1>
        <p>Safe, insured and on-time car and bike transportation by Excellent Movers and Packers &mdash; across Visakhapatnam, Andhra Pradesh and all over India.</p>
        <div>
            <a href="../contact-us.php" class="btn">Get Free Quote</a>
            <a href="tel:+918295588602" class="btn btn-secondary">Call +91 82955 88602</a>
        </div>
    </div>
</section>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container"><a href="/">Home</a> &raquo; <a href="/#services">Services</a> &raquo; <span>Vehicle Transportation</span></div>
</nav>

<section class="section">
    <div class="container">
        <h2>Reliable Car &amp; Bike Transportation</h2>
        <p>Relocating your vehicle is just as important as moving your household goods. At Excellent Movers and Packers, we provide professional vehicle transportation services in Visakhapatnam using dedicated car carriers and enclosed trailers. Whether you are moving a car, motorcycle or scooter within Vizag or to another city, your vehicle is handled with the utmost care and fully insured during transit.</p>

        <div class="services-grid" style="margin-top:30px;">
            <div class="service-card"><div class="service-content"><h3>Car Transportation</h3><p>Door-to-door car carrier service with secure loading, GPS-tracked transit and timely delivery.</p></div></div>
            <div class="service-card"><div class="service-content"><h3>Bike Transportation</h3><p>Two-wheeler packing and transport with proper crating to prevent scratches and damage.</p></div></div>
            <div class="service-card"><div class="service-content"><h3>Insured Transit</h3><p>Comprehensive transit insurance options for complete peace of mind.</p></div></div>
            <div class="service-card"><div class="service-content"><h3>Open &amp; Enclosed Carriers</h3><p>Choose open multi-car carriers or enclosed trailers for premium vehicles.</p></div></div>
        </div>
    </div>
</section>

<section class="section why-us">
    <div class="container">
        <div class="section-title"><h2>Why Choose Our Vehicle Transport</h2></div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon">🛡️</div><h3>Fully Insured</h3><p>Transit insurance protects your vehicle throughout the journey.</p></div>
            <div class="feature-card"><div class="feature-icon">📍</div><h3>Door-to-Door</h3><p>Pickup and delivery right at your address in Visakhapatnam.</p></div>
            <div class="feature-card"><div class="feature-icon">⚡</div><h3>On-Time</h3><p>Reliable schedules with regular updates on your vehicle.</p></div>
            <div class="feature-card"><div class="feature-icon">💰</div><h3>Affordable</h3><p>Competitive, transparent pricing with no hidden charges.</p></div>
        </div>
    </div>
</section>

<section class="section" style="text-align:center;">
    <div class="container">
        <h2>Ready to Transport Your Vehicle?</h2>
        <p>Get a free, no-obligation quote for car or bike transportation in Visakhapatnam.</p>
        <a href="../contact-us.php" class="btn">Get a Free Quote</a>
    </div>
</section>

<?php
$schema = array(
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'serviceType' => 'Vehicle Transportation Service',
    'name' => 'Vehicle Transportation in Visakhapatnam',
    'description' => 'Safe, insured car and bike transportation services in Visakhapatnam, Andhra Pradesh by Excellent Movers and Packers.',
    'areaServed' => array('@type' => 'City', 'name' => 'Visakhapatnam'),
    'provider' => array('@type' => 'MovingCompany', '@id' => 'https://excellentmoversandpackers.com/#business', 'name' => 'Excellent Movers and Packers'),
);
echo "\n<script type=\"application/ld+json\">\n" . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n</script>\n";

include('../footer.php');
include('../js.php');

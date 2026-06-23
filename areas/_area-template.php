<?php
/**
 * Shared template for every area-wise landing page.
 *
 * A per-area stub sets $areaSlug and then includes this file, e.g:
 *   <?php $areaSlug = 'madhurawada'; include __DIR__ . '/_area-template.php'; ?>
 */

require_once __DIR__ . '/areas-data.php';

$areas = emp_areas();
$biz   = emp_business();

if (!isset($areaSlug) || !isset($areas[$areaSlug])) {
    header('HTTP/1.1 404 Not Found');
    echo 'Area not found.';
    exit;
}

$area     = $areas[$areaSlug];
$areaName = $area['name'];
$pin      = $area['pincode'];
$district = $area['district'];

// ----- SEO meta (consumed by header.php) -----
$title       = "Packers and Movers in {$areaName}, Visakhapatnam | {$biz['name']}";
$description  = "Best packers and movers in {$areaName} ({$pin}), Visakhapatnam. {$biz['name']} offers affordable home & office relocation, packing, loading and transportation near you. Call {$biz['phoneDisp']} for a free quote.";
$keywords    = "packers and movers {$areaName}, movers and packers {$areaName}, best packers and movers in {$areaName} Visakhapatnam, packers and movers near me {$areaName}, house shifting {$areaName}, office relocation {$areaName} {$pin}, moving services {$areaName} Vizag";
$canonical   = "{$biz['url']}/areas/{$areaSlug}";
$ogImage     = $biz['image'];

include __DIR__ . '/../header.php';
include __DIR__ . '/../css.php';
?>
<style>
    .area-hero {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('/best-packers-and-movers-in-visakhapatnam.jpeg') no-repeat center center/cover;
        color: var(--white);
        padding: 110px 0 70px;
        text-align: center;
    }
    .area-hero h1 { color: var(--white); font-size: 2.6rem; }
    .area-hero p { font-size: 1.15rem; max-width: 820px; margin: 0 auto 25px; }
    .breadcrumb { background: var(--light-color); padding: 12px 0; font-size: 0.9rem; }
    .breadcrumb a { color: var(--primary-color); }
    .area-intro p { font-size: 1.05rem; }
    .chip-list { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 20px; }
    .chip { background: var(--light-color); padding: 10px 18px; border-radius: 30px; font-weight: 600; }
    .nearby-grid { display: flex; flex-wrap: wrap; gap: 15px; justify-content: center; margin-top: 30px; }
    .nearby-grid a.area-item { display: inline-block; }
    .local-cta { text-align: center; }
</style>
<?php include __DIR__ . '/../navigation.php'; ?>

<!-- Hero -->
<section class="area-hero">
    <div class="container">
        <h1>Packers and Movers in <?php echo $areaName; ?>, Visakhapatnam</h1>
        <p>Looking for the best packers and movers near you in <?php echo $areaName; ?> (<?php echo $pin; ?>)? <?php echo $biz['name']; ?> provides safe, affordable and professional home &amp; office relocation, packing and transportation services across <?php echo $areaName; ?> and all of <?php echo $district; ?>.</p>
        <div>
            <a href="../contact-us.php" class="btn">Get Free Quote</a>
            <a href="tel:<?php echo $biz['phone']; ?>" class="btn btn-secondary">Call <?php echo $biz['phoneDisp']; ?></a>
        </div>
    </div>
</section>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
        <a href="/">Home</a> &raquo; <a href="/areas/">Service Areas</a> &raquo; <span><?php echo $areaName; ?></span>
    </div>
</nav>

<!-- Intro / local content -->
<section class="section area-intro">
    <div class="container">
        <h2>Trusted Movers and Packers in <?php echo $areaName; ?> (<?php echo $pin; ?>)</h2>
        <p><?php echo $biz['name']; ?> is among the <strong>best packers and movers in <?php echo $areaName; ?>, Visakhapatnam</strong>. Whether you are shifting a 1BHK flat, a large villa or an entire office, our experienced local team handles your move end to end &mdash; expert packing, careful loading, on-time transportation and unpacking at your new address. We know <?php echo $areaName; ?> and surrounding landmarks such as <?php echo $area['landmarks']; ?>, so your relocation in and around <?php echo $district; ?> is fast and stress-free.</p>
        <p>As local <strong>movers and packers near <?php echo $areaName; ?></strong>, we offer transparent pricing with no hidden charges, quality packing materials, and trained staff. From within <?php echo $areaName; ?> to anywhere in Visakhapatnam, Andhra Pradesh, or across India &mdash; we make every move smooth and secure.</p>

        <h3>Our Services in <?php echo $areaName; ?></h3>
        <div class="services-grid" style="margin-top:25px;">
            <div class="service-card"><div class="service-content"><h3><a href="../packers-movers/home-relocation.php">Home Relocation</a></h3><p>Complete house shifting in <?php echo $areaName; ?> &mdash; packing, loading, moving and unpacking.</p></div></div>
            <div class="service-card"><div class="service-content"><h3><a href="../packers-movers/office-relocation.php">Office Relocation</a></h3><p>Quick, low-downtime office and commercial shifting in <?php echo $areaName; ?>.</p></div></div>
            <div class="service-card"><div class="service-content"><h3><a href="../packers-movers/packing-unpacking.php">Packing &amp; Unpacking</a></h3><p>Professional packing with quality materials for safe transit.</p></div></div>
            <div class="service-card"><div class="service-content"><h3><a href="../packers-movers/furniture-assembly.php">Furniture Assembly</a></h3><p>Dismantling and reassembly of furniture at your new home.</p></div></div>
            <div class="service-card"><div class="service-content"><h3><a href="../packers-movers/storage-solutions.php">Storage Solutions</a></h3><p>Secure short and long-term storage near <?php echo $areaName; ?>.</p></div></div>
            <div class="service-card"><div class="service-content"><h3><a href="../packers-movers/vehicle-transportation.php">Vehicle Transportation</a></h3><p>Safe car and bike transportation from <?php echo $areaName; ?>.</p></div></div>
        </div>

        <div class="chip-list" aria-label="Popular searches">
            <span class="chip">Packers and Movers in <?php echo $areaName; ?></span>
            <span class="chip">Movers and Packers near me</span>
            <span class="chip">Best packers and movers <?php echo $areaName; ?></span>
            <span class="chip">House shifting <?php echo $areaName; ?></span>
        </div>
    </div>
</section>

<!-- Why us (local) -->
<section class="section why-us">
    <div class="container">
        <div class="section-title">
            <h2>Why Choose Us in <?php echo $areaName; ?></h2>
            <p>The preferred relocation partner for families and businesses in <?php echo $areaName; ?> and <?php echo $district; ?></p>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon">📍</div><h3>Local Team</h3><p>Staff who know <?php echo $areaName; ?> roads, traffic and buildings for faster moves.</p></div>
            <div class="feature-card"><div class="feature-icon">💰</div><h3>Affordable Rates</h3><p>Competitive, transparent pricing for every <?php echo $areaName; ?> relocation.</p></div>
            <div class="feature-card"><div class="feature-icon">🛡️</div><h3>Safe Handling</h3><p>Quality packing and careful handling so your goods arrive safely.</p></div>
            <div class="feature-card"><div class="feature-icon">⚡</div><h3>On-Time Service</h3><p>Punctual pickup and delivery within the promised timeframe.</p></div>
        </div>
    </div>
</section>

<!-- Nearby areas (internal links) -->
<section class="section service-areas">
    <div class="container">
        <div class="section-title">
            <h2>We Also Serve Areas Near <?php echo $areaName; ?></h2>
            <p>Packers and movers across Visakhapatnam, Vizianagaram and Srikakulam</p>
        </div>
        <div class="nearby-grid">
            <?php foreach ($area['nearby'] as $n): if (isset($areas[$n])): ?>
                <a class="area-item" href="/areas/<?php echo $n; ?>">Packers &amp; Movers in <?php echo $areas[$n]['name']; ?></a>
            <?php endif; endforeach; ?>
            <a class="area-item" href="/areas/">View All Service Areas</a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>FAQs &mdash; Movers and Packers in <?php echo $areaName; ?></h2>
        </div>
        <div class="faq-container">
            <details class="faq-item" style="border:1px solid #eee;border-radius:8px;padding:15px 20px;margin-bottom:15px;">
                <summary style="font-weight:600;cursor:pointer;">Who are the best packers and movers in <?php echo $areaName; ?>, Visakhapatnam?</summary>
                <p style="margin-top:12px;"><?php echo $biz['name']; ?> is a trusted, locally based moving company serving <?php echo $areaName; ?> (<?php echo $pin; ?>) and all of Visakhapatnam with home shifting, office relocation, packing and transportation. Call <?php echo $biz['phoneDisp']; ?> for a free quote.</p>
            </details>
            <details class="faq-item" style="border:1px solid #eee;border-radius:8px;padding:15px 20px;margin-bottom:15px;">
                <summary style="font-weight:600;cursor:pointer;">How much do packers and movers cost in <?php echo $areaName; ?>?</summary>
                <p style="margin-top:12px;">Cost depends on the volume of goods, distance, floor level and services chosen (packing, loading, unpacking). We provide a free, transparent estimate with no hidden charges for any move in or from <?php echo $areaName; ?>.</p>
            </details>
            <details class="faq-item" style="border:1px solid #eee;border-radius:8px;padding:15px 20px;margin-bottom:15px;">
                <summary style="font-weight:600;cursor:pointer;">Do you provide movers and packers near me in <?php echo $areaName; ?>?</summary>
                <p style="margin-top:12px;">Yes. We serve every street and apartment in <?php echo $areaName; ?> and nearby areas including <?php echo $area['landmarks']; ?>. Our local team can usually reach you the same day for a survey.</p>
            </details>
        </div>
        <div class="local-cta" style="margin-top:30px;">
            <a href="../contact-us.php" class="btn">Get a Free Quote in <?php echo $areaName; ?></a>
        </div>
    </div>
</section>

<?php
// ----- Structured data (schema.org) for local SEO + AI search -----
$nearbyNames = array();
foreach ($area['nearby'] as $n) { if (isset($areas[$n])) { $nearbyNames[] = $areas[$n]['name']; } }

$moverSchema = array(
    '@context' => 'https://schema.org',
    '@type'    => 'MovingCompany',
    '@id'      => $canonical . '#business',
    'name'     => $biz['name'] . ' - ' . $areaName,
    'image'    => $biz['image'],
    'logo'     => $biz['logo'],
    'url'      => $canonical,
    'telephone'=> $biz['phone'],
    'email'    => $biz['email'],
    'priceRange' => '₹₹-₹₹₹',
    'description' => "Best packers and movers in {$areaName}, Visakhapatnam. Home & office relocation, packing, loading and transportation services near {$areaName} ({$pin}).",
    'address'  => array(
        '@type' => 'PostalAddress',
        'streetAddress' => $biz['street'],
        'addressLocality' => $biz['locality'],
        'addressRegion' => $biz['region'],
        'postalCode' => $biz['postal'],
        'addressCountry' => $biz['country'],
    ),
    'geo' => array(
        '@type' => 'GeoCoordinates',
        'latitude' => $area['lat'],
        'longitude' => $area['lng'],
    ),
    'areaServed' => array(
        array('@type' => 'Place', 'name' => $areaName . ', Visakhapatnam ' . $pin),
        array('@type' => 'City', 'name' => 'Visakhapatnam'),
    ),
    'openingHoursSpecification' => array(
        array('@type' => 'OpeningHoursSpecification', 'dayOfWeek' => array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'), 'opens' => '08:00', 'closes' => '20:00'),
        array('@type' => 'OpeningHoursSpecification', 'dayOfWeek' => 'Sunday', 'opens' => '09:00', 'closes' => '17:00'),
    ),
    'aggregateRating' => array(
        '@type' => 'AggregateRating', 'ratingValue' => '4.9', 'reviewCount' => '187',
    ),
);

$breadcrumbSchema = array(
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => array(
        array('@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $biz['url'] . '/'),
        array('@type' => 'ListItem', 'position' => 2, 'name' => 'Service Areas', 'item' => $biz['url'] . '/areas/'),
        array('@type' => 'ListItem', 'position' => 3, 'name' => $areaName, 'item' => $canonical),
    ),
);

$faqSchema = array(
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array(
        array('@type' => 'Question', 'name' => "Who are the best packers and movers in {$areaName}, Visakhapatnam?",
            'acceptedAnswer' => array('@type' => 'Answer', 'text' => "{$biz['name']} is a trusted, locally based moving company serving {$areaName} ({$pin}) and all of Visakhapatnam with home shifting, office relocation, packing and transportation. Call {$biz['phoneDisp']} for a free quote.")),
        array('@type' => 'Question', 'name' => "How much do packers and movers cost in {$areaName}?",
            'acceptedAnswer' => array('@type' => 'Answer', 'text' => "Cost depends on the volume of goods, distance, floor level and services chosen. We provide a free, transparent estimate with no hidden charges for any move in or from {$areaName}.")),
        array('@type' => 'Question', 'name' => "Do you provide movers and packers near me in {$areaName}?",
            'acceptedAnswer' => array('@type' => 'Answer', 'text' => "Yes. We serve every street and apartment in {$areaName} and nearby areas including {$area['landmarks']}. Our local team can usually reach you the same day for a survey.")),
    ),
);

$flags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
echo "\n<script type=\"application/ld+json\">\n" . json_encode($moverSchema, $flags) . "\n</script>\n";
echo "<script type=\"application/ld+json\">\n" . json_encode($breadcrumbSchema, $flags) . "\n</script>\n";
echo "<script type=\"application/ld+json\">\n" . json_encode($faqSchema, $flags) . "\n</script>\n";

include __DIR__ . '/../footer.php';
include __DIR__ . '/../js.php';

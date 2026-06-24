<?php
/**
 * Shared template for every state-wise (inter-state) landing page.
 *
 * A per-state stub sets $stateSlug and then includes this file, e.g:
 *   <?php $stateSlug = 'maharashtra'; include __DIR__ . '/_state-template.php'; ?>
 */

require_once __DIR__ . '/../areas/areas-data.php';

$states = emp_states();
$biz    = emp_business();

if (!isset($stateSlug) || !isset($states[$stateSlug])) {
    header('HTTP/1.1 404 Not Found');
    echo 'State not found.';
    exit;
}

$state     = $states[$stateSlug];
$stateName = $state['name'];
$capital   = $state['capital'];
$cities    = $state['cities'];
$cityList  = implode(', ', $cities);

// ----- SEO meta (consumed by header.php) -----
$title       = "Packers and Movers from Visakhapatnam to {$stateName} | {$biz['name']}";
$description  = "Reliable packers and movers from Visakhapatnam to {$stateName}. {$biz['name']} offers safe inter-state home & office relocation, packing and transportation to {$cityList} and across {$stateName}. Call {$biz['phoneDisp']} for a free quote.";
$keywords    = "packers and movers Visakhapatnam to {$stateName}, movers and packers {$stateName}, Vizag to {$stateName} relocation, inter state movers {$stateName}, household shifting Visakhapatnam to {$capital}, transport service {$stateName}";
$canonical   = "{$biz['url']}/states/{$stateSlug}";
$ogImage     = $biz['image'];

include __DIR__ . '/../header.php';
include __DIR__ . '/../css.php';
?>
<style>
    .state-hero {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('/best-packers-and-movers-in-visakhapatnam.jpeg') no-repeat center center/cover;
        color: var(--white); padding: 150px 0 70px; text-align: center;
    }
    .state-hero h1 { color: var(--white); font-size: 2.5rem; }
    .state-hero p { font-size: 1.15rem; max-width: 840px; margin: 0 auto 25px; }
    .breadcrumb { background: var(--light-color); padding: 12px 0; font-size: 0.9rem; }
    .breadcrumb a { color: var(--primary-color); }
    .state-intro p { font-size: 1.05rem; }
    .chip-list { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 20px; }
    .chip { background: var(--light-color); padding: 10px 18px; border-radius: 30px; font-weight: 600; }
    .city-grid { display: flex; flex-wrap: wrap; gap: 15px; justify-content: center; margin-top: 25px; }
</style>
<?php include __DIR__ . '/../navigation.php'; ?>

<!-- Hero -->
<section class="state-hero">
    <div class="container">
        <h1>Packers and Movers from Visakhapatnam to <?php echo $stateName; ?></h1>
        <p>Planning an inter-state move from Visakhapatnam to <?php echo $stateName; ?>? <?php echo $biz['name']; ?> provides safe, affordable and fully managed home &amp; office relocation, professional packing and door-to-door transportation to <?php echo $capital; ?> and across <?php echo $stateName; ?>.</p>
        <div>
            <a href="/contact-us.php" class="btn btn-accent">Get Free Quote</a>
            <a href="tel:<?php echo $biz['phone']; ?>" class="btn btn-secondary">Call <?php echo $biz['phoneDisp']; ?></a>
        </div>
    </div>
</section>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
        <a href="/">Home</a> &raquo; <a href="/states/">States We Serve</a> &raquo; <span><?php echo $stateName; ?></span>
    </div>
</nav>

<!-- Intro / content -->
<section class="section state-intro">
    <div class="container">
        <h2>Trusted Vizag to <?php echo $stateName; ?> Relocation Experts</h2>
        <p><?php echo $biz['name']; ?> is among the <strong>best packers and movers from Visakhapatnam to <?php echo $stateName; ?></strong>. Whether you are relocating a 1BHK home, a large household or an entire office, our experienced team manages your inter-state move end to end &mdash; expert packing, secure loading, GPS-tracked transportation and careful unpacking at your new address in <?php echo $stateName; ?>.</p>
        <p>We handle long-distance moves from Vizag to <?php echo $cityList; ?> and every major town in <?php echo $stateName; ?>, with transparent pricing, quality packing materials, insured transit options and trained staff. From Visakhapatnam to <?php echo $capital; ?> &mdash; we make every inter-state move smooth, safe and on time.</p>

        <h3>Cities We Serve in <?php echo $stateName; ?></h3>
        <div class="city-grid">
            <?php foreach ($cities as $c): ?>
                <span class="chip">Visakhapatnam to <?php echo $c; ?></span>
            <?php endforeach; ?>
        </div>

        <h3 style="margin-top:40px;">Our Inter-State Services</h3>
        <div class="services-grid" style="margin-top:25px;">
            <div class="service-card"><div class="service-content"><h3><a href="/packers-movers/home-relocation.php">Home Relocation</a></h3><p>Complete household shifting from Visakhapatnam to <?php echo $stateName; ?>.</p></div></div>
            <div class="service-card"><div class="service-content"><h3><a href="/packers-movers/office-relocation.php">Office Relocation</a></h3><p>Low-downtime office and commercial shifting to <?php echo $stateName; ?>.</p></div></div>
            <div class="service-card"><div class="service-content"><h3><a href="/packers-movers/packing-unpacking.php">Packing &amp; Unpacking</a></h3><p>Professional packing built for long-distance transit.</p></div></div>
            <div class="service-card"><div class="service-content"><h3><a href="/packers-movers/vehicle-transportation.php">Vehicle Transportation</a></h3><p>Safe car and bike transport from Vizag to <?php echo $capital; ?>.</p></div></div>
            <div class="service-card"><div class="service-content"><h3><a href="/packers-movers/storage-solutions.php">Storage Solutions</a></h3><p>Short and long-term storage for inter-state moves.</p></div></div>
            <div class="service-card"><div class="service-content"><h3><a href="/packers-movers/furniture-assembly.php">Furniture Assembly</a></h3><p>Dismantling and reassembly at your new home in <?php echo $stateName; ?>.</p></div></div>
        </div>

        <div class="chip-list" aria-label="Popular searches">
            <span class="chip">Packers and Movers Visakhapatnam to <?php echo $stateName; ?></span>
            <span class="chip">Vizag to <?php echo $capital; ?> shifting</span>
            <span class="chip">Inter-state movers <?php echo $stateName; ?></span>
            <span class="chip">Household transport to <?php echo $stateName; ?></span>
        </div>
    </div>
</section>

<!-- Why us -->
<section class="section why-us">
    <div class="container">
        <div class="section-title">
            <h2>Why Choose Us for Vizag to <?php echo $stateName; ?> Moves</h2>
            <p>The preferred inter-state relocation partner for families and businesses</p>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon">🚚</div><h3>Door-to-Door</h3><p>Pickup in Visakhapatnam and delivery anywhere in <?php echo $stateName; ?>.</p></div>
            <div class="feature-card"><div class="feature-icon">🛡️</div><h3>Safe &amp; Insured</h3><p>Quality packing and transit insurance options for long-distance moves.</p></div>
            <div class="feature-card"><div class="feature-icon">💰</div><h3>Transparent Rates</h3><p>Honest, all-inclusive pricing with no hidden charges.</p></div>
            <div class="feature-card"><div class="feature-icon">📍</div><h3>GPS Tracking</h3><p>Track your consignment from Vizag to <?php echo $capital; ?>.</p></div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>FAQs &mdash; Visakhapatnam to <?php echo $stateName; ?></h2>
        </div>
        <div class="faq-container">
            <details class="faq-item" style="border:1px solid #eee;border-radius:8px;padding:15px 20px;margin-bottom:15px;">
                <summary style="font-weight:600;cursor:pointer;">Do you provide packers and movers from Visakhapatnam to <?php echo $stateName; ?>?</summary>
                <p style="margin-top:12px;">Yes. <?php echo $biz['name']; ?> offers complete inter-state relocation from Visakhapatnam to <?php echo $cityList; ?> and all of <?php echo $stateName; ?> &mdash; packing, loading, transportation and unpacking. Call <?php echo $biz['phoneDisp']; ?> for a free quote.</p>
            </details>
            <details class="faq-item" style="border:1px solid #eee;border-radius:8px;padding:15px 20px;margin-bottom:15px;">
                <summary style="font-weight:600;cursor:pointer;">How much does it cost to move from Vizag to <?php echo $capital; ?>?</summary>
                <p style="margin-top:12px;">The cost depends on the volume of goods, distance, floor level and services chosen. Inter-state moves are quoted after a quick survey. We provide a free, transparent estimate with no hidden charges.</p>
            </details>
            <details class="faq-item" style="border:1px solid #eee;border-radius:8px;padding:15px 20px;margin-bottom:15px;">
                <summary style="font-weight:600;cursor:pointer;">How long does delivery to <?php echo $stateName; ?> take?</summary>
                <p style="margin-top:12px;">Transit time depends on the destination city in <?php echo $stateName; ?>. We share an estimated delivery schedule at the time of booking and keep you updated throughout the move.</p>
            </details>
        </div>
        <div class="local-cta" style="text-align:center;margin-top:30px;">
            <a href="/contact-us.php" class="btn">Get a Free Quote to <?php echo $stateName; ?></a>
        </div>
    </div>
</section>

<?php
// ----- Structured data (schema.org) -----
$moverSchema = array(
    '@context' => 'https://schema.org',
    '@type'    => 'MovingCompany',
    '@id'      => $canonical . '#business',
    'name'     => $biz['name'] . ' - Visakhapatnam to ' . $stateName,
    'image'    => $biz['image'],
    'logo'     => $biz['logo'],
    'url'      => $canonical,
    'telephone'=> $biz['phone'],
    'email'    => $biz['email'],
    'priceRange' => '₹₹-₹₹₹',
    'description' => "Packers and movers from Visakhapatnam to {$stateName}. Inter-state home & office relocation, packing and transportation to {$cityList}.",
    'address'  => array(
        '@type' => 'PostalAddress',
        'streetAddress' => $biz['street'],
        'addressLocality' => $biz['locality'],
        'addressRegion' => $biz['region'],
        'postalCode' => $biz['postal'],
        'addressCountry' => $biz['country'],
    ),
    'geo' => array('@type' => 'GeoCoordinates', 'latitude' => $biz['lat'], 'longitude' => $biz['lng']),
    'areaServed' => array(
        array('@type' => 'State', 'name' => $stateName),
        array('@type' => 'City', 'name' => $capital),
    ),
    'openingHoursSpecification' => array(
        array('@type' => 'OpeningHoursSpecification', 'dayOfWeek' => array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'), 'opens' => '08:00', 'closes' => '20:00'),
        array('@type' => 'OpeningHoursSpecification', 'dayOfWeek' => 'Sunday', 'opens' => '09:00', 'closes' => '17:00'),
    ),
    'aggregateRating' => array('@type' => 'AggregateRating', 'ratingValue' => '4.9', 'reviewCount' => '187'),
);

$breadcrumbSchema = array(
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => array(
        array('@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $biz['url'] . '/'),
        array('@type' => 'ListItem', 'position' => 2, 'name' => 'States We Serve', 'item' => $biz['url'] . '/states/'),
        array('@type' => 'ListItem', 'position' => 3, 'name' => $stateName, 'item' => $canonical),
    ),
);

$faqSchema = array(
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array(
        array('@type' => 'Question', 'name' => "Do you provide packers and movers from Visakhapatnam to {$stateName}?",
            'acceptedAnswer' => array('@type' => 'Answer', 'text' => "Yes. {$biz['name']} offers complete inter-state relocation from Visakhapatnam to {$cityList} and all of {$stateName}. Call {$biz['phoneDisp']} for a free quote.")),
        array('@type' => 'Question', 'name' => "How much does it cost to move from Vizag to {$capital}?",
            'acceptedAnswer' => array('@type' => 'Answer', 'text' => "The cost depends on the volume of goods, distance, floor level and services chosen. We provide a free, transparent estimate with no hidden charges.")),
        array('@type' => 'Question', 'name' => "How long does delivery to {$stateName} take?",
            'acceptedAnswer' => array('@type' => 'Answer', 'text' => "Transit time depends on the destination city in {$stateName}. We share an estimated delivery schedule at the time of booking and keep you updated throughout the move.")),
    ),
);

$flags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
echo "\n<script type=\"application/ld+json\">\n" . json_encode($moverSchema, $flags) . "\n</script>\n";
echo "<script type=\"application/ld+json\">\n" . json_encode($breadcrumbSchema, $flags) . "\n</script>\n";
echo "<script type=\"application/ld+json\">\n" . json_encode($faqSchema, $flags) . "\n</script>\n";

include __DIR__ . '/../footer.php';
include __DIR__ . '/../js.php';

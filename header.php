<?php
require_once __DIR__ . '/areas/areas-data.php';
$emp_biz = emp_business();

$title = isset($title) ? $title : "Excellent Movers and Packers | Best Packers and Movers in Visakhapatnam";   // Default title if not set
$description = isset($description) ? $description : "Excellent Movers and Packers - best packers and movers in Visakhapatnam, Andhra Pradesh. Safe, reliable and affordable home & office relocation, packing and moving services near you.";   // Default description
$keywords = isset($keywords) ? $keywords : "packers and movers, movers and packers, best packers and movers, best movers and packers, packers and movers near me, Visakhapatnam, Vizag, Andhra Pradesh, relocation, moving services, packing services, home shifting, office relocation";   // Default keywords
$ogImage = isset($ogImage) ? $ogImage : $emp_biz['image'];  // Default image for Open Graph
$canonical = isset($canonical) ? $canonical : null;          // Optional per-page canonical URL
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="Excellent Movers and Packers">
    <?php if ($canonical): ?><link rel="canonical" href="<?php echo $canonical; ?>"><?php endif; ?>

    <!-- Local SEO geo meta -->
    <meta name="geo.region" content="IN-AP">
    <meta name="geo.placename" content="Visakhapatnam">
    <meta name="geo.position" content="<?php echo $emp_biz['lat']; ?>;<?php echo $emp_biz['lng']; ?>">
    <meta name="ICBM" content="<?php echo $emp_biz['lat']; ?>, <?php echo $emp_biz['lng']; ?>">

    <!-- Open Graph for social media -->
    <meta property="og:type" content="business.business">
    <meta property="og:site_name" content="Excellent Movers and Packers">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="<?php echo $ogImage; ?>">
    <?php if ($canonical): ?><meta property="og:url" content="<?php echo $canonical; ?>"><?php endif; ?>

    <!-- Twitter card meta tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="<?php echo $ogImage; ?>">

    <!-- Site-wide LocalBusiness / MovingCompany schema (local SEO + AI search) -->
    <script type="application/ld+json">
    <?php
    $emp_site_schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'MovingCompany',
        '@id' => $emp_biz['url'] . '/#business',
        'name' => $emp_biz['name'],
        'alternateName' => 'Excellent Packers and Movers Visakhapatnam',
        'description' => 'Best packers and movers in Visakhapatnam offering home relocation, office relocation, packing & unpacking, furniture assembly, storage and vehicle transportation across Andhra Pradesh.',
        'url' => $emp_biz['url'],
        'logo' => $emp_biz['logo'],
        'image' => $emp_biz['image'],
        'telephone' => $emp_biz['phone'],
        'email' => $emp_biz['email'],
        'priceRange' => "\xE2\x82\xB9\xE2\x82\xB9-\xE2\x82\xB9\xE2\x82\xB9\xE2\x82\xB9",
        'address' => array(
            '@type' => 'PostalAddress',
            'streetAddress' => $emp_biz['street'],
            'addressLocality' => $emp_biz['locality'],
            'addressRegion' => $emp_biz['region'],
            'postalCode' => $emp_biz['postal'],
            'addressCountry' => $emp_biz['country'],
        ),
        'geo' => array('@type' => 'GeoCoordinates', 'latitude' => $emp_biz['lat'], 'longitude' => $emp_biz['lng']),
        'areaServed' => array(
            array('@type' => 'City', 'name' => 'Visakhapatnam'),
            array('@type' => 'City', 'name' => 'Vizianagaram'),
            array('@type' => 'City', 'name' => 'Srikakulam'),
            array('@type' => 'City', 'name' => 'Anakapalle'),
            array('@type' => 'State', 'name' => 'Andhra Pradesh'),
        ),
        'openingHoursSpecification' => array(
            array('@type' => 'OpeningHoursSpecification', 'dayOfWeek' => array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'), 'opens' => '08:00', 'closes' => '20:00'),
            array('@type' => 'OpeningHoursSpecification', 'dayOfWeek' => 'Sunday', 'opens' => '09:00', 'closes' => '17:00'),
        ),
        'aggregateRating' => array('@type' => 'AggregateRating', 'ratingValue' => '4.9', 'reviewCount' => '187'),
        'sameAs' => array($emp_biz['url']),
    );
    echo json_encode($emp_site_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    ?>
    </script>
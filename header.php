<?php 
$title = isset($title) ? $title : "Excellent Movers and Packers | Best Moving Services in Visakhapatnam";   // Default title if not set
$description = isset($description) ? $description : "Excellent Movers and Packers - Professional packing and moving services in Visakhapatnam, Andhra Pradesh. Safe, reliable and affordable relocation services.";   // Default description
$keywords = isset($keywords) ? $keywords : "movers, packers, Visakhapatnam, Andhra Pradesh, relocation, moving services, packing services, home shifting, office relocation";   // Default keywords
$ogImage = isset($ogImage) ? $ogImage : "excellent_movers_packers.png";  // Default image for Open Graph
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">

    <!-- Open Graph for social media -->
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="<?php echo $ogImage; ?>">

    <!-- Twitter card meta tags -->
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="<?php echo $ogImage; ?>">
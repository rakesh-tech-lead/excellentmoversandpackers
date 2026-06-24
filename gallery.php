<?php
$title       = "Gallery | Excellent Movers and Packers Visakhapatnam";
$description = "Photo gallery of Excellent Movers and Packers at work in Visakhapatnam — home and office relocation, professional packing, furniture assembly, storage and vehicle transport.";
$keywords    = "packers and movers gallery Visakhapatnam, moving company photos Vizag, relocation work gallery, packing photos";
$canonical   = "https://excellentmoversandpackers.com/gallery.php";
include('header.php');
include('css.php');
$biz = emp_business();
$gallery = emp_gallery();
?>
<style>
    .page-hero {
        background: linear-gradient(rgba(13,27,51,0.78), rgba(13,27,51,0.85)), url('/Excellent-Professional-Moving-and-Packing-Services-in-Visakhapatnam.jpeg') no-repeat center center/cover;
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
        <h1>Our Work Gallery</h1>
        <p>A look at <?php echo $biz['name']; ?> in action — real moves, careful packing and professional service across Visakhapatnam.</p>
    </div>
</section>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container"><a href="/">Home</a> &raquo; <span>Gallery</span></div>
</nav>

<section class="section">
    <div class="container">
        <div class="section-title">
            <span class="eyebrow">Gallery</span>
            <h2>Moments From Our Moves</h2>
            <p>Click any photo to view it larger</p>
        </div>
        <div class="gallery-grid">
            <?php foreach ($gallery as $g): ?>
                <div class="gallery-item">
                    <img src="<?php echo $g['src']; ?>" alt="<?php echo $g['caption']; ?>" loading="lazy">
                    <span class="g-zoom">&#128269;</span>
                    <div class="g-cap"><?php echo $g['caption']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
        <div style="text-align:center;margin-top:40px;">
            <a href="/contact-us.php" class="btn btn-accent">Get a Free Quote</a>
            <a href="tel:<?php echo $biz['phone']; ?>" class="btn btn-secondary">Call <?php echo $biz['phoneDisp']; ?></a>
        </div>
    </div>
</section>

<?php
$breadcrumbSchema = array(
    '@context' => 'https://schema.org', '@type' => 'BreadcrumbList',
    'itemListElement' => array(
        array('@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $biz['url'] . '/'),
        array('@type' => 'ListItem', 'position' => 2, 'name' => 'Gallery', 'item' => $canonical),
    ),
);
$imageGallery = array(
    '@context' => 'https://schema.org', '@type' => 'ImageGallery',
    'name' => $biz['name'] . ' Gallery', 'url' => $canonical,
    'image' => array(),
);
foreach ($gallery as $g) { $imageGallery['image'][] = $biz['url'] . $g['src']; }
$flags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
echo "\n<script type=\"application/ld+json\">\n" . json_encode($imageGallery, $flags) . "\n</script>\n";
echo "<script type=\"application/ld+json\">\n" . json_encode($breadcrumbSchema, $flags) . "\n</script>\n";

include('footer.php');
include('js.php');

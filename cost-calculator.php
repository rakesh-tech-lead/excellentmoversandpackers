<?php
$title       = "Packers and Movers Cost Calculator Visakhapatnam | Excellent Movers and Packers";
$description = "Free packers and movers cost calculator for Visakhapatnam. Get an instant estimate for local and inter-state home & office moves by size, distance and services. No hidden charges.";
$keywords    = "packers and movers cost calculator Visakhapatnam, moving cost estimate Vizag, shifting charges calculator, house moving price calculator Andhra Pradesh";
$canonical   = "https://excellentmoversandpackers.com/cost-calculator.php";
include('header.php');
include('css.php');
$biz = emp_business();
?>
<style>
    .page-hero {
        background: linear-gradient(rgba(13,27,51,0.78), rgba(13,27,51,0.85)), url('/best-packers-and-movers-in-visakhapatnam.jpeg') no-repeat center center/cover;
        color: var(--white); padding: 150px 0 70px; text-align: center;
    }
    .page-hero h1 { color: var(--white); font-size: 2.5rem; }
    .page-hero p { font-size: 1.15rem; max-width: 780px; margin: 0 auto; color: rgba(255,255,255,0.9); }
    .breadcrumb { background: var(--light-color); padding: 12px 0; font-size: 0.9rem; }
    .breadcrumb a { color: var(--primary-color); }
    .calc-wrap { max-width: 760px; margin: 0 auto; }
</style>
<?php include('navigation.php'); ?>

<section class="page-hero">
    <div class="container">
        <h1>Packers and Movers Cost Calculator</h1>
        <p>Get an instant estimate for your move in or from Visakhapatnam. Choose your size, distance and services for an approximate price range.</p>
    </div>
</section>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container"><a href="/">Home</a> &raquo; <span>Cost Calculator</span></div>
</nav>

<section class="section">
    <div class="container">
        <div class="calc-wrap">
            <?php include('cost-calculator-widget.php'); ?>
        </div>
    </div>
</section>

<section class="section why-us">
    <div class="container">
        <div class="section-title">
            <span class="eyebrow">How Pricing Works</span>
            <h2>What Decides Your Moving Cost</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon">📦</div><h3>Volume of Goods</h3><p>More items need a bigger vehicle and more labour. Declutter to save.</p></div>
            <div class="feature-card"><div class="feature-icon">🛣️</div><h3>Distance</h3><p>Local moves cost less than inter-city; fuel and tolls add up over distance.</p></div>
            <div class="feature-card"><div class="feature-icon">🏢</div><h3>Floor &amp; Access</h3><p>No lift, narrow stairs or long carry distance increase labour charges.</p></div>
            <div class="feature-card"><div class="feature-icon">🧰</div><h3>Services Chosen</h3><p>Full packing, storage and vehicle transport are optional add-ons.</p></div>
        </div>
        <div style="text-align:center;margin-top:30px;">
            <a href="/blog/packers-movers-cost-visakhapatnam" class="btn">Read the Full Cost Guide</a>
            <a href="/contact-us.php" class="btn btn-accent">Get a Free Quote</a>
        </div>
    </div>
</section>

<?php
$breadcrumbSchema = array(
    '@context' => 'https://schema.org', '@type' => 'BreadcrumbList',
    'itemListElement' => array(
        array('@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $biz['url'] . '/'),
        array('@type' => 'ListItem', 'position' => 2, 'name' => 'Cost Calculator', 'item' => $canonical),
    ),
);
$flags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
echo "\n<script type=\"application/ld+json\">\n" . json_encode($breadcrumbSchema, $flags) . "\n</script>\n";

include('footer.php');
include('js.php');

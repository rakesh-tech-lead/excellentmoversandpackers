<?php
require_once __DIR__ . '/areas-data.php';
$areas = emp_areas();
$biz   = emp_business();

$title       = "Packers and Movers in Visakhapatnam &ndash; All Service Areas | {$biz['name']}";
$description  = "Area-wise packers and movers in Visakhapatnam. {$biz['name']} serves Gajuwaka, MVP Colony, Madhurawada, Pendurthi, Gopalapatnam, Steel Plant, Vizianagaram, Srikakulam and more. Best movers and packers near you. Call {$biz['phoneDisp']}.";
$keywords    = "packers and movers Visakhapatnam, movers and packers Vizag, best packers and movers near me, area wise packers and movers Visakhapatnam, local movers Andhra Pradesh";
$canonical   = "{$biz['url']}/areas/";
$ogImage     = $biz['image'];

include __DIR__ . '/../header.php';
include __DIR__ . '/../css.php';
?>
<style>
    .area-hero {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('/best-packers-and-movers-in-visakhapatnam.jpeg') no-repeat center center/cover;
        color: var(--white); padding: 110px 0 70px; text-align: center;
    }
    .area-hero h1 { color: var(--white); font-size: 2.6rem; }
    .area-hero p { font-size: 1.15rem; max-width: 820px; margin: 0 auto; }
    .areas-cards { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px; margin-top: 30px; }
    .areas-cards a { background: var(--white); border:1px solid #eee; border-radius: 10px; padding: 20px; box-shadow: var(--shadow); transition: var(--transition); color: var(--dark-color); }
    .areas-cards a:hover { transform: translateY(-5px); border-color: var(--primary-color); }
    .areas-cards .ac-name { font-weight: 700; color: var(--primary-color); display:block; }
    .areas-cards .ac-pin { font-size: 0.85rem; color: #777; }
</style>
<?php include __DIR__ . '/../navigation.php'; ?>

<section class="area-hero">
    <div class="container">
        <h1>Packers and Movers in Visakhapatnam &ndash; Area Wise</h1>
        <p>Find the <strong>best packers and movers near you</strong>. <?php echo $biz['name']; ?> provides reliable home and office relocation, packing and transportation across every locality in Visakhapatnam, Vizianagaram and Srikakulam.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Choose Your Area</h2>
            <p>Local movers and packers serving all of Visakhapatnam and Andhra Pradesh</p>
        </div>
        <div class="areas-cards">
            <?php foreach ($areas as $slug => $a): ?>
                <a href="/areas/<?php echo $slug; ?>">
                    <span class="ac-name">Packers &amp; Movers in <?php echo $a['name']; ?></span>
                    <span class="ac-pin"><?php echo $a['district']; ?> &mdash; <?php echo $a['pincode']; ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
$itemList = array('@context' => 'https://schema.org', '@type' => 'ItemList', 'name' => 'Packers and Movers Service Areas in Visakhapatnam', 'itemListElement' => array());
$pos = 1;
foreach ($areas as $slug => $a) {
    $itemList['itemListElement'][] = array(
        '@type' => 'ListItem', 'position' => $pos++,
        'name' => 'Packers and Movers in ' . $a['name'],
        'url'  => $biz['url'] . '/areas/' . $slug,
    );
}
echo "\n<script type=\"application/ld+json\">\n" . json_encode($itemList, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n</script>\n";

include __DIR__ . '/../footer.php';
include __DIR__ . '/../js.php';

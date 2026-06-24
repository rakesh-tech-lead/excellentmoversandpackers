<?php
require_once __DIR__ . '/../areas/areas-data.php';
$states = emp_states();
$biz    = emp_business();

$title       = "Packers and Movers from Visakhapatnam to All India | {$biz['name']}";
$description  = "Inter-state packers and movers from Visakhapatnam to every state in India. {$biz['name']} provides home & office relocation, packing and transportation to Maharashtra, Karnataka, Telangana, Tamil Nadu, Delhi, West Bengal and all states. Call {$biz['phoneDisp']}.";
$keywords    = "packers and movers Visakhapatnam to all India, inter state movers Vizag, Visakhapatnam to other states relocation, household shifting Vizag to India, state wise packers and movers";
$canonical   = "{$biz['url']}/states/";
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
    .state-hero p { font-size: 1.15rem; max-width: 840px; margin: 0 auto; }
    .states-cards { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px; margin-top: 30px; }
    .states-cards a { background: var(--white); border:1px solid #eee; border-radius: 10px; padding: 20px; box-shadow: var(--shadow); transition: var(--transition); color: var(--dark-color); }
    .states-cards a:hover { transform: translateY(-5px); border-color: var(--primary-color); }
    .states-cards .sc-name { font-weight: 700; color: var(--primary-color); display:block; }
    .states-cards .sc-cap { font-size: 0.85rem; color: #777; }
    .zone-title { margin: 45px 0 5px; }
</style>
<?php include __DIR__ . '/../navigation.php'; ?>

<section class="state-hero">
    <div class="container">
        <h1>Packers and Movers from Visakhapatnam to All India</h1>
        <p>Moving out of Vizag? <?php echo $biz['name']; ?> provides safe, affordable inter-state home and office relocation, packing and transportation from Visakhapatnam to every state and union territory in India.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Choose Your Destination State</h2>
            <p>Inter-state movers and packers from Visakhapatnam across India</p>
        </div>
        <?php
        // Group states by zone for easier scanning
        $zones = array('South', 'West', 'North', 'Central', 'East', 'North East');
        $byZone = array();
        foreach ($states as $slug => $s) { $byZone[$s['zone']][$slug] = $s; }
        foreach ($zones as $zone):
            if (empty($byZone[$zone])) continue; ?>
            <h3 class="zone-title"><?php echo $zone; ?> India</h3>
            <div class="states-cards">
                <?php foreach ($byZone[$zone] as $slug => $s): ?>
                    <a href="/states/<?php echo $slug; ?>">
                        <span class="sc-name">Visakhapatnam to <?php echo $s['name']; ?></span>
                        <span class="sc-cap"><?php echo $s['type']; ?> &mdash; <?php echo $s['capital']; ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php
$itemList = array('@context' => 'https://schema.org', '@type' => 'ItemList', 'name' => 'Inter-State Packers and Movers from Visakhapatnam', 'itemListElement' => array());
$pos = 1;
foreach ($states as $slug => $s) {
    $itemList['itemListElement'][] = array(
        '@type' => 'ListItem', 'position' => $pos++,
        'name' => 'Packers and Movers from Visakhapatnam to ' . $s['name'],
        'url'  => $biz['url'] . '/states/' . $slug,
    );
}
echo "\n<script type=\"application/ld+json\">\n" . json_encode($itemList, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n</script>\n";

include __DIR__ . '/../footer.php';
include __DIR__ . '/../js.php';

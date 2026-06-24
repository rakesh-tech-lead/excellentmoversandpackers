<?php
/**
 * Global "locations" link block shown on every page (via footer.php).
 * Renders two SEO/internal-link sections:
 *   1. Area-wise packers & movers across Visakhapatnam
 *   2. Inter-state packers & movers from Visakhapatnam to all India
 *
 * Relies on emp_areas() / emp_states() (loaded by header.php -> areas-data.php).
 */
if (!function_exists('emp_areas')) {
    require_once __DIR__ . '/areas/areas-data.php';
}
$ll_areas  = function_exists('emp_areas')  ? emp_areas()  : array();
$ll_states = function_exists('emp_states') ? emp_states() : array();
?>
<style>
    .locations-links { background: var(--light-color); border-top: 1px solid var(--border); padding: 55px 0 45px; }
    .locations-links .ll-block + .ll-block { margin-top: 40px; }
    .locations-links h2 { font-size: 1.5rem; text-align: left; padding-bottom: 8px; }
    .locations-links h2:after { left: 0; transform: none; width: 60px; }
    .locations-links .ll-sub { color: var(--muted); margin-top: -4px; margin-bottom: 18px; font-size: 0.95rem; }
    .ll-tags { display: flex; flex-wrap: wrap; gap: 10px; }
    .ll-tags a {
        background: var(--white); border: 1px solid var(--border); color: var(--text-color);
        padding: 8px 14px; border-radius: 30px; font-size: 0.88rem; font-weight: 500; line-height: 1.2;
    }
    .ll-tags a:hover { background: var(--primary-color); color: #fff; border-color: var(--primary-color); }
    .ll-more { display: inline-block; margin-top: 16px; font-weight: 700; color: var(--secondary-color); }
    .ll-more:hover { color: var(--primary-color); }
    @media (max-width: 576px) { .locations-links .ll-tags a { font-size: 0.82rem; padding: 7px 12px; } }
</style>

<section class="locations-links" aria-label="Service locations">
    <div class="container">
        <!-- Area-wise links -->
        <div class="ll-block">
            <h2>Packers and Movers — Areas in Visakhapatnam</h2>
            <p class="ll-sub">Local home &amp; office shifting across every locality in Vizag</p>
            <div class="ll-tags">
                <?php foreach ($ll_areas as $slug => $a): ?>
                    <a href="/areas/<?php echo $slug; ?>">Packers &amp; Movers in <?php echo $a['name']; ?></a>
                <?php endforeach; ?>
            </div>
            <a class="ll-more" href="/areas/">View all service areas in Visakhapatnam →</a>
        </div>

        <!-- State-wise (inter-state) links -->
        <div class="ll-block">
            <h2>Packers and Movers — Visakhapatnam to All India</h2>
            <p class="ll-sub">Inter-state relocation from Vizag to every state &amp; union territory</p>
            <div class="ll-tags">
                <?php foreach ($ll_states as $slug => $s): ?>
                    <a href="/states/<?php echo $slug; ?>">Vizag to <?php echo $s['name']; ?></a>
                <?php endforeach; ?>
            </div>
            <a class="ll-more" href="/states/">View all states we serve across India →</a>
        </div>
    </div>
</section>

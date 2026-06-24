<?php
require_once __DIR__ . '/blog-data.php';
$posts = emp_posts();
$biz   = emp_business();

$title       = "Moving Tips & Relocation Guides Blog | {$biz['name']}";
$description = "Moving tips, packing guides, cost guides and inter-state relocation advice from Excellent Movers and Packers, Visakhapatnam. Plan a smooth, affordable move.";
$keywords    = "moving tips Visakhapatnam, packing guide, relocation blog Vizag, packers and movers blog, moving cost guide";
$canonical   = "{$biz['url']}/blog/";
$ogImage     = $biz['image'];

include __DIR__ . '/../header.php';
include __DIR__ . '/../css.php';
?>
<style>
    .blog-hero {
        background: linear-gradient(rgba(13,27,51,0.78), rgba(13,27,51,0.85)), url('/best-packers-and-movers-in-visakhapatnam.jpeg') no-repeat center center/cover;
        color: var(--white); padding: 150px 0 70px; text-align: center;
    }
    .blog-hero h1 { color: var(--white); font-size: 2.5rem; }
    .blog-hero p { font-size: 1.15rem; max-width: 760px; margin: 0 auto; color: rgba(255,255,255,0.9); }
    .blog-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 28px; margin-top: 30px; }
    .blog-card { background: var(--white); border: 1px solid var(--border); border-radius: var(--radius); overflow: hidden; box-shadow: var(--shadow); transition: var(--transition); display: flex; flex-direction: column; }
    .blog-card:hover { transform: translateY(-8px); box-shadow: var(--shadow-md); }
    .blog-card .bc-img { height: 190px; overflow: hidden; }
    .blog-card .bc-img img { width: 100%; height: 100%; object-fit: cover; transition: var(--transition); }
    .blog-card:hover .bc-img img { transform: scale(1.07); }
    .blog-card .bc-body { padding: 20px; display: flex; flex-direction: column; flex: 1; }
    .blog-card .bc-cat { color: var(--secondary-color); font-weight: 700; font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.5px; }
    .blog-card h2 { font-size: 1.2rem; text-align: left; padding: 0; margin: 8px 0 10px; }
    .blog-card h2:after { display: none; }
    .blog-card p { color: var(--muted); font-size: 0.95rem; }
    .blog-card .bc-more { margin-top: auto; font-weight: 700; color: var(--primary-color); }
    .blog-card .bc-date { color: #999; font-size: 0.82rem; margin-top: 10px; }
</style>
<?php include __DIR__ . '/../navigation.php'; ?>

<section class="blog-hero">
    <div class="container">
        <h1>Moving Tips &amp; Relocation Guides</h1>
        <p>Practical advice on packing, pricing and shifting your home or office in and around Visakhapatnam — from the team at <?php echo $biz['name']; ?>.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="blog-grid">
            <?php foreach ($posts as $slug => $p): ?>
                <article class="blog-card">
                    <a href="/blog/<?php echo $slug; ?>" class="bc-img" aria-label="<?php echo htmlspecialchars($p['title']); ?>">
                        <img src="<?php echo $p['image']; ?>" alt="<?php echo htmlspecialchars($p['title']); ?>" loading="lazy">
                    </a>
                    <div class="bc-body">
                        <span class="bc-cat"><?php echo $p['category']; ?></span>
                        <h2><a href="/blog/<?php echo $slug; ?>"><?php echo $p['title']; ?></a></h2>
                        <p><?php echo $p['excerpt']; ?></p>
                        <a class="bc-more" href="/blog/<?php echo $slug; ?>">Read more →</a>
                        <div class="bc-date"><?php echo date('F j, Y', strtotime($p['date'])); ?></div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
$itemList = array('@context' => 'https://schema.org', '@type' => 'Blog', 'name' => $biz['name'] . ' Blog', 'url' => $canonical, 'blogPost' => array());
foreach ($posts as $slug => $p) {
    $itemList['blogPost'][] = array(
        '@type' => 'BlogPosting',
        'headline' => $p['title'],
        'url' => $biz['url'] . '/blog/' . $slug,
        'datePublished' => $p['date'],
        'image' => $biz['url'] . $p['image'],
    );
}
echo "\n<script type=\"application/ld+json\">\n" . json_encode($itemList, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n</script>\n";

include __DIR__ . '/../footer.php';
include __DIR__ . '/../js.php';

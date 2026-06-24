<?php
/**
 * Shared template for every blog post.
 *
 * A per-post stub sets $postSlug and $body (HTML), then includes this file:
 *   <?php $postSlug = 'my-post'; $body = <<<'HTML' ... HTML; include __DIR__ . '/_post-template.php'; ?>
 */

require_once __DIR__ . '/blog-data.php';

$posts = emp_posts();
$biz   = emp_business();

if (!isset($postSlug) || !isset($posts[$postSlug])) {
    header('HTTP/1.1 404 Not Found');
    echo 'Post not found.';
    exit;
}

$post     = $posts[$postSlug];
$canonical = "{$biz['url']}/blog/{$postSlug}";
$title       = "{$post['title']} | {$biz['name']}";
$description = $post['excerpt'];
$keywords    = $post['keywords'];
$ogImage     = $biz['url'] . $post['image'];
$body        = isset($body) ? $body : '';

include __DIR__ . '/../header.php';
include __DIR__ . '/../css.php';
?>
<style>
    .post-hero {
        background: linear-gradient(rgba(13,27,51,0.78), rgba(13,27,51,0.85)), url('<?php echo $post['image']; ?>') no-repeat center center/cover;
        color: var(--white); padding: 150px 0 60px; text-align: center;
    }
    .post-hero .eyebrow { color: var(--accent-color); font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; font-size: 0.82rem; }
    .post-hero h1 { color: var(--white); font-size: 2.4rem; max-width: 860px; margin: 12px auto 14px; }
    .post-meta { color: rgba(255,255,255,0.88); font-size: 0.95rem; }
    .breadcrumb { background: var(--light-color); padding: 12px 0; font-size: 0.9rem; }
    .breadcrumb a { color: var(--primary-color); }
    .post-body { max-width: 800px; margin: 0 auto; }
    .post-body h2 { font-size: 1.6rem; text-align: left; margin: 34px 0 14px; padding-bottom: 8px; }
    .post-body h2:after { left: 0; transform: none; width: 60px; }
    .post-body h3 { font-size: 1.2rem; color: var(--primary-color); margin: 22px 0 8px; }
    .post-body p, .post-body li { font-size: 1.05rem; color: var(--text-color); }
    .post-body ul, .post-body ol { margin: 0 0 18px 22px; }
    .post-body li { margin-bottom: 8px; }
    .post-body strong { color: var(--dark-color); }
    .post-cta { background: var(--light-color); border: 1px solid var(--border); border-radius: var(--radius); padding: 26px; text-align: center; margin: 36px 0 10px; }
    .post-cta h3 { color: var(--primary-color); margin-bottom: 8px; }
    .related-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 22px; margin-top: 26px; }
    .related-grid a { background: var(--white); border: 1px solid var(--border); border-radius: 10px; padding: 18px; box-shadow: var(--shadow); transition: var(--transition); color: var(--dark-color); }
    .related-grid a:hover { transform: translateY(-5px); border-color: var(--primary-color); }
    .related-grid .rc-cat { color: var(--secondary-color); font-weight: 700; font-size: 0.8rem; text-transform: uppercase; }
    .related-grid .rc-title { display: block; font-weight: 700; color: var(--primary-color); margin-top: 6px; }
</style>
<?php include __DIR__ . '/../navigation.php'; ?>

<section class="post-hero">
    <div class="container">
        <span class="eyebrow"><?php echo $post['category']; ?></span>
        <h1><?php echo $post['title']; ?></h1>
        <div class="post-meta">By <?php echo $post['author']; ?> &middot; <?php echo date('F j, Y', strtotime($post['date'])); ?></div>
    </div>
</section>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
        <a href="/">Home</a> &raquo; <a href="/blog/">Blog</a> &raquo; <span><?php echo $post['title']; ?></span>
    </div>
</nav>

<article class="section">
    <div class="container">
        <div class="post-body">
            <?php echo $body; ?>

            <div class="post-cta">
                <h3>Need packers and movers in Visakhapatnam?</h3>
                <p>Get a free, no-obligation quote from a trusted local team. Same-day survey available.</p>
                <a href="/contact-us.php" class="btn btn-accent">Get Free Quote</a>
                <a href="tel:<?php echo $biz['phone']; ?>" class="btn btn-secondary">Call <?php echo $biz['phoneDisp']; ?></a>
            </div>
        </div>
    </div>
</article>

<!-- Related posts -->
<section class="section why-us">
    <div class="container">
        <div class="section-title">
            <span class="eyebrow">Keep Reading</span>
            <h2>More Moving Guides</h2>
        </div>
        <div class="related-grid">
            <?php $shown = 0; foreach ($posts as $slug => $p): if ($slug === $postSlug || $shown >= 3) continue; $shown++; ?>
                <a href="/blog/<?php echo $slug; ?>">
                    <span class="rc-cat"><?php echo $p['category']; ?></span>
                    <span class="rc-title"><?php echo $p['title']; ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
// ----- Structured data -----
$articleSchema = array(
    '@context' => 'https://schema.org',
    '@type'    => 'BlogPosting',
    '@id'      => $canonical . '#article',
    'headline' => $post['title'],
    'description' => $post['excerpt'],
    'image'    => $biz['url'] . $post['image'],
    'datePublished' => $post['date'],
    'dateModified'  => $post['updated'],
    'author'   => array('@type' => 'Organization', 'name' => $post['author'], 'url' => $biz['url']),
    'publisher'=> array('@id' => $biz['url'] . '/#business'),
    'mainEntityOfPage' => array('@type' => 'WebPage', '@id' => $canonical),
    'articleSection' => $post['category'],
    'inLanguage' => 'en-IN',
);

$breadcrumbSchema = array(
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => array(
        array('@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $biz['url'] . '/'),
        array('@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => $biz['url'] . '/blog/'),
        array('@type' => 'ListItem', 'position' => 3, 'name' => $post['title'], 'item' => $canonical),
    ),
);

$flags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
echo "\n<script type=\"application/ld+json\">\n" . json_encode($articleSchema, $flags) . "\n</script>\n";
echo "<script type=\"application/ld+json\">\n" . json_encode($breadcrumbSchema, $flags) . "\n</script>\n";

include __DIR__ . '/../footer.php';
include __DIR__ . '/../js.php';

<?php
/**
 * Central metadata for all blog posts (link-earning content assets).
 *
 * Keyed by URL slug (file name without ".php"). The body/content lives in each
 * post stub (blog/<slug>.php); this file holds the listing metadata reused by
 * the post template, the blog hub, the sitemap and llms.txt.
 *
 * Fields: title, excerpt, date, updated, category, image, author, keywords
 */
require_once __DIR__ . '/../areas/areas-data.php';

function emp_posts() {
    return array(
        'moving-checklist-visakhapatnam' => array(
            'title'    => 'The Ultimate Moving Checklist for Relocating in Visakhapatnam',
            'excerpt'  => 'A week-by-week moving checklist to plan a smooth, stress-free home shift anywhere in Visakhapatnam — what to do 4 weeks, 1 week and 1 day before the move.',
            'date'     => '2026-06-20',
            'updated'  => '2026-06-20',
            'category' => 'Moving Tips',
            'image'    => '/excellent-Home-Relocation.jpeg',
            'author'   => 'Excellent Movers and Packers',
            'keywords' => 'moving checklist Visakhapatnam, home shifting checklist, relocation planning Vizag, packing checklist',
        ),
        'packers-movers-cost-visakhapatnam' => array(
            'title'    => 'How Much Do Packers and Movers Cost in Visakhapatnam? (2026 Price Guide)',
            'excerpt'  => 'Realistic 2026 price ranges for local and inter-state moves from Visakhapatnam, the factors that decide your cost, and how to avoid hidden charges.',
            'date'     => '2026-06-16',
            'updated'  => '2026-06-16',
            'category' => 'Pricing',
            'image'    => '/best-packers-and-movers-in-visakhapatnam.jpeg',
            'author'   => 'Excellent Movers and Packers',
            'keywords' => 'packers and movers cost Visakhapatnam, moving charges Vizag, house shifting price, relocation cost Andhra Pradesh',
        ),
        'monsoon-moving-tips-vizag' => array(
            'title'    => 'Moving During Monsoon in Visakhapatnam: 9 Tips to Keep Your Goods Safe',
            'excerpt'  => 'Vizag monsoons (June–September) make moving tricky. Here is how to waterproof your belongings, schedule smartly and protect electronics during a rainy-season move.',
            'date'     => '2026-06-10',
            'updated'  => '2026-06-10',
            'category' => 'Moving Tips',
            'image'    => '/Excellent-Packing-and-Unpacking.jpeg',
            'author'   => 'Excellent Movers and Packers',
            'keywords' => 'monsoon moving tips, rainy season relocation Visakhapatnam, waterproof packing, safe moving Vizag',
        ),
        'vizag-to-hyderabad-bangalore-moving-guide' => array(
            'title'    => 'Vizag to Hyderabad & Bangalore: Your Inter-State Moving Guide',
            'excerpt'  => 'Planning a long-distance move from Visakhapatnam to Hyderabad or Bangalore? Transit times, documents, costs and how to choose a reliable inter-state mover.',
            'date'     => '2026-06-04',
            'updated'  => '2026-06-04',
            'category' => 'Inter-State Moving',
            'image'    => '/Excellent-Vehicle-Transportation.jpeg',
            'author'   => 'Excellent Movers and Packers',
            'keywords' => 'Vizag to Hyderabad packers and movers, Visakhapatnam to Bangalore relocation, inter state moving guide, long distance movers',
        ),
    );
}

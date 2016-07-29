<?php
require_once __DIR__.'/app/bootstrap.php';

// get services
/** @var \Symfony\Component\DependencyInjection\Container $container */
/** @var Twig_Environment $twig */
$twig = $container->get("twig.environment");

// preg global twig data
$data = require_once __DIR__ . '/app/bootstrap-theme.php';

// get content rows
$rows = [];
while(have_rows('content_rows')) {
    the_row();
    if(get_row_layout() == "news") {
        $args = [
            'numberposts' => 8,
            'offset' => 0,
            'category' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish',
            'suppress_filters' => true,
        ];
        $recent_posts = wp_get_recent_posts($args, ARRAY_A);
        $teasers = [];
        foreach($recent_posts as $post) {
            $teaser_data = [];
            $teaser_data['title'] = get_the_title($post['ID']);
            $teaser_data['excerpt'] = get_the_excerpt($post['ID']);
            $teaser_data['image'] = get_the_post_thumbnail($post['ID'], 'teaser');
            $teaser_data['link'] = get_the_permalink($post['ID']);
            $teasers[] = $twig->render("teasers/post.html.twig", $teaser_data);
        }
        $data['teasers'] = $teasers;
    }
    $rows[] = $twig->render('rows/'.get_row_layout().'.html.twig', $data);
}
$data['rows'] = $rows;

// render
echo $twig->render('basic.html.twig', $data);

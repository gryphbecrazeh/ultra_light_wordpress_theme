<?php
/*
Template Name: CustomPageTemplate
Template Post Type: post, page, event

*/


global $wp_query;
$post = $wp_query->post;
$post_id = $post->ID;
$custom_fields = get_post_custom($post_id);

$test_label = get_post_custom_values('test_label', $post_id);
die(var_export($test_label));
?>
<?php get_header(); ?>
<section class="title">
    <h1><?php the_title(); ?></h1>
</section>
<section class="custom_field">
    <?php
    echo $test_label;
    ?>
</section>
<?php

if (have_posts()) : while (have_posts()) : the_post();

        the_content();
    endwhile;
endif;


?>
<?php get_footer(); ?>
<?php
/*
Template Name: Christopher's Homepage Template
Template Post Type: page

*/
get_header();

global $wp_query, $current_user;
wp_get_current_user();

include_once(__DIR__ . '/includes/scripts.php');


$post = $wp_query->post;
$post_id = $post->ID;
$custom_fields = get_post_custom($post_id);
$introduction = get_field('introduction');
$title_tags = get_field('title_tags');
$projects_title = get_field('projects_title');
$projects_desc = get_field('projects_description');
$featured_project_1 = get_field('featured_project_1');
$featured_project_2 = get_field('featured_project_2');
$hero_background_image = get_field('hero_background_image');

?>

<section id="hero" style="background-image:url(<?php echo $hero_background_image ?>)">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 github-container">
                GITHUB OUTPUT
            </div>
            <div class="col-md-6 title-container">
                <h1><?php the_title(); ?></h1>
                <div class="subtitle">
                    <?php echo $title_tags; ?>
                </div>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

</section>

<?php

if ($introduction) {
?>
    <section id="introduction">

        <?php
        echo $introduction;
        ?>
    </section>
<?php
}

if (have_posts()) : while (have_posts()) : the_post();

        the_content();

    endwhile;

endif;

?>
<section id="projects">
    <div id="split-screen-wrapper" class="skewed">
        <div class="layer top">
            <div class="content-wrap">
                <div class="content-body">
                    <div class="heading">
                        <h3 class="inverse">Featured Projects</h3>
                        <div class="inverse"><?php echo $projects_desc ?></div>
                    </div>
                    <div class="content">
                        <?php echo $featured_project_1 ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="layer bottom">
            <div class="content-wrap">
                <div class="content-body">
                    <div class="heading">
                        <h3>Featured Projects</h3>
                        <div><?php echo $projects_desc ?></div>
                    </div>
                    <div class="content">
                        <?php echo $featured_project_1 ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
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
$featured_project_1 = get_field('featured_project_1')->ID;
$featured_project_2 = get_field('featured_project_2')->ID;
$hero_background_image = get_field('hero_background_image');
$github_feed = get_field('github_feed');
$h1_slider_text = get_field('h1_slider_text');
?>

<section id="hero" style="background-image:url(<?php echo $hero_background_image ?>)">
    <div class="container-fluid">
        <div class="row">
            <div class="d-none d-lg-block col-xl-3"></div>

            <div class="col-12 col-md-6 title-container">
                <?php
                if ($h1_slider_text) {
                ?>

                    <div class="customSlidingText">
                        <?php
                        echo $h1_slider_text;
                        ?>
                    </div>

                <?php
                } else {
                ?>
                    <h1>
                        <?php
                        the_title();
                        ?>
                    </h1>
                <?php
                }
                ?>
                <div class="subtitle tech-container">
                    <?php echo $title_tags; ?>
                </div>

            </div>
            <div class="d-none d-md-block col-md-6 col-xl-3">
                <div class="github-container">
                    <div class="title">Recent GitHub Activity</div>
                    <?php do_shortcode('[display_gh_repos user="gryphbecrazeh"]') ?>

                </div>
            </div>
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
    <div id="split-screen-wrapper" class="skewed d-none d-lg-block">
        <div class="layer top">
            <div class="content-wrap">
                <div class="content-body">
                    <div class="heading">
                        <h3 class="inverse">Featured Projects</h3>
                        <div class="inverse"><?php echo $projects_desc ?></div>
                    </div>
                    <div class="content">
                        <?php
                        $title = get_the_title($featured_project_1);
                        $technologies = explode("\n", PHP_TOOLBOX::get_custom_field_values('technologies', $featured_project_1));
                        $tagline = PHP_TOOLBOX::get_custom_field_values('tag_line', $featured_project_1);
                        ?>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $title; ?></h5>
                                <p class="card-text">
                                    <?php echo $tagline; ?>
                                </p>
                                <div class="card-text built-with">
                                    <strong>Built With:</strong>
                                    <ul class="technologies">
                                        <?php
                                        foreach ($technologies as $tech) {
                                        ?>
                                            <li class="tech"><?php echo $tech ?></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>


                            </div>
                        </div>
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
                        <?php
                        $title = get_the_title($featured_project_2);
                        $technologies = explode("\n", PHP_TOOLBOX::get_custom_field_values('technologies', $featured_project_2));
                        $tagline = PHP_TOOLBOX::get_custom_field_values('tag_line', $featured_project_2);
                        ?>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $title; ?></h5>
                                <p class="card-text">
                                    <?php echo $tagline; ?>
                                </p>
                                <div class="card-text built-with">
                                    <strong>Built With:</strong>
                                    <ul class="technologies">
                                        <?php
                                        foreach ($technologies as $tech) {
                                        ?>
                                            <li class="tech"><?php echo $tech ?></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<?php
/*
Template Name: Project Template
Template Post Type: post, page, event

*/


global $wp_query;

$tech = explode("\n", get_field('technologies'));
?>
<?php get_header(); ?>
<section id="post-title">
    <h1><?php the_title(); ?></h1>
</section>
<section id="post-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 left">
                <?php if (get_field('github_link')) {
                ?>
                    <div class="github-repo"> <a href="<?php echo the_field('github_link'); ?>"><strong>GitHub Repository</strong></a></div>
                <?php
                } ?>
                <?php if (get_field('heroku_link')) {
                ?>
                    <div class="heroku-repo"> <strong>Heroku Repository:</strong> <?php echo the_field('heroku_link'); ?>
                    </div>
                <?php
                } ?>

            </div>
            <div class="col-md-6 center">

                <?php
                if (have_posts()) : while (have_posts()) : the_post();

                        the_content();
                    endwhile;
                endif;
                ?>
            </div>
            <div class="col-md-3 right">
                <?php
                if (get_field('technologies')) {
                ?>
                    <div class="technology-container">
                        <strong>Technologies used:</strong>
                        <ul class="technologies">
                            <?php
                            foreach ($tech as $t) {
                            ?>
                                <li class="technology">
                                    <?php echo $t ?>
                                </li>
                            <?php
                            }

                            ?>
                        </ul>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
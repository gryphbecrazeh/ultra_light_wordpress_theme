<?php get_header(); ?>
<section class="title">
    <h1><?php single_cat_title(); ?></h1>
</section>
<?php

if (have_posts()) : while (have_posts()) : the_post();
?>
        <div class="card">
            <div class="card-body">
                <h3><?php the_title(); ?></h3>
                <?php
                the_excerpt();
                ?>
                <a href="<?php the_permalink(); ?>" class='btn btn-success'>Read More...</a>
            </div>
        </div>
<?php
    endwhile;
endif;


?>
<?php get_footer(); ?>
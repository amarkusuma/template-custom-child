<?php get_header(); ?>

<div class="row ">
    <!-- <?php if (of_get_option('limit_options')) {
            } ?> -->

    <?php
    $limit = of_get_option('limit_options');
    global $wp_query;
    $args = array_merge($wp_query->query_vars, ['posts_per_page' => $limit]);

    query_posts($args);
    if (have_posts()) {
        while (have_posts()) : the_post();
    ?>
            <div class="blog-post">
                <h2 class="blog-post-title"><?php the_title() ?></h2>
                <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
                <?php the_content(); ?>

            </div>

    <?php
        endwhile;
    }
    ?>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
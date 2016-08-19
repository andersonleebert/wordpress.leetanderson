<?php
get_header();
?>


<h2 class="entry-title">| <?php the_title(); ?></h2>
<?php while ( have_posts() ) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
        <div class="entry-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    <!-- <div class="container"> -->
    <div class="entry-content">
        <?php the_content(); ?>
    </div><!-- .entry-content -->
</div><!-- #post -->
<?php //comments_template(); ?>
<?php endwhile; ?>


<?php get_footer(); ?>

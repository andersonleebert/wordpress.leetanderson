<?php
get_header();
?>
<div class="row">
    <div class="large-5 small-12 columns small-centered">
        <p class="largeLogo"><img src="<?php bloginfo('template_url'); ?>/images/LogoWithName.png" /></p>
    </div>
</div>
<div class="row">
    <div class="large-8 small-12 columns small-centered">
        <h2 class="metria">| <a href="/WebDev240/wordpress/work/">Work</a></h2>
    </div>
</div>
<div class="row">
    <div class="large-12 columns">
        <div class="row">
            <?php $my_query = new WP_Query( 'category_name=featured' );
            while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                <div class="large-4 medium-4 columns">
                    <div class="row">
                        <div class="image-wrapper overlay-fade-in">
                            <?php the_post_thumbnail( ); ?>
                            
                            <div class="image-overlay-content">
                                <h2><?php the_title();  ?></h2>
                                <a href="<?php the_permalink() ?>">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>


    </div>
</div>
<?php while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
            <div class="entry-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>

        <div class="entry-content">
            <?php the_content(); ?>
        </div><!-- .entry-content -->
    </div><!-- #post -->
<?php endwhile; ?>

<?php get_footer(); ?>

<?php
get_header();
?>

<div class="row">
    <div class="large-8 small-12 columns small-centered">
        <h2 class="metria">| <?php the_title(); ?></h2>
    </div>
</div>
<div class="row">
<?php while ( have_posts() ) : the_post(); ?>

    <div class="small-12 medium-8 small-centered columns"><?php the_content(); ?></div>

</div>

<?php endwhile; ?>

<?php get_footer(); ?>

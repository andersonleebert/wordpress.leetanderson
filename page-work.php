<?php
get_header();
?>
<div class="row">
    <div class="large-8 small-12 columns small-centered">
        <h2 class="metria">| Work</h2>
    </div>
</div>
<div class="row">
    <div class="large-8 small-12 small-centered columns">
        <dl class="tabs" data-tab>
          <dd class="active"><a href="#panel1">All</a></dd>
          <dd><a href="#panel2">Video</a></dd>
          <dd><a href="#panel3">Graphic</a></dd>
          <dd><a href="#panel4">Animation</a></dd>
        </dl>
    </div>
    
    <div class="tabs-content panel">
        <div class="content active" id="panel1">
            <div class="row">

                <?php $postData = query_posts('category_name=video,graphic,animation'); ?>
                <?php $postCount = 0; ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php $postCount++ ?>
                    <div class="medium-6 large-4 columns<?php if ($postCount == count($postData)) {echo " end";}; ?>">
                        <div class="callout-card info">
                            <div class="callout-card-content">
                                <h3 class="lead"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( ); ?></a></div>
                            </div>
                        </div>
                    </div> 

                
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>





        <div class="content" id="panel2">
            <div class="row">

                <?php $postData = query_posts('category_name=video'); ?>
                <?php $postCount = 0; ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php $postCount++ ?>
                    <div class="medium-6 large-4 columns<?php if ($postCount == count($postData)) {echo " end";}; ?>">
                        <div class="callout-card info">
                            <div class="callout-card-content">
                                <h3 class="lead"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( ); ?></a></div>
                            </div>
                        </div>
                    </div> 

                
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
        <div class="content" id="panel3">
            <div class="row">

                <?php $postData = query_posts('category_name=graphic'); ?>
                <?php $postCount = 0; ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php $postCount++ ?>
                    <div class="medium-6 large-4 columns<?php if ($postCount == count($postData)) {echo " end";}; ?>">
                        <div class="callout-card info">
                            <div class="callout-card-content">
                                <h3 class="lead"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( ); ?></a></div>
                            </div>
                        </div>
                    </div> 

                
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
        <div class="content" id="panel4">
            <div class="row">

                <?php $postData = query_posts('category_name=animation'); ?>
                <?php $postCount = 0; ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php $postCount++ ?>
                    <div class="medium-6 large-4 columns<?php if ($postCount == count($postData)) {echo " end";}; ?>">
                        <div class="callout-card info">
                            <div class="callout-card-content">
                                <h3 class="lead"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( ); ?></a></div>
                            </div>
                        </div>
                    </div> 

                
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>

 
<?php get_footer(); ?>

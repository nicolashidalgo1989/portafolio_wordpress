<?php get_header(); ?> 

    <?php if( have_posts() ):
        
        while( have_posts() ): the_post(); ?>

            <div class="col-lg-3 col-sm-4"> 
                <p> <?php the_title(); ?> </p> 
                <p> <?php the_content(); ?> </p> 
            </div>

        <?php endwhile;
    
    endif; ?>

<?php get_footer(); ?>
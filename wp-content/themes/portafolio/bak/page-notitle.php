<?php 

/*
    Template Name: No Title
*/

get_header(); ?> 

    <?php if( have_posts() ): ?>

        <h2>This is my Static Title</h2>
        
        <?php while( have_posts() ): the_post(); ?>

            <div class="col-lg-3 col-sm-4"> 
                <p> <?php the_title(); ?> </p> 
                <p> <?php the_content(); ?> </p> 
            </div>

        <?php endwhile;
    
    endif; ?>

<?php get_footer(); ?>
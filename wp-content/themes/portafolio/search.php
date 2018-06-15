<?php 
/*
Template Name: Search Page
*/
get_header(); 
?> 


<section class="page">
    <div class="container">
        <h2> <?php printf( __( 'Resultados de búsqueda para: %s', 'nh_portafolio' ), get_search_query() ); ?>  </h2> 
        <div class="row">
 

		<?php if ( have_posts() ) : ?> 

            <?php

                while ( have_posts() ) : the_post(); ?>

                    <?php 
                    
                    get_template_part( 'content', 'search' );
                
                endwhile;

                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'nh_portafolio' ),
                    'next_text'          => __( 'Next page', 'nh_portafolio' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'nh_portafolio' ) . ' </span>',
                ) );

                // If no content, include the "No posts found" template.
                else :
                get_template_part( 'content', 'none' );

                endif;

            ?>

        </div> 
    </div>
</section>

<?php get_footer(); ?>
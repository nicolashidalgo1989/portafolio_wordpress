<?php 
/*
Template Name: Search Page
*/
get_header(); 
?>  
<section class="page">

    <div class="container">   

        <h2> <?php printf( __( 'Resultados de búsqueda para: %s', 'nh_portafolio' ), get_search_query() ); ?> </h2>  

        <div class="row">
                  
            <?php if ( have_posts() ) : ?> 

                <?php while ( have_posts() ) : the_post(); ?> 

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 card <?php echo get_category_link( $post-> ID); ?>">
                    <figure>
                        <img src="assets/img/caspar-rubin-224229-unsplash.jpg" alt="" class="background-image">
                        <figcaption>
                            <h3> <?php the_title(); ?> </h3>
                            <p> <?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-white">Ver proyecto</a>
                        </figcaption>   
                    </figure> 
                </div> 

                <?php endwhile; ?>

            <?php else: ?>
                <div class="col-12 text-center">
                    <p>No hay resultados para tu b&uacute;suqeda.</p> 
                    <a href="<?php echo get_category_link($categoria->cat_ID) ?>" class="btn-white">Ver blog</a>
                </div>
            <?php endif;?>   

        </div>
    </div> 
</section> 
<?php get_footer(); ?>
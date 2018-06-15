<?php get_header(); ?> 
 
<section class="blog">
        
        <div class="container">
        
            <h2>Blog</h2> 
  
            <div class="row">

                <?php 
                    if ( have_posts() ):
                        
                        while( have_posts() ): the_post(); ?>

                            <div class="col-lg-3 col-sm-4 card"> 
                                <figure>
                                    <?php the_post_thumbnail('medium', array('class' => 'background-image')); ?>
                                    <figcaption> 
                                        <p> <?php the_title(); ?> </p> 
                                        <p> <?php the_excerpt(); ?> </p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-white">Ver proyecto</a>
                                    </figcaption>  
                                </figure>    
                            </div>

                        <?php endwhile;
                    
                    endif; 
                ?>

            </div>

        </div>

    </section>

<?php get_footer(); ?>
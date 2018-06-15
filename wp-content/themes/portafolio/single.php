<?php  get_header();  ?> 

<section class="banner"> 
        <div class="content">
            <h2><?php the_title(); ?></h2>  
        </div>
        <?php the_post_thumbnail('large', array('class'=>'background-image')); ?>
    </section>
    <div class="container entrada">
        <div class="row">
            <div class="col-md-8 col-12 offset-md-2">
                <nav class="tags">
                    Tags:  
                    <?php
                        $post_tags = get_the_tags(); 
                        if ( $post_tags ) {
                            foreach( $post_tags as $tag ) {
                    ?> 
                        <a href=""><?php echo $tag->name; ?></a>
                    <?php
                            }
                        }
                    ?> 
                </nav>
                <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();

                       the_content();

                    endwhile;
                    ?>

            </div>
        </div>
    </div>  

<?php get_footer(); ?>
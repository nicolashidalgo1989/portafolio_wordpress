<?php 
/*
Template Name: Contact Page
*/
get_header(); 
?>  
<?php while(have_posts()): the_post(); ?>
    <section <?php body_class( $portafolio_classes ); ?> >

        <h2><?php the_title(); ?></h2> 

        <div class="container">   

            <div class="row">
                <div class="col-lg-4 col-md-6 offset-lg-2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae id, dolorem nostrum ea dignissimos rerum similique repellat, eveniet consequatur nulla quae dolo.</p>
                    <ul class="rss">
                        <li>
                            <a href="">
                                <i class="fab fa-behance"></i>
                                @nicolashidalgo 
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-github"></i>
                                @nicolashidalgo1989
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                                fb.com/nicolashidalgo1989
                            </a>
                        </li>
                    </ul>
                </div>   
                <div class="col-lg-4 col-md-6">
                    <?php the_content(); ?>
                </div>          
            </div>
        </div> 
    </section>
<?php endwhile;?>
<?php get_footer(); ?>
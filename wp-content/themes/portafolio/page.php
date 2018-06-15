<?php get_header(); ?> 
    <?php while(have_posts()): the_post(); ?>
        <section <?php body_class( $portafolio_classes ); ?> >
            <div class="container">
                <?php the_title('<h2>', '</h2>'); ?>
                <?php the_content(); ?>
            </div>
        </section>
    <?php endwhile;?>
<?php get_footer(); ?>

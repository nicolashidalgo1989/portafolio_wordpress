<div class="col-lg-3 col-sm-4"> 
    <?php the_post_thumbnail('medium'); ?>
    <h3> <?php the_title(); ?> </h3>
    <small>Posted on: 
        <?php the_time('F j, Y'); ?>, at <?php the_time('g: i a'); ?> in
        <?php the_category(); ?>
    </small>
    <p> <?php the_content(); ?> </p>
    <a href="<?php the_permalink(); ?>" class="btn-white" title="<?php echo get_the_title(); ?>"><?php the_title(); ?><a></a>
</div>
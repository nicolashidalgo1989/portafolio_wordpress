<?php get_header(); ?> 
 
<section class="page">

    <h2><?php the_title(); ?></h2> 

    <?php 
        $categorias = get_categories();
        $posts = get_posts();
    ?> 

    <nav class="tab">

        <a href="javascript:void(0);" class="btn active" onclick="filterSelection('<?php echo strtolower($categorias) ?>')">Todas</a> 

        <?php foreach($categorias as $categoria) { ?> 

            <a href="javascript:void(0);" class="btn" onclick="filterSelection('<?php echo $categoria->cat_ID ?>')"><?php echo $categoria->cat_name ?></a> 

        <?php } ?>

    </nav>

    <div class="row">

        <?php foreach($posts as $post) {?> 
 
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 card <?php echo get_category_link( $post-> ID); ?>">
                <figure>
                    <img src="assets/img/caspar-rubin-224229-unsplash.jpg" alt="" class="background-image">
                    <figcaption>
                        <h3> <?php echo $post->the_title ?> </h3>
                        <p> <?php echo $post->the_excerpt ?> </p>
                        <a href="<?php echo the_permalink(); ?>" class="btn btn-white">
                            Ver proyecto
                        </a>
                    </figcaption>   
                </figure> 
            </div>

        <?php } ?>

    </div>

    <pre>
        <?php

            //var_dump($posts)
        
        ?>
    </pre> 
    
</section>

<?php get_footer(); ?>
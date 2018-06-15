<?php get_header(); ?> 
 
<section class="page">

    <h2><?php the_title(); ?></h2> 

    <?php 
        $categorias = get_categories();  
    ?>

    <div class="row aligner text-center">
        <?php foreach($categorias as $categoria) {?> 

            <div class="col-lg-3 col-sm-4">

                <a href="<?php echo get_category_link($categoria->cat_ID) ?>">
                    <i class="<?php echo $categoria->description ?>"></i>
                </a>
                <h3><a href="<?php echo get_category_link($categoria->cat_ID) ?>"> <?php echo $categoria->name ?> </a></h3>
                <p>Trabajos de <?php echo $categoria->name ?> </p>
                <a href="<?php echo get_category_link($categoria->cat_ID) ?>" class="btn-white">Ver portafolio</a> 

            </div>

        <?php } ?>
    </div>
    
    <pre>
        <?php //var_dump($categorias) ?>
    </pre> 

</section>

<?php get_footer(); ?>
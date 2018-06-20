<?php get_header(); ?> 

<section class="home">
    <div class="container aligner">
        <div class="row">
            <div class="col-lg-12"> 
                <svg class="logo" width="200" height="100" viewBox="0 0 200 100">
                    <path d="M0 70 L 70 70, 70 30, 100 90, 100 50, 200 50" class="path round"> </path>
                </svg>  
            </div>
            <div class="col-lg-12">
                <h2>I´m a front-end developer designer &amp; illustrator</h2>    
                <a href="contacto" class="btn-white">Contactar</a>
            </div>
        </div>
    </div> 
</section>

<section class="servicios">
    
    <h2>Servicios</h2>

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
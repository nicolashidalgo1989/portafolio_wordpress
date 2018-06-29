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
                <h2><?php bloginfo(description); ?> </h2>    
                <a href="#contacto" class="btn-white">Contactar</a>
            </div>
        </div>
    </div> 
</section>

<section id="contacto">

    <h2>Servicios</h2> 

    <?php 
        $categorias = get_categories();  
    ?>

    <div class="row aligner text-center">
        <?php foreach($categorias as $categoria) {?> 

            <div class="col-lg-3 col-sm-4">

                <a href="<?php echo get_category_link($categoria->cat_ID) ?>" class="icon-green">
                    <i class="<?php echo $categoria->description ?>"></i>
                </a>
                <h3><a href="<?php echo get_category_link($categoria->cat_ID) ?>"> <?php echo $categoria->name ?> </a></h3>
                <p>Trabajos de <?php echo $categoria->name ?> </p>
                <a href="<?php echo get_category_link($categoria->cat_ID) ?>" class="btn-white">Ver portafolio</a> 

            </div>

        <?php } ?>
    </div>

</section>
 
<section id="contacto" >

    <h2>Contacto</h2> 

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
                <?php while(have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile;?>
            </div>          
        </div>
    </div> 
</section> 

<?php get_footer(); ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  <?php bloginfo(name); ?> - <?php bloginfo(description); ?> </title>   
    <?php wp_head(); ?> 
</head>   
<body> 
    <header class="header" id="header">
        <div class="container">
            <div class="row">
                <div class="col-5 text-left"> 
                    <h1 class="title-brand"> 
                        <a href="inicio">
                            <strong>nh</strong>design
                        </a>   
                    </h1> 
                </div> 
                <div class="col-2 text-center">
                    <div class="btn-menu"></div>
                </div>  
                <?php get_search_form(); ?>
                <nav class="col-md-4 offset-md-4 col-12 menu hidden text-center">
                    <?php wp_nav_menu(array('theme_locaton'=>'primary')); ?>
                </nav> 
            </div>
        </div>
    </header>
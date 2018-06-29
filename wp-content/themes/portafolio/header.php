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
                <div class="col-1 text-left">
                    <a href="/">  
                        <svg class="logo" width="100" height="65" viewbox="0 0 100 130"> 
                            <path class="path round"> </path>
                        </svg>  
                    </a> 
                </div> 
                <div class="col-2 offset-4 text-center">
                    <div class="btn-menu"></div>
                </div>  
                <?php get_search_form(); ?>
                <nav class="col-md-4 offset-md-4 col-12 menu hidden text-center">
                    <?php wp_nav_menu(array('theme_locaton'=>'primary')); ?>
                </nav> 
            </div>
        </div>
    </header>
<?php  

/*
    Template Name: Portafolio
*/

get_header(); ?> 

<section class="portafolio" id="portafolio">
        <div class="container">
            <h2>Portfolio</h2>
            <nav class="tab">
                <a href="javascript:void(0);" class="btn active" onclick="filterSelection('all')">All</a>
                <a href="javascript:void(0);" class="btn" onclick="filterSelection('design')">Design</a>
                <a href="javascript:void(0);" class="btn" onclick="filterSelection('web')">Web</a>
                <a href="javascript:void(0);" class="btn" onclick="filterSelection('ilustration')">Ilustration</a>
            </nav>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 card ilustration">
                    <figure>
                        <img src="assets/img/caspar-rubin-224229-unsplash.jpg" alt="" class="background-image">
                        <figcaption>
                            <h3>Proyecto Ilustracion</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, totam distinctio.</p>
                            <a href="entrada.html" class="btn btn-white">Ver proyecto</a>
                        </figcaption>   
                    </figure> 
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 card web">
                    <figure>
                        <img src="assets/img/caspar-rubin-224229-unsplash.jpg" alt="" class="background-image">
                        <figcaption>
                            <h3>Proyecto Web</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, totam distinctio.</p>
                            <a href="entrada.html" class="btn btn-white">Ver Proyecto</a>
                        </figcaption>   
                    </figure> 
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 card design">
                    <figure>
                        <img src="assets/img/caspar-rubin-224229-unsplash.jpg" alt="" class="background-image">
                        <figcaption>
                            <h3>Proyecto Diseño</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, totam distinctio.</p>
                            <a href="entrada.html" class="btn btn-white">Ver Proyecto</a>
                        </figcaption>   
                    </figure> 
                </div> 
            </div>
        </div>  
    </section>  

<?php get_footer(); ?>
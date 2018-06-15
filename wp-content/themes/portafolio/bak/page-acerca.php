<?php  

/*
    Template Name: Acerca
*/

get_header(); ?> 

<section class="about" id="about">
    <div class="container">
        <h2><?php the_title(); ?></h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 offset-lg-2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi laboriosam tenetur soluta fugit! Numquam sequi repellat distinctio earum omnis reiciendis, facere qui quis eveniet corporis commodi esse nemo officiis!</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <img src="assets/img/caspar-rubin-224229-unsplash.jpg" alt="About" class="img-fluid">
            </div>
        </div>
    </div>
</section> 

<?php get_footer(); ?>
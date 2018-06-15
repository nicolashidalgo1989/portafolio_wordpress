<?php  

/*
    Template Name: Contacto
*/

get_header(); ?> 

<section class="contact" id="contact">
    <div class="container">
        <h2>Contact</h2>
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
                <form>
                    <div class="input-form">
                        <input type="text" id="name" class="input"/> 
                        <label for="name">Name</label>
                        <span class="error-msg"></span>
                    </div>
                    <div class="input-form">
                        <input type="text" id="email" class="input"/>
                        <label for="email">Email</label>
                        <span class="error-msg"></span>
                    </div>
                    <div class="input-form">
                        <input type="text" id="subject" class="input"/>
                        <label for="subject">Subject</label>
                        <span class="error-msg"></span>
                    </div>
                    <div class="input-form">
                        <textarea id="message" class="textarea"></textarea>
                        <label for="message">Message</label>
                        <span class="error-msg"></span>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="button" class="btn-white" value="Enviar"/> 
                        </div>
                        <div class="col-md-6">
                            <input type="button" class="btn-green" value="Limpiar"/> 
                        </div>
                    </div> 
                </form>
            </div>          
        </div>
    </div>
</section>

<?php get_footer(); ?>
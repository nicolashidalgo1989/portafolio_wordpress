        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center"> 
                        <p>&copy; Todos los derechos reservados <?php echo date("Y"); ?> </p>
                    </div> 
                    <?php
                        wp_nav_menu(array('theme_location'=>'secondary'));
                    ?>
                </div>
            </div>
        </footer>
        <?php wp_footer() ?>
    </body>
</html>
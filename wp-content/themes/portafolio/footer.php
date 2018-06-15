        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p><strong>nh</strong>design</p>
                        <p>nhdesign &copy; Todos los derechos reservados 2018</p>
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
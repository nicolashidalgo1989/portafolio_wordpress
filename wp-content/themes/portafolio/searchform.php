<div class="col-lg-3 offset-lg-2 col-5 text-right">
    <form role="search" method="get" class="search-form btn-search" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
        <input type="text" id="search" class="input-search" value="<?php echo get_search_query(); ?>" name="s">
        <span v-if="textoBusqueda" class="clear-search">
            limpiar
            <i class="fas fa-times"></i>
        </span>
        <i class="fas fa-search"></i>
    </form>
</div> 
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div class="div-search">
    <!-- <label class="screen-reader-text" for="s">Buscar</label> -->
        <input type="text" value="" name="s" id="s" placeholder="<?php the_search_query();?>" />
        <input type="submit" id="searchsubmit" value="Buscar" />
    </div>
</form>
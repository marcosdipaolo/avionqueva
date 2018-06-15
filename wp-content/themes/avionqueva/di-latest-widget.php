<div class="latest-post clearfix">
    <?php 
    if (get_theme_mod('di_default_image') == NULL || get_theme_mod('di_default_image') == '') {
        $defaultThumbImage = get_theme_file_uri() . '/img/default-thumbnail.jpg';
    } else {
        $defaultThumbImage = get_theme_mod('di_default_image');
    }   
    if (has_post_thumbnail()) {
        the_post_thumbnail('thumbnail');
    }
    else {
        echo ('<img src="' . $defaultThumbImage . '" alt="">');
    } 
    ?>
    
    <a href="<?php the_permalink(); ?>">
        <h5>
            <?php the_title() ?>
        </h5>
    </a>
</div> 
<hr>

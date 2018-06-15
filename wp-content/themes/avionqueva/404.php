<?php get_header(); ?>
<div class="todo">
    <div class="uk-container  ">
        <div class="clearfix">
            <section class="clearfix cuatrocerocuatro">
                <div class="portada404" align="center">
                    <h3>Ups..., no encontramos esa página </h3>
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/404.png" alt="">
                    <h5>Hacé click
                        <a href="<?php echo site_url(); ?>">ACÁ</a> para ir a la página pincipal
                        <br>
                        <br> o sino buscá o hacé click donde quieras.  
                    </h5>
                </div>
                <?php 
                get_search_form();
                ?>
                <div class="recent-and-links">
                    <div class="recientes404">
                        <p>Entradas Recientes</p>
                        <ul>

                        <?php
                $recientes = new WP_query(array(
                    'posts_per_page' => 5
                ));
                if ($recientes->have_posts()) : ?>
                            <?php
                    while ($recientes->have_posts()) : $recientes->the_post();
                    
                    ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                                <?php
                    endwhile;
                    
                    endif;
                    wp_reset_postdata();
                    ?>
                    </ul>
                    </div>
                    <div class="links404">
                        <p>Páginas de interés</p>
                        <?php
                $args = array(
                    "theme_location" => "footer"
                );
                wp_nav_menu( $args );?>
                    </div>
                </div>
            </section>
            <!-- <aside class="sidebar_container">
                <?php //get_sidebar(); ?>
            </aside> -->
        </div>
        <?php get_footer(); ?>
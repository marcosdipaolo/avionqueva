<?php get_header();?>
<!-- PAGE-EVENTOS.PHP  -->
<div class="todo">
    <div class="uk-container   clearfix">
        <?php 

            $event_terms = get_terms(array(
                'taxonomy' => 'event-categories',
                'hide_empty' => false,
            ));
            // ARMAMOS EL MENU DE CATEGS

            echo('<ul class="em-categories-list" uk-tab="animation: uk-animation-fade; duration: 200; swiping: false;">');
            echo('<li><a href="#">Todo</a></li>');
            $catNames = [];
            for ($i=0; $i < count($event_terms); $i++) { 
               array_push($catNames, $event_terms[$i]->name);
            }
            for ($i3=0; $i3 < count($event_terms) ; $i3++) { 
                echo('<li><a href="#">'. $catNames[$i3] . '</a></li>');
            }
            echo('</ul>');
            
                                     
        ?>
        <section class="uk-switcher main-column clearfix">
            <?php 

          
            // TODO
                echo('<div class="eventos-todo">');
                      // Start the loop.
                  //  while ( have_posts() ) : the_post();

                    ?>
                    
                        <?php 
                        // the_title( '<h3>', '</h3>' ); 
                        the_content(); 
                        
                    // End the loop.
                   // endwhile;
                // $args = apply_filters('em_content_events_args', $args);
                // if( get_option('dbem_css_evlist') ) echo "<div class='css-events-list'>";
                // echo EM_Events::output(array(
                //     'groupby' => 'recurrence_id',
                //     'limit' => 7,
                //     'pagination' => 1
                // )); 

                 
                // if( get_option('dbem_css_evlist') ) echo "</div>";
                echo('</div>');
            //POR CATEGORÍA
            for ($index=0; $index < count($catNames); $index++) {                    
                echo('<div class="no-todo '. strtolower($catNames[$index]) .'">');
                listarEventos($catNames[$index]); 
                echo('</div>');  
            } 
                ?>
        </section>
        <?php
        // COMIENZA FUNCIÓN EVENTOS 
        function listarEventos($category) {
        $args = apply_filters('em_content_events_args', $args);
        if( get_option('dbem_css_evlist') ) echo "<div class='css-events-list'>";            
            echo EM_Events::output( array( 
                'category' => $category,
                'groupby' => 'recurrence_id',
                'limit' => 6
            ) );            
        if( get_option('dbem_css_evlist') ) echo "</div>"; }
        //TERMINA FUNCIÓN EVENTOS  ?>

            <aside class="sidebar_container">
                <?php get_sidebar();?>
            </aside>
            <?php get_footer(); ?>
<?php
    get_header();
?>
<div class="todo">
<div class="uk-container  ">
    <div class="clearfix">
        <section class="main-column clearfix">
            <!-- agregar evento!!!!  -->
            <div class="agregarevento">
               <?php
                em_event_form();?>
            </div>
        </section>
        <aside class="sidebar_container">
            <?php get_sidebar();?>
        </aside>
    </div>
    <?php
get_footer();
?>
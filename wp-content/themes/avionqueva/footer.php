</div>
<!-- fin contenedor / container -->
</div>
<!-- fin todo -->
<div class="footer">
    <!-- <div class="suscribite">
        <?php 
            // echo do_shortcode('[mailpoet_form id="1"]');
        ?>
    </div> -->
    <div class="footer-widgets uk-child-width-1-4@l uk-child-width-1-2@s uk-child-width-1-1@xs uk-text-center uk-grid-divider"
        uk-grid>
        <?php if (is_active_sidebar('footer1')) : ?>
        <div class="footer-widget-area widg1">
            <?php dynamic_sidebar('footer1'); ?>
        </div>
        <?php endif; ?>
        <?php if (is_active_sidebar('footer2')) : ?>
        <div class="footer-widget-area widg2">
            <?php dynamic_sidebar('footer2'); ?>
        </div>
        <?php endif; ?>
        <?php if (is_active_sidebar('footer3')) : ?>
        <div class="footer-widget-area widg3">
            <?php dynamic_sidebar('footer3'); ?>
        </div>
        <?php endif; ?>
        <?php if (is_active_sidebar('footer4')) : ?>
        <div class="footer-widget-area widg4 uk-text-center">
            <?php dynamic_sidebar('footer4'); ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="footer-feet">
    <a href="http://marcosdipaolo.com" target="_blank">
        <h4 class="design">Diseño y desarrollo: Marcos Di Paolo</h4>
    </a>
   
</div>
<?php wp_footer(); ?>
</body>

</html>
<div class="sidebar-widgets clearfix">
	<?php //if (is_active_sidebar('sidebar1')) : ?>
	<div class="sidebar-widget-area uk-card uk-card-default uk-card-body widgAgenda">
		<img class="titulo-agenda" src="<?php echo get_bloginfo('template_url') . '/img/agenda.png' ?>" alt="">
		<?php //dynamic_sidebar('sidebar1'); ?>
		<?php echo EM_Calendar::output(array('full'=>0, 'long_events'=>1)) ?>
		<a href="http://avionqueva:5757/agregarevento'?>"><button type="button" class="widget uk-button uk-width-1-1">Publicá tu evento</button></a>
	</div>
	<?php //endif; ?>
		
	<div class="sidebar-widget-area uk-card uk-card-default uk-card-body widgAvion">
		<?php include ( dirname(__FILE__) . '/miavion.php' ) ?>
	</div>
				
	<?php if (is_active_sidebar('sidebar3')) : ?>
	<div class="sidebar-widget-area uk-card uk-card-default uk-card-body widg3">
		<?php dynamic_sidebar('sidebar3'); ?>
	</div>
	<?php endif; ?>
	<?php if (is_active_sidebar('sidebar4')) : ?>
	<div class="sidebar-widget-area uk-card uk-card-default uk-card-body widg4">
		<?php dynamic_sidebar('sidebar4'); ?>
	</div>
	<?php endif; ?>
	<?php if (is_active_sidebar('sidebar5')) : ?>
	<div class="sidebar-widget-area uk-card uk-card-default uk-card-body widg5">
		<?php dynamic_sidebar('sidebar5'); ?>
	</div>
	<?php endif; ?>
	<?php if (is_active_sidebar('sidebar6')) : ?>
	<div class="sidebar-widget-area uk-card uk-card-default uk-card-body widg6">
		<?php dynamic_sidebar('sidebar6'); ?>
	</div>
	<?php endif; ?>

</div>
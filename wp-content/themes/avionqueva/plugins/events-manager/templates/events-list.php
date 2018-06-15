<?php
/*
 * Default Events List Template
 * This page displays a list of events, called during the em_content() if this is an events list page.
 * You can override the default display settings pages by copying this file to yourthemefolder/plugins/events-manager/templates/ and modifying it however you need.
 * You can display events however you wish, there are a few variables made available to you:
 * 
 * $args - the args passed onto EM_Events::output()
 * 
 */
$args = apply_filters('em_content_events_args', $args);

$args += ['groupby' => 'recurrence_id'];
unset($args['orderby']);
$args += ['orderby' => 'event_date_created'];
unset($args['order']);
$args += ['order' => 'DESC'];
// var_dump($args);
$originalDate = $args['calendar_day'];
$newDate = date("d-m-Y", strtotime($originalDate));

// if (isset($args['calendar_day'])) {
//    echo('<p style="text-align: center; width: 55%; margin: 10px auto; color: brown; font-weight: bold">Eventos del día ' . $newDate . '. Para volver a la lista completa dale click a "Agenda" en la barra de navegación o hacé click <a href="' . site_url() . '/eventos' . '" style="text-decoration: underline">acá</a>.</p>');
// }

if( get_option('dbem_css_evlist') ) echo "<div class='css-events-list uk-margin'>";

echo EM_Events::output($args);

if( get_option('dbem_css_evlist') ) echo "</div>";

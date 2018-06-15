
	<!-- Formato de post e ícono  -->

Formato:
<?php $formato = get_post_format() ? : 'standard';
$link_icono .= get_template_directory_uri() . '/img/icono_' . $formato . '.png';	
$link_text = [
   'standard'=>' Estandar',
   'image'=>' Imagen',
   'status'=>' Estado',
   'link' => ' Enlace',
   'aside' => ' Aviso',
   'chat' => 'Chat',
   'audio' => ' Audio',
   'video' => ' Video',
   'gallery' => ' Galería de fotos',
   'quote' => ' Cita'
  ];?>
<a href="<?php echo get_post_format_link( $formato )?>"><?php echo $link_text[ $formato ]; ?>
 <img width="16px" height="16px" class="iconos" src="<?php echo $link_icono; ?>"> 
</a>
<!-- Thumbnail Ribbons  BLOG-->

<?php 

$categs = [6,54,7,51,52,5,53,9,4,8 ];
$colores = ['#21749a', '#C14A1B', '#3D9970', '#C44833', '#B7A36C', '#7F4756', '#EF9C1F', '#756E68', '#438781', '#32BCBA'];
$colores2 = ['#0058a5', '#68321D', '#276047', '#a82921', '#6D6140', '#44262E', '#7F5310', '#313835', '#1E3D3A', '#185958'];
$post_cat_ID = get_the_category()[0]->term_id;

$post_cat_name = get_the_category()[0]->name;
for ($i = 0; $i < count($colores); $i++ ) {
	if ($post_cat_ID == $categs[$i]) { 
		?>
		
		<style>
		<?php 
		echo 'div.ribbon-' . $i . '::before {
			border-bottom: 6px solid ' . $colores2[$i] . '}' ?>
		<?php 
		 echo 'div.ribbon-' . $i . '::after { 
			border-right: 15px solid ' . $colores[$i] . '}'
			?>
		</style>
		<?php
		if ($post_cat_name === 'Experiencias lectoras')  { ?>
		<div class="ribbon-<?php echo $i ?>" style="background-color: <?php echo $colores[$i] ?>"><span style="top: -3px; line-height: 1.3;"><?php echo $post_cat_name ?></span></div> 
			
		<?php }

		else { ?>
		<div class="ribbon-<?php echo $i ?>" style="background-color: <?php echo $colores[$i] ?>"><span><?php echo $post_cat_name ?></span></div> 
			
		<?php }
		?>
		 
<?php } 
} ?>
 
	
<!-- End Thumbnail ribbons -->
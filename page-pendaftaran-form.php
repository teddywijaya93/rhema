<?php
/*
	Template Name: Pendaftaran Form
*/
	$name = 'white';
	$args = array(	
		"visibility" => true,
		"page" => 'pendaftaran',
	);
	get_header($name, $args); 
?>

<div class="bg-pendaftaran" style="background-image: url(https://rhemaindonesia.org/wp-content/uploads/2024/06/PENDAFTARAN-BANNER-01-scaled.webp);">
	<h1 class="p-top fst-italic text-white text-center pt-0"><?php echo get_the_title(); ?></h1>
</div>
<div class="single-page">
	<div class="container" id="cont1200px">
        <?php echo do_shortcode('[gravityform id="1" title="false" ajax="true"]'); ?>
	</div>
</div>
<?php get_footer(); ?>
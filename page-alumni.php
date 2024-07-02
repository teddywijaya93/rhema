<?php
/*
	Template Name: Alumni
*/
	$name = null;
	$args = array(	
		"visibility" => true,
		"page" => 'alumni',
	);
	get_header($name, $args); 
?>

<div class="bg-about" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/BANNER-PERSEMBAHAN-01-scaled.webp);">
	<h1 class="p-top fst-italic text-center">Bertolong-tolonganlah menanggung bebanmu!<br/>Demikianlah kamu memenuhi hukum Kristus.<br/>Galatia 6 : 2 </h1>
</div>
<div class="single-page pb-0">
	
</div>
<?php get_footer(); ?>
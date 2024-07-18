<?php 
	$name = null;
	$args = array(	
		"visibility" => true,
		"page" => 'home',
	);
	get_header($name, $args);
?>

<div class="container-fluid" style="padding-top:125px;">
	<div class="row">
		<div class="col-12 col-lg-6 my-auto">
			<h1 class="fw-bold title-404">halaman<br/>tidak<br/>ditemukan</h1>
		</div>
		<div class="col-12 col-lg-6 p-0">
			<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/07/bg-404-jpg.webp" class="w-100"/>
		</div>
	</div>
</div>

<?php get_footer(); ?>
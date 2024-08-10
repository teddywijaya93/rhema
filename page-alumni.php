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

<div class="bg-about h-auto" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>);">
	<div class="p-top-alumni">
		<div class="text-center"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/RHEMA-ASOSIASI.webp" class="w-25 mb-3"></div>
		<h1 class="fst-italic fw-bold text-center" style="color: #A72525;"><?php echo get_the_title(); ?></h1>
	</div>
</div>
<?php 
	$args = array(
		'post_type' => 'rmai',
		'post_status' => 'publish',
	);
	$the_query = new WP_Query( $args );
	while ( $the_query->have_posts() ) : $the_query->the_post();
	$idRmai = get_the_ID();

	$visimisi = get_post_meta($idRmai,'rmaivisimisi',true);
	$value = get_post_meta($idRmai,'rmaivalue',true);
	$spirit = get_post_meta($idRmai,'rmaisc',true);
	$titlespirit = $spirit[0]['title-rmaisc'];
	$descspirit = $spirit[0]['desc-rmaisc'];
	$download = $spirit[0]['download-buku-pedoman'];
	$gotospirit = $spirit[0]['goto-spirit-community'];
	$imgrmaisc = $spirit[0]['img-rmaisc'];
	$linkrmaisc = wp_get_attachment_image_src($imgrmaisc,'full');
	if($linkrmaisc){
		$urlrmaisc = $linkrmaisc['0'];
	}
	$bannermaisc = $spirit[0]['banner-rmaisc'];
	$linkbannermaisc = wp_get_attachment_image_src($bannermaisc,'full');
	if($linkbannermaisc){
		$urlbannermaisc = $linkbannermaisc['0'];
	}

?>
<div class="single-page" id="rhmai">
	<div class="container" id="cont1200px">
		<div class="row">
			<div class="col-12 col-lg-6 mb-3 mb-lg-0">
				<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="w-100 mb-3 mb-lg-0"/>
				<div class="text-center"><a href="<?php echo $download; ?>" target="_blank" role="button" class="btn btn-buku-pedoman">Download Buku Pedoman Kode <br/> Etik Hamba Tuham Rhema</a></div>
			</div>
			<div class="col-12 col-lg-6 mb-3 mb-lg-0">
				<h4 class="title-single-usa-ina mb-3"><?php echo get_the_title($idRmai); ?></h4>
				<div class="desc-single-usa-ina mb-4"><p><?php echo get_the_content($idRmai); ?></p></div>
			</div>
		</div>
	</div>
</div>
<div id="spirit"><img src="<?php echo $urlbannermaisc; ?>" class="w-100 banner-alumni"/></div>
<div class="single-page">
	<div class="container" id="cont1200px">
		<div class="row">
			<div class="col-12 col-lg-6 mb-3 mb-lg-0">
				<h4 class="title-single-usa-ina mb-3"><?php echo $titlespirit; ?></h4>
				<div class="desc-single-usa-ina mb-0"><p><?php echo $descspirit?></p></div>
				<?php foreach($visimisi as $vm){ ?>
				<div class="row mb-3">
					<div class="col-2 text-center"><img src="<?php echo wp_get_attachment_url($vm['img-rmai-visimisi']); ?>" class="icon-home-why-rhema"/></div>
					<div class="col-10">
						<h4 class="title-home-why-rhema mb-1"><?php echo $vm['title-rmai-visimisi']; ?></h4>
						<p class="desc-home-why-rhema mb-0"><?php echo $vm['desc-rmai-visimisi']; ?></p>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="col-12 col-lg-6 mb-3 mb-lg-0">
				<img src="<?php echo $urlrmaisc; ?>" class="w-100 mb-3 mb-lg-0"><div class="text-center">
				<a href="<?php echo $gotospirit; ?>" target="_blank" role="button" class="btn btn-visimisi">Mulai Bergabung</a></div>
			</div>
		</div>
	</div>
</div>
<div class="single-page" style="background-color: #F9F9F9;">
	<div class="container" id="cont1200px">
		<h2 class="title-single-about text-center mb-5">Value Spirit Community</h2>
		<div class="row">
			<?php foreach($value as $values){ ?>
			<div class="col-12 col-sm-6 col-lg-4">
				<div class="switch-number">
					<div class="number">
						<img src="<?php echo wp_get_attachment_url($values['img-number-rmai-value']); ?>" class="img-number-single-value mb-2"/>
						<div class="card-value">
							<h4 class="title-single-value mb-1"><?php echo $values['title-rmai-value']; ?></h4>
							<div class="desc-single-value mb-0"><?php echo $values['desc-rmai-value']; ?></div>
						</div>
					</div>
					<div class="number-hover">
						<img src="<?php echo wp_get_attachment_url($values['img-number-rmai-value-hover']); ?>" class="img-number-single-value mb-2"/>
						<div class="card-value">
							<h4 class="title-single-value mb-1"><?php echo $values['title-rmai-value']; ?></h4>
							<div class="desc-single-value mb-0"><?php echo $values['desc-rmai-value']; ?></div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php endwhile; 
wp_reset_query();
get_footer(); ?>
<?php
/*
	Template Name: Profil
*/
	$name = null;
	$args = array(	
		"visibility" => true,
		"page" => 'profil',
	);
	get_header($name, $args); 
?>

<div class="bg-about" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>);">
	<h1 class="p-top fst-italic text-center"><?php echo get_the_title(); ?></h1>
</div>
<?php 
	$args = array(
		'post_type' => 'about',
		'post_status' => 'publish',
	);
	$the_query = new WP_Query( $args );
	while ( $the_query->have_posts() ) : $the_query->the_post();
	$idAbout = get_the_ID();

	$rhema = get_post_meta($idAbout,'aboutrhema',true);
	$titleusa = $rhema[0]['title-rhema-usa'];
	$descusa = $rhema[0]['desc-rhema-usa'];
	$imgusa = $rhema[0]['img-rhema-usa'];
	$linkusa = wp_get_attachment_image_src($imgusa,'full');
	if($linkusa){
		$urlusa = $linkusa['0'];
	}
	$titleina = $rhema[0]['title-rhema-ina'];
	$descina = $rhema[0]['desc-rhema-ina'];
	$imgina = $rhema[0]['img-rhema-ina'];
	$linkina = wp_get_attachment_image_src($imgina,'full');
	if($linkina){
		$urlina = $linkina['0'];
	}

	$visimisi = get_post_meta($idAbout,'aboutvisimisi',true);
	$titlevisi = $visimisi[0]['title-visi'];
	$descvisi = $visimisi[0]['desc-visi'];
	$titlemisi = $visimisi[0]['title-misi'];
	$descmisi = $visimisi[0]['desc-misi'];
	$pendiri = get_post_meta($idAbout,'aboutpendiri',true);
    $pengajar = get_post_meta($idAbout,'aboutpengajar',true); 
?>
<div class="single-page">
	<div class="container" id="cont1200px">
		<div class="row">
			<div class="col-12 col-lg-6 mb-3 mb-lg-0"><img src="<?php echo $urlusa; ?>" class="w-100"></div>
			<div class="col-12 col-lg-6 mb-3 mb-lg-0">
				<h4 class="title-single-usa-ina mb-3"><?php echo $titleusa; ?></h4>
				<div class="desc-single-usa-ina mb-0"><?php echo $descusa; ?></div>
			</div>
		</div>
	</div>
</div>
<div class="single-page pt-0">
	<div class="container" id="cont1200px">
		<div class="row">
			<div class="col-12 col-lg-6 mb-3 mb-lg-0 order-lg-1 order-sm-2 order-2">
				<h4 class="title-single-usa-ina mb-3"><?php echo $titleina; ?></h4>
				<div class="desc-single-usa-ina mb-0"><?php echo $descina; ?></div>
			</div>
			<div class="col-12 col-lg-6 mb-3 mb-lg-0 order-lg-2 order-sm-1 order-1"><img src="<?php echo $urlina; ?>" class="w-100"></div>
		</div>
	</div>
</div>
<div id="visimisi" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/BACKGROUND-VISI-MISI-scaled.webp);">
	<h4 class="title-single-visi-misi text-center mb-3"><?php echo $titlevisi; ?></h4>
	<p class="desc-single-visi-misi text-center text-white mb-5"><?php echo $descvisi; ?></p>
	<h4 class="title-single-visi-misi text-center mb-3"><?php echo $titlemisi; ?></h4>
	<p class="desc-single-visi-misi text-center text-white mb-0"><?php echo $descmisi; ?></p>
</div>
<div class="single-page">
	<div class="container" id="cont1200px">
		<h2 class="title-single-about text-center mb-5">Pendiri dan Pemimpin</h2>
		<div class="row">
			<?php foreach($pendiri as $pend){ ?>
			<div class="col-6 col-sm-6 col-lg-4 mb-3 mb-lg-0">
				<div data-bs-toggle="modal" data-bs-target="#<?php echo $pend['id-pendiri']; ?>">
					<img src="<?php echo wp_get_attachment_url($pend['img-pendiri']); ?>" class="img-single-pendiri-pengajar w-100 mb-3"/>
					<h4 class="nama-single-pendiri-pengajar text-center mb-0"><?php echo $pend['nama-pendiri']; ?></h4>
				</div>
				<div class="modal fade" id="<?php echo $pend['id-pendiri']; ?>">
					<div class="modal-dialog modal-lg modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
							<div class="modal-body">
								<div class="row">
									<div class="col-12 col-lg-5">
										<img src="<?php echo wp_get_attachment_url($pend['img-pendiri']); ?>" class="img-single-pendiri-pengajar w-100 mb-3"/>
									</div>
									<div class="col-12 col-lg-7">
										<h4 class="nama-single-pendiri-pengajar mb-2"><?php echo $pend['nama-pendiri']; ?></h4>
										<div class="desc-single-pendiri-pengajar"><?php echo $pend['desc-pendiri']; ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<div class="single-page">
	<div class="container" id="cont1200px">
		<h2 class="title-single-about text-center mb-5">Tim Rhema Indonesia</h2>
		<div class="swiper swiper-pengajar">
			<div class="swiper-wrapper">
				<?php foreach($pengajar as $peng){ ?>
				<div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#<?php echo $peng['id-pengajar']; ?>">
					<img src="<?php echo wp_get_attachment_url($peng['img-pengajar']); ?>" class="img-single-pendiri-pengajar w-100 mb-3"/>
					<h4 class="nama-single-pendiri-pengajar text-center mb-0"><?php echo $peng['nama-pengajar']; ?></h4>
				</div>
				<?php } ?>
			</div>
			<div class="swiper-button-next" id="leftarrow"></div>
			<div class="swiper-button-prev" id="rightarrow"></div>
		</div>
		<?php foreach($pengajar as $peng){ ?>
		<div class="modal fade" id="<?php echo $peng['id-pengajar']; ?>">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
					<div class="modal-body">
						<div class="row">
							<div class="col-12 col-lg-5">
								<img src="<?php echo wp_get_attachment_url($peng['img-pengajar']); ?>" class="img-single-pendiri-pengajar w-100 mb-3"/>
							</div>
							<div class="col-12 col-lg-7">
								<h4 class="nama-single-pendiri-pengajar mb-2"><?php echo $peng['nama-pengajar']; ?></h4>
								<div class="desc-single-pendiri-pengajar"><?php echo $peng['desc-pengajar']; ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<?php endwhile;
wp_reset_query();
get_footer(); ?>
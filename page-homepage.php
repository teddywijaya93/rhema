<?php
/*
	Template Name: Homepage
*/
	$name = 'white';
	$args = array(
		"visibility" => true,
		"page" => 'home',
	);
	get_header($name, $args); 
?>
<div id="banner">
	<?php 
		$args = array(
			'post_type' => 'banner',
			'posts_per_page' => 1,
			'post_status' => 'publish',
			'order' => 'asc',
		);
		$the_query = new WP_Query( $args );
		while ( $the_query->have_posts() ) : $the_query->the_post();
		$idBanner = get_the_ID();
	?>
	<div style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>)" class="banner-home w-100">
		<div class="p-home-banner">
			<div class="row mb-3 mb-lg-5">
				<div class="col-1"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/07/checklist.svg" class="icon-home-banner"></div>
				<div class="col-9 my-auto"><h1 class="title-home-banner fst-italic text-white mb-0">Belajar Prinsip Alkitab</h1></div>
			</div>
			<div class="row mb-3 mb-lg-5">
				<div class="col-1"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/07/checklist.svg" class="icon-home-banner"></div>
				<div class="col-9 my-auto"><h1 class="title-home-banner fst-italic text-white mb-0">Bertumbuh Dalam Iman</h1></div>
			</div>
			<div class="row mb-3 mb-lg-5">
				<div class="col-1"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/07/checklist.svg" class="icon-home-banner"></div>
				<div class="col-9 my-auto"><h1 class="title-home-banner fst-italic text-white mb-0">Menemukan Tujuan Hidup</h1></div>
			</div>
			<a href="" role="button" class="btn btn-home-daftar">Daftar</a>
		</div>
	</div>
	<?php endwhile; 
	wp_reset_query(); ?>
</div>

<?php 
	$args = array(
		'post_type' => 'home',
		'post_status' => 'publish',
	);
	$the_query = new WP_Query( $args );
	while ( $the_query->have_posts() ) : $the_query->the_post();
	$idHome = get_the_ID();

	$sec2 = get_post_meta($idHome,'hometwo',true);
	$sec3 = get_post_meta($idHome,'homethird',true); 
	$sec4 = get_post_meta($idHome,'homefour',true); 
?>
<div id="rhema">
	<div class="container" id="cont1200px">
		<div class="row">
			<?php foreach($sec2 as $part2){ ?>
			<div class="col-6 col-sm-6 col-lg-3 mb-3 mb-lg-0">
				<div class="switch-home2 text-center">
					<div class="home2">
						<img src="<?php echo wp_get_attachment_url($part2['icon-hometwo']); ?>" class="icon-hometwo mb-3"/>
						<h4 class="title-hometwo mb-0"><?php echo $part2['title-hometwo']; ?></h4>
					</div>
					<div class="home2-hover">
						<img src="<?php echo wp_get_attachment_url($part2['icon-hometwo-hover']); ?>" class="icon-hometwo mb-3"/>
						<h4 class="title-hometwo mb-0"><?php echo $part2['title-hometwo']; ?></h4>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<div id="why">
	<div class="container" id="cont1200px">
		<div class="row">
			<div class="col-12 col-lg-6 mb-3 mb-lg-0"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/07/IMAGE-MENGAPA-RHEMA.webp" class="w-100"></div>
			<div class="col-12 col-lg-6 mb-3 mb-lg-0">
				<h2 class="head-why-rhema mb-4">Mengapa memilih Rhema Bible Training Center Indonesia ?</h2>
				<?php foreach($sec3 as $part3){ ?>
				<div class="row mb-3">
					<div class="col-2 text-center"><img src="<?php echo wp_get_attachment_url($part3['icon-homethird-hover']); ?>" class="icon-home-why-rhema"/></div>
					<div class="col-10">
						<h4 class="title-home-why-rhema mb-1"><?php echo $part3['title-homethird']; ?></h4>
						<p class="desc-home-why-rhema mb-0"><?php echo $part3['desc-homethird']; ?></p>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<div id="collaboration">
	<div class="container" id="cont1200px">
		<div class="row">
			<?php foreach($sec4 as $part4){ ?>
			<div class="col-12 col-sm-6 col-lg-4 mb-3 mb-lg-0">
				<div class="parent">
					<div class="text-center bg-collab" style="background-image: url('<?php echo wp_get_attachment_url($part4['bg-homefour']); ?>')">
						<a href="<?php echo $part4['goto-homefour']; ?>">
							<img src="<?php echo wp_get_attachment_url($part4['icon-homefour']); ?>" class="img-home-collab mb-3"/>
							<h4 class="title-home-collab text-white mb-0"><?php echo $part4['title-homefour']; ?></h4>
						</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php endwhile; 
wp_reset_query(); ?>

<div id="testimonial">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-lg-5 mb-3 mb-lg-0" id="bg-red-testimonial">
				<div class="m-left-home">
					<h2 class="head-home-testimonial text-white mb-3">Testimonial Alumnus</h2>
					<p class="desc-home-testimonial text-white w-75 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="col-12 col-lg-7 mb-3 mb-lg-0" id="bg-grey-testimonial">
				<div class="swiper swiper-testimonial">
					<div class="swiper-wrapper">
						<?php
							$args = array(
								'post_type' => 'testimonial',
								'post_status' => 'publish',
							);
							$the_query = new WP_Query( $args );
							while ( $the_query->have_posts() ) : $the_query->the_post();
							$idTestimonial = get_the_ID(); 
						?>
						<div class="swiper-slide">
							<div class="padding-home text-center">
								<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="img-home-testimonial mb-3"/>
								<h2 class="name-home-testimonial mb-3"><?php echo get_the_title($idTestimonial); ?></h2>
								<div class="content-home-testimonial mb-0"><?php echo get_the_content($idTestimonial); ?></div>
							</div>
						</div>
						<?php endwhile; 
						wp_reset_query(); ?>
					</div>
					<div class="swiper-button-next" id="leftarrowtestimonial"></div>
					<div class="swiper-button-prev" id="rightarrowtestimonial"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="berita">
	<div class="container" id="cont1200px">
		<h2 class="head-home-berita text-center w-100 mb-5">Berita</h2>
		<div class="row">
			<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 3,
					'post_status' => 'publish',
				);
				$the_query = new WP_Query( $args );
				while ( $the_query->have_posts() ) : $the_query->the_post();
				$idPost = get_the_ID(); 
			?>
			<div class="col-12 col-sm-6 col-lg-4 mb-3 mb-lg-0">
				<div class="card border-0">
					<?php if(has_post_thumbnail()) { ?>
						<div id="zoomBerita"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="img-single-news w-100"></div>
					<?php } else{ ?>
						<div id="zoomBerita"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/BERITA-BANNER-02.webp" class="img-single-news w-100"></div>
					<?php } ?>
					<div class="card-body" style="padding: 10px 0 10px 0;">
						<div class="mb-3">
							<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/ICON-BERITA-02.svg" class="icon-single-news"/>
							<span class="cat-single-news me-3"><?php echo get_the_date('d M Y'); ?></span>
							<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/ICON-BERITA-01.svg" class="icon-single-news"/>
							<span class="cat-single-news me-3"> <?php echo the_category(', '); ?> </span>
							<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/ICON-BERITA-03.svg" class="icon-single-news"/>
							<span class="cat-single-news"> <?php echo get_the_author(); ?> </span>
						</div>
						<a href="<?php echo get_permalink(); ?>"><h4 class="title-single-news"> <?php echo get_the_title(); ?> </h4></a>
					</div>
				</div>
			</div>
			<?php endwhile; 
			wp_reset_query(); ?>
			<div class="text-center mt-5"><a href="<?php echo get_site_url(); ?>/berita" role="button" class="btn btn-home-seeall">Lihat Semua</a></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
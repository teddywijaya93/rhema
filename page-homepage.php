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

<div class="swiper swiper-banner">
	<div class="swiper-wrapper">
		<?php 
			$args = array(
				'post_type' => 'banner',
				'posts_per_page' => 3,
				'post_status' => 'publish',
			);
			$the_query = new WP_Query( $args );
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$idBanner = get_the_ID();
		?>
		<div class="swiper-slide">
			<div style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>)" class="banner-home w-100"></div>
		</div>
		<?php endwhile; 
		wp_reset_query(); ?>
	</div>
	
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
			<div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
				<div class="text-center">
					<img src="<?php echo wp_get_attachment_url($part2['icon-hometwo']); ?>" class="icon-hometwo mb-3"/>
					<h4 class="title-hometwo mb-0"><?php echo $part2['title-hometwo']; ?></h4>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<div id="why">
	<div class="container" id="cont1200px">
		<div class="row">
			<div class="col-12 col-lg-6 mb-3 mb-lg-0"></div>
			<div class="col-12 col-lg-6 mb-3 mb-lg-0">
				<h2 class="head-why-rhema mb-4">Mengapa memilih Rhema Bible Training Center Indonesia ?</h2>
				<?php foreach($sec3 as $part3){ ?>
				<div class="row mb-3">
					<div class="col-3"></div>
					<div class="col-9">
						<h4 class="title-home-why-rhema mb-3"><?php echo $part3['title-homethird']; ?></h4>
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
				<div class="text-center bg-collab" style="background-image: url('<?php echo wp_get_attachment_url($part4['bg-homefour']); ?>')">
					<img src="<?php echo wp_get_attachment_url($part4['icon-homefour']); ?>" class="img-home-collab mb-3"/>
					<h4 class="title-home-collab text-white mb-0"><?php echo $part4['title-homefour']; ?></h4>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php endwhile; 
wp_reset_query(); ?>

<div id="testimonial">
	<div class="container" id="cont1200px">
		<div class="row">
			<div class="col-12 col-lg-6 mb-3 mb-lg-0"></div>
			<div class="col-12 col-lg-6 mb-3 mb-lg-0">
				
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
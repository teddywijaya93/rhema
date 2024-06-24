<?php
/*
	Template Name: Homepage
*/
?>

<?php 
	$name = null;
	$args = array(
		"visibility" => true,
		"page" => 'home',
	);
	get_header($name, $args); 
?>

<div id="banner">

</div>
<?php $args = array(
		'post_type' => 'home',
		'post_status' => 'publish',
	);
	$the_query = new WP_Query( $args );
	while ( $the_query->have_posts() ) : $the_query->the_post();
	$idHome = get_the_ID();

	$sec2 = get_post_meta($idHome,'hometwo',true);
	$sec3 = get_post_meta($idHome,'homethird',true); 
	$sec4 = get_post_meta($idHome,'homefour',true); ?>
<div id="rhema">
	<div class="container" id="cont1200px">
		<div class="row">
			<?php foreach($sec2 as $part2){ ?>
			<div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
				<div class="text-center">
					<h4 class="title-hometwo mb-0"><?php echo $part2['title-hometwo'] ?></h4>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<div id="why">
	<div class="container" id="cont1200px">
		<div class="row">
			<?php foreach($sec2 as $part2){ ?>
			<div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
				<div class="text-center">
					<h4 class="title-hometwo mb-0"><?php echo $part2['title-hometwo'] ?></h4>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php endwhile; 
wp_reset_query();
get_footer(); ?>
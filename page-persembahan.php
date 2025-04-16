<?php
/*
	Template Name: Persembahan
*/
	$name = null;
	$args = array(	
		"visibility" => true,
		"page" => 'persembahan',
	);
	get_header($name, $args); 
?>

<div class="bg-about" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>);">
	<h1 class="p-top fst-italic text-center"><?php echo get_the_title();?></h1>
</div>
<div class="single-page pb-0">
	<div class="container" id="cont1200px">
		<div class="row">
            <?php 
                $args = array(
                    'post_type' => 'persembahan',
                    'posts_per_page' => 3 ,
                    'post_status' => 'publish',
                    'order' => 'asc',
                );
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $idPersembahan = get_the_ID();
                $confirmation = get_post_meta($idPersembahan,'waconfirmation',true);
                $wapersembahan = $confirmation[0]['wa-persembahan'];
                $wapersembahanconf = $confirmation[0]['wa-persembahan-confirmation'];

                if($idPersembahan != 25){
            ?>
            <div class="col-12 col-lg-6 mb-3">
                <div class="bg-persembahan-type" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>)"> 
                    <h4 class="title-single-persembahan text-center mb-3"><?php echo get_the_title($idPersembahan); ?></h4>
                    <div class="desc-single-persembahan text-white text-center mb-3"><?php echo get_the_content($idPersembahan); ?></div>
                    <div class="text-center"><a href="https://wa.me/<?php echo $wapersembahanconf; ?>" target="_blank" role="button" class="btn btn-konfirmasi-persembahan">Konfirmasi<br/><?php echo get_the_title($idPersembahan); ?></a></div>
                </div>
            </div>
            <?php }else{ ?>
            <div class="col-12 mb-3">
                <div class="bg-persembahan-type" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>)"> 
                    <div class="col-12 offset-lg-5 col-lg-7">
                        <h4 class="title-single-persembahan text-center mb-3"><?php echo get_the_title($idPersembahan); ?></h4>
                        <div class="desc-single-persembahan text-white text-center mb-3"><?php echo get_the_content($idPersembahan); ?></div>
                        <div class="text-center"><a href="https://wa.me/<?php echo $wapersembahanconf; ?>" target="_blank" role="button" class="btn btn-konfirmasi-persembahan">Konfirmasi<br/><?php echo get_the_title($idPersembahan); ?></a></div>
                    </div>
                </div>
            </div>
            <?php } endwhile; 
            wp_reset_query(); ?>
        </div>
	</div>
</div>
<div class="bg-dukungan-lainnya" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/DUKUNGAN-LAIN-scaled.webp);">
        <?php 
            $args = array(
                'post_type' => 'persembahan',
                'post_status' => 'publish',
            );
            $the_query = new WP_Query( $args );
            while ( $the_query->have_posts() ) : $the_query->the_post();
            $idPersembahan = get_the_ID();
            $confirmation = get_post_meta($idPersembahan,'waconfirmation',true);
            $wapersembahan = $confirmation[0]['wa-persembahan'];
            $wapersembahanconf = $confirmation[0]['wa-persembahan-confirmation'];

            if($idPersembahan == 195){
        ?>
    <h4 class="title-single-persembahan text-dark text-center mb-3"><?php echo get_the_title($idPersembahan); ?></h4>
    <div class="desc-single-persembahan text-dark text-center mb-3"><?php echo get_the_content($idPersembahan); ?></div>
    <div class="text-center"><a href="https://wa.me/<?php echo $wapersembahanconf; ?>" target="_blank" role="button" class="btn btn-konfirmasi-persembahan w-auto">Konfirmasi<br/><?php echo get_the_title($idPersembahan); ?></a></div>
    <?php } endwhile; 
    wp_reset_query(); ?>
</div>

<?php get_footer(); ?>
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

<div class="bg-about" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/BANNER-PERSEMBAHAN-01-scaled.webp);">
	<h1 class="p-top fst-italic text-center">Bertolong-tolonganlah menanggung bebanmu!<br/>Demikianlah kamu memenuhi hukum Kristus.<br/>Galatia 6 : 2 </h1>
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

                if($idPersembahan != 25){
            ?>
            <div class="col-12 col-lg-6 mb-3">
                <div class="bg-persembahan-type" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>)"> 
                    <h4 class="title-single-persembahan text-center mb-3"><?php echo get_the_title($idPersembahan); ?></h4>
                    <div class="desc-single-persembahan text-white text-center mb-3"><?php echo get_the_content($idPersembahan); ?></div>
                    <div class="text-center"><a href="" role="button" class="btn btn-konfirmasi-persembahan">Konfirmasi<br/>Persembahan</a></div>
                </div>
            </div>
            <?php }else{ ?>
            <div class="col-12 mb-3">
                <div class="bg-persembahan-type" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>)"> 
                    <div class="offset-5 col-lg-7">
                        <h4 class="title-single-persembahan text-center mb-3"><?php echo get_the_title($idPersembahan); ?></h4>
                        <div class="desc-single-persembahan text-white text-center mb-3"><?php echo get_the_content($idPersembahan); ?></div>
                        <div class="text-center"><a href="" role="button" class="btn btn-konfirmasi-persembahan">Konfirmasi<br/>Sponsor Beasiswa</a></div>
                    </div>
                </div>
            </div>
            <?php } endwhile; 
            wp_reset_query(); ?>
        </div>
	</div>
</div>
<div class="bg-dukungan-lainnya" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/DUKUNGAN-LAIN-scaled.webp);">
    <h4 class="title-single-persembahan text-dark text-center mb-3">Dukungan Lainnya</h4>
    <div class="text-center"><a href="" role="button" class="btn btn-konfirmasi-persembahan w-25">Konfirmasi<br/>Dukungan Lainnya</a></div>
</div>
<?php get_footer(); ?>
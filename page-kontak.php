<?php
/*
	Template Name: Kontak Kami
*/
	$name = 'white';
	$args = array(	
		"visibility" => true,
		"page" => 'kontak',
	);
	get_header($name, $args); 
?>

<div class="bg-pendaftaran" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/CONTACT-BANNER-WEB-scaled.webp);">
	<h1 class="p-top fst-italic text-white text-center pt-0">Kontak Kami</h1>
</div>
<?php 
    $args = array(
        'post_type' => 'kontak',
        'post_status' => 'publish',
    );
    $the_query = new WP_Query( $args );
    while ( $the_query->have_posts() ) : $the_query->the_post();
    $idKontak = get_the_ID();

    $lokasi = get_post_meta($idKontak,'kontaklokasi',true);
?>
<div class="single-page">
	<div class="container" id="cont1200px">
        <div class="row">
            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                
            </div>
            <div class="col-12 col-lg-6 mb-3 mb-lg-0"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="w-100"></div>
        </div>
	</div>
</div>
<div class="single-page">
	<div class="container" id="cont1200px">
        <div class="row">
            <?php foreach($lokasi as $loc){ ?>
            <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
                <div class="bg-lokasi" style="background-image: url('<?php echo wp_get_attachment_url($loc['bg-kontak-lokasi']); ?>')">
                    <h4 class="title-single-lokasi text-center text-uppercase text-white w-50 m-auto mb-3"><?php echo $loc['title-kontak-lokasi'] ?></h4>
                </div>
            </div>
            <?php } ?>
        </div>
	</div>
</div>
<?php endwhile; 
wp_reset_query();
get_footer(); ?>
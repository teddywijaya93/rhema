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

<div class="bg-pendaftaran" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>);">
	<h1 class="p-top fst-italic text-white text-center pt-0"><?php echo get_the_title(); ?></h1>
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
    $socmed = get_post_meta($idKontak,'kontaksosmed',true);
    $wa = $socmed[0]['whatsapps'];
    $wanumber = $socmed[0]['wa-number'];
    $mail = $socmed[0]['mail'];
?>
<div class="single-page">
	<div class="container" id="cont1200px">
        <div class="row">
            <div class="col-12 col-lg-6 my-auto">
                <div class="row mb-5">
					<div class="col-2 text-center"><i class="fa-brands fa-whatsapp icon-socmed-lokasi"></i></div>
					<div class="col-10">
						<h4 class="title-socmed-lokasi mb-1">Whatsapp</h4>
						<a class="desc-socmed-lokasi mb-0" href="https://wa.me/<?php echo $wa; ?>" target="_blank"><?php echo $wanumber; ?></a>
					</div>
				</div>

                <div class="row mb-5">
					<div class="col-2 text-center"><i class="fa-regular fa-envelope icon-socmed-lokasi"></i></div>
					<div class="col-10">
						<h4 class="title-socmed-lokasi mb-1">Mail</h4>
						<a class="desc-socmed-lokasi mb-0" href="mailto:<?php echo $mail; ?>" target="_blank"><?php echo $mail; ?></a>
					</div>
				</div>
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
                    <h4 class="title-single-lokasi text-center text-uppercase text-white m-auto mb-5"><?php echo $loc['title-kontak-lokasi'] ?></h4>
                    <p class="desc-single-lokasi text-center text-white w-75 m-auto mb-5"><?php echo $loc['desc-kontak-lokasi']; ?></p>
                    <div class="text-center"><a href="mailto:<?php echo $loc['mail-kontak-lokasi']; ?>" target="_blank" role="button" class="btn btn-lokasi">
                        <i class="fa-regular fa-envelope" aria-hidden="true"></i>&nbsp;<?php echo $loc['mail-kontak-lokasi']; ?></a>
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
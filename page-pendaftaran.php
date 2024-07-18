<?php
/*
	Template Name: Pendaftaran
*/
	$name = 'white';
	$args = array(	
		"visibility" => true,
		"page" => 'pendaftaran',
	);
	get_header($name, $args); 
?>

<div class="bg-pendaftaran" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/PENDAFTARAN-BANNER-02.webp);">
	<h1 class="p-top fst-italic text-white text-center pt-0"><?php echo get_the_title(); ?></h1>
</div>
<?php 
    $args = array(
        'post_type' => 'pendaftaran',
        'post_status' => 'publish',
    );
    $the_query = new WP_Query( $args );
    while ( $the_query->have_posts() ) : $the_query->the_post();
    $idPendaftaran = get_the_ID();

    $daftar = get_post_meta($idPendaftaran,'pendaftaranumumadminstratif',true);
    $rbtci = get_post_meta($idPendaftaran,'pendaftaranrbtci',true);
    $titlerbtji = $rbtci[0]['title-rbtci'];
    $descrbtji = $rbtci[0]['desc-rbtci'];
    $imgrbtci = $rbtci[0]['img-rbtci'];
	$linkrbtci = wp_get_attachment_image_src($imgrbtci,'full');
	if($linkrbtci){
		$urlrbtci = $linkrbtci['0'];
	}
?>
<div class="single-page">
	<div class="container" id="cont1200px">
        <div class="row">
            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                <h2 class="title-single-pendaftaran mb-3"><?php echo get_the_title($idPendaftaran); ?></h2>
                <div class="desc-single-pendaftaran mb-5"><?php echo get_the_content($idPendaftaran); ?></div>

                <h2 class="title-single-pendaftaran mb-3">Syarat Pendaftaran</h2>
                <div class="row">
                    <?php foreach($daftar as $reg){ ?>
                    <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                        <h5 class="title-single-daftar-ua"><?php echo $reg['title-pendaftaran-umum-adminstratif']; ?></h5>
                        <p class="desc-single-daftar-ua"><?php echo $reg['desc-pendaftaran-umum-adminstratif']; ?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-lg-6 mb-3 mb-lg-0"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="w-100"></div>
        </div>
	</div>
</div>
<div class="single-page">
	<div class="container" id="cont1200px">
        <div class="row">
            <div class="col-12 col-lg-6 mb-3 mb-lg-0"><img src="<?php echo $urlrbtci; ?>" class="w-100"></div>
            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                <h5 class="title-single-rbtci mb-3"><?php echo $titlerbtji; ?></h5>
                <div class="desc-single-rbtci mb-0"><?php echo $descrbtji ?></div>
            </div>
        </div>
	</div>
</div>
<?php endwhile; 
wp_reset_query(); ?>
<div class="single-page" style="background-color: #F9F9F9;">
	<div class="container" id="cont1200px">
		<h2 class="title-single-about text-center mb-5">Kurikulum</h2>
        <div class="swiper swiper-kurikulum">
            <div class="swiper-wrapper">
                <?php 
                    $args = array(
                        'post_type' => 'kurikulum',
                        'post_status' => 'publish',
                        'order' => 'asc',
                    );
                    $the_query = new WP_Query( $args );
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    $idKur = get_the_ID();
                ?>
                <div class="swiper-slide">
                    <div class="switch-kurikulum">
                        <div class="kurikulum">
                            <div class="bg-red-kur shadow">
                                <div class="text-center"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="img-single-kur mb-3"/></div>
                                <h4 class="title-single-kur text-center text-white mb-0"><?php echo get_the_title($idKur); ?></h4>
                            </div>
                        </div>
                        <div class="kurikulum-hover">
                            <div class="bg-white-kur shadow">
                                <h4 class="title-single-kur text-start text-dark mb-3"><?php echo get_the_title($idKur); ?></h4>
                                <div class="desc-single-kur mb-0"><?php echo the_content($idKur); ?></div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <?php endwhile; 
                wp_reset_query(); ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
	</div>
</div>
<?php get_footer(); ?>
<?php
/*
	Template Name: Berita
*/
	$name = 'white';
	$args = array(	
		"visibility" => true,
		"page" => 'berita',
	);
	get_header($name, $args); 
?>

<div class="bg-pendaftaran" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>);">
	<h1 class="p-top fst-italic text-white text-center pt-0"><?php echo get_the_title(); ?></h1>
</div>
<div class="single-page">
	<div class="container" id="cont1200px">
        <ul class="nav nav-pills justify-content-start mb-3" id="pills-tab" role="tablist">
			<li class="nav-item" role="presentation">
   				<button class="nav-link nav-news text-start active" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">Semua</button>
			</li>
  			<li class="nav-item" role="presentation">
   				<button class="nav-link nav-news text-start" data-bs-toggle="pill" data-bs-target="#pills-blog" type="button" role="tab" aria-controls="pills-blog" aria-selected="false">Blog</button>
			</li>
			<li class="nav-item" role="presentation">
    			<button class="nav-link nav-news text-start" data-bs-toggle="pill" data-bs-target="#pills-news" type="button" role="tab" aria-controls="pills-news" aria-selected="false">Berita</button>
  			</li>
            <li class="nav-item" role="presentation">
    			<button class="nav-link nav-news text-start" data-bs-toggle="pill" data-bs-target="#pills-event" type="button" role="tab" aria-controls="pills-event" aria-selected="false">Renungan</button>
  			</li>
		</ul>

		<div class="tab-content" id="pills-tabContent">
            <!-- All -->
			<div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all">
                <div class="row">
                    <?php
						$paged = (get_query_var('paged')) ? (get_query_var('paged')) : 1;
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 9,
                            'post_status' => 'publish',
                            'paged' => $paged,
                        );
                        $the_query = new WP_Query( $args );
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                        $idPost = get_the_ID(); 
                    ?>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
						<div class="card border-0">
							<?php if(has_post_thumbnail()) { ?>
								<div id="zoomBerita"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="img-single-news w-100"></div>
							<?php } else{ ?>
								<div id="zoomBerita"><img src="<?php echo get_template_directory_uri(); ?>/library/images/notfound.png" class="img-single-news w-100"></div>
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
					if (function_exists('custom_pagination')) {
						custom_pagination($the_query->max_num_pages,"",$paged);
					}
					wp_reset_query(); ?>
                </div>
            </div>

			<!-- Blog -->
			<div class="tab-pane fade" id="pills-blog" role="tabpanel" aria-labelledby="pills-blog">
                <div class="row">
                    <?php
						$paged = (get_query_var('paged')) ? (get_query_var('paged')) : 1;
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 9,
                            'post_status' => 'publish',
                            'category__in' => 2,
                            'paged' => $paged,
                        );
                        $the_query = new WP_Query( $args );
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                        $idPost = get_the_ID(); 
                    ?>
                 	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
						<div class="card border-0">
							<?php if(has_post_thumbnail()) { ?>
								<div id="zoomBerita"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="img-single-news w-100"></div>
							<?php } else{ ?>
								<div id="zoomBerita"><img src="<?php echo get_template_directory_uri(); ?>/library/images/notfound.png" class="img-single-news w-100"></div>
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
					</div>`
					<?php endwhile; 
					if (function_exists('custom_pagination')) {
						custom_pagination($the_query->max_num_pages,"",$paged);
					}
					wp_reset_query(); ?>
                </div>
            </div>

			<!-- News -->
			<div class="tab-pane fade" id="pills-news" role="tabpanel" aria-labelledby="pills-news">
				<div class="row">
					<?php
						$paged = (get_query_var('paged')) ? (get_query_var('paged')) : 1;
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 9,
							'post_status' => 'publish',
							'category__in' => 4,
							'paged' => $paged,
						);
						$the_query = new WP_Query( $args );
						while ( $the_query->have_posts() ) : $the_query->the_post();
						$idPost = get_the_ID(); 
					?>
					<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
						<div class="card border-0">
							<?php if(has_post_thumbnail()) { ?>
								<div id="zoomBerita"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="img-single-news w-100"></div>
							<?php } else{ ?>
								<div id="zoomBerita"><img src="<?php echo get_template_directory_uri(); ?>/library/images/notfound.png" class="img-single-news w-100"></div>
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
					if (function_exists('custom_pagination')) {
						custom_pagination($the_query->max_num_pages,"",$paged);
					}
					wp_reset_query(); ?>
				</div>
			</div>

			<!-- Event -->
			<div class="tab-pane fade" id="pills-event" role="tabpanel" aria-labelledby="pills-event">
                <div class="row">
                    <?php
						$paged = (get_query_var('paged')) ? (get_query_var('paged')) : 1;
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 9,
                            'post_status' => 'publish',
                            'category__in' => 3,
                            'paged' => $paged,
                        );
                        $the_query = new WP_Query( $args );
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                        $idPost = get_the_ID(); 
                    ?>
					<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
						<div class="card border-0">
							<?php if(has_post_thumbnail()) { ?>
								<div id="zoomBerita"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="img-single-news w-100"></div>
							<?php } else{ ?>
								<div id="zoomBerita"><img src="<?php echo get_template_directory_uri(); ?>/library/images/notfound.png" class="img-single-news w-100"></div>
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
					if (function_exists('custom_pagination')) {
						custom_pagination($the_query->max_num_pages,"",$paged);
					}
					wp_reset_query(); ?>
                </div>
            </div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
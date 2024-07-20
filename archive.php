<?php 
	$name = 'white';
	$args = array(	
		"visibility" => true,
		"page" => 'berita',
	);
	get_header($name, $args); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">
<?php
	$page = (get_query_var('page')) ? absint(get_query_var('page')) : 1;
	query_posts($query_string.'&posts_per_page=6&paged='.$page);
?>

<div class="bg-pendaftaran" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/BERITA-BANNER-01-scaled.webp);">
	<h1 class="p-top fst-italic text-white text-center pt-0"><?php echo the_category(', '); ?></h1>
</div>
<div class="single-page">
	<div class="container" id="cont1200px">
		<div class="row">
			<div class="col-12 col-lg-8">
				<div class="row">
					<?php if (have_posts()) : while (have_posts()) : the_post(); 
						$idPost = get_the_ID(); 
						$getTitle = get_the_title($idPost);
					?>
					<div class="col-12 col-sm-6 col-lg-6 mb-3">
						<div class="card border-0">
							<?php if(has_post_thumbnail()) { ?>
								<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="img-single-news w-100">
							<?php } else{ ?>
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/notfound.png" class="img-single-news w-100" alt="">	
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
					<?php endwhile; else : endif; ?>
				</div>
			</div>

			<div class="col-12 col-lg-4">
				<div class="mb-5">
                    <h4 class="cat-single-news-single mb-3"> Categories </h4>
					<ul class="p-0">
						<?php
							$categories = get_categories();
							foreach($categories as $category) {
								echo '<li class="title-cat mb-3">';
								echo '<a href="'.get_category_link($category->term_id).'"><p class="list-category">' .$category->name. '</p></a>';
								echo '</li>';
							}
						?>
                    </ul>
                </div>
				<div class="mb-3">
                    <h4 class="cat-single-news-single mb-3"> Popular Posts </h4>
					<div class="row">
						<?php
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => 3 ,
								'post_status' => 'publish',
								// 'meta_key' => 'views',
								// 'orderby' => 'meta_value_num',
							);
							$the_query = new WP_Query( $args );
							while ( $the_query->have_posts() ) : $the_query->the_post();
							$idPost = get_the_ID(); 
							$getTitle = get_the_title($idPost);
						?>
						<div class="col-4">
							<?php if(has_post_thumbnail()) { ?>
								<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="img-single-news h-auto w-100 mb-3">
							<?php } else{ ?>
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/BERITA-BANNER-02.webp" class="img-single-news h-auto w-100 mb-3">	
							<?php } ?>
						</div>
						<div class="col-8">
							<a href="<?php echo get_permalink(); ?>"><h3 class="title-single-news-small"><?php echo $getTitle; ?></h3></a>
							<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/ICON-BERITA-02.svg" class="icon-single-news"/>
							<span class="cat-single-news me-3"><?php echo get_the_date('d M Y'); ?></span>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</div>
                </div>
			</div>
		</div>
	</div>
</div>


</article>
<?php get_footer(); ?>
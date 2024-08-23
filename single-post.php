<?php 
	$name = 'white';
	$args = array(	
		"visibility" => true,
		"page" => 'berita',
	);
	get_header($name, $args);
	if(have_posts()) : while (have_posts()) : the_post();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

<div class="bg-pendaftaran" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/BERITA-BANNER-01-scaled.webp);">
	<h1 class="p-top fst-italic text-white text-center pt-0"><?php echo get_the_title(); ?></h1>
</div>
<div class="single-page">
	<div class="container" id="cont1200px">
		<div class="row">
            <div class="col-12 col-lg-8">
				<?php if(has_post_thumbnail()) { ?>
                    <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="w-100 mb-3">
                <?php } else{ ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/notfound.png" class="w-100 mb-3">	
                <?php } ?>
				<div class="mb-3">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/ICON-BERITA-02.svg" class="icon-single-news"/>
					<span class="cat-single-news me-3"><?php echo get_the_date('d M Y'); ?></span>
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/ICON-BERITA-01.svg" class="icon-single-news"/>
					<span class="cat-single-news me-3"> <?php echo the_category(', '); ?> </span>
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/ICON-BERITA-03.svg" class="icon-single-news"/>
					<span class="cat-single-news"> <?php echo get_the_author(); ?> </span>
				</div>
                <h4 class="title-single-news-single"> <?php echo get_the_title(); ?> </h4>
                <div class="desc-single-news-single"><p> <?php echo the_content(); ?> </p></div>
				<!-- Comment -->
				<!-- <div class="mt-5"><?php //comment_form(); ?></div> -->
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
							);
							$the_query = new WP_Query( $args );
							while ( $the_query->have_posts() ) : $the_query->the_post();
							$idPost = get_the_ID(); 
							$getTitle = get_the_title($idPost);
						?>
						<div class="col-4 my-auto">
							<?php if(has_post_thumbnail()) { ?>
								<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="img-single-news h-auto w-100 mb-3">
							<?php } else{ ?>
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/BERITA-BANNER-02.webp" class="img-single-news h-auto w-100 mb-3">	
							<?php } ?>
						</div>
						<div class="col-8">
							<a href="<?php echo get_permalink(); ?>"><h3 class="title-single-news-small"><?php echo $getTitle; ?></h3></a>
							<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/ICON-BERITA-02.svg" class="icon-single-news"/>
							<span class="cat-single-news ms-1"><?php echo get_the_date('d M Y'); ?></span>
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
<?php endwhile; 
else :?>
<article id="post-not-found" class="hentry clearfix">
	<header class="article-header">
		<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
	</header>
	<section class="entry-content">
		<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
	</section>
	<footer class="article-footer">
			<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
	</footer>
</article>
<?php endif;
get_footer(); ?>
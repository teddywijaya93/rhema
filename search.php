<?php 
	get_header('second'); 
	$page = (get_query_var('page')) ? (get_query_var('page')) : 1;
	query_posts($query_string.'&posts_per_page=9&paged='.$page);	
?>

<div class="container" id="cont1200px">
	<div class="row">
		<div class="col-12">
			<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); 
					$idPost = get_the_ID(); 
					$getTitle = get_the_title($idPost);
				?>
				<div class="col-12 col-lg-4 mb-5">
					<div class="card">
						<?php if(has_post_thumbnail()) { ?>
							<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="" alt="">
						<?php } else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/notfound.png" class="w-100" alt="">	
						<?php } ?>
						<div class="card-body">
							
						</div>
					</div>
				</div>
				<?php 
					endwhile; 
					if (function_exists('custom_pagination_cat')) {
						custom_pagination_cat($the_query->max_num_pages,"",$page);
					}
				?>
				<?php else : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
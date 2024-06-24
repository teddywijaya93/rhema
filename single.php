<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

<?php // code here for single page ?>
	
</article>
<?php endwhile; ?>
<?php else : ?>
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
<?php endif; ?>
<?php get_footer(); ?>
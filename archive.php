<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

<?php
	$page = (get_query_var('page')) ? absint(get_query_var('page')) : 1;
	query_posts($query_string.'&posts_per_page=6&paged='.$page);
?>

</article>

<?php get_footer(); ?>
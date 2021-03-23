<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Airfreight
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'Airfreight' ); ?></span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php the_excerpt(); ?>

	<a href="<?php the_permalink();?>"><?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?></a>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_excerpt(
				sprintf(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'Airfreight' ),
					get_the_title()
				)
			);
			
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'Airfreight' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'Airfreight' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
			?>
	</div>
	<div class="blue-l-border mt-2 mb-2">&nbsp;</div>
</article><!-- #post-<?php the_ID(); ?> -->

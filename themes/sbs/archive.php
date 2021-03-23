<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<section id="inner-header">
	<div class="container">
		<h1><?php the_title();?></h1>
	</div>
</section>
<div class="container">
	<div class="breadcrumbs col-md-10 col-md-offset-1">
		<?php if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>
	</div>
</div> 
<section id="inner-container">
	<div class="container">
      <div class="col-md-7 col-md-offset-1 blog-post">
		<?php if ( have_posts() ) : ?>
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<?php
				// Start the Loop.
				while ( have_posts() ) :
					the_post();
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
					// End the loop.
				endwhile;
				// Previous/next page navigation.
				the_posts_pagination(
					array(
						'prev_text'          => __( 'Previous page', 'Airfreight' ),
						'next_text'          => __( 'Next page', 'Airfreight' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'Airfreight' ) . ' </span>',
					)
				);
				// If no content, include the "No posts found" template.
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>

	</div>
      <div class="col-md-3 side-bar">
		<?php get_sidebar();?>
	  </div>
	</div>
</section>
<section id="callout">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-offset-1">
				Can't find services you wanted? Let ask us for solution!
				<span class="callout-link pull-right"><a href="/contact/">Request Us <i class="fa fa-check"></i></a></span>
			</div>    
		</div>
	</div>
</section>
<?php get_footer(); ?>
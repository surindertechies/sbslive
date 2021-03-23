<?php
/**
 * The template for displaying Category pages
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
		<?php  query_posts(array('category' => 1, 'posts_per_page' => 8, 'paged' => $paged)); ?>
			<?php if (have_posts()) { ?>
			<?php while (have_posts()) { the_post();?>
				<div class="blog-container">
					<div class="blog-img">
						<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
					</div>
					<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<span class="blog-date"><?php echo get_the_date();?></span>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink();?>">Read More>></a>
				</div>
			<?php }} ?>
			<?php wp_pagenavi();?>
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
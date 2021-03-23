<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
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
	<div class="breadcrumbs col-sm-12">
		<?php if ( function_exists('yoast_breadcrumb') ) {
   yoast_breadcrumb('<p id="breadcrumbs">','</p>');
 } ?>
	</div>
  </div>
<section id="inner-container">
	<div class="container">
      <?php if(have_posts()) {
        while(have_posts()) :the_post();
         the_content();
      endwhile; }  ?>
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
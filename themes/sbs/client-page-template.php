<?php
/**
 * Template Name: Client Page
 *
 
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
  <section id="inner-container" style="padding-top:0;">

            <div class="container">
             <?php   the_post();
         the_content();
                    
                   
                      echo do_shortcode('[client-lists]');?>
                    
            </div>           
        
</section>
      <?php if(have_posts()) {
        while(have_posts()) :
      endwhile; }  ?>
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
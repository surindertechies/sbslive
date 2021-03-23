<?php
/**
 * The template for displaying 404 pages (Not Found)
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
		<a href="/sbs/">Home</a> / Notfound
	</div>
  </div>
<section id="inner-container">
	<div class="container">
		<h1 style="margin:0;">404 <span style="font-size:22px;">error	</span></h1>
		<h2>Sorry! Page not found.</h2>
		Unfortunately the page you are looking for has been moved or deleted.
		<span class="callout-link"><a href="/sbs/">Go To Home Page<i class="fa fa-check"></i></a></span>
	</div>
</section>
<section id="callout">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-offset-1">
                        Can't find services you wanted? Let ask us for solution!
                        <span class="callout-link pull-right"><a href="#">Request Us <i class="fa fa-check"></i></a></span>
						
                    </div>    
                </div>
            </div>
        </section>
<?php get_footer(); ?>
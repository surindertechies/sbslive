<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
  <section id="banner">
            <div id="main-slide" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators visible-lg visible-md">
			<?php $args = array('post_type' => 'slider', 'posts_per_page' => 4);
    //the loop
    $loop = new WP_Query($args);
	if ($loop->have_posts()) {  $j=0;
    while ($loop->have_posts()) {
        $loop->the_post(); 
		?>
			  	<li data-target="#main-slide" data-slide-to="<?php echo $j; ?>" class="<?php if($j==0) { echo "active"; } ?>"></li>
			    
				<?php $j++; } wp_reset_query(); } ?>
			</ol><!--/ Indicators end-->

			<!-- Carousel inner -->
			<div class="carousel-inner">
				<?php $args = array('post_type' => 'slider', 'posts_per_page' => 4);
    //the loop
    $loop = new WP_Query($args);
	if ($loop->have_posts()) {  $i=1;
    while ($loop->have_posts()) { $post_id = get_the_ID();
        $loop->the_post(); $images = wp_get_attachment_image_src($post_id, 'large');
		
		?>
			    <div class="item <?php if($i==1) { echo "active"; } ?>">
			    	<?php the_post_thumbnail('full');?>
                    <div class="slider-content">
                    	<div class="col-md-12 text-center">
                            <?php the_content(); ?>
                        </div>
                    </div>
			    </div><!--/ Carousel item end -->
	<?php $i++;  } wp_reset_query(); } ?>
			 
			    
			  
			</div><!-- Carousel inner end-->

			<!-- Controllers -->
			<a class="left carousel-control" href="#main-slide" data-slide="prev">
		    	<span><i class="fa fa-angle-left"></i></span>
			</a>
			<a class="right carousel-control" href="#main-slide" data-slide="next">
		    	<span><i class="fa fa-angle-right"></i></span>
			</a>

		</div><!--/ Carousel end -->    
        </section>
        <section id="" class="paddTB40">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bg_title"> <h2>WE HELP YOU RUN YOUR BUSINESS IN A SUCCESSFUL WAY</h2> </div>
                        <div class="module_descr"> 
                            <p>SBS Consult 2 result is growing management training & consulting company which believes the most important asset of the industry i.e. Human Capital to be utilized effectively to run the organizations on smooth run by providing them Inputs in form of Training & Counseling. </p>
                        </div>
                    </div>
                    <div class="col-sm-12 services">
                        <div class="col-sm-2 col-md-offset-1">
                            <div class="ico">01</div>
                            <h4>Consulting</h4>
                        </div>
                        <div class="col-sm-2">
                            <div class="ico">02</div>
                            <h4>Training</h4>
                        </div>
                        <div class="col-sm-2">
                            <div class="ico">03</div>
                            <h4>Strategy</h4>
                        </div>
                        <div class="col-sm-2">
                            <div class="ico">04</div>
                            <h4>Branding</h4>
                        </div>
						<div class="col-sm-2">
                            <div class="ico">05</div>
                            <h4>Growth Ingredients</h4>
                        </div>
                    </div>
                </div>
            </div>           
        </section>
        <section id="home-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    <div class="col-sm-6">
                        <p>Our qualified training team conducts a thorough Need Assessment of an organization & offers customized solutions that bring about positive and measurable changes in behaviour, attitudes and skills at all levels of an organisation. We are poised to give training solutions to enhance the skill sets & product knowledge spectrum of the participants ultimately resulting into growth of the organization.</p>
                        <p>Our Corporate Training programs are specially designed and executed by experienced trainers, who have wider perspective for entire requirements of clients. We know well, how to realize broad expectations of clients. We are fully equipped with all the modern training facilities and eventually expanding our business operations to meet clients' needs across the country.</p>
                    </div>
                    <div class="col-sm-6">
                        <img class="img-responsive" src="<?php echo bloginfo('template_directory');?>/images/tab_home.jpg" alt="" title="" />
                    </div>
                    </div>    
                </div>
            </div>
        </section>
        <!-- Clients start -->
	<section id="clients" class="clients">
		<div class="clients-overlay"></div>
		<div class="container">
			<div class="row text-center">
				<h3>Our Clients</h3>
			</div>
			<div class="row wow fadeInLeft">
		      <div id="client-carousel" class="col-sm-12 owl-carousel owl-theme text-center client-carousel">
			  <?php $args = array('post_type' => 'client', 'posts_per_page' => -1);
    //the loop
    $loop = new WP_Query($args);
	if ($loop->have_posts()) { 
    while ($loop->have_posts()) {
        $loop->the_post(); $the_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $type);
		?>
		
               <figure class="item client_logo">
		          <a href="<?php echo home_url('/clients');?>"><?php the_post_thumbnail('medium');?>
		          </a>
		        </figure>       
						
		<?php	
    } wp_reset_query();} ?>
		       
		      </div><!-- Owl carousel end -->
	    	</div><!-- Main row end -->
		</div><!--/ Container end -->
	</section><!--/ Clients end -->
        <section id="content-bottom" class="content-bottom">
		<div class="container">
			<div class="row">
				<!--<div class="col-md-6 col-sm-6">
					<div class="newsletter">
						<h3 class="title">Signup For Newsletter</h3>
						<div class="newsletter-introtext">
							Enter your email address and hit / return to subscribe. You will be informed about upcoming events.
						</div>
						<form action="#" method="post" id="newsletter-form" class="newsletter-form">
						<div class="form-group">
							<input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="Enter your email address" autocomplete="off">
							<button class="sub-button">Subscribe</button>
						</div>
						</form>
					</div>
				</div>-->
				<div class="col-md-12 col-sm-12">
					<div class="testimonial">
						<h3 class="title" style="text-align:center;">Client Testimonials</h3>

						    <div id="testimonial-carousel" class="owl-carousel owl-theme testimonial-slide">
						        <div class="item">
						          	<div class="testimonial-content">
							            <p class="testimonial-text">
							              Growth & Improvement is never ending but if there is lack of equational match with Industry, its nowhere . SBS team lined up growth, internal improvement in all areas which resulted in best practices , Employee Satisfaction, Organized growth , & cleared path with high level of responsibility.
							            </p>
							           	<div class="testimonial-thumb">
						            		
						            		<h3 class="name">Ramesh Arora<span>MD Kwality Pharmaceuticals</span></h3>

						          		</div>
						          	</div>
						        </div>
						        <div class="item">
							        <div class="testimonial-content">
							            <p class="testimonial-text">
							              SBS played very Significant role where everything was at its own place. We matched our desired standards with powerful strength of Professionalism. SBS not only delivered Horizontal & vertical growth but also proved that our brands are growing & are in the hands of Innovative team.
							            </p>
							         <div class="testimonial-thumb">
						            	
						            	<h3 class="name">Kuljive Mahajan<span>MD Consern Pharma , Consern Naturals</span></h3>
						          	</div>
							            
							        </div>
						        </div>
						        <div class="item">
						          	<div class="testimonial-content">
							            <p class="testimonial-text">
							              We didn’t feel the need of Consulting Services until we experienced the Services of SBS Team. SBS’ Strategies are Always innovative with Practical approach of implementation & acceptance , I believe this all happens due to their micro level penetration in the organization.
							            </p>
							            <div class="testimonial-thumb">
							            	
							            	<h3 class="name">S. Amarjit Singh<span>MD Vahoo Agencies Pvt. Ltd.</span></h3>
							        	</div>
						          	</div>
						        </div>
								
								 <div class="item">
						          	<div class="testimonial-content">
							            <p class="testimonial-text">
							              I say with pride that growth, team management , product handling expansion & brand popularity are the clear cut hallmarks of SBS team & I experienced it . It is an Investment to set growth benchmarks for ever.
							            </p>
							            <div class="testimonial-thumb">
							            	
							            	<h3 class="name">Tara Singh Uppal<span>MD UMPL India Pvt. Ltd.</span></h3>
							        	</div>
						          	</div>
						        </div>
								
						    </div><!--/ Testimonial carousel end-->
						    <!-- Navigation start -->
					      	<div class="customNavigation ts-carousel-controller">
						        <a class="prev left">
						        	<i class="fa fa-angle-left"></i>
						       	</a>
						        <a class="next right">
						          <i class="fa fa-angle-right"></i>
						        </a>
					    	</div><!--/ Navigation end -->

					</div><!-- Testimonial end -->

				</div>
			</div><!--/ Row end -->
		</div> <!--/ Container end -->
	</section>
<?php get_footer(); ?>
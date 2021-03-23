<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
   <footer>
            <div class="container">
                <ul class="footer-links">
                    <li><a href="/term-conditions">Term &amp; Conditions</a></li>
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                </ul>
                <div class="footer-divider"></div>
                <p>Copyright &copy; <?php echo date(Y); ?>, SBS Consult 2 Result. Design & Developed by <a href="http://www.techiesindiainc.com" target="_blank"> Techies India Inc.</a></p>
            </div>
            
        </footer>
        <script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
         <script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/js/owl.carousel.js"></script>
         <script type="text/javascript">
             jQuery(document).ready(function(){
                 //Testimonial
		jQuery("#testimonial-carousel").owlCarousel({
 
			navigation : true, // Show next and prev buttons
			slideSpeed : 600,
			pagination:false,
			singleItem:true
 
		});

		// Custom Navigation Events
		var owl = jQuery("#testimonial-carousel");

		// Custom Navigation Events
		jQuery(".next").click(function(){
			owl.trigger('owl.next');
		});
		jQuery(".prev").click(function(){
			owl.trigger('owl.prev');
		});
		jQuery(".play").click(function(){
			owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
		});
		jQuery(".stop").click(function(){
			owl.trigger('owl.stop');
		});
                 jQuery("#client-carousel").owlCarousel({

			navigation : false, // Show next and prev buttons
			slideSpeed : 400,
			pagination: true,
			items : 5,
			rewindNav: true,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3],
			stopOnHover:true,
			autoPlay:true

		});
                 
             })
            </script>
	<?php wp_footer(); ?>
</body>
</html>
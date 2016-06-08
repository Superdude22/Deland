<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="small-12 columns" role="main">
		    
		   
		    	<h1 class="hide-for-small-only"><?php the_title(); ?></h1>
				
				<?php woocommerce_content(); ?>							
			    					
			</main> <!-- end #main -->
	    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
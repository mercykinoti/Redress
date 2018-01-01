<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );
				endwhile; endif; 
			?>
		</div>
		<div class="col-md-2"></div>
	</div>
	
</div>

<?php get_footer(); ?>


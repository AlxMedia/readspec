<?php get_header(); ?>

<div class="content">

	<?php get_template_part('inc/page-title'); ?>
	
	<div class="content-inner">
		<div class="pad group">
		
			<?php get_template_part('inc/featured'); ?>
			
			<?php if ( have_posts() ) : ?>
				
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content'); ?>
				<?php endwhile; ?>
						
				<?php get_template_part('inc/pagination'); ?>
				
			<?php endif; ?>
			
		</div><!--/.pad-->
	</div><!--/.content-inner-->
	
	<?php get_template_part('inc/subfooter'); ?>
	
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
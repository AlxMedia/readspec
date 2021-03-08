<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>	
	
	<div class="post-thumbnail-circle">
		<?php if ( get_theme_mod('format-icon','on') == 'on' ): ?>
			<?php if ( $format != false ) :?><div class="format-circle"><a href="<?php echo get_post_format_link($format); ?>"><i class="fa"></i></a></div><?php endif; ?>
		<?php endif; ?>
		<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ): ?>
				<?php the_post_thumbnail('readspec-small'); ?>
			<?php else: ?>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/thumb-small.png" alt="<?php the_title_attribute(); ?>" />
			<?php endif; ?>
		</a>
	</div><!--post-thumbnail-circle-->
	
	<div class="post-inner">
	
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2><!--/.post-title-->	
		
		<div class="entry <?php if ( get_theme_mod('post-text','excerpt') == 'excerpt' ) { echo 'excerpt'; }; ?>">
			<?php 
				if ( get_theme_mod('post-text') == 'content' ) { the_content(); } 
				else the_excerpt();
			?>
		</div><!--/.entry-->
		
		<div class="post-meta group">
			<p class="post-category"><i class="fas fa-folder-open"></i><?php the_category(' / '); ?></p>
			<p class="post-date"><i class="far fa-clock"></i><?php the_time( get_option('date_format') ); ?></p>
		</div><!--/.post-meta-->
		
	</div>
	
</article><!--/.post-->	
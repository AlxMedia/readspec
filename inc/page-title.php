<div class="page-title group">
	<div class="content-inner">
		<div class="pad group">

	<?php if ( is_home() ) : ?>
		<h2><?php echo readspec_blog_title(); ?></h2>
		<ul class="dropdown-buttons">
			<li class="categories">
				<a href="#"><?php esc_html_e('Categories','readspec'); ?><i class="fas fa-angle-down"></i></a>
				<ul class="sub-menu">	
					<?php wp_list_categories('orderby=name&title_li=&show_count=1&exclude=10'); ?> 
				</ul>
			</li>
			<li class="archive">
				<a href="#"><?php esc_html_e('Archive','readspec'); ?><i class="fas fa-angle-down"></i></a>
				<ul class="sub-menu">
					<?php wp_get_archives('type=monthly&show_post_count=true'); ?>
				</ul>
			</li>
		</ul>
		
	<?php elseif ( is_single() ): ?>
		<ul class="meta-single group">
			<li class="category"><?php the_category(' <span>/</span> '); ?></li>
			<?php if ( comments_open() && ( get_theme_mod( 'comment-count','on' ) == 'on' ) ): ?>
			<li class="comments"><a href="<?php comments_link(); ?>"><i class="fas fa-comments"></i><?php comments_number( '0', '1', '%' ); ?></a></li>
			<?php endif; ?>
		</ul>
		
	<?php elseif ( is_page() ): ?>
		<h2><?php the_title(); ?></h2>

	<?php elseif ( is_search() ): ?>
		<h1>
			<?php if ( have_posts() ): ?><i class="fas fa-search"></i><?php endif; ?>
			<?php if ( !have_posts() ): ?><i class="fas fa-exclamation-circle"></i><?php endif; ?>
			<?php $search_results=$wp_query->found_posts;
				if ($search_results==1) {
					echo $search_results.' '.esc_html__('Search result','readspec');
				} else {
					echo $search_results.' '.esc_html__('Search results','readspec');
				}
			?>
		</h1>
		
	<?php elseif ( is_404() ): ?>
		<h1><i class="fas fa-exclamation-circle"></i><?php esc_html_e('Error 404.','readspec'); ?> <span><?php esc_html_e('Page not found!','readspec'); ?></span></h1>
		
	<?php elseif ( is_author() ): ?>
		<?php $author = get_userdata( get_query_var('author') );?>
		<h1><i class="far fa-user"></i><?php esc_html_e('Author:','readspec'); ?> <span><?php echo $author->display_name;?></span></h1>
		
	<?php elseif ( is_category() ): ?>
		<h1><i class="far fa-folder-open"></i><?php esc_html_e('Category:','readspec'); ?> <span><?php echo single_cat_title('', false); ?></span></h1>

	<?php elseif ( is_tag() ): ?>
		<h1><i class="fas fa-tags"></i><?php esc_html_e('Tagged:','readspec'); ?> <span><?php echo single_tag_title('', false); ?></span></h1>
		
	<?php elseif ( is_day() ): ?>
		<h1><i class="far fa-calendar"></i><?php esc_html_e('Daily Archive:','readspec'); ?> <span><?php echo esc_html( get_the_time('F j, Y') ); ?></span></h1>
		
	<?php elseif ( is_month() ): ?>
		<h1><i class="far fa-calendar"></i><?php esc_html_e('Monthly Archive:','readspec'); ?> <span><?php echo esc_html( get_the_time('F Y') ); ?></span></h1>
			
	<?php elseif ( is_year() ): ?>
		<h1><i class="far fa-calendar"></i><?php esc_html_e('Yearly Archive:','readspec'); ?> <span><?php echo esc_html( get_the_time('Y') ); ?></span></h1>
		
		<?php elseif ( has_post_format('audio') ): ?>
			<h1><i class="fas fa-volume-up"></i><?php esc_html_e('Type:','readspec'); ?> <span><?php esc_html_e('Audio','readspec'); ?></span></h1>
		<?php elseif ( has_post_format('aside') ): ?>
			<h1><i class="fas fa-pen"></i><?php esc_html_e('Type:','readspec'); ?> <span><?php esc_html_e('Aside','readspec'); ?></span></h1>
		<?php elseif ( has_post_format('chat') ): ?>
			<h1><i class="fas fa-comments"></i><?php esc_html_e('Type:','readspec'); ?> <span><?php esc_html_e('Chat','readspec'); ?></span></h1>
		<?php elseif ( has_post_format('gallery') ): ?>
			<h1><i class="fas fa-image"></i><?php esc_html_e('Type:','readspec'); ?> <span><?php esc_html_e('Gallery','readspec'); ?></span></h1>
		<?php elseif ( has_post_format('image') ): ?>
			<h1><i class="fas fa-camera"></i><?php esc_html_e('Type:','readspec'); ?> <span><?php esc_html_e('Image','readspec'); ?></span></h1>
		<?php elseif ( has_post_format('link') ): ?>
			<h1><i class="fas fa-link"></i><?php esc_html_e('Type:','readspec'); ?> <span><?php esc_html_e('Link','readspec'); ?></span></h1>
		<?php elseif ( has_post_format('quote') ): ?>
			<h1><i class="fas fa-quote-left"></i><?php esc_html_e('Type:','readspec'); ?> <span><?php esc_html_e('Quote','readspec'); ?></span></h1>
		<?php elseif ( has_post_format('status') ): ?>
			<h1><i class="fas fa-bullhorn"></i><?php esc_html_e('Type:','readspec'); ?> <span><?php esc_html_e('Status','readspec'); ?></span></h1>
		<?php elseif ( has_post_format('video') ): ?>
			<h1><i class="fas fa-video"></i><?php esc_html_e('Type:','readspec'); ?> <span><?php esc_html_e('Video','readspec'); ?></span></h1>
	
	<?php else: ?>
		<h2><?php the_title(); ?></h2>
	
	<?php endif; ?>
	
		</div><!--/.pad-->
	</div><!--/.content-inner-->
</div><!--/.page-title-->
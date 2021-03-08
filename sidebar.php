<?php 
	$sidebar = readspec_sidebar_primary();
	$layout = readspec_layout_class();
	if ( $layout != 'col-1c'):
?>

	<div class="sidebar s1 dark">
		
		<a class="sidebar-toggle" title="<?php esc_attr_e('Expand Sidebar','readspec'); ?>"><i class="fa icon-sidebar-toggle"></i></a>
		
		<div class="sidebar-content">
		
			<div id="profile">
				<?php if ( get_theme_mod('profile-image') ): ?>
					<div id="profile-image"><img src="<?php echo esc_html( get_theme_mod('profile-image') ); ?>" alt="" /></div>
				<?php endif; ?>
				<?php if ( get_theme_mod('profile-name') ): ?>
					<div id="profile-name"><?php echo esc_html( get_theme_mod('profile-name') ); ?></div>
				<?php endif; ?>
				<?php if ( get_theme_mod('profile-description') ): ?>
					<div id="profile-description"><?php echo wp_kses_post( get_theme_mod('profile-description') ); ?></div>
				<?php endif; ?>
			</div>
			<?php if ( get_theme_mod( 'header-social', 'on' ) == 'on' ): ?>
				<?php readspec_social_links() ; ?>
			<?php endif; ?>
			
			<?php if ( get_theme_mod( 'post-nav','s1' ) == 's1') { get_template_part('inc/post-nav'); } ?>
			
			<?php if( is_page_template('page-templates/child-menu.php') ): ?>
			<ul class="child-menu group">
				<?php wp_list_pages('title_li=&sort_column=menu_order&depth=3'); ?>
			</ul>
			<?php endif; ?>
			
			<?php dynamic_sidebar($sidebar); ?>
			
		</div><!--/.sidebar-content-->
		
	</div><!--/.sidebar-->

	<?php if (
		( $layout == 'col-3cm' ) ||
		( $layout == 'col-3cl' ) ||
		( $layout == 'col-3cr' ) )
		{ get_template_part('sidebar-2'); } 
	?>
	
<?php endif; ?>
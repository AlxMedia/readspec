<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'readspec', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'readspec' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'readspec' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'readspec' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'readspec' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'readspec' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'readspec' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'readspec' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'readspec' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'readspec' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'readspec' ),
	'description'	=> esc_html__( 'Hide sidebar content on low-resolution mobile devices (320px)', 'readspec' ),
	'section'		=> 'general',
	'default'		=> '1',
	'choices'		=> array(
		'1'			=> esc_html__( 'Show sidebars', 'readspec' ),
		's1'		=> esc_html__( 'Hide primary sidebar', 'readspec' ),
		's2'		=> esc_html__( 'Hide secondary sidebar', 'readspec' ),
		's1-s2'		=> esc_html__( 'Hide both sidebars', 'readspec' ),
	),
) );
// General: Post Comments
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'post-comments',
	'label'			=> esc_html__( 'Post Comments', 'readspec' ),
	'description'	=> esc_html__( 'Comments on posts', 'readspec' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Page Comments
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'page-comments',
	'label'			=> esc_html__( 'Page Comments', 'readspec' ),
	'description'	=> esc_html__( 'Comments on pages', 'readspec' ),
	'section'		=> 'general',
	'default'		=> 'off',
) );
// General: Recommended Plugins
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'readspec' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'readspec' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Entry Text
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-text',
	'label'			=> esc_html__( 'Entry Text', 'readspec' ),
	'description'	=> esc_html__( 'Show full entry text or just the excerpt', 'readspec' ),
	'section'		=> 'blog',
	'default'		=> 'excerpt',
	'choices'		=> array(
		'excerpt'	=> esc_html__( 'Show Excerpt', 'readspec' ),
		'content'	=> esc_html__( 'Show Content', 'readspec' ),
	),
) );
// Blog: Heading
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'readspec' ),
	'description'	=> esc_html__( 'Your blog heading', 'readspec' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'readspec' ),
	'description'	=> esc_html__( 'Your blog subheading', 'readspec' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'readspec' ),
	'description'	=> esc_html__( 'Max number of words', 'readspec' ),
	'section'		=> 'blog',
	'default'		=> '34',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Category
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'readspec' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'readspec' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'readspec' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'readspec' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set to 1 and it will show it without any slider script. Set it to 0 to disable', 'readspec' ),
	'section'		=> 'blog',
	'default'		=> '3',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'readspec' ),
	'description'	=> esc_html__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'readspec' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Post Format Icons
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'format-icon',
	'label'			=> esc_html__( 'Post Format Icons', 'readspec' ),
	'description'	=> esc_html__( 'Icons on top of the featured images', 'readspec' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'readspec' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'readspec' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'readspec' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'readspec' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'readspec' ),
		'categories'=> esc_html__( 'Related by categories', 'readspec' ),
		'tags'		=> esc_html__( 'Related by tags', 'readspec' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'readspec' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'readspec' ),
	'section'		=> 'blog',
	'default'		=> 's1',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'readspec' ),
		's1'		=> esc_html__( 'Sidebar Primary', 'readspec' ),
		's2'		=> esc_html__( 'Sidebar Secondary', 'readspec' ),
		'content'	=> esc_html__( 'Below content', 'readspec' ),
	),
) );
// Header: Search
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'readspec' ),
	'description'	=> esc_html__( 'Header search button', 'readspec' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'readspec' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'readspec' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'readspec' ),
	'description'	=> esc_html__( 'Recommended size is 400x400px', 'readspec' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'readspec' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'readspec' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'readspec' ),
	'description'	=> esc_html__( 'A short description of you', 'readspec' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'readspec' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'readspec' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'readspec' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'readspec' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'readspec' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'readspec' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'readspec' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'readspec' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'readspec' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'readspec' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'readspec' ),
	'description'	=> esc_html__( 'Footer credit text', 'readspec' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'readspec' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'readspec' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'readspec' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'readspec' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'readspec' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'readspec' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'readspec' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'readspec' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'readspec' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'readspec' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'readspec' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'readspec' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'readspec' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'readspec' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'readspec' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'readspec' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );


function readspec_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'readspec_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'readspec' ),
		'description'	=> esc_html__( '(is_home) Primary', 'readspec' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'readspec' ),
	) );
	Kirki::add_field( 'readspec_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-home',
		'label'			=> esc_html__( 'Home', 'readspec' ),
		'description'	=> esc_html__( '(is_home) Secondary', 'readspec' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'readspec' ),
	) );
	Kirki::add_field( 'readspec_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'readspec' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'readspec' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'readspec' ),
	) );
	Kirki::add_field( 'readspec_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-single',
		'label'			=> esc_html__( 'Single', 'readspec' ),
		'description'	=> esc_html__( '(is_single) Secondary - If a single post has a unique sidebar, it will override this.', 'readspec' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'readspec' ),
	) );
	Kirki::add_field( 'readspec_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'readspec' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'readspec' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'readspec' ),
	) );
	Kirki::add_field( 'readspec_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive',
		'label'			=> esc_html__( 'Archive', 'readspec' ),
		'description'	=> esc_html__( '(is_archive) Secondary', 'readspec' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'readspec' ),
	) );
	Kirki::add_field( 'readspec_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'readspec' ),
		'description'	=> esc_html__( '(is_category) Primary', 'readspec' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'readspec' ),
	) );
	Kirki::add_field( 'readspec_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'readspec' ),
		'description'	=> esc_html__( '(is_category) Secondary', 'readspec' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'readspec' ),
	) );
	Kirki::add_field( 'readspec_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'readspec' ),
		'description'	=> esc_html__( '(is_search) Primary', 'readspec' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'readspec' ),
	) );
	Kirki::add_field( 'readspec_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-search',
		'label'			=> esc_html__( 'Search', 'readspec' ),
		'description'	=> esc_html__( '(is_search) Secondary', 'readspec' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'readspec' ),
	) );
	Kirki::add_field( 'readspec_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'readspec' ),
		'description'	=> esc_html__( '(is_404) Primary', 'readspec' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'readspec' ),
	) );
	Kirki::add_field( 'readspec_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-404',
		'label'			=> esc_html__( 'Error 404', 'readspec' ),
		'description'	=> esc_html__( '(is_404) Secondary', 'readspec' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'readspec' ),
	) );
	Kirki::add_field( 'readspec_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'readspec' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'readspec' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'readspec' ),
	) );
	Kirki::add_field( 'readspec_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-page',
		'label'			=> esc_html__( 'Default Page', 'readspec' ),
		'description'	=> esc_html__( '(is_page) Secondary - If a page has a unique sidebar, it will override this.', 'readspec' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'readspec' ),
	) );
	
 } 
add_action( 'init', 'readspec_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'readspec' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'readspec' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'readspec' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'readspec' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'readspec' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'readspec' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'readspec' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'readspec' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'readspec' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'readspec' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'readspec' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'readspec' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'readspec' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'readspec' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'readspec' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'readspec' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'readspec' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Boxed Layout
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_html__( 'Boxed Layout', 'readspec' ),
	'description'	=> esc_html__( 'Use a boxed layout', 'readspec' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'readspec' ),
	'description'	=> esc_html__( 'Select font for the theme', 'readspec' ),
	'section'		=> 'styling',
	'default'		=> 'roboto-condensed',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'readspec' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'readspec' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'readspec' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'readspec' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'readspec' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'readspec' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'readspec' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'readspec' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'readspec' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'readspec' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'readspec' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'readspec' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'readspec' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'readspec' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'readspec' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'readspec' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'readspec' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'readspec' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'readspec' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'readspec' ),
		'arial'					=> esc_html__( 'Arial', 'readspec' ),
		'georgia'				=> esc_html__( 'Georgia', 'readspec' ),
		'verdana'				=> esc_html__( 'Verdana', 'readspec' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'readspec' ),
	),
) );
// Styling: Content Width
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'readspec' ),
	'description'	=> esc_html__( 'Max-width of the content', 'readspec' ),
	'section'		=> 'styling',
	'default'		=> '780',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1200',
		'step'	=> '1',
	),
) );
// Styling: Container Width
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'readspec' ),
	'description'	=> esc_html__( 'Max-width of the container. Note: Only use this on the boxed layout', 'readspec' ),
	'section'		=> 'styling',
	'default'		=> '1380',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1600',
		'step'	=> '1',
	),
) );
// Styling: Sidebar Width
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'sidebar-padding',
	'label'			=> esc_html__( 'Sidebar Width', 'readspec' ),
	'section'		=> 'styling',
	'default'		=> '30',
	'choices'		=> array(
		'30'	=> esc_html__( '280px primary (30px padding)', 'readspec' ),
		'20'	=> esc_html__( '300px primary (20px padding)', 'readspec' ),
	),
) );
// Styling: Primary Color
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'readspec' ),
	'section'		=> 'styling',
	'default'		=> '#2eb398',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'readspec' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'readspec' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Image Border Radius
Kirki::add_field( 'readspec_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'image-border-radius',
	'label'			=> esc_html__( 'Image Border Radius', 'readspec' ),
	'description'	=> esc_html__( 'Give your thumbnails and layout images rounded corners', 'readspec' ),
	'section'		=> 'styling',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '15',
		'step'	=> '1',
	),
) );
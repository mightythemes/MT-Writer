<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mighty Themes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>


<?php
	/* Left Sidebar */
	// Metabox Sidebar Status (Gutenberg)
	$mtwriter_metabox_sidebar_status = get_post_meta(get_the_ID(), 'mtwriter-sidebar-status', true) ? get_post_meta(get_the_ID(), 'mtwriter-sidebar-status', true) : "default";

	// Post Level
	if(is_single()) :
		// Sidebar Left
		if ( $mtwriter_metabox_sidebar_status == "default" ) {
			if ( get_theme_mod('singlepost_sidebar', 'default') == 'default' ) {
				if ( get_theme_mod('default_sidebar', 'none') == 'left' ) {
				?> 
					<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-left'); ?> >
				<?php
				}
			} elseif ( get_theme_mod('singlepost_sidebar', 'default') == 'left') {
			?> 
				<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-left'); ?> >
			<?php
			}
		}
		elseif ( $mtwriter_metabox_sidebar_status == "left" ) {
		?> 
			<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-left'); ?> >
		<?php
		}

		// Sidebar Right
		if ( $mtwriter_metabox_sidebar_status == "default" ) {
			if ( get_theme_mod('singlepost_sidebar', 'default') == 'default' ) {
				if ( get_theme_mod('default_sidebar', 'none') == 'right' ) {
				?> 
					<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-right'); ?> >
				<?php
				}
			} elseif ( get_theme_mod('singlepost_sidebar', 'default') == 'right') {
			?> 
				<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-right'); ?> >
			<?php
			}
		}
		elseif ( $mtwriter_metabox_sidebar_status == "right" ) {
		?> 
			<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-right'); ?> >
		<?php
		}

		// No Sidebar Enabled
		if ( get_theme_mod('default_sidebar', 'none') == 'none' ) {
			if ( get_theme_mod('singlepost_sidebar', 'default') == 'default' ) {
			?>
				<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class(); ?> >
			<?php
			}
		}
	endif;
	
	// Page Level
	if(is_page()) :
		// Sidebar Left
		if( $mtwriter_metabox_sidebar_status == "default" ) {
			if ( get_theme_mod('singlepage_sidebar', 'default') == 'default' ) {
				if ( get_theme_mod('default_sidebar', 'none') == 'left' ) {
				?> 
					<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-left'); ?> >
				<?php
				}
			} elseif ( get_theme_mod('singlepage_sidebar', 'default') == 'left') {
			?> 
				<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-left'); ?> >
			<?php
			}
		}
		elseif( $mtwriter_metabox_sidebar_status == "left" ) {
		?> 
			<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-left'); ?> >
		<?php
		}

		// Sidebar Right
		if( $mtwriter_metabox_sidebar_status == "default" ) {
			if ( get_theme_mod('singlepage_sidebar', 'default') == 'default' ) {
				if ( get_theme_mod('default_sidebar', 'none') == 'right' ) {
				?> 
					<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-right'); ?> >
				<?php
				}
			} elseif ( get_theme_mod('singlepage_sidebar', 'default') == 'right') {
			?> 
				<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-right'); ?> >
			<?php
			}
		}
		elseif( $mtwriter_metabox_sidebar_status == "right" ) {
		?> 
			<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-right'); ?> >
		<?php
		}

		// No Sidebar Enabled
		if ( get_theme_mod('default_sidebar', 'none') == 'none' ) {
			if ( get_theme_mod('singlepage_sidebar', 'default') == 'default' ) {
			?>
				<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class(); ?> >
			<?php
			}
		}
	endif;

	if( is_home() ) :
		
		// Sidebar Left
		if ( get_theme_mod('archive_sidebar', 'default') == 'default' ) {
			if ( get_theme_mod('default_sidebar', 'none') == 'left' ) {
			?> 
				<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-left'); ?> >
			<?php
			}
		} elseif ( get_theme_mod('archive_sidebar', 'default') == 'left') {
		?> 
			<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-left'); ?> >
		<?php
		}

		// Sidebar Right
		if ( get_theme_mod('archive_sidebar', 'default') == 'default' ) {
			if ( get_theme_mod('default_sidebar', 'none') == 'right' ) {
			?> 
				<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-right'); ?> >
			<?php
			}
		} elseif ( get_theme_mod('archive_sidebar') == 'right') {
		?>
			<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class('widthsidebar sidebar-right'); ?> >
		<?php
		}
		
		// No Sidebar Enabled
		if ( get_theme_mod('default_sidebar', 'none') == 'none' ) {
			if ( get_theme_mod('archive_sidebar', 'default') == 'default' ) {
			?>
				<body itemtype="https://schema.org/Blog" itemscope="itemscope" <?php body_class(); ?> >
			<?php
			}
		}
	endif;
?>

<?php
	/**
	 * Allow developers to inject code
	 *
	 * @link https://make.wordpress.org/core/2019/04/24/miscellaneous-developer-updates-in-5-2/
	 */
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}
?>

<?php
// Skip to content link
printf( '<a class="screen-reader-text skip-link" href="#content" title="%1$s">%2$s</a>',
	esc_attr__( 'Skip to content', 'mtwriter' ),
	esc_html__( 'Skip to content', 'mtwriter' )
);
?>

<?php
// Preloader
if (get_theme_mod('preloader_status', 0)) :
    get_template_part('template-parts/preloader');
endif;
?>

<?php if (get_theme_mod('backtotop_status', 0) ) { ?>
	<!-- Back To Top -->
	<a id="backtotop" class="<?php echo esc_attr( get_theme_mod('backtotop_shape', 'square') ); echo esc_attr( get_theme_mod('backtotop_mobile', 0) ? ' d-none d-sm-block' : '' ); ?>" href="javascript:void(0)" >
        <i class="<?php echo esc_attr(get_theme_mod('backtotop_icon', 'fas fa-arrow-up')); ?>"></i>
    </a>
<?php } ?>

<div class="inner-body-wrap">
	<div class="inner-body container">

		<?php
			// Header Options
			switch(get_theme_mod('header_style', 'horizontal')):
				case 'horizontal':
					get_template_part( 'template-parts/header/header', 'horizontal');
				break;
				default:
					get_template_part( 'template-parts/header/header', 'stacked' );
			endswitch
		?>

		<?php
			if ( is_home() ) :
				if ( get_theme_mod('show_hero_area', 0) ) :
					get_template_part( 'template-parts/author', 'bio-wrap' );
				endif;
			endif;
		?>

		<div id="main-container" class="main-container mt-4">
			<div class="mt-container">
							
			<?php
				/* Left Sidebar */
				// Metabox Sidebar Status (Gutenberg)
				$mtwriter_metabox_sidebar_status = get_post_meta(get_the_ID(), 'mtwriter-sidebar-status', true) ? get_post_meta(get_the_ID(), 'mtwriter-sidebar-status', true) : "default";
				
				// Post Level
				if(is_single()) :
					if ( $mtwriter_metabox_sidebar_status == "default" ) {
						if ( get_theme_mod('singlepost_sidebar', 'default') == 'default' ) {
							if ( get_theme_mod('default_sidebar', 'none') == 'left' ) {
								get_template_part( 'template-parts/sidebar/sidebar', 'left' );
							}
						} elseif ( get_theme_mod('singlepost_sidebar', 'default') == 'left') {
							get_template_part( 'template-parts/sidebar/sidebar', 'left' );
						}
					}
					elseif ( $mtwriter_metabox_sidebar_status == "left" ) {
						get_template_part( 'template-parts/sidebar/sidebar', 'left' );
					}
				endif;
				
				// Page Level
				if(is_page()) :
					if( $mtwriter_metabox_sidebar_status == "default" ) {
						if ( get_theme_mod('singlepage_sidebar', 'default') == 'default' ) {
							if ( get_theme_mod('default_sidebar', 'none') == 'left' ) {
								get_template_part( 'template-parts/sidebar/sidebar', 'left' );
							}
						} elseif ( get_theme_mod('singlepage_sidebar', 'default') == 'left') {
							get_template_part( 'template-parts/sidebar/sidebar', 'left' );
						}
					}
					elseif( $mtwriter_metabox_sidebar_status == "left" ) {
						get_template_part( 'template-parts/sidebar/sidebar', 'left' );
					}
				endif;

				// Homepage level
				if( is_home() ) :
					if ( get_theme_mod('archive_sidebar', 'default') == 'default' ) {
						if ( get_theme_mod('default_sidebar', 'none') == 'left' ) {
							get_template_part( 'template-parts/sidebar/sidebar', 'left' );
						}
					} elseif ( get_theme_mod('archive_sidebar', 'default') == 'left') {
						get_template_part( 'template-parts/sidebar/sidebar', 'left' );
					}

				endif;
			?>
			
			<div id="content" class="content-area primary">

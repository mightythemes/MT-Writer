<?php
//
// ─── STYLES FOR LIVE-PREVIEW ────────────────────────────────────────────────────
//

function mtwriter_customizer_css()
{
    ?>
        <style type="text/css">

            :root {
                --preloader-color: <?php echo mtwriterGetOption('color', 'color_preloader'); ?>;
                --preloader-size: <?php echo mtwriterGetOption('defaults', 'preloader_size'); ?>px;
                --backtotop-size: <?php echo mtwriterGetOption('defaults', 'backtotop_size'); ?>px;

                --site-color: <?php echo mtwriterGetOption('color', 'color_site'); ?>;
                --main-color: <?php echo mtwriterGetOption('color', 'color_primary'); ?>;
                --header-text-color: <?php echo mtwriterGetOption('color', 'color_header_text'); ?>;
                --body-bg-color: <?php echo mtwriterGetOption('color', 'color_background'); ?>;

                --body-bg-img: url(<?php echo esc_attr(get_theme_mod('background_image', '')); ?>);
                --body-bg-size: <?php echo esc_attr(get_theme_mod('background_size', '')); ?>;
                --body-bg-position: <?php echo esc_attr(get_theme_mod('background_position', '')); ?>;
                --body-bg-repeat: <?php echo esc_attr(get_theme_mod('background_repeat', '')); ?>;
                --body-bg-attachment: <?php echo esc_attr(get_theme_mod('background_attachment', '')); ?>;

                --link-color: <?php echo mtwriterGetOption('color', 'color_menu'); ?>;
                --link-hover-color: <?php echo mtwriterGetOption('color', 'color_menu_hover'); ?>;
                --link-active-color: <?php echo mtwriterGetOption('color', 'color_menu_active'); ?>;

                --drop-down-bg: <?php echo mtwriterGetOption('color', 'color_dropdown_background'); ?>;

                --drop-down-link-color: <?php echo mtwriterGetOption('color', 'color_dropdown_link'); ?>;

                --drop-down-active-link-color: <?php echo mtwriterGetOption('color', 'color_dropdown_activelink'); ?>;
                --drop-down-hover-link-color: <?php echo mtwriterGetOption('color', 'color_link_hover'); ?>;

                --sidebar-width: <?php echo mtwriterGetOption('defaults', 'sidebar_width'); ?>px;

                --copyright-hover: <?php echo mtwriterGetOption('color', 'color_copyright_linkhover'); ?>;
            }

            /* Typography */
            

            body.custom-background {
                background-color: var(--body-bg-color);
            }
            
            body {
                background-image: var(--body-bg-img);
                background-size: var(--body-bg-size);
                background-position: var(--body-bg-position);
                background-repeat: var(--body-bg-repeat);
                background-attachment: var(--body-bg-attachment);

                background-color: var(--body-bg-color);

                font-family: <?php echo mtwriterGetOption('fonts', 'body_fontfamily'); ?>, <?php echo mtwriterGetOption('fonts', 'body_alt_fontfamily'); ?>;
                font-size: <?php echo mtwriterGetOption('fonts', 'body_fontsize'); ?><?php echo mtwriterGetOption('fonts', 'body_fontsize_unit'); ?>;
                text-transform: <?php echo mtwriterGetOption('fonts', 'body_texttransform'); ?>;
                letter-spacing: <?php echo mtwriterGetOption('fonts', 'body_letterspacing'); ?>px;
                font-weight: <?php echo mtwriterGetOption('fonts', 'body_fontweight'); ?>;
                line-height: <?php echo mtwriterGetOption('fonts', 'body_lineheight'); ?>;
            }

            h1 {
                font-family: <?php echo mtwriterGetOption('fonts', 'h1_fontfamily'); ?>, <?php echo mtwriterGetOption('fonts', 'h1_alt_fontfamily'); ?>;
                font-size: <?php echo mtwriterGetOption('fonts', 'h1_fontsize'); ?><?php echo mtwriterGetOption('fonts', 'h1_fontsize_unit'); ?>;
                text-transform: <?php echo mtwriterGetOption('fonts', 'h1_texttransform'); ?>;
                letter-spacing: <?php echo mtwriterGetOption('fonts', 'h1_letterspacing'); ?>px;
                font-weight: <?php echo mtwriterGetOption('fonts', 'h1_fontweight'); ?>;
                line-height: <?php echo mtwriterGetOption('fonts', 'h1_lineheight'); ?>;
            }
            
            h2 {
                font-family: <?php echo mtwriterGetOption('fonts', 'h2_fontfamily'); ?>, <?php echo mtwriterGetOption('fonts', 'h2_alt_fontfamily'); ?>;
                font-size: <?php echo mtwriterGetOption('fonts', 'h2_fontsize'); ?><?php echo mtwriterGetOption('fonts', 'h2_fontsize_unit'); ?>;
                text-transform: <?php echo mtwriterGetOption('fonts', 'h2_texttransform'); ?>;
                letter-spacing: <?php echo mtwriterGetOption('fonts', 'h2_letterspacing'); ?>px;
                font-weight: <?php echo mtwriterGetOption('fonts', 'h2_fontweight'); ?>;
                line-height: <?php echo mtwriterGetOption('fonts', 'h2_lineheight'); ?>;
            }

            h3 {
                font-family: <?php echo mtwriterGetOption('fonts', 'h3_fontfamily'); ?>, <?php echo mtwriterGetOption('fonts', 'h3_alt_fontfamily'); ?>;
                font-size: <?php echo mtwriterGetOption('fonts', 'h3_fontsize'); ?><?php echo mtwriterGetOption('fonts', 'h3_fontsize_unit'); ?>;
                text-transform: <?php echo mtwriterGetOption('fonts', 'h3_texttransform'); ?>;
                letter-spacing: <?php echo mtwriterGetOption('fonts', 'h3_letterspacing'); ?>px;
                font-weight: <?php echo mtwriterGetOption('fonts', 'h3_fontweight'); ?>;
                line-height: <?php echo mtwriterGetOption('fonts', 'h3_lineheight'); ?>;
            }

            h4 {
                font-family: <?php echo mtwriterGetOption('fonts', 'h4_fontfamily'); ?>, <?php echo mtwriterGetOption('fonts', 'h4_alt_fontfamily'); ?>;
                font-size: <?php echo mtwriterGetOption('fonts', 'h4_fontsize'); ?><?php echo mtwriterGetOption('fonts', 'h4_fontsize_unit'); ?>;
                text-transform: <?php echo mtwriterGetOption('fonts', 'h4_texttransform'); ?>;
                letter-spacing: <?php echo mtwriterGetOption('fonts', 'h4_letterspacing'); ?>px;
                font-weight: <?php echo mtwriterGetOption('fonts', 'h4_fontweight'); ?>;
                line-height: <?php echo mtwriterGetOption('fonts', 'h4_lineheight'); ?>;
            }

            h5 {
                font-family: <?php echo mtwriterGetOption('fonts', 'h5_fontfamily'); ?>, <?php echo mtwriterGetOption('fonts', 'h5_alt_fontfamily'); ?>;
                font-size: <?php echo mtwriterGetOption('fonts', 'h5_fontsize'); ?><?php echo mtwriterGetOption('fonts', 'h5_fontsize_unit'); ?>;
                text-transform: <?php echo mtwriterGetOption('fonts', 'h5_texttransform'); ?>;
                letter-spacing: <?php echo mtwriterGetOption('fonts', 'h5_letterspacing'); ?>px;
                font-weight: <?php echo mtwriterGetOption('fonts', 'h5_fontweight'); ?>;
                line-height: <?php echo mtwriterGetOption('fonts', 'h5_lineheight'); ?>;
            }

            h6 {
                font-family: <?php echo mtwriterGetOption('fonts', 'h6_fontfamily'); ?>, <?php echo mtwriterGetOption('fonts', 'h6_alt_fontfamily'); ?>;
                font-size: <?php echo mtwriterGetOption('fonts', 'h6_fontsize'); ?><?php echo mtwriterGetOption('fonts', 'h6_fontsize_unit'); ?>;
                text-transform: <?php echo mtwriterGetOption('fonts', 'h6_texttransform'); ?>;
                letter-spacing: <?php echo mtwriterGetOption('fonts', 'h6_letterspacing'); ?>px;
                font-weight: <?php echo mtwriterGetOption('fonts', 'h6_fontweight'); ?>;
                line-height: <?php echo mtwriterGetOption('fonts', 'h6_lineheight'); ?>;
            }

            .mt-header .brand-title {
                color: <?php echo mtwriterGetOption('color', 'color_logo_text'); ?>;

                font-family: <?php echo mtwriterGetOption('fonts', 'logo_fontfamily'); ?>, <?php echo mtwriterGetOption('fonts', 'logo_alt_fontfamily'); ?>;
                font-size: <?php echo mtwriterGetOption('fonts', 'logo_fontsize'); ?><?php echo mtwriterGetOption('fonts', 'logo_fontsize_unit'); ?>;
                text-transform: <?php echo mtwriterGetOption('fonts', 'logo_texttransform'); ?>;
                letter-spacing: <?php echo mtwriterGetOption('fonts', 'logo_letterspacing'); ?>px;
                font-weight: <?php echo mtwriterGetOption('fonts', 'logo_fontweight'); ?>;
                line-height: <?php echo mtwriterGetOption('fonts', 'logo_lineheight'); ?>;
            }

            .footer {
                color: <?php echo mtwriterGetOption('color', 'color_copyright'); ?>;

                font-family: <?php echo mtwriterGetOption('fonts', 'copyright_fontfamily'); ?>, <?php echo mtwriterGetOption('fonts', 'copyright_alt_fontfamily'); ?>;
                font-size: <?php echo mtwriterGetOption('fonts', 'copyright_fontsize'); ?><?php echo mtwriterGetOption('fonts', 'copyright_fontsize_unit'); ?>;
                text-transform: <?php echo mtwriterGetOption('fonts', 'copyright_texttransform'); ?>;
                letter-spacing: <?php echo mtwriterGetOption('fonts', 'copyright_letterspacing'); ?>px;
                font-weight: <?php echo mtwriterGetOption('fonts', 'copyright_fontweight'); ?>;
                line-height: <?php echo mtwriterGetOption('fonts', 'copyright_lineheight'); ?>;
            }

            .footer a {
                color: <?php echo mtwriterGetOption('color', 'color_copyright_link'); ?>;
            }

            .footer a:hover {
                color: var(--copyright-hover);
            }

            /* Widget Title */
            .widget-title {
                font-family: <?php echo mtwriterGetOption('fonts', 'widgettitle_fontfamily'); ?>, <?php echo mtwriterGetOption('fonts', 'widgettitle_alt_fontfamily'); ?>;
                font-size: <?php echo mtwriterGetOption('fonts', 'widgettitle_fontsize'); ?><?php echo mtwriterGetOption('fonts', 'widgettitle_fontsize_unit'); ?>;
                text-transform: <?php echo mtwriterGetOption('fonts', 'widgettitle_texttransform'); ?>;
                letter-spacing: <?php echo mtwriterGetOption('fonts', 'widgettitle_letterspacing'); ?>px;
                font-weight: <?php echo mtwriterGetOption('fonts', 'widgettitle_fontweight'); ?>;
                line-height: <?php echo mtwriterGetOption('fonts', 'widgettitle_lineheight'); ?>;
            }

            /* Entry title */
            .entry-post-title {
                font-family: <?php echo mtwriterGetOption('fonts', 'entrytitle_fontfamily'); ?>, <?php echo mtwriterGetOption('fonts', 'entrytitle_alt_fontfamily'); ?>;
                font-size: <?php echo mtwriterGetOption('fonts', 'entrytitle_fontsize'); ?><?php echo mtwriterGetOption('fonts', 'entrytitle_fontsize_unit'); ?>;
                text-transform: <?php echo mtwriterGetOption('fonts', 'entrytitle_texttransform'); ?>;
                letter-spacing: <?php echo mtwriterGetOption('fonts', 'entrytitle_letterspacing'); ?>px;
                font-weight: <?php echo mtwriterGetOption('fonts', 'entrytitle_fontweight'); ?>;
                line-height: <?php echo mtwriterGetOption('fonts', 'entrytitle_lineheight'); ?>;
            }

            /* Single Post Title */
            h2.entry-title {
                font-family: <?php echo mtwriterGetOption('fonts', 'posttitle_fontfamily'); ?>, <?php echo mtwriterGetOption('fonts', 'posttitle_alt_fontfamily'); ?>;
                font-size: <?php echo mtwriterGetOption('fonts', 'posttitle_fontsize'); ?><?php echo mtwriterGetOption('fonts', 'posttitle_fontsize_unit'); ?>;
                text-transform: <?php echo mtwriterGetOption('fonts', 'posttitle_texttransform'); ?>;
                letter-spacing: <?php echo mtwriterGetOption('fonts', 'posttitle_letterspacing'); ?>px;
                font-weight: <?php echo mtwriterGetOption('fonts', 'posttitle_fontweight'); ?>;
                line-height: <?php echo mtwriterGetOption('fonts', 'posttitle_lineheight'); ?>;
            }

            /* Main menu */
            ul#primary-menu li.menu-item {
                font-family: <?php echo mtwriterGetOption('fonts', 'mainmenu_fontfamily'); ?>, <?php echo mtwriterGetOption('fonts', 'mainmenu_alt_fontfamily'); ?>;
                font-size: <?php echo mtwriterGetOption('fonts', 'mainmenu_fontsize'); ?><?php echo mtwriterGetOption('fonts', 'mainmenu_fontsize_unit'); ?>;
                text-transform: <?php echo mtwriterGetOption('fonts', 'mainmenu_texttransform'); ?>;
                letter-spacing: <?php echo mtwriterGetOption('fonts', 'mainmenu_letterspacing'); ?>px;
                font-weight: <?php echo mtwriterGetOption('fonts', 'mainmenu_fontweight'); ?>;
                line-height: <?php echo mtwriterGetOption('fonts', 'mainmenu_lineheight'); ?>;
            }

            /* Sub Menu */
            ul#primary-menu ul.sub-menu li.menu-item {
                font-family: <?php echo mtwriterGetOption('fonts', 'dropdown_fontfamily'); ?>, <?php echo mtwriterGetOption('fonts', 'dropdown_alt_fontfamily'); ?>;
                font-size: <?php echo mtwriterGetOption('fonts', 'dropdown_fontsize'); ?><?php echo mtwriterGetOption('fonts', 'dropdown_fontsize_unit'); ?>;
                text-transform: <?php echo mtwriterGetOption('fonts', 'dropdown_texttransform'); ?>;
                letter-spacing: <?php echo mtwriterGetOption('fonts', 'dropdown_letterspacing'); ?>px;
                font-weight: <?php echo mtwriterGetOption('fonts', 'dropdown_fontweight'); ?>;
                line-height: <?php echo mtwriterGetOption('fonts', 'dropdown_lineheight'); ?>;
            }

            /* Meta Typography */
            .post-meta-list span,
            .category-meta,
            .post-meta-content span {
                font-family: <?php echo mtwriterGetOption('fonts', 'meta_fontfamily'); ?>, <?php echo mtwriterGetOption('fonts', 'meta_alt_fontfamily'); ?>;
                font-size: <?php echo mtwriterGetOption('fonts', 'meta_fontsize'); ?><?php echo mtwriterGetOption('fonts', 'meta_fontsize_unit'); ?>;
                text-transform: <?php echo mtwriterGetOption('fonts', 'meta_texttransform'); ?>;
                letter-spacing: <?php echo mtwriterGetOption('fonts', 'meta_letterspacing'); ?>px;
                font-weight: <?php echo mtwriterGetOption('fonts', 'meta_fontweight'); ?>;
                line-height: <?php echo mtwriterGetOption('fonts', 'meta_lineheight'); ?>;
            }

            /* Navigation Dropdown */
            ul#primary-menu ul.sub-menu li.menu-item {
                background-color: var(--drop-down-bg);
            }

            ul#primary-menu ul.sub-menu li.menu-item a {
                color: var(--drop-down-link-color);
            }

            ul#primary-menu ul.sub-menu li.menu-item.current-menu-item a {
                color: var(--drop-down-active-link-color);
            }

            ul#primary-menu ul.sub-menu li.menu-item a:hover {
                color: var(--drop-down-hover-link-color);
            }

            .mt-header .brand-tagline {
                color: var(--header-text-color);
            }

            .inner-body {
                background-color: <?php echo mtwriterGetOption('color', 'color_boxed_background'); ?>;
            }

            .mt-header,
            .mt-header .main-menu {
                background-color: <?php echo mtwriterGetOption('color', 'color_header_background'); ?>;
            }

            /* Preloader Colors and Size */
            .sk-rotating-plane {
                width: var(--preloader-size);
	            height: var(--preloader-size);
                background-color: var(--preloader-color);
            }
            .sk-fading-circle {
                width: var(--preloader-size);
                height: var(--preloader-size);
            }
            .sk-fading-circle .sk-circle:before {
                background-color: var(--preloader-color);
            }
            .sk-folding-cube .sk-cube:before {
                background-color: var(--preloader-color);
            }
            .sk-folding-cube {
                width: var(--preloader-size);
                height: var(--preloader-size);
            }
            .sk-double-bounce .sk-child {
                background-color: var(--preloader-color);
            }
            .sk-double-bounce {
                width: var(--preloader-size);
                height: var(--preloader-size);
            }
            .sk-wave .sk-rect {
                background-color: var(--preloader-color);
            }
            .sk-wave {
                width: var(--preloader-size);
                height: var(--preloader-size);
            }
            .sk-wandering-cubes .sk-cube {
                background-color: var(--preloader-color);
            }
            .sk-wandering-cubes {
                width: var(--preloader-size);
                height: var(--preloader-size);
            }
            .sk-spinner-pulse {
                background-color: var(--preloader-color);
                width: var(--preloader-size);
	            height: var(--preloader-size);
            }
            .sk-chasing-dots .sk-child {
                background-color: var(--preloader-color);
            }
            .sk-chasing-dots {
                width: var(--preloader-size);
                height: var(--preloader-size);
            }
            .sk-three-bounce .sk-child {
                background-color: var(--preloader-color);
                width: var(--preloader-size);
	            height: var(--preloader-size);
            }
            .sk-circle .sk-child:before {
                background-color: var(--preloader-color);
            }
            .sk-circle {
                width: var(--preloader-size);
                height: var(--preloader-size);
            }
            .sk-cube-grid .sk-cube {
                background-color: var(--preloader-color);
            }
            .sk-cube-grid {
                width: var(--preloader-size);
                height: var(--preloader-size);
            }
            .bouncing-loader>div {
                background: var(--preloader-color);
                width: var(--preloader-size);
	            height: var(--preloader-size);
            }
            .donut {
                border-left-color: var(--preloader-color);
                width: var(--preloader-size);
                height: var(--preloader-size);
            }

            /* Back to top */
            a#backtotop i {
                font-size: var(--backtotop-size);
                color: <?php echo mtwriterGetOption('color', 'backtotop_color'); ?>;
                line-height: var(--backtotop-size);
            }
            a#backtotop {
                width: var(--backtotop-size);
                height: var(--backtotop-size);
                background: <?php echo mtwriterGetOption('color', 'backtotop_bgcolor'); ?>;
                display: none;
            }

            /* Navigation */
            .main-menu .menu > li > a {
                color: var(--link-color);
            }

            .main-menu .menu > li > a:hover {
                color: var(--link-hover-color);
            }

            .main-menu ul#primary-menu li.current-menu-item a,
            .main-menu ul#primary-menu li.current_page_item a {
                color: var(--link-active-color);
            }
            
        </style>
    <?php
}
add_action( 'wp_head', 'mtwriter_customizer_css');

<?php
/**
 * Load TGM Plugin
 */
if( !function_exists('gillion_register_required_plugins') && is_admin() ) :
    if( function_exists('vc_set_as_theme') ) :
        vc_set_as_theme();
    endif;

    require_once ( trailingslashit( get_template_directory() ) . '/inc/plugins/TGM-Plugin-Activation/class-tgm-plugin-activation.php' );
    function gillion_register_required_plugins() {

        tgmpa(array(
            array(
                'name'      => esc_html__( 'Unyson', 'gillion' ),
                'slug'      => 'unyson',
                'required'  => true,
            ),

            array(
                'name'      => esc_html__( 'WPBakery Page Builder (formerly Visual Composer)', 'gillion' ),
                'slug'      => 'js_composer',
                'source'    => 'https://cdn.shufflehound.com/theme-plugins/visual-composer-OL6A44.zip',
                'required'  => true,
                'version'   => '5.7',
            ),

            array(
                'name'      => esc_html__( 'Revolution slider', 'gillion' ),
                'slug'      => 'revslider',
                'source'    => 'https://cdn.shufflehound.com/theme-plugins/slider-revolution-QB4L22.zip',
                'required'  => false,
                'version'   => '5.4.8.3',
            ),

            array(
                'name'      => esc_html__( 'Yellow Pencil Pro: Visual CSS Style Editor', 'jevelin' ),
                'slug'      => 'waspthemes-yellow-pencil',
                'source'    => 'https://cdn.shufflehound.com/theme-plugins/yellow-pencil-AX5N33.zip',
                'required'  => false,
                'version'   => '7.2.1',
            ),

            array(
                'name'      => esc_html__( 'WooCommerce', 'gillion' ),
                'slug'      => 'woocommerce',
                'required'  => false,
            ),

            array(
                'name'      => esc_html__( 'One Click Demo Install (optional)', 'gillion' ),
                'slug'      => 'one-click-demo-import',
                'required'  => false,
            ),

            array(
                'name'      => esc_html__( 'oAuth Twitter Feed for Developers (optional)', 'gillion' ),
                'slug'      => 'oauth-twitter-feed-for-developers',
                'required'  => false,
            ),

            array(
                'name'      => esc_html__( 'WP Instagram Widget (optional)', 'gillion' ),
                'slug'      => 'wp-instagram-widget',
                'required'  => false,
            ),

            array(
                'name'      => esc_html__( 'MailChimp for WordPress (optional)', 'gillion' ),
                'slug'      => 'mailchimp-for-wp',
                'required'  => false,
            ),

            array(
                'name'      => esc_html__( 'Envato Market (optional, helps receive updates to Themes & Plugins from purchased items)', 'gillion' ),
                'slug'      => 'envato-market',
                'source'    => trailingslashit( get_template_directory() ) . '/inc/plugins/envato-market.zip',
                'required'  => false,
                'version'   => '2.0.0',
            ),

        ), array( 'is_automatic' => true ));

    }
    add_action( 'tgmpa_register', 'gillion_register_required_plugins' );
endif;

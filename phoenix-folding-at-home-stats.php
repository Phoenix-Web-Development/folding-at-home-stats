<?php

/*
Plugin Name: Phoenix Folding At Home Stats
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: Contains a bunch of phoenix site specific code.
Author: James Jones
Version: 1.0
Author URI: http://www.phoenixwebdev.com.au/
*/

final class Phoenix_Folding_Home_Stats
{
    protected static $_instance = null;
    private $prefix = 'ph-';
    private $version = '1.0.1';

    public static function instance()
    {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __clone()
    {
        _doing_it_wrong( __FUNCTION__, 'Wrong', '1.0' );
    }

    public function __wakeup()
    {
        _doing_it_wrong( __FUNCTION__, 'Wrong', '1.0' );
    }

    function __construct()
    {
        if ( !defined( 'PHOENIX_FOLDING_PLUGIN_FOLDERNAME' ) )
            define( 'PHOENIX_FOLDING_PLUGIN_FOLDERNAME', '/phoenix-folding-at-home-stats' );
        if ( !defined( 'PHOENIX_FOLDING_PLUGIN_URL' ) )
            define( 'PHOENIX_FOLDING_PLUGIN_URL', plugins_url() . '/phoenix-folding-at-home-stats' );
        if ( !defined( 'PHOENIX_FOLDING_PLUGIN_PATH' ) )
            define( 'PHOENIX_FOLDING_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

        $this->phoenix_includes();
        $this->phoenix_setup_actions();

        $this->shortcode = new Ph_Shortcode();
    }

    function phoenix_setup_actions()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ), 200 );
        add_action( 'widgets_init', array( $this, 'register_the_widget' ) );
    }

    function phoenix_includes()
    {
        //$this->includes('',array('phoenix-functions.php'));
        $this->includes( 'includes/', array(
                'template_functions.php',
                'class_stats.php',
                'class_shortcode.php'
            )
        );

    }

    function register_the_widget()
    {
        $this->includes( 'includes/', array(
            'class_widget.php'
        ) );
        if ( class_exists( 'Ph_Folding_Widget' ) ) {
            register_widget( 'Ph_Folding_Widget' );
        }
    }

    function scripts()
    {
        //wp_enqueue_script('phoenix-main', PHOENIX_PLUGIN_URL . '/assets/js/main.min.js', array('jquery'), false, true);
        if ( !is_admin() ) {
            if ( defined( 'WP_DEBUG' ) && WP_DEBUG )
                $min = '';
            else
                $min = 'min.';
            global $post;
            if ( has_shortcode( $post->post_content, 'phoenix_folding_stats' ) || is_active_widget( false, 'phoenix_folding_widget' ) )
                wp_enqueue_style( 'phoenix-folding', PHOENIX_FOLDING_PLUGIN_URL . '/assets/css/phoenix-folding.' . $min . 'css', array(), $this->version, 'all' );
        }
    }

    function includes( $path, $files )
    {
        foreach ( $files as $file ) {
            include_once( $path . $this->prefix . $file );
        }
    }
}

function ph_folding_class_instance()
{
    return Phoenix_Folding_Home_Stats::instance();

}

ph_folding_class_instance();



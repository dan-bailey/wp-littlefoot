<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    wp_littlefoot
 * @subpackage wp_littlefoot/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    wp_littlefoot
 * @subpackage wp_littlefoot/admin
 * @author     Your Name <email@example.com>
 */
class wp_littlefoot_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $wp_littlefoot    The ID of this plugin.
	 */
	private $wp_littlefoot;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $wp_littlefoot       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $wp_littlefoot, $version ) {

		$this->wp_littlefoot = $wp_littlefoot;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in wp_littlefoot_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The wp_littlefoot_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->wp_littlefoot, plugin_dir_url( __FILE__ ) . 'css/wp-littlefoot-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in wp_littlefoot_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The wp_littlefoot_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->wp_littlefoot, plugin_dir_url( __FILE__ ) . 'js/wp-littlefoot-admin.js', array( 'jquery' ), $this->version, false );

	}

}

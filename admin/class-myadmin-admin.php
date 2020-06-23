<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       www.patrickkongawi.com/blog
 * @since      1.0.0
 *
 * @package    Myadmin
 * @subpackage Myadmin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Myadmin
 * @subpackage Myadmin/admin
 * @author     Patrick Kongawi <pkongawi@gmail.com>
 */
class Myadmin_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
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
		 * defined in Myadmin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Myadmin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/myadmin-admin.css', array(), $this->version, 'all' );

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
		 * defined in Myadmin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Myadmin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/myadmin-admin.js', array( 'jquery' ), $this->version, false );

	}
	

}
	
	function my_admin_menu(){
    
    add_options_page(
        'My admin Plugin',
        'User data',
        'manage_options',
        'user-data',
        'myadmin_user_data_options_page'
        );
    }

    add_action('admin_menu','my_admin_menu');

    function myadmin_user_data_options_page(){
    
    if(!current_user_can('manage_options')){
        wp_die('You do not have enough permission to view this page');
    }
    
    require('partials/myadmin-admin-display.php');
    
    }

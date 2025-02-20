<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://shawnch.in
 * @since      1.0.0
 *
 * @package    My_Test_React_Plugin
 * @subpackage My_Test_React_Plugin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    My_Test_React_Plugin
 * @subpackage My_Test_React_Plugin/admin
 * @author     Sourav <souravthedev@outlook.com>
 */
class My_Test_React_Plugin_Admin {

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
		 * defined in My_Test_React_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The My_Test_React_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// wp_enqueue_style( $this->plugin_name, plugin_dir_url( dirname(__FILE__) ) . 'public/dist/admin/my-test-react-plugin-admin.css', array(), $this->version, 'all' );

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
		 * defined in My_Test_React_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The My_Test_React_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( 
			$this->plugin_name, 
			plugin_dir_url( dirname(__FILE__) ) . 'public/dist/admin/my-test-react-plugin-admin.js', 
			array( 'wp-element' ), 
			$this->version, 
			true 
		);

	}


	public function my_test_react_plugin_admin_menu() {
		add_menu_page(
			'My Test React Plugin',
			'My Test React Plugin',
			'manage_options',
			'my-test-react-plugin',
			array( $this, 'my_test_react_plugin_admin_page' ),
			'dashicons-admin-generic',
			6
		);
	}

	public function my_test_react_plugin_admin_page() {
		include_once plugin_dir_path( __FILE__ ) . 'partials/my-test-react-plugin-admin-display.php';
	}

	public function handle_before_react_app_render() {
		echo '<h4>Before React App Render</h4>';
	}

	public function handle_after_react_app_render() {
		echo '<h4>After React App Render</h4>';
	}
}

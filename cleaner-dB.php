<?php

/*
Plugin Name: Cleaner DB
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Wtyczka czszcząca baze danych z Jsonów Histori po zapisach z Customizacji
Version: 1.0
Author: Maniek
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if(file_exists(dirname(__FILE__) . '/vendor/autoload.php')):
		require_once dirname(__FILE__) . '/vendor/autoload.php';
endif;


class CleanerDB {

    public $plugin;

    public function __construct() {

        $this->plugin = plugin_basename(__FILE__);

    }

	/**
	 * Register
	 */
	public function register() {

		add_action('admin_menu', [$this, 'add_admin_pages']);

		add_action('admin_enqueue_scripts', [$this, 'enqueue']);

		add_filter("plugin_action_links_$this->plugin", [$this, 'settings_link' ]);

	}

	/**
	 * Link tp page Settings cleanerDB
	 */
	public function settings_link($links) {

        $settings_link = '<a href="options-general.php?page=cleaner_db">Settings</a>';
        array_push($links, $settings_link);
        return $links;

    }

	/**
	 * Enqueue Scripts
	 */
	public function enqueue() {

    	// Bootsrap Css
		wp_enqueue_style('bootsrap.css',plugins_url('/css/bootstrap.min.css', __FILE__));

		// Bootstrap Js
		wp_enqueue_script('bootsrap.js',plugins_url('/css/bootstrap.min.js', __FILE__));

		// jQuery
		wp_enqueue_script('jquery',plugins_url('/js/jquery.min.js', __FILE__));

		// Bootstrap Bundle
		wp_enqueue_script('bootsrap.bundle.js',plugins_url('/js/bootstrap.min.js', __FILE__));

		// Bootstrap Js
		wp_enqueue_script('bootsrap.js',plugins_url('/js/bootstrap.bundle.min.js', __FILE__));

	}


	public function activate() {

		if(class_exists('cleanerdb\\actdec\\Activate')):
			$activ = new \cleanerdb\actdec\Activate();
			endif;

	}

	public function deactivate() {

		if(class_exists('cleanerdb\\actdec\\Deactivate')):
			$deactiv = new \cleanerdb\actdec\Deactivate();
			endif;

	}

	public function add_admin_pages() {

		add_menu_page('Cleaner DB', 'Atelier Cleaner DB', 'manage_options', 'cleaner_db', [$this, 'indexAction'], 'dashicons-shield', 112);

	}

	public function indexAction() {

		if(class_exists('cleanerdb\\view\\View')):
			$view = new \cleanerdb\view\View();
			$view->buildAdminHtml();
		endif;

	}

}

if(class_exists('CleanerDB')) {
	$cleanerDB = new CleanerDB();
	$cleanerDB->register();
}

register_activation_hook(__FILE__, [$cleanerDB, 'activate']);

register_deactivation_hook(__FILE__, 'deactivate');

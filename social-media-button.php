<?php
/**!
 * Plugin Name: Social Media Buttons
 * Plugin URI: https://wordpress.org/plugins/social-media-button/
 * Description: A WordPress plugin that displays various social media button at WordPress widgets area.
 * Version: 2.0.0
 * Author: Sayful Islam
 * Author URI: https://sayfulislam.com
 *
 * Text Domain: social-media-button
 *
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! class_exists( 'Social_Media_Button' ) ) {

	class Social_Media_Button {

		/**
		 * Instance of this class.
		 *
		 * @var object
		 */
		protected static $instance = null;

		/**
		 * Return an instance of this class.
		 *
		 * @return object A single instance of this class.
		 */
		public static function init() {
			// If the single instance hasn't been set, set it now.
			if ( null == self::$instance ) {
				self::$instance = new self;
			}

			return self::$instance;
		}

		public function __construct() {
			$this->includes();
		}

		/**
		 * include widget file
		 */
		public function includes() {
			include_once( 'widget-social-media-button.php' );
		}
	}
}

Social_Media_Button::init();

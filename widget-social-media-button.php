<?php

if ( ! defined( 'ABSPATH' ) ) {
	die; // If this file is called directly, abort.
}

class Widget_Social_Media_Button extends WP_Widget {

	/**
	 * Widget_Social_Media_Button constructor.
	 */
	public function __construct() {
		parent::__construct( 'sm_buttons_widget', __( 'Social Media Buttons', 'social-media-button' ),
			array( 'description' => __( 'A widget that displays various social media button at Wordpress widgets area.', 'social-media-button' ), )
		);
	}

	/**
	 * Echoes the widget content.
	 *
	 * @param array $args Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance The settings for the particular instance of the widget.
	 */
	public function widget( $args, $instance ) {

		/* Our variables from the widget settings. */
		$widget_title = apply_filters( 'widget_title', $instance['title'] );

		$fb_url     = $instance['fb_url'];
		$gp_url     = $instance['gp_url'];
		$in_url     = $instance['in_url'];
		$t_url      = $instance['t_url'];
		$y_url      = $instance['y_url'];
		$pin_url    = $instance['pin_url'];
		$git_url    = $instance['git_url'];
		$codepen    = $instance['codepen'];
		$digg       = $instance['digg'];
		$dribbble   = $instance['dribbble'];
		$dropbox    = $instance['dropbox'];
		$flickr     = $instance['flickr'];
		$foursquare = $instance['foursquare'];
		$instagram  = $instance['instagram'];
		$reddit     = $instance['reddit'];
		$vimeo      = $instance['vimeo'];
		$wordpress  = $instance['wordpress'];
		$email      = $instance['email'];

		$icon_color          = $instance['icon_color'];
		$icon_hover_color    = $instance['icon_hover_color'];
		$icon_bg_color       = $instance['icon_bg_color'];
		$icon_hover_bg_color = $instance['icon_hover_bg_color'];

		$widget_id = uniqid();

		//Display Sidebar
		echo $args['before_widget'];

		if ( ! empty( $widget_title ) ) {
			echo $args['before_title'] . $widget_title . $args['after_title'];
		}
		?>
		<style>
			.smb-<?php echo $widget_id; ?> {
				margin: 20px 0;
			}

			.smb-<?php echo $widget_id; ?> a {
				background-color: <?php echo $icon_bg_color; ?>;
				border-radius: 0;
				display: inline-block;
				padding: 5px;
				margin-bottom: 3px;
			}

			.smb-<?php echo $widget_id; ?> a:hover {
				background-color: <?php echo $icon_hover_bg_color; ?>;
				-webkit-transition: all 1s;
				transition: all 1s;
			}

			.smb-<?php echo $widget_id; ?> a:hover svg {
				fill: <?php echo $icon_hover_color; ?>;
				-webkit-transition: all 1s;
				transition: all 1s;
			}

			.smb-<?php echo $widget_id; ?> svg {
				fill: <?php echo $icon_color; ?>;
				vertical-align: middle;
				display: block;
				overflow: hidden;
			}
		</style>
		<div class="smb-<?php echo $widget_id; ?>">
			<?php if ( ! empty( $fb_url ) ): ?>
				<a class="facebook" title="Facebook" target="_blank" href="<?php echo esc_url( $fb_url ) ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 28">
						<path
							d="M15 0.2v4.1h-2.5c-1.9 0-2.3 0.9-2.3 2.3v3h4.6l-0.6 4.6h-4v11.9h-4.8v-11.9h-4v-4.6h4v-3.4c0-4 2.4-6.1 6-6.1 1.7 0 3.1 0.1 3.6 0.2z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $gp_url ) ): ?>
				<a title="Google+" target="_blank" href="<?php echo esc_url( $gp_url ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 36 28">
						<path
							d="M22.5 14.3c0 6.5-4.4 11.2-11 11.2-6.3 0-11.5-5.1-11.5-11.5s5.1-11.5 11.5-11.5c3.1 0 5.7 1.1 7.7 3l-3.1 3c-0.8-0.8-2.3-1.8-4.6-1.8-3.9 0-7.1 3.2-7.1 7.2s3.2 7.2 7.1 7.2c4.5 0 6.2-3.3 6.5-4.9h-6.5v-3.9h10.8c0.1 0.6 0.2 1.2 0.2 1.9zM36 12.4v3.3h-3.3v3.3h-3.3v-3.3h-3.3v-3.3h3.3v-3.3h3.3v3.3h3.3z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $in_url ) ): ?>
				<a title="LinkedIn" target="_blank" href="<?php echo esc_url( $in_url ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 28">
						<path
							d="M5.5 9.8v15.5h-5.2v-15.5h5.2zM5.8 5c0 1.5-1.1 2.7-2.9 2.7v0h0c-1.7 0-2.8-1.2-2.8-2.7 0-1.5 1.2-2.7 2.9-2.7 1.8 0 2.9 1.2 2.9 2.7zM24 16.4v8.9h-5.1v-8.3c0-2.1-0.7-3.5-2.6-3.5-1.4 0-2.3 1-2.6 1.9-0.1 0.3-0.2 0.8-0.2 1.3v8.6h-5.1c0.1-14 0-15.5 0-15.5h5.1v2.3h0c0.7-1.1 1.9-2.6 4.7-2.6 3.4 0 5.9 2.2 5.9 7z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $t_url ) ): ?>
				<a title="Twitter" target="_blank" href="<?php echo esc_url( $t_url ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 26 28">
						<path
							d="M25.3 6.4c-0.7 1-1.5 1.9-2.5 2.6 0 0.2 0 0.4 0 0.7 0 6.7-5.1 14.4-14.4 14.4-2.9 0-5.5-0.8-7.7-2.3 0.4 0 0.8 0.1 1.2 0.1 2.4 0 4.5-0.8 6.3-2.2-2.2 0-4.1-1.5-4.7-3.5 0.3 0 0.6 0.1 1 0.1 0.5 0 0.9-0.1 1.3-0.2-2.3-0.5-4-2.5-4-5v-0.1c0.7 0.4 1.5 0.6 2.3 0.6-1.4-0.9-2.2-2.5-2.2-4.2 0-0.9 0.3-1.8 0.7-2.5 2.5 3.1 6.2 5.1 10.4 5.3-0.1-0.4-0.1-0.8-0.1-1.2 0-2.8 2.3-5 5-5 1.5 0 2.8 0.6 3.7 1.6 1.1-0.2 2.2-0.6 3.2-1.2-0.4 1.2-1.2 2.2-2.2 2.8 1-0.1 2-0.4 2.9-0.8z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $y_url ) ): ?>
				<a title="Youtube" target="_blank" href="<?php echo esc_url( $y_url ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 28">
						<path
							d="M15.2 19.4v3.3c0 0.7-0.2 1-0.6 1-0.2 0-0.5-0.1-0.7-0.3v-4.7c0.2-0.2 0.5-0.3 0.7-0.3 0.4 0 0.6 0.4 0.6 1zM20.5 19.5v0.7h-1.4v-0.7c0-0.7 0.2-1.1 0.7-1.1s0.7 0.4 0.7 1.1zM5.4 16h1.7v-1.5h-4.9v1.5h1.6v8.9h1.6v-8.9zM9.9 24.9h1.4v-7.7h-1.4v5.9c-0.3 0.4-0.6 0.7-0.9 0.7-0.2 0-0.3-0.1-0.3-0.3 0 0 0-0.2 0-0.5v-5.7h-1.4v6.1c0 0.5 0 0.9 0.1 1.1 0.1 0.4 0.5 0.6 0.9 0.6 0.5 0 1-0.3 1.6-1v0.8zM16.6 22.6v-3.1c0-0.7 0-1.2-0.1-1.5-0.2-0.6-0.6-0.9-1.1-0.9-0.5 0-1 0.3-1.5 0.8v-3.4h-1.4v10.4h1.4v-0.7c0.5 0.6 1 0.9 1.5 0.9 0.5 0 0.9-0.3 1.1-0.9 0.1-0.3 0.1-0.8 0.1-1.6zM21.8 22.5v-0.2h-1.4c0 0.6 0 0.9 0 1-0.1 0.4-0.3 0.6-0.6 0.6-0.5 0-0.7-0.4-0.7-1.1v-1.4h2.8v-1.6c0-0.8-0.1-1.4-0.4-1.8-0.4-0.5-1-0.8-1.7-0.8-0.7 0-1.3 0.3-1.7 0.8-0.3 0.4-0.4 1-0.4 1.8v2.7c0 0.8 0.2 1.4 0.5 1.8 0.4 0.5 1 0.8 1.7 0.8s1.3-0.3 1.7-0.8c0.2-0.2 0.3-0.5 0.3-0.8 0-0.1 0-0.5 0-0.9zM12.3 8.2v-3.3c0-0.7-0.2-1.1-0.7-1.1-0.5 0-0.7 0.4-0.7 1.1v3.3c0 0.7 0.2 1.1 0.7 1.1 0.5 0 0.7-0.4 0.7-1.1zM23.6 19.9c0 1.8 0 3.7-0.4 5.5-0.3 1.2-1.3 2.1-2.5 2.3-2.9 0.3-5.8 0.3-8.7 0.3s-5.8 0-8.7-0.3c-1.2-0.1-2.2-1-2.5-2.3-0.4-1.7-0.4-3.7-0.4-5.5v0c0-1.8 0-3.7 0.4-5.5 0.3-1.2 1.3-2.1 2.5-2.3 2.9-0.3 5.8-0.3 8.7-0.3s5.8 0 8.7 0.3c1.2 0.1 2.2 1 2.5 2.3 0.4 1.8 0.4 3.7 0.4 5.5zM8 0h1.6l-1.9 6.2v4.2h-1.6v-4.2c-0.1-0.8-0.5-1.9-1-3.3-0.3-1-0.7-2-1-2.9h1.7l1.1 4.1zM13.8 5.2v2.7c0 0.8-0.1 1.5-0.4 1.8-0.4 0.5-0.9 0.8-1.7 0.8-0.7 0-1.2-0.3-1.6-0.8-0.3-0.4-0.4-1-0.4-1.8v-2.7c0-0.8 0.1-1.4 0.4-1.8 0.4-0.5 0.9-0.8 1.6-0.8 0.7 0 1.3 0.3 1.7 0.8 0.3 0.4 0.4 1 0.4 1.8zM19 2.7v7.8h-1.4v-0.9c-0.6 0.7-1.1 1-1.6 1-0.5 0-0.8-0.2-0.9-0.6-0.1-0.2-0.1-0.6-0.1-1.2v-6.2h1.4v5.7c0 0.3 0 0.5 0 0.5 0 0.2 0.1 0.3 0.3 0.3 0.3 0 0.6-0.2 0.9-0.7v-6h1.4z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $pin_url ) ): ?>
				<a title="Pinterest" target="_blank" href="<?php echo esc_url( $pin_url ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 28">
						<path
							d="M0 9.3c0-5.8 5.3-9.3 10.6-9.3 4.9 0 9.4 3.4 9.4 8.5 0 4.9-2.5 10.3-8 10.3-1.3 0-3-0.7-3.6-1.9-1.2 4.7-1.1 5.4-3.7 9l-0.2 0.1-0.1-0.2c-0.1-1-0.2-2-0.2-2.9 0-3.2 1.5-7.8 2.2-10.9-0.4-0.8-0.5-1.8-0.5-2.6 0-1.6 1.1-3.6 2.9-3.6 1.3 0 2 1 2 2.2 0 2-1.4 3.9-1.4 5.9 0 1.3 1.1 2.3 2.4 2.3 3.6 0 4.7-5.2 4.7-8 0-3.7-2.6-5.7-6.2-5.7-4.1 0-7.3 3-7.3 7.2 0 2 1.2 3 1.2 3.5 0 0.4-0.3 1.8-0.8 1.8-0.1 0-0.2 0-0.3 0-2.2-0.7-3-3.7-3-5.7z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $git_url ) ): ?>
				<a title="GitHub" target="_blank" href="<?php echo esc_url( $git_url ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 28">
						<path
							d="M12 2c6.6 0 12 5.4 12 12 0 5.3-3.4 9.8-8.2 11.4-0.6 0.1-0.8-0.3-0.8-0.6 0-0.4 0-1.7 0-3.3 0-1.1-0.4-1.8-0.8-2.2 2.7-0.3 5.5-1.3 5.5-5.9 0-1.3-0.5-2.4-1.2-3.2 0.1-0.3 0.5-1.5-0.1-3.2-1-0.3-3.3 1.2-3.3 1.2-1-0.3-2-0.4-3-0.4s-2 0.1-3 0.4c0 0-2.3-1.5-3.3-1.2-0.7 1.7-0.2 2.9-0.1 3.2-0.8 0.8-1.2 1.9-1.2 3.2 0 4.6 2.8 5.6 5.5 5.9-0.3 0.3-0.7 0.8-0.8 1.6-0.7 0.3-2.4 0.8-3.5-1-0.7-1.1-1.8-1.2-1.8-1.2-1.2 0-0.1 0.7-0.1 0.7 0.8 0.4 1.3 1.8 1.3 1.8 0.7 2.1 4 1.4 4 1.4 0 1 0 1.9 0 2.2 0 0.3-0.2 0.7-0.8 0.6-4.8-1.6-8.2-6.1-8.2-11.4 0-6.6 5.4-12 12-12zM4.5 19.2c0-0.1 0-0.1-0.1-0.2-0.1 0-0.2 0-0.2 0 0 0.1 0 0.1 0.1 0.2 0.1 0 0.2 0 0.2 0zM5 19.8c0.1 0 0-0.2 0-0.2-0.1-0.1-0.2-0.1-0.2 0-0.1 0 0 0.2 0 0.3 0.1 0.1 0.2 0.1 0.3 0zM5.5 20.5c0.1-0.1 0.1-0.2 0-0.3-0.1-0.1-0.2-0.2-0.3-0.1-0.1 0-0.1 0.2 0 0.3s0.2 0.2 0.3 0.1zM6.2 21.1c0.1-0.1 0-0.2-0.1-0.3-0.1-0.1-0.2-0.1-0.3 0-0.1 0.1 0 0.2 0.1 0.3 0.1 0.1 0.3 0.1 0.3 0zM7 21.5c0-0.1-0.1-0.2-0.2-0.2-0.1 0-0.3 0-0.3 0.1s0.1 0.2 0.2 0.2c0.1 0 0.3 0 0.3-0.1zM8 21.6c0-0.1-0.1-0.2-0.3-0.2-0.1 0-0.2 0.1-0.2 0.2 0 0.1 0.1 0.2 0.3 0.2 0.1 0 0.3-0.1 0.3-0.2zM8.9 21.4c0-0.1-0.1-0.2-0.3-0.1-0.1 0-0.2 0.1-0.2 0.2 0 0.1 0.1 0.2 0.3 0.1s0.2-0.1 0.2-0.2z"/>
					</svg>
				</a>
			<?php endif; ?>
			<!-- New Options-->
			<?php if ( ! empty( $codepen ) ): ?>
				<a title="Codepen" target="_blank" href="<?php echo esc_url( $codepen ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 28 28">
						<path
							d="M3.4 18.3l9.4 6.3v-5.6l-5.2-3.5zM2.4 16l3-2-3-2v4zM15.2 24.5l9.4-6.3-4.2-2.8-5.2 3.5v5.6zM14 16.8l4.3-2.8-4.2-2.8-4.2 2.8zM7.6 12.5l5.2-3.5v-5.6l-9.4 6.3zM22.6 14l3 2v-4zM20.4 12.5l4.2-2.8-9.4-6.3v5.6zM28 9.7v8.5c0 0.4-0.2 0.8-0.5 1l-12.8 8.5c-0.2 0.1-0.4 0.2-0.7 0.2s-0.5-0.1-0.7-0.2l-12.8-8.5c-0.3-0.2-0.5-0.6-0.5-1v-8.5c0-0.4 0.2-0.8 0.5-1l12.8-8.5c0.2-0.1 0.4-0.2 0.7-0.2s0.5 0.1 0.7 0.2l12.8 8.5c0.3 0.2 0.5 0.6 0.5 1z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $digg ) ): ?>
				<a title="Digg" target="_blank" href="<?php echo esc_url( $digg ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 28">
						<path
							d="M5.1 4.4h3.2v15.4h-8.3v-10.9h5.1v-4.5zM5.1 17.2v-5.8h-1.9v5.8h1.9zM9.6 8.9v10.9h3.2v-10.9h-3.2zM9.6 4.4v3.2h3.2v-3.2h-3.2zM14.1 8.9h8.3v14.7h-8.3v-2.5h5.1v-1.3h-5.1v-10.9zM19.2 17.2v-5.8h-1.9v5.8h1.9zM23.7 8.9h8.3v14.7h-8.3v-2.5h5.1v-1.3h-5.1v-10.9zM28.8 17.2v-5.8h-1.9v5.8h1.9z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $dribbble ) ): ?>
				<a title="Dribbble" target="_blank" href="<?php echo esc_url( $dribbble ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 28">
						<path
							d="M16 23.4c-0.2-0.9-0.7-4-2.2-7.8 0 0 0 0-0.1 0 0 0-6.1 2.1-8 6.4-0.1-0.1-0.2-0.2-0.2-0.2 1.8 1.5 4 2.3 6.5 2.3 1.4 0 2.8-0.3 4-0.8zM13.1 14c-0.2-0.6-0.5-1.2-0.8-1.7-5.3 1.6-10.3 1.5-10.5 1.5 0 0.1 0 0.2 0 0.3 0 2.6 1 5 2.6 6.8v0c2.8-5 8.3-6.8 8.3-6.8 0.1 0 0.3-0.1 0.4-0.1zM11.4 10.6c-1.8-3.2-3.7-5.7-3.8-5.9-2.9 1.3-5 4-5.7 7.2 0.3 0 4.5 0 9.5-1.2zM22.1 15.6c-0.2-0.1-3.1-1-6.4-0.5 1.3 3.7 1.9 6.7 2 7.3 2.3-1.5 3.9-4 4.4-6.9zM9.5 4c0 0 0 0 0 0 0 0 0 0 0 0zM18.8 6.3c-1.8-1.6-4.2-2.6-6.8-2.6-0.8 0-1.6 0.1-2.4 0.3 0.2 0.2 2.1 2.8 3.8 6 3.9-1.4 5.3-3.7 5.3-3.7zM22.3 13.9c0-2.4-0.9-4.7-2.3-6.4 0 0-1.7 2.4-5.7 4.1 0.2 0.5 0.5 1 0.7 1.5 0.1 0.2 0.1 0.4 0.2 0.5 3.5-0.5 7 0.3 7.1 0.3zM24 14c0 6.6-5.4 12-12 12s-12-5.4-12-12 5.4-12 12-12 12 5.4 12 12z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $dropbox ) ): ?>
				<a title="Dropbox" target="_blank" href="<?php echo esc_url( $dropbox ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 28 28">
						<path
							d="M6.3 11l7.7 4.8-5.3 4.5-7.7-5zM21.7 19.7v1.7l-7.7 4.6v0l0 0 0 0v0l-7.6-4.6v-1.7l2.3 1.5 5.3-4.4v0l0 0 0 0v0l5.4 4.4zM8.7 1.8l5.3 4.5-7.7 4.8-5.3-4.2zM21.7 11l5.3 4.2-7.6 5-5.4-4.5zM19.4 1.8l7.6 5-5.3 4.2-7.7-4.7z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $flickr ) ): ?>
				<a title="Flickr" target="_blank" href="<?php echo esc_url( $flickr ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 28">
						<path
							d="M19.5 2c2.5 0 4.5 2 4.5 4.5v15c0 2.5-2 4.5-4.5 4.5h-15c-2.5 0-4.5-2-4.5-4.5v-15c0-2.5 2-4.5 4.5-4.5h15zM10.9 14c0-1.8-1.5-3.3-3.3-3.3s-3.3 1.5-3.3 3.3 1.5 3.3 3.3 3.3 3.3-1.5 3.3-3.3zM19.7 14c0-1.8-1.5-3.3-3.3-3.3s-3.3 1.5-3.3 3.3 1.5 3.3 3.3 3.3 3.3-1.5 3.3-3.3z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $foursquare ) ): ?>
				<a title="Foursquare" target="_blank" href="<?php echo esc_url( $foursquare ) ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 28">
						<path
							d="M15.6 6.8l0.6-3c0.1-0.5-0.3-0.9-0.7-0.9h-11.1c-0.5 0-0.8 0.5-0.8 0.8v17.2c0 0 0 0.1 0.1 0 4.1-4.9 4.5-5.5 4.5-5.5 0.5-0.5 0.7-0.6 1.3-0.6h3.7c0.5 0 0.8-0.4 0.9-0.7s0.5-2.5 0.6-3-0.3-0.9-0.7-0.9h-4.6c-0.6 0-1-0.4-1-1v-0.7c0-0.6 0.4-1 1-1h5.4c0.4 0 0.8-0.3 0.9-0.7zM19.2 3.3c-0.6 2.8-2.3 11.7-2.5 12.3-0.2 0.7-0.5 2-2.2 2h-4.2c-0.2 0-0.2 0-0.3 0.2 0 0-0.1 0.1-6.7 7.7-0.5 0.6-1.4 0.5-1.7 0.4s-0.9-0.5-0.9-1.5v-22c0-0.9 0.6-2.3 2.5-2.3h13.9c2 0 2.6 1.2 2.1 3.3zM19.2 3.3l-2.5 12.3c0.2-0.6 1.9-9.5 2.5-12.3z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $instagram ) ): ?>
				<a title="Instagram" target="_blank" href="<?php echo esc_url( $instagram ) ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 28">
						<path
							d="M16 14c0-2.2-1.8-4-4-4s-4 1.8-4 4 1.8 4 4 4 4-1.8 4-4zM18.2 14c0 3.4-2.7 6.2-6.2 6.2s-6.2-2.7-6.2-6.2 2.8-6.2 6.2-6.2 6.2 2.8 6.2 6.2zM19.8 7.6c0 0.8-0.6 1.4-1.4 1.4s-1.4-0.6-1.4-1.4 0.6-1.4 1.4-1.4 1.4 0.6 1.4 1.4zM12 4.2c-1.7 0-5.5-0.1-7.1 0.5-0.5 0.2-1 0.5-1.4 0.9s-0.7 0.8-0.9 1.4c-0.6 1.6-0.5 5.3-0.5 7.1s-0.1 5.5 0.5 7.1c0.2 0.5 0.5 1 0.9 1.4s0.8 0.7 1.4 0.9c1.6 0.6 5.3 0.5 7.1 0.5s5.5 0.1 7.1-0.5c0.5-0.2 1-0.5 1.4-0.9s0.7-0.8 0.9-1.4c0.6-1.6 0.5-5.3 0.5-7.1s0.1-5.5-0.5-7.1c-0.2-0.5-0.5-1-0.9-1.4s-0.8-0.7-1.4-0.9c-1.6-0.6-5.3-0.5-7.1-0.5zM24 14c0 1.7 0 3.3-0.1 5-0.1 1.9-0.5 3.6-1.9 5s-3.1 1.8-5 1.9c-1.7 0.1-3.3 0.1-5 0.1s-3.3 0-5-0.1c-1.9-0.1-3.6-0.5-5-1.9s-1.8-3.1-1.9-5c-0.1-1.7-0.1-3.3-0.1-5s0-3.3 0.1-5c0.1-1.9 0.5-3.6 1.9-5s3.1-1.8 5-1.9c1.7-0.1 3.3-0.1 5-0.1s3.3 0 5 0.1c1.9 0.1 3.6 0.5 5 1.9s1.8 3.1 1.9 5c0.1 1.7 0.1 3.3 0.1 5z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $reddit ) ): ?>
				<a title="Reddit" target="_blank" href="<?php echo esc_url( $reddit ) ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 28 28">
						<path
							d="M28 13.2c0 1.2-0.7 2.3-1.7 2.8 0.1 0.5 0.2 1 0.2 1.5 0 4.9-5.6 8.9-12.5 8.9-6.9 0-12.4-4-12.4-8.9 0-0.5 0.1-1 0.2-1.5-1-0.5-1.8-1.6-1.8-2.8 0-1.7 1.4-3.1 3.1-3.1 0.9 0 1.7 0.4 2.3 1 2.1-1.5 4.9-2.4 8-2.5l1.8-8.1c0.1-0.3 0.4-0.5 0.6-0.4l5.8 1.3c0.4-0.7 1.2-1.3 2.1-1.3 1.3 0 2.3 1 2.3 2.3 0 1.3-1 2.3-2.3 2.3-1.3 0-2.3-1-2.3-2.3l-5.2-1.2-1.6 7.4c3.1 0.1 6 1 8.1 2.5 0.6-0.6 1.4-1 2.2-1 1.7 0 3.1 1.4 3.1 3.1zM6.5 16.3c0 1.3 1 2.3 2.3 2.3 1.3 0 2.3-1 2.3-2.3 0-1.3-1-2.3-2.3-2.3-1.3 0-2.3 1-2.3 2.3zM19.2 21.9c0.2-0.2 0.2-0.6 0-0.8-0.2-0.2-0.6-0.2-0.8 0-0.9 1-3 1.3-4.4 1.3s-3.5-0.3-4.4-1.3c-0.2-0.2-0.6-0.2-0.8 0-0.2 0.2-0.2 0.6 0 0.8 1.5 1.5 4.3 1.6 5.2 1.6s3.7-0.1 5.2-1.6zM19.1 18.7c1.3 0 2.3-1 2.3-2.3 0-1.3-1-2.3-2.3-2.3-1.3 0-2.3 1-2.3 2.3 0 1.3 1 2.3 2.3 2.3z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $vimeo ) ): ?>
				<a title="Vimeo" target="_blank" href="<?php echo esc_url( $vimeo ) ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 28 28">
						<path
							d="M26.7 8.1c-0.1 2.5-1.8 5.9-5.2 10.2-3.5 4.5-6.4 6.7-8.8 6.7-1.5 0-2.7-1.4-3.7-4.1-0.7-2.5-1.4-5-2.1-7.5-0.7-2.7-1.6-4.1-2.5-4.1-0.2 0-0.8 0.4-2 1.2l-1.2-1.5c1.3-1.1 2.5-2.2 3.7-3.3 1.7-1.5 2.9-2.2 3.8-2.3 2-0.2 3.2 1.2 3.7 4 0.5 3.1 0.8 5.1 1 5.8 0.6 2.6 1.2 3.9 1.9 3.9 0.5 0 1.3-0.8 2.4-2.5 1.1-1.7 1.6-3 1.7-3.8 0.1-1.5-0.4-2.2-1.7-2.2-0.6 0-1.2 0.1-1.9 0.4 1.3-4.1 3.6-6.1 7.2-6 2.6 0.1 3.8 1.8 3.7 5.1z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $wordpress ) ): ?>
				<a title="WordPress" target="_blank" href="<?php echo esc_url( $wordpress ) ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 28 28">
						<path
							d="M2 14c0-1.7 0.4-3.4 1-4.9l5.7 15.7c-4-2-6.8-6.1-6.8-10.8zM22.1 13.4c0 1-0.4 2.2-0.9 3.9l-1.2 4-4.3-12.9s0.7 0 1.4-0.1c0.6-0.1 0.6-1-0.1-1-2 0.1-3.2 0.2-3.2 0.2s-1.2 0-3.2-0.2c-0.7 0-0.7 0.9-0.1 1 0.6 0.1 1.3 0.1 1.3 0.1l1.9 5.1-2.6 7.9-4.4-13s0.7 0 1.4-0.1c0.6-0.1 0.6-1-0.1-1-1.9 0.1-3.2 0.2-3.2 0.2-0.2 0-0.5 0-0.8 0 2.1-3.3 5.8-5.4 10-5.4 3.1 0 6 1.2 8.1 3.2h-0.2c-1.2 0-2 1-2 2.1 0 1 0.6 1.8 1.2 2.8 0.5 0.8 1 1.8 1 3.3zM14.2 15l3.7 10.1c0 0.1 0 0.1 0.1 0.2-1.2 0.4-2.6 0.7-4 0.7-1.2 0-2.3-0.2-3.4-0.5zM24.5 8.2c0.9 1.7 1.5 3.7 1.5 5.8 0 4.4-2.4 8.3-6 10.4l3.7-10.6c0.6-1.7 0.9-3.1 0.9-4.3 0-0.4 0-0.8-0.1-1.2zM14 0c7.7 0 14 6.3 14 14s-6.3 14-14 14-14-6.3-14-14 6.3-14 14-14zM14 27.4c7.4 0 13.4-6 13.4-13.4s-6-13.4-13.4-13.4-13.4 6-13.4 13.4 6 13.4 13.4 13.4z"/>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $email ) ): ?>
				<a href="mailto:<?php echo $email ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 28 28">
						<path
							d="M26 23.5v-12c-0.3 0.4-0.7 0.7-1.1 1-2.2 1.7-4.5 3.5-6.7 5.3-1.2 1-2.6 2.2-4.2 2.2h0c-1.6 0-3.1-1.2-4.2-2.2-2.2-1.8-4.4-3.6-6.7-5.3-0.4-0.3-0.7-0.7-1.1-1v12c0 0.3 0.2 0.5 0.5 0.5h23c0.3 0 0.5-0.2 0.5-0.5zM26 7.1c0-0.4 0.1-1.1-0.5-1.1h-23c-0.3 0-0.5 0.2-0.5 0.5 0 1.8 0.9 3.3 2.3 4.4 2.1 1.6 4.2 3.3 6.3 5 0.8 0.7 2.3 2.1 3.4 2.1h0c1.1 0 2.6-1.4 3.4-2.1 2.1-1.7 4.2-3.3 6.3-5 1-0.8 2.3-2.5 2.3-3.9zM28 6.5v17c0 1.4-1.1 2.5-2.5 2.5h-23c-1.4 0-2.5-1.1-2.5-2.5v-17c0-1.4 1.1-2.5 2.5-2.5h23c1.4 0 2.5 1.1 2.5 2.5z"/>
					</svg>
				</a>
			<?php endif; ?>
		</div>
		<?php
		echo $args['after_widget'];
	}

	/**
	 * Updates the instance of a widget.
	 *
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget::form().
	 * @param array $old_instance Old settings for this instance.
	 *
	 * @return array Settings to save or bool false to cancel saving.
	 */
	public function update( $new_instance, $old_instance ) {
		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$old_instance['title'] = strip_tags( $new_instance['title'] );

		$old_instance['fb_url']  = esc_url_raw( $new_instance['fb_url'] );
		$old_instance['gp_url']  = esc_url_raw( $new_instance['gp_url'] );
		$old_instance['in_url']  = esc_url_raw( $new_instance['in_url'] );
		$old_instance['t_url']   = esc_url_raw( $new_instance['t_url'] );
		$old_instance['y_url']   = esc_url_raw( $new_instance['y_url'] );
		$old_instance['pin_url'] = esc_url_raw( $new_instance['pin_url'] );
		$old_instance['git_url'] = esc_url_raw( $new_instance['git_url'] );

		$old_instance['codepen']    = esc_url_raw( $new_instance['codepen'] );
		$old_instance['digg']       = esc_url_raw( $new_instance['digg'] );
		$old_instance['dribbble']   = esc_url_raw( $new_instance['dribbble'] );
		$old_instance['dropbox']    = esc_url_raw( $new_instance['dropbox'] );
		$old_instance['flickr']     = esc_url_raw( $new_instance['flickr'] );
		$old_instance['foursquare'] = esc_url_raw( $new_instance['foursquare'] );
		$old_instance['instagram']  = esc_url_raw( $new_instance['instagram'] );
		$old_instance['reddit']     = esc_url_raw( $new_instance['reddit'] );
		$old_instance['vimeo']      = esc_url_raw( $new_instance['vimeo'] );
		$old_instance['wordpress']  = esc_url_raw( $new_instance['wordpress'] );

		$old_instance['email'] = sanitize_email( $new_instance['email'] );

		$old_instance['icon_color']          = sanitize_text_field( $new_instance['icon_color'] );
		$old_instance['icon_hover_color']    = sanitize_text_field( $new_instance['icon_hover_color'] );
		$old_instance['icon_bg_color']       = sanitize_text_field( $new_instance['icon_bg_color'] );
		$old_instance['icon_hover_bg_color'] = sanitize_text_field( $new_instance['icon_hover_bg_color'] );

		return $old_instance;
	}

	/**
	 * Outputs the settings update form.
	 *
	 * @param array $instance Current settings.
	 *
	 * @return string
	 */
	public function form( $instance ) {
		// Output admin widget options form	    
		/* Set up some default widget settings. */
		$defaults = array(
			'title'   => '',
			'fb_url'  => '',
			'gp_url'  => '',
			'in_url'  => '',
			't_url'   => '',
			'y_url'   => '',
			'pin_url' => '',
			'git_url' => '',

			'codepen'    => '',
			'digg'       => '',
			'dribbble'   => '',
			'dropbox'    => '',
			'flickr'     => '',
			'foursquare' => '',
			'instagram'  => '',
			'reddit'     => '',
			'vimeo'      => '',
			'wordpress'  => '',
			'email'      => '',

			'icon_color'          => '#000000',
			'icon_hover_color'    => '#dddddd',
			'icon_bg_color'       => '#00fd00',
			'icon_hover_bg_color' => '#ff0000',
		);

		$instance = wp_parse_args( (array) $instance, $defaults );

		$fields = array(
			'title'      => array(
				'label' => __( 'Title:', 'social-media-button' ),
				'value' => $instance['title'],
			),
			'fb_url'     => array(
				'label'       => __( 'Facebook', 'social-media-button' ),
				'value'       => $instance['fb_url'],
				'placeholder' => 'https://facebook.com/name',
			),
			'gp_url'     => array(
				'label'       => __( 'Google Plus', 'social-media-button' ),
				'value'       => $instance['gp_url'],
				'placeholder' => 'https://plus.google.com/+user_id',
			),
			'in_url'     => array(
				'label'       => __( 'LinkedIn', 'social-media-button' ),
				'value'       => $instance['in_url'],
				'placeholder' => 'https://www.linkedin.com/in/user',
			),
			't_url'      => array(
				'label'       => __( 'Twitter', 'social-media-button' ),
				'value'       => $instance['t_url'],
				'placeholder' => 'https://twitter.com/username',
			),
			'y_url'      => array(
				'label'       => __( 'Youtube', 'social-media-button' ),
				'value'       => $instance['y_url'],
				'placeholder' => 'https://www.youtube.com/user/username',
			),
			'pin_url'    => array(
				'label'       => __( 'Pinterest', 'social-media-button' ),
				'value'       => $instance['pin_url'],
				'placeholder' => 'https://www.pinterest.com/username',
			),
			'git_url'    => array(
				'label'       => __( 'GitHub', 'social-media-button' ),
				'value'       => $instance['git_url'],
				'placeholder' => 'https://github.com/username',
			),
			'codepen'    => array(
				'label'       => __( 'Codepen', 'social-media-button' ),
				'value'       => $instance['codepen'],
				'placeholder' => 'https://codepen.io/username',
			),
			'digg'       => array(
				'label' => __( 'Digg', 'social-media-button' ),
				'value' => $instance['digg'],
			),
			'dropbox'    => array(
				'label' => __( 'Dropbox', 'social-media-button' ),
				'value' => $instance['dropbox'],
			),
			'dribbble'   => array(
				'label'       => __( 'Dribbble', 'social-media-button' ),
				'value'       => $instance['dribbble'],
				'placeholder' => 'https://dribbble.com/username',
			),
			'flickr'     => array(
				'label'       => __( 'Flickr', 'social-media-button' ),
				'value'       => $instance['flickr'],
				'placeholder' => 'https://www.flickr.com/photos/username',
			),
			'foursquare' => array(
				'label'       => __( 'Foursquare', 'social-media-button' ),
				'value'       => $instance['foursquare'],
				'placeholder' => 'https://foursquare.com/username',
			),
			'instagram'  => array(
				'label'       => __( 'Instagram', 'social-media-button' ),
				'value'       => $instance['instagram'],
				'placeholder' => 'https://instagram.com/username',
			),
			'vimeo'      => array(
				'label'       => __( 'Vimeo', 'social-media-button' ),
				'value'       => $instance['vimeo'],
				'placeholder' => 'https://vimeo.com/username',
			),
			'reddit'     => array(
				'label' => __( 'Reddit', 'social-media-button' ),
				'value' => $instance['reddit'],
			),
			'wordpress'  => array(
				'label'       => __( 'WordPress', 'social-media-button' ),
				'value'       => $instance['wordpress'],
				'placeholder' => 'https://profiles.wordpress.org/username',
			),
			'email'      => array(
				'label'       => __( 'Email', 'social-media-button' ),
				'value'       => $instance['email'],
				'placeholder' => 'mail@example.com',
			),
		);

		foreach ( $fields as $field_id => $field ) {
			echo $this->build_field( $field_id, $field );
		}
		?>
		<!-- Show Icon Color: Checkbox -->
		<p>
			<input type="text" class="icon_color" id="<?php echo $this->get_field_id( 'icon_color' ); ?>"
			       name="<?php echo $this->get_field_name( 'icon_color' ); ?>"
			       value="<?php echo $instance['icon_color']; ?>" data-default-color="#000000">
			<label
				for="<?php echo $this->get_field_id( 'icon_color' ); ?>"><?php _e( 'Icon Color', 'smbuttons' ) ?></label>
		</p>
		<!-- Show Icon Background Color: Checkbox -->
		<p>
			<input type="text" class="icon_bg_color" id="<?php echo $this->get_field_id( 'icon_bg_color' ); ?>"
			       name="<?php echo $this->get_field_name( 'icon_bg_color' ); ?>"
			       value="<?php echo $instance['icon_bg_color']; ?>" data-default-color="#00fd00">
			<label
				for="<?php echo $this->get_field_id( 'icon_bg_color' ); ?>"><?php _e( 'Icon Background Color', 'smbuttons' ) ?></label>
		</p>
		<!-- Show Icon Color: Checkbox -->
		<p>
			<input type="text" class="icon_hover_color"
			       id="<?php echo $this->get_field_id( 'icon_hover_color' ); ?>"
			       name="<?php echo $this->get_field_name( 'icon_hover_color' ); ?>"
			       value="<?php echo $instance['icon_hover_color']; ?>" data-default-color="#dddddd">
			<label
				for="<?php echo $this->get_field_id( 'icon_hover_color' ); ?>"><?php _e( 'Icon Color on Hover', 'smbuttons' ) ?></label>
		</p>
		<!-- Show Icon Background Color: Checkbox -->
		<p>
			<input type="text" class="icon_hover_bg_color"
			       id="<?php echo $this->get_field_id( 'icon_hover_bg_color' ); ?>"
			       name="<?php echo $this->get_field_name( 'icon_hover_bg_color' ); ?>"
			       value="<?php echo $instance['icon_hover_bg_color']; ?>" data-default-color="#ff0000">
			<label
				for="<?php echo $this->get_field_id( 'icon_hover_bg_color' ); ?>"><?php _e( 'Icon Background Color on Hover', 'smbuttons' ) ?></label>
		</p>
		<script type="text/javascript">
			jQuery(document).ready(function ($) {
				$('.icon_color').wpColorPicker();
				$('.icon_bg_color').wpColorPicker();
				$('.icon_hover_color').wpColorPicker();
				$('.icon_hover_bg_color').wpColorPicker();
			});
		</script>
		<?php
	}

	/**
	 * Build form field
	 *
	 * @param string $field_id
	 * @param array $args
	 *
	 * @return string
	 */
	public function build_field( $field_id, $args = array() ) {
		$args = wp_parse_args( $args, array(
			'label'       => '',
			'value'       => '',
			'type'        => 'text',
			'class'       => 'widefat',
			'placeholder' => '',
		) );

		$field_id   = $this->get_field_id( $field_id );
		$field_name = $this->get_field_name( $field_id );

		$html = '<p>';
		$html .= '<label for="' . $field_id . '">' . $args['label'] . '</label><br>';
		$html .= '<input type="' . $args['type'] . '" class="' . $args['class'] . '" id="' . $field_id . '" name="' . $field_name . '" value="' . $args['value'] . '" placeholder="' . $args['placeholder'] . '"/>';
		$html .= '</p>';

		return $html;
	}

	/**
	 * Register current class as widget
	 */
	public static function register() {
		register_widget( __CLASS__ );
	}
}

add_action( 'widgets_init', array( 'Widget_Social_Media_Button', 'register' ) );

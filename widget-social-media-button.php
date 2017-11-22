<?php

class Social_Media_Button_Widget extends WP_Widget {

	/**
	 * Social_Media_Button_Widget constructor.
	 */
	public function __construct() {
		parent::__construct(
			'sm_buttons_widget',
			__( 'Social Media Buttons', 'social-media-button' ),
			array( 'description' => __( 'displays social media buttons.', 'social-media-button' ), )
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
		$widget_title = isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';

		$fb_url     = isset( $instance['fb_url'] ) ? esc_url( $instance['fb_url'] ) : '';
		$gp_url     = isset( $instance['gp_url'] ) ? esc_url( $instance['gp_url'] ) : '';
		$in_url     = isset( $instance['in_url'] ) ? esc_url( $instance['in_url'] ) : '';
		$t_url      = isset( $instance['t_url'] ) ? esc_url( $instance['t_url'] ) : '';
		$y_url      = isset( $instance['y_url'] ) ? esc_url( $instance['y_url'] ) : '';
		$pin_url    = isset( $instance['pin_url'] ) ? esc_url( $instance['pin_url'] ) : '';
		$git_url    = isset( $instance['git_url'] ) ? esc_url( $instance['git_url'] ) : '';
		$codepen    = isset( $instance['codepen'] ) ? esc_url( $instance['codepen'] ) : '';
		$digg       = isset( $instance['digg'] ) ? esc_url( $instance['digg'] ) : '';
		$dribbble   = isset( $instance['dribbble'] ) ? esc_url( $instance['dribbble'] ) : '';
		$flickr     = isset( $instance['flickr'] ) ? esc_url( $instance['flickr'] ) : '';
		$foursquare = isset( $instance['foursquare'] ) ? esc_url( $instance['foursquare'] ) : '';
		$instagram  = isset( $instance['instagram'] ) ? esc_url( $instance['instagram'] ) : '';
		$reddit     = isset( $instance['reddit'] ) ? esc_url( $instance['reddit'] ) : '';
		$vimeo      = isset( $instance['vimeo'] ) ? esc_url( $instance['vimeo'] ) : '';
		$wordpress  = isset( $instance['wordpress'] ) ? esc_url( $instance['wordpress'] ) : '';
		$email      = isset( $instance['email'] ) ? sanitize_email( $instance['email'] ) : '';
		$xing       = isset( $instance['xing'] ) ? esc_url( $instance['xing'] ) : '';

		$widget_id = uniqid();

		//Display Sidebar
		echo $args['before_widget'];

		if ( ! empty( $widget_title ) ) {
			echo $args['before_title'] . $widget_title . $args['after_title'];
		}
		?>
        <style type="text/css">
            .smb-<?php echo $widget_id; ?> {
                margin: 20px 0;
            }

            .smb-<?php echo $widget_id; ?> a {
                border-radius: 0;
                display: inline-block;
                padding: 5px;
                margin: 0;
                width: 42px;
                height: 42px;
            }
        </style>
        <div class="smb-<?php echo $widget_id; ?>">
			<?php if ( ! empty( $fb_url ) ): ?>
                <a class="facebook" title="Facebook" target="_blank" href="<?php echo $fb_url ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                        <path fill="#3b5998"
                              d="M45.351 0h-42.702c-1.464 0-2.649 1.185-2.649 2.649v42.702c0 1.464 1.185 2.649 2.649 2.649h22.989v-18.588h-6.258v-7.242h6.258v-5.349c0-6.198 3.786-9.57 9.318-9.57 2.649 0 4.926 0.192 5.589 0.282v6.48h-3.84c-3 0-3.585 1.44-3.585 3.54v4.62h7.17l-0.93 7.26h-6.24v18.567h12.231c1.464 0 2.649-1.185 2.649-2.649v-42.702c0-1.464-1.185-2.649-2.649-2.649z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $t_url ) ): ?>
                <a title="Twitter" target="_blank" href="<?php echo $t_url; ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                        <path fill="#1da1f2"
                              d="M48 9.114c-1.77 0.78-3.66 1.311-5.655 1.551 2.031-1.221 3.594-3.15 4.329-5.448-1.902 1.11-4.011 1.92-6.255 2.37-1.794-1.92-4.35-3.12-7.188-3.12-5.436 0-9.846 4.41-9.846 9.84 0 0.78 0.090 1.53 0.255 2.25-8.184-0.39-15.441-4.32-20.298-10.26-0.852 1.443-1.332 3.123-1.332 4.953 0 3.42 1.74 6.429 4.38 8.196-1.614-0.051-3.135-0.495-4.461-1.23v0.12c0 4.77 3.39 8.754 7.899 9.66-0.828 0.222-1.698 0.342-2.595 0.342-0.63 0-1.23-0.060-1.83-0.174 1.26 3.912 4.89 6.759 9.21 6.84-3.36 2.64-7.62 4.212-12.21 4.212-0.78 0-1.56-0.045-2.34-0.135 4.38 2.79 9.54 4.422 15.12 4.422 18.12 0 28.020-15 28.020-27.99 0-0.42 0-0.84-0.030-1.26 1.92-1.38 3.6-3.12 4.92-5.1z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $gp_url ) ): ?>
                <a title="Google+" target="_blank" href="<?php echo $gp_url; ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                        <path fill="#dc4e41"
                              d="M15.27 21.819v5.235h8.67c-0.348 2.25-2.619 6.591-8.661 6.591-5.211 0-9.465-4.32-9.465-9.645s4.245-9.645 9.456-9.645c2.97 0 4.956 1.266 6.090 2.358l4.146-3.99c-2.661-2.49-6.111-3.99-10.23-3.99-8.451-0.003-15.276 6.837-15.276 15.267s6.828 15.27 15.27 15.27c8.82 0 14.664-6.195 14.664-14.922 0-1.002-0.108-1.77-0.24-2.529h-14.424zM48 21.819h-4.365v-4.365h-4.365v4.365h-4.362v4.362h4.365v4.365h4.38v-4.365h4.347z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $in_url ) ): ?>
                <a title="LinkedIn" target="_blank" href="<?php echo $in_url; ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                        <path fill="#0077b5"
                              d="M40.896 40.905h-7.11v-11.139c0-2.658-0.054-6.075-3.702-6.075-3.705 0-4.272 2.892-4.272 5.88v11.334h-7.11v-22.905h6.828v3.12h0.090c0.954-1.8 3.276-3.699 6.741-3.699 7.2 0 8.535 4.74 8.535 10.911v12.564zM10.674 14.865c-2.286 0-4.128-1.851-4.128-4.131 0-2.274 1.842-4.125 4.128-4.125 2.28 0 4.128 1.851 4.128 4.125 0 2.28-1.851 4.131-4.128 4.131zM14.238 40.905h-7.128v-22.905h7.128v22.905zM44.448 0h-40.908c-1.956 0-3.54 1.548-3.54 3.459v41.082c0 1.911 1.584 3.459 3.54 3.459h40.905c1.956 0 3.555-1.548 3.555-3.459v-41.082c0-1.911-1.599-3.459-3.555-3.459z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $y_url ) ): ?>
                <a title="Youtube" target="_blank" href="<?php echo $y_url; ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                        <path fill="#cd201f"
                              d="M0 22.035v3.78c0 3.885 0.48 7.77 0.48 7.77s0.468 3.3 1.908 4.761c1.824 1.911 4.224 1.851 5.292 2.052 3.84 0.369 16.32 0.48 16.32 0.48s10.086-0.012 16.8-0.498c0.942-0.114 2.988-0.12 4.812-2.034 1.44-1.458 1.908-4.764 1.908-4.764s0.48-3.882 0.48-7.77v-3.774c0-3.888-0.48-7.77-0.48-7.77s-0.468-3.306-1.908-4.764c-1.824-1.914-3.87-1.92-4.812-2.034-6.714-0.486-16.8-0.498-16.8-0.498s-12.48 0.108-16.32 0.48c-1.068 0.201-3.468 0.141-5.292 2.052-1.44 1.461-1.908 4.761-1.908 4.761s-0.48 3.888-0.48 7.77zM19.044 30.225v-13.485l12.969 6.765-12.96 6.72z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $pin_url ) ): ?>
                <a title="Pinterest" target="_blank" href="<?php echo $pin_url; ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                        <path fill="#bd081c"
                              d="M24 0c-13.254 0-24 10.746-24 24 0 10.17 6.324 18.855 15.252 22.35-0.21-1.899-0.399-4.812 0.084-6.885 0.438-1.875 2.814-11.931 2.814-11.931s-0.72-1.44-0.72-3.564c0-3.33 1.938-5.829 4.344-5.829 2.049 0 3.036 1.539 3.036 3.381 0 2.061-1.308 5.139-1.986 7.992-0.57 2.391 1.2 4.335 3.555 4.335 4.26 0 7.542-4.494 7.542-10.986 0-5.73-4.128-9.75-10.026-9.75-6.828 0-10.83 5.13-10.83 10.41 0 2.070 0.789 4.29 1.779 5.49 0.198 0.24 0.225 0.45 0.171 0.69-0.18 0.75-0.588 2.4-0.669 2.73-0.105 0.45-0.345 0.54-0.804 0.33-2.994-1.383-4.872-5.763-4.872-9.303 0-7.56 5.502-14.52 15.861-14.52 8.322 0 14.796 5.94 14.796 13.86 0 8.28-5.22 14.94-12.48 14.94-2.43 0-4.71-1.26-5.52-2.76l-1.5 5.7c-0.54 2.094-2.010 4.71-3 6.3 2.25 0.69 4.62 1.071 7.11 1.071 13.23 0 24-10.74 24-24s-10.77-24-24-24z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $git_url ) ): ?>
                <a title="GitHub" target="_blank" href="<?php echo $git_url; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 28">
                        <path d="M12 2c6.6 0 12 5.4 12 12 0 5.3-3.4 9.8-8.2 11.4-0.6 0.1-0.8-0.3-0.8-0.6 0-0.4 0-1.7 0-3.3 0-1.1-0.4-1.8-0.8-2.2 2.7-0.3 5.5-1.3 5.5-5.9 0-1.3-0.5-2.4-1.2-3.2 0.1-0.3 0.5-1.5-0.1-3.2-1-0.3-3.3 1.2-3.3 1.2-1-0.3-2-0.4-3-0.4s-2 0.1-3 0.4c0 0-2.3-1.5-3.3-1.2-0.7 1.7-0.2 2.9-0.1 3.2-0.8 0.8-1.2 1.9-1.2 3.2 0 4.6 2.8 5.6 5.5 5.9-0.3 0.3-0.7 0.8-0.8 1.6-0.7 0.3-2.4 0.8-3.5-1-0.7-1.1-1.8-1.2-1.8-1.2-1.2 0-0.1 0.7-0.1 0.7 0.8 0.4 1.3 1.8 1.3 1.8 0.7 2.1 4 1.4 4 1.4 0 1 0 1.9 0 2.2 0 0.3-0.2 0.7-0.8 0.6-4.8-1.6-8.2-6.1-8.2-11.4 0-6.6 5.4-12 12-12zM4.5 19.2c0-0.1 0-0.1-0.1-0.2-0.1 0-0.2 0-0.2 0 0 0.1 0 0.1 0.1 0.2 0.1 0 0.2 0 0.2 0zM5 19.8c0.1 0 0-0.2 0-0.2-0.1-0.1-0.2-0.1-0.2 0-0.1 0 0 0.2 0 0.3 0.1 0.1 0.2 0.1 0.3 0zM5.5 20.5c0.1-0.1 0.1-0.2 0-0.3-0.1-0.1-0.2-0.2-0.3-0.1-0.1 0-0.1 0.2 0 0.3s0.2 0.2 0.3 0.1zM6.2 21.1c0.1-0.1 0-0.2-0.1-0.3-0.1-0.1-0.2-0.1-0.3 0-0.1 0.1 0 0.2 0.1 0.3 0.1 0.1 0.3 0.1 0.3 0zM7 21.5c0-0.1-0.1-0.2-0.2-0.2-0.1 0-0.3 0-0.3 0.1s0.1 0.2 0.2 0.2c0.1 0 0.3 0 0.3-0.1zM8 21.6c0-0.1-0.1-0.2-0.3-0.2-0.1 0-0.2 0.1-0.2 0.2 0 0.1 0.1 0.2 0.3 0.2 0.1 0 0.3-0.1 0.3-0.2zM8.9 21.4c0-0.1-0.1-0.2-0.3-0.1-0.1 0-0.2 0.1-0.2 0.2 0 0.1 0.1 0.2 0.3 0.1s0.2-0.1 0.2-0.2z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $codepen ) ): ?>
                <a title="Codepen" target="_blank" href="<?php echo $codepen; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 28 28">
                        <path d="M3.4 18.3l9.4 6.3v-5.6l-5.2-3.5zM2.4 16l3-2-3-2v4zM15.2 24.5l9.4-6.3-4.2-2.8-5.2 3.5v5.6zM14 16.8l4.3-2.8-4.2-2.8-4.2 2.8zM7.6 12.5l5.2-3.5v-5.6l-9.4 6.3zM22.6 14l3 2v-4zM20.4 12.5l4.2-2.8-9.4-6.3v5.6zM28 9.7v8.5c0 0.4-0.2 0.8-0.5 1l-12.8 8.5c-0.2 0.1-0.4 0.2-0.7 0.2s-0.5-0.1-0.7-0.2l-12.8-8.5c-0.3-0.2-0.5-0.6-0.5-1v-8.5c0-0.4 0.2-0.8 0.5-1l12.8-8.5c0.2-0.1 0.4-0.2 0.7-0.2s0.5 0.1 0.7 0.2l12.8 8.5c0.3 0.2 0.5 0.6 0.5 1z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $digg ) ): ?>
                <a title="Digg" target="_blank" href="<?php echo $digg; ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                        <path d="M35.52 16.32v16.32h7.68v1.92h-7.68v3.84h12.48v-22.080h-12.48zM21.12 16.32v16.32h7.68v1.92h-7.68v3.84h12.48v-22.080h-12.48zM7.68 9.6v6.72h-7.68v16.32h12.48v-23.040h-4.8zM19.2 16.32h-4.8v16.32h4.8v-16.32zM43.2 28.8h-2.88v-8.64h2.88v8.64zM7.68 28.8h-2.88v-8.64h2.88v8.64zM28.8 28.8h-2.88v-8.64h2.88v8.64zM19.2 9.6h-4.8v4.8h4.8v-4.8z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $dribbble ) ): ?>
                <a title="Dribbble" target="_blank" href="<?php echo $dribbble; ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                        <path fill="#ea4c89"
                              d="M24 48c-13.23 0-24-10.77-24-24s10.77-24 24-24 24 10.77 24 24-10.77 24-24 24zM44.241 27.285c-0.702-0.222-6.345-1.905-12.771-0.876 2.682 7.368 3.774 13.368 3.984 14.616 4.599-3.111 7.872-8.040 8.79-13.74zM32.010 42.9c-0.306-1.8-1.5-8.064-4.38-15.54l-0.132 0.042c-11.562 4.029-15.708 12.048-16.080 12.798 3.474 2.715 7.842 4.332 12.582 4.332 2.841 0 5.55-0.582 8.010-1.629zM8.769 37.74c0.465-0.798 6.090-10.11 16.665-13.53 0.27-0.090 0.54-0.168 0.81-0.24-0.519-1.17-1.080-2.334-1.665-3.48-10.239 3.060-20.169 2.931-21.069 2.91l-0.009 0.624c0 5.265 1.995 10.074 5.268 13.71zM3.93 19.83c0.921 0.015 9.366 0.051 18.954-2.496-3.396-6.036-7.059-11.115-7.599-11.856-5.736 2.706-10.020 7.992-11.352 14.355zM19.2 4.104c0.564 0.759 4.29 5.829 7.644 12 7.29-2.73 10.38-6.879 10.746-7.404-3.621-3.219-8.382-5.172-13.59-5.172-1.65 0-3.261 0.198-4.8 0.57zM39.87 11.070c-0.435 0.582-3.87 4.986-11.448 8.082 0.48 0.975 0.93 1.968 1.359 2.97 0.15 0.351 0.3 0.705 0.441 1.056 6.822-0.858 13.599 0.516 14.274 0.66-0.045-4.839-1.77-9.282-4.629-12.771z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $flickr ) ): ?>
                <a title="Flickr" target="_blank" href="<?php echo $flickr; ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                        <path fill="#0063dc"
                              d="M0 24c0 6.15 4.986 11.13 11.13 11.13 6.15 0 11.139-4.98 11.139-11.13s-4.989-11.13-11.139-11.13c-6.141 0-11.13 4.98-11.13 11.13zM25.731 24c0 6.15 4.986 11.13 11.136 11.13 6.123 0 11.133-4.98 11.133-11.13s-4.986-11.13-11.13-11.13c-6.15 0-11.139 4.98-11.139 11.13z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $foursquare ) ): ?>
                <a title="Foursquare" target="_blank" href="<?php echo $foursquare ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                        <path fill="#f94877"
                              d="M35.466 6.93l-1.074 5.598c-0.129 0.606-0.891 1.245-1.599 1.245h-9.963c-1.122 0-1.926 0.78-1.926 1.89v1.23c0 1.14 0.81 1.92 1.932 1.92h8.46c0.789 0 1.569 0.87 1.395 1.71l-1.071 5.52c-0.099 0.48-0.63 1.26-1.572 1.26h-6.912c-1.26 0-1.638 0.18-2.478 1.2-0.84 1.050-8.412 10.14-8.412 10.14-0.075 0.090-0.15 0.060-0.15-0.030v-31.773c0-0.72 0.621-1.56 1.554-1.56h20.55c0.75 0 1.458 0.711 1.266 1.641zM36.366 28.89c0.288-1.155 3.492-17.568 4.56-22.77zM36.981 0h-25.605c-3.531 0-4.566 2.658-4.566 4.329v40.68c0 1.881 1.008 2.58 1.578 2.811s2.139 0.426 3.081-0.66c0 0 12.090-14.025 12.294-14.232 0.33-0.315 0.33-0.315 0.63-0.315h7.83c3.3 0 3.81-2.34 4.17-3.72 0.3-1.14 3.51-17.55 4.56-22.77 0.807-3.963-0.213-6.123-3.963-6.123z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $instagram ) ): ?>
                <a title="Instagram" target="_blank" href="<?php echo $instagram ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                        <path fill="#e4405f"
                              d="M24 0c-6.519 0-7.335 0.030-9.894 0.144-2.556 0.12-4.296 0.522-5.826 1.116-1.578 0.612-2.919 1.434-4.251 2.769-1.335 1.332-2.16 2.67-2.769 4.251-0.594 1.53-0.999 3.27-1.116 5.826-0.12 2.559-0.144 3.375-0.144 9.894s0.030 7.335 0.144 9.894c0.12 2.556 0.522 4.299 1.116 5.826 0.612 1.578 1.434 2.919 2.769 4.251 1.332 1.335 2.67 2.16 4.251 2.769 1.53 0.594 3.27 0.999 5.826 1.116 2.559 0.12 3.375 0.144 9.894 0.144s7.335-0.030 9.894-0.144c2.556-0.12 4.299-0.522 5.826-1.116 1.578-0.612 2.919-1.434 4.251-2.769 1.335-1.332 2.16-2.67 2.769-4.251 0.594-1.53 0.999-3.27 1.116-5.826 0.12-2.559 0.144-3.375 0.144-9.894s-0.030-7.335-0.144-9.894c-0.12-2.556-0.522-4.299-1.116-5.826-0.612-1.578-1.434-2.919-2.769-4.251-1.332-1.335-2.67-2.16-4.251-2.769-1.53-0.594-3.27-0.999-5.826-1.116-2.559-0.12-3.375-0.144-9.894-0.144zM24 4.32c6.408 0 7.17 0.030 9.699 0.144 2.34 0.108 3.609 0.498 4.455 0.828 1.122 0.435 1.92 0.954 2.76 1.794s1.359 1.638 1.794 2.76c0.33 0.846 0.72 2.115 0.828 4.455 0.114 2.532 0.141 3.291 0.141 9.699s-0.030 7.17-0.15 9.699c-0.12 2.34-0.51 3.609-0.84 4.455-0.45 1.122-0.96 1.92-1.8 2.76s-1.65 1.359-2.76 1.794c-0.84 0.33-2.13 0.72-4.47 0.828-2.55 0.114-3.3 0.141-9.72 0.141s-7.17-0.030-9.72-0.15c-2.34-0.12-3.63-0.51-4.47-0.84-1.14-0.45-1.92-0.96-2.76-1.8s-1.38-1.65-1.8-2.76c-0.33-0.84-0.72-2.13-0.84-4.47-0.090-2.52-0.12-3.3-0.12-9.69s0.030-7.17 0.12-9.72c0.12-2.34 0.51-3.63 0.84-4.47 0.42-1.14 0.96-1.92 1.8-2.76s1.62-1.38 2.76-1.8c0.84-0.33 2.1-0.72 4.44-0.84 2.55-0.090 3.3-0.12 9.72-0.12zM24 11.676c-6.81 0-12.324 5.52-12.324 12.324 0 6.81 5.52 12.324 12.324 12.324 6.81 0 12.324-5.52 12.324-12.324 0-6.81-5.52-12.324-12.324-12.324zM24 32.001c-4.419 0-8.001-3.582-8.001-8.001s3.582-8.001 8.001-8.001c4.419 0 8.001 3.582 8.001 8.001s-3.582 8.001-8.001 8.001zM39.69 11.19c0 1.59-1.29 2.88-2.88 2.88s-2.88-1.29-2.88-2.88 1.29-2.88 2.88-2.88 2.88 1.29 2.88 2.88z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $reddit ) ): ?>
                <a title="Reddit" target="_blank" href="<?php echo $reddit ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                        <path fill="#ff4500"
                              d="M4.419 28.104c-0.12 0.555-0.18 1.122-0.18 1.698 0 6.9 8.82 12.519 19.662 12.519 10.839 0 19.659-5.616 19.659-12.519 0-0.549-0.060-1.092-0.165-1.62l-0.030-0.066c-0.039-0.108-0.060-0.219-0.060-0.33-0.6-2.352-2.235-4.491-4.599-6.216-0.090-0.030-0.174-0.078-0.252-0.141-0.051-0.039-0.090-0.084-0.132-0.129-3.594-2.472-8.73-4.020-14.421-4.020-5.64 0-10.728 1.518-14.316 3.945-0.030 0.036-0.060 0.069-0.099 0.099-0.078 0.066-0.168 0.12-0.261 0.15-2.415 1.728-4.092 3.879-4.716 6.258 0 0.114-0.030 0.231-0.075 0.342l-0.015 0.030zM24 39.009c-3.594 0-6.126-0.78-7.74-2.4-0.348-0.348-0.348-0.915 0-1.266 0.351-0.33 0.921-0.33 1.272 0 1.26 1.26 3.375 1.89 6.465 1.89s5.19-0.6 6.45-1.86c0.33-0.33 0.9-0.33 1.26 0 0.33 0.36 0.33 0.93 0 1.29-1.62 1.62-4.14 2.4-7.74 2.4zM16.776 23.835c-1.83 0-3.36 1.53-3.36 3.36 0 1.824 1.53 3.306 3.36 3.306s3.309-1.482 3.309-3.306c0-1.83-1.482-3.36-3.309-3.36zM31.266 23.835c-1.83 0-3.36 1.53-3.36 3.36 0 1.824 1.53 3.306 3.36 3.306s3.309-1.482 3.309-3.306c0-1.83-1.482-3.36-3.309-3.36zM40.38 20.64c2.079 1.668 3.606 3.648 4.386 5.82 0.9-0.675 1.44-1.734 1.44-2.904 0-2.010-1.635-3.642-3.642-3.642-0.801 0-1.56 0.261-2.184 0.729zM5.436 19.92c-2.010 0-3.642 1.635-3.642 3.642 0 1.089 0.48 2.1 1.29 2.781 0.804-2.16 2.346-4.11 4.434-5.76-0.606-0.42-1.329-0.66-2.082-0.66zM23.901 44.121c-11.832 0-21.456-6.42-21.456-14.31 0-0.549 0.048-1.089 0.138-1.62-1.59-0.99-2.58-2.73-2.58-4.635 0-3 2.46-5.436 5.46-5.436 1.35 0 2.61 0.492 3.6 1.365 3.72-2.388 8.73-3.891 14.25-3.99l3.63-11.070 0.81 0.189s0.030 0 0.030 0.006l8.46 1.989c0.69-1.599 2.28-2.724 4.14-2.724 2.46 0 4.47 2.010 4.47 4.476 0 2.469-2.010 4.476-4.47 4.476s-4.47-2.010-4.47-4.47l-7.713-1.827-2.94 8.97c5.31 0.21 10.11 1.71 13.71 4.050 0.99-0.93 2.292-1.44 3.675-1.44 3 0 5.442 2.43 5.442 5.43 0 1.98-1.080 3.78-2.76 4.74 0.060 0.51 0.12 0.99 0.12 1.5-0.030 7.89-9.63 14.31-21.48 14.31zM40.29 5.679c-1.482 0-2.685 1.2-2.685 2.682 0 1.479 1.2 2.682 2.682 2.682 1.47 0 2.67-1.2 2.67-2.67s-1.2-2.67-2.7-2.67z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $vimeo ) ): ?>
                <a title="Vimeo" target="_blank" href="<?php echo $vimeo ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                        <path fill="#1ab7ea"
                              d="M47.976 12.825c-0.21 4.68-3.48 11.091-9.789 19.23-6.54 8.496-12.060 12.744-16.59 12.744-2.82 0-5.16-2.586-7.11-7.764l-3.837-14.235c-1.44-5.172-2.979-7.761-4.626-7.761-0.36 0-1.614 0.756-3.765 2.265l-2.259-2.916c2.37-2.088 4.704-4.17 7.005-6.258 3.159-2.736 5.532-4.17 7.11-4.32 3.738-0.36 6.036 2.199 6.9 7.68 0.93 5.91 1.578 9.582 1.941 11.019 1.080 4.902 2.262 7.35 3.555 7.35 1.005 0 2.514-1.59 4.53-4.77 2.010-3.18 3.084-5.598 3.228-7.26 0.288-2.745-0.789-4.122-3.231-4.122-1.149 0-2.334 0.24-3.555 0.78 2.37-7.74 6.87-11.52 13.53-11.28 4.95 0.12 7.26 3.33 6.99 9.6z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $wordpress ) ): ?>
                <a title="WordPress" target="_blank" href="<?php echo $wordpress ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                        <path fill="#21759b"
                              d="M42.936 13.65c1.68 3.072 2.64 6.6 2.64 10.35 0 7.959-4.314 14.91-10.728 18.651l6.591-19.056c1.23-3.078 1.641-5.541 1.641-7.728 0-0.81-0.054-1.56-0.144-2.22zM26.976 13.857c1.296-0.060 2.466-0.21 2.466-0.21 1.164-0.15 1.026-1.86-0.135-1.8 0 0-3.51 0.27-5.76 0.27-2.13 0-5.7-0.3-5.7-0.3-1.17-0.060-1.32 1.71-0.15 1.77 0 0 1.080 0.12 2.25 0.18l3.36 9.21-4.74 14.16-7.857-23.337c1.296-0.060 2.466-0.201 2.466-0.201 1.17-0.15 1.032-1.86-0.132-1.791 0 0-3.492 0.276-5.748 0.276-0.399 0-0.876-0.015-1.38-0.030 3.906-5.754 10.554-9.624 18.084-9.624 5.616 0 10.731 2.145 14.571 5.664-0.090-0.006-0.18-0.018-0.279-0.018-2.121 0-3.624 1.845-3.624 3.828 0 1.779 1.026 3.285 2.118 5.061 0.822 1.44 1.782 3.285 1.782 5.952 0 1.83-0.711 3.99-1.644 6.96l-2.151 7.17-7.8-23.22zM24 45.57c-2.118 0-4.161-0.309-6.096-0.876l6.474-18.81 6.63 18.171c0.048 0.105 0.099 0.204 0.156 0.3-2.241 0.786-4.65 1.221-7.164 1.221zM2.421 24c0-3.129 0.672-6.099 1.869-8.781l10.29 28.2c-7.191-3.498-12.156-10.878-12.156-19.419zM24 0c-13.23 0-24 10.77-24 24s10.77 24 24 24 24-10.77 24-24-10.77-24-24-24z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $xing ) ): ?>
                <a title="Xing" target="_blank" href="<?php echo $xing ?>">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                        <path fill="#005a5f"
                              d="M36.378 0c-1.035 0-1.482 0.651-1.854 1.32 0 0-14.91 26.448-15.405 27.315 0.030 0.048 9.84 18.045 9.84 18.045 0.339 0.615 0.87 1.32 1.932 1.32h6.909c0.42 0 0.75-0.156 0.924-0.441 0.18-0.3 0.18-0.69-0.015-1.071l-9.759-17.832c-0.009-0.012-0.009-0.030 0-0.045l15.33-27.099c0.189-0.384 0.192-0.774 0.012-1.071-0.18-0.285-0.504-0.441-0.921-0.441h-6.99zM7.296 9.48c-0.42 0-0.768 0.15-0.945 0.432-0.18 0.3-0.156 0.678 0.039 1.062l4.68 8.1c0.009 0.018 0.009 0.030 0 0.042l-7.35 12.984c-0.195 0.378-0.186 0.762 0 1.059 0.171 0.285 0.48 0.471 0.9 0.471h6.924c1.035 0 1.53-0.696 1.89-1.335l7.47-13.218-4.758-8.31c-0.345-0.63-0.87-1.32-1.926-1.32h-6.924z"></path>
                    </svg>
                </a>
			<?php endif; ?>

			<?php if ( ! empty( $email ) ): ?>
                <a href="mailto:<?php echo $email ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 28 28">
                        <path d="M26 23.5v-12c-0.3 0.4-0.7 0.7-1.1 1-2.2 1.7-4.5 3.5-6.7 5.3-1.2 1-2.6 2.2-4.2 2.2h0c-1.6 0-3.1-1.2-4.2-2.2-2.2-1.8-4.4-3.6-6.7-5.3-0.4-0.3-0.7-0.7-1.1-1v12c0 0.3 0.2 0.5 0.5 0.5h23c0.3 0 0.5-0.2 0.5-0.5zM26 7.1c0-0.4 0.1-1.1-0.5-1.1h-23c-0.3 0-0.5 0.2-0.5 0.5 0 1.8 0.9 3.3 2.3 4.4 2.1 1.6 4.2 3.3 6.3 5 0.8 0.7 2.3 2.1 3.4 2.1h0c1.1 0 2.6-1.4 3.4-2.1 2.1-1.7 4.2-3.3 6.3-5 1-0.8 2.3-2.5 2.3-3.9zM28 6.5v17c0 1.4-1.1 2.5-2.5 2.5h-23c-1.4 0-2.5-1.1-2.5-2.5v-17c0-1.4 1.1-2.5 2.5-2.5h23c1.4 0 2.5 1.1 2.5 2.5z"></path>
                    </svg>
                </a>
			<?php endif; ?>
        </div>
		<?php
		echo $args['after_widget'];
	}

	/**
	 * Updates a particular instance of a widget.
	 *
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget::form().
	 * @param array $old_instance Old settings for this instance.
	 *
	 * @return array Settings to save or bool false to cancel saving.
	 */
	function update( $new_instance, $old_instance ) {
		// Save widget options
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		$instance['fb_url']     = esc_url_raw( $new_instance['fb_url'] );
		$instance['gp_url']     = esc_url_raw( $new_instance['gp_url'] );
		$instance['in_url']     = esc_url_raw( $new_instance['in_url'] );
		$instance['t_url']      = esc_url_raw( $new_instance['t_url'] );
		$instance['y_url']      = esc_url_raw( $new_instance['y_url'] );
		$instance['pin_url']    = esc_url_raw( $new_instance['pin_url'] );
		$instance['git_url']    = esc_url_raw( $new_instance['git_url'] );
		$instance['codepen']    = esc_url_raw( $new_instance['codepen'] );
		$instance['digg']       = esc_url_raw( $new_instance['digg'] );
		$instance['dribbble']   = esc_url_raw( $new_instance['dribbble'] );
		$instance['flickr']     = esc_url_raw( $new_instance['flickr'] );
		$instance['foursquare'] = esc_url_raw( $new_instance['foursquare'] );
		$instance['instagram']  = esc_url_raw( $new_instance['instagram'] );
		$instance['reddit']     = esc_url_raw( $new_instance['reddit'] );
		$instance['vimeo']      = esc_url_raw( $new_instance['vimeo'] );
		$instance['wordpress']  = esc_url_raw( $new_instance['wordpress'] );
		$instance['xing']       = esc_url_raw( $new_instance['xing'] );
		$instance['email']      = sanitize_email( $new_instance['email'] );

		return $instance;
	}

	/**
	 * Outputs the settings update form.
	 *
	 * @param array $instance Current settings.
	 *
	 * @return string Default return is 'noform'.
	 */
	public function form( $instance ) {
		// Output admin widget options form	    
		/* Set up some default widget settings. */
		$defaults = array(
			'title'      => '',
			'fb_url'     => '',
			'gp_url'     => '',
			'in_url'     => '',
			't_url'      => '',
			'y_url'      => '',
			'pin_url'    => '',
			'git_url'    => '',
			'codepen'    => '',
			'digg'       => '',
			'dribbble'   => '',
			'flickr'     => '',
			'foursquare' => '',
			'instagram'  => '',
			'reddit'     => '',
			'vimeo'      => '',
			'wordpress'  => '',
			'xing'       => '',
			'email'      => '',
		);

		$instance = wp_parse_args( (array) $instance, $defaults );
		?>
        <!-- Widget Title: Text Input -->
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'smbuttons' ) ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                   name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>"/>
        </p>
        <!-- Show Facebook: Checkbox -->
        <p>
            <label for="<?php echo $this->get_field_id( 'fb_url' ); ?>"><?php _e( 'Facebook', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'fb_url' ); ?>"
                   name="<?php echo $this->get_field_name( 'fb_url' ); ?>" value="<?php echo $instance['fb_url']; ?>"
                   placeholder="http://facebook.com/name"/>
        </p>
        <!-- Show Google Plug: Checkbox -->
        <p>
            <label for="<?php echo $this->get_field_id( 'gp_url' ); ?>"><?php _e( 'Google Plus', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'gp_url' ); ?>"
                   name="<?php echo $this->get_field_name( 'gp_url' ); ?>" value="<?php echo $instance['gp_url']; ?>"
                   placeholder="https://plus.google.com/+userid"/>
        </p>
        <!-- Show LinkedIn: Checkbox -->
        <p>
            <label for="<?php echo $this->get_field_id( 'in_url' ); ?>"><?php _e( 'LinkedIn', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'in_url' ); ?>"
                   name="<?php echo $this->get_field_name( 'in_url' ); ?>" value="<?php echo $instance['in_url']; ?>"
                   placeholder="https://www.linkedin.com/in/user"/>
        </p>
        <!-- Show Twitter: Checkbox -->
        <p>
            <label for="<?php echo $this->get_field_id( 't_url' ); ?>"><?php _e( 'Twitter', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 't_url' ); ?>"
                   name="<?php echo $this->get_field_name( 't_url' ); ?>" value="<?php echo $instance['t_url']; ?>"
                   placeholder="https://twitter.com/username"/>
        </p>
        <!-- Show Youtube: Checkbox -->
        <p>
            <label for="<?php echo $this->get_field_id( 'y_url' ); ?>"><?php _e( 'Youtube', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'y_url' ); ?>"
                   name="<?php echo $this->get_field_name( 'y_url' ); ?>" value="<?php echo $instance['y_url']; ?>"
                   placeholder="https://www.youtube.com/user/username"/>
        </p>
        <!-- Show Pinterest: Checkbox -->
        <p>
            <label for="<?php echo $this->get_field_id( 'pin_url' ); ?>"><?php _e( 'Pinterest', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'pin_url' ); ?>"
                   name="<?php echo $this->get_field_name( 'pin_url' ); ?>" value="<?php echo $instance['pin_url']; ?>"
                   placeholder="http://www.pinterest.com/username"/>
        </p>
        <!-- Show GitHub -->
        <p>
            <label for="<?php echo $this->get_field_id( 'git_url' ); ?>"><?php _e( 'GitHub', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'git_url' ); ?>"
                   name="<?php echo $this->get_field_name( 'git_url' ); ?>" value="<?php echo $instance['git_url']; ?>"
                   placeholder="https://github.com/username"/>
        </p>
        <!-- Show codepen -->
        <p>
            <label for="<?php echo $this->get_field_id( 'codepen' ); ?>"><?php _e( 'Codepen', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'codepen' ); ?>"
                   name="<?php echo $this->get_field_name( 'codepen' ); ?>" value="<?php echo $instance['codepen']; ?>"
                   placeholder="http://codepen.io/username"/>
        </p>
        <!-- Show digg -->
        <p>
            <label for="<?php echo $this->get_field_id( 'digg' ); ?>"><?php _e( 'digg', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'digg' ); ?>"
                   name="<?php echo $this->get_field_name( 'digg' ); ?>" value="<?php echo $instance['digg']; ?>"
                   placeholder=""/>
        </p>
        <!-- Show dribbble -->
        <p>
            <label for="<?php echo $this->get_field_id( 'dribbble' ); ?>"><?php _e( 'dribbble', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'dribbble' ); ?>"
                   name="<?php echo $this->get_field_name( 'dribbble' ); ?>"
                   value="<?php echo $instance['dribbble']; ?>" placeholder="http://dribbble.com/username"/>
        </p>
        <!-- Show flickr -->
        <p>
            <label for="<?php echo $this->get_field_id( 'flickr' ); ?>"><?php _e( 'flickr', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'flickr' ); ?>"
                   name="<?php echo $this->get_field_name( 'flickr' ); ?>" value="<?php echo $instance['flickr']; ?>"
                   placeholder="http://www.flickr.com/photos/username"/>
        </p>
        <!-- Show foursquare -->
        <p>
            <label for="<?php echo $this->get_field_id( 'foursquare' ); ?>"><?php _e( 'foursquare', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'foursquare' ); ?>"
                   name="<?php echo $this->get_field_name( 'foursquare' ); ?>"
                   value="<?php echo $instance['foursquare']; ?>" placeholder="https://foursquare.com/username"/>
        </p>
        <!-- Show instagram -->
        <p>
            <label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e( 'instagram', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>"
                   name="<?php echo $this->get_field_name( 'instagram' ); ?>"
                   value="<?php echo $instance['instagram']; ?>" placeholder="http://instagram.com/username"/>
        </p>
        <!-- Show reddit -->
        <p>
            <label for="<?php echo $this->get_field_id( 'reddit' ); ?>"><?php _e( 'reddit', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'reddit' ); ?>"
                   name="<?php echo $this->get_field_name( 'reddit' ); ?>" value="<?php echo $instance['reddit']; ?>"
                   placeholder=""/>
        </p>
        <!-- Show vimeo -->
        <p>
            <label for="<?php echo $this->get_field_id( 'vimeo' ); ?>"><?php _e( 'vimeo', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'vimeo' ); ?>"
                   name="<?php echo $this->get_field_name( 'vimeo' ); ?>" value="<?php echo $instance['vimeo']; ?>"
                   placeholder="https://vimeo.com/username"/>
        </p>
        <!-- Show wordpress -->
        <p>
            <label for="<?php echo $this->get_field_id( 'wordpress' ); ?>"><?php _e( 'wordpress', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'wordpress' ); ?>"
                   name="<?php echo $this->get_field_name( 'wordpress' ); ?>"
                   value="<?php echo $instance['wordpress']; ?>" placeholder="https://profiles.wordpress.org/username"/>
        </p>
        <!-- Show Xing -->
        <p>
            <label for="<?php echo $this->get_field_id( 'xing' ); ?>"><?php _e( 'Xing', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'xing' ); ?>"
                   name="<?php echo $this->get_field_name( 'xing' ); ?>"
                   value="<?php echo $instance['xing']; ?>" placeholder="https://xing.com/username"/>
        </p>
        <!-- Show email -->
        <p>
            <label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'email', 'smbuttons' ) ?></label><br>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>"
                   name="<?php echo $this->get_field_name( 'email' ); ?>" value="<?php echo $instance['email']; ?>"
                   placeholder="mail@example.com"/>
        </p>
		<?php
	}

	/**
	 * Register widget on widget initiative
	 */
	public static function register() {
		register_widget( __CLASS__ );
	}
}

add_action( 'widgets_init', array( 'Social_Media_Button_Widget', 'register' ) );

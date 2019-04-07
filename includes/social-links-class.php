<?php

class Social_Links_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'Social_Links_Widget',
			'description' => 'Social Links to Icon',
		);
		parent::__construct( 'Social_Links_Widget', 'Social Links Widget', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
        // outputs the content of the widget
        ?>
            TEST FRONTEND
        <?php
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
        // Call form function
        $this->getForm( $instance );
        
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
    }
    
    /**
	 * Gets and displays form
	 *
	 * @param array $instance The widget options
	 */
	public function getForm( $instance ) {
        // Links

        // Get Facebook Link
        if(isset($instance['facebook_link'])){
            $facebook_link = esc_attr($instance['facebook_link']);
        } else {
            $facebook_link = 'https://www.facebook.com/';
        }
        // Get Instagram Link
        if(isset($instance['instagram_link'])){
            $instagram_link = esc_attr($instance['instagram_link']);
        } else {
            $instagram_link = 'https://www.instagram.com/';
        }
        // Get Twitter Link
        if(isset($instance['twitter_link'])){
            $twitter_link = esc_attr($instance['twitter_link']);
        } else {
            $twitter_link = 'https://www.twitter.com/';
        }
        // Get Pinterest Link
        if(isset($instance['pinterest_link'])){
            $pinterest_link = esc_attr($instance['pinterest_link']);
        } else {
            $pinterest_link = 'https://www.pinterest.com/';
        }

        // Icons
        
        // Get Facebook Icon
        if(isset($instance['facebook_icon'])){
            $facebook_icon = esc_attr($instance['facebook_icon']);
        } else {
            $facebook_icon = plugins_url() . '/social-links/img/facebook.png';
        }
        // Get Instagram Icon
        if(isset($instance['instagram_icon'])){
            $instagram_icon = esc_attr($instance['instagram_icon']);
        } else {
            $instagram_icon = plugins_url() . '/social-links/img/instagram.png';
        }
        // Get Twitter Icon
        if(isset($instance['twitter_icon'])){
            $twitter_icon = esc_attr($instance['twitter_icon']);
        } else {
            $twitter_icon = plugins_url() . '/social-links/img/twitter.png';
        }
        // Get Pinterest Icon
        if(isset($instance['pinterest_icon'])){
            $pinterest_icon = esc_attr($instance['pinterest_icon']);
        } else {
            $pinterest_icon = plugins_url() . '/social-links/img/pinterest.png';
        }

        // Get Icon Width
        if(isset($instance['icon_width'])){
            $icon_width = esc_attr($instance['icon_width']);
        } else {
            $icon_width = '32';
        }

        ?>
            <p>
                <label for="<?php echo $this->get_field_id('facebook_link');?>"><?php _e('Facebook Link');  ?></label>
                <input type="text" class="widefat" id="<?php echo $this->get_field_id('facebook_link');?>" name="<?php echo $this->get_field_name('facebook_link');?>" value="<?php echo esc_attr($facebook_link); ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('facebook_icon');?>"><?php _e('Facebook icon');  ?></label>
                <input type="text" class="widefat" id="<?php echo $this->get_field_id('facebook_icon');?>" name="<?php echo $this->get_field_name('facebook_icon');?>" value="<?php echo esc_attr($facebook_icon); ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('instagram_link');?>"><?php _e('Instagram Link');  ?></label>
                <input type="text" class="widefat" id="<?php echo $this->get_field_id('instagram_link');?>" name="<?php echo $this->get_field_name('instagram_link');?>" value="<?php echo esc_attr($instagram_link); ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('instagram_icon');?>"><?php _e('Instagram icon');  ?></label>
                <input type="text" class="widefat" id="<?php echo $this->get_field_id('instagram_icon');?>" name="<?php echo $this->get_field_name('instagram_icon');?>" value="<?php echo esc_attr($instagram_icon); ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('twitter_link');?>"><?php _e('Twitter Link');  ?></label>
                <input type="text" class="widefat" id="<?php echo $this->get_field_id('twitter_link');?>" name="<?php echo $this->get_field_name('twitter_link');?>" value="<?php echo esc_attr($twitter_link); ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('twitter_icon');?>"><?php _e('Twitter icon');  ?></label>
                <input type="text" class="widefat" id="<?php echo $this->get_field_id('twitter_icon');?>" name="<?php echo $this->get_field_name('twitter_icon');?>" value="<?php echo esc_attr($twitter_icon); ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('pinterest_link');?>"><?php _e('Pinterest Link');  ?></label>
                <input type="text" class="widefat" id="<?php echo $this->get_field_id('pinterest_link');?>" name="<?php echo $this->get_field_name('pinterest_link');?>" value="<?php echo esc_attr($pinterest_link); ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('pinterest_icon');?>"><?php _e('Pinterest icon');  ?></label>
                <input type="text" class="widefat" id="<?php echo $this->get_field_id('pinterest_icon');?>" name="<?php echo $this->get_field_name('pinterest_icon');?>" value="<?php echo esc_attr($pinterest_icon); ?>">
            </p>

            <p>
            <label for="<?php echo $this->get_field_id('icon_width');?>"><?php _e('Icon Width');  ?></label>
                <input type="text" class="widefat" id="<?php echo $this->get_field_id('icon_width');?>" name="<?php echo $this->get_field_name('icon_width');?>" value="<?php echo esc_attr($icon_width); ?>">
            </p>

        <?php
        
	}
}
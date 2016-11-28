<?php

class not_found_widget extends WP_Widget {

    function __construct() {
        parent::__construct( false, 'Widget for 404 page' );
        $options = array(
                        'classname' => 'not_found_widget',
                        'description' => 'Widget for 404 page'
                        );
        $this->WP_Widget('not_found_widget', 'Not Found', $options);
    }

    function widget($args, $instance) {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        $description = $instance['description'];
        $url = $instance['url'];
        echo $before_widget;
        echo $before_title;
        echo $title;
        echo $after_title;
        echo '<p>'.$description.'</p>';
        echo '<p>'.$url.'</p>';
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['description'] = sanitize_text_field($new_instance['description']);
        $instance['url'] = sanitize_text_field($new_instance['url']);
        return $instance;
    }

    function form($instance) {
        $defaults = array('title' => 'Not Found', 'description'=> '', 'url' => '');
        $instance = wp_parse_args((array)$instance, $defaults);
        $title = $instance['title'];
        $description = $instance['description'];
        $url = $instance['url'];
?>
        <p>
            Title
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('title');?>"
            value="<?php echo esc_attr($title);?>"/>
        </p>
        <p>
            Description
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('description');?>"
            value="<?php echo esc_attr($description);?>"/>
        </p>
        <p>
            URL
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('url');?>"
            value="<?php echo esc_attr($url);?>"/>
        </p>
<?php
    }
}

?>
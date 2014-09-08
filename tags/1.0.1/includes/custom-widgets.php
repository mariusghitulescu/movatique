<?php

/*
** Recent Comments Custom Widget
*/
add_action( 'widgets_init', 'recent_comments_custom_widget' );

function recent_comments_custom_widget() {
    register_widget( 'Recent_Comments_Custom_Widget' );
}

class Recent_Comments_Custom_Widget extends WP_Widget {

    function Recent_Comments_Custom_Widget() {
        $widget_ops = array( 'classname' => 'example', 'description' => __('A widget that displays the latest comments.', 'ti') );
        
        $control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'recent_comments_custom_widget' );
        
        $this->WP_Widget( 'recent_comments_custom_widget', __('Recent Comments (custom)', 'ti'), $widget_ops, $control_ops );
    }
    
    function widget( $args, $instance ) {
        extract( $args );

        //Our variables from the widget settings.
        $title = apply_filters('widget_title', $instance['title'] );
        $number_recent_comments = $instance['number_recent_comments'];

        echo $before_widget;

        // Display the widget title 
        if ( $title )
            echo $before_title . $title . $after_title; ?>

        <?php
            $recent_comments = get_comments(
                array(
                    'number'    => $number_recent_comments,
                    'status'    => 'approve',
                )
            );
            foreach($recent_comments as $comment) : ?>
                <div class="widget-recentcomments">
                    <div class="widget-recentcomments-entry">
                        <?php echo $comment->comment_content; ?>
                    </div><!--/.widget-recentcomments-entry-->
                    <span></span>
                    <div class="widget-recentcomments-meta">
                        <?php _e( 'by', 'ti' ); ?> <em><a href="<?php echo $comment->comment_author_url; ?>" title="<?php echo $comment->comment_author; ?>" target="_blank"><?php echo $comment->comment_author; ?></a></em>, <?php _e( 'on', 'ti' ); ?> <em><?php echo $comment->comment_date; ?></em>
                    </div><!--/.widget-recentcomments-meta-->
                </div><!--/.widget-recentcomments-->
            <?php endforeach;
        ?>

        <?php echo $after_widget;
    }

    //Update the widget 
     
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;

        //Strip tags from title and name to remove HTML 
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['number_recent_comments'] = strip_tags( $new_instance['number_recent_comments'] );

        return $instance;
    }

    
    function form( $instance ) {

        //Set up some default widget settings.
        $defaults = array( 'title' => __('Recent Comments', 'ti'), 'number_recent_comments' => __('5', 'ti') );
        $instance = wp_parse_args( (array) $instance, $defaults ); ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'ti'); ?></label>
            <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'number_recent_comments' ); ?>"><?php _e('Number of comments:', 'ti'); ?></label>
            <input id="<?php echo $this->get_field_id( 'number_recent_comments' ); ?>" name="<?php echo $this->get_field_name( 'number_recent_comments' ); ?>" value="<?php echo $instance['number_recent_comments']; ?>" style="width:100%;" />
        </p>

    <?php
    }
}

?>
<?php

/**
 *	Pagination
 */
function pagination() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="posts-navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<div class="posts-navigation-previous">%s</div>' . "\n", get_previous_posts_link( 'Previous' ) );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li><a title="Pagination">&hellip;</a></li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li><a title="Pagination">&hellip;</a></li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<div class="posts-navigation-next">%s</div>' . "\n", get_next_posts_link( 'Next' ) );

	echo '</ul></div>' . "\n";

}

/**
 *	Excerpt Limit Words
 */
function excerpt_limit_words($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

/**
 *	Comments List
 */
if ( ! function_exists( 'comments_list' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since ti 1.0
 */
function comments_list( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
    ?>
    <li class="post pingback">
        <p><?php _e( 'Pingback:', 'ti' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'ti' ), ' ' ); ?></p>
    <?php
            break;
        default :
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

        <article id="comment-<?php comment_ID(); ?>" class="comments-list cf">
        	<div class="comments-list-left">
        		<?php echo get_avatar( $comment, 62 ); ?>
        		<div class="comments-author-name">
        			<?php printf( __( '%s', 'ti' ), sprintf( '%s', get_comment_author_link() ) ); ?> <?php edit_comment_link( __( 'Edit', 'ti' ), '- ' ); ?>
        		</div><!--/div .comments-author-name-->
        		<div class="comments-author-entry">
        			<?php comment_text(); ?>
        		</div><!--/div .comments-author-entry-->
        		<?php if ( $comment->comment_approved == '0' ) : ?>
                    <em class="awaiting-moderation cf"><?php _e( 'Your comment is awaiting moderation.', 'ti' ); ?></em><br />
                <?php endif; ?>
        	</div><!--/div .comments-list-left-->
        	<div class="comments-list-meta">
        		<span><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>" title="<?php comment_time( 'c' ); ?>"><?php printf( __( '%1$s at %2$s', 'shape' ), get_comment_date(), get_comment_time() ); ?></a></span>
        		<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        	</div><!--/div .comments-list-meta-->
        </article><!--/article .comments-list .cf-->

    <?php
            break;
    endswitch;
}
endif;

?>
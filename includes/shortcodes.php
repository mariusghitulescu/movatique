<?php

/**
 *  Pricing Shortcode
 */
function pricing_shortcode( $atts ) {

    extract( shortcode_atts(
        array(
            'title'         => 'Start-up Plan',
            'subtitle'      => 'For basic moving help',
            'price'         => '',
            'description'   => ''
        ), $atts )
    );

    if ( $price != NULL ) {
        $the_price = '<div class="pricing-col"><span>'. $price .'</span></div>';
    } else {
        $the_price = '';
    }

    if ( $description != NULL ) {
        $the_description = '<div class="pricing-col"><p>'. $description .'</p></div>';
    } else {
        $the_description = '';
    }

    return '<div class="pricing-column"><div class="pricing-title"><span>'. $title .'</span><br /><p>'. $subtitle .'</p></div>'. $the_price .''. $the_description;
}
add_shortcode( 'pricing', 'pricing_shortcode' );

/**
 *  Row Shortcode
 */
function row_shortcode( $atts ) {

    extract( shortcode_atts(
        array(
            'title' => '1 Moving Helper',
            'price' => '$30/ hr'
        ), $atts )
    );

    return '<div class="pricing-col"><p><b>'. $title .'</b><br />'. $price .'</p></div>';
}
add_shortcode( 'row', 'row_shortcode' );

/*
** Button Shortcode
*/
function button_shortcode( $atts ) {

    extract( shortcode_atts(
        array(
            'text'  => 'Buy Now',
            'url'   => 'http://www.themeisle.com'
        ), $atts )
    );

    return '<a href="'. $url .'" title="'. $text .'" class="pricing-buynow" target="_blank">'. $text .'</a></div>';
}
add_shortcode( 'button', 'button_shortcode' );

/*
** Pricing Featured Shortcode
*/
function pricing_featured_shortcode( $atts ) {

    extract( shortcode_atts(
        array(
            'title'         => 'Business Plan',
            'subtitle'      => 'For basic moving plan',
            'price'         => '',
            'description'   => ''
        ), $atts )
    );

    if ( $price != NULL ) {
        $the_price = '<div class="pricing-col"><span>'. $price .'</span></div>';
    } else {
        $the_price = '';
    }

    if ( $description != NULL ) {
        $the_description = '<div class="pricing-col"><p>'. $description .'</p></div>';
    } else {
        $the_description = '';
    }

    return '<div class="pricing-featured"><div class="pricing-title"><span>'. $title .'</span><br /><p>'. $subtitle .'</p></div>'. $the_price .''. $the_description;
}
add_shortcode( 'pricing_featured', 'pricing_featured_shortcode' );

?>
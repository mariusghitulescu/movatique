<?php

function lawyeria_customizer( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

    /*
    ** Header Customizer
    */
    $wp_customize->add_section( 'movatique_header' , array(
    	'title'       => __( 'Header', 'ti' ),
    	'priority'    => 200,
	) );

		/* Header - Logo */
		$wp_customize->add_setting( 'ti_header_logo' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_header_logo', array(
		    'label'    => __( 'Logo:', 'ti' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_logo',
		    'priority' => '1',
		) ) );

		/* Header - Title */
		$wp_customize->add_setting( 'ti_header_title' );
		$wp_customize->add_control( 'ti_header_title', array(
		    'label'    => __( 'Contact Title:', 'ti' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_title',
			'priority' => '2',
		) );

		/* Header - Subtitle */
		$wp_customize->add_setting( 'ti_header_subtitle' );
		$wp_customize->add_control( 'ti_header_subtitle', array(
		    'label'    => __( 'Contact telephone:', 'ti' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_subtitle',
			'priority' => '3',
		) );

		/* Header - YouTube link */
		$wp_customize->add_setting( 'ti_header_youtube' );
		$wp_customize->add_control( 'ti_header_youtube', array(
		    'label'    => __( 'YouTube link:', 'ti' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_youtube',
			'priority' => '4',
		) );

		/* Header - Facebook link */
		$wp_customize->add_setting( 'ti_header_facebook' );
		$wp_customize->add_control( 'ti_header_facebook', array(
		    'label'    => __( 'Facebook link:', 'ti' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_facebook',
			'priority' => '5',
		) );

		/* Header - Google+ link */
		$wp_customize->add_setting( 'ti_header_googleplus' );
		$wp_customize->add_control( 'ti_header_googleplus', array(
		    'label'    => __( 'Google+ link:', 'ti' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_googleplus',
			'priority' => '5',
		) );

		/* Header - Google+ link */
		$wp_customize->add_setting( 'ti_header_twitter' );
		$wp_customize->add_control( 'ti_header_twitter', array(
		    'label'    => __( 'Twitter link:', 'ti' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_twitter',
			'priority' => '6',
		) );

		/* Header - Contact Form 7 - Title */
		$wp_customize->add_setting( 'ti_header_contactform7_title' );
		$wp_customize->add_control( 'ti_header_contactform7_title', array(
		    'label'    => __( 'Contact Form 7 - Title', 'ti' ),
		    'section'  => 'movatique_header',
		    'settings' => 'ti_header_contactform7_title',
			'priority' => '7',
		) );

		/* Header - Contact Form 7 - Shortcode */
		$wp_customize->add_setting( 'ti_header_contactform7_shortcode' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_header_contactform7_shortcode', array(
		            'label' 	=> __( 'Contact Form 7 - Shortcode', 'ti' ),
		            'section' 	=> 'movatique_header',
		            'settings' 	=> 'ti_header_contactform7_shortcode',
		            'priority' 	=> '8'
		        )
		    )
		);

    /*
    ** Front Page Customizer
    */
    $wp_customize->add_section( 'movatique_frontpage' , array(
    	'title'       => __( 'Front Page', 'ti' ),
    	'priority'    => 250,
	) );

		/* Front Page - Header Title */
		$wp_customize->add_setting( 'ti_frontpage_header_title' );
		$wp_customize->add_control( 'ti_frontpage_header_title', array(
		    'label'    => __( 'Subheader Title:', 'ti' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_header_title',
			'priority' => '1',
		) );

		/* Front Page - Header Content */
		$wp_customize->add_setting( 'ti_frontpage_header_content' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_frontpage_header_content', array(
		            'label' 	=> __( 'Subheader Content:', 'ti' ),
		            'section' 	=> 'movatique_frontpage',
		            'settings' 	=> 'ti_frontpage_header_content',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Front Page - Subheader Title */
		$wp_customize->add_setting( 'ti_frontpage_subheader_title' );
		$wp_customize->add_control( 'ti_frontpage_subheader_title', array(
		    'label'    => __( 'Features Title:', 'ti' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_subheader_title',
			'priority' => '3',
		) );

		/* Front Page - Firstly Box - Title */
		$wp_customize->add_setting( 'ti_frontpage_firstlybox_title' );
		$wp_customize->add_control( 'ti_frontpage_firstlybox_title', array(
		    'label'    => __( 'Features Box (first) - Title:', 'ti' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_firstlybox_title',
			'priority' => '4',
		) );

		/* Front Page - Firstly Box - Image */
		$wp_customize->add_setting( 'ti_frontpage_firstlybox_image' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_firstlybox_image', array(
		            'label' 	=> __( 'Features Box (first) - Image:', 'ti' ),
		            'section' 	=> 'movatique_frontpage',
		            'settings' 	=> 'ti_frontpage_firstlybox_image',
		            'priority' 	=> '5'
		        )
		    )
		);

		/* Front Page - Secondly Box - Title */
		$wp_customize->add_setting( 'ti_frontpage_secondlybox_title' );
		$wp_customize->add_control( 'ti_frontpage_secondlybox_title', array(
		    'label'    => __( 'Features Box (two) - Title:', 'ti' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_secondlybox_title',
			'priority' => '6',
		) );

		/* Front Page - Secondly Box - Image */
		$wp_customize->add_setting( 'ti_frontpage_secondlybox_image' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_secondlybox_image', array(
		            'label' 	=> __( 'Features Box (two) - Image:', 'ti' ),
		            'section' 	=> 'movatique_frontpage',
		            'settings' 	=> 'ti_frontpage_secondlybox_image',
		            'priority' 	=> '7'
		        )
		    )
		);

		/* Front Page - Thirdly Box - Title */
		$wp_customize->add_setting( 'ti_frontpage_thirdlybox_title' );
		$wp_customize->add_control( 'ti_frontpage_thirdlybox_title', array(
		    'label'    => __( 'Features Box (three) - Title:', 'ti' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_thirdlybox_title',
			'priority' => '8',
		) );

		/* Front Page - Thirdly Box - Image */
		$wp_customize->add_setting( 'ti_frontpage_thirdlybox_image' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_thirdlybox_image', array(
		            'label' 	=> __( 'Features Box (three) - Image:', 'ti' ),
		            'section' 	=> 'movatique_frontpage',
		            'settings' 	=> 'ti_frontpage_thirdlybox_image',
		            'priority' 	=> '9'
		        )
		    )
		);

		/* Front Page - The Content - Title */
		$wp_customize->add_setting( 'ti_frontpage_thecontent_title' );
		$wp_customize->add_control( 'ti_frontpage_thecontent_title', array(
		    'label'    => __( 'The Content - Title:', 'ti' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_thecontent_title',
			'priority' => '10',
		) );

		/* Front Page - The Content - Content */
		$wp_customize->add_setting( 'ti_frontpage_thecontent_content' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_frontpage_thecontent_content', array(
		            'label' 	=> __( 'The Content - Content:', 'ti' ),
		            'section' 	=> 'movatique_frontpage',
		            'settings' 	=> 'ti_frontpage_thecontent_content',
		            'priority' 	=> '11'
		        )
		    )
		);

		/* Front Page - Testimonials - Title */
		$wp_customize->add_setting( 'ti_frontpage_testimonials_title' );
		$wp_customize->add_control( 'ti_frontpage_testimonials_title', array(
		    'label'    => __( 'Testimonials - Title:', 'ti' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_testimonials_title',
			'priority' => '12',
		) );

		/* Front Page - Testimonials - Number of posts */
		$wp_customize->add_setting( 'ti_frontpage_testimonials_numberofposts' );
		$wp_customize->add_control( 'ti_frontpage_testimonials_numberofposts', array(
		    'label'    => __( 'Testimonials - Number of posts:', 'ti' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_testimonials_numberofposts',
			'priority' => '13',
		) );

		/* Front Page - Our Clients - Title */
		$wp_customize->add_setting( 'ti_frontpage_ourclients_title' );
		$wp_customize->add_control( 'ti_frontpage_ourclients_title', array(
		    'label'    => __( 'Our Clients - Title:', 'ti' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_ourclients_title',
			'priority' => '14',
		) );

		/* Front Page - Our Clients - Logo 1 */
		$wp_customize->add_setting( 'ti_frontpage_ourclients_logo1' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_ourclients_logo1', array(
		    'label'    => __( 'Our Clients - Logo 1:', 'ti' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_ourclients_logo1',
		    'priority' => '15',
		) ) );

		/* Front Page - Our Clients - Logo 2 */
		$wp_customize->add_setting( 'ti_frontpage_ourclients_logo2' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_ourclients_logo2', array(
		    'label'    => __( 'Our Clients - Logo 2:', 'ti' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_ourclients_logo2',
		    'priority' => '16',
		) ) );

		/* Front Page - Our Clients - Logo 3 */
		$wp_customize->add_setting( 'ti_frontpage_ourclients_logo3' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_ourclients_logo3', array(
		    'label'    => __( 'Our Clients - Logo 3:', 'ti' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_ourclients_logo3',
		    'priority' => '16',
		) ) );

		/* Front Page - Our Clients - Logo 4 */
		$wp_customize->add_setting( 'ti_frontpage_ourclients_logo4' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_ourclients_logo4', array(
		    'label'    => __( 'Our Clients - Logo 4:', 'ti' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_ourclients_logo4',
		    'priority' => '17',
		) ) );

		/* Front Page - Our Clients - Logo 5 */
		$wp_customize->add_setting( 'ti_frontpage_ourclients_logo5' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_ourclients_logo5', array(
		    'label'    => __( 'Our Clients - Logo 5:', 'ti' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_ourclients_logo5',
		    'priority' => '18',
		) ) );

		/* Front Page - Our Clients - Logo 6 */
		$wp_customize->add_setting( 'ti_frontpage_ourclients_logo6' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_ourclients_logo6', array(
		    'label'    => __( 'Our Clients - Logo 6:', 'ti' ),
		    'section'  => 'movatique_frontpage',
		    'settings' => 'ti_frontpage_ourclients_logo6',
		    'priority' => '19',
		) ) );

	/*
    ** Contact Customizer
    */
    $wp_customize->add_section( 'movatique_contact' , array(
    	'title'       => __( 'Contact', 'ti' ),
    	'priority'    => 350,
	) );

		/* Contact - Sidebar - Map Title */
		$wp_customize->add_setting( 'ti_contact_sidebar_map_title' );
		$wp_customize->add_control( 'ti_contact_sidebar_map_title', array(
		    'label'    => __( 'Sidebar - Map Title:', 'ti' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_map_title',
			'priority' => '1'
		) );

		/* Contact - Sidebar - Map */
		$wp_customize->add_setting( 'ti_contact_sidebar_map' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_contact_sidebar_map', array(
		            'label' 	=> __( 'Sidebar - Map (iframe):', 'ti' ),
		            'section' 	=> 'movatique_contact',
		            'settings' 	=> 'ti_contact_sidebar_map',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Contact - Sidebar - Title */
		$wp_customize->add_setting( 'ti_contact_sidebar_title' );
		$wp_customize->add_control( 'ti_contact_sidebar_title', array(
		    'label'    => __( 'Sidebar - Title:', 'ti' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_title',
			'priority' => '3'
		) );

		/* Contact - Sidebar - Address 1 */
		$wp_customize->add_setting( 'ti_contact_sidebar_address1' );
		$wp_customize->add_control( 'ti_contact_sidebar_address1', array(
		    'label'    => __( 'Sidebar - Country Address:', 'ti' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_address1',
			'priority' => '4'
		) );

		/* Contact - Sidebar - Address 2 */
		$wp_customize->add_setting( 'ti_contact_sidebar_address2' );
		$wp_customize->add_control( 'ti_contact_sidebar_address2', array(
		    'label'    => __( 'Sidebar - City Address:', 'ti' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_address2',
			'priority' => '5'
		) );

		/* Contact - Sidebar - Address 3 */
		$wp_customize->add_setting( 'ti_contact_sidebar_address3' );
		$wp_customize->add_control( 'ti_contact_sidebar_address3', array(
		    'label'    => __( 'Sidebar - Street Address:', 'ti' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_address3',
			'priority' => '6'
		) );

		/* Contact - Sidebar - Content */
		$wp_customize->add_setting( 'ti_contact_sidebar_content' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_contact_sidebar_content', array(
		            'label' 	=> __( 'Sidebar - Content:', 'ti' ),
		            'section' 	=> 'movatique_contact',
		            'settings' 	=> 'ti_contact_sidebar_content',
		            'priority' 	=> '7'
		        )
		    )
		);

		/* Contact - Sidebar - Phone */
		$wp_customize->add_setting( 'ti_contact_sidebar_phone' );
		$wp_customize->add_control( 'ti_contact_sidebar_phone', array(
		    'label'    => __( 'Sidebar - Phone:', 'ti' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_phone',
			'priority' => '9'
		) );

		/* Contact - Sidebar - Website */
		$wp_customize->add_setting( 'ti_contact_sidebar_website' );
		$wp_customize->add_control( 'ti_contact_sidebar_website', array(
		    'label'    => __( 'Sidebar - Website:', 'ti' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_website',
			'priority' => '11'
		) );

		/* Contact - Sidebar - Email */
		$wp_customize->add_setting( 'ti_contact_sidebar_email' );
		$wp_customize->add_control( 'ti_contact_sidebar_email', array(
		    'label'    => __( 'Sidebar - Email:', 'ti' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_email',
			'priority' => '13'
		) );

		/* Contact - Sidebar - Socials Title */
		$wp_customize->add_setting( 'ti_contact_sidebar_socials_title' );
		$wp_customize->add_control( 'ti_contact_sidebar_socials_title', array(
		    'label'    => __( 'Sidebar - Socials Title:', 'ti' ),
		    'section'  => 'movatique_contact',
		    'settings' => 'ti_contact_sidebar_socials_title',
			'priority' => '14'
		) );

	/*
    ** 404 Customizer
    */
    $wp_customize->add_section( 'constructzine_404' , array(
    	'title'       => __( '404 Page', 'ti' ),
    	'priority'    => 400,
	) );

		/* 404 - Title */
		$wp_customize->add_setting( 'ti_404_title' );
		$wp_customize->add_control( 'ti_404_title', array(
		    'label'    => __( '404 - Title:', 'ti' ),
		    'section'  => 'constructzine_404',
		    'settings' => 'ti_404_title',
			'priority' => '1',
		) );

		/* 404 - Title */
		$wp_customize->add_setting( 'ti_404_subtitle' );
		$wp_customize->add_control( 'ti_404_subtitle', array(
		    'label'    => __( '404 - Subtitle:', 'ti' ),
		    'section'  => 'constructzine_404',
		    'settings' => 'ti_404_subtitle',
			'priority' => '2',
		) );

		/* 404 - Content */
		$wp_customize->add_setting( 'ti_404_content' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_404_content', array(
		            'label' 	=> __( '404 - Content', 'ti' ),
		            'section' 	=> 'constructzine_404',
		            'settings' 	=> 'ti_404_content',
		            'priority' 	=> '3'
		        )
		    )
		);

}
add_action( 'customize_register', 'lawyeria_customizer' );

if( class_exists( 'WP_Customize_Control' ) ):
	class Example_Customize_Textarea_Control extends WP_Customize_Control {
	    public $type = 'textarea';

	    public function render_content() { ?>

	        <label>
	        	<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	        	<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	        </label>

	        <?php
	    }
	}
endif;

?>
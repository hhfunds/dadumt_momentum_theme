<?php 

function themename_customize_register($wp_customize){
    $wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'colors' );
	
	$wp_customize->add_panel('momentum_main_options', array(
        'theme_supports' => '',
        'title' => __('Momentum Options', 'momentum'),
        'description' => __('Panel to update momentum theme options', 'momentum'), // Include html tags such as <p>.
        'priority' => 10 // Mixed with top-level-section hierarchy.
    ));
		
		/* Start Momentum Slider Options */
        $wp_customize->add_section('momentum_slider_options', array(
            'title' => __('Slider Options', 'momentum'),
            'priority' => 30,
            'panel' => 'momentum_main_options'
        ));
			$wp_customize->add_setting( 'momentum[slider_checkbox]', array(
					'default' => 0,
					'type' => 'option',
					'sanitize_callback' => 'momentum_sanitize_checkbox',
			));
			$wp_customize->add_control( 'momentum[slider_checkbox]', array(
					'label'	=> 'Check if you want to enable slider', 'momentum',
					'section'	=> 'momentum_slider_options',
					'priority'	=> 3,
					'type'      => 'checkbox',
			));
			/* Start Momentum Slider1 Options */
			$wp_customize->add_setting('momentum[slider_picture1]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'slider_picture1', array(
			'label'    => __('Slider1', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_slider_options',
			'settings' => 'momentum[slider_picture1]',
			)));
			
			$wp_customize->add_setting('momentum[slider_picture1_title]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[slider_picture1_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_slider_options',
				'settings'   => 'momentum[slider_picture1_title]',
			));
			
			$wp_customize->add_setting('momentum[slider_picture1_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[slider_picture1_content]', array(
				'description' => sprintf(__('說明', 'momentum')),
				'section'    => 'momentum_slider_options',
				'settings'   => 'momentum[slider_picture1_content]',
			));
			/* End Momentum Slider1 Options */
			/* Start Momentum Slider2 Options */
			$wp_customize->add_setting('momentum[slider_picture2]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'slider_picture2', array(
			'label'    => __('Slider2', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_slider_options',
			'settings' => 'momentum[slider_picture2]',
			)));
			
			$wp_customize->add_setting('momentum[slider_picture2_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[slider_picture2_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_slider_options',
				'settings'   => 'momentum[slider_picture2_title]',
			));
			
			$wp_customize->add_setting('momentum[slider_picture2_content]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[slider_picture2_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_slider_options',
				'settings'   => 'momentum[slider_picture2_content]',
			));
			/* End Momentum Slider2 Options */
			/* Start Momentum Slider3 Options */
			$wp_customize->add_setting('momentum[slider_picture3]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'slider_picture3', array(
			'label'    => __('Slider3', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_slider_options',
			'settings' => 'momentum[slider_picture3]',
			)));
			
			$wp_customize->add_setting('momentum[slider_picture3_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[slider_picture3_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_slider_options',
				'settings'   => 'momentum[slider_picture3_title]',
			));
			
			$wp_customize->add_setting('momentum[slider_picture3_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[slider_picture3_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_slider_options',
				'settings'   => 'momentum[slider_picture3_content]',
			));
			/* End Momentum Slider3 Options */
		/* End Momentum Slider Options */
		
		/* Start Momentum Highlight Options */
        $wp_customize->add_section('momentum_highlight_options', array(
            'title' => __('Highlight Options', 'momentum'),
            'priority' => 30,
            'panel' => 'momentum_main_options'
        ));
			$wp_customize->add_setting( 'momentum[highlight_checkbox]', array(
					'default' => 0,
					'type' => 'option',
					'sanitize_callback' => 'momentum_sanitize_checkbox',
			));
			$wp_customize->add_control( 'momentum[highlight_checkbox]', array(
					'label'	=> 'Check if you want to enable highlight', 'momentum',
					'section'	=> 'momentum_highlight_options',
					'priority'	=> 3,
					'type'      => 'checkbox',
			));
			/* Start Momentum Highlight1 Options */
			$wp_customize->add_setting('momentum[highlight_picture1]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'highlight_picture1', array(
			'label'    => __('Highlight1', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_highlight_options',
			'settings' => 'momentum[highlight_picture1]',
			)));
			
			$wp_customize->add_setting('momentum[highlight_picture1_title]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[highlight_picture1_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_picture1_title]',
			));
			
			$wp_customize->add_setting('momentum[highlight_picture1_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[highlight_picture1_content]', array(
				'description' => sprintf(__('說明', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_picture1_content]',
			));
			
			$wp_customize->add_setting('momentum[highlight_picture1_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[highlight_picture1_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_picture1_link]',
			));
			/* End Momentum Highlight1 Options */
			/* Start Momentum Highlight2 Options */
			$wp_customize->add_setting('momentum[highlight_picture2]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'highlight_picture2', array(
			'label'    => __('Highlight2', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_highlight_options',
			'settings' => 'momentum[highlight_picture2]',
			)));
			
			$wp_customize->add_setting('momentum[highlight_picture2_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[highlight_picture2_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_picture2_title]',
			));
			
			$wp_customize->add_setting('momentum[highlight_picture2_content]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[highlight_picture2_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_picture2_content]',
			));
			
			$wp_customize->add_setting('momentum[highlight_picture2_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[highlight_picture2_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_picture2_link]',
			));
			/* End Momentum Highlight2 Options */
			/* Start Momentum Highlight3 Options */
			$wp_customize->add_setting('momentum[highlight_picture3]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'highlight_picture3', array(
			'label'    => __('Highlight3', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_highlight_options',
			'settings' => 'momentum[highlight_picture3]',
			)));
			
			$wp_customize->add_setting('momentum[highlight_picture3_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[highlight_picture3_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_picture3_title]',
			));
			
			$wp_customize->add_setting('momentum[highlight_picture3_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[highlight_picture3_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_picture3_content]',
			));
			
			$wp_customize->add_setting('momentum[highlight_picture3_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[highlight_picture3_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_picture3_link]',
			));
			/* End Momentum Highlight3 Options */
		/* End Momentum Highlight Options */
		
		/* Start Momentum News Options */
        $wp_customize->add_section('momentum_news_options', array(
            'title' => __('News Options', 'momentum'),
            'priority' => 30,
            'panel' => 'momentum_main_options'
        ));
			/* Start Momentum News1 Options */
			$wp_customize->add_setting('momentum[news_picture1]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'news_picture1', array(
			'label'    => __('News1', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_news_options',
			'settings' => 'momentum[news_picture1]',
			)));
			
			$wp_customize->add_setting('momentum[news_picture1_title]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_picture1_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_picture1_title]',
			));
			
			$wp_customize->add_setting('momentum[news_picture1_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_picture1_content]', array(
				'description' => sprintf(__('說明', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_picture1_content]',
			));
			
			$wp_customize->add_setting('momentum[news_picture1_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_picture1_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_picture1_link]',
			));
			/* End Momentum News1 Options */
			/* Start Momentum News2 Options */
			$wp_customize->add_setting('momentum[news_picture2]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'news_picture2', array(
			'label'    => __('News2', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_news_options',
			'settings' => 'momentum[news_picture2]',
			)));
			
			$wp_customize->add_setting('momentum[news_picture2_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[news_picture2_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_picture2_title]',
			));
			
			$wp_customize->add_setting('momentum[news_picture2_content]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[news_picture2_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_picture2_content]',
			));
			
			$wp_customize->add_setting('momentum[news_picture2_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_picture2_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_picture2_link]',
			));
			/* End Momentum News2 Options */
			/* Start Momentum News3 Options */
			$wp_customize->add_setting('momentum[news_picture3]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'news_picture3', array(
			'label'    => __('News3', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_news_options',
			'settings' => 'momentum[news_picture3]',
			)));
			
			$wp_customize->add_setting('momentum[news_picture3_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[news_picture3_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_picture3_title]',
			));
			
			$wp_customize->add_setting('momentum[news_picture3_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_picture3_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_picture3_content]',
			));
			
			$wp_customize->add_setting('momentum[news_picture3_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_picture3_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_picture3_link]',
			));
			/* End Momentum News3 Options */
		/* End Momentum News Options */
		
		/* Start Momentum Facebook Comments Options */
        $wp_customize->add_section('momentum_FBComments_options', array(
            'title' => __('Facebook Comments Options', 'momentum'),
            'priority' => 30,
            'panel' => 'momentum_main_options'
        ));
			$wp_customize->add_setting( 'momentum[FBComments_single_checkbox]', array(
				'default' => 0,
				'type' => 'option',
				'sanitize_callback' => 'momentum_sanitize_checkbox',
			));
			$wp_customize->add_control( 'momentum[FBComments_single_checkbox]', array(
				'label'	=> 'Check if you want to enable posts facebook comments frame',
				'section'	=> 'momentum_FBComments_options',
				'priority'	=> 3,
				'type'      => 'checkbox',
			));
			
			$wp_customize->add_setting( 'momentum[FBComments_page_checkbox]', array(
				'default' => 0,
				'type' => 'option',
				'sanitize_callback' => 'momentum_sanitize_checkbox',
			));
			$wp_customize->add_control( 'momentum[FBComments_page_checkbox]', array(
				'label'	=> 'Check if you want to enable pages facebook comments frame',
				'section'	=> 'momentum_FBComments_options',
				'priority'	=> 3,
				'type'      => 'checkbox',
			));
			
			$wp_customize->add_setting('momentum[FBComments_AppID]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[FBComments_AppID]', array(
				'label' => 'Set Facebook App ID',
				'description' => sprintf(__('Tools: https://developers.facebook.com/tools/comments/', 'momentum')),
				'section'    => 'momentum_FBComments_options',
				'settings'   => 'momentum[FBComments_AppID]',
			));
			
			$wp_customize->add_setting('momentum[FBComments_colorscheme]', array(
				'default'        => 'light',
				'type'           => 'option',
		 
			));
			$wp_customize->add_control( 'momentum[FBComments_colorscheme]', array(
				'label'   => 'Color Scheme:',
				'section' => 'momentum_FBComments_options',
				'type'    => 'select',
				'choices'    => array(
					'light' => 'light',
					'dark' => 'dark',
				),
			));
			
			$wp_customize->add_setting('momentum[FBComments_number]', array(
				'default'        => '5',
				'type'           => 'option',
		 
			));
			$wp_customize->add_control( 'momentum[FBComments_number]', array(
				'label'   => 'Number of Comments:',
				'section' => 'momentum_FBComments_options',
				'type'    => 'select',
				'choices'    => array(
					'5' => '5',
					'10' => '10',
					'15' => '15',
					'20' => '20',
				),
			));
		/* End Momentum Facebook Comments Options */
}
 
add_action('customize_register', 'themename_customize_register');

function momentum_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

function dazzling_sanitize_typo_face( $input ) {
    global $typography_options,$typography_defaults;
    if ( array_key_exists( $input, $typography_options['faces'] ) ) {
        return $input;
    } else {
        return $typography_defaults['face'];
    }
}

?>
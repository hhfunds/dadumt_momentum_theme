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
					'label'	=> 'Check if you want to enable highlight wrapper', 'momentum',
					'section'	=> 'momentum_highlight_options',
					'priority'	=> 3,
					'type'      => 'checkbox',
			));
			/* Start Momentum Highlight1 Options */
			$wp_customize->add_setting('momentum[highlight_1_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'highlight_1_picture', array(
			'label'    => __('Highlight1', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_highlight_options',
			'settings' => 'momentum[highlight_1_picture]',
			)));
			
			$wp_customize->add_setting('momentum[highlight_1_title]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[highlight_1_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_1_title]',
			));
			
			$wp_customize->add_setting('momentum[highlight_1_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[highlight_1_content]', array(
				'description' => sprintf(__('說明', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_1_content]',
			));
			
			$wp_customize->add_setting('momentum[highlight_1_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[highlight_1_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_1_link]',
			));
			/* End Momentum Highlight1 Options */
			/* Start Momentum Highlight2 Options */
			$wp_customize->add_setting('momentum[highlight_2_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'highlight_2_picture', array(
			'label'    => __('Highlight2', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_highlight_options',
			'settings' => 'momentum[highlight_2_picture]',
			)));
			
			$wp_customize->add_setting('momentum[highlight_2_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[highlight_2_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_2_title]',
			));
			
			$wp_customize->add_setting('momentum[highlight_2_content]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[highlight_2_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_2_content]',
			));
			
			$wp_customize->add_setting('momentum[highlight_2_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[highlight_2_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_2_link]',
			));
			/* End Momentum Highlight2 Options */
			/* Start Momentum Highlight3 Options */
			$wp_customize->add_setting('momentum[highlight_3_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'highlight_3_picture', array(
			'label'    => __('Highlight3', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_highlight_options',
			'settings' => 'momentum[highlight_3_picture]',
			)));
			
			$wp_customize->add_setting('momentum[highlight_3_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[highlight_3_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_3_title]',
			));
			
			$wp_customize->add_setting('momentum[highlight_3_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[highlight_3_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_3_content]',
			));
			
			$wp_customize->add_setting('momentum[highlight_3_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[highlight_3_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_highlight_options',
				'settings'   => 'momentum[highlight_3_link]',
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
			$wp_customize->add_setting('momentum[news_1_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'news_1_picture', array(
			'label'    => __('News1', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_news_options',
			'settings' => 'momentum[news_1_picture]',
			)));
			
			$wp_customize->add_setting('momentum[news_1_title]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_1_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_1_title]',
			));
			
			$wp_customize->add_setting('momentum[news_1_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_1_content]', array(
				'description' => sprintf(__('說明', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_1_content]',
			));
			
			$wp_customize->add_setting('momentum[news_1_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_1_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_1_link]',
			));
			
			$wp_customize->add_setting('momentum[news_1_link2]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_1_link2]', array(
				'description' => sprintf(__('副標題連結', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_1_link2]',
			));
			/* End Momentum News1 Options */
			/* Start Momentum News2 Options */
			$wp_customize->add_setting('momentum[news_2_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'news_2_picture', array(
			'label'    => __('News2', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_news_options',
			'settings' => 'momentum[news_2_picture]',
			)));
			
			$wp_customize->add_setting('momentum[news_2_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[news_2_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_2_title]',
			));
			
			$wp_customize->add_setting('momentum[news_2_content]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[news_2_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_2_content]',
			));
			
			$wp_customize->add_setting('momentum[news_2_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_2_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_2_link]',
			));
			
			$wp_customize->add_setting('momentum[news_2_link2]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_2_link2]', array(
				'description' => sprintf(__('副標題連結', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_2_link2]',
			));
			/* End Momentum News2 Options */
			/* Start Momentum News3 Options */
			$wp_customize->add_setting('momentum[news_3_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'news_3_picture', array(
			'label'    => __('News3', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_news_options',
			'settings' => 'momentum[news_3_picture]',
			)));
			
			$wp_customize->add_setting('momentum[news_3_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[news_3_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_3_title]',
			));
			
			$wp_customize->add_setting('momentum[news_3_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_3_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_3_content]',
			));
			
			$wp_customize->add_setting('momentum[news_3_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_3_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_3_link]',
			));
			
			$wp_customize->add_setting('momentum[news_3_link2]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_3_link2]', array(
				'description' => sprintf(__('副標題連結', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_3_link2]',
			));
			/* End Momentum News3 Options */
			/* Start Momentum News4 Options */
			$wp_customize->add_setting('momentum[news_4_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'news_4_picture', array(
			'label'    => __('News4', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_news_options',
			'settings' => 'momentum[news_4_picture]',
			)));
			
			$wp_customize->add_setting('momentum[news_4_title]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_4_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_4_title]',
			));
			
			$wp_customize->add_setting('momentum[news_4_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_4_content]', array(
				'description' => sprintf(__('說明', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_4_content]',
			));
			
			$wp_customize->add_setting('momentum[news_4_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_4_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_4_link]',
			));
			
			$wp_customize->add_setting('momentum[news_4_link2]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_4_link2]', array(
				'description' => sprintf(__('副標題連結', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_4_link2]',
			));
			/* End Momentum News4 Options */
			/* Start Momentum News5 Options */
			$wp_customize->add_setting('momentum[news_5_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'news_5_picture', array(
			'label'    => __('News5', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_news_options',
			'settings' => 'momentum[news_5_picture]',
			)));
			
			$wp_customize->add_setting('momentum[news_5_title]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_5_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_5_title]',
			));
			
			$wp_customize->add_setting('momentum[news_5_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_5_content]', array(
				'description' => sprintf(__('說明', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_5_content]',
			));
			
			$wp_customize->add_setting('momentum[news_5_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_5_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_5_link]',
			));
			
			$wp_customize->add_setting('momentum[news_5_link2]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_5_link2]', array(
				'description' => sprintf(__('副標題連結', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_5_link2]',
			));
			/* End Momentum News5 Options */
			/* Start Momentum News6 Options */
			$wp_customize->add_setting('momentum[news_6_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'news_6_picture', array(
			'label'    => __('News6', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_news_options',
			'settings' => 'momentum[news_6_picture]',
			)));
			
			$wp_customize->add_setting('momentum[news_6_title]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_6_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_6_title]',
			));
			
			$wp_customize->add_setting('momentum[news_6_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_6_content]', array(
				'description' => sprintf(__('說明', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_6_content]',
			));
			
			$wp_customize->add_setting('momentum[news_6_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_6_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_6_link]',
			));
			
			$wp_customize->add_setting('momentum[news_6_link2]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[news_6_link2]', array(
				'description' => sprintf(__('副標題連結', 'momentum')),
				'section'    => 'momentum_news_options',
				'settings'   => 'momentum[news_6_link2]',
			));
			/* End Momentum News6 Options */
		/* End Momentum News Options */
		
		/* Start Momentum Project Options */
        $wp_customize->add_section('momentum_project_options', array(
            'title' => __('Project Options', 'momentum'),
            'priority' => 30,
            'panel' => 'momentum_main_options'
        ));
			$wp_customize->add_setting( 'momentum[project_checkbox]', array(
					'default' => 0,
					'type' => 'option',
					'sanitize_callback' => 'momentum_sanitize_checkbox',
			));
			$wp_customize->add_control( 'momentum[project_checkbox]', array(
					'label'	=> 'Check if you want to enable project wrapper', 'momentum',
					'section'	=> 'momentum_project_options',
					'priority'	=> 3,
					'type'      => 'checkbox',
			));
			
			/* Start Momentum Project1 Options */
			$wp_customize->add_setting('momentum[project_1_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'project_1_picture', array(
			'label'    => __('Project1', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_project_options',
			'settings' => 'momentum[project_1_picture]',
			)));
			
			$wp_customize->add_setting('momentum[project_1_title]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[project_1_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_1_title]',
			));
			
			$wp_customize->add_setting('momentum[project_1_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[project_1_content]', array(
				'description' => sprintf(__('說明', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_1_content]',
			));
			
			$wp_customize->add_setting('momentum[project_1_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[project_1_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_1_link]',
			));
			/* End Momentum Project1 Options */
			/* Start Momentum Project2 Options */
			$wp_customize->add_setting('momentum[project_2_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'project_2_picture', array(
			'label'    => __('Project2', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_project_options',
			'settings' => 'momentum[project_2_picture]',
			)));
			
			$wp_customize->add_setting('momentum[project_2_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[project_2_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_2_title]',
			));
			
			$wp_customize->add_setting('momentum[project_2_content]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[project_2_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_2_content]',
			));
			
			$wp_customize->add_setting('momentum[project_2_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[project_2_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_2_link]',
			));
			/* End Momentum Project2 Options */
			/* Start Momentum Project3 Options */
			$wp_customize->add_setting('momentum[project_3_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'project_3_picture', array(
			'label'    => __('Project3', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_project_options',
			'settings' => 'momentum[project_3_picture]',
			)));
			
			$wp_customize->add_setting('momentum[project_3_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[project_3_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_3_title]',
			));
			
			$wp_customize->add_setting('momentum[project_3_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[project_3_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_3_content]',
			));
			
			$wp_customize->add_setting('momentum[project_3_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[project_3_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_3_link]',
			));
			/* End Momentum Project3 Options */
			/* Start Momentum Project4 Options */
			$wp_customize->add_setting('momentum[project_4_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'project_4_picture', array(
			'label'    => __('Project4', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_project_options',
			'settings' => 'momentum[project_4_picture]',
			)));
			
			$wp_customize->add_setting('momentum[project_4_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[project_4_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_4_title]',
			));
			
			$wp_customize->add_setting('momentum[project_4_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[project_4_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_4_content]',
			));
			
			$wp_customize->add_setting('momentum[project_4_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[project_4_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_4_link]',
			));
			/* End Momentum Project4 Options */
			/* Start Momentum Project5 Options */
			$wp_customize->add_setting('momentum[project_5_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'project_5_picture', array(
			'label'    => __('Project5', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_project_options',
			'settings' => 'momentum[project_5_picture]',
			)));
			
			$wp_customize->add_setting('momentum[project_5_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[project_5_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_5_title]',
			));
			
			$wp_customize->add_setting('momentum[project_5_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[project_5_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_5_content]',
			));
			
			$wp_customize->add_setting('momentum[project_5_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[project_5_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_5_link]',
			));
			/* End Momentum Project5 Options */
			/* Start Momentum Project6 Options */
			$wp_customize->add_setting('momentum[project_6_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'project_6_picture', array(
			'label'    => __('Project6', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_project_options',
			'settings' => 'momentum[project_6_picture]',
			)));
			
			$wp_customize->add_setting('momentum[project_6_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[project_6_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_6_title]',
			));
			
			$wp_customize->add_setting('momentum[project_6_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[project_6_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_6_content]',
			));
			
			$wp_customize->add_setting('momentum[project_6_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[project_6_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_6_link]',
			));
			/* End Momentum Project6 Options */
			/* Start Momentum Project7 Options */
			$wp_customize->add_setting('momentum[project_7_picture]', array(
			'default'           => 'image.jpg',
			'type'           => 'option',
			));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'project_7_picture', array(
			'label'    => __('Project7', 'momentum'),
			'description' => sprintf(__('圖片', 'momentum')),
			'section'  => 'momentum_project_options',
			'settings' => 'momentum[project_7_picture]',
			)));
			
			$wp_customize->add_setting('momentum[project_7_title]', array(
				'default'        => '',
				'type'           => 'option',
			));
			$wp_customize->add_control('momentum[project_7_title]', array(
				'description' => sprintf(__('標題', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_7_title]',
			));
			
			$wp_customize->add_setting('momentum[project_7_content]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[project_7_content]', array(
				'description' => sprintf(__('內容', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_7_content]',
			));
			
			$wp_customize->add_setting('momentum[project_7_link]', array(
				'default'        => '',
				'type'           => 'option',		 
			));
			$wp_customize->add_control('momentum[project_7_link]', array(
				'description' => sprintf(__('連結', 'momentum')),
				'section'    => 'momentum_project_options',
				'settings'   => 'momentum[project_7_link]',
			));
			/* End Momentum Project7 Options */
		/* End Momentum Project Options */
		
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
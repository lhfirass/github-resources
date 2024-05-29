<?php

/* vc defaults
----*/

	vc_remove_param('vc_section', 'full_width');
	vc_remove_param('vc_row', 'full_width');
	vc_remove_param('vc_row_inner', 'gap');
	vc_remove_param('vc_row', 'gap');
	vc_remove_param('vc_row', 'parallax');
	vc_remove_param('vc_row', 'parallax_image');
	vc_remove_param('vc_row', 'video_bg');
	vc_remove_param('vc_row', 'video_bg_url');
	vc_remove_param('vc_row', 'video_bg_parallax');
	vc_remove_param('vc_row', 'parallax_speed_bg');
	vc_remove_param('vc_row', 'parallax_speed_video');

/* vc_row
----*/

	/* defaults
	----*/

		vc_add_param('vc_row', array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Row stretch', 'equipo' ),
			'param_name' => 'full_width',
			'value'      => array(
				esc_html__( 'No stretching', 'equipo' )           => 'stretch_no',
				esc_html__( 'Stretch row and content', 'equipo' ) => 'stretch_row_content',
			),
			'weight' => 1,
			'description' => esc_html__( '"No stretching" alignes the row with the main theme container, Stretch row and content" makes the row and content full width', 'equipo' )
		));

		$column_gap_values = array(
			esc_html__('0px', 'equipo')    => '0',
			esc_html__('2px', 'equipo')    => '2',
			esc_html__('4px', 'equipo')    => '4',
			esc_html__('8px', 'equipo')    => '8',
			esc_html__('16px', 'equipo')   => '16',
			esc_html__('24px', 'equipo')   => '24',
			esc_html__('32px', 'equipo')   => '32',
			esc_html__('40px', 'equipo')   => '40',
			esc_html__('48px', 'equipo')   => '48',
			esc_html__('56px', 'equipo')   => '56',
			esc_html__('64px', 'equipo')   => '64',
			esc_html__('72px', 'equipo')   => '72',
			esc_html__('80px', 'equipo')   => '80',
		);

		vc_add_param('vc_row', array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Columns gap', 'equipo' ),
			'param_name' => 'gap',
			'weight'     => 1,
			'value'      => $column_gap_values,
			'std' => '24'
		));

		vc_add_param('vc_row_inner', array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Columns gap', 'equipo' ),
			'param_name' => 'gap',
			'weight'     => 1,
			'value'      => $column_gap_values,
			'std' => '24'
		));

		vc_add_param('vc_row_inner', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Header builder','equipo'),
			'heading'    => esc_html__( 'Z index (integer without any string)', 'equipo' ),
			'description'=> esc_html__( 'Higher value places the row on top', 'equipo' ),
			'param_name' => 'z_index',
		));

		vc_add_param('vc_row_inner', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Header builder','equipo'),
			'heading'    => esc_html__( 'Height in px (without any string)', 'equipo' ),
			'param_name' => 'row_height',
		));

		vc_add_param('vc_row_inner', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Header builder','equipo'),
			'heading'    => esc_html__( 'Height in px for sticky header version (without any string)', 'equipo' ),
			'param_name' => 'row_height_sticky',
		));

		vc_add_param('vc_row_inner', array(
			'type'       => 'checkbox',
			'group'      => esc_html__('Header builder','equipo'),
			'heading'    => esc_html__( 'Hide on sticky header version?', 'equipo' ),
			'param_name' => 'hide_row_sticky',
		));

		vc_add_param('vc_row_inner', array(
			'type'       => 'textfield',
			'heading'    => esc_html__('Element id','equipo'),
			'group'      => esc_html__('Header builder','equipo'),
			"class"      => "element-attr-hide",
			'param_name' => 'element_id',
			'value'      => '',
		));

		vc_add_param('vc_row_inner', array(
			'type'       => 'textarea',
			'heading'    => esc_html__('Element css','equipo'),
			'group'      => esc_html__('Header builder','equipo'),
			"class"      => "element-attr-hide",
			'param_name' => 'element_css',
			'value'      => '',
		));

	/* parallax
	----*/

		vc_add_param('vc_row', array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Parallax background', 'equipo' ),
			'param_name' => 'parallax',
			'group'      => esc_html__('Background options','equipo'),
		));

		vc_add_param('vc_row', array(
			'type'       => 'attach_image',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Parallax image', 'equipo' ),
			'param_name' => 'parallax_image',
			'dependency' => Array('element' => 'parallax', 'value' => 'true')
		));

		vc_add_param('vc_row', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Parallax duration', 'equipo' ),
			'param_name' => 'parallax_duration_bg',
			'description'=> esc_html__('Enter parallax duration in ms','equipo'),
			'dependency' => Array('element' => 'parallax', 'value' => 'true'),
			'default'    => '0'
		));

		vc_add_param('vc_row', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Parallax speed', 'equipo' ),
			'param_name' => 'parallax_speed_bg',
			'description'=> esc_html__('Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)','equipo'),
			'dependency' => Array('element' => 'parallax', 'value' => 'true'),
			'default'    => '1.5'
		));

	/* video
	----*/

		vc_add_param('vc_row', array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Background video', 'equipo' ),
			'param_name' => 'video_bg',
			'group'      => esc_html__('Background options','equipo'),
		));

		vc_add_param('vc_row', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Background video mp4 file url', 'equipo' ),
			'param_name' => 'video_bg_mp4',
			'dependency' => Array('element' => 'video_bg', 'value' => 'true')
		));

		vc_add_param('vc_row', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Background video webm file url', 'equipo' ),
			'param_name' => 'video_bg_webm',
			'dependency' => Array('element' => 'video_bg', 'value' => 'true')
		));

		vc_add_param('vc_row', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Background video ogv file url', 'equipo' ),
			'param_name' => 'video_bg_ogv',
			'dependency' => Array('element' => 'video_bg', 'value' => 'true')
		));

		vc_add_param('vc_row', array(
			'type'       => 'attach_image',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Video overlay', 'equipo' ),
			'param_name' => 'video_bg_overlay',
			'dependency' => Array('element' => 'video_bg', 'value' => 'true')
		));

		vc_add_param('vc_row', array(
			'type'       => 'attach_image',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Video placeholder', 'equipo' ),
			'param_name' => 'video_bg_placeholder',
			'dependency' => Array('element' => 'video_bg', 'value' => 'true')
		));

		vc_add_param('vc_row', array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Video parallax', 'equipo' ),
			'param_name' => 'video_bg_parallax',
			'group'      => esc_html__('Background options','equipo'),
			'dependency' => Array(
				'element' => 'video_bg', 'value' => 'true',

			)
		));

		vc_add_param('vc_row', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Background video parallax speed', 'equipo' ),
			'param_name' => 'video_bg_parallax_speed',
			'description'=> esc_html__('Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)','equipo'),
			'dependency' => Array(
				'element' => 'video_bg_parallax', 'value' => 'true',
			),
			'default'    => '1.5'
		));

		vc_add_param('vc_row', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Background video parallax duration', 'equipo' ),
			'param_name' => 'video_bg_parallax_duration',
			'description'=> esc_html__('Enter parallax duration in ms','equipo'),
			'dependency' => Array(
				'element' => 'video_bg_parallax', 'value' => 'true',
			),
			'default'    => '0'
		));

	/* fixed
	----*/

		vc_add_param('vc_row', array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Fixed background', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'fixed_bg',
		));

		vc_add_param('vc_row', array(
			'type'       => 'attach_image',
			'heading'    => esc_html__( 'Fixed background image', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'fixed_bg_image',
			'dependency' => Array('element' => 'fixed_bg', 'value' => 'true')
		));

	/* animated
	----*/

		vc_add_param('vc_row', array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Animated background', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'animated_bg',
		));

		vc_add_param('vc_row', array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Animated background direction', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'animated_bg_dir',
			'value'     => array(
				esc_html__('Horizontal','equipo')  => 'horizontal',
				esc_html__('Vertical','equipo')  => 'vertical',
			),
			'dependency' => Array('element' => 'animated_bg', 'value' => 'true')
		));

		vc_add_param('vc_row', array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Animated background speed in ms (default is 35000)', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'animated_bg_speed',
			'dependency' => Array('element' => 'animated_bg', 'value' => 'true')
		));

		vc_add_param('vc_row', array(
			'type'       => 'attach_image',
			'heading'    => esc_html__( 'Animated background image', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'animated_bg_image',
			'dependency' => Array('element' => 'animated_bg', 'value' => 'true')
		));

	/* header buiilder tab
	----*/

		vc_add_param('vc_row', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Header builder','equipo'),
			'heading'    => esc_html__( 'Height in px (without any string)', 'equipo' ),
			'param_name' => 'row_height',
		));

		vc_add_param('vc_row', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Header builder','equipo'),
			'heading'    => esc_html__( 'Z index (integer without any string)', 'equipo' ),
			'description'=> esc_html__( 'Higher value places the row on top', 'equipo' ),
			'param_name' => 'z_index',
		));

		vc_add_param('vc_row', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Header builder','equipo'),
			'heading'    => esc_html__( 'Height in px for sticky header version (without any string)', 'equipo' ),
			'param_name' => 'row_height_sticky',
		));

		vc_add_param('vc_row', array(
			'type'       => 'colorpicker',
			'group'      => esc_html__('Header builder','equipo'),
			'heading'    => esc_html__( 'Background color of sticky header version', 'equipo' ),
			'param_name' => 'row_background_sticky',
		));

		vc_add_param('vc_row', array(
			'type'       => 'checkbox',
			'group'      => esc_html__('Header builder','equipo'),
			'heading'    => esc_html__( 'Hide from default header version?', 'equipo' ),
			'param_name' => 'hide_row_default',
		));

		vc_add_param('vc_row', array(
			'type'       => 'checkbox',
			'group'      => esc_html__('Header builder','equipo'),
			'heading'    => esc_html__( 'Hide on sticky header version?', 'equipo' ),
			'param_name' => 'hide_row_sticky',
		));

		vc_add_param('vc_row', array(
			'type'       => 'textfield',
			'heading'    => esc_html__('Element id','equipo'),
			'group'      => esc_html__('Header builder','equipo'),
			"class"      => "element-attr-hide",
			'param_name' => 'element_id',
			'value'      => '',
		));

		vc_add_param('vc_row', array(
			'type'       => 'textarea',
			'heading'    => esc_html__('Element css','equipo'),
			'group'      => esc_html__('Header builder','equipo'),
			"class"      => "element-attr-hide",
			'param_name' => 'element_css',
			'value'      => '',
		));

	/* equipo
	----*/

		vc_add_param('vc_row', array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Top gradient border', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'top_gradient',
		));

		vc_add_param('vc_row', array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Bottom gradient border', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'bottom_gradient',
		));

		vc_add_param('vc_row', array(
			'type'       => 'colorpicker',
			'heading'    => esc_html__( 'Gradient border color', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'gradient_color',
			'default'    => '#ffffff'
		));

		vc_add_param('vc_row', array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Grid overlay', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'grid_overlay',
			'value'     => array(
				esc_html__('None','equipo')  => 'none',
				esc_html__('White','equipo')  => 'white',
				esc_html__('Black','equipo')  => 'black',
			),
		));

		vc_add_param('vc_row', array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Curtain', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'curtain',
			'value'     => array(
				esc_html__('None', 'equipo')   => 'none',
				esc_html__('Curtain from left', 'equipo')   => 'curtain-left',
				esc_html__('Curtain from right', 'equipo')  => 'curtain-right',
				esc_html__('Curtain from top', 'equipo')    => 'curtain-top',
				esc_html__('Curtain from bottom', 'equipo') => 'curtain-bottom',
			),
		));

		vc_add_param('vc_row', array(
			'type'       => 'colorpicker',
			'heading'    => esc_html__( 'Curtain color', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'curtain_color',
			'dependency' => Array('element' => 'curtain', 'value' => array('curtain-left','curtain-right','curtain-top','curtain-bottom'))
		));

/* vc_column
----*/

	vc_remove_param('vc_column', 'parallax');
	vc_remove_param('vc_column', 'parallax_image');
	vc_remove_param('vc_column', 'video_bg');
	vc_remove_param('vc_column', 'video_bg_url');
	vc_remove_param('vc_column', 'video_bg_parallax');
	vc_remove_param('vc_column', 'parallax_speed_bg');
	vc_remove_param('vc_column', 'parallax_speed_video');

	$animation_delay_values = array();

	for ($i=0; $i <= 2000; $i = $i + 50) {
		$animation_delay_values[$i.esc_html__('ms', 'equipo')] = $i;
	}

	vc_add_param('vc_column', array(
		'type'       => 'dropdown',
		'heading'    => esc_html__( 'Animation delay in ms (example 300)', 'equipo' ),
		'param_name' => 'animation_delay',
		'weight'     => 1,
		'value'      => $animation_delay_values
	));

	vc_add_param('vc_column', array(
		'type'       => 'dropdown',
		'heading'    => esc_html__( 'Text align', 'equipo' ),
		'param_name' => 'text_align',
		'value'      => array(
			esc_html__('None','equipo')   => 'none',
			esc_html__('Left','equipo')   => 'left',
			esc_html__('Right','equipo')  => 'right',
			esc_html__('Center','equipo') => 'center'
		)
	));

	vc_add_param('vc_column', array(
		'type'       => 'checkbox',
		'heading'    => esc_html__( 'Shadow', 'equipo' ),
		'group'      => esc_html__( 'Design Options', 'equipo' ),
		'param_name' => 'shadow',
		'weight'     => 1,
		'value'      => ''
	));

	vc_add_param('vc_column', array(
		'type'       => 'crp',
		'heading'    => esc_html__( 'Responsive padding', 'equipo' ),
		'group'      => esc_html__('Responsive Options','equipo'),
		'param_name' => 'crp',
	));

	vc_add_param('vc_column', array(
		'type'       => 'textfield',
		'heading'    => esc_html__('Element id','equipo'),
		"class"      => "element-attr-hide",
		'param_name' => 'element_id',
		'value'      => '',
	));

	vc_add_param('vc_column', array(
		'type'       => 'textarea',
		'heading'    => esc_html__('Element css','equipo'),
		"class"      => "element-attr-hide",
		'param_name' => 'element_css',
		'value'      => '',
	));

	/* parallax
	----*/

		vc_add_param('vc_column', array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Parallax background', 'equipo' ),
			'param_name' => 'parallax',
			'group'      => esc_html__('Background options','equipo'),
		));

		vc_add_param('vc_column', array(
			'type'       => 'attach_image',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Parallax image', 'equipo' ),
			'param_name' => 'parallax_image',
			'dependency' => Array('element' => 'parallax', 'value' => 'true')
		));

		vc_add_param('vc_column', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Parallax speed', 'equipo' ),
			'param_name' => 'parallax_speed_bg',
			'description'=> esc_html__('Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)','equipo'),
			'dependency' => Array('element' => 'parallax', 'value' => 'true'),
			'default'    => '1.5'
		));

		vc_add_param('vc_column', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Parallax duration', 'equipo' ),
			'param_name' => 'parallax_duration_bg',
			'description'=> esc_html__('Enter parallax duration in ms','equipo'),
			'dependency' => Array('element' => 'parallax', 'value' => 'true'),
			'default'    => '0'
		));

	/* video
	----*/

		vc_add_param('vc_column', array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Background video', 'equipo' ),
			'param_name' => 'video_bg',
			'group'      => esc_html__('Background options','equipo'),
		));

		vc_add_param('vc_column', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Background video mp4 file url', 'equipo' ),
			'param_name' => 'video_bg_mp4',
			'dependency' => Array('element' => 'video_bg', 'value' => 'true')
		));

		vc_add_param('vc_column', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Background video webm file url', 'equipo' ),
			'param_name' => 'video_bg_webm',
			'dependency' => Array('element' => 'video_bg', 'value' => 'true')
		));

		vc_add_param('vc_column', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Background video ogv file url', 'equipo' ),
			'param_name' => 'video_bg_ogv',
			'dependency' => Array('element' => 'video_bg', 'value' => 'true')
		));

		vc_add_param('vc_column', array(
			'type'       => 'attach_image',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Video overlay', 'equipo' ),
			'param_name' => 'video_bg_overlay',
			'dependency' => Array('element' => 'video_bg', 'value' => 'true')
		));

		vc_add_param('vc_column', array(
			'type'       => 'attach_image',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Video placeholder', 'equipo' ),
			'param_name' => 'video_bg_placeholder',
			'dependency' => Array('element' => 'video_bg', 'value' => 'true')
		));

		vc_add_param('vc_column', array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Video parallax', 'equipo' ),
			'param_name' => 'video_bg_parallax',
			'group'      => esc_html__('Background options','equipo'),
			'dependency' => Array(
				'element' => 'video_bg', 'value' => 'true',

			)
		));

		vc_add_param('vc_column', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Background video parallax speed', 'equipo' ),
			'param_name' => 'video_bg_parallax_speed',
			'description'=> esc_html__('Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)','equipo'),
			'dependency' => Array(
				'element' => 'video_bg_parallax', 'value' => 'true',
			),
			'default'    => '1.5'
		));

		vc_add_param('vc_column', array(
			'type'       => 'textfield',
			'group'      => esc_html__('Background options','equipo'),
			'heading'    => esc_html__( 'Background video parallax duration', 'equipo' ),
			'param_name' => 'video_bg_parallax_duration',
			'description'=> esc_html__('Enter parallax duration in ms','equipo'),
			'dependency' => Array(
				'element' => 'video_bg_parallax', 'value' => 'true',
			),
			'default'    => '1.5'
		));

	/* fixed
	----*/

		vc_add_param('vc_column', array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Fixed background', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'fixed_bg',
		));

		vc_add_param('vc_column', array(
			'type'       => 'attach_image',
			'heading'    => esc_html__( 'Fixed background image', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'fixed_bg_image',
			'dependency' => Array('element' => 'fixed_bg', 'value' => 'true')
		));

	/* animated
	----*/

		vc_add_param('vc_column', array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Animated background', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'animated_bg',
		));

		vc_add_param('vc_column', array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Animated background direction', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'animated_bg_dir',
			'value'     => array(
				esc_html__('Horizontal','equipo')  => 'horizontal',
				esc_html__('Vertical','equipo')  => 'vertical',
			),
			'dependency' => Array('element' => 'animated_bg', 'value' => 'true')
		));

		vc_add_param('vc_column', array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Animated background speed in ms (default is 35000)', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'animated_bg_speed',
			'dependency' => Array('element' => 'animated_bg', 'value' => 'true')
		));

		vc_add_param('vc_column', array(
			'type'       => 'attach_image',
			'heading'    => esc_html__( 'Animated background image', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'animated_bg_image',
			'dependency' => Array('element' => 'animated_bg', 'value' => 'true')
		));

		vc_add_param('vc_column', array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Curtain', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'curtain',
			'value'     => array(
				esc_html__('None', 'equipo')   => 'none',
				esc_html__('Curtain from left', 'equipo')   => 'curtain-left',
				esc_html__('Curtain from right', 'equipo')  => 'curtain-right',
				esc_html__('Curtain from top', 'equipo')    => 'curtain-top',
				esc_html__('Curtain from bottom', 'equipo') => 'curtain-bottom',
			),
		));

		vc_add_param('vc_column', array(
			'type'       => 'colorpicker',
			'heading'    => esc_html__( 'Curtain color', 'equipo' ),
			'group'      => esc_html__('Background options','equipo'),
			'param_name' => 'curtain_color',
			'dependency' => Array('element' => 'curtain', 'value' => array('curtain-left','curtain-right','curtain-top','curtain-bottom'))
		));

/* vc_column_text
----*/

	vc_add_param('vc_column_text', array(
		'type'       => 'textfield',
		'heading'    => esc_html__('Element id','equipo'),
		"class"      => "element-attr-hide",
		'param_name' => 'element_id',
		'value'      => '',
	));

	vc_add_param('vc_column_text', array(
		'type'       => 'textarea',
		'heading'    => esc_html__('Element css','equipo'),
		"class"      => "element-attr-hide",
		'param_name' => 'element_css',
		'value'      => '',
	));

	vc_add_param('vc_column_text', array(
		'type'       => 'dropdown',
		'heading'    => esc_html__( 'Animation delay in ms (example 300)', 'equipo' ),
		'param_name' => 'animation_delay',
		'weight'     => 1,
		'value'      => $animation_delay_values
	));

	function equipo_enovathemes_remove_woocommerce() {
	    if (class_exists('Woocommerce')) {
	        vc_remove_element( 'recent_products' );
			vc_remove_element( 'featured_products' );
			vc_remove_element( 'product' );
			vc_remove_element( 'products' );
			vc_remove_element( 'product_category' );
			vc_remove_element( 'product_categories' );
			vc_remove_element( 'sale_products' );
			vc_remove_element( 'best_selling_products' );
			vc_remove_element( 'top_rated_products' );
			vc_remove_element( 'related_products' );
			vc_remove_element( 'product_attribute' );
	    }
	}
	add_action( 'vc_build_admin_page', 'equipo_enovathemes_remove_woocommerce', 11 );
	add_action( 'vc_load_shortcode', 'equipo_enovathemes_remove_woocommerce', 11 );

if (defined( 'ENOVATHEMES_ADDONS' )) {
	add_action( 'init', 'equipo_enovathemes_integrateVC');
    function equipo_enovathemes_integrateVC() {

    	global $equipo_enovathemes;

		$main_color = (isset($GLOBALS['equipo_enovathemes']['main-color']) && $GLOBALS['equipo_enovathemes']['main-color']) ? $GLOBALS['equipo_enovathemes']['main-color'] : '#ffb700';
		$area_color = (isset($GLOBALS['equipo_enovathemes']['area-color']) && $GLOBALS['equipo_enovathemes']['area-color']) ? $GLOBALS['equipo_enovathemes']['area-color'] : '#e0f1fb';

    	$google_fonts_family = array('Theme default');

		$google_fonts = enovathemes_addons_google_fonts();

		if (!is_wp_error( $google_fonts ) ) {

			foreach ( $google_fonts as $font ) {
				array_push($google_fonts_family, $font['family']);
			}

		}

    	$animation_delay_values = array();

		for ($i=0; $i <= 2000; $i = $i + 50) {
			$animation_delay_values[$i.esc_html__('ms', 'equipo')] = $i;
		}

		$typography_values = array('Inherit'=>'i');
		for ($i=10; $i <= 80; $i++) {
	        $typography_values[$i.esc_html__('px', 'equipo')] = $i;
	    }

    	$order_by_values = array(
			esc_html__( 'Date', 'equipo' ) => 'date',
			esc_html__( 'ID', 'equipo' ) => 'ID',
			esc_html__( 'Author', 'equipo' ) => 'author',
			esc_html__( 'Title', 'equipo' ) => 'title',
			esc_html__( 'Modified', 'equipo' ) => 'modified',
			esc_html__( 'Random', 'equipo' ) => 'rand',
			esc_html__( 'Comment count', 'equipo' ) => 'comment_count',
			esc_html__( 'Menu order', 'equipo' ) => 'menu_order',
		);

		$order_way_values = array(
			esc_html__( 'Ascending', 'equipo' ) => 'ASC',
			esc_html__( 'Descending', 'equipo' ) => 'DESC',
		);

		$operator_values = array(
			esc_html__( 'IN', 'equipo' ) => 'IN',
			esc_html__( 'NOT IN', 'equipo' ) => 'NOT IN',
			esc_html__( 'AND', 'equipo' ) => 'AND',
		);

		$animation_values = array(
			esc_html__('None', 'equipo')     => 'none',
			esc_html__('Fade In', 'equipo')  => 'fadeIn',
			esc_html__('Move Up', 'equipo')  => 'moveUp',
		);

		$size_values_box = array(
			esc_html__('Small', 'equipo')        => 'small',
			esc_html__('Medium', 'equipo')       => 'medium',
			esc_html__('Large', 'equipo')        => 'large'
		);

		$size_values_default = array(
			esc_html__('Small', 'equipo')        => 'small',
			esc_html__('Medium', 'equipo')       => 'medium',
			esc_html__('Large', 'equipo')        => 'large'
		);

		$size_values_extra = array(
			esc_html__('Extra small', 'equipo')  => 'extra-small',
			esc_html__('Small', 'equipo')        => 'small',
			esc_html__('Medium', 'equipo')       => 'medium',
			esc_html__('Large', 'equipo')        => 'large',
			esc_html__('Extra large', 'equipo')  => 'large-x',
			esc_html__('Extra Extra large', 'equipo')  => 'large-xx'
		);

		$font_weight_values = array(
			'100'  => '100',
			'200'  => '200',
			'300'  => '300',
			'400'  => '400',
			'500'  => '500',
			'600'  => '600',
			'700'  => '700',
			'800'  => '800',
			'900'  => '900',
		);

		$font_size_values = array(esc_html__('Inherit', 'equipo') => 'inherit');
		for ($i=0; $i <= 72; $i++) {
			$font_size_values[$i.esc_html__('px', 'equipo')] = $i.'px';
		}

		$line_height_values = array(esc_html__('Inherit', 'equipo') => 'inherit');
		for ($i=0; $i <= 80; $i++) {
			$line_height_values[$i.esc_html__('px', 'equipo')] = $i.'px';
		}

		$align_values = array(
			esc_html__('Left','equipo')   => 'left',
			esc_html__('Right','equipo')  => 'right',
			esc_html__('Center','equipo') => 'center'
		);

		$align_values_extended = array(
			esc_html__('None','equipo')   => 'none',
			esc_html__('Left','equipo')   => 'left',
			esc_html__('Right','equipo')  => 'right',
			esc_html__('Center','equipo') => 'center'
		);

		$logic_values = array(
			esc_html__('False','equipo')   => 'false',
			esc_html__('True','equipo')  => 'true',
		);

		$animation_type_values = array(
			esc_html__('Sequential','equipo')  => 'sequential',
			esc_html__('Random','equipo')      => 'random'
		);

		$image_size_values = array(
			'full'      => 'full',
			'large'     => 'large',
			'medium'    => 'medium',
			'thumbnail' => 'thumbnail',
		);

		$image_overlay_values = array(
			esc_html__('Overlay fade','equipo') 						 => 'overlay-fade',
			esc_html__('Overlay fade with image zoom','equipo')         => 'overlay-fade-zoom',
			esc_html__('Overlay fade with extreme image zoom','equipo') => 'overlay-fade-zoom-extreme',
			esc_html__('Overlay move fluid','equipo')                   => 'overlay-move',
			esc_html__('Transform','equipo')                            => 'transform'
		);

		$image_caption_values = array(
			esc_html__('Caption up','equipo') 					  => 'caption-up',
			esc_html__("Caption up and image up", 'equipo') => "caption-up-image"
		);

		$layout_type_values = array(
			esc_html__('Grid', 'equipo')     => 'grid',
			esc_html__('Carousel', 'equipo') => 'carousel',
		);

		$gap_values = array();

		for ($i=0; $i <= 80; $i = $i + 2) {
			$gap_values[$i.esc_html__('px', 'equipo')] = $i;
		}

		$social_links_array = enovathemes_addons_social_icons(get_template_directory().'/images/icons/social/');

		$menus = equipo_enovathemes_get_all_menus();

		$menu_list = array("choose" => esc_html__('Choose','equipo'));

		foreach ($menus as $menu => $attr) {
			$menu_list[$attr->slug] = $attr->name;
		}

		$menu_list = array_flip($menu_list);

		/* ELEMENTS
		----*/

			/* TYPOGRAPHY
			----*/

				/* et_heading
				----*/

			    	vc_map(array(
			    		'name'                    => esc_html__('Heading','equipo'),
			    		'description'             => esc_html__('Add/animate heading','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_heading',
			    		'class'                   => 'et_heading font',
			    		'icon'                    => 'et_heading',
			    		'show_settings_on_create' => true,
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-heading.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-heading.js',
			    		'params'                  => array(
			    			array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Title','equipo'),
								'param_name' => 'content',
								'description'=> esc_html__('If you want to highlight/style a separate word, wrap it inside the span like this <span style="color: #XXXXXX">word</span>. If you need to break the sentence use the "_br_" special word','equipo'),
							),
							array(
								'param_name'=>'text_align',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Text align', 'equipo'),
								'value'     => $align_values
							),
							array(
								'param_name'=>'highlight',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Highlight', 'equipo'),
								'value'     => $logic_values
							),
							array(
								'param_name'=>'type',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Tag', 'equipo'),
								'value'     => array(
									'H1'  => 'h1',
									'H2'  => 'h2',
									'H3'  => 'h3',
									'H4'  => 'h4',
									'H5'  => 'h5',
									'H6'  => 'h6',
									'p'   => 'p',
									'div' => 'div',
								),
								'std' => 'h1'
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Link','equipo'),
								'param_name' => 'link',
								'value'      => '',
							),
							array(
								'param_name'=>'target',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Target', 'equipo'),
								'value'     => array(
									'_self'  => '_self',
									'_blank' => '_blank'
								)
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => '',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Text color','equipo'),
								'param_name' => 'text_color',
								'value'      => '#1c1c1e',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Background color','equipo'),
								'param_name' => 'background_color',
								'value'      => '',
							),
							array(
								'param_name'=>'font_family',
								'type'      => 'dropdown',
								'group'     => esc_html__('Typography', 'equipo'),
								'heading'   => esc_html__('Font family', 'equipo'),
								'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
								'value'     => $google_fonts_family,
							),
							array(
								'param_name'=>'font_weight',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Font weight', 'equipo'),
								'group'     => esc_html__('Typography', 'equipo'),
								'value'     => $font_weight_values,
							),
							array(
								'param_name'=>'font_subsets',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Font subsets', 'equipo'),
								'group'     => esc_html__('Typography', 'equipo'),
								'value'     => array(
									'latin' => 'latin',
								)
							),
							array(
								'type'       => 'textfield',
								'group'      => esc_html__('Typography', 'equipo'),
								'heading'    => esc_html__('Font size (without any string)','equipo'),
								'param_name' => 'font_size',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'group'   	 => esc_html__('Typography', 'equipo'),
								'heading'    => esc_html__('Letter spacing (without any string)','equipo'),
								'param_name' => 'letter_spacing',
								'value'      => ''
							),
							array(
								'type'       => 'textfield',
								'group'   	 => esc_html__('Typography', 'equipo'),
								'heading'    => esc_html__('Line height (without any string)','equipo'),
								'param_name' => 'line_height',
								'value'      => ''
							),
							array(
								'type'       => 'dropdown',
								'group'   	 => esc_html__('Typography', 'equipo'),
								'heading'    => esc_html__('Text transform','equipo'),
								'param_name' => 'text_transform',
								'value'      => array(
									esc_html__('None','equipo')       => 'none',
									esc_html__('Uppercase','equipo')  => 'uppercase',
									esc_html__('Lowercase','equipo')  => 'lowercase',
									esc_html__('Capitalize','equipo') => 'capitalize',
								)
							),

							/* tablet
							----*/

								array(
									'param_name'=>'tablet_text_align',
									'type'      => 'dropdown',
									'group'      => esc_html__('Tablet','equipo'),
									'heading'   => esc_html__('Text align', 'equipo'),
									'value'      => array(
										esc_html__('Inherit','equipo') => 'inherit',
										esc_html__('Left','equipo')    => 'left',
										esc_html__('Right','equipo')   => 'right',
										esc_html__('Center','equipo')  => 'center',
									)
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Font size (min-width 1024px and max-width 1279px)','equipo'),
									'group'      => esc_html__('Tablet','equipo'),
									'param_name' => 'tlf',
									'value'      => $typography_values,
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Line height (min-width 1024px and max-width 1279px)','equipo'),
									'group'      => esc_html__('Tablet','equipo'),
									'param_name' => 'tll',
									'value'      => $typography_values,
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Font size (min-width 768px and max-width 1023px)','equipo'),
									'group'      => esc_html__('Tablet','equipo'),
									'param_name' => 'tpf',
									'value'      => $typography_values,
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Line height (min-width 768px and max-width 1023px)','equipo'),
									'group'      => esc_html__('Tablet','equipo'),
									'param_name' => 'tpl',
									'value'      => $typography_values,
								),

							/* mobile
							----*/

								array(
									'param_name'=>'mobile_text_align',
									'type'      => 'dropdown',
									'group'      => esc_html__('Mobile','equipo'),
									'heading'   => esc_html__('Text align', 'equipo'),
									'value'      => array(
										esc_html__('Inherit','equipo') => 'inherit',
										esc_html__('Left','equipo')    => 'left',
										esc_html__('Right','equipo')   => 'right',
										esc_html__('Center','equipo')  => 'center',
									)
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Font size (min-width 375px and max-width 767px)','equipo'),
									'group'      => esc_html__('Mobile','equipo'),
									'param_name' => 'mf',
									'value'      => $typography_values,
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Line height (min-width 375px and max-width 767px)','equipo'),
									'group'      => esc_html__('Mobile','equipo'),
									'param_name' => 'ml',
									'value'      => $typography_values,
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Font size (max-width 374px)','equipo'),
									'group'      => esc_html__('Mobile','equipo'),
									'param_name' => 'mfs',
									'value'      => $typography_values,
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Line height (max-width 374px)','equipo'),
									'group'      => esc_html__('Mobile','equipo'),
									'param_name' => 'mls',
									'value'      => $typography_values,
								),

							/* animation
							----*/

								array(
									'type'       => 'checkbox',
									'heading'    => esc_html__('Animate','equipo'),
									'group'      => 'Animation',
									'param_name' => 'animate',
									'dependency' => Array('element' => 'highlight', 'value' => 'false')
								),
								array(
									'type'       => 'dropdown',
									'group'      => esc_html__('Animation','equipo'),
									'heading'    => esc_html__('Animation type','equipo'),
									'param_name' => 'animation_type',
									'value'     => array(
										esc_html__('Curtain', 'equipo') => 'curtain',
										esc_html__('Letter', 'equipo')  => 'letter',
										esc_html__('Words', 'equipo')   => 'words',
										esc_html__('Rows', 'equipo')    => 'rows',
									),
									'dependency' => Array('element' => 'animate', 'value' => 'true')
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Curtain Color','equipo'),
									'group'      => esc_html__('Animation','equipo'),
									'param_name' => 'element_color',
									'value'      => $main_color,
									'dependency' => Array(
										'element' => 'animate', 'value' => 'true',
										'element' => 'animation_type', 'value' => array('curtain')
									)
								),
								array(
									'type'       => 'textfield',
									'group'      => esc_html__('Animation','equipo'),
									'heading'    => esc_html__('Start delay in ms (enter only integer number)','equipo'),
									'param_name' => 'delay',
									'value'      => '0',
									'dependency' => Array('element' => 'animate', 'value' => 'true')
								),
				
							/* margin
							----*/

								array(
									'type'       => 'margin',
									'group'      => esc_html__('Margin','equipo'),
									'heading'    => esc_html__('Margin','equipo'),
									'param_name' => 'margin',
									'value'      => ''
								),

							/* padding
							----*/

								array(
									'type'       => 'padding',
									'group'      => esc_html__('Padding','equipo'),
									'heading'    => esc_html__('Padding','equipo'),
									'param_name' => 'padding',
									'value'      => ''
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element font','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_font',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
			    		)
			    	));

				/* et_blockquote
				----*/

			    	vc_map(array(
			    		'name'                    => esc_html__('Blockquote','equipo'),
			    		'description'             => esc_html__('Add blockquote','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_blockquote',
			    		'class'                   => 'et_blockquote',
			    		'icon'                    => 'et_blockquote',
			    		'show_settings_on_create' => true,
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-blockquote.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-blockquote.js',
			    		'params'                  => array(
			    			array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Upload image','equipo'),
								'param_name' => 'image',
							),
			    			array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Content','equipo'),
								'param_name' => 'text',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Author','equipo'),
								'param_name' => 'author',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Title','equipo'),
								'param_name' => 'title',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => '',
							),

							/* margin
							----*/

								array(
									'type'       => 'margin',
									'group'      => esc_html__('Margin','equipo'),
									'heading'    => esc_html__('Margin','equipo'),
									'param_name' => 'margin',
									'value'      => ''
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
			    		)
			    	));

			/* UI
			----*/

				/* et_menu
				----*/

			    	vc_map(array(
			    		'name'                    => esc_html__('Navigation menu','equipo'),
			    		'description'             => esc_html__('Do not use with header builder','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_menu',
			    		'class'                   => 'et_menu hbe font',
			    		'icon'                    => 'et_menu',
			    		'show_settings_on_create' => true,
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-menu.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-menu.js',
			    		'params'                  => array(
			    			array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Menu name','equipo'),
								'param_name' => 'menu',
								'value'      => $menu_list,
								'default'    => 'choose'
							),
							array(
								'param_name'=>'align',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Align', 'equipo'),
								'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
								'value'     => $align_values_extended
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Height in px (without any string)','equipo'),
								'group'      => 'Height',
								'param_name' => 'height',
								'value'      => '40',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => '',
							),

							/* top level
							----*/

								/* styling
								----*/

									array(
										'type'       => 'textfield',
										'heading'    => esc_html__('Space between menu items in px (without any string)','equipo'),
										'group'      => 'Top level',
										'param_name' => 'menu_space',
										'value'      => '40',
									),

									array(
										'type'       => 'dropdown',
										'heading'    => esc_html__('Items separator','equipo'),
										'group'      => 'Top level',
										'param_name' => 'menu_separator',
										'value'      => $logic_values
									),
									array(
										'type'       => 'colorpicker',
										'heading'    => esc_html__('Items separator color','equipo'),
										'group'      => 'Top level',
										'param_name' => 'menu_separator_color',
										'value'      => '#e0e0e0',
										'dependency' => Array('element' => 'menu_separator', 'value' => 'true')
									),
									array(
										'type'       => 'textfield',
										'heading'    => esc_html__('Items separator height (without any string)','equipo'),
										'description'=> esc_html__('Leave blank if you want 100% height','equipo'),
										'group'      => 'Top level',
										'param_name' => 'menu_separator_height',
										'value'      => '',
										'dependency' => Array('element' => 'menu_separator', 'value' => 'true')
									),
									array(
										'type'       => 'dropdown',
										'heading'    => esc_html__('Submenu indicator','equipo'),
										'group'      => 'Top level',
										'param_name' => 'submenu_indicator',
										'value'      => $logic_values
									),

									array(
										'type'       => 'colorpicker',
										'heading'    => esc_html__('Menu color','equipo'),
										'group'      => 'Top level',
										'param_name' => 'menu_color',
										'value'      => '#1c1c1e',
									),

									array(
										'type'       => 'colorpicker',
										'heading'    => esc_html__('Menu color hover','equipo'),
										'group'      => 'Top level',
										'param_name' => 'menu_color_hover',
										'value'      => $main_color,
									),

									array(
										'type'       => 'dropdown',
										'heading'    => esc_html__('Menu hover effect','equipo'),
										'group'      => 'Top level',
										'param_name' => 'menu_hover',
										'value'      => array(
											esc_html__('None','equipo')      => 'none',
											esc_html__('Underline','equipo') => 'underline',
											esc_html__('Overline','equipo')  => 'overline',
											esc_html__('Outline','equipo')   => 'outline',
											esc_html__('Box','equipo')       => 'box',
											esc_html__('Fill','equipo')      => 'fill',
										),
									),

									array(
										'type'       => 'colorpicker',
										'heading'    => esc_html__('Menu hover effect color','equipo'),
										'group'      => 'Top level',
										'param_name' => 'menu_effect_color',
										'value'      => '',
										'dependency' => Array('element' => 'menu_hover', 'value' => array('underline','overline','outline','box','fill'))
									),

								/* typography
								----*/

									array(
										'param_name'=>'font_family',
										'type'      => 'dropdown',
										'group'     => esc_html__('Top level','equipo'),
										'heading'   => esc_html__('Font family', 'equipo'),
										'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
										'value'     => $google_fonts_family,
									),
									array(
										'param_name'=>'font_weight',
										'type'      => 'dropdown',
										'group'     => esc_html__('Top level','equipo'),
										'heading'   => esc_html__('Font weight', 'equipo'),
										'value'     => $font_weight_values,
										'std'       => '700'
									),
									array(
										'param_name'=>'font_subsets',
										'type'      => 'dropdown',
										'group'     => esc_html__('Top level','equipo'),
										'heading'   => esc_html__('Font subsets', 'equipo'),
										'value'      => array(
											'latin' => 'latin',
										)
									),
									array(
										'type'       => 'textfield',
										'heading'    => esc_html__('Font size (without any string)','equipo'),
										'group'      => esc_html__('Top level','equipo'),
										'param_name' => 'font_size',
										'value'      => '16',
									),
									array(
										'type'       => 'textfield',
										'group'      => esc_html__('Top level','equipo'),
										'heading'    => esc_html__('Letter spacing (without any string)','equipo'),
										'param_name' => 'letter_spacing',
										'value'      => ''
									),
									array(
										'type'       => 'dropdown',
										'heading'    => esc_html__('Text transform','equipo'),
										'group'      => 'Top level',
										'param_name' => 'text_transform',
										'value'      => array(
											esc_html__('None','equipo')       => 'none',
											esc_html__('Uppercase','equipo')  => 'uppercase',
											esc_html__('Lowercase','equipo')  => 'lowercase',
											esc_html__('Capitalize','equipo') => 'capitalize',
										)
									),

							/* submenu
							----*/

								/* styling
								----*/

									array(
										'type'       => 'textfield',
										'heading'    => esc_html__('Offset','equipo'),
										'description'=> esc_html__('Leave blank to have 100% offset','equipo'),
										'group'      => 'Submenu',
										'param_name' => 'submenuoffset',
										'value'      => '',
									),
									array(
										'type'       => 'colorpicker',
										'heading'    => esc_html__('Submenu color','equipo'),
										'group'      => 'Submenu',
										'param_name' => 'submenu_color',
										'value'      => '#1c1c1e',
									),

									array(
										'type'       => 'colorpicker',
										'heading'    => esc_html__('Submenu color hover','equipo'),
										'group'      => 'Submenu',
										'param_name' => 'submenu_color_hover',
										'value'      => $main_color,
									),

									array(
										'type'       => 'colorpicker',
										'heading'    => esc_html__('Submenu background color','equipo'),
										'group'      => 'Submenu',
										'param_name' => 'submenu_back_color',
										'value'      => '#ffffff',
									),

									array(
										'type'       => 'colorpicker',
										'heading'    => esc_html__('Submenu background color hover','equipo'),
										'group'      => 'Submenu',
										'param_name' => 'submenu_back_color_hover',
										'value'      => '',
									),

									array(
										'type'       => 'dropdown',
										'heading'    => esc_html__('Submenu shadow','equipo'),
										'group'      => 'Submenu',
										'param_name' => 'submenu_shadow',
										'value'      => $logic_values
									),

									array(
										'type'       => 'dropdown',
										'heading'    => esc_html__('Submenu indicator','equipo'),
										'group'      => 'Submenu',
										'param_name' => 'submenu_submenu_indicator',
										'value'      => $logic_values
									),

									array(
										'type'       => 'dropdown',
										'heading'    => esc_html__('Submenu items separator','equipo'),
										'group'      => 'Submenu',
										'param_name' => 'submenu_separator',
										'value'      => $logic_values
									),

									array(
										'type'       => 'dropdown',
										'heading'    => esc_html__('Submenu appear effect','equipo'),
										'group'      => 'Submenu',
										'param_name' => 'submenu_appear',
										'value'      => array(
											esc_html__('Default','equipo')   => 'none',
											esc_html__('Fade','equipo')      => 'fade',
										),
									),

									array(
										'type'       => 'dropdown',
										'heading'    => esc_html__('Submenu appear from','equipo'),
										'group'      => 'Submenu',
										'param_name' => 'submenu_appear_from',
										'value'      => array(
											esc_html__('From bottom','equipo') => 'bottom',
											esc_html__('From top','equipo')    => 'top'
										),
									),


								/* typography
								----*/

									array(
										'param_name'=>'subfont_family',
										'type'      => 'dropdown',
										'group'     => esc_html__('Submenu','equipo'),
										'heading'   => esc_html__('Submenu font family', 'equipo'),
										'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
										'value'     => $google_fonts_family,
									),
									array(
										'param_name'=>'subfont_weight',
										'type'      => 'dropdown',
										'group'     => esc_html__('Submenu','equipo'),
										'heading'   => esc_html__('Submenu font weight', 'equipo'),
										'value'     => $font_weight_values
									),
									array(
										'param_name'=>'subfont_subsets',
										'type'      => 'dropdown',
										'group'     => esc_html__('Submenu','equipo'),
										'heading'   => esc_html__('Submenu font subsets', 'equipo'),
										'value'      => array(
											'latin' => 'latin',
										)
									),
									array(
										'type'       => 'textfield',
										'heading'    => esc_html__('Submenu font size (without any string)','equipo'),
										'group'      => esc_html__('Submenu','equipo'),
										'param_name' => 'subfont_size',
										'value'      => '16',
									),
									array(
										'type'       => 'textfield',
										'group'      => esc_html__('Submenu','equipo'),
										'heading'    => esc_html__('Submenu letter spacing (without any string)','equipo'),
										'param_name' => 'subletter_spacing',
										'value'      => ''
									),
									array(
										'type'       => 'dropdown',
										'heading'    => esc_html__('Submenu text transform','equipo'),
										'group'      => 'Submenu',
										'param_name' => 'subtext_transform',
										'value'      => array(
											esc_html__('None','equipo')       => 'none',
											esc_html__('Uppercase','equipo')  => 'uppercase',
											esc_html__('Lowercase','equipo')  => 'lowercase',
											esc_html__('Capitalize','equipo') => 'capitalize',
										)
									),

							/* margin
							----*/

								array(
									'type'       => 'margin',
									'group'      => esc_html__('Margin','equipo'),
									'heading'    => esc_html__('Margin','equipo'),
									'param_name' => 'margin',
									'value'      => ''
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element font','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_font',
									'value'      => '',
								),

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element font','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'subelement_font',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
			    		)
			    	));

		    	/* et_button
				----*/

					vc_map(array(
		    			'name'                    => esc_html__('Button','equipo'),
			    		'description'             => esc_html__('Do not use with header builder','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_button',
			    		'class'                   => 'et_button',
			    		'icon'                    => 'et_button',
			    		'show_settings_on_create' => true,
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-button.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-button.js',
			    		'show_settings_on_create' => true,
			    		'params'                  => array(
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Button text','equipo'),
								'param_name' => 'button_text',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Button link','equipo'),
								'param_name' => 'button_link',
								'value'      => '',
							),
							array(
								'param_name'=>'target',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Target', 'equipo'),
								'value'     => array(
									'_self'  => '_self',
									'_blank' => '_blank'
								)
							),
							array(
			    				'type'       => 'checkbox',
								'heading'    => esc_html__('Open link in modal window?', 'equipo'),
								'param_name' => 'button_link_modal',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => '',
							),

			    			/* typography
							----*/

								array(
									'param_name'=>'font_family',
									'type'      => 'dropdown',
									'group'     => esc_html__('Typography', 'equipo'),
									'heading'   => esc_html__('Font family', 'equipo'),
									'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
									'value'     => $google_fonts_family,
								),
								array(
									'param_name'=>'font_weight',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Font weight', 'equipo'),
									'group'     => esc_html__('Typography', 'equipo'),
									'value'     => $font_weight_values,
									'std'       => '400'
								),
								array(
									'param_name'=>'font_subsets',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Font subsets', 'equipo'),
									'group'     => esc_html__('Typography', 'equipo'),
									'value'     => array(
										'latin' => 'latin',
									)
								),
				    			array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Button font size (without any string)','equipo'),
									'group'      => esc_html__('Typography','equipo'),
									'param_name' => 'button_font_size',
									'value'      => '16',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Button letter spacing (without any string)','equipo'),
									'group'      => esc_html__('Typography','equipo'),
									'param_name' => 'button_letter_spacing',
									'value'      => ''
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Button line height (without any string)','equipo'),
									'group'      => esc_html__('Typography','equipo'),
									'param_name' => 'button_line_height',
									'value'      => '22'
								),
								array(
									'type'       => 'dropdown',
									'group'   	 => esc_html__('Typography', 'equipo'),
									'heading'    => esc_html__('Text transform','equipo'),
									'param_name' => 'button_text_transform',
									'value'      => array(
										esc_html__('None','equipo')       => 'none',
										esc_html__('Uppercase','equipo')  => 'uppercase',
										esc_html__('Lowercase','equipo')  => 'lowercase',
										esc_html__('Capitalize','equipo') => 'capitalize',
									)
								),

							/* styling
							----*/

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Button size','equipo'),
									'group'      => 'Styling',
									'param_name' => 'button_size',
									'value'      => array(
										esc_html__('Small','equipo')  => 'small',
										esc_html__('Medium','equipo') => 'medium',
										esc_html__('Large','equipo')  => 'large',
									),
									'std' => 'medium',
									'dependency' => Array('element' => 'button_size_custom', 'value' => 'false')
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Button custom size','equipo'),
									'group'      => 'Styling',
									'param_name' => 'button_size_custom',
									'value'      => $logic_values
								),

								array(
									'type'       => 'textfield',
									'group'      => 'Styling',
									'heading'    => esc_html__('Button width in px (without any string)','equipo'),
									'param_name' => 'width',
									'value'      => '',
									'dependency' => Array('element' => 'button_size_custom', 'value' => 'true')
								),

								array(
									'type'       => 'textfield',
									'group'      => 'Styling',
									'heading'    => esc_html__('Button height in px (without any string)','equipo'),
									'param_name' => 'height',
									'value'      => '',
									'dependency' => Array('element' => 'button_size_custom', 'value' => 'true')
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Button style','equipo'),
									'group'      => 'Styling',
									'param_name' => 'button_style',
									'value'      => array(
										esc_html__('Normal','equipo')  => 'normal',
										esc_html__('Outline','equipo') => 'outline',
									)
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Button type','equipo'),
									'group'      => 'Styling',
									'param_name' => 'button_type',
									'value'      => array(
										esc_html__('Rounded','equipo') => 'rounded',
										esc_html__('Round','equipo')  => 'round',
									)
								),
								array(
				    				'type'       => 'checkbox',
									'heading'    => esc_html__('Button shadow', 'equipo'),
									'group'      => esc_html__('Styling','equipo'),
									'param_name' => 'button_shadow',
									'value'      => '',
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Button color','equipo'),
									'group'      => esc_html__('Styling','equipo'),
									'param_name' => 'button_color',
									'value'      => '#ffffff'
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Button background color','equipo'),
									'group'      => esc_html__('Styling','equipo'),
									'param_name' => 'button_back_color',
									'value'      => $main_color,
									'dependency' => Array('element' => 'button_style', 'value' => 'normal')
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Button border color','equipo'),
									'group'      => esc_html__('Styling','equipo'),
									'param_name' => 'button_border_color',
									'value'      => $main_color,
									'dependency' => Array('element' => 'button_style', 'value' => 'outline')
								),

							/* hover
							----*/

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Button color hover','equipo'),
									'group'      => esc_html__('Hover','equipo'),
									'param_name' => 'button_color_hover',
									'value'      => '#ffffff'
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Button background color hover','equipo'),
									'group'      => esc_html__('Hover','equipo'),
									'param_name' => 'button_back_color_hover',
									'value'      => '#1c1c1e',
									'dependency' => Array('element' => 'button_style', 'value' => 'normal')
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Button border color hover','equipo'),
									'group'      => esc_html__('Hover','equipo'),
									'param_name' => 'button_border_color_hover',
									'value'      => '#1c1c1e',
									'dependency' => Array('element' => 'button_style', 'value' => 'outline')
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Hover animation','equipo'),
									'group'      => esc_html__('Hover','equipo'),
									'param_name' => 'animate_hover',
									'value'      => array(
										esc_html__('Normal','equipo')  	  => 'none',
										esc_html__('Fill effect','equipo')   => 'fill',
										esc_html__('Scale effect','equipo')  => 'scale',
										esc_html__('Move effect','equipo')   => 'move',
									),
									'dependency' => Array('element' => 'button_style', 'value' => 'normal')
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Hover animation','equipo'),
									'group'      => esc_html__('Hover','equipo'),
									'param_name' => 'animate_hover_outline',
									'value'      => array(
										esc_html__('Normal','equipo')  	  => 'none',
										esc_html__('Fill effect','equipo')   => 'fill',
										esc_html__('Scale effect','equipo')  => 'scale',
									),
									'dependency' => Array('element' => 'button_style', 'value' => 'outline')
								),

							/* click
							----*/

								array(
									'type'       => 'checkbox',
									'heading'    => esc_html__('Smooth Click animation','equipo'),
									'group'      => esc_html__('Click','equipo'),
									'param_name' => 'click_smooth',
									'value'      => ''
								),

							/* icon
							----*/

								array(
									'type'       => 'attach_image',
									'heading'    => esc_html__('Icon','equipo'),
									'group'      => esc_html__('Icon','equipo'),
									'param_name' => 'icon',
									'value'      => '',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Icon size (without any string)','equipo'),
									'group'      => esc_html__('Icon','equipo'),
									'param_name' => 'icon_font_size',
									'value'      => '16',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Icon margin (without any string)','equipo'),
									'group'      => esc_html__('Icon','equipo'),
									'param_name' => 'icon_margin',
									'value'      => '8',
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Icon position','equipo'),
									'group'      => esc_html__('Icon','equipo'),
									'param_name' => 'icon_position',
									'value'      => array(
										esc_html__('Left','equipo')  => 'left',
										esc_html__('Right','equipo')  => 'right',
									)
								),

							/* animation
							----*/

								array(
					                'type'       => 'animation_style',
					                'heading'    => esc_html__('Animation','equipo'),
									'group'      => esc_html__('Animation','equipo'),
					                'param_name' => 'animation',
					                'weight'     => 0,
					            ),
					            array(
									'type'       => 'dropdown',
									'heading'    => esc_html__( 'Animation delay in ms (example 300)', 'equipo' ),
									'param_name' => 'animation_delay',
									'group'      => esc_html__('Animation','equipo'),
									'value'      => $animation_delay_values,
									'dependency' => Array('element' => 'animate', 'value' => 'true')
								),
							
							/* margin
							----*/

								array(
									'type'       => 'margin',
									'group'      => esc_html__('Margin','equipo'),
									'heading'    => esc_html__('Margin','equipo'),
									'param_name' => 'margin',
									'value'      => ''
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element font','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_font',
									'value'      => '',
								),
			    		)
		    		));

				/* et_separator
				----*/

			    	vc_map(array(
						'name'                    => esc_html__('Separator','equipo'),
						'description'             => esc_html__('Use this element to separate content','equipo'),
						'category'                => esc_html__('Enovathemes','equipo'),
						'base'                    => 'et_separator',
						'class'                   => 'et_separator',
						'icon'                    => 'et_separator',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-separator.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-separator.js',
						'show_settings_on_create' => true,
						'params'                  => array(
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Type','equipo'),
								'param_name' => 'type',
								'value'      => array(
									esc_html__('solid','equipo')  => 'solid',
									esc_html__('dotted','equipo') => 'dotted',
									esc_html__('dashed','equipo') => 'dashed',
								)
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Color','equipo'),
								'param_name' => 'color',
								'value'      => '#e0e0e0'
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Width (without any string, if you want 100% leave blank)','equipo'),
								'param_name' => 'width',
								'value'      => ''
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Height (without any string, if you want 1px leave blank)','equipo'),
								'param_name' => 'height',
								'value'      => ''
							),
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Align','equipo'),
								'param_name' => 'align',
								'value'      => $align_values
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => ''
							),

							/* margin
							----*/

								array(
									'type'       => 'margin',
									'group'      => esc_html__('Margin','equipo'),
									'heading'    => esc_html__('Margin','equipo'),
									'param_name' => 'margin',
									'value'      => ''
								),

							/* responsive visibility
							----*/

								array(
									'type'       => 'rv',
									'heading'    => esc_html__( 'Responsive visibility', 'equipo' ),
									'group'      => esc_html__('Responsive visibility','equipo'),
									'param_name' => 'rv',
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
						)
					));

			    /* et_icon_separator
				----*/

			    	vc_map(array(
						'name'                    => esc_html__('Icon separator','equipo'),
						'description'             => esc_html__('Use this element to separate content','equipo'),
						'category'                => esc_html__('Enovathemes','equipo'),
						'base'                    => 'et_icon_separator',
						'class'                   => 'et_icon_separator',
						'icon'                    => 'et_icon_separator',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-icon-separator.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-icon-separator.js',
						'show_settings_on_create' => true,
						'params'                  => array(
							array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Icon','equipo'),
								'param_name' => 'icon',
							),
							array(
								'param_name'=>'icon_size',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Icon size', 'equipo'),
								'value'     => $size_values_default
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Separator color','equipo'),
								'param_name' => 'color_sep',
								'value'      => '#e0e0e0'
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon color','equipo'),
								'param_name' => 'color_icon',
								'value'      => $main_color
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Gap from top (without any string)','equipo'),
								'param_name' => 'top',
								'value'      => '24'
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Gap from bottom (without any string)','equipo'),
								'param_name' => 'bottom',
								'value'      => '24'
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Separator width (without any string)','equipo'),
								'param_name' => 'width',
								'value'      => '120'
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Height (without any string, if you want 1px leave blank)','equipo'),
								'param_name' => 'height',
								'value'      => '1'
							),
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Align','equipo'),
								'param_name' => 'align',
								'value'      => $align_values
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => ''
							),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
						)
					));

			    /* et_icon
				----*/

			    	vc_map(array(
						'name'                    => esc_html__('Icon','equipo'),
						'description'             => esc_html__('Insert icon','equipo'),
						'category'                => esc_html__('Enovathemes','equipo'),
						'base'                    => 'et_icon',
						'class'                   => 'et_icon',
						'icon'                    => 'et_icon',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-icon.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-icon.js',
						'show_settings_on_create' => true,
						'params'                  => array(

							array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Icon','equipo'),
								'param_name' => 'icon',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Icon link','equipo'),
								'param_name' => 'icon_link',
								'value'      => '',
							),

							array(
								'param_name'=>'target',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Target', 'equipo'),
								'value'     => array(
									'_self'  => '_self',
									'_blank' => '_blank'
								),
								'dependency' => Array('element' => 'icon_link', 'not_empty' => true)
							),
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Elastic click','equipo'),
								'param_name' => 'click',
								'value'      => $logic_values
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => '',
							),

							/* styling
							----*/

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon color','equipo'),
									'group'      => 'Styling',
									'param_name' => 'icon_color',
									'value'      => '#000000',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon color hover','equipo'),
									'group'      => 'Styling',
									'param_name' => 'icon_color_hover',
									'value'      => $main_color,
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon background color','equipo'),
									'group'      => 'Styling',
									'param_name' => 'icon_background_color',
									'value'      => '',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon background color hover','equipo'),
									'group'      => 'Styling',
									'param_name' => 'icon_background_color_hover',
									'value'      => '',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon border color','equipo'),
									'group'      => 'Styling',
									'param_name' => 'icon_border_color',
									'value'      => '',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon border color hover','equipo'),
									'group'      => 'Styling',
									'param_name' => 'icon_border_color_hover',
									'value'      => '',
								),

								array(
									'type'       => 'textfield',
									'group'      => 'Styling',
									'heading'    => esc_html__('Icon border width in px (without any string)','equipo'),
									'param_name' => 'icon_border_width',
								),

								array(
									'type'       => 'checkbox',
									'group'      => 'Styling',
									'heading'    => esc_html__('Shadow','equipo'),
									'param_name' => 'shadow',
									'value'      => ''
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Size','equipo'),
									'group'      => 'Styling',
									'param_name' => 'size',
									'value'      => array(
										esc_html__('Small','equipo')  => 'small',
										esc_html__('Medium','equipo') => 'medium',
										esc_html__('Large','equipo')  => 'large',
										esc_html__('Custom','equipo') => 'custom',
									),
									'std' => 'medium'
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Icon size in px without any string','equipo'),
									'group'      => 'Styling',
									'param_name' => 'icon_size',
									'value'      => '',
									'dependency' => Array('element' => 'size', 'value' => 'custom')
								),

							/* margin
							----*/

								array(
									'type'       => 'margin',
									'group'      => esc_html__('Margin','equipo'),
									'heading'    => esc_html__('Margin','equipo'),
									'param_name' => 'margin',
									'value'      => ''
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
						)
					));

			    /* et_icon_list
				----*/

			    	vc_map(array(
						'name'                    => esc_html__('Icon list','equipo'),
						'description'             => esc_html__('Insert icon list','equipo'),
						'category'                => esc_html__('Enovathemes','equipo'),
						'base'                    => 'et_icon_list',
						'class'                   => 'et_icon_list',
						'icon'                    => 'et_icon_list',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-icon-list.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-icon-list.js',
						'show_settings_on_create' => true,
						'params'                  => array(
							array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Icon','equipo'),
								'param_name' => 'icon',
								'value'      => '',
							),
			    			array(
								'param_name'=>'icon_size',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Size', 'equipo'),
								'value'     => array(
									esc_html__('Extra small', 'equipo')  => 'extra-small',
									esc_html__('Small', 'equipo')        => 'small',
									esc_html__('Medium', 'equipo')       => 'medium',
									esc_html__('Large', 'equipo')        => 'large'
								),
								'std'       => 'medium'
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon color','equipo'),
								'param_name' => 'icon_color',
								'value'      => ''
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon background color','equipo'),
								'param_name' => 'icon_background_color',
								'value'      => ''
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon border color','equipo'),
								'param_name' => 'icon_border_color',
								'value'      => ''
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Icon border width (without any string)','equipo'),
								'param_name' => 'icon_border_width',
							),
							array(
								'type'       => 'checkbox',
								'heading'    => esc_html__('Shadow','equipo'),
								'param_name' => 'shadow',
								'value'      => ''
							),
							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('List items','equipo'),
								'param_name' => 'content',
								'value'      => '',
								'description' => esc_html__('Use line break (press Enter) to separate between items','equipo'),
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => ''
							),

							/* animation
							----*/

								array(
					                'type'       => 'checkbox',
					                'heading'    => esc_html__('Animate','equipo'),
									'group'      => esc_html__('Animation','equipo'),
					                'param_name' => 'animate',
					                'weight'     => 0,
					            ),
								array(
									'type'       => 'textfield',
									'group'      => esc_html__('Animation','equipo'),
									'heading'    => esc_html__('Start delay in ms (enter only integer number)','equipo'),
									'param_name' => 'delay',
									'value'      => '0',
									'dependency' => Array('element' => 'animate', 'value' => 'true')
								),

							/* margin
							----*/

								array(
									'type'       => 'margin',
									'group'      => esc_html__('Margin','equipo'),
									'heading'    => esc_html__('Margin','equipo'),
									'param_name' => 'margin',
									'value'      => ''
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
						)
					));

			    /* et_accordion
				----*/

					vc_map(array(
			    		'name'                    => esc_html__('Accordion','equipo'),
			    		'description'             => esc_html__('Insert accordion','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_accordion',
			    		'class'                   => 'et_accordion',
			    		'icon'                    => 'et_accordion',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-accordion.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-accordion.js',
			    		'as_parent'               => array('only' => 'et_accordion_item'),
			    		'content_element'         => true,
			    		'show_settings_on_create' => true,
			    		'is_container'            => true,
			    		'js_view'                 => 'VcColumnView',
			    		'params'                  => array(
			    			array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Collapsible','equipo'),
								'param_name' => 'collapsible',
								'value'      => $logic_values
							),

							/* styling
							----*/

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Title color','equipo'),
									'group'      => 'Styling',
									'param_name' => 'color',
									'value'      => '#1c1c1e',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Title color active','equipo'),
									'group'      => 'Styling',
									'param_name' => 'color_active',
									'value'      => $main_color,
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Title border color','equipo'),
									'group'      => 'Styling',
									'param_name' => 'border_color',
									'value'      => '#eeeeee',
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
			    		)
			    	));


			    	vc_map(array(
						'name'                    => esc_html__('Accordion item','equipo'),
						'category'                => esc_html__('Enovathemes','equipo'),
						'base'                    => 'et_accordion_item',
						'class'                   => 'et_accordion_item',
						'icon'                    => 'et_accordion_item',
						'as_child'                => array('only' => 'et_accordion'),
	    				"as_parent"               => array('except' => 'vc_section'),
	    				'content_element'         => true,
						"js_view"                 => 'VcColumnView',
						'show_settings_on_create' => true,
						'params'                  => array(
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Open','equipo'),
								'param_name' => 'open',
								'value'      => $logic_values
							),
							array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Icon','equipo'),
								'param_name' => 'icon',
								'value'      => '',
							),
							array(
			    				'type'       => 'textfield',
								'heading'    => esc_html__('Title','equipo'),
								'param_name' => 'title',
								'value'      => ''
							),

						)
					));

			    /* et_tabs
				----*/

					vc_map(array(
			    		'name'                    => esc_html__('Tabs','equipo'),
			    		'description'             => esc_html__('Insert tabs','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_tab',
			    		'class'                   => 'et_tab',
			    		'icon'                    => 'et_tab',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-tab.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-tab.js',
			    		'as_parent'               => array('only' => 'et_tab_item'),
			    		'content_element'         => true,
			    		'show_settings_on_create' => true,
			    		'is_container'            => true,
			    		'js_view'                 => 'VcColumnView',
			    		'params'                  => array(
			    			array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Type','equipo'),
								'param_name' => 'type',
								'value'      => array(
									esc_html__('Horizontal','equipo')  => 'horizontal',
									esc_html__('Vertical','equipo')  => 'vertical',
								)
							),
							array(
								'type'       => 'checkbox',
								'heading'    => esc_html__('Tabs center','equipo'),
								'param_name' => 'center',
							),

							/* styling
							----*/

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Tab color','equipo'),
									'group'      => 'Styling',
									'param_name' => 'color',
									'value'      => '#1c1c1e',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Tab color active','equipo'),
									'group'      => 'Styling',
									'param_name' => 'color_active',
									'value'      => $main_color,
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Tab border color','equipo'),
									'group'      => 'Styling',
									'param_name' => 'border_color',
									'value'      => '#eeeeee',
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
			    		)
			    	));


			    	vc_map(array(
						'name'                    => esc_html__('Tab','equipo'),
						'category'                => esc_html__('Enovathemes','equipo'),
						'base'                    => 'et_tab_item',
						'class'                   => 'et_tab_item',
						'icon'                    => 'et_tab_item',
						'as_child'                => array('only' => 'et_tab'),
	    				"as_parent"               => array('except' => 'vc_section'),
	    				'content_element'         => true,
						"js_view"                 => 'VcColumnView',
						'show_settings_on_create' => true,
						'params'                  => array(
							array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Active','equipo'),
							'param_name' => 'active',
							'value'      => array(
								'false' => 'false',
								'true'  => 'true'
							)
						),
						array(
							'type'       => 'attach_image',
							'heading'    => esc_html__('Icon','equipo'),
							'param_name' => 'icon',
							'value'      => '',
						),
						array(
		    				'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => ''
						),
						)
					));


			    /* et_stagger_box
				----*/

			    	vc_map(array(
						'name'                    => esc_html__('Stagger box','equipo'),
						'description'             => esc_html__('Insert stagger box with any content','equipo'),
						'category'                => esc_html__('Enovathemes','equipo'),
						'base'                    => 'et_stagger_box',
						'class'                   => 'et_stagger_box',
						'icon'                    => 'et_stagger_box',
						"as_parent"               => array('except' => 'vc_row, vc_section'),
	    				'content_element'         => true,
						"js_view"                 => 'VcColumnView',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-stagger-box.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-stagger-box.js',
						'show_settings_on_create' => true,
						'params'                  => array(
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => ''
							),

							/* animation
							----*/

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Content animation','equipo'),
									'param_name' => 'stagger',
									'value'      => array(
										esc_html__('Stagger from top','equipo')  => 'top',
										esc_html__('Stagger from bottom','equipo') => 'bottom',
										esc_html__('Stagger from left','equipo') => 'left',
										esc_html__('Stagger from right','equipo') => 'right'
									)
								),

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Stagger interval in ms (enter only integer number)','equipo'),
									'param_name' => 'interval',
									'value'      => '50',
								),

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Start delay in ms (enter only integer number)','equipo'),
									'param_name' => 'delay',
									'value'      => '0',
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								)
								
						)
					));

			/* SOCIAL
			----*/

				/* et_social_icons
				----*/

					foreach ($social_links_array as $social) {
						vc_add_param('et_social_links', array(
							'type'       => 'textfield',
							'heading'    => ucfirst($social).' link',
							'param_name' => $social,
							'value'      => '',
							'weight' => 1
						));
					}

			    	vc_map(array(
						'name'                    => esc_html__('Social links','equipo'),
			    		'description'             => esc_html__('Use to add social links','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_social_links',
			    		'class'                   => 'et_social_links',
			    		'icon'                    => 'et_social_links',
			    		'show_settings_on_create' => true,
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-social-links.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-social-links.js',
						'params'                  => array(
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => '',
							),
							array(
								'param_name'=>'target',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Target', 'equipo'),
								'value'     => array(
									'_self'  => '_self',
									'_blank' => '_blank'
								)
							),
							array(
								'param_name'=>'stretching',
								'type'      => 'checkbox',
								'heading'   => esc_html__('Stretching', 'equipo'),
							),

							/* styling
							----*/

								array(
									'param_name'=>'shadow',
									'type'      => 'checkbox',
									'group'     => esc_html__('Styling','equipo'),
									'heading'   => esc_html__('Shadow', 'equipo'),
									'value'     => ''
								),

								array(
									'param_name'=>'size',
									'type'      => 'dropdown',
									'group'     => esc_html__('Styling','equipo'),
									'heading'   => esc_html__('Size', 'equipo'),
									'value'     => $size_values_default
								),

								array(
									'param_name'=>'styling_original',
									'type'      => 'dropdown',
									'group'     => esc_html__('Styling','equipo'),
									'heading'   => esc_html__('Original styling', 'equipo'),
									'value'     => $logic_values
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon color','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'icon_color',
									'value'      => '#000000',
									'dependency' => Array('element' => 'styling_original', 'value' => 'false')
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon color hover','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'icon_color_hover',
									'value'      => '#1c1c1e',
									'dependency' => Array('element' => 'styling_original', 'value' => 'false')
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon background color','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'icon_background_color',
									'value'      => '',
									'dependency' => Array('element' => 'styling_original', 'value' => 'false')
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon background color hover','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'icon_background_color_hover',
									'value'      => '',
									'dependency' => Array('element' => 'styling_original', 'value' => 'false')
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon border color','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'icon_border_color',
									'value'      => '',
									'dependency' => Array('element' => 'styling_original', 'value' => 'false')
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon border color hover','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'icon_border_color_hover',
									'value'      => '',
									'dependency' => Array('element' => 'styling_original', 'value' => 'false')
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Icon border width (without any string)','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'icon_border_width',
									'dependency' => Array('element' => 'styling_original', 'value' => 'false')
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
						)
					));

				/* et_social_icons
				----*/

			    	vc_map(array(
						'name'                    => esc_html__('Social share','equipo'),
			    		'description'             => esc_html__('Use to add social sharing','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_social_share',
			    		'class'                   => 'et_social_share',
			    		'icon'                    => 'et_social_share',
			    		'show_settings_on_create' => true,
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-social-share.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-social-share.js',
						'params'                  => array(
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => '',
							),

							/* styling
							----*/

								array(
									'param_name'=>'shadow',
									'type'      => 'checkbox',
									'heading'   => esc_html__('Shadow', 'equipo'),
									'value'     => ''
								),

								array(
									'param_name'=>'styling_original',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Original styling', 'equipo'),
									'value'     => $logic_values
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon color','equipo'),
									'param_name' => 'icon_color',
									'value'      => '#000000',
									'dependency' => Array('element' => 'styling_original', 'value' => 'false')
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon color hover','equipo'),
									'param_name' => 'icon_color_hover',
									'value'      => '#1c1c1e',
									'dependency' => Array('element' => 'styling_original', 'value' => 'false')
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon background color','equipo'),
									'param_name' => 'icon_background_color',
									'value'      => '',
									'dependency' => Array('element' => 'styling_original', 'value' => 'false')
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon background color hover','equipo'),
									'param_name' => 'icon_background_color_hover',
									'value'      => '',
									'dependency' => Array('element' => 'styling_original', 'value' => 'false')
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon border color','equipo'),
									'param_name' => 'icon_border_color',
									'value'      => '',
									'dependency' => Array('element' => 'styling_original', 'value' => 'false')
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon border color hover','equipo'),
									'param_name' => 'icon_border_color_hover',
									'value'      => '',
									'dependency' => Array('element' => 'styling_original', 'value' => 'false')
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Icon border width (without any string)','equipo'),
									'param_name' => 'icon_border_width',
									'dependency' => Array('element' => 'styling_original', 'value' => 'false')
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
						)
					));

				/* et_mailchimp
				----*/

	 				$list_array = enovathemes_addons_mailchimp_list();

	 				$list_values = array(''=>esc_html__('Choose','equipo'));

	 				if ( !is_wp_error( $list_array ) && is_array($list_array)){

	 					foreach ( $list_array as $list){
	 						$list_values[$list['id']] = $list['name'];
	 					}
	 				}

					$list_values = array_flip($list_values);

					if (empty($list_values)) {
						array_push($list_values, esc_html__('Mailchimp did not return any list','equipo'));
					}

			    	vc_map(array(
			    		'name'                    => esc_html__('Mailchimp','equipo'),
			    		'description'             => esc_html__('Use to add AJAX mailchimp subscribe','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_mailchimp',
			    		'class'                   => 'et_mailchimp',
			    		'icon'                    => 'et_mailchimp',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-mailchimp.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-mailchimp.js',
			    		'show_settings_on_create' => true,
			    		'params'                  => array(
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('List','equipo'),
								'description'=> esc_html__('Make sure you have the Mailchimp API key and at least one list in your Mailchimp dashboard. Go to theme options >> general >> Mailchimp API key','equipo'),
								'param_name' => 'list',
								'value'      => $list_values,
							),

							array(
								'param_name'=>'layout',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Layout', 'equipo'),
								'value'     => array(
									esc_html__('Simple', 'equipo')     => 'simple',
									esc_html__('Alternative', 'equipo') => 'alt'
								)
							),


							/* styling
							----*/

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Text field color','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'text_color',
									'value'      => '#1c1c1e',
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Text field color focus','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'text_color_focus',
									'value'      => '#1c1c1e',
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Text field background color','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'text_background_color',
									'value'      => '#ffffff',
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Text field background color focus','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'text_background_color_focus',
									'value'      => '#ffffff',
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Text field border color','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'text_border_color',
									'value'      =>'#eeeeee',
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Text field border color focus','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'text_border_color_focus',
									'value'      => '#eeeeee',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Button color','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'button_color',
									'value'      => '#ffffff',
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Button color hover','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'button_color_hover',
									'value'      => '#ffffff',
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Button background color','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'button_background_color',
									'value'      => $main_color,
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Button background color hover','equipo'),
									'group'     => esc_html__('Styling','equipo'),
									'param_name' => 'button_background_color_hover',
									'value'      => '#1c1c1e',
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
			    		)
			    	));

			/* SELFHOSTED
			----*/

				/* et_icon_box_container
				----*/

			    	vc_map(array(
						'name'                    => esc_html__('Icon box container','equipo'),
						'description'             => esc_html__('Insert icon box container','equipo'),
						'category'                => esc_html__('Enovathemes','equipo'),
						'base'                    => 'et_icon_box_container',
						'class'                   => 'et_icon_box_container',
						'icon'                    => 'et_icon_box_container',
						"as_parent"               => array('only' => 'et_icon_box'),
	    				'content_element'         => true,
						"js_view"                 => 'VcColumnView',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-icon-box-container.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-icon-box-container.js',
						'show_settings_on_create' => true,
						'params'                  => array(
							
							array(
								'type'       => 'checkbox',
								'heading'    => esc_html__('Gap','equipo'),
								'param_name' => 'gap',
								'value'      => ''
							),
							array(
								'type'       => 'checkbox',
								'heading'    => esc_html__('Box Shadow','equipo'),
								'param_name' => 'shadow',
								'value'      => '',
							),
							array(
								'type'       => 'checkbox',
								'heading'    => esc_html__('Border','equipo'),
								'param_name' => 'border',
								'value'      => ''
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Border color','equipo'),
								'param_name' => 'border_color',
								'value'      => '',
								'dependency' => Array(
									'element' => 'border', 'value' => array('true'),
								)
							),
							array(
								'param_name'=>'columns',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Column', 'equipo'),
								'value'     => array(
									'1'  => '1',
									'2'  => '2',
									'3'  => '3',
									'4'  => '4',
								)
							),
							array(
								'param_name'=>'height',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Min height', 'equipo'),
								'value'     => array(
									'0'      => '0',
									'100vh'  => '100vh',
									'70vh'   => '70vh',
									'60vh'   => '60vh',
									'50vh'   => '50vh',
									'custom'  => 'custom',
								)
							),
							array(
								'param_name'=>'custom-height',
								'type'      => 'textfield',
								'heading'   => esc_html__('Custom min height value (enter any value you need using all available units)', 'equipo'),
								'value'     => '',
								'dependency' => Array(
									'element' => 'height', 'value' => 'custom',
								)
							),
							array(
								'param_name'=>'vertical_align',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Vertical align boxes', 'equipo'),
								'value'     => array(
									'top'     => 'top',
									'middle'  => 'middle',
									'bottom'  => 'bottom',
								),
								'dependency' => Array(
									'element' => 'height', 'value' => array('100vh','70vh','60vh','50vh','custom'),
								)
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => ''
							),
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Box animation','equipo'),
								'param_name' => 'animation',
								'value'      => array(
									esc_html__('None','equipo')   => 'none',
									esc_html__('Fade','equipo')   => 'fade',
									esc_html__('Appear','equipo') => 'appear',
								)
							),
						
							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
						)
					));

				/* et_icon_box
				----*/

			    	vc_map(array(
						'name'                    => esc_html__('Icon box','equipo'),
						'description'             => esc_html__('Insert icon box','equipo'),
						'category'                => esc_html__('Enovathemes','equipo'),
						'base'                    => 'et_icon_box',
						'class'                   => 'et_icon_box',
						'icon'                    => 'et_icon_box',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-icon-box.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-icon-box.js',
						'show_settings_on_create' => true,
						'params'                  => array(

							/* icon
							----*/

								array(
									'type'       => 'attach_image',
									'heading'    => esc_html__('Icon','equipo'),
									'group'      => esc_html__('Icon', 'equipo'),
									'param_name' => 'icon',
									'value'      => '',
								),
				    			array(
									'param_name'=>'icon_size',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Icon size', 'equipo'),
									'group'      => esc_html__('Icon', 'equipo'),
									'value'     => array(
										esc_html__('Extra small','equipo')    => 'small-x',
										esc_html__('Small','equipo')    => 'small',
										esc_html__('Medium','equipo')   => 'medium',
										esc_html__('Large','equipo')    => 'large',
									),
									'std' => 'large'
								),
								array(
									'param_name'=>'icon_position',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Icon position', 'equipo'),
									'group'      => esc_html__('Icon', 'equipo'),
									'value'     => array(
										esc_html__('Top','equipo')  => 'top',
										esc_html__('Left','equipo')  => 'left',
										esc_html__('Right','equipo')  => 'right',
									),
								),
								array(
									'param_name'=>'icon_alignment',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Icon alignment', 'equipo'),
									'group'      => esc_html__('Icon', 'equipo'),
									'value'     => $align_values,
									'dependency' => Array(
										'element' => 'icon_position', 'value' => 'top',
									)
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon color','equipo'),
									'group'      => esc_html__('Icon', 'equipo'),
									'param_name' => 'icon_color',
									'value'      => ''
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon color hover','equipo'),
									'group'      => esc_html__('Icon', 'equipo'),
									'param_name' => 'icon_color_hover',
									'value'      => ''
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon background color','equipo'),
									'group'      => esc_html__('Icon', 'equipo'),
									'param_name' => 'icon_back_color',
									'value'      => ''
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon background color hover','equipo'),
									'group'      => esc_html__('Icon', 'equipo'),
									'param_name' => 'icon_back_color_hover',
									'value'      => ''
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon border color','equipo'),
									'group'      => esc_html__('Icon', 'equipo'),
									'param_name' => 'icon_border_color',
									'value'      => ''
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Icon border color hover','equipo'),
									'group'      => esc_html__('Icon', 'equipo'),
									'param_name' => 'icon_border_color_hover',
									'value'      => ''
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Icon border width (without any string)','equipo'),
									'group'      => esc_html__('Icon', 'equipo'),
									'param_name' => 'icon_border_width',
								),
								
							/* content
							----*/

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Title','equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'param_name' => 'title',
									'value'      => ''
								),
								array(
									'param_name'=>'title_tag',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Tag', 'equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'value'     => array(
										'default'  => 'default',
										'H1'  => 'h1',
										'H2'  => 'h2',
										'H3'  => 'h3',
										'H4'  => 'h4',
										'H5'  => 'h5',
										'H6'  => 'h6',
										'p'   => 'p',
										'div' => 'div',
									),
									'std' => 'default'
								),
								array(
									'type'       => 'textarea_html',
									'heading'    => esc_html__('Content','equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'param_name' => 'content',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Link','equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'param_name' => 'link',
									'value'      => ''
								),
								array(
								'param_name'=>'target',
									'type'      => 'dropdown',
									'group'      => esc_html__('Content', 'equipo'),
									'heading'   => esc_html__('Target', 'equipo'),
									'value'     => array(
										'_self'  => '_self',
										'_blank' => '_blank'
									)
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Title color','equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'param_name' => 'title_color',
									'value'      => '#1c1c1e'
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Title color hover','equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'param_name' => 'title_color_hover',
									'value'      => ''
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Content color','equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'param_name' => 'text_color',
									'value'      => '#616161'
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Content color hover','equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'param_name' => 'text_color_hover',
									'value'      => ''
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Box background color','equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'param_name' => 'box_color',
									'value'      => ''
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Box background color hover','equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'param_name' => 'box_color_hover',
									'value'      => ''
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Box border width (without any string)','equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'param_name' => 'box_border_width',
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Box border color','equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'param_name' => 'box_border_color',
									'value'      => ''
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Box border color hover','equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'param_name' => 'box_border_color_hover',
									'value'      => ''
								),
							
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Hover animation','equipo'),
								'param_name' => 'animation',
								'value'      => array(
									esc_html__('None','equipo')          => 'none',
									esc_html__('Icon scale','equipo')    => 'scale',
									esc_html__('Box transform','equipo') => 'transform',
								)
							),

							array(
								'type'       => 'checkbox',
								'heading'    => esc_html__('Box Shadow','equipo'),
								'param_name' => 'shadow',
								'value'      => ''
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => '',
							),

							/* padding
							----*/

								array(
									'type'       => 'padding',
									'group'      => esc_html__('Padding','equipo'),
									'heading'    => esc_html__('Padding','equipo'),
									'param_name' => 'padding',
									'value'      => '48,32,48,32'
								),

								array(
									'type'       => 'crp',
									'heading'    => esc_html__( 'Responsive padding', 'equipo' ),
									'group'      => esc_html__('Responsive padding','equipo'),
									'param_name' => 'crp',
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
						)
					));

				/* et_step_box_container
				----*/

			    	vc_map(array(
						'name'                    => esc_html__('Step box','equipo'),
						'description'             => esc_html__('Insert step box','equipo'),
						'category'                => esc_html__('Enovathemes','equipo'),
						'base'                    => 'et_step_box_container',
						'class'                   => 'et_step_box_container',
						'icon'                    => 'et_step_box_container',
						"as_parent"               => array('only' => 'et_step_box'),
	    				'content_element'         => true,
						"js_view"                 => 'VcColumnView',
						'show_settings_on_create' => true,
						'params'                  => array(
							array(
								'param_name'=>'columns',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Column', 'equipo'),
								'value'     => array(
									'1'  => '1',
									'2'  => '2',
									'3'  => '3',
									'4'  => '4',
								)
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => ''
							),

						)
					));

				/* et_step_box
				----*/

			    	vc_map(array(
						'name'                    => esc_html__('Step box','equipo'),
						'description'             => esc_html__('Insert step box','equipo'),
						'category'                => esc_html__('Enovathemes','equipo'),
						"as_child"                => array('only' => 'et_step_box_container'),
						'base'                    => 'et_step_box',
						'class'                   => 'et_step_box',
						'icon'                    => 'et_step_box',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-step-box.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-step-box.js',
						'show_settings_on_create' => true,
						'params'                  => array(
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => '',
							),


							/* styling
							----*/

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Title color','equipo'),
									'group'      => esc_html__('Styling', 'equipo'),
									'param_name' => 'title_color',
									'value'      => $main_color
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Content color','equipo'),
									'group'      => esc_html__('Styling', 'equipo'),
									'param_name' => 'text_color',
									'value'      => '#616161'
								),

							/* content
							----*/

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Title','equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'param_name' => 'title',
									'value'      => ''
								),
								array(
									'param_name'=>'title_tag',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Tag', 'equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'value'     => array(
										'H1'  => 'h1',
										'H2'  => 'h2',
										'H3'  => 'h3',
										'H4'  => 'h4',
										'H5'  => 'h5',
										'H6'  => 'h6',
										'p'   => 'p',
										'div' => 'div',
									),
									'std' => 'h6'
								),
								array(
									'type'       => 'textarea_html',
									'heading'    => esc_html__('Content','equipo'),
									'group'      => esc_html__('Content', 'equipo'),
									'param_name' => 'content',
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
						)
					));

				/* et_carousel
				----*/

					vc_map(array(
			    		'name'                    => esc_html__('Carousel','equipo'),
			    		'description'             => esc_html__('Insert carousel with any content you want','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_carousel',
			    		'class'                   => 'et_carousel',
			    		'icon'                    => 'et_carousel',
			    		'show_settings_on_create' => true,
				    	'content_element'         => true,
						"js_view"                 => 'VcColumnView',
			    		'as_parent'               => array('only' => 'et_carousel_item'),
			    		'params'                  => array(
							array(
								'param_name'=>'columns',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Column', 'equipo'),
								'value'     => array(
									'1'  => '1',
									'2'  => '2',
									'3'  => '3',
									'4'  => '4',
									'5'  => '5',
									'6'  => '6',
								)
							),
							array(
								'param_name'=>'navigation_type',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Navigation type', 'equipo'),
								'value'     => array(
									esc_html__('Only arrows','equipo')  => 'arrows',
									esc_html__('Only dottes','equipo')  => 'dottes',
									esc_html__('Both arrows and dottes','equipo')  => 'both'
								)
							),
							array(
								'param_name'=>'navigation_position',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Navigation position', 'equipo'),
								'value'     => array(
									esc_html__('Top','equipo')  => 'top',
									esc_html__('Side','equipo')  => 'side',
								),
								'dependency' => Array(
									'element' => 'carousel', 'value' => array('true'),
									'element' => 'navigation_type', 'value' => array('arrows','both'),
								)
							),
							array(
								'param_name'=>'autoplay',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Autoplay', 'equipo'),
								'value'     => $logic_values
							),
			    		)
			    	));

			    	vc_map(array(
			    		'name'                    => 'Carousel item',
			    		'description'             => esc_html__('Insert carousel item','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_carousel_item',
			    		'class'                   => 'et_carousel_item',
			    		'icon'                    => 'et_carousel_item',
			    		'show_settings_on_create' => false,
				    	'content_element'         => true,
			    		'as_child'                => array('only' => 'et_carousel'),
			    		"as_parent"               => array('except' => 'vc_row, vc_section'),
						"js_view"                 => 'VcColumnView',
			    		'params'                  => array()
			    	));

			    /* et_pricing_table
				----*/

					vc_map(array(
			    		'name'                    => esc_html__('Pricing table','equipo'),
			    		'description'             => esc_html__('Use to display your service/product pricing','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_pricing_table_container',
			    		'class'                   => 'et_pricing_table_container',
			    		'icon'                    => 'et_pricing_table',
			    		'show_settings_on_create' => true,
				    	'content_element'         => true,
						"js_view"                 => 'VcColumnView',
			    		'as_parent'               => array('only' => 'et_pricing_table'),
			    		'params'                  => array(
							array(
								'param_name'=>'columns',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Column', 'equipo'),
								'value'     => array(
									'1'  => '1',
									'2'  => '2',
									'3'  => '3',
									'4'  => '4',
									'5'  => '5',
								)
							),
							array(
								'type'       => 'checkbox',
								'heading'    => esc_html__('Gap','equipo'),
								'param_name' => 'gap',
								'value'      => ''
							),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),
							
			    		)
			    	));

					vc_map(array(
			    		'name'                    => esc_html__('Pricing table','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'description'             => esc_html__('Use to display your service/product pricing','equipo'),
			    		'base'                    => 'et_pricing_table',
			    		'icon'                    => 'et_pricing_table',
			    		'as_child'                => array('only' => 'et_pricing_table_container'),
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-pricing-table.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-pricing-table.js',
			    		'content_element'         => true,
			    		'params'                  => array(
			    			array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Color','equipo'),
								'param_name' => 'color',
								'value'      => $main_color
							),
			    			array(
			    				'type'       => 'checkbox',
								'heading'    => esc_html__('Highlight', 'equipo'),
								'param_name' => 'highlight',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Label','equipo'),
								'param_name' => 'label',
								'value'      => ''
							),
			    			array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Title','equipo'),
								'param_name' => 'title',
								'value'      => ''
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Currency','equipo'),
								'param_name' => 'currency',
								'value'      => ''
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Price','equipo'),
								'param_name' => 'price',
								'value'      => ''
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Plan','equipo'),
								'param_name' => 'plan',
								'value'      => ''
							),
							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('List items','equipo'),
								'param_name' => 'content',
								'value'      => '',
								'description' => esc_html__('Use line break (press Enter) to separate between items','equipo'),
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Button text','equipo'),
								'param_name' => 'button_text',
								'value'      => ''
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Button link','equipo'),
								'param_name' => 'button_link',
								'value'      => ''
							),
							array(
								'param_name'=>'target',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Target', 'equipo'),
								'value'     => array(
									'_self'  => '_self',
									'_blank' => '_blank'
								)
							),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
			    		)
			    	));

				/* et_testimonial
				----*/

					vc_map(array(
			    		'name'                    => esc_html__('Testimonials','equipo'),
			    		'description'             => esc_html__('Add testimonials to carousel container','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_testimonial_container',
			    		'class'                   => 'et_testimonial_container',
			    		'icon'                    => 'et_testimonial_container',
			    		'show_settings_on_create' => true,
				    	'content_element'         => true,
			    		'js_view'                 => 'VcColumnView',
			    		'as_parent'               => array('only' => 'et_testimonial'),
			    		'params'                  => array(
							array(
								'param_name'=>'columns',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Column', 'equipo'),
								'value'     => array(
									'1'  => '1',
									'2'  => '2',
									'3'  => '3',
									'4'  => '4',
								)
							),
							array(
								'param_name'=>'navigation_type',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Navigation type', 'equipo'),
								'value'     => array(
									esc_html__('Only arrows','equipo')  => 'arrows',
									esc_html__('Only dottes','equipo')  => 'dottes',
									esc_html__('Both arrows and dottes','equipo')  => 'both'
								)
							),
							array(
								'param_name'=>'autoplay',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Autoplay', 'equipo'),
								'value'     => $logic_values
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							)
			    		)
			    	));

			    	vc_map(array(
			    		'name'                    => esc_html__('Testimonial','equipo'),
			    		'description'             => esc_html__('Add testimonial','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_testimonial',
			    		'class'                   => 'et_testimonial',
			    		'icon'                    => 'et_testimonial',
			    		'as_child'                => array('only' => 'et_testimonial_container'),
			    		'show_settings_on_create' => true,
			    		'params'                  => array(
			    			array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Content','equipo'),
								'param_name' => 'text',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Author','equipo'),
								'param_name' => 'author',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Title','equipo'),
								'param_name' => 'title',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),
			    		)
			    	));

			    /* et_client
				----*/

					vc_map(array(
			    		'name'                    => esc_html__('Clients','equipo'),
			    		'description'             => esc_html__('Add clients','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_client_container',
			    		'class'                   => 'et_client_container',
			    		'icon'                    => 'et_client_container',
			    		'show_settings_on_create' => true,
			    		'is_container'            => true,
				    	'content_element'         => true,
						"js_view"                 => 'VcColumnView',
			    		'as_parent'               => array('only' => 'et_client'),
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-client.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-client.js',
			    		'params'                  => array(
			    			array(
								'param_name'=>'type',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Type', 'equipo'),
								'value'     => array(
									esc_html__('Grid', 'equipo')     => 'grid',
									esc_html__('Carousel', 'equipo') => 'carousel',
								)
							),
							array(
								'param_name'=>'columns',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Column', 'equipo'),
								'value'     => array(
									'1'  => '1',
									'2'  => '2',
									'3'  => '3',
									'4'  => '4',
									'5'  => '5',
									'6'  => '6',
								)
							),
							array(
								'param_name'=>'columns_tab',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Column tablet', 'equipo'),
								'value'     => array(
									esc_html__('Inherit', 'equipo')  => 'inherit',
									'1'  => '1',
									'2'  => '2',
									'3'  => '3',
									'4'  => '4',
									'5'  => '5',
									'6'  => '6',
								),
								'dependency' => Array('element' => 'type', 'value' => 'grid')
							),
							array(
								'param_name'=>'columns_mob',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Column mobile', 'equipo'),
								'value'     => array(
									esc_html__('Inherit', 'equipo')  => 'inherit',
									'1'  => '1',
									'2'  => '2',
									'3'  => '3',
									'4'  => '4',
									'5'  => '5',
									'6'  => '6',
								),
								'dependency' => Array('element' => 'type', 'value' => 'grid')
							),
							array(
								'param_name'=>'navigation_type',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Navigation type', 'equipo'),
								'value'     => array(
									esc_html__('Only arrows','equipo')  => 'arrows',
									esc_html__('Only dottes','equipo')  => 'dottes',
									esc_html__('Both arrows and dottes','equipo')  => 'both'
								),
								'dependency' => Array('element' => 'type', 'value' => 'carousel')
							),
							array(
								'param_name'=>'autoplay',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Autoplay', 'equipo'),
								'value'     => $logic_values,
								'dependency' => Array('element' => 'type', 'value' => 'carousel')
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							)
			    		)
			    	));

			    	vc_map(array(
			    		'name'                    => esc_html__('Client','equipo'),
			    		'description'             => esc_html__('Add client','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_client',
			    		'class'                   => 'et_client',
			    		'icon'                    => 'et_client',
			    		'as_child'                => array('only' => 'et_client_container'),
			    		'show_settings_on_create' => true,
			    		'params'                  => array(
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Title','equipo'),
								'param_name' => 'title',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Link','equipo'),
								'param_name' => 'link',
								'value'      => '',
							),
							array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Client image','equipo'),
								'param_name' => 'image',
							),

			    		)
			    	));

			    /* et_person
				----*/

			    	foreach ($social_links_array as $social) {
						vc_add_param('et_person', array(
							'type'       => 'textfield',
							'heading'    => ucfirst($social).' link',
							'group'      => esc_html__('Social','equipo'),
							'param_name' => $social,
							'value'      => '',
						));
					}

			    	vc_map(array(
			    		'name'                    => esc_html__('Person','equipo'),
			    		'description'             => esc_html__('Add person','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_person',
			    		'class'                   => 'et_person',
			    		'icon'                    => 'et_person',
			    		'show_settings_on_create' => true,
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-person.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-person.js',
			    		'params'                  => array(
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Name','equipo'),
								'param_name' => 'name',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Title','equipo'),
								'param_name' => 'title',
								'value'      => '',
							),
							array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Image','equipo'),
								'param_name' => 'image',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),
			    		)
			    	));

				/* et_popup_banner
				----*/

					vc_map(array(
			    		'name'                    => esc_html__('Popup banner','equipo'),
			    		'description'             => esc_html__('Insert popup banner (if you want to have the popup in entire site, put the banner inside footer)','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_popup_banner',
			    		'class'                   => 'et_popup_banner',
			    		'icon'                    => 'et_popup_banner',
			    		"as_parent"               => array('except' => 'vc_section'),
						"js_view"                 => 'VcColumnView',
			    		"content_element"         => true,
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-popup-banner.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-popup-banner.js',
			    		'params'                  => array(
			    			array(
			    				'type'       => 'checkbox',
								'heading'    => esc_html__('Hide on mobile', 'equipo'),
								'param_name' => 'visible_mob',
								'value'      => '',
								'description'=> esc_html__('Check this option if you want to hide banner on mobile', 'equipo'),
							),
							array(
			    				'type'       => 'checkbox',
								'heading'    => esc_html__('Hide on desktop', 'equipo'),
								'param_name' => 'visible_desk',
								'value'      => '',
								'description'=> esc_html__('Check this option if you want to hide banner on desktop', 'equipo'),
							),
							array(
			    				'type'       => 'checkbox',
								'heading'    => esc_html__('Hide on tablet', 'equipo'),
								'param_name' => 'visible_tablet',
								'value'      => '',
								'description'=> esc_html__('Check this option if you want to hide tablet on mobile', 'equipo'),
							),
							array(
			    				'type'       => 'checkbox',
								'heading'    => esc_html__('Use cookie', 'equipo'),
								'param_name' => 'cookie',
								'value'      => '',
								'description'=> esc_html__('Toggle this option if you want to display your banner onces per visit session', 'equipo'),
							),
			    			array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Delay in ms','equipo'),
								'param_name' => 'delay',
								'value'      => '3000',
							),
							array(
								'param_name'=>'effect',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Effect', 'equipo'),
								'value'     => array(
									esc_html__('Fade in and scale', 'equipo') => 'fade-in-scale',
									esc_html__('Slide in right', 'equipo')  	 => 'slide-in-right',
									esc_html__('Slide in bottom', 'equipo')   => 'slide-in-bottom',
									esc_html__('3d flip horizontal', 'equipo')=> 'flip-horizonatal',
									esc_html__('3d flip vertical', 'equipo')  => 'flip-vertical'
								)
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Width in px','equipo'),
								'param_name' => 'width',
								'value'      => '720',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Height in px','equipo'),
								'param_name' => 'height',
								'value'      => '400',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Background color','equipo'),
								'param_name' => 'back_color',
								'value'      => '#ffffff'
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Border color','equipo'),
								'param_name' => 'border_color',
								'value'      => ''
							),
							array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Background image','equipo'),
								'param_name' => 'back_img',
							),
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Text align','equipo'),
								'param_name' => 'text_align',
								'value'      => $align_values,
							),

							/* padding
							----*/

								array(
									'type'       => 'padding',
									'group'      => esc_html__('Padding','equipo'),
									'heading'    => esc_html__('Padding','equipo'),
									'param_name' => 'padding',
									'value'      => ''
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
			    		)
			    	));

			    /* et_banner
				----*/

			    	vc_map(array(
						'name'                    => esc_html__('Banner','equipo'),
						'description'             => esc_html__('Insert banner with any content','equipo'),
						'category'                => esc_html__('Enovathemes','equipo'),
						'base'                    => 'et_banner',
						'class'                   => 'et_banner',
						'icon'                    => 'et_banner',
						"as_parent"               => array('except' => 'vc_section'),
	    				'content_element'         => true,
						"js_view"                 => 'VcColumnView',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-banner.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-banner.js',
						'show_settings_on_create' => true,
						'params'                  => array(
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => ''
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Link','equipo'),
								'description'=> esc_html__('If set, do not use any button inside the banner','equipo'),
								'param_name' => 'link',
								'value'      => ''
							),
							array(
								'type'       => 'checkbox',
								'heading'    => esc_html__('Overflow hidden?','equipo'),
								'param_name' => 'overflow',
								'value'      => ''
							),

							array(
								'type'       => 'checkbox',
								'heading'    => esc_html__('Overflow hidden mobile?','equipo'),
								'param_name' => 'overflow_mobile',
								'value'      => ''
							),

							array(
								'type'       => 'checkbox',
								'heading'    => esc_html__('Overflow hidden tablet portrait?','equipo'),
								'param_name' => 'overflow_tab_port',
								'value'      => ''
							),

							array(
								'type'       => 'checkbox',
								'heading'    => esc_html__('Overflow hidden tablet landscape?','equipo'),
								'param_name' => 'overflow_tab_land',
								'value'      => ''
							),

							array(
								'type'       => 'checkbox',
								'heading'    => esc_html__('Highlight?','equipo'),
								'param_name' => 'highlight',
								'value'      => ''
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Gradient under content','equipo'),
								'param_name' => 'gradient',
								'value'      => array(
									esc_html__('None','equipo')  => 'none',
									esc_html__('Left','equipo')  => 'left',
									esc_html__('Right','equipo')  => 'right',
								)
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Content alignment','equipo'),
								'param_name' => 'align',
								'value'      => array(
									esc_html__('None','equipo')  => 'none',
									esc_html__('Left','equipo')  => 'left',
									esc_html__('Right','equipo')  => 'right',
									esc_html__('Center','equipo')  => 'center',
								)
							),

							/* background options
							----*/

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Background color','equipo'),
									'group'      => esc_html__('Background', 'equipo'),
									'param_name' => 'back_color',
									'value'      => ''
								),

								array(
									'type'       => 'attach_image',
									'heading'    => esc_html__('Background image','equipo'),
									'group'      => esc_html__('Background','equipo'),
									'param_name' => 'back_image',
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Background repeat','equipo'),
									'group'      => esc_html__('Background','equipo'),
									'param_name' => 'back_repeat',
									'value'      => array(
										esc_html__('No repeat','equipo')  => 'no-repeat',
										esc_html__('Repeat','equipo')     => 'repeat',
									)
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Background size','equipo'),
									'group'      => esc_html__('Background','equipo'),
									'param_name' => 'back_size',
									'value'      => array(
										esc_html__('Auto','equipo')  => 'auto',
										esc_html__('Cover','equipo') => 'cover',
										esc_html__('Contain','equipo') => 'contain',
									)
								),

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Background position','equipo'),
									'group'      => esc_html__('Background','equipo'),
									'description'=> esc_html__('left top, right top, left bottom, right bottom, left center, right center, value value','equipo'),
									'param_name' => 'back_position',
									'value'      => ''
								),

							/* padding
							----*/

								array(
									'type'       => 'padding',
									'group'      => esc_html__('Padding','equipo'),
									'heading'    => esc_html__('Padding','equipo'),
									'param_name' => 'padding',
									'value'      => '32,32,32,32'
								),

								array(
									'type'       => 'crp',
									'group'      => esc_html__('Padding','equipo'),
									'heading'    => esc_html__( 'Responsive padding', 'equipo' ),
									'param_name' => 'crp',
								),
							
							/* parallax
							----*/

								array(
									'type'       => 'attach_image',
									'heading'    => esc_html__('Banner image','equipo'),
									'group'      => esc_html__('Image','equipo'),
									'param_name' => 'image',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Offset X coordinate','equipo'),
									'group'      => esc_html__('Image','equipo'),
									'param_name' => 'parallax_x',
									'value'      => '0',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Offset Y coordinate','equipo'),
									'group'      => esc_html__('Image','equipo'),
									'param_name' => 'parallax_y',
									'value'      => '0',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Mobile (Max 374 width) offset X coordinate','equipo'),
									'group'      => esc_html__('Image','equipo'),
									'param_name' => 'm_parallax_x',
									'value'      => '',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Mobile (Max 374 width) offset Y coordinate','equipo'),
									'group'      => esc_html__('Image','equipo'),
									'param_name' => 'm_parallax_y',
									'value'      => '',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Mobile (Min 375 Max 767 width) offset X coordinate','equipo'),
									'group'      => esc_html__('Image','equipo'),
									'param_name' => 'mm_parallax_x',
									'value'      => '',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Mobile (Min 375 Max 767 width) offset Y coordinate','equipo'),
									'group'      => esc_html__('Image','equipo'),
									'param_name' => 'mm_parallax_y',
									'value'      => '',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Tablet portrait offset X coordinate','equipo'),
									'group'      => esc_html__('Image','equipo'),
									'param_name' => 'tp_parallax_x',
									'value'      => '',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Tablet portrait offset Y coordinate','equipo'),
									'group'      => esc_html__('Image','equipo'),
									'param_name' => 'tp_parallax_y',
									'value'      => '',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Tablet landscape offset X coordinate','equipo'),
									'group'      => esc_html__('Image','equipo'),
									'param_name' => 'tl_parallax_x',
									'value'      => '',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Tablet landscape offset Y coordinate','equipo'),
									'group'      => esc_html__('Image','equipo'),
									'param_name' => 'tl_parallax_y',
									'value'      => '',
								),
								array(
									'type'       => 'checkbox',
									'heading'    => esc_html__('Parallax','equipo'),
									'group'      => esc_html__('Image','equipo'),
									'param_name' => 'parallax',
									'value'      => ''
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Parallax speed radtio','equipo'),
									'group'      => esc_html__('Image','equipo'),
									'description'=> esc_html__('The more the value is the slower the parallax effect is','equipo'),
									'param_name' => 'parallax_speed',
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6',
										'7'  => '7',
										'8'  => '8',
										'9'  => '9',
										'10' => '10',
										'11' => '11',
										'12' => '12',
										'13' => '13',
										'14' => '14',
										'15' => '15',
										'16' => '16',
										'17' => '17',
										'18' => '18',
										'19' => '19',
										'20' => '20'
									),
									'std' => '10',
									'dependency' => Array(
										'element' => 'parallax', 'value' => 'true'
									)
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Parallax limit','equipo'),
									'group'      => esc_html__('Image','equipo'),
									'param_name' => 'parallax_limit',
									'value'      => '0',
									'dependency' => Array(
										'element' => 'parallax', 'value' => 'true'
									)
								),


							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								)
								
						)
					));

			/* MEDIA
			----*/

				/* et_image
				----*/

					vc_map(array(
			    		'name'                    => esc_html__('Image','equipo'),
			    		'description'             => esc_html__('Insert/animate single image','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_image',
			    		'class'                   => 'et_image',
			    		'icon'                    => 'et_image',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-image.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-image.js',
			    		'show_settings_on_create' => true,
			    		'params'                  => array(
			    			array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Upload image','equipo'),
								'param_name' => 'image',
							),
			    			array(
								'param_name'=>'size',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Size', 'equipo'),
								'value'     => $image_size_values
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Image link','equipo'),
								'param_name' => 'link',
								'value'      => '',
							),
							array(
								'param_name'=>'link_target',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Link target', 'equipo'),
								'value'     => array(
									'_self'  => '_self',
									'_blank' => '_blank'
								),
								'dependency' => Array('element' => 'link', 'value' => 'custom')
							),
							array(
								'param_name'=>'alignment',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Alignment', 'equipo'),
								'value'     => $align_values_extended
							),
							array(
								'param_name'=>'border_radius',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Border radius', 'equipo'),
								'value'     => $logic_values,
							),

							/* parallax
							----*/

								array(
									'type'       => 'checkbox',
									'heading'    => esc_html__('Parallax','equipo'),
									'group'      => esc_html__('Parallax','equipo'),
									'param_name' => 'parallax',
									'value'      => ''
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Offset X coordinate','equipo'),
									'group'      => esc_html__('Parallax','equipo'),
									'param_name' => 'parallax_x',
									'value'      => '0',
									'dependency' => Array(
										'element' => 'parallax', 'value' => 'true'
									)
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Offset Y coordinate','equipo'),
									'group'      => esc_html__('Parallax','equipo'),
									'param_name' => 'parallax_y',
									'value'      => '0',
									'dependency' => Array(
										'element' => 'parallax', 'value' => 'true'
									)
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Parallax speed radtio','equipo'),
									'group'      => esc_html__('Parallax','equipo'),
									'description'=> esc_html__('The more the value is the slower the parallax effect is','equipo'),
									'param_name' => 'parallax_speed',
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6',
										'7'  => '7',
										'8'  => '8',
										'9'  => '9',
										'10' => '10',
										'11' => '11',
										'12' => '12',
										'13' => '13',
										'14' => '14',
										'15' => '15',
										'16' => '16',
										'17' => '17',
										'18' => '18',
										'19' => '19',
										'20' => '20'
									),
									'std' => '10',
									'dependency' => Array(
										'element' => 'parallax', 'value' => 'true'
									)
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Parallax limit','equipo'),
									'group'      => esc_html__('Parallax','equipo'),
									'param_name' => 'parallax_limit',
									'value'      => '0',
									'dependency' => Array(
										'element' => 'parallax', 'value' => 'true'
									)
								),

							/* animation
							----*/

								array(
									'type'       => 'checkbox',
									'heading'    => esc_html__('Animate','equipo'),
									'group'      => 'Animation',
									'param_name' => 'animate',
								),
								array(
									'type'       => 'dropdown',
									'group'      => esc_html__('Animation','equipo'),
									'heading'    => esc_html__('Animation type','equipo'),
									'param_name' => 'animation_type',
									'value'     => array(
										esc_html__('Fade and Blur', 'equipo')      => 'fade-blur',
										esc_html__('Curtain from left', 'equipo')   => 'curtain-left',
										esc_html__('Curtain from right', 'equipo')  => 'curtain-right',
										esc_html__('Curtain from top', 'equipo')    => 'curtain-top',
										esc_html__('Curtain from bottom', 'equipo') => 'curtain-bottom',
										esc_html__('Appear from left', 'equipo')    => 'left',
										esc_html__('Appear from right', 'equipo')   => 'right',
										esc_html__('Appear from top', 'equipo')     => 'top',
										esc_html__('Appear from bottom', 'equipo')  => 'bottom'
									),
									'dependency' => Array('element' => 'animate', 'value' => 'true')
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Curtain Color','equipo'),
									'group'      => esc_html__('Animation','equipo'),
									'param_name' => 'element_color',
									'value'      => $main_color,
									'dependency' => Array(
										'element' => 'animate', 'value' => 'true',
										'element' => 'animation_type', 'value' => array('curtain-left','curtain-right','curtain-top','curtain-bottom')
									)
								),
								array(
									'type'       => 'textfield',
									'group'      => esc_html__('Animation','equipo'),
									'heading'    => esc_html__('Start delay in ms (enter only integer number)','equipo'),
									'param_name' => 'delay',
									'value'      => '0',
									'dependency' => Array('element' => 'animate', 'value' => 'true')
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
			    		)
			    	));

				/* et_gallery
				----*/

					vc_map(array(
			    		'name'                    => esc_html__('Gallery','equipo'),
			    		'description'             => esc_html__('Insert/animate gallery','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_gallery',
			    		'class'                   => 'et_gallery',
			    		'icon'                    => 'et_gallery',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-gallery.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-gallery.js',
			    		'show_settings_on_create' => true,
			    		'params'                  => array(
			    			array(
								'type'       => 'attach_images',
								'heading'    => esc_html__('Upload images','equipo'),
								'param_name' => 'images',
							),
			    			array(
								'param_name'=>'size',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Size', 'equipo'),
								'value'     => $image_size_values
							),
							array(
			    				'type'       => 'dropdown',
								'heading'    => esc_html__('Gallery type', 'equipo'),
								'param_name' => 'type',
								'value'      => array(
									esc_html__('Grid','equipo')     => 'grid',
									esc_html__('Carousel','equipo') => 'carousel',
									esc_html__('Slider','equipo')   => 'slider',
								)
							),
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Link to','equipo'),
								'param_name' => 'link',
								'value'      => array(
									esc_html__('None','equipo')       => 'none',
									esc_html__('Attachment','equipo') => 'attach',
									esc_html__('Lightbox','equipo')   => 'lightbox',
								)
							),
							array(
								'param_name'=>'columns',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Columns', 'equipo'),
								'value'     => array(
									'1'  => '1',
									'2'  => '2',
									'3'  => '3',
									'4'  => '4',
									'5'  => '5',
									'6'  => '6',
									'7'  => '7',
									'8'  => '8',
									'9'  => '9',
									'10' => '10'
								),
								'dependency' => Array(
									'element' => 'type', 'value' => array('grid','carousel'),
								)
							),
							array(
								'param_name'=>'navigation_type',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Navigation type', 'equipo'),
								'value'     => array(
									esc_html__('Only arrows','equipo')  => 'arrows',
									esc_html__('Only dottes','equipo')  => 'dottes',
									esc_html__('Both arrows and dottes','equipo')  => 'both'
								),
								'dependency' => Array(
									'element' => 'type', 'value' => array('carousel'),
								)
							),
							array(
								'param_name'=>'autoplay',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Autoplay', 'equipo'),
								'value'     => $logic_values,
								'dependency' => Array(
									'element' => 'type', 'value' => array('carousel','carousel-thumbs'),
								)
							),
							array(
								'param_name'=>'border_radius',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Border radius', 'equipo'),
								'value'     => $logic_values,
							),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								)
			    		)
			    	));

				/* et_video
				----*/

					vc_map(array(
			    		'name'                    => esc_html__('Video','equipo'),
			    		'description'             => esc_html__('Insert video (selfhosted, youtube, vimeo)','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_video',
			    		'class'                   => 'et_video',
			    		'icon'                    => 'et_video',
			    		'show_settings_on_create' => true,
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-video.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-video.js',
			    		'params'                  => array(
			    			array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Poster','equipo'),
								'param_name' => 'image',
							),
							array(
								'type'       => 'checkbox',
								'heading'    => esc_html__('Modal','equipo'),
								'param_name' => 'modal',
								'dependency' => Array('element' => 'image', 'not_empty' => true)
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('MP4 video file url','equipo'),
								'param_name' => 'mp4',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Video embed url','equipo'),
								'param_name' => 'embed',
								'value'      => '',
							)
			    		)
			    	));

			    /* et_audio
				----*/

					vc_map(array(
			    		'name'                    => esc_html__('Audio','equipo'),
			    		'description'             => esc_html__('Insert audio','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_audio',
			    		'class'                   => 'et_audio',
			    		'icon'                    => 'et_audio',
			    		'show_settings_on_create' => true,
			    		'params'                  => array(
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('MP3 audio file url','equipo'),
								'param_name' => 'mp3',
								'value'      => '',
							),
			    		)
			    	));

			/* INFOGRAPHICS
			----*/

				/* et_counter
				----*/

					vc_map(array(
			    		'name'                    => esc_html__('Counter','equipo'),
			    		'description'             => esc_html__('Insert number counter','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_counter',
			    		'class'                   => 'et_counter',
			    		'icon'                    => 'et_counter',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-counter.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-counter.js',
			    		'params'                  => array(
				    		array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Text align','equipo'),
								'param_name' => 'text_align',
								'value'      => $align_values,
							),
			    			array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Number','equipo'),
								'param_name' => 'number',
								'value'      => '',
								'description' => esc_html__('Insert an integer value to count to','equipo'),
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Number postfix','equipo'),
								'param_name' => 'number_postfix',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Title','equipo'),
								'param_name' => 'title',
								'value'      => '',
							),
							array(
								'param_name'=>'type',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Title tag', 'equipo'),
								'value'     => array(
									'H1'  => 'h1',
									'H2'  => 'h2',
									'H3'  => 'h3',
									'H4'  => 'h4',
									'H5'  => 'h5',
									'H6'  => 'h6',
									'p'   => 'p',
									'div' => 'div',
								),
								'std' => 'h4'
							),
							array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Icon','equipo'),
								'param_name' => 'icon',
								'value'      => '',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon color','equipo'),
								'param_name' => 'icon_color',
								'value'      => '#1c1c1e'
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Value font-size','equipo'),
								'param_name' => 'value_font_size',
								'value'      => '48'
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Value color','equipo'),
								'param_name' => 'value_color',
								'value'      => $main_color
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Title color','equipo'),
								'param_name' => 'title_color',
								'value'      => '#1c1c1e'
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Start delay in ms (enter only integer number)','equipo'),
								'param_name' => 'delay',
								'value'      => '0',
							),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
			    		)
			    	));

				/* et_progress
				----*/

					vc_map(array(
			    		'name'                    => esc_html__('Progress','equipo'),
			    		'description'             => esc_html__('Insert progress bar','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_progress',
			    		'class'                   => 'et_progress',
			    		'icon'                    => 'et_progress',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-progress.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-progress.js',
			    		'show_settings_on_create' => true,
			    		'params'                  => array(
			    			array(
								'param_name'=>'version',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Type', 'equipo'),
								'value'     => array(
									esc_html__('Default', 'equipo') => 'default',
									esc_html__('Circle', 'equipo')  => 'circle',
								),
								'std' => 'default'
							),
			    			array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Title','equipo'),
								'param_name' => 'title',
								'value'      => '',
							),
							array(
								'param_name'=>'type',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Title tag', 'equipo'),
								'value'     => array(
									'H1'  => 'h1',
									'H2'  => 'h2',
									'H3'  => 'h3',
									'H4'  => 'h4',
									'H5'  => 'h5',
									'H6'  => 'h6',
									'p'   => 'p',
									'div' => 'div',
								),
								'std' => 'h4'
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Percentage','equipo'),
								'param_name' => 'percentage',
								'value'      => '',
								'description' => esc_html__('Only integer value, without any string','equipo'),
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Bar Color','equipo'),
								'param_name' => 'bar_color',
								'value'      => $main_color
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Track Color','equipo'),
								'param_name' => 'track_color',
								'value'      => $area_color
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Text color','equipo'),
								'param_name' => 'text_color',
								'value'      => '#1c1c1e'
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Start delay in ms (enter only integer number)','equipo'),
								'param_name' => 'delay',
								'value'      => '0',
							),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
			    		)
			    	));

			    /* et_timer
				----*/

					vc_map(array(
			    		'name'                    => esc_html__('Timer','equipo'),
			    		'description'             => esc_html__('Insert timer','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_timer',
			    		'class'                   => 'et_timer',
			    		'icon'                    => 'et_timer',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-timer.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-timer.js',
			    		'show_settings_on_create' => true,
			    		'params'                  => array(
			    			array(
								'type'       => 'textfield',
								'heading'    => esc_html__('End date to count to','equipo'),
								'param_name' => 'enddate',
								'value'      => '',
								'description' => esc_html__('Use format : June 7, 2025 15:03:25','equipo'),
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('GMT offset (like +4)','equipo'),
								'param_name' => 'gmt',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extend by N hours automatically on expire','equipo'),
								'param_name' => 'number',
								'value'      => ''
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Days label','equipo'),
								'param_name' => 'days',
								'value'      => ''
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Hours label','equipo'),
								'param_name' => 'hours',
								'value'      => ''
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Minutes label','equipo'),
								'param_name' => 'minutes',
								'value'      => ''
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Seconds label','equipo'),
								'param_name' => 'seconds',
								'value'      => ''
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Value color','equipo'),
								'param_name' => 'value_color',
								'value'      => '#ffffff'
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Back color','equipo'),
								'param_name' => 'back_color',
								'value'      => $main_color
							),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
			    		)
			    	));

			/* OTHER
			----*/

				/* et_bullets
				----*/

			    	vc_map(array(
			    		'name'                    => esc_html__('Bulleted navigation','equipo'),
			    		'description'             => esc_html__('Use only with One page layout active','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_bullets',
			    		'class'                   => 'et_bullets hbe',
			    		'icon'                    => 'et_bullets',
			    		'show_settings_on_create' => true,
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-bullets.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-bullets.js',
			    		'params'                  => array(

			    			array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Menu name','equipo'),
								'param_name' => 'menu',
								'value'      => $menu_list,
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Extra class','equipo'),
								'param_name' => 'extra_class',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('One page navigation offset in px (without any string)','equipo'),
								'description'=> esc_html__('If you have sticky header on the page, you can set the offset','equipo'),
								'param_name' => 'offset',
								'value'      => '0',
							),

							/* styling
							----*/

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Background color','equipo'),
									'group'      => 'Styling',
									'param_name' => 'back_color',
									'value'      => '#1c1c1e',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Color','equipo'),
									'group'      => 'Styling',
									'param_name' => 'color',
									'value'      => '#ffffff',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Color hover','equipo'),
									'group'      => 'Styling',
									'param_name' => 'color_hover',
									'value'      => $main_color,
								),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
			    		)
			    	));

			    /* et_gap
				----*/

			    	vc_map(array(
			    		'name'                    => esc_html__('Gap','equipo'),
			    		'description'             => esc_html__('Insert space','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_gap',
			    		'class'                   => 'et_gap',
			    		'icon'                    => 'et_gap',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-gap.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-gap.js',
			    		'params'                  => array(
			    			array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Gap size (without any string)','equipo'),
								'param_name' => 'height',
								'value'      => '32'
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Custom class','equipo'),
								'param_name' => 'extra_class',
								'value'      => ''
							),
							array(
								'type'       => 'rv',
								'heading'    => esc_html__( 'Responsive visibility', 'equipo' ),
								'group'      => esc_html__('Responsive visibility','equipo'),
								'param_name' => 'rv',
							),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),

			    		)
			    	));

			    	vc_map(array(
			    		'name'                    => esc_html__('Inline gap','equipo'),
			    		'description'             => esc_html__('Insert horizontal space','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_gap_inline',
			    		'class'                   => 'et_gap_inline',
			    		'icon'                    => 'et_gap_inline',
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-gap-inline.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-gap-inline.js',
			    		'params'                  => array(
			    			array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Gap size (without any string)','equipo'),
								'param_name' => 'width',
								'value'      => '32'
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Custom class','equipo'),
								'param_name' => 'extra_class',
								'value'      => ''
							),
							array(
								'type'       => 'rv',
								'heading'    => esc_html__( 'Responsive visibility', 'equipo' ),
								'group'      => esc_html__('Responsive visibility','equipo'),
								'param_name' => 'rv',
							),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),

			    		)
			    	));

			/* WOOCOMMERCE
			----*/

				if (class_exists('Woocommerce')) {

					if(function_exists('wc_get_attribute_taxonomies')){

						$attributes_tax = wc_get_attribute_taxonomies();
						$attributes = array();
						foreach ( $attributes_tax as $attribute ) {
							$attributes[ $attribute->attribute_label ] = $attribute->attribute_name;
						}

					}

					/* et_woo_products
					----*/

				    	vc_map(array(
				    		'name'                    => esc_html__('Woocommerce products','equipo'),
				    		'description'             => esc_html__('Use this element to add different types of products','equipo'),
				    		'category'                => array(esc_html__('Enovathemes','equipo'),esc_html__('WooCommerce','equipo')),
				    		'base'                    => 'et_woo_products',
				    		'class'                   => 'et_woo_products',
				    		'icon'                    => 'et_woo_products',
				    		'show_settings_on_create' => true,
				    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-woo.js',
				    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-woo.js',
				    		'params'                  => array(
				    			array(
									'param_name'=>'ajax',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Query after page load', 'equipo'),
									'description'   => esc_html__('Speed up the website by querying products after page load', 'equipo'),
									'value'     => $logic_values,
								),
				    			array(
									'param_name'=>'layout',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Layout', 'equipo'),
									'value'     => array(
										esc_html__('Grid', 'equipo') => 'grid',
										esc_html__('List', 'equipo') => 'list',
										esc_html__('Full', 'equipo') => 'full',
									)
								),
								array(
									'param_name'=>'carousel',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Carousel', 'equipo'),
									'value'     => $logic_values,
								),
								array(
									'param_name'=>'navigation_type',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Navigation type', 'equipo'),
									'value'     => array(
										esc_html__('Only arrows','equipo')  => 'arrows',
										esc_html__('Only dottes','equipo')  => 'dottes',
										esc_html__('Both arrows and dottes','equipo')  => 'both',
									),
									'dependency' => Array('element' => 'carousel', 'value' => 'true')
								),
								array(
									'param_name'=>'navigation_position',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Navigation position', 'equipo'),
									'value'     => array(
										esc_html__('Top','equipo')  => 'top',
										esc_html__('Side','equipo')  => 'side',
									),
									'dependency' => Array(
										'element' => 'carousel', 'value' => array('true'),
										'element' => 'navigation_type', 'value' => array('arrows','both'),
									)
								),
								array(
									'param_name'=>'autoplay',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Autoplay', 'equipo'),
									'value'     => $logic_values,
									'dependency' => Array('element' => 'carousel', 'value' => 'true')
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6'
									),
									'param_name'  => 'columns_grid',
									'dependency' => Array('element' => 'layout', 'value' => 'grid')
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns tablet portrait', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6'
									),
									'param_name'  => 'columns_grid_tab_port',
									'dependency' => Array('element' => 'layout', 'value' => 'grid')
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns tablet landscape', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6'
									),
									'param_name'  => 'columns_grid_tab_land',
									'dependency' => Array('element' => 'layout', 'value' => 'grid')
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
									),
									'param_name'  => 'columns_list',
									'dependency' => Array('element' => 'layout', 'value' => 'list')
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns tablet portrait', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
									),
									'param_name'  => 'columns_list_tab_port',
									'dependency' => Array('element' => 'layout', 'value' => 'list')
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns tablet landscape', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
									),
									'param_name'  => 'columns_list_tab_land',
									'dependency' => Array('element' => 'layout', 'value' => 'list')
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
									),
									'param_name'  => 'columns_full',
									'dependency' => Array('element' => 'layout', 'value' => 'full')
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Rows', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
									),
									'param_name'  => 'rows',
									'dependency' => Array(
										'element' => 'layout', 'value' => array('grid','list'),
										'element' => 'carousel', 'value' => 'true'
									)
								),
								array(
									'param_name'=>'highlight',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Highlight', 'equipo'),
									'value'     => $logic_values,
								),
								array(
									'param_name'=>'gap',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Gap', 'equipo'),
									'value'     => $logic_values,
									'dependency' => Array('element' => 'layout', 'value' => 'grid')
								),
								array(
									'param_name'=>'discount',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Show discount?', 'equipo'),
									'value'     => $logic_values,
								),
								array(
									'type' => 'textfield',
									'heading' => esc_html__( 'Product title minimum height', 'equipo' ),
									'save_always' => true,
									'param_name' => "min_height",
									'description' => esc_html__( 'Integer value without any string', 'equipo' ),
								),
								array(
									'type' => 'textfield',
									'heading' => esc_html__( 'Product title maximum height', 'equipo' ),
									'save_always' => true,
									'param_name' => "max_height",
									'description' => esc_html__( 'Integer value without any string', 'equipo' ),
								),
								array(
									'type' => 'textfield',
									'heading' => esc_html__( 'Quantity', 'equipo' ),
									'value' => 12,
									'save_always' => true,
									'param_name' => "quantity",
									'description' => esc_html__( 'The "quantity" shortcode determines how many products to show', 'equipo' ),
								),
								array(
									'type' => 'textfield',
									'heading' => esc_html__( 'Category', 'equipo' ),
									'value' => '',
									'param_name' => 'category',
									'save_always' => true,
									'description' => esc_html__( 'Enter comma separated categories slugs if you want to show certain categories', 'equipo' ),
									'dependency' => Array(
										'element' => 'type', 'value' => array('recent','featured','sale','best_selling','top_rated','attribute'),
									)
								),
								array(
									'type' => 'dropdown',
									'heading' => esc_html__( 'Operator', 'equipo' ),
									'param_name' => 'operator',
									'value' => $operator_values,
									'save_always' => true,
									'description' => esc_html__( 'Select filter operator', 'equipo' ),
									'dependency' => Array('element' => 'category', 'not_empty' => true)
								),
								array(
									'type' => 'dropdown',
									'heading' => esc_html__( 'Order by', 'equipo' ),
									'param_name' => 'orderby',
									'value' => $order_by_values,
									'save_always' => true,
									'description' => sprintf( esc_html__( 'Select how to sort retrieved products. More at %s.', 'equipo' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
								),
								array(
									'type' => 'dropdown',
									'heading' => esc_html__( 'Sort order', 'equipo' ),
									'param_name' => 'order',
									'value' => $order_way_values,
									'save_always' => true,
									'description' => sprintf( esc_html__( 'Designates the ascending or descending order. More at %s.', 'equipo' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
								),
								array(
									'param_name'=>'type',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Type', 'equipo'),
									'value'     => array(
										esc_html__('Recent', 'equipo')       => 'recent',
										esc_html__('Featured', 'equipo')     => 'featured',
										esc_html__('Sale', 'equipo')         => 'sale',
										esc_html__('Best selling', 'equipo') => 'best_selling',
										esc_html__('Top rated', 'equipo')    => 'top_rated',
										esc_html__('Attribute', 'equipo')    => 'attribute',
										esc_html__('Related', 'equipo')      => 'related',
										esc_html__('Viewed', 'equipo')       => 'viewed',
										esc_html__('Custom', 'equipo')       => 'custom',
									)
								),

								/* attribute
								----*/

									array(
										'type' => 'dropdown',
										'heading' => esc_html__( 'Attribute', 'equipo' ),
										'param_name' => 'attribute',
										'value' => $attributes,
										'save_always' => true,
										'description' => esc_html__( 'List of product taxonomy attributes', 'equipo' ),
										'dependency' => Array(
											'element' => 'type', 'value' => array('attribute'),
										)
									),
									array(
										'type' => 'textfield',
										'heading' => esc_html__( 'Filter', 'equipo' ),
										'value' => '',
										'param_name' => 'filter',
										'save_always' => true,
										'description' => esc_html__( 'Taxonomy values', 'equipo' ),
										'dependency' => Array(
											'element' => 'type', 'value' => array('attribute'),
										)
									),

								/* custom
								----*/

									array(
										'type' => 'textfield',
										'heading' => esc_html__( 'Products', 'equipo' ),
										'value' => '',
										'param_name' => 'ids',
										'save_always' => true,
										'description' => esc_html__( 'Enter comma separated products ids', 'equipo' ),
										'dependency' => Array(
											'element' => 'type', 'value' => array('custom'),
										)
									),

								/* element_css
								----*/

									array(
										'type'       => 'textfield',
										'heading'    => esc_html__('Element id','equipo'),
										"class"      => "element-attr-hide",
										'param_name' => 'element_id',
										'value'      => '',
									),

									array(
										'type'       => 'textarea',
										'heading'    => esc_html__('Element css','equipo'),
										"class"      => "element-attr-hide",
										'param_name' => 'element_css',
										'value'      => '',
									),
				    		)
				    	));
					

					/* et_woo_simple
					----*/

				    	vc_map(array(
				    		'name'                    => esc_html__('Woocommerce products simple','equipo'),
				    		'description'             => esc_html__('Use this element to add different types of products','equipo'),
				    		'category'                => array(esc_html__('Enovathemes','equipo'),esc_html__('WooCommerce','equipo')),
				    		'base'                    => 'et_woo_products_simple',
				    		'class'                   => 'et_woo_products_simple',
				    		'icon'                    => 'et_woo_products',
				    		'show_settings_on_create' => true,
				    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-woo-simple.js',
				    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-woo-simple.js',
				    		'params'                  => array(
				    			array(
									'param_name'=>'ajax',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Query after page load', 'equipo'),
									'description'   => esc_html__('Speed up the website by querying products after page load', 'equipo'),
									'value'     => $logic_values,
								),
				    			array(
									'param_name'=>'layout',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Layout', 'equipo'),
									'value'     => array(
										esc_html__('Grid', 'equipo') => 'grid',
										esc_html__('List', 'equipo') => 'list',
									)
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6'
									),
									'param_name'  => 'columns_grid',
									'dependency' => Array('element' => 'layout', 'value' => 'grid')
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns tablet portrait', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6'
									),
									'param_name'  => 'columns_grid_tab_port',
									'dependency' => Array('element' => 'layout', 'value' => 'grid')
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns tablet landscape', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6'
									),
									'param_name'  => 'columns_grid_tab_land',
									'dependency' => Array('element' => 'layout', 'value' => 'grid')
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
									),
									'param_name'  => 'columns_list',
									'dependency' => Array('element' => 'layout', 'value' => 'list')
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns tablet portrait', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
									),
									'param_name'  => 'columns_list_tab_port',
									'dependency' => Array('element' => 'layout', 'value' => 'list')
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns tablet landscape', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
									),
									'param_name'  => 'columns_list_tab_land',
									'dependency' => Array('element' => 'layout', 'value' => 'list')
								),
								array(
									'param_name'=>'gap',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Gap', 'equipo'),
									'value'     => $logic_values,
									'dependency' => Array('element' => 'layout', 'value' => 'grid')
								),
								array(
									'type' => 'textfield',
									'heading' => esc_html__( 'Product title minimum height', 'equipo' ),
									'save_always' => true,
									'param_name' => "min_height",
									'description' => esc_html__( 'Integer value without any string', 'equipo' ),
								),
								array(
									'type' => 'textfield',
									'heading' => esc_html__( 'Product title maximum height', 'equipo' ),
									'save_always' => true,
									'param_name' => "max_height",
									'description' => esc_html__( 'Integer value without any string', 'equipo' ),
								),
								array(
									'type' => 'textfield',
									'heading' => esc_html__( 'Quantity', 'equipo' ),
									'value' => 12,
									'save_always' => true,
									'param_name' => "quantity",
									'description' => esc_html__( 'The "quantity" shortcode determines how many products to show', 'equipo' ),
								),
								array(
									'type' => 'textfield',
									'heading' => esc_html__( 'Category', 'equipo' ),
									'value' => '',
									'param_name' => 'category',
									'save_always' => true,
									'description' => esc_html__( 'Enter comma separated categories slugs if you want to show certain categories', 'equipo' ),
									'dependency' => Array(
										'element' => 'type', 'value' => array('recent','featured','sale','best_selling','top_rated','attribute'),
									)
								),
								array(
									'type' => 'dropdown',
									'heading' => esc_html__( 'Operator', 'equipo' ),
									'param_name' => 'operator',
									'value' => $operator_values,
									'save_always' => true,
									'description' => esc_html__( 'Select filter operator', 'equipo' ),
									'dependency' => Array('element' => 'category', 'not_empty' => true)
								),
								array(
									'type' => 'dropdown',
									'heading' => esc_html__( 'Order by', 'equipo' ),
									'param_name' => 'orderby',
									'value' => $order_by_values,
									'save_always' => true,
									'description' => sprintf( esc_html__( 'Select how to sort retrieved products. More at %s.', 'equipo' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
								),
								array(
									'type' => 'dropdown',
									'heading' => esc_html__( 'Sort order', 'equipo' ),
									'param_name' => 'order',
									'value' => $order_way_values,
									'save_always' => true,
									'description' => sprintf( esc_html__( 'Designates the ascending or descending order. More at %s.', 'equipo' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
								),
								array(
									'param_name'=>'type',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Type', 'equipo'),
									'value'     => array(
										esc_html__('Recent', 'equipo')       => 'recent',
										esc_html__('Featured', 'equipo')     => 'featured',
										esc_html__('Sale', 'equipo')         => 'sale',
										esc_html__('Best selling', 'equipo') => 'best_selling',
										esc_html__('Top rated', 'equipo')    => 'top_rated',
										esc_html__('Attribute', 'equipo')    => 'attribute',
										esc_html__('Related', 'equipo')      => 'related',
										esc_html__('Viewed', 'equipo')       => 'viewed',
										esc_html__('Custom', 'equipo')       => 'custom',
									)
								),

								/* attribute
								----*/

									array(
										'type' => 'dropdown',
										'heading' => esc_html__( 'Attribute', 'equipo' ),
										'param_name' => 'attribute',
										'value' => $attributes,
										'save_always' => true,
										'description' => esc_html__( 'List of product taxonomy attributes', 'equipo' ),
										'dependency' => Array(
											'element' => 'type', 'value' => array('attribute'),
										)
									),
									array(
										'type' => 'textfield',
										'heading' => esc_html__( 'Filter', 'equipo' ),
										'value' => '',
										'param_name' => 'filter',
										'save_always' => true,
										'description' => esc_html__( 'Taxonomy values', 'equipo' ),
										'dependency' => Array(
											'element' => 'type', 'value' => array('attribute'),
										)
									),

								/* custom
								----*/

									array(
										'type' => 'textfield',
										'heading' => esc_html__( 'Products', 'equipo' ),
										'value' => '',
										'param_name' => 'ids',
										'save_always' => true,
										'description' => esc_html__( 'Enter comma separated products ids', 'equipo' ),
										'dependency' => Array(
											'element' => 'type', 'value' => array('custom'),
										)
									),

								/* element_css
								----*/

									array(
										'type'       => 'textfield',
										'heading'    => esc_html__('Element id','equipo'),
										"class"      => "element-attr-hide",
										'param_name' => 'element_id',
										'value'      => '',
									),

									array(
										'type'       => 'textarea',
										'heading'    => esc_html__('Element css','equipo'),
										"class"      => "element-attr-hide",
										'param_name' => 'element_css',
										'value'      => '',
									),
				    		)
				    	));
					

					/* et_woo_categories
					----*/

						vc_map(array(
				    		'name'                    => esc_html__('Woocommerce categories','equipo'),
				    		'description'             => esc_html__('Use this element to add product categories','equipo'),
				    		'category'                => array(esc_html__('Enovathemes','equipo'),esc_html__('WooCommerce','equipo')),
				    		'base'                    => 'et_woo_categories',
				    		'class'                   => 'et_woo_categories',
				    		'icon'                    => 'et_woo_categories',
				    		'show_settings_on_create' => true,
				    		"as_parent"               => array('only' => 'et_woo_category'),
		    				'content_element'         => true,
		    				'is_container'            => true,
							"js_view"                 => 'VcColumnView',
				    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-woo-category.js',
				    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-woo-category.js',
				    		'params'                  => array(
				    			array(
									'param_name'=>'layout',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Layout', 'equipo'),
									'value'     => array(
										esc_html__('Grid', 'equipo') => 'grid',
										esc_html__('List', 'equipo') => 'list',
									)
								),
								array(
									'param_name'=>'carousel',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Carousel', 'equipo'),
									'value'     => $logic_values,
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns mobile', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6',
										'7'  => '7',
										'8'  => '8',
										'9'  => '9',
										'10'  => '10',

									),
									'param_name'  => 'columns_mob',
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns tablet portrait', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6',
										'7'  => '7',
										'8'  => '8',
										'9'  => '9',
										'10'  => '10',

									),
									'param_name'  => 'columns_tab_port',
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns tablet landscape', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6',
										'7'  => '7',
										'8'  => '8',
										'9'  => '9',
										'10'  => '10',

									),
									'param_name'  => 'columns_tab_land',
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns desktop', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6',
										'7'  => '7',
										'8'  => '8',
										'9'  => '9',
										'10'  => '10',

									),
									'param_name'  => 'columns_desktop',
								),
								array(
									'param_name'=>'navigation_type',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Navigation type', 'equipo'),
									'value'     => array(
										esc_html__('Only arrows','equipo')  => 'arrows',
										esc_html__('Only dottes','equipo')  => 'dottes',
										esc_html__('Both arrows and dottes','equipo')  => 'both',
									),
									'dependency' => Array('element' => 'carousel', 'value' => array('true'))
								),
								array(
									'param_name'=>'navigation_position',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Navigation position', 'equipo'),
									'value'     => array(
										esc_html__('Top','equipo')  => 'top',
										esc_html__('Side','equipo')  => 'side',
									),
									'dependency' => Array(
										'element' => 'carousel', 'value' => array('true'),
										'element' => 'navigation_type', 'value' => array('arrows','both'),
									)
								),
								array(
									'param_name'=>'autoplay',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Autoplay', 'equipo'),
									'value'     => $logic_values,
									'dependency' => Array('element' => 'carousel', 'value' => array('true'))
								),
								array(
									'param_name'=>'border',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Border', 'equipo'),
									'value'     => $logic_values,
									'dependency' => Array('element' => 'layout', 'value' => array('grid'))
								),
				    		)
				    	));

				    	$categories_raw = get_product_categories_raw();

				    	$category_list = array(esc_html__('Choose','equipo')=>'');

				    	if (!is_wp_error($categories_raw)) {

				    		foreach ($categories_raw as $category => $options) {
				    			$category_list[$options['name']] = $category;
				    		}

				    		vc_add_param('et_woo_category', array(
								'type'       => 'dropdown',
								'heading'    => esc_html__( 'Link to cateogry', 'equipo' ),
								'param_name' => 'category',
								'weight'     => 1,
								'value'      => $category_list,
								'std' => '24'
							));
				    	}

				    	vc_map(array(
							'name'                    => esc_html__('Product category','equipo'),
							'description'             => esc_html__('Insert product category','equipo'),
							'category'                => esc_html__('Enovathemes','equipo'),
							'base'                    => 'et_woo_category',
							'class'                   => 'et_woo_category',
							'icon'                    => 'et_woo_categories',
							'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-woo-single.js',
				    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-woo-single.js',
		    				'as_child'               => array('only' => 'et_woo_categories'),
							'show_settings_on_create' => true,
							'params'                  => array(

								array(
									'type'       => 'attach_image',
									'heading'    => esc_html__('Image or icon','equipo'),
									'param_name' => 'image',
									'value'      => '',
				    				'description'=> esc_html__('Leave blank if you want to show the default','equipo'),

								),
				    			array(
									'param_name'=>'icon_size',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Icon size', 'equipo'),
									'value'     => array(
										esc_html__('Extra small','equipo')    => 'small-x',
										esc_html__('Small','equipo')    => 'small',
										esc_html__('Medium','equipo')   => 'medium',
										esc_html__('Large','equipo')    => 'large',
									),
									'std' => 'large'
								),
								array(
									'param_name'=>'title_tag',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Tag', 'equipo'),
									'value'     => array(
										'H1'  => 'h1',
										'H2'  => 'h2',
										'H3'  => 'h3',
										'H4'  => 'h4',
										'H5'  => 'h5',
										'H6'  => 'h6',
										'p'   => 'p',
										'div' => 'div',
									),
									'std' => 'h6'
								),
								array(
									'param_name'=>'children',
									'type'      => 'dropdown',
									'heading'   => esc_html__('List subcategories?', 'equipo'),
									'value'     => $logic_values,
								),

							)
						));

					/* et_woo_attributes
					----*/

						$woo_attributes       = wc_get_attribute_taxonomies();
						$woo_attributes_array = array(esc_html__('Choose','equipo')=>'');

						if (!empty($woo_attributes) && !is_wp_error($woo_attributes)) {
			                foreach( $woo_attributes as $attribute) {
			                	$woo_attributes_array[$attribute->attribute_label] = $attribute->attribute_name;
			                }
			            }

						vc_map(array(
							'name'                    => esc_html__('Woocommerce attributes','equipo'),
							'description'             => esc_html__('Use this element to add product attributes','equipo'),
							'category'                => array(esc_html__('Enovathemes','equipo'),esc_html__('WooCommerce','equipo')),
							'base'                    => 'et_woo_attributes',
							'class'                   => 'et_woo_attributes',
							'icon'                    => 'et_woo_attributes',
							'show_settings_on_create' => true,
							'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-woo-attribute.js',
							'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-woo-attribute.js',
							'params'                  => array(
								array(
									'type' => 'dropdown',
									'heading'    => esc_html__( 'Choose attribute', 'equipo' ),
									'value'      => $woo_attributes_array,
									'param_name' => 'attribute',
								),
								array(
									'param_name'=>'title_tag',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Tag', 'equipo'),
									'value'     => array(
										'H1'  => 'h1',
										'H2'  => 'h2',
										'H3'  => 'h3',
										'H4'  => 'h4',
										'H5'  => 'h5',
										'H6'  => 'h6',
										'p'   => 'p',
										'div' => 'div',
									),
									'std' => 'h6'
								),
								array(
									'param_name'=>'carousel',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Carousel', 'equipo'),
									'value'     => $logic_values,
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns mobile', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6',
										'7'  => '7',
										'8'  => '8',
										'9'  => '9',
										'10'  => '10',

									),
									'param_name'  => 'columns_mob',
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns tablet portrait', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6',
										'7'  => '7',
										'8'  => '8',
										'9'  => '9',
										'10'  => '10',

									),
									'param_name'  => 'columns_tab_port',
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns tablet landscape', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6',
										'7'  => '7',
										'8'  => '8',
										'9'  => '9',
										'10'  => '10',

									),
									'param_name'  => 'columns_tab_land',
								),
								array(
									'type' => 'dropdown',
									'heading'     => esc_html__( 'Columns desktop', 'equipo' ),
									'value'     => array(
										'1'  => '1',
										'2'  => '2',
										'3'  => '3',
										'4'  => '4',
										'5'  => '5',
										'6'  => '6',
										'7'  => '7',
										'8'  => '8',
										'9'  => '9',
										'10'  => '10',

									),
									'param_name'  => 'columns_desktop',
								),
								array(
									'param_name'=>'navigation_type',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Navigation type', 'equipo'),
									'value'     => array(
										esc_html__('Only arrows','equipo')  => 'arrows',
										esc_html__('Only dottes','equipo')  => 'dottes',
										esc_html__('Both arrows and dottes','equipo')  => 'both',
									),
									'dependency' => Array('element' => 'carousel', 'value' => array('true'))
								),
								array(
									'param_name'=>'navigation_position',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Navigation position', 'equipo'),
									'value'     => array(
										esc_html__('Top','equipo')  => 'top',
										esc_html__('Side','equipo')  => 'side',
									),
									'dependency' => Array(
										'element' => 'carousel', 'value' => array('true'),
										'element' => 'navigation_type', 'value' => array('arrows','both'),
									)
								),
								array(
									'param_name'=>'autoplay',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Autoplay', 'equipo'),
									'value'     => $logic_values,
									'dependency' => Array('element' => 'carousel', 'value' => array('true'))
								)
							)
						));

				    /* et_woo_filter
					----*/

						vc_map(array(
				    		'name'                    => esc_html__('Woocommerce product filter','equipo'),
				    		'description'             => esc_html__('Use this element to filter products','equipo'),
				    		'category'                => array(esc_html__('Enovathemes','equipo'),esc_html__('WooCommerce','equipo')),
				    		'base'                    => 'et_woo_filter',
				    		'class'                   => 'et_woo_filter',
				    		'icon'                    => 'et_woo_categories',
				    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-woo-filter.js',
				    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-woo-filter.js',
				    		'show_settings_on_create' => true,
				    		'params'                  => array(
				    			array(
									'type'       => 'atts',
									'heading'    => esc_html__('Attributes','equipo'),
									'param_name' => 'atts',
									"class"      => "element-attr-hide",
									'value'      => '',
								),
								array(
									'param_name'=>'sku',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Search by SKU?', 'equipo'),
									'group'      => esc_html__('Settings','equipo'),
									'value'     => $logic_values,
								),
								array(
									'param_name'=>'orientation',
									'type'      => 'dropdown',
									'heading'   => esc_html__('Orientation', 'equipo'),
									'group'      => esc_html__('Settings','equipo'),
									'value'     => array(
										esc_html__('Horizontal','equipo')  => 'horizontal',
										esc_html__('Vertical','equipo')  => 'vertical',
									)
								),

								array(
									'type'       => 'textarea_html',
									'group'      => esc_html__('Settings','equipo'),
									'heading'    => esc_html__('Title','equipo'),
									'param_name' => 'content',
									'value'      => '',
								),

								array(
									'type'       => 'colorpicker',
									'group'      => esc_html__('Styling','equipo'),
									'heading'    => esc_html__('Background color','equipo'),
									'param_name' => 'background_color',
									'value'      => '',
								),

								array(
									'type'       => 'colorpicker',
									'group'      => esc_html__('Styling','equipo'),
									'heading'    => esc_html__('Text color','equipo'),
									'param_name' => 'text_color',
									'value'      => '',
								),

								array(
									'type'       => 'colorpicker',
									'group'      => esc_html__('Styling','equipo'),
									'heading'    => esc_html__('Select background color','equipo'),
									'param_name' => 'select_background_color',
									'value'      => '',
								),

								array(
									'type'       => 'colorpicker',
									'group'      => esc_html__('Styling','equipo'),
									'heading'    => esc_html__('Select border color','equipo'),
									'param_name' => 'select_border_color',
									'value'      => '',
								),

								array(
									'type'       => 'colorpicker',
									'group'      => esc_html__('Styling','equipo'),
									'heading'    => esc_html__('Select text color','equipo'),
									'param_name' => 'select_text_color',
									'value'      => '',
								),

								array(
									'type'       => 'colorpicker',
									'group'      => esc_html__('Styling','equipo'),
									'heading'    => esc_html__('Button background color','equipo'),
									'param_name' => 'button_background_color',
									'value'      => '',
								),
								array(
									'type'       => 'colorpicker',
									'group'      => esc_html__('Styling','equipo'),
									'heading'    => esc_html__('Button text color','equipo'),
									'param_name' => 'button_text_color',
									'value'      => '',
								),

								array(
									'type'       => 'colorpicker',
									'group'      => esc_html__('Styling','equipo'),
									'heading'    => esc_html__('Button background color hover','equipo'),
									'param_name' => 'button_background_color_hover',
									'value'      => '',
								),
								array(
									'type'       => 'colorpicker',
									'group'      => esc_html__('Styling','equipo'),
									'heading'    => esc_html__('Button text color hover','equipo'),
									'param_name' => 'button_text_color_hover',
									'value'      => '',
								),

								array(
									'type'       => 'checkbox',
									'heading'    => esc_html__('Box shadow','equipo'),
									'group'      => esc_html__('Styling','equipo'),
									'param_name' => 'box_shadow',
									'value'      => '',
								),

								/* element_css
								----*/

									array(
										'type'       => 'textfield',
										'heading'    => esc_html__('Element id','equipo'),
										"class"      => "element-attr-hide",
										'param_name' => 'element_id',
										'value'      => '',
									),

									array(
										'type'       => 'textarea',
										'heading'    => esc_html__('Element css','equipo'),
										"class"      => "element-attr-hide",
										'param_name' => 'element_css',
										'value'      => '',
									),
								
				    		)
				    	));

				    /* et_wishlist
					----*/

				    	vc_map(array(
				    		'name'                    => esc_html__('Woocommerce wishlist','equipo'),
				    		'description'             => esc_html__('Use this element to add table of products in the wishlist','equipo'),
				    		'category'                => array(esc_html__('Enovathemes','equipo'),esc_html__('WooCommerce','equipo')),
				    		'base'                    => 'wishlist',
				    		'class'                   => 'wishlist',
				    		'icon'                    => 'et_wishlist',
				    	));

				    /* et_compare
					----*/

				    	vc_map(array(
				    		'name'                    => esc_html__('Woocommerce compare','equipo'),
				    		'description'             => esc_html__('Use this element to add table of products in the compare','equipo'),
				    		'category'                => array(esc_html__('Enovathemes','equipo'),esc_html__('WooCommerce','equipo')),
				    		'base'                    => 'compare',
				    		'class'                   => 'compare',
				    		'icon'                    => 'et_compare',
				    	));

				}

			/* POSTS
			----*/

				/* et_posts
				----*/

			    	vc_map(array(
			    		'name'                    => esc_html__('Posts','equipo'),
			    		'description'             => esc_html__('Use this element to add posts','equipo'),
			    		'category'                => esc_html__('Enovathemes','equipo'),
			    		'base'                    => 'et_posts',
			    		'class'                   => 'et_posts',
			    		'icon'                    => 'et_posts',
			    		'show_settings_on_create' => true,
			    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-post.js',
			    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-post.js',
			    		'params'                  => array(
			    			array(
								'param_name'=>'ajax',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Query after page load', 'equipo'),
									'description'   => esc_html__('Speed up the website by querying posts after page load', 'equipo'),
								'value'     => $logic_values,
							),
			    			array(
								'param_name'=>'layout',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Layout', 'equipo'),
								'value'     => array(
									esc_html__('Grid', 'equipo')     => 'grid',
									esc_html__('List', 'equipo')     => 'list',
									esc_html__('Carousel', 'equipo') => 'carousel',
									esc_html__('Full', 'equipo')     => 'full',
								)
							),
							array(
								'type' => 'dropdown',
								'heading'     => esc_html__( 'Columns', 'equipo' ),
								'value'     => array(
									'1'  => '1',
									'2'  => '2',
									'3'  => '3',
									'4'  => '4',
								),
								'param_name'  => 'columns_grid',
								'dependency' => Array('element' => 'layout', 'value' => array('grid','carousel'))
							),
							array(
								'param_name'=>'navigation_type',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Navigation type', 'equipo'),
								'value'     => array(
									esc_html__('Only arrows','equipo')  => 'arrows',
									esc_html__('Only dottes','equipo')  => 'dottes',
									esc_html__('Both arrows and dottes','equipo')  => 'both',
								),
								'dependency' => Array('element' => 'layout', 'value' => array('carousel'))
							),
							array(
								'param_name'=>'autoplay',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Autoplay', 'equipo'),
								'value'     => $logic_values,
								'dependency' => Array('element' => 'layout', 'value' => array('carousel'))
							),
							array(
								'type' => 'textfield',
								'heading' => esc_html__( 'Quantity', 'equipo' ),
								'value' => 12,
								'save_always' => true,
								'param_name' => "quantity",
								'description' => esc_html__( 'The "quantity" shortcode determines how many posts to show', 'equipo' ),
							),
							array(
								'type' => 'textfield',
								'heading' => esc_html__( 'Category', 'equipo' ),
								'value' => '',
								'param_name' => 'category',
								'save_always' => true,
								'description' => esc_html__( 'Enter comma separated categories slugs if you want to show certain categories', 'equipo' ),
							),
							array(
								'type' => 'dropdown',
								'heading' => esc_html__( 'Operator', 'equipo' ),
								'param_name' => 'operator',
								'value' => $operator_values,
								'save_always' => true,
								'description' => esc_html__( 'Select filter operator', 'equipo' ),
								'dependency' => Array('element' => 'category', 'not_empty' => true)
							),
							array(
								'type' => 'dropdown',
								'heading' => esc_html__( 'Order by', 'equipo' ),
								'param_name' => 'orderby',
								'value' => $order_by_values,
								'save_always' => true,
								'description' => sprintf( esc_html__( 'Select how to sort retrieved products. More at %s.', 'equipo' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
							),
							array(
								'type' => 'dropdown',
								'heading' => esc_html__( 'Sort order', 'equipo' ),
								'param_name' => 'order',
								'value' => $order_way_values,
								'save_always' => true,
								'description' => sprintf( esc_html__( 'Designates the ascending or descending order. More at %s.', 'equipo' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
							),
							array(
								'type' => 'textfield',
								'heading' => esc_html__( 'Post excerpt length', 'equipo' ),
								'value' => '104',
								'param_name' => 'excerpt',
							),
							array(
								'type' => 'textfield',
								'heading' => esc_html__( 'Post title length', 'equipo' ),
								'value' => '46',
								'param_name' => 'title_length',
							),

							/* element_css
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Element id','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_id',
									'value'      => '',
								),

								array(
									'type'       => 'textarea',
									'heading'    => esc_html__('Element css','equipo'),
									"class"      => "element-attr-hide",
									'param_name' => 'element_css',
									'value'      => '',
								),
			    		)
			    	));

		/* HEADER BUILDER
		----*/

			$vc_menu_categories = array(
				esc_html__('Desktop header','equipo'),
				esc_html__('Mobile header','equipo'),
				// esc_html__('Sidebar header','equipo')
			);

			/* et_header_logo
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Header logo','equipo'),
		    		'description'             => esc_html__('Use only with header builder','equipo'),
		    		'category'                => $vc_menu_categories,
		    		'base'                    => 'et_header_logo',
		    		'class'                   => 'et_header_logo hbe',
		    		'icon'                    => 'et_header_logo',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-header-logo.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-header-logo.js',
		    		'params'                  => array(
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
							'value'     => $align_values_extended,
							'default' => 'left'
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						/* static header
						----*/

							array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Normal logo','equipo'),
								'group'      => esc_html__('Default logo','equipo'),
								'param_name' => 'logo',
							),

							array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Retina logo (twice the width and height of normal logo)','equipo'),
								'group'      => esc_html__('Default logo','equipo'),
								'description'=> esc_html__('Ignore if your logo has SVG format','equipo'),
								'param_name' => 'retina_logo',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Width (without any string)','equipo'),
								'group'      => esc_html__('Default logo','equipo'),
								'param_name' => 'width',
								'value'      => '148',
							),

						/* sticky header
						----*/

							array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Normal logo','equipo'),
								'group'      => esc_html__('Sticky logo','equipo'),
								'param_name' => 'sticky_logo',
							),

							array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Retina logo (twice the width and height of normal logo)','equipo'),
								'group'      => esc_html__('Sticky logo','equipo'),
								'description'=> esc_html__('Ignore if your logo has SVG format','equipo'),
								'param_name' => 'sticky_retina_logo',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Width (without any string)','equipo'),
								'group'      => esc_html__('Sticky logo','equipo'),
								'param_name' => 'sticky_width',
								'value'      => '',
							),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),

		    		)
		    	));

			/* et_header_menu
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Header navigation menu','equipo'),
		    		'description'             => esc_html__('Use only with header builder','equipo'),
		    		'category'                => $vc_menu_categories[0],
		    		'base'                    => 'et_header_menu',
		    		'class'                   => 'et_header_menu hbe font',
		    		'icon'                    => 'et_header_menu',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-header-menu.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-header-menu.js',
		    		'params'                  => array(
		    			array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Menu name','equipo'),
							'param_name' => 'menu',
							'value'      => $menu_list,
							'default'    => 'choose'
						),
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
							'value'     => $align_values_extended
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('One page layout navigation','equipo'),
							'description' => esc_html__('If you want yo use this menu as one page layout navigation, check this option.', 'equipo'),
							'param_name' => 'one_page',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('One page navigation offset in px (without any string)','equipo'),
							'param_name' => 'offset',
							'value'      => '0',
							'dependency' => Array('element' => 'one_page', 'value' => "true")
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						/* top level
						----*/

							/* styling
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Space between menu items in px (without any string)','equipo'),
									'group'      => 'Top level',
									'param_name' => 'menu_space',
									'value'      => '40',
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Items separator','equipo'),
									'group'      => 'Top level',
									'param_name' => 'menu_separator',
									'value'      => $logic_values
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Items separator color','equipo'),
									'group'      => 'Top level',
									'param_name' => 'menu_separator_color',
									'value'      => '#e0e0e0',
									'dependency' => Array('element' => 'menu_separator', 'value' => 'true')
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Items separator height (without any string)','equipo'),
									'description'=> esc_html__('Leave blank if you want 100% height','equipo'),
									'group'      => 'Top level',
									'param_name' => 'menu_separator_height',
									'value'      => '',
									'dependency' => Array('element' => 'menu_separator', 'value' => 'true')
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Submenu indicator','equipo'),
									'group'      => 'Top level',
									'param_name' => 'submenu_indicator',
									'value'      => $logic_values
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Menu color','equipo'),
									'group'      => 'Top level',
									'param_name' => 'menu_color',
									'value'      => '#1c1c1e',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Menu color hover','equipo'),
									'group'      => 'Top level',
									'param_name' => 'menu_color_hover',
									'value'      => $main_color,
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Menu hover effect','equipo'),
									'group'      => 'Top level',
									'param_name' => 'menu_hover',
									'value'      => array(
										esc_html__('None','equipo')      => 'none',
										esc_html__('Underline','equipo') => 'underline',
										esc_html__('Overline','equipo')  => 'overline',
										esc_html__('Outline','equipo')   => 'outline',
										esc_html__('Box','equipo')       => 'box',
										esc_html__('Fill','equipo')      => 'fill',
									),
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Menu hover effect color','equipo'),
									'group'      => 'Top level',
									'param_name' => 'menu_effect_color',
									'value'      => '',
									'dependency' => Array('element' => 'menu_hover', 'value' => array('underline','overline','outline','box','fill'))
								),

							/* typography
							----*/

								array(
									'param_name'=>'font_family',
									'type'      => 'dropdown',
									'group'     => esc_html__('Top level','equipo'),
									'heading'   => esc_html__('Font family', 'equipo'),
									'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
									'value'     => $google_fonts_family,
								),
								array(
									'param_name'=>'font_weight',
									'type'      => 'dropdown',
									'group'     => esc_html__('Top level','equipo'),
									'heading'   => esc_html__('Font weight', 'equipo'),
									'value'     => $font_weight_values,
									'std'       => '700'
								),
								array(
									'param_name'=>'font_subsets',
									'type'      => 'dropdown',
									'group'     => esc_html__('Top level','equipo'),
									'heading'   => esc_html__('Font subsets', 'equipo'),
									'value'      => array(
										'latin' => 'latin',
									)
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Font size (without any string)','equipo'),
									'group'      => esc_html__('Top level','equipo'),
									'param_name' => 'font_size',
									'value'      => '16',
								),
								array(
									'type'       => 'textfield',
									'group'      => esc_html__('Top level','equipo'),
									'heading'    => esc_html__('Letter spacing (without any string)','equipo'),
									'param_name' => 'letter_spacing',
									'value'      => ''
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Text transform','equipo'),
									'group'      => 'Top level',
									'param_name' => 'text_transform',
									'value'      => array(
										esc_html__('None','equipo')       => 'none',
										esc_html__('Uppercase','equipo')  => 'uppercase',
										esc_html__('Lowercase','equipo')  => 'lowercase',
										esc_html__('Capitalize','equipo') => 'capitalize',
									)
								),

						/* submenu
						----*/

							/* styling
							----*/

								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Offset','equipo'),
									'description'=> esc_html__('Leave blank to have 100% offset','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenuoffset',
									'value'      => '',
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Submenu color','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenu_color',
									'value'      => '#1c1c1e',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Submenu color hover','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenu_color_hover',
									'value'      => $main_color,
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Submenu background color','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenu_back_color',
									'value'      => '#ffffff',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Submenu background color hover','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenu_back_color_hover',
									'value'      => '',
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Submenu shadow','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenu_shadow',
									'value'      => $logic_values
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Submenu indicator','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenu_submenu_indicator',
									'value'      => $logic_values
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Submenu items separator','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenu_separator',
									'value'      => $logic_values
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Submenu appear effect','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenu_appear',
									'value'      => array(
										esc_html__('Default','equipo')   => 'none',
										esc_html__('Fade','equipo')      => 'fade',
									),
								),


							/* typography
							----*/

								array(
									'param_name'=>'subfont_family',
									'type'      => 'dropdown',
									'group'     => esc_html__('Submenu','equipo'),
									'heading'   => esc_html__('Submenu font family', 'equipo'),
									'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
									'value'     => $google_fonts_family,
								),
								array(
									'param_name'=>'subfont_weight',
									'type'      => 'dropdown',
									'group'     => esc_html__('Submenu','equipo'),
									'heading'   => esc_html__('Submenu font weight', 'equipo'),
									'value'     => $font_weight_values
								),
								array(
									'param_name'=>'subfont_subsets',
									'type'      => 'dropdown',
									'group'     => esc_html__('Submenu','equipo'),
									'heading'   => esc_html__('Submenu font subsets', 'equipo'),
									'value'      => array(
										'latin' => 'latin',
									)
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Submenu font size (without any string)','equipo'),
									'group'      => esc_html__('Submenu','equipo'),
									'param_name' => 'subfont_size',
									'value'      => '16',
								),
								array(
									'type'       => 'textfield',
									'group'      => esc_html__('Submenu','equipo'),
									'heading'    => esc_html__('Submenu letter spacing (without any string)','equipo'),
									'param_name' => 'subletter_spacing',
									'value'      => ''
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Submenu text transform','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'subtext_transform',
									'value'      => array(
										esc_html__('None','equipo')       => 'none',
										esc_html__('Uppercase','equipo')  => 'uppercase',
										esc_html__('Lowercase','equipo')  => 'lowercase',
										esc_html__('Capitalize','equipo') => 'capitalize',
									)
								),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element font','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_font',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element font','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'subelement_font',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),

						/* visibility
						----*/

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from default header version?','equipo'),
								'param_name' => 'hide_default',
								'value'      => '',
							),

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from sticky header version?','equipo'),
								'param_name' => 'hide_sticky',
								'value'      => '',
							),
		    		)
		    	));

			/* et_megamenu
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Megamenu','equipo'),
		    		'description'             => esc_html__('Use only with megamenu builder','equipo'),
		    		'category'                => $vc_menu_categories[0],
		    		'base'                    => 'et_megamenu',
		    		'class'                   => 'et_megamenu hbe font',
		    		'icon'                    => 'et_megamenu',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-megamenu.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-megamenu.js',
		    		'params'                  => array(
		    			array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Menu name','equipo'),
							'param_name' => 'menu',
							'value'      => $menu_list,
						),
						array(
							'param_name'=>'columns',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Column', 'equipo'),
							'value'     => array(
								'1'  => '1',
								'2'  => '2',
								'3'  => '3',
								'4'  => '4',
								'5'  => '5',
								'6'  => '6'
							)
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						/* top level
						----*/

							/* styling
							----*/

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Menu color','equipo'),
									'group'      => 'Top level',
									'param_name' => 'menu_color',
									'value'      => '#1c1c1e',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Menu color hover','equipo'),
									'group'      => 'Top level',
									'param_name' => 'menu_color_hover',
									'value'      => $main_color,
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Megamenu top level item border-bottom color','equipo'),
									'group'      => 'Top level',
									'param_name' => 'megamenu_border_color',
									'value'      => '',
								),

							/* typography
							----*/

								array(
									'param_name'=>'font_family',
									'type'      => 'dropdown',
									'group'     => esc_html__('Top level','equipo'),
									'heading'   => esc_html__('Font family', 'equipo'),
									'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
									'value'     => $google_fonts_family,
								),
								array(
									'param_name'=>'font_weight',
									'type'      => 'dropdown',
									'group'     => esc_html__('Top level','equipo'),
									'heading'   => esc_html__('Font weight', 'equipo'),
									'value'     => $font_weight_values,
									'std'       => '700'
								),
								array(
									'param_name'=>'font_subsets',
									'type'      => 'dropdown',
									'group'     => esc_html__('Top level','equipo'),
									'heading'   => esc_html__('Font subsets', 'equipo'),
									'value'      => array(
										'latin' => 'latin',
									)
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Font size (without any string)','equipo'),
									'group'      => esc_html__('Top level','equipo'),
									'param_name' => 'font_size',
									'value'      => '16',
								),
								array(
									'type'       => 'textfield',
									'group'      => esc_html__('Top level','equipo'),
									'heading'    => esc_html__('Letter spacing (without any string)','equipo'),
									'param_name' => 'letter_spacing',
									'value'      => ''
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Text transform','equipo'),
									'group'      => 'Top level',
									'param_name' => 'text_transform',
									'value'      => array(
										esc_html__('None','equipo')       => 'none',
										esc_html__('Uppercase','equipo')  => 'uppercase',
										esc_html__('Lowercase','equipo')  => 'lowercase',
										esc_html__('Capitalize','equipo') => 'capitalize',
									)
								),

						/* submenu
						----*/

							/* styling
							----*/

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Submenu color','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenu_color',
									'value'      => '#1c1c1e',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Submenu color hover','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenu_color_hover',
									'value'      => $main_color,
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Submenu background color hover','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenu_back_color_hover',
									'value'      => '',
								),

								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Submenu items separator','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenu_separator',
									'value'      => $logic_values
								),

							/* typography
							----*/

								array(
									'param_name'=>'subfont_family',
									'type'      => 'dropdown',
									'group'     => esc_html__('Submenu','equipo'),
									'heading'   => esc_html__('Submenu font family', 'equipo'),
									'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
									'value'     => $google_fonts_family,
								),
								array(
									'param_name'=>'subfont_weight',
									'type'      => 'dropdown',
									'group'     => esc_html__('Submenu','equipo'),
									'heading'   => esc_html__('Submenu font weight', 'equipo'),
									'value'     => $font_weight_values
								),
								array(
									'param_name'=>'subfont_subsets',
									'type'      => 'dropdown',
									'group'     => esc_html__('Submenu','equipo'),
									'heading'   => esc_html__('Submenu font subsets', 'equipo'),
									'value'      => array(
										'latin' => 'latin',
									)
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Submenu font size (without any string)','equipo'),
									'group'      => esc_html__('Submenu','equipo'),
									'param_name' => 'subfont_size',
									'value'      => '',
								),
								array(
									'type'       => 'textfield',
									'group'      => esc_html__('Submenu','equipo'),
									'heading'    => esc_html__('Submenu letter spacing (without any string)','equipo'),
									'param_name' => 'subletter_spacing',
									'value'      => ''
								),
								array(
									'type'       => 'textfield',
									'group'      => esc_html__('Submenu','equipo'),
									'heading'    => esc_html__('Submenu line height (without any string)','equipo'),
									'param_name' => 'subline_height',
									'value'      => '22'
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Submenu text transform','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'subtext_transform',
									'value'      => array(
										esc_html__('None','equipo')       => 'none',
										esc_html__('Uppercase','equipo')  => 'uppercase',
										esc_html__('Lowercase','equipo')  => 'lowercase',
										esc_html__('Capitalize','equipo') => 'capitalize',
									)
								),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => '32,0,16,0'
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element font','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_font',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element font','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'subelement_font',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),

		    		)
		    	));

			/* et_megamenu_tab
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Megamenu tab','equipo'),
		    		'description'             => esc_html__('Use only with megamenu builder','equipo'),
		    		'category'                => $vc_menu_categories[0],
		    		'base'                    => 'et_megamenu_tab',
		    		'class'                   => 'et_megamenu_tab hbe font',
		    		'icon'                    => 'et_megamenu_tab',
		    		'as_parent'               => array('only' => 'et_megamenu_tab_item'),
		    		'content_element'         => true,
		    		'show_settings_on_create' => true,
		    		'is_container'            => true,
		    		'js_view'                 => 'VcColumnView',
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-megamenu-tab.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-megamenu-tab.js',
		    		'params'                  => array(
						array(
							'param_name'=>'size',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Tabs size', 'equipo'),
							'value'     => $size_values_box
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),
						array(
							'param_name'=>'action',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Toggle on', 'equipo'),
							'value'     => array(
								esc_html__('On click','equipo')  => 'click',
								esc_html__('On hover','equipo')  => 'hover',
							)
						),

						/* styling
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Tabset background color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'tabset_color',
								'value'      => '#ffffff',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Tab content background color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'tab_content_color',
								'value'      => '#f5f5f5',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Menu color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'menu_color',
								'value'      => '#1c1c1e',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Menu color hover','equipo'),
								'group'      => 'Styling',
								'param_name' => 'menu_color_hover',
								'value'      => $main_color,
							),

						/* typography
						----*/

							array(
								'param_name'=>'font_family',
								'type'      => 'dropdown',
								'group'     => esc_html__('Typography','equipo'),
								'heading'   => esc_html__('Font family', 'equipo'),
								'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
								'value'     => $google_fonts_family,
							),
							array(
								'param_name'=>'font_weight',
								'type'      => 'dropdown',
								'group'     => esc_html__('Typography','equipo'),
								'heading'   => esc_html__('Font weight', 'equipo'),
								'value'     => $font_weight_values,
								'std'       => '700'
							),
							array(
								'param_name'=>'font_subsets',
								'type'      => 'dropdown',
								'group'     => esc_html__('Typography','equipo'),
								'heading'   => esc_html__('Font subsets', 'equipo'),
								'value'      => array(
									'latin' => 'latin',
								)
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Font size (without any string)','equipo'),
								'group'      => esc_html__('Typography','equipo'),
								'param_name' => 'font_size',
								'value'      => '16',
							),
							array(
								'type'       => 'textfield',
								'group'      => esc_html__('Typography','equipo'),
								'heading'    => esc_html__('Letter spacing (without any string)','equipo'),
								'param_name' => 'letter_spacing',
								'value'      => ''
							),
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Text transform','equipo'),
								'group'      => 'Typography',
								'param_name' => 'text_transform',
								'value'      => array(
									esc_html__('None','equipo')       => 'none',
									esc_html__('Uppercase','equipo')  => 'uppercase',
									esc_html__('Lowercase','equipo')  => 'lowercase',
									esc_html__('Capitalize','equipo') => 'capitalize',
								)
							),

						/* padding
						----*/

							array(
								'type'       => 'padding',
								'group'      => esc_html__('Padding','equipo'),
								'heading'    => esc_html__('Padding','equipo'),
								'param_name' => 'padding',
								'value'      => ''
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element font','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_font',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),
		    		)
		    	));

				vc_map(array(
					'name'                    => esc_html__('Megamenu tab item','equipo'),
					'category'                => $vc_menu_categories[0],
					'base'                    => 'et_megamenu_tab_item',
					'class'                   => 'et_megamenu_tab_item hbe',
					'icon'                    => 'et_megamenu_tab_item',
					'as_child'                => array('only' => 'et_megamenu_tab'),
					"as_parent"               => array('except' => 'vc_section'),
					'content_element'         => true,
					"js_view"                 => 'VcColumnView',
					'show_settings_on_create' => true,
					'params'                  => array(
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Active','equipo'),
							'param_name' => 'active',
							'value'      => array(
								'false' => 'false',
								'true'  => 'true'
							)
						),
						
						array(
		    				'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => ''
						),

						array(
							'type'       => 'attach_image',
							'heading'    => esc_html__('Icon','equipo'),
							'param_name' => 'icon',
							'value'      => '',
						)
					)
				));

			/* et_search_toggle
			----*/

		    // 	vc_map(array(
		    // 		'name'                    => esc_html__('Search toggle','equipo'),
		    // 		'description'             => esc_html__('Use only with header builder','equipo'),
		    // 		'category'                => array($vc_menu_categories[0],$vc_menu_categories[1]),
		    // 		'base'                    => 'et_search_toggle',
		    // 		'class'                   => 'et_search_toggle hbe',
		    // 		'icon'                    => 'et_search_toggle',
		    // 		'show_settings_on_create' => true,
		    // 		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-search-toggle.js',
		    // 		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-search-toggle.js',
		    // 		'params'                  => array(
						// array(
						// 	'param_name'=>'align',
						// 	'type'      => 'dropdown',
						// 	'heading'   => esc_html__('Align', 'equipo'),
						// 	'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
						// 	'value'     => $align_values_extended
						// ),
						// array(
						// 	'type'       => 'textfield',
						// 	'heading'    => esc_html__('Extra class','equipo'),
						// 	'param_name' => 'extra_class',
						// 	'value'      => '',
						// ),

						// /* styling
						// ----*/

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon color','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_color',
						// 		'value'      => '#000000',
						// 	),
						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon background color','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_background_color',
						// 		'value'      => '',
						// 	),
						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon border color','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_border_color',
						// 		'value'      => '',
						// 	),
						// 	array(
						// 		'type'       => 'textfield',
						// 		'group'      => 'Styling',
						// 		'heading'    => esc_html__('Icon border width in px (without any string)','equipo'),
						// 		'param_name' => 'icon_border_width',
						// 	),

						// /* searchbox
						// ----*/

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Search box color','equipo'),
						// 		'group'      => 'Search box',
						// 		'param_name' => 'search_color',
						// 		'value'      => '#616161',
						// 	),
						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Search box background color','equipo'),
						// 		'group'      => 'Search box',
						// 		'param_name' => 'search_background_color',
						// 		'value'      => '#ffffff',
						// 	),
						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon color','equipo'),
						// 		'group'      => 'Search box',
						// 		'param_name' => 'search_icon_color',
						// 		'value'      => '#ffffff',
						// 	),
						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon background color','equipo'),
						// 		'group'      => 'Search box',
						// 		'param_name' => 'search_icon_background_color',
						// 		'value'      => '#1c1c1e',
						// 	),
						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon background color hover','equipo'),
						// 		'group'      => 'Search box',
						// 		'param_name' => 'search_icon_background_color_hover',
						// 		'value'      => $main_color,
						// 	),

						// /* margin
						// ----*/

						// 	array(
						// 		'type'       => 'margin',
						// 		'group'      => esc_html__('Margin','equipo'),
						// 		'heading'    => esc_html__('Margin','equipo'),
						// 		'param_name' => 'margin',
						// 		'value'      => ''
						// 	),

						// /* element_css
						// ----*/

						// 	array(
						// 		'type'       => 'textfield',
						// 		'heading'    => esc_html__('Element id','equipo'),
						// 		"class"      => "element-attr-hide",
						// 		'param_name' => 'element_id',
						// 		'value'      => '',
						// 	),

						// 	array(
						// 		'type'       => 'textarea',
						// 		'heading'    => esc_html__('Element css','equipo'),
						// 		"class"      => "element-attr-hide",
						// 		'param_name' => 'element_css',
						// 		'value'      => '',
						// 	),

		    // 			/* visibility
						// ----*/

						// 	array(
						// 		'type'       => 'checkbox',
						// 		'group'    => esc_html__('Visibility','equipo'),
						// 		'heading'    => esc_html__('Hide from default header version?','equipo'),
						// 		'param_name' => 'hide_default',
						// 		'value'      => '',
						// 	),

						// 	array(
						// 		'type'       => 'checkbox',
						// 		'group'    => esc_html__('Visibility','equipo'),
						// 		'heading'    => esc_html__('Hide from sticky header version?','equipo'),
						// 		'param_name' => 'hide_sticky',
						// 		'value'      => '',
						// 	),
		    // 		)
		    // 	));

			/* et_search_form
			----*/

		    // 	vc_map(array(
		    // 		'name'                    => esc_html__('Search form','equipo'),
		    // 		'description'             => esc_html__('Use only with header builder','equipo'),
		    // 		'category'                => $vc_menu_categories,
		    // 		'base'                    => 'et_search_form',
		    // 		'class'                   => 'et_search_form hbe',
		    // 		'icon'                    => 'et_search_form',
		    // 		'show_settings_on_create' => true,
		    // 		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-search-form.js',
		    // 		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-search-form.js',
		    // 		'params'                  => array(
						// array(
						// 	'param_name'=>'align',
						// 	'type'      => 'dropdown',
						// 	'heading'   => esc_html__('Align', 'equipo'),
						// 	'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
						// 	'value'     => $align_values_extended
						// ),
						// array(
						// 	'type'       => 'textfield',
						// 	'heading'    => esc_html__('Extra class','equipo'),
						// 	'param_name' => 'extra_class',
						// 	'value'      => '',
						// ),

						// /* styling
						// ----*/

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon color','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_color',
						// 		'value'      => '#bdbdbd',
						// 	),

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon color hover','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_color_hover',
						// 		'value'      => '#1c1c1e',
						// 	),

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon background color','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_background_color',
						// 		'value'      => '',
						// 	),

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon background color hover','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_background_color_hover',
						// 		'value'      => '',
						// 	),

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon border color','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_border_color',
						// 		'value'      => '',
						// 	),

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon border color hover','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_border_color_hover',
						// 		'value'      => '',
						// 	),

						// /* searchbox
						// ----*/

						// 	array(
						// 		'type'       => 'textfield',
						// 		'heading'    => esc_html__('Search box width in px (without any string)','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'search_width',
						// 		'value'      => '256',
						// 	),
						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Search box color','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'search_color',
						// 		'value'      => '#616161',
						// 	),
						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Search box background color','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'search_background_color',
						// 		'value'      => '#ffffff',
						// 	),
						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Search box border color','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'search_border_color',
						// 		'value'      => '#e0e0e0',
						// 	),

						// /* margin
						// ----*/

						// 	array(
						// 		'type'       => 'margin',
						// 		'group'      => esc_html__('Margin','equipo'),
						// 		'heading'    => esc_html__('Margin','equipo'),
						// 		'param_name' => 'margin',
						// 		'value'      => ''
						// 	),

						// /* element_css
						// ----*/

						// 	array(
						// 		'type'       => 'textfield',
						// 		'heading'    => esc_html__('Element id','equipo'),
						// 		"class"      => "element-attr-hide",
						// 		'param_name' => 'element_id',
						// 		'value'      => '',
						// 	),

						// 	array(
						// 		'type'       => 'textarea',
						// 		'heading'    => esc_html__('Element css','equipo'),
						// 		"class"      => "element-attr-hide",
						// 		'param_name' => 'element_css',
						// 		'value'      => '',
						// 	),

						// /* visibility
						// ----*/

						// 	array(
						// 		'type'       => 'checkbox',
						// 		'group'    => esc_html__('Visibility','equipo'),
						// 		'heading'    => esc_html__('Hide from default header version?','equipo'),
						// 		'param_name' => 'hide_default',
						// 		'value'      => '',
						// 	),

						// 	array(
						// 		'type'       => 'checkbox',
						// 		'group'    => esc_html__('Visibility','equipo'),
						// 		'heading'    => esc_html__('Hide from sticky header version?','equipo'),
						// 		'param_name' => 'hide_sticky',
						// 		'value'      => '',
						// 	),
		    // 		)
		    // 	));

			/* et_product_search
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Product AJAX Search','equipo'),
		    		'description'             => esc_html__('Use only with header builder','equipo'),
		    		'category'                => $vc_menu_categories,
		    		'base'                    => 'et_product_search',
		    		'class'                   => 'et_product_search hbe',
		    		'icon'                    => 'et_product_search',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-product-search.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-product-search.js',
		    		'params'                  => array(
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
							'value'     => $align_values_extended
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Hide category select','equipo'),
							'param_name' => 'hide_category',
							'value'      => '',
						),

						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Search in SKU','equipo'),
							'param_name' => 'sku',
							'value'      => '',
						),

						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Search in description','equipo'),
							'param_name' => 'description',
							'value'      => '',
						),

						/* styling
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Button text color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'button_text_color',
								'value'      => '#ffffff',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Button text color hover','equipo'),
								'group'      => 'Styling',
								'param_name' => 'button_text_color_hover',
								'value'      => '#ffffff',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Button background color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'button_background_color',
								'value'      => $main_color,
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Button background color hover','equipo'),
								'group'      => 'Styling',
								'param_name' => 'button_background_color_hover',
								'value'      => '#000000',
							),

						/* searchbox
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Search box width in px (without any string)','equipo'),
								'group'      => 'Styling',
								'param_name' => 'search_width',
								'value'      => '560',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Search box color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'search_color',
								'value'      => '#616161',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Search box background color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'search_background_color',
								'value'      => '#ffffff',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Search box border color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'search_border_color',
								'value'      => '#e0e0e0',
							),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),

						/* visibility
						----*/

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from default header version?','equipo'),
								'param_name' => 'hide_default',
								'value'      => '',
							),

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from sticky header version?','equipo'),
								'param_name' => 'hide_sticky',
								'value'      => '',
							),
		    		)
		    	));

			/* et_product_search_toggle
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Product search toggle','equipo'),
		    		'description'             => esc_html__('Use only with header builder','equipo'),
		    		'category'                => array($vc_menu_categories[0],$vc_menu_categories[1]),
		    		'base'                    => 'et_product_search_toggle',
		    		'class'                   => 'et_product_search_toggle hbe',
		    		'icon'                    => 'et_search_toggle',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-product-search-toggle.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-product-search-toggle.js',
		    		'params'                  => array(
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
							'value'     => $align_values_extended
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Hide category select','equipo'),
							'param_name' => 'hide_category',
							'value'      => '',
						),

						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Search in SKU','equipo'),
							'param_name' => 'sku',
							'value'      => '',
						),

						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Search in description','equipo'),
							'param_name' => 'description',
							'value'      => '',
						),

						/* icon
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_color',
								'value'      => '#000000',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon background color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_background_color',
								'value'      => '',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon border color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_border_color',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'group'      => 'Styling',
								'heading'    => esc_html__('Icon border width in px (without any string)','equipo'),
								'param_name' => 'icon_border_width',
							),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),

		    			/* visibility
						----*/

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from default header version?','equipo'),
								'param_name' => 'hide_default',
								'value'      => '',
							),

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from sticky header version?','equipo'),
								'param_name' => 'hide_sticky',
								'value'      => '',
							),
		    		)
		    	));

			/* et_cart_toggle
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Cart toggle','equipo'),
		    		'description'             => esc_html__('Use only with header builder','equipo'),
		    		'category'                => array($vc_menu_categories[0],$vc_menu_categories[1]),
		    		'base'                    => 'et_cart_toggle',
		    		'class'                   => 'et_cart_toggle hbe',
		    		'icon'                    => 'et_cart_toggle',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-cart-toggle.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-cart-toggle.js',
		    		'params'                  => array(
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
							'value'     => $align_values_extended
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						/* styling
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_color',
								'value'      => '#000000',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon background color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_background_color',
								'value'      => '',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon border color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_border_color',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'group'      => 'Styling',
								'heading'    => esc_html__('Icon border width in px (without any string)','equipo'),
								'param_name' => 'icon_border_width',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Text color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'text_color',
								'value'      => '#000000',
							),
							
						/* cartbox
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Cart box product title color','equipo'),
								'group'      => 'Cart box',
								'param_name' => 'cart_title_color',
								'value'      => '#1c1c1e',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Cart box text color','equipo'),
								'group'      => 'Cart box',
								'param_name' => 'cart_color',
								'value'      => '#616161',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Cart box button color','equipo'),
								'group'      => 'Cart box',
								'param_name' => 'cart_button_color',
								'value'      => '#ffffff',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Cart box button color hover','equipo'),
								'group'      => 'Cart box',
								'param_name' => 'cart_button_color_hover',
								'value'      => '#ffffff',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Cart box button background color','equipo'),
								'group'      => 'Cart box',
								'param_name' => 'cart_button_background_color',
								'value'      => $main_color,
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Cart box button background color hover','equipo'),
								'group'      => 'Cart box',
								'param_name' => 'cart_button_background_color_hover',
								'value'      => '#1c1c1e',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Cart box background color','equipo'),
								'group'      => 'Cart box',
								'param_name' => 'cart_background_color',
								'value'      => '#ffffff',
							),
							array(
								'param_name'=>'box_align',
								'type'      => 'dropdown',
								'group'      => 'Cart box',
								'heading'   => esc_html__('Align', 'equipo'),
								'value'     => array(
									esc_html__('Left','equipo')  => 'left',
									esc_html__('Right','equipo') => 'right',
								)
							),
							array(
								'param_name'=>'box_position',
								'type'      => 'dropdown',
								'group'      => 'Cart box',
								'heading'   => esc_html__('Position', 'equipo'),
								'value'     => array(
									esc_html__('Top','equipo')  => 'top',
									esc_html__('Bottom','equipo') => 'bottom',
								)
							),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),

						/* visibility
						----*/

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from default header version?','equipo'),
								'param_name' => 'hide_default',
								'value'      => '',
							),

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from sticky header version?','equipo'),
								'param_name' => 'hide_sticky',
								'value'      => '',
							),
		    		)
		    	));

			/* et_language_switcher
			----*/

				vc_map(array(
		    		'name'                    => esc_html__('Language switcher','equipo'),
		    		'description'             => esc_html__('Use only with header builder','equipo'),
		    		'category'                => array($vc_menu_categories[0],$vc_menu_categories[1]),
		    		'base'                    => 'et_language_switcher',
		    		'class'                   => 'et_language_switcher hbe',
		    		'icon'                    => 'et_language_switcher',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-language-switcher.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-language-switcher.js',
		    		'params'                  => array(
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
							'value'     => $align_values_extended
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						/* styling
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_color',
								'value'      => '#000000',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon background color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_background_color',
								'value'      => '',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon border color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_border_color',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'group'      => 'Styling',
								'heading'    => esc_html__('Icon border width in px (without any string)','equipo'),
								'param_name' => 'icon_border_width',
							),

						/* submenu
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Submenu color','equipo'),
								'group'      => 'Submenu',
								'param_name' => 'submenu_color',
								'value'      => '#1c1c1e',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Submenu color hover','equipo'),
								'group'      => 'Submenu',
								'param_name' => 'submenu_color_hover',
								'value'      => $main_color,
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Submenu background color','equipo'),
								'group'      => 'Submenu',
								'param_name' => 'submenu_background_color',
								'value'      => '#ffffff',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Submenu background color hover','equipo'),
								'group'      => 'Submenu',
								'param_name' => 'submenu_background_color_hover',
								'value'      => '#ffffff',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Submenu  width in px (without any string)','equipo'),
								'group'      => 'Submenu',
								'param_name' => 'submenu_width',
								'value'      => '200',
							),
							array(
								'param_name'=>'box_align',
								'group'      => 'Submenu',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Align', 'equipo'),
								'value'     => array(
									esc_html__('Center','equipo')  => 'center',
									esc_html__('Left','equipo')  => 'left',
									esc_html__('Right','equipo') => 'right',
								)
							),
							array(
								'param_name'=>'box_position',
								'type'      => 'dropdown',
								'group'      => 'Submenu',
								'heading'   => esc_html__('Position', 'equipo'),
								'value'     => array(
									esc_html__('Top','equipo')  => 'top',
									esc_html__('Bottom','equipo') => 'bottom',
								)
							),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),

		    			/* visibility
						----*/

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from default header version?','equipo'),
								'param_name' => 'hide_default',
								'value'      => '',
							),

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from sticky header version?','equipo'),
								'param_name' => 'hide_sticky',
								'value'      => '',
							),
		    		)
		    	));

			/* et_currency_switcher
			---------------*/

				vc_map(array(
		    		'name'                    => esc_html__('Currency switcher','equipo'),
		    		'description'             => esc_html__('Use only with header builder','equipo'),
		    		'category'                => array($vc_menu_categories[0],$vc_menu_categories[1]),
		    		'base'                    => 'et_currency_switcher',
		    		'class'                   => 'et_currency_switcher hbe',
		    		'icon'                    => 'et_currency_switcher',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-currency-switcher.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-currency-switcher.js',
		    		'params'                  => array(
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
							'value'     => $align_values_extended
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						/* styling
						---------------*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Text color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'text_color',
								'value'      => '#616161',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Text color hover','equipo'),
								'group'      => 'Styling',
								'param_name' => 'text_color_hover',
								'value'      => '#1c1c1e',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Highlighted currency color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'currency_color',
								'value'      => $main_color,
							),

						/* submenu
						---------------*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Submenu color','equipo'),
								'group'      => 'Submenu',
								'param_name' => 'submenu_color',
								'value'      => '#bdbdbd',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Submenu color hover','equipo'),
								'group'      => 'Submenu',
								'param_name' => 'submenu_color_hover',
								'value'      => '#ffffff',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Submenu background color','equipo'),
								'group'      => 'Submenu',
								'param_name' => 'submenu_background_color',
								'value'      => '#212121',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Submenu background color hover','equipo'),
								'group'      => 'Submenu',
								'param_name' => 'submenu_background_color_hover',
								'value'      => $main_color,
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Submenu  width in px (without any string)','equipo'),
								'group'      => 'Submenu',
								'param_name' => 'submenu_width',
								'value'      => '200',
							),
							array(
								'param_name'=>'box_align',
								'group'      => 'Submenu',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Align', 'equipo'),
								'value'     => array(
									esc_html__('Center','equipo')  => 'center',
									esc_html__('Left','equipo')  => 'left',
									esc_html__('Right','equipo') => 'right',
								)
							),

							array(
								'param_name'=>'box_position',
								'type'      => 'dropdown',
								'group'      => 'Submenu',
								'heading'   => esc_html__('Position', 'equipo'),
								'value'     => array(
									esc_html__('Top','equipo')  => 'top',
									esc_html__('Bottom','equipo') => 'bottom',
								)
							),

						/* margin
						---------------*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* element_css
						---------------*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),

		    			/* visibility
						---------------*/

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from default header version?','equipo'),
								'param_name' => 'hide_default',
								'value'      => '',
							),

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from sticky header version?','equipo'),
								'param_name' => 'hide_sticky',
								'value'      => '',
							),
		    		)
		    	));

			/* et_login_toggle
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Front-end login','equipo'),
		    		'description'             => esc_html__('Use only with header builder','equipo'),
		    		'category'                => array($vc_menu_categories[0],$vc_menu_categories[1]),
		    		'base'                    => 'et_login_toggle',
		    		'class'                   => 'et_login_toggle hbe',
		    		'icon'                    => 'et_login_toggle',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-login-toggle.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-login-toggle.js',
		    		'params'                  => array(
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
							'value'     => $align_values_extended
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('My account link','equipo'),
							'param_name' => 'my_account_link',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Registration page link','equipo'),
							'param_name' => 'registration_link',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Password recovery page','equipo'),
							'param_name' => 'forgot_link',
							'value'      => '',
						),

						/* styling
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_color',
								'value'      => '#000000',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon background color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_background_color',
								'value'      => '',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon border color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_border_color',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'group'      => 'Styling',
								'heading'    => esc_html__('Icon border width in px (without any string)','equipo'),
								'param_name' => 'icon_border_width',
							),

						/* loginbox
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Login box text color','equipo'),
								'group'      => 'Login box',
								'param_name' => 'login_color',
								'value'      => '#616161',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Login box background color','equipo'),
								'group'      => 'Login box',
								'param_name' => 'login_background_color',
								'value'      => '#ffffff',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Login box input border color','equipo'),
								'group'      => 'Login box',
								'param_name' => 'login_border_color',
								'value'      => '#e0e0e0',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Login box button color','equipo'),
								'group'      => 'Login box',
								'param_name' => 'login_button_color',
								'value'      => '#ffffff',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Login box button color hover','equipo'),
								'group'      => 'Login box',
								'param_name' => 'login_button_color_hover',
								'value'      => '#ffffff',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Login box button background color','equipo'),
								'group'      => 'Login box',
								'param_name' => 'login_button_background_color',
								'value'      => $main_color,
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Login box button background color hover','equipo'),
								'group'      => 'Login box',
								'param_name' => 'login_button_background_color_hover',
								'value'      => '#1c1c1e',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Login box button border width in px (without any string)','equipo'),
								'group'      => 'Login box',
								'param_name' => 'login_button_border_width',
								'value'      => '',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Login box button border color','equipo'),
								'group'      => 'Login box',
								'param_name' => 'login_button_border_color',
								'value'      => '',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Login box button border color hover','equipo'),
								'group'      => 'Login box',
								'param_name' => 'login_button_border_color_hover',
								'value'      => '',
							),
							array(
								'param_name'=>'box_align',
								'type'      => 'dropdown',
								'group'     => 'Login box',
								'heading'   => esc_html__('Align', 'equipo'),
								'value'     => array(
									esc_html__('Left','equipo')  => 'left',
									esc_html__('Right','equipo') => 'right',
								)
							),
							array(
								'param_name'=>'box_position',
								'type'      => 'dropdown',
								'group'      => 'Login box',
								'heading'   => esc_html__('Position', 'equipo'),
								'value'     => array(
									esc_html__('Top','equipo')  => 'top',
									esc_html__('Bottom','equipo') => 'bottom',
								)
							),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),

		    			/* visibility
						----*/

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from default header version?','equipo'),
								'param_name' => 'hide_default',
								'value'      => '',
							),

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from sticky header version?','equipo'),
								'param_name' => 'hide_sticky',
								'value'      => '',
							),
		    		)
		    	));

			/* et_header_slogan
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Slogan','equipo'),
		    		'description'             => esc_html__('Use only with header builder','equipo'),
		    		'category'                => $vc_menu_categories,
		    		'base'                    => 'et_header_slogan',
		    		'class'                   => 'et_header_slogan hbe',
		    		'icon'                    => 'et_header_slogan',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-header-slogan.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-header-slogan.js',
		    		'params'                  => array(
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
							'value'     => $align_values_extended
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Max width (without any string)','equipo'),
							'param_name' => 'max_width',
							'value'      => '',
						),
						array(
							'type'       => 'textarea_html',
							'heading'    => esc_html__('Content','equipo'),
							'param_name' => 'content',
							'value'      => '',
						),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),

		    			/* visibility
						----*/

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from default header version?','equipo'),
								'param_name' => 'hide_default',
								'value'      => '',
							),

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from sticky header version?','equipo'),
								'param_name' => 'hide_sticky',
								'value'      => '',
							),
		    		)
		    	));

			/* et_header_social_links
			----*/

				foreach ($social_links_array as $social) {
					vc_add_param('et_header_social_links', array(
						'type'       => 'textfield',
						'heading'    => ucfirst($social).' link',
						'param_name' => $social,
						'value'      => '',
						'weight' => 1
					));
				}

		    	vc_map(array(
					'name'                    => esc_html__('Social links','equipo'),
		    		'description'             => esc_html__('Use only with header builder','equipo'),
		    		'category'                => $vc_menu_categories,
		    		'base'                    => 'et_header_social_links',
		    		'class'                   => 'et_header_social_links hbe',
		    		'icon'                    => 'et_header_social_links',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-header-social-links.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-header-social-links.js',
					'params'                  => array(
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
							'value'     => $align_values_extended
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),
						array(
							'param_name'=>'target',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Target', 'equipo'),
							'value'     => array(
								'_self'  => '_self',
								'_blank' => '_blank'
							)
						),

						/* styling
						----*/

							array(
								'param_name'=>'styling_original',
								'type'      => 'dropdown',
								'group'     => esc_html__('Styling','equipo'),
								'heading'   => esc_html__('Original styling', 'equipo'),
								'value'     => $logic_values
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon color','equipo'),
								'group'     => esc_html__('Styling','equipo'),
								'param_name' => 'icon_color',
								'value'      => '#1c1c1e',
								'dependency' => Array('element' => 'styling_original', 'value' => 'false')
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon color hover','equipo'),
								'group'     => esc_html__('Styling','equipo'),
								'param_name' => 'icon_color_hover',
								'value'      => $main_color,
								'dependency' => Array('element' => 'styling_original', 'value' => 'false')
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon background color','equipo'),
								'group'     => esc_html__('Styling','equipo'),
								'param_name' => 'icon_background_color',
								'value'      => '',
								'dependency' => Array('element' => 'styling_original', 'value' => 'false')
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon background color hover','equipo'),
								'group'     => esc_html__('Styling','equipo'),
								'param_name' => 'icon_background_color_hover',
								'value'      => '',
								'dependency' => Array('element' => 'styling_original', 'value' => 'false')
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon border color','equipo'),
								'group'     => esc_html__('Styling','equipo'),
								'param_name' => 'icon_border_color',
								'value'      => '',
								'dependency' => Array('element' => 'styling_original', 'value' => 'false')
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon border color hover','equipo'),
								'group'     => esc_html__('Styling','equipo'),
								'param_name' => 'icon_border_color_hover',
								'value'      => '',
								'dependency' => Array('element' => 'styling_original', 'value' => 'false')
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Icon border width (without any string)','equipo'),
								'group'     => esc_html__('Styling','equipo'),
								'param_name' => 'icon_border_width',
								'dependency' => Array('element' => 'styling_original', 'value' => 'false')
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Size','equipo'),
								'group'      => 'Styling',
								'param_name' => 'size',
								'value'      => array(
									esc_html__('Small','equipo')  => 'small',
									esc_html__('Medium','equipo') => 'medium',
									esc_html__('Large','equipo')  => 'large',
									esc_html__('Custom','equipo')  => 'custom',
								),
								'std' => 'medium'
							),

							array(
								'type'       => 'textfield',
								'group'      => 'Styling',
								'heading'    => esc_html__('Icon size in px (without any string)','equipo'),
								'param_name' => 'icon_size',
								'value'      => '',
								'dependency' => Array('element' => 'size', 'value' => 'custom')
							),

							array(
								'type'       => 'textfield',
								'group'      => 'Styling',
								'heading'    => esc_html__('Icon box size in px (without any string)','equipo'),
								'param_name' => 'icon_box_size',
								'value'      => '',
								'dependency' => Array('element' => 'size', 'value' => 'custom')
							),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),

						/* visibility
						----*/

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from default header version?','equipo'),
								'param_name' => 'hide_default',
								'value'      => '',
							),

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from sticky header version?','equipo'),
								'param_name' => 'hide_sticky',
								'value'      => '',
							),
					)
				));

			/* et_header_icon
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Header icon','equipo'),
		    		'description'             => esc_html__('Use only with header builder','equipo'),
		    		'category'                => $vc_menu_categories,
		    		'base'                    => 'et_header_icon',
		    		'class'                   => 'et_header_icon hbe',
		    		'icon'                    => 'et_header_icon',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-header-icon.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-header-icon.js',
		    		'params'                  => array(
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
							'value'     => $align_values_extended
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						array(
							'type'       => 'attach_image',
							'heading'    => esc_html__('Icon','equipo'),
							'param_name' => 'icon',
							'value'      => '',
						),

						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Icon link','equipo'),
							'param_name' => 'icon_link',
							'value'      => '',
						),

						array(
							'param_name'=>'target',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Target', 'equipo'),
							'value'     => array(
								'_self'  => '_self',
								'_blank' => '_blank'
							),
							'dependency' => Array('element' => 'icon_link', 'not_empty' => true)
						),

						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Elastic click','equipo'),
							'param_name' => 'click',
							'value'      => $logic_values
						),

						/* styling
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_color',
								'value'      => '#000000',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon color hover','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_color_hover',
								'value'      => $main_color,
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon background color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_background_color',
								'value'      => '',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon background color hover','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_background_color_hover',
								'value'      => '',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon border color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_border_color',
								'value'      => '',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon border color hover','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_border_color_hover',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'group'      => 'Styling',
								'heading'    => esc_html__('Icon border width in px (without any string)','equipo'),
								'param_name' => 'icon_border_width',
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Size','equipo'),
								'group'      => 'Styling',
								'param_name' => 'size',
								'value'      => array(
									esc_html__('Small','equipo')  => 'small',
									esc_html__('Medium','equipo') => 'medium',
									esc_html__('Large','equipo')  => 'large',
									esc_html__('Custom','equipo')  => 'custom',
								),
								'std' => 'medium'
							),

							array(
								'type'       => 'textfield',
								'group'      => 'Styling',
								'heading'    => esc_html__('Icon size in px (without any string)','equipo'),
								'param_name' => 'icon_size',
								'value'      => '',
								'dependency' => Array('element' => 'size', 'value' => 'custom')
							),

							array(
								'type'       => 'textfield',
								'group'      => 'Styling',
								'heading'    => esc_html__('Icon box size in px (without any string)','equipo'),
								'param_name' => 'icon_box_size',
								'value'      => '',
								'dependency' => Array('element' => 'size', 'value' => 'custom')
							),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),

		    			/* visibility
						----*/

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from default header version?','equipo'),
								'param_name' => 'hide_default',
								'value'      => '',
							),

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from sticky header version?','equipo'),
								'param_name' => 'hide_sticky',
								'value'      => '',
							),
		    		)
		    	));

			/* et_header_vertical_separator
			----*/

		    	vc_map(array(
					'name'                    => esc_html__('Vertical separator','equipo'),
					'description'             => esc_html__('Use only with header builder','equipo'),
					'category'                => $vc_menu_categories,
					'base'                    => 'et_header_vertical_separator',
		    		'class'                   => 'et_header_vertical_separator hbe',
		    		'icon'                    => 'et_header_vertical_separator',
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-header-vertical-separator.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-header-vertical-separator.js',
					'show_settings_on_create' => true,
					'params'                  => array(
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
							'value'     => $align_values_extended
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Type','equipo'),
							'param_name' => 'type',
							'value'      => array(
								esc_html__('solid','equipo')  => 'solid',
								esc_html__('dotted','equipo') => 'dotted',
								esc_html__('dashed','equipo') => 'dashed',
							)
						),
						array(
							'type'       => 'colorpicker',
							'heading'    => esc_html__('Color','equipo'),
							'param_name' => 'color',
							'value'      => '#e0e0e0'
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Width (without any string, if you want 100% leave blank)','equipo'),
							'param_name' => 'width',
							'value'      => ''
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Height (without any string, if you want 1px leave blank)','equipo'),
							'param_name' => 'height',
							'value'      => ''
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => ''
						),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* visibility
						----*/

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from default header version?','equipo'),
								'param_name' => 'hide_default',
								'value'      => '',
							),

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from sticky header version?','equipo'),
								'param_name' => 'hide_sticky',
								'value'      => '',
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),
					)
				));

			/* et_header_button
			----*/

				$megamenu_array = array(esc_html__('-- Select -- ','equipo') => '');

				$megamenu = enovathemes_addons_megamenus();
                if (!is_wp_error($megamenu)) {
                    foreach ($megamenu as $megam => $atts) {
                        $megamenu_array[$atts[1]] = $atts[0];
                    }
                }

				vc_map(array(
	    			'name'                    => esc_html__('Header button','equipo'),
		    		'description'             => esc_html__('Use only with header builder','equipo'),
		    		'category'                => $vc_menu_categories,
		    		'base'                    => 'et_header_button',
		    		'class'                   => 'et_header_button hbe',
		    		'icon'                    => 'et_header_button',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-header-button.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-header-button.js',
		    		'show_settings_on_create' => true,
		    		'params'                  => array(
		    			array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
							'value'     => $align_values_extended
						),

						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Button text','equipo'),
							'param_name' => 'button_text',
							'value'      => '',
						),

						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Button link','equipo'),
							'param_name' => 'button_link',
							'value'      => '',
						),
						array(
							'param_name'=>'megamenu',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Show dropdown megamenu', 'equipo'),
							'value'     => $megamenu_array
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Megamenu toggle on','equipo'),
							'param_name' => 'submenu_toggle',
							'value'      => array(
								esc_html__('Hover','equipo') => 'hover',
								esc_html__('Click','equipo') => 'click',
							),
							'dependency' => Array('element' => 'megamenu', 'not_empty' => true)
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Megamenu appear effect','equipo'),
							'param_name' => 'submenu_appear',
							'value'      => array(
								esc_html__('Default','equipo') => 'default',
								esc_html__('Fade','equipo')    => 'fade',
							),
							'dependency' => Array(
								array('element' => 'megamenu', 'not_empty' => true),
								array('element' => 'submenu_toggle', 'value' => 'hover')
							)
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Megamenu shadow','equipo'),
							'param_name' => 'submenu_shadow',
							'value'      => $logic_values,
							'dependency' => Array('element' => 'megamenu', 'not_empty' => true)
						),
						array(
							'param_name'=>'target',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Target', 'equipo'),
							'value'     => array(
								'_self'  => '_self',
								'_blank' => '_blank'
							)
						),
						array(
		    				'type'       => 'checkbox',
							'heading'    => esc_html__('Open link in modal window?', 'equipo'),
							'param_name' => 'button_link_modal',
							'value'      => '',
						),

						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

		    			/* typography
						----*/

							array(
								'param_name'=>'font_family',
								'type'      => 'dropdown',
								'group'     => esc_html__('Typography', 'equipo'),
								'heading'   => esc_html__('Font family', 'equipo'),
								'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
								'value'     => $google_fonts_family,
							),
							array(
								'param_name'=>'font_weight',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Font weight', 'equipo'),
								'group'     => esc_html__('Typography', 'equipo'),
								'value'     => $font_weight_values,
								'std'       => '400'
							),
							array(
								'param_name'=>'font_subsets',
								'type'      => 'dropdown',
								'heading'   => esc_html__('Font subsets', 'equipo'),
								'group'     => esc_html__('Typography', 'equipo'),
								'value'     => array(
									'latin' => 'latin',
								)
							),
			    			array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Button font size (without any string)','equipo'),
								'group'      => esc_html__('Typography','equipo'),
								'param_name' => 'button_font_size',
								'value'      => '16',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Button letter spacing (without any string)','equipo'),
								'group'      => esc_html__('Typography','equipo'),
								'param_name' => 'button_letter_spacing',
								'value'      => ''
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Button line height (without any string)','equipo'),
								'group'      => esc_html__('Typography','equipo'),
								'param_name' => 'button_line_height',
								'value'      => '22'
							),
							array(
								'type'       => 'dropdown',
								'group'   	 => esc_html__('Typography', 'equipo'),
								'heading'    => esc_html__('Text transform','equipo'),
								'param_name' => 'button_text_transform',
								'value'      => array(
									esc_html__('None','equipo')       => 'none',
									esc_html__('Uppercase','equipo')  => 'uppercase',
									esc_html__('Lowercase','equipo')  => 'lowercase',
									esc_html__('Capitalize','equipo') => 'capitalize',
								)
							),

						/* styling
						----*/

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Button size','equipo'),
								'group'      => 'Styling',
								'param_name' => 'button_size',
								'value'      => array(
									esc_html__('Small','equipo')  => 'small',
									esc_html__('Medium','equipo') => 'medium',
									esc_html__('Large','equipo')  => 'large',
								),
								'std' => 'medium',
								'dependency' => Array('element' => 'button_size_custom', 'value' => 'false')
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Button custom size','equipo'),
								'group'      => 'Styling',
								'param_name' => 'button_size_custom',
								'value'      => $logic_values
							),

							array(
								'type'       => 'textfield',
								'group'      => 'Styling',
								'heading'    => esc_html__('Button width in px (without any string)','equipo'),
								'param_name' => 'width',
								'value'      => '',
								'dependency' => Array('element' => 'button_size_custom', 'value' => 'true')
							),

							array(
								'type'       => 'textfield',
								'group'      => 'Styling',
								'heading'    => esc_html__('Button height in px (without any string)','equipo'),
								'param_name' => 'height',
								'value'      => '',
								'dependency' => Array('element' => 'button_size_custom', 'value' => 'true')
							),
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Button style','equipo'),
								'group'      => 'Styling',
								'param_name' => 'button_style',
								'value'      => array(
									esc_html__('Normal','equipo')  => 'normal',
									esc_html__('Outline','equipo') => 'outline',
								)
							),
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Button type','equipo'),
								'group'      => 'Styling',
								'param_name' => 'button_type',
								'value'      => array(
									esc_html__('Round','equipo')  => 'round',
									esc_html__('Rounded','equipo') => 'rounded',
								)
							),
							array(
			    				'type'       => 'checkbox',
								'heading'    => esc_html__('Button shadow', 'equipo'),
								'group'      => esc_html__('Styling','equipo'),
								'param_name' => 'button_shadow',
								'value'      => '',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Button color','equipo'),
								'group'      => esc_html__('Styling','equipo'),
								'param_name' => 'button_color',
								'value'      => $main_color
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Button background color','equipo'),
								'group'      => esc_html__('Styling','equipo'),
								'param_name' => 'button_back_color',
								'value'      => '#ffffff',
								'dependency' => Array('element' => 'button_style', 'value' => 'normal')
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Button border color','equipo'),
								'group'      => esc_html__('Styling','equipo'),
								'param_name' => 'button_border_color',
								'value'      => $main_color,
								'dependency' => Array('element' => 'button_style', 'value' => 'outline')
							),

						/* hover
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Button color hover','equipo'),
								'group'      => esc_html__('Hover','equipo'),
								'param_name' => 'button_color_hover',
								'value'      => '#ffffff'
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Button background color hover','equipo'),
								'group'      => esc_html__('Hover','equipo'),
								'param_name' => 'button_back_color_hover',
								'value'      => '#1c1c1e',
								'dependency' => Array('element' => 'button_style', 'value' => 'normal')
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Button border color hover','equipo'),
								'group'      => esc_html__('Hover','equipo'),
								'param_name' => 'button_border_color_hover',
								'value'      => '#1c1c1e',
								'dependency' => Array('element' => 'button_style', 'value' => 'outline')
							),
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Hover animation','equipo'),
								'group'      => esc_html__('Hover','equipo'),
								'param_name' => 'animate_hover',
								'value'      => array(
									esc_html__('Normal','equipo')  	  => 'none',
									esc_html__('Fill effect','equipo')   => 'fill',
									esc_html__('Scale effect','equipo')  => 'scale',
									esc_html__('Move effect','equipo')   => 'move',
								),
								'dependency' => Array('element' => 'button_style', 'value' => 'normal')
							),
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Hover animation','equipo'),
								'group'      => esc_html__('Hover','equipo'),
								'param_name' => 'animate_hover_outline',
								'value'      => array(
									esc_html__('Normal','equipo')  	  => 'none',
									esc_html__('Fill effect','equipo')   => 'fill',
									esc_html__('Scale effect','equipo')  => 'scale',
								),
								'dependency' => Array('element' => 'button_style', 'value' => 'outline')
							),

						/* click
						----*/

							array(
								'type'       => 'checkbox',
								'heading'    => esc_html__('Smooth Click animation','equipo'),
								'group'      => esc_html__('Click','equipo'),
								'param_name' => 'click_smooth',
								'value'      => ''
							),

						/* icon
						----*/

							array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Icon 1','equipo'),
								'group'      => esc_html__('Icon','equipo'),
								'param_name' => 'icon',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Icon size (without any string)','equipo'),
								'group'      => esc_html__('Icon','equipo'),
								'param_name' => 'icon_font_size',
								'value'      => '16',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Icon margin (without any string)','equipo'),
								'group'      => esc_html__('Icon','equipo'),
								'param_name' => 'icon_margin',
								'value'      => '8',
							),
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Icon position','equipo'),
								'group'      => esc_html__('Icon','equipo'),
								'param_name' => 'icon_position',
								'value'      => array(
									esc_html__('Left','equipo')  => 'left',
									esc_html__('Right','equipo')  => 'right',
								)
							),

							array(
								'type'       => 'attach_image',
								'heading'    => esc_html__('Icon 2','equipo'),
								'group'      => esc_html__('Icon','equipo'),
								'param_name' => 'icon2',
								'value'      => '',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Icon 2 size (without any string)','equipo'),
								'group'      => esc_html__('Icon','equipo'),
								'param_name' => 'icon2_font_size',
								'value'      => '16',
							),
							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Icon 2 margin (without any string)','equipo'),
								'group'      => esc_html__('Icon','equipo'),
								'param_name' => 'icon2_margin',
								'value'      => '8',
							),
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Icon 2 position','equipo'),
								'group'      => esc_html__('Icon','equipo'),
								'param_name' => 'icon2_position',
								'value'      => array(
									esc_html__('Left','equipo')  => 'left',
									esc_html__('Right','equipo')  => 'right',
								)
							),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element font','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_font',
								'value'      => '',
							),

		    			/* visibility
						----*/

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from default header version?','equipo'),
								'param_name' => 'hide_default',
								'value'      => '',
							),

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from sticky header version?','equipo'),
								'param_name' => 'hide_sticky',
								'value'      => '',
							),
		    		)
	    		));

			/* et_align_container
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Align container','equipo'),
		    		'description'             => esc_html__('Use only with header builder','equipo'),
		    		'category'                => array($vc_menu_categories[1]),
		    		'base'                    => 'et_align_container',
		    		'class'                   => 'et_align_container',
		    		'icon'                    => 'et_align_container',
		    		'show_settings_on_create' => true,
		    		"as_parent"               => array('only' => 'et_gap, et_separator, et_header_button, et_header_icon, et_header_social_links, et_header_slogan, et_search_form, et_header_logo'),
					"js_view"                 => 'VcColumnView',
		    		"content_element"         => true,
		    		'params'                  => array(
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Content align', 'equipo'),
							'description' => esc_html__('Align any inside element', 'equipo'),
							'value'     => $align_values_extended
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),
		    		)
		    	));

		    /* et_vertical_align_top
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Vertical align top','equipo'),
		    		'description'             => esc_html__('Use only with header builder for sidebar and mobile navigation headers','equipo'),
		    		'category'                => array($vc_menu_categories[1]),
		    		'base'                    => 'et_vertical_align_top',
		    		'class'                   => 'et_vertical_align_top',
		    		'icon'                    => 'et_vertical_align_top',
		    		'show_settings_on_create' => true,
		    		"as_parent"               => array('only' => 'et_gap, et_separator, et_header_button, et_header_icon, et_header_social_links, et_header_slogan, et_search_form, et_header_logo, et_align_container, et_sidebar_menu, et_mobile_menu'),
					"js_view"                 => 'VcColumnView',
		    		"content_element"         => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),
		    		)
		    	));

		    /* et_vertical_align_middle
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Vertical align middle','equipo'),
		    		'description'             => esc_html__('Use only with header builder for sidebar and mobile navigation headers','equipo'),
		    		'category'                => array($vc_menu_categories[1]),
		    		'base'                    => 'et_vertical_align_middle',
		    		'class'                   => 'et_vertical_align_middle',
		    		'icon'                    => 'et_vertical_align_middle',
		    		'show_settings_on_create' => true,
		    		"as_parent"               => array('only' => 'et_gap, et_separator, et_header_button, et_header_icon, et_header_social_links, et_header_slogan, et_search_form, et_header_logo, et_align_container, et_sidebar_menu, et_mobile_menu'),
					"js_view"                 => 'VcColumnView',
		    		"content_element"         => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),
		    		)
		    	));

		    /* et_vertical_align_bottom
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Vertical align bottom','equipo'),
		    		'description'             => esc_html__('Use only with header builder for sidebar and mobile navigation headers','equipo'),
		    		'category'                => array($vc_menu_categories[1]),
		    		'base'                    => 'et_vertical_align_bottom',
		    		'class'                   => 'et_vertical_align_bottom',
		    		'icon'                    => 'et_vertical_align_bottom',
		    		'show_settings_on_create' => true,
		    		"as_parent"               => array('only' => 'et_gap, et_separator, et_header_button, et_header_icon, et_header_social_links, et_header_slogan, et_search_form, et_header_logo, et_align_container, et_sidebar_menu, et_mobile_menu'),
					"js_view"                 => 'VcColumnView',
		    		"content_element"         => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),
		    		)
		    	));

			/* et_mobile_container
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Mobile container','equipo'),
		    		'description'             => esc_html__('Use only with header builder','equipo'),
		    		'category'                => $vc_menu_categories[1],
		    		'base'                    => 'et_header_mobile_container',
		    		'class'                   => 'et_header_mobile_container',
		    		'icon'                    => 'et_header_mobile_container',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-mobile-container.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-mobile-container.js',
		    		"as_parent"               => array('only' => 'et_mobile_container_tab, et_gap, et_separator, et_header_button, et_header_icon, et_header_social_links, et_header_slogan, et_search_form, et_mobile_menu, et_header_logo,et_align_container, et_mobile_close,et_vertical_align_top,et_vertical_align_middle,et_vertical_align_bottom'),
					"js_view"                 => 'VcColumnView',
		    		"content_element"         => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						/* styling
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Background color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'background_color',
								'value'      => '#ffffff',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Default text color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'text_color',
								'value'      => '#616161',
							),

						/* styling
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Tab color','equipo'),
								'group'      => 'Tabs styling',
								'param_name' => 'tab_color',
								'value'      => '#ffffff',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Tab color active','equipo'),
								'group'      => 'Tabs styling',
								'param_name' => 'tab_color_active',
								'value'      => '#1c1c1e',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Tab background color','equipo'),
								'group'      => 'Tabs styling',
								'param_name' => 'tab_background_color',
								'value'      => '#ffffff',
							),
							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Tab background color active','equipo'),
								'group'      => 'Tabs styling',
								'param_name' => 'tab_background_color_active',
								'value'      => '#1c1c1e',
							),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Padding','equipo'),
								'heading'    => esc_html__('Padding','equipo'),
								'param_name' => 'margin',
								'value'      => '48,32,48,32'
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),
		    		)
		    	));

		    /* et_mobile_container_tab
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Mobile container tab','equipo'),
		    		'description'             => esc_html__('Use only with header builder for sidebar and mobile navigation headers','equipo'),
		    		'category'                => array($vc_menu_categories[1]),
		    		'base'                    => 'et_mobile_container_tab',
		    		'class'                   => 'et_mobile_container_tab',
		    		'icon'                    => 'et_mobile_container_tab',
		    		'show_settings_on_create' => true,
		    		"as_child"                => array('only' => 'et_header_mobile_container'),
		    		"as_parent"               => array('only' => 'et_gap, et_separator, et_header_button, et_header_icon, et_header_social_links, et_header_slogan, et_search_form, et_header_logo, et_align_container, et_sidebar_menu, et_mobile_menu, et_language_switcher, et_currency_switcher'),
					"js_view"                 => 'VcColumnView',
		    		"content_element"         => true,
		    		'params'                  => array(
		    			array(
							'type'       => 'attach_image',
							'heading'    => esc_html__('Icon','equipo'),
							'param_name' => 'icon',
							'value'      => '',
						),
						array(
		    				'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => ''
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),
		    		)
		    	));

		    /* et_mobile_toggle
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Mobile container toggle','equipo'),
		    		'description'             => esc_html__('Use only with header builder to toggle the mobile container','equipo'),
		    		'category'                => $vc_menu_categories[1],
		    		'base'                    => 'et_mobile_toggle',
		    		'class'                   => 'et_mobile_toggle hbe',
		    		'icon'                    => 'et_mobile_toggle',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-mobile-toggle.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-mobile-toggle.js',
		    		'params'                  => array(
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
							'value'     => $align_values_extended
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						/* styling
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_color',
								'value'      => '#1c1c1e',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon color hover','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_color_hover',
								'value'      => '#ffffff',
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Size','equipo'),
								'group'      => 'Styling',
								'param_name' => 'size',
								'value'      => array(
									esc_html__('Small','equipo')  => 'small',
									esc_html__('Medium','equipo') => 'medium',
									esc_html__('Large','equipo')  => 'large',
								),
								'std' => 'medium'
							),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),

		    			/* visibility
						----*/

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from default header version?','equipo'),
								'param_name' => 'hide_default',
								'value'      => '',
							),

							array(
								'type'       => 'checkbox',
								'group'    => esc_html__('Visibility','equipo'),
								'heading'    => esc_html__('Hide from sticky header version?','equipo'),
								'param_name' => 'hide_sticky',
								'value'      => '',
							),
		    		)
		    	));

			/* et_mobile_close
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Mobile container close','equipo'),
		    		'description'             => esc_html__('Use only with header builder to close the mobile container','equipo'),
		    		'category'                => $vc_menu_categories[1],
		    		'base'                    => 'et_mobile_close',
		    		'class'                   => 'et_mobile_close hbe',
		    		'icon'                    => 'et_mobile_close',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-mobile-close.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-mobile-close.js',
		    		'params'                  => array(
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
							'value'     => $align_values_extended
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						/* styling
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_color',
								'value'      => '#1c1c1e',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon color hover','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_color_hover',
								'value'      => '#ffffff',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon background color','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_background_color',
								'value'      => '#ffffff',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Icon background color hover','equipo'),
								'group'      => 'Styling',
								'param_name' => 'icon_background_color_hover',
								'value'      => $main_color,
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Size','equipo'),
								'group'      => 'Styling',
								'param_name' => 'size',
								'value'      => array(
									esc_html__('Small','equipo')  => 'small',
									esc_html__('Medium','equipo') => 'medium',
									esc_html__('Large','equipo')  => 'large',
								),
								'std' => 'medium'
							),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),

		    		)
		    	));

			/* et_mobile_menu
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Mobile menu','equipo'),
		    		'description'             => esc_html__('Use only with mobile container','equipo'),
		    		'category'                => $vc_menu_categories[1],
		    		'base'                    => 'et_mobile_menu',
		    		'class'                   => 'et_mobile_menu font',
		    		'icon'                    => 'et_mobile_menu',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-mobile-menu.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-mobile-menu.js',
		    		'params'                  => array(
		    			array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Menu name','equipo'),
							'param_name' => 'menu',
							'value'      => $menu_list,
							'default'    => 'choose'
						),
						array(
							'type'       => 'colorpicker',
							'heading'    => esc_html__('Menu items separator color','equipo'),
							'param_name' => 'separator_color',
							'value'      => '#e0e0e0',
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Text align','equipo'),
							'param_name' => 'text_align',
							'value'      => $align_values,
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						/* top level
						----*/

							/* styling
							----*/

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Menu color','equipo'),
									'group'      => 'Top level',
									'param_name' => 'menu_color',
									'value'      => '#1c1c1e',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Menu color hover','equipo'),
									'group'      => 'Top level',
									'param_name' => 'menu_color_hover',
									'value'      => $main_color,
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Menu background color hover','equipo'),
									'group'      => 'Top level',
									'param_name' => 'menu_background_color_hover',
									'value'      => '',
								),

							/* typography
							----*/

								array(
									'param_name'=>'font_family',
									'type'      => 'dropdown',
									'group'     => esc_html__('Top level','equipo'),
									'heading'   => esc_html__('Font family', 'equipo'),
									'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
									'value'     => $google_fonts_family,
								),
								array(
									'param_name'=>'font_weight',
									'type'      => 'dropdown',
									'group'     => esc_html__('Top level','equipo'),
									'heading'   => esc_html__('Font weight', 'equipo'),
									'value'     => $font_weight_values,
									'std'       => '700'
								),
								array(
									'param_name'=>'font_subsets',
									'type'      => 'dropdown',
									'group'     => esc_html__('Top level','equipo'),
									'heading'   => esc_html__('Font subsets', 'equipo'),
									'value'      => array(
										'latin' => 'latin',
									)
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Font size (without any string)','equipo'),
									'group'      => esc_html__('Top level','equipo'),
									'param_name' => 'font_size',
									'value'      => '32',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Menu items line height (without any string)','equipo'),
									'group'      => esc_html__('Top level','equipo'),
									'param_name' => 'line_height',
									'value'      => '32',
								),
								array(
									'type'       => 'textfield',
									'group'      => esc_html__('Top level','equipo'),
									'heading'    => esc_html__('Letter spacing (without any string)','equipo'),
									'param_name' => 'letter_spacing',
									'value'      => ''
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Text transform','equipo'),
									'group'      => 'Top level',
									'param_name' => 'text_transform',
									'value'      => array(
										esc_html__('None','equipo')       => 'none',
										esc_html__('Uppercase','equipo')  => 'uppercase',
										esc_html__('Lowercase','equipo')  => 'lowercase',
										esc_html__('Capitalize','equipo') => 'capitalize',
									)
								),

						/* submenu
						----*/

							/* styling
							----*/

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Submenu color','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenu_color',
									'value'      => '#1c1c1e',
								),

								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Submenu color hover','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenu_color_hover',
									'value'      => $main_color,
								),
								array(
									'type'       => 'colorpicker',
									'heading'    => esc_html__('Menu background color hover','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'submenu_background_color_hover',
									'value'      => '',
								),

							/* typography
							----*/

								array(
									'param_name'=>'subfont_family',
									'type'      => 'dropdown',
									'group'     => esc_html__('Submenu','equipo'),
									'heading'   => esc_html__('Submenu font family', 'equipo'),
									'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
									'value'     => $google_fonts_family,
								),
								array(
									'param_name'=>'subfont_weight',
									'type'      => 'dropdown',
									'group'     => esc_html__('Submenu','equipo'),
									'heading'   => esc_html__('Submenu font weight', 'equipo'),
									'value'     => $font_weight_values
								),
								array(
									'param_name'=>'subfont_subsets',
									'type'      => 'dropdown',
									'group'     => esc_html__('Submenu','equipo'),
									'heading'   => esc_html__('Submenu font subsets', 'equipo'),
									'value'      => array(
										'latin' => 'latin',
									)
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Submenu font size (without any string)','equipo'),
									'group'      => esc_html__('Submenu','equipo'),
									'param_name' => 'subfont_size',
									'value'      => '24',
								),
								array(
									'type'       => 'textfield',
									'heading'    => esc_html__('Submenu items line height (without any string)','equipo'),
									'group'      => esc_html__('Submenu','equipo'),
									'param_name' => 'subline_height',
									'value'      => '24',
								),
								array(
									'type'       => 'textfield',
									'group'      => esc_html__('Submenu','equipo'),
									'heading'    => esc_html__('Submenu letter spacing (without any string)','equipo'),
									'param_name' => 'subletter_spacing',
									'value'      => ''
								),
								array(
									'type'       => 'dropdown',
									'heading'    => esc_html__('Submenu text transform','equipo'),
									'group'      => 'Submenu',
									'param_name' => 'subtext_transform',
									'value'      => array(
										esc_html__('None','equipo')       => 'none',
										esc_html__('Uppercase','equipo')  => 'uppercase',
										esc_html__('Lowercase','equipo')  => 'lowercase',
										esc_html__('Capitalize','equipo') => 'capitalize',
									)
								),

						/* margin
						----*/

							array(
								'type'       => 'margin',
								'group'      => esc_html__('Margin','equipo'),
								'heading'    => esc_html__('Margin','equipo'),
								'param_name' => 'margin',
								'value'      => ''
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element font','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_font',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element font','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'subelement_font',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),
		    		)
		    	));

			/* et_mobile_tabs
			----*/

				vc_map(array(
		    		'name'                    => esc_html__('Dashboard tabs','equipo'),
		    		'description'             => esc_html__('Insert dashboard tabs','equipo'),
		    		'category'                => $vc_menu_categories,
		    		'base'                    => 'et_mobile_tab',
		    		'class'                   => 'et_mobile_tab',
		    		'icon'                    => 'et_mobile_tab',
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-mobile-tab.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-mobile-tab.js',
		    		'show_settings_on_create' => true,
		    		'params'                  => array(

		    			array(
							'type'       => 'textfield',
							'heading'    => esc_html__('My account page link','equipo'),
							'param_name' => 'account',
							'value'      => '',
						),

						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Cart page link','equipo'),
							'param_name' => 'cart',
							'value'      => '',
						),

						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Wishlist page link','equipo'),
							'param_name' => 'wishlist',
							'value'      => '',
						),

						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Compare page link','equipo'),
							'param_name' => 'compare',
							'value'      => '',
						),

						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Viewed page link','equipo'),
							'param_name' => 'viewed',
							'value'      => '',
						),

						/* styling
						----*/

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Cart bubble color','equipo'),
								'param_name' => 'bubble_color',
								'value'      => '#ffffff',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Cart bubble background color','equipo'),
								'param_name' => 'bubble_back_color',
								'value'      => $main_color,
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Tab color','equipo'),
								'param_name' => 'color',
								'value'      => '#bdbdbd',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Tab color active','equipo'),
								'param_name' => 'color_active',
								'value'      => '#1c1c1e',
							),

							array(
								'type'       => 'colorpicker',
								'heading'    => esc_html__('Tab background color','equipo'),
								'param_name' => 'background_color',
								'value'      => '#ffffff',
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),
		    		)
		    	));

			/* et_modal_container
			----*/

		   //  	vc_map(array(
		   //  		'name'                    => esc_html__('Modal container','equipo'),
		   //  		'description'             => esc_html__('Use only with header builder','equipo'),
		   //  		'category'                => $vc_menu_categories[0],
		   //  		'base'                    => 'et_header_modal_container',
		   //  		'class'                   => 'et_header_modal_container',
		   //  		'icon'                    => 'et_header_modal_container',
		   //  		'show_settings_on_create' => true,
		   //  		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-modal-container.js',
		   //  		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-modal-container.js',
		   //  		"as_parent"               => array('only' => 'vc_row, et_modal_close'),
					// "js_view"                 => 'VcColumnView',
		   //  		"content_element"         => true,
		   //  		'params'                  => array(
					// 	array(
					// 		'type'       => 'textfield',
					// 		'heading'    => esc_html__('Extra class','equipo'),
					// 		'param_name' => 'extra_class',
					// 		'value'      => '',
					// 	),

					// 	/* styling
					// 	----*/

					// 		array(
					// 			'type'       => 'colorpicker',
					// 			'heading'    => esc_html__('Background color','equipo'),
					// 			'group'      => 'Styling',
					// 			'param_name' => 'background_color',
					// 			'value'      => '#ffffff',
					// 		),
					// 		array(
					// 			'type'       => 'colorpicker',
					// 			'heading'    => esc_html__('Default text color','equipo'),
					// 			'group'      => 'Styling',
					// 			'param_name' => 'text_color',
					// 			'value'      => '#616161',
					// 		),

					// 	/* element_css
					// 	----*/

					// 		array(
					// 			'type'       => 'textfield',
					// 			'heading'    => esc_html__('Element id','equipo'),
					// 			"class"      => "element-attr-hide",
					// 			'param_name' => 'element_id',
					// 			'value'      => '',
					// 		),

					// 		array(
					// 			'type'       => 'textarea',
					// 			'heading'    => esc_html__('Element css','equipo'),
					// 			"class"      => "element-attr-hide",
					// 			'param_name' => 'element_css',
					// 			'value'      => '',
					// 		),
		   //  		)
		   //  	));

		    /* et_modal_toggle
			----*/

		    // 	vc_map(array(
		    // 		'name'                    => esc_html__('Modal container toggle','equipo'),
		    // 		'description'             => esc_html__('Use only with header builder to toggle the modal container','equipo'),
		    // 		'category'                => $vc_menu_categories[0],
		    // 		'base'                    => 'et_modal_toggle',
		    // 		'class'                   => 'et_modal_toggle hbe',
		    // 		'icon'                    => 'et_modal_toggle',
		    // 		'show_settings_on_create' => true,
		    // 		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-modal-toggle.js',
		    // 		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-modal-toggle.js',
		    // 		'params'                  => array(
						// array(
						// 	'param_name'=>'align',
						// 	'type'      => 'dropdown',
						// 	'heading'   => esc_html__('Align', 'equipo'),
						// 	'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
						// 	'value'     => $align_values_extended
						// ),
						// array(
						// 	'type'       => 'textfield',
						// 	'heading'    => esc_html__('Extra class','equipo'),
						// 	'param_name' => 'extra_class',
						// 	'value'      => '',
						// ),

						// /* styling
						// ----*/

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon color','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_color',
						// 		'value'      => '#bdbdbd',
						// 	),

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon color hover','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_color_hover',
						// 		'value'      => '#ffffff',
						// 	),

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon background color','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_background_color',
						// 		'value'      => '#ffffff',
						// 	),

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon background color hover','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_background_color_hover',
						// 		'value'      => '#1c1c1e',
						// 	),

						// 	array(
						// 		'type'       => 'dropdown',
						// 		'heading'    => esc_html__('Size','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'size',
						// 		'value'      => array(
						// 			esc_html__('Small','equipo')  => 'small',
						// 			esc_html__('Medium','equipo') => 'medium',
						// 			esc_html__('Large','equipo')  => 'large',
						// 		),
						// 		'std' => 'small'
						// 	),

						// /* margin
						// ----*/

						// 	array(
						// 		'type'       => 'margin',
						// 		'group'      => esc_html__('Margin','equipo'),
						// 		'heading'    => esc_html__('Margin','equipo'),
						// 		'param_name' => 'margin',
						// 		'value'      => ''
						// 	),

						// /* element_css
						// ----*/

						// 	array(
						// 		'type'       => 'textfield',
						// 		'heading'    => esc_html__('Element id','equipo'),
						// 		"class"      => "element-attr-hide",
						// 		'param_name' => 'element_id',
						// 		'value'      => '',
						// 	),

						// 	array(
						// 		'type'       => 'textarea',
						// 		'heading'    => esc_html__('Element css','equipo'),
						// 		"class"      => "element-attr-hide",
						// 		'param_name' => 'element_css',
						// 		'value'      => '',
						// 	),

		    // 			/* visibility
						// ----*/

						// 	array(
						// 		'type'       => 'checkbox',
						// 		'group'    => esc_html__('Visibility','equipo'),
						// 		'heading'    => esc_html__('Hide from default header version?','equipo'),
						// 		'param_name' => 'hide_default',
						// 		'value'      => '',
						// 	),

						// 	array(
						// 		'type'       => 'checkbox',
						// 		'group'    => esc_html__('Visibility','equipo'),
						// 		'heading'    => esc_html__('Hide from sticky header version?','equipo'),
						// 		'param_name' => 'hide_sticky',
						// 		'value'      => '',
						// 	),
		    // 		)
		    // 	));

			/* et_modal_close
			----*/

		    // 	vc_map(array(
		    // 		'name'                    => esc_html__('Modal container close','equipo'),
		    // 		'description'             => esc_html__('Use only with header builder to close the modal container','equipo'),
		    // 		'category'                => $vc_menu_categories[0],
		    // 		'base'                    => 'et_modal_close',
		    // 		'class'                   => 'et_modal_close hbe',
		    // 		'icon'                    => 'et_modal_close',
		    // 		'show_settings_on_create' => true,
		    // 		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-modal-close.js',
		    // 		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-modal-close.js',
		    // 		'params'                  => array(
						// array(
						// 	'param_name'=>'align',
						// 	'type'      => 'dropdown',
						// 	'heading'   => esc_html__('Align', 'equipo'),
						// 	'description' => esc_html__('!If you choose Center, do not forget to set the parent element text-align to center', 'equipo'),
						// 	'value'     => $align_values_extended
						// ),
						// array(
						// 	'type'       => 'textfield',
						// 	'heading'    => esc_html__('Extra class','equipo'),
						// 	'param_name' => 'extra_class',
						// 	'value'      => '',
						// ),

						// /* styling
						// ----*/

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon color','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_color',
						// 		'value'      => '#1c1c1e',
						// 	),

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon color hover','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_color_hover',
						// 		'value'      => '#ffffff',
						// 	),

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon background color','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_background_color',
						// 		'value'      => '#ffffff',
						// 	),

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Icon background color hover','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'icon_background_color_hover',
						// 		'value'      => $main_color,
						// 	),

						// 	array(
						// 		'type'       => 'dropdown',
						// 		'heading'    => esc_html__('Size','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'size',
						// 		'value'      => array(
						// 			esc_html__('Small','equipo')  => 'small',
						// 			esc_html__('Medium','equipo') => 'medium',
						// 			esc_html__('Large','equipo')  => 'large',
						// 		),
						// 		'std' => 'small'
						// 	),

						// /* margin
						// ----*/

						// 	array(
						// 		'type'       => 'margin',
						// 		'group'      => esc_html__('Margin','equipo'),
						// 		'heading'    => esc_html__('Margin','equipo'),
						// 		'param_name' => 'margin',
						// 		'value'      => ''
						// 	),

						// /* element_css
						// ----*/

						// 	array(
						// 		'type'       => 'textfield',
						// 		'heading'    => esc_html__('Element id','equipo'),
						// 		"class"      => "element-attr-hide",
						// 		'param_name' => 'element_id',
						// 		'value'      => '',
						// 	),

						// 	array(
						// 		'type'       => 'textarea',
						// 		'heading'    => esc_html__('Element css','equipo'),
						// 		"class"      => "element-attr-hide",
						// 		'param_name' => 'element_css',
						// 		'value'      => '',
						// 	),

		    // 		)
		    // 	));

			/* et_modal_menu
			----*/

		    // 	vc_map(array(
		    // 		'name'                    => esc_html__('Modal menu','equipo'),
		    // 		'description'             => esc_html__('Use only with modal container','equipo'),
		    // 		'category'                => $vc_menu_categories[0],
		    // 		'base'                    => 'et_modal_menu',
		    // 		'class'                   => 'et_modal_menu font',
		    // 		'icon'                    => 'et_modal_menu',
		    // 		'show_settings_on_create' => true,
		    // 		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-modal-menu.js',
		    // 		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-modal-menu.js',
		    // 		'params'                  => array(
		    // 			array(
						// 	'type'       => 'dropdown',
						// 	'heading'    => esc_html__('Menu name','equipo'),
						// 	'param_name' => 'menu',
						// 	'value'      => $menu_list,
						// 	'default'    => 'choose'
						// ),
						// array(
						// 	'type'       => 'textfield',
						// 	'heading'    => esc_html__('Extra class','equipo'),
						// 	'param_name' => 'extra_class',
						// 	'value'      => '',
						// ),

						// /* top level
						// ----*/

						// 	/* styling
						// 	----*/

						// 		array(
						// 			'type'       => 'colorpicker',
						// 			'heading'    => esc_html__('Menu color','equipo'),
						// 			'group'      => 'Top level',
						// 			'param_name' => 'menu_color',
						// 			'value'      => '#1c1c1e',
						// 		),

						// 		array(
						// 			'type'       => 'colorpicker',
						// 			'heading'    => esc_html__('Menu color hover','equipo'),
						// 			'group'      => 'Top level',
						// 			'param_name' => 'menu_color_hover',
						// 			'value'      => $main_color,
						// 		),

						// 	/* typography
						// 	----*/

						// 		array(
						// 			'param_name'=>'font_family',
						// 			'type'      => 'dropdown',
						// 			'group'     => esc_html__('Top level','equipo'),
						// 			'heading'   => esc_html__('Font family', 'equipo'),
						// 			'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
						// 			'value'     => $google_fonts_family,
						// 		),
						// 		array(
						// 			'param_name'=>'font_weight',
						// 			'type'      => 'dropdown',
						// 			'group'     => esc_html__('Top level','equipo'),
						// 			'heading'   => esc_html__('Font weight', 'equipo'),
						// 			'value'     => $font_weight_values,
						// 			'std'       => '400'
						// 		),
						// 		array(
						// 			'param_name'=>'font_subsets',
						// 			'type'      => 'dropdown',
						// 			'group'     => esc_html__('Top level','equipo'),
						// 			'heading'   => esc_html__('Font subsets', 'equipo'),
						// 			'value'      => array(
						// 				'latin' => 'latin',
						// 			)
						// 		),
						// 		array(
						// 			'type'       => 'textfield',
						// 			'heading'    => esc_html__('Font size (without any string)','equipo'),
						// 			'group'      => esc_html__('Top level','equipo'),
						// 			'param_name' => 'font_size',
						// 			'value'      => '72',
						// 		),
						// 		array(
						// 			'type'       => 'textfield',
						// 			'heading'    => esc_html__('Menu items line height (without any string)','equipo'),
						// 			'group'      => esc_html__('Top level','equipo'),
						// 			'param_name' => 'line_height',
						// 			'value'      => '96',
						// 		),
						// 		array(
						// 			'type'       => 'textfield',
						// 			'group'      => esc_html__('Top level','equipo'),
						// 			'heading'    => esc_html__('Letter spacing (without any string)','equipo'),
						// 			'param_name' => 'letter_spacing',
						// 			'value'      => '-2'
						// 		),
						// 		array(
						// 			'type'       => 'dropdown',
						// 			'heading'    => esc_html__('Text transform','equipo'),
						// 			'group'      => 'Top level',
						// 			'param_name' => 'text_transform',
						// 			'value'      => array(
						// 				esc_html__('None','equipo')       => 'none',
						// 				esc_html__('Uppercase','equipo')  => 'uppercase',
						// 				esc_html__('Lowercase','equipo')  => 'lowercase',
						// 				esc_html__('Capitalize','equipo') => 'capitalize',
						// 			)
						// 		),

						// /* submenu
						// ----*/

						// 	/* styling
						// 	----*/

						// 		array(
						// 			'type'       => 'colorpicker',
						// 			'heading'    => esc_html__('Submenu color','equipo'),
						// 			'group'      => 'Submenu',
						// 			'param_name' => 'submenu_color',
						// 			'value'      => '#1c1c1e',
						// 		),

						// 		array(
						// 			'type'       => 'colorpicker',
						// 			'heading'    => esc_html__('Submenu color hover','equipo'),
						// 			'group'      => 'Submenu',
						// 			'param_name' => 'submenu_color_hover',
						// 			'value'      => $main_color,
						// 		),

						// 	/* typography
						// 	----*/

						// 		array(
						// 			'param_name'=>'subfont_family',
						// 			'type'      => 'dropdown',
						// 			'group'     => esc_html__('Submenu','equipo'),
						// 			'heading'   => esc_html__('Submenu font family', 'equipo'),
						// 			'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
						// 			'value'     => $google_fonts_family,
						// 		),
						// 		array(
						// 			'param_name'=>'subfont_weight',
						// 			'type'      => 'dropdown',
						// 			'group'     => esc_html__('Submenu','equipo'),
						// 			'heading'   => esc_html__('Submenu font weight', 'equipo'),
						// 			'value'     => $font_weight_values
						// 		),
						// 		array(
						// 			'param_name'=>'subfont_subsets',
						// 			'type'      => 'dropdown',
						// 			'group'     => esc_html__('Submenu','equipo'),
						// 			'heading'   => esc_html__('Submenu font subsets', 'equipo'),
						// 			'value'      => array(
						// 				'latin' => 'latin',
						// 			)
						// 		),
						// 		array(
						// 			'type'       => 'textfield',
						// 			'heading'    => esc_html__('Submenu font size (without any string)','equipo'),
						// 			'group'      => esc_html__('Submenu','equipo'),
						// 			'param_name' => 'subfont_size',
						// 			'value'      => '16',
						// 		),
						// 		array(
						// 			'type'       => 'textfield',
						// 			'heading'    => esc_html__('Submenu items line height (without any string)','equipo'),
						// 			'group'      => esc_html__('Submenu','equipo'),
						// 			'param_name' => 'subline_height',
						// 			'value'      => '32',
						// 		),
						// 		array(
						// 			'type'       => 'textfield',
						// 			'group'      => esc_html__('Submenu','equipo'),
						// 			'heading'    => esc_html__('Submenu letter spacing (without any string)','equipo'),
						// 			'param_name' => 'subletter_spacing',
						// 			'value'      => ''
						// 		),
						// 		array(
						// 			'type'       => 'dropdown',
						// 			'heading'    => esc_html__('Submenu text transform','equipo'),
						// 			'group'      => 'Submenu',
						// 			'param_name' => 'subtext_transform',
						// 			'value'      => array(
						// 				esc_html__('None','equipo')       => 'none',
						// 				esc_html__('Uppercase','equipo')  => 'uppercase',
						// 				esc_html__('Lowercase','equipo')  => 'lowercase',
						// 				esc_html__('Capitalize','equipo') => 'capitalize',
						// 			)
						// 		),

						// /* margin
						// ----*/

						// 	array(
						// 		'type'       => 'margin',
						// 		'group'      => esc_html__('Margin','equipo'),
						// 		'heading'    => esc_html__('Margin','equipo'),
						// 		'param_name' => 'margin',
						// 		'value'      => ''
						// 	),

						// /* element_css
						// ----*/

						// 	array(
						// 		'type'       => 'textfield',
						// 		'heading'    => esc_html__('Element id','equipo'),
						// 		"class"      => "element-attr-hide",
						// 		'param_name' => 'element_id',
						// 		'value'      => '',
						// 	),

						// 	array(
						// 		'type'       => 'textfield',
						// 		'heading'    => esc_html__('Element font','equipo'),
						// 		"class"      => "element-attr-hide",
						// 		'param_name' => 'element_font',
						// 		'value'      => '',
						// 	),

						// 	array(
						// 		'type'       => 'textfield',
						// 		'heading'    => esc_html__('Element font','equipo'),
						// 		"class"      => "element-attr-hide",
						// 		'param_name' => 'subelement_font',
						// 		'value'      => '',
						// 	),

						// 	array(
						// 		'type'       => 'textarea',
						// 		'heading'    => esc_html__('Element css','equipo'),
						// 		"class"      => "element-attr-hide",
						// 		'param_name' => 'element_css',
						// 		'value'      => '',
						// 	),
		    // 		)
		    // 	));

			/* et_sidebar_container
			----*/

		   //  	vc_map(array(
		   //  		'name'                    => esc_html__('Sidebar container','equipo'),
		   //  		'description'             => esc_html__('Use only with header builder','equipo'),
		   //  		'category'                => $vc_menu_categories[2],
		   //  		'base'                    => 'et_header_sidebar_container',
		   //  		'class'                   => 'et_header_sidebar_container',
		   //  		'icon'                    => 'et_header_sidebar_container',
		   //  		'show_settings_on_create' => true,
		   //  		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-sidebar-container.js',
		   //  		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-sidebar-container.js',
		   //  		"as_parent"               => array('only' => 'et_sidebar_toggle, et_gap, et_separator, et_header_button, et_header_icon, et_header_social_links, et_header_slogan, et_search_form, et_sidebar_menu, et_header_logo,et_align_container,et_vertical_align_top,et_vertical_align_middle,et_vertical_align_bottom'),
					// "js_view"                 => 'VcColumnView',
		   //  		"content_element"         => true,
		   //  		'params'                  => array(

					// 	array(
					// 		'type'       => 'textfield',
					// 		'heading'    => esc_html__('Extra class','equipo'),
					// 		'param_name' => 'extra_class',
					// 		'value'      => '',
					// 	),

					// 	/* styling
					// 	----*/

					// 		array(
					// 			'type'       => 'colorpicker',
					// 			'heading'    => esc_html__('Background color','equipo'),
					// 			'group'      => 'Styling',
					// 			'param_name' => 'background_color',
					// 			'value'      => '#ffffff',
					// 		),

					// 		array(
					// 			'type'       => 'colorpicker',
					// 			'heading'    => esc_html__('Default text color','equipo'),
					// 			'group'      => 'Styling',
					// 			'param_name' => 'text_color',
					// 			'value'      => '#616161',
					// 		),

					// 	/* margin
					// 	----*/

					// 		array(
					// 			'type'       => 'margin',
					// 			'group'      => esc_html__('Padding','equipo'),
					// 			'heading'    => esc_html__('Padding','equipo'),
					// 			'param_name' => 'margin',
					// 			'value'      => '48,32,48,32'
					// 		),

					// 	/* element_css
					// 	----*/

					// 		array(
					// 			'type'       => 'textfield',
					// 			'heading'    => esc_html__('Element id','equipo'),
					// 			"class"      => "element-attr-hide",
					// 			'param_name' => 'element_id',
					// 			'value'      => '',
					// 		),

					// 		array(
					// 			'type'       => 'textarea',
					// 			'heading'    => esc_html__('Element css','equipo'),
					// 			"class"      => "element-attr-hide",
					// 			'param_name' => 'element_css',
					// 			'value'      => '',
					// 		),
		   //  		)
		   //  	));

		    /* et_sidebar_menu
			----*/

		    // 	vc_map(array(
		    // 		'name'                    => esc_html__('Sidebar navigation menu','equipo'),
		    // 		'description'             => esc_html__('Use only with sidebar builder','equipo'),
		    // 		'category'                => $vc_menu_categories[2],
		    // 		'base'                    => 'et_sidebar_menu',
		    // 		'class'                   => 'et_sidebar_menu hbe font',
		    // 		'icon'                    => 'et_sidebar_menu',
		    // 		'show_settings_on_create' => true,
		    // 		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-sidebar-menu.js',
		    // 		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-sidebar-menu.js',
		    // 		'params'                  => array(
		    // 			array(
						// 	'type'       => 'dropdown',
						// 	'heading'    => esc_html__('Menu name','equipo'),
						// 	'param_name' => 'menu',
						// 	'value'      => $menu_list,
						// 	'default'    => 'choose'
						// ),
						// array(
						// 	'type'       => 'textfield',
						// 	'heading'    => esc_html__('Extra class','equipo'),
						// 	'param_name' => 'extra_class',
						// 	'value'      => '',
						// ),

						// /* styling
						// ----*/

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Menu color','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'menu_color',
						// 		'value'      => '#1c1c1e',
						// 	),

						// 	array(
						// 		'type'       => 'colorpicker',
						// 		'heading'    => esc_html__('Menu color hover','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'menu_color_hover',
						// 		'value'      => $main_color,
						// 	),

						// 	array(
						// 		'type'       => 'dropdown',
						// 		'heading'    => esc_html__('Submenu indicator','equipo'),
						// 		'group'      => 'Styling',
						// 		'param_name' => 'submenu_indicator',
						// 		'value'      => $logic_values
						// 	),

						// /* typography
						// ----*/

						// 	array(
						// 		'param_name'=>'font_family',
						// 		'type'      => 'dropdown',
						// 		'group'     => esc_html__('Top level','equipo'),
						// 		'heading'   => esc_html__('Font family', 'equipo'),
						// 		'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
						// 		'value'     => $google_fonts_family,
						// 	),
						// 	array(
						// 		'param_name'=>'font_weight',
						// 		'type'      => 'dropdown',
						// 		'group'     => esc_html__('Top level','equipo'),
						// 		'heading'   => esc_html__('Font weight', 'equipo'),
						// 		'value'     => $font_weight_values,
						// 		'std'       => 'uppercase'
						// 	),
						// 	array(
						// 		'param_name'=>'font_subsets',
						// 		'type'      => 'dropdown',
						// 		'group'     => esc_html__('Top level','equipo'),
						// 		'heading'   => esc_html__('Font subsets', 'equipo'),
						// 		'value'      => array(
						// 			'latin' => 'latin',
						// 		)
						// 	),
						// 	array(
						// 		'type'       => 'textfield',
						// 		'heading'    => esc_html__('Font size (without any string)','equipo'),
						// 		'group'      => esc_html__('Top level','equipo'),
						// 		'param_name' => 'font_size',
						// 		'value'      => '32',
						// 	),
						// 	array(
						// 		'type'       => 'textfield',
						// 		'heading'    => esc_html__('Line height (without any string)','equipo'),
						// 		'group'      => esc_html__('Top level','equipo'),
						// 		'param_name' => 'line_height',
						// 		'value'      => '32',
						// 	),
						// 	array(
						// 		'type'       => 'textfield',
						// 		'group'      => esc_html__('Top level','equipo'),
						// 		'heading'    => esc_html__('Letter spacing (without any string)','equipo'),
						// 		'param_name' => 'letter_spacing',
						// 		'value'      => ''
						// 	),
						// 	array(
						// 		'type'       => 'dropdown',
						// 		'heading'    => esc_html__('Text transform','equipo'),
						// 		'group'      => 'Top level',
						// 		'param_name' => 'text_transform',
						// 		'value'      => array(
						// 			esc_html__('None','equipo')       => 'none',
						// 			esc_html__('Uppercase','equipo')  => 'uppercase',
						// 			esc_html__('Lowercase','equipo')  => 'lowercase',
						// 			esc_html__('Capitalize','equipo') => 'capitalize',
						// 		)
						// 	),

						// 	/* submenu
						// 	----*/

						// 		array(
						// 			'type'       => 'textfield',
						// 			'heading'    => esc_html__('Submenu offset','equipo'),
						// 			'group'      => esc_html__('Submenu','equipo'),
						// 			'param_name' => 'suboffset',
						// 			'value'      => '',
						// 		),

						// 		/* typography
						// 		----*/

						// 			array(
						// 				'param_name'=>'subfont_family',
						// 				'type'      => 'dropdown',
						// 				'group'     => esc_html__('Submenu','equipo'),
						// 				'heading'   => esc_html__('Submenu font family', 'equipo'),
						// 				'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
						// 				'value'     => $google_fonts_family,
						// 			),
						// 			array(
						// 				'param_name'=>'subfont_weight',
						// 				'type'      => 'dropdown',
						// 				'group'     => esc_html__('Submenu','equipo'),
						// 				'heading'   => esc_html__('Submenu font weight', 'equipo'),
						// 				'value'     => $font_weight_values
						// 			),
						// 			array(
						// 				'param_name'=>'subfont_subsets',
						// 				'type'      => 'dropdown',
						// 				'group'     => esc_html__('Submenu','equipo'),
						// 				'heading'   => esc_html__('Submenu font subsets', 'equipo'),
						// 				'value'      => array(
						// 					'latin' => 'latin',
						// 				)
						// 			),
						// 			array(
						// 				'type'       => 'textfield',
						// 				'heading'    => esc_html__('Submenu font size (without any string)','equipo'),
						// 				'group'      => esc_html__('Submenu','equipo'),
						// 				'param_name' => 'subfont_size',
						// 				'value'      => '16',
						// 			),
						// 			array(
						// 				'type'       => 'textfield',
						// 				'heading'    => esc_html__('Submenu line height (without any string)','equipo'),
						// 				'group'      => esc_html__('Submenu','equipo'),
						// 				'param_name' => 'subline_height',
						// 				'value'      => '20',
						// 			),
						// 			array(
						// 				'type'       => 'textfield',
						// 				'group'      => esc_html__('Submenu','equipo'),
						// 				'heading'    => esc_html__('Submenu letter spacing (without any string)','equipo'),
						// 				'param_name' => 'subletter_spacing',
						// 				'value'      => ''
						// 			),
						// 			array(
						// 				'type'       => 'dropdown',
						// 				'heading'    => esc_html__('Submenu text transform','equipo'),
						// 				'group'      => 'Submenu',
						// 				'param_name' => 'subtext_transform',
						// 				'value'      => array(
						// 					esc_html__('None','equipo')       => 'none',
						// 					esc_html__('Uppercase','equipo')  => 'uppercase',
						// 					esc_html__('Lowercase','equipo')  => 'lowercase',
						// 					esc_html__('Capitalize','equipo') => 'capitalize',
						// 				)
						// 			),

						// /* padding
						// ----*/

						// 	array(
						// 		'type'       => 'padding',
						// 		'group'      => esc_html__('Padding','equipo'),
						// 		'heading'    => esc_html__('Padding','equipo'),
						// 		'param_name' => 'padding',
						// 		'value'      => ''
						// 	),

						// /* element_css
						// ----*/

						// 	array(
						// 		'type'       => 'textfield',
						// 		'heading'    => esc_html__('Element id','equipo'),
						// 		"class"      => "element-attr-hide",
						// 		'param_name' => 'element_id',
						// 		'value'      => '',
						// 	),

						// 	array(
						// 		'type'       => 'textfield',
						// 		'heading'    => esc_html__('Element font','equipo'),
						// 		"class"      => "element-attr-hide",
						// 		'param_name' => 'element_font',
						// 		'value'      => '',
						// 	),

						// 	array(
						// 		'type'       => 'textarea',
						// 		'heading'    => esc_html__('Element css','equipo'),
						// 		"class"      => "element-attr-hide",
						// 		'param_name' => 'element_css',
						// 		'value'      => '',
						// 	),
		    // 		)
		    // 	));

		/* TITLE SECTION
		----*/

			/* et_title_section_title
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Page title','equipo'),
		    		'description'             => esc_html__('Use only with title section','equipo'),
		    		'category'                => esc_html__('Title section','equipo'),
		    		'base'                    => 'et_title_section_title',
		    		'class'                   => 'et_title_section_title font',
		    		'icon'                    => 'et_title_section_title',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-title-section-title.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-title-section-title.js',
		    		'params'                  => array(
		    			array(
							'type'       => 'textfield',
							"class"      => "element-attr-hide",
							'heading'    => esc_html__('Etp title','equipo'),
							'param_name' => 'etp_title',
							'value'      => '',
						),
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'value'     => $align_values
						),
						array(
							'param_name'=>'text_align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Text align', 'equipo'),
							'value'     => $align_values
						),
						array(
							'param_name'=>'type',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Tag', 'equipo'),
							'value'     => array(
								'H1'  => 'h1',
								'H2'  => 'h2',
								'H3'  => 'h3',
								'H4'  => 'h4',
								'H5'  => 'h5',
								'H6'  => 'h6',
								'p'   => 'p',
								'div' => 'div',
							),
							'std' => 'h1'
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						array(
							'type'       => 'colorpicker',
							'heading'    => esc_html__('Text color','equipo'),
							'param_name' => 'text_color',
							'value'      => '#1c1c1e',
						),

						array(
							'type'       => 'colorpicker',
							'heading'    => esc_html__('Background color','equipo'),
							'param_name' => 'background_color',
							'value'      => '',
						),

						array(
							'param_name'=>'font_family',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Font family', 'equipo'),
							'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
							'value'     => $google_fonts_family,
						),
						array(
							'param_name'=>'font_weight',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Font weight', 'equipo'),
							'value'     => $font_weight_values,
						),
						array(
							'param_name'=>'font_subsets',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Font subsets', 'equipo'),
							'value'      => array(
								'latin' => 'latin',
							)
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Font size (without any string)','equipo'),
							'param_name' => 'font_size',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Letter spacing (without any string)','equipo'),
							'param_name' => 'letter_spacing',
							'value'      => ''
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Line height (without any string)','equipo'),
							'param_name' => 'line_height',
							'value'      => ''
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Text transform','equipo'),
							'param_name' => 'text_transform',
							'value'      => array(
								esc_html__('None','equipo')       => 'none',
								esc_html__('Uppercase','equipo')  => 'uppercase',
								esc_html__('Lowercase','equipo')  => 'lowercase',
								esc_html__('Capitalize','equipo') => 'capitalize',
							)
						),

						/* tablet
						----*/

							array(
								'param_name'=>'tablet_align',
								'type'      => 'dropdown',
								'group'      => esc_html__('Tablet','equipo'),
								'heading'   => esc_html__('Align', 'equipo'),
								'value'     => $align_values
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Tablet landscape font size (without any string)','equipo'),
								'group'      => esc_html__('Tablet','equipo'),
								'param_name' => 'tlf',
								'value'      => $typography_values,
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Tablet landscape line height (without any string)','equipo'),
								'group'      => esc_html__('Tablet','equipo'),
								'param_name' => 'tll',
								'value'      => $typography_values,
							),
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Tablet portrait font size (without any string)','equipo'),
								'group'      => esc_html__('Tablet','equipo'),
								'param_name' => 'tpf',
								'value'      => $typography_values,
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Tablet portrait line height (without any string)','equipo'),
								'group'      => esc_html__('Tablet','equipo'),
								'param_name' => 'tpl',
								'value'      => $typography_values,
							),

						/* mobile
						----*/

							array(
								'param_name'=>'mobile_align',
								'type'      => 'dropdown',
								'group'      => esc_html__('Mobile','equipo'),
								'heading'   => esc_html__('Align', 'equipo'),
								'value'     => $align_values
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Font size (without any string)','equipo'),
								'group'      => esc_html__('Mobile','equipo'),
								'param_name' => 'mf',
								'value'      => $typography_values,
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Line height (without any string)','equipo'),
								'group'      => esc_html__('Mobile','equipo'),
								'param_name' => 'ml',
								'value'      => $typography_values,
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Font size (max-width 374px)','equipo'),
								'group'      => esc_html__('Mobile','equipo'),
								'param_name' => 'mfs',
								'value'      => $typography_values,
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Line height (max-width 374px)','equipo'),
								'group'      => esc_html__('Mobile','equipo'),
								'param_name' => 'mls',
								'value'      => $typography_values,
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element font','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_font',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),
		    		)
		    	));

			/* et_title_section_subtitle
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Page subtitle','equipo'),
		    		'description'             => esc_html__('Use only with title section','equipo'),
		    		'category'                => esc_html__('Title section','equipo'),
		    		'base'                    => 'et_title_section_subtitle',
		    		'class'                   => 'et_title_section_subtitle font',
		    		'icon'                    => 'et_title_section_subtitle',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-title-section-subtitle.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-title-section-subtitle.js',
		    		'params'                  => array(
		    			array(
							'type'       => 'textfield',
							"class"      => "element-attr-hide",
							'heading'    => esc_html__('Etp title','equipo'),
							'param_name' => 'etp_subtitle',
							'value'      => '',
						),
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'value'     => $align_values
						),
						array(
							'param_name'=>'text_align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Text align', 'equipo'),
							'value'     => $align_values
						),
						array(
							'param_name'=>'type',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Tag', 'equipo'),
							'value'     => array(
								'H1'  => 'h1',
								'H2'  => 'h2',
								'H3'  => 'h3',
								'H4'  => 'h4',
								'H5'  => 'h5',
								'H6'  => 'h6',
								'p'   => 'p',
								'div' => 'div',
							),
							'std' => 'p'
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						array(
							'type'       => 'colorpicker',
							'heading'    => esc_html__('Text color','equipo'),
							'param_name' => 'text_color',
							'value'      => '#1c1c1e',
						),

						array(
							'type'       => 'colorpicker',
							'heading'    => esc_html__('Background color','equipo'),
							'param_name' => 'background_color',
							'value'      => '',
						),

						array(
							'param_name'=>'font_family',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Font family', 'equipo'),
							'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
							'value'     => $google_fonts_family,
						),
						array(
							'param_name'=>'font_weight',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Font weight', 'equipo'),
							'value'     => $font_weight_values
						),
						array(
							'param_name'=>'font_subsets',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Font subsets', 'equipo'),
							'value'      => array(
								'latin' => 'latin',
							)
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Font size (without any string)','equipo'),
							'param_name' => 'font_size',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Letter spacing (without any string)','equipo'),
							'param_name' => 'letter_spacing',
							'value'      => ''
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Line height (without any string)','equipo'),
							'param_name' => 'line_height',
							'value'      => ''
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Text transform','equipo'),
							'param_name' => 'text_transform',
							'value'      => array(
								esc_html__('None','equipo')       => 'none',
								esc_html__('Uppercase','equipo')  => 'uppercase',
								esc_html__('Lowercase','equipo')  => 'lowercase',
								esc_html__('Capitalize','equipo') => 'capitalize',
							)
						),

						/* tablet
						----*/

							array(
								'param_name'=>'tablet_align',
								'type'      => 'dropdown',
								'group'      => esc_html__('Tablet','equipo'),
								'heading'   => esc_html__('Align', 'equipo'),
								'value'     => $align_values
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Tablet landscape font size (without any string)','equipo'),
								'group'      => esc_html__('Tablet','equipo'),
								'param_name' => 'tlf',
								'value'      => $font_size_values,
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Tablet landscape line height (without any string)','equipo'),
								'group'      => esc_html__('Tablet','equipo'),
								'param_name' => 'tll',
								'value'      => $line_height_values,
							),
							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Tablet portrait font size (without any string)','equipo'),
								'group'      => esc_html__('Tablet','equipo'),
								'param_name' => 'tpf',
								'value'      => $font_size_values,
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Tablet portrait line height (without any string)','equipo'),
								'group'      => esc_html__('Tablet','equipo'),
								'param_name' => 'tpl',
								'value'      => $line_height_values,
							),

						/* mobile
						----*/

							array(
								'param_name'=>'mobile_align',
								'type'      => 'dropdown',
								'group'      => esc_html__('Mobile','equipo'),
								'heading'   => esc_html__('Align', 'equipo'),
								'value'     => $align_values
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Font size (without any string)','equipo'),
								'group'      => esc_html__('Mobile','equipo'),
								'param_name' => 'mf',
								'value'      => $font_size_values,
							),

							array(
								'type'       => 'dropdown',
								'heading'    => esc_html__('Line height (without any string)','equipo'),
								'group'      => esc_html__('Mobile','equipo'),
								'param_name' => 'ml',
								'value'      => $line_height_values,
							),

						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element font','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_font',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),
		    		)
		    	));

			/* et_breadcrumbs
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Breadcrumbs','equipo'),
		    		'description'             => esc_html__('Use only with title section','equipo'),
		    		'category'                => esc_html__('Title section','equipo'),
		    		'base'                    => 'et_breadcrumbs',
		    		'class'                   => 'et_breadcrumbs font',
		    		'icon'                    => 'et_breadcrumbs',
		    		'show_settings_on_create' => true,
		    		'admin_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-breadcrumbs.js',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/et-breadcrumbs.js',
		    		'params'                  => array(
		    			array(
							'type'       => 'textfield',
							"class"      => "element-attr-hide",
							'heading'    => esc_html__('Etp breadcrumbs','equipo'),
							'param_name' => 'etp_breadcrumbs',
							'value'      => '',
						),
						array(
							'param_name'=>'align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Align', 'equipo'),
							'value'     => $align_values
						),
						array(
							'param_name'=>'text_align',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Text align', 'equipo'),
							'value'     => $align_values
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Extra class','equipo'),
							'param_name' => 'extra_class',
							'value'      => '',
						),

						array(
							'type'       => 'colorpicker',
							'heading'    => esc_html__('Text color','equipo'),
							'param_name' => 'text_color',
							'value'      => '#9a9a9a',
						),

						array(
							'type'       => 'colorpicker',
							'heading'    => esc_html__('Text color hover','equipo'),
							'param_name' => 'text_color_hover',
							'value'      => '#1c1c1e',
						),

						array(
							'param_name'=>'font_family',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Font family', 'equipo'),
							'description' => esc_html__('800+ google fonts included. For preview click', 'equipo').' <a href="//fonts.google.com/" target="_blank">'.esc_html__('here', 'equipo').'</a>',
							'value'     => $google_fonts_family,
						),
						array(
							'param_name'=>'font_weight',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Font weight', 'equipo'),
							'value'     => $font_weight_values
						),
						array(
							'param_name'=>'font_subsets',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Font subsets', 'equipo'),
							'value'      => array(
								'latin' => 'latin',
							)
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Font size (without any string)','equipo'),
							'param_name' => 'font_size',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Letter spacing (without any string)','equipo'),
							'param_name' => 'letter_spacing',
							'value'      => ''
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Line height (without any string)','equipo'),
							'param_name' => 'line_height',
							'value'      => ''
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Text transform','equipo'),
							'param_name' => 'text_transform',
							'value'      => array(
								esc_html__('None','equipo')       => 'none',
								esc_html__('Uppercase','equipo')  => 'uppercase',
								esc_html__('Lowercase','equipo')  => 'lowercase',
								esc_html__('Capitalize','equipo') => 'capitalize',
							)
						),

						/* tablet
						----*/

							array(
								'param_name'=>'tablet_align',
								'type'      => 'dropdown',
								'group'      => esc_html__('Tablet','equipo'),
								'heading'   => esc_html__('Align', 'equipo'),
								'value'     => $align_values
							),


						/* mobile
						----*/

							array(
								'param_name'=>'mobile_align',
								'type'      => 'dropdown',
								'group'      => esc_html__('Mobile','equipo'),
								'heading'   => esc_html__('Align', 'equipo'),
								'value'     => $align_values
							),


						/* element_css
						----*/

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element id','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_id',
								'value'      => '',
							),

							array(
								'type'       => 'textfield',
								'heading'    => esc_html__('Element font','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_font',
								'value'      => '',
							),

							array(
								'type'       => 'textarea',
								'heading'    => esc_html__('Element css','equipo'),
								"class"      => "element-attr-hide",
								'param_name' => 'element_css',
								'value'      => '',
							),
		    		)
		    	));

		/* WIDGETS
		----*/

			/* widget_contact_form
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Fast contact form','equipo'),
		    		'description'             => esc_html__('Use to add AJAX contact form','equipo'),
		    		'category'                => esc_html__('WordPress Widgets','equipo'),
		    		'base'                    => 'widget_contact_form',
		    		'class'                   => 'widget_contact_form',
		    		'icon'                    => 'widget_contact_form',
		    		'show_settings_on_create' => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Submit button text','equipo'),
							'param_name' => 'submit_text',
							'value'      => 'Send',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Recipient','equipo'),
							'param_name' => 'recipient',
							'value'      => get_option('admin_email'),
						),
		    		)
		    	));

		    /* widget_facebook
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Facebook like box','equipo'),
		    		'description'             => esc_html__('Add facebook likebox','equipo'),
		    		'category'                => esc_html__('WordPress Widgets','equipo'),
		    		'base'                    => 'widget_facebook',
		    		'class'                   => 'widget_facebook',
		    		'icon'                    => 'widget_facebook',
		    		'show_settings_on_create' => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('App ID from the app dashboard','equipo'),
							'param_name' => 'app_id',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('The URL of the Facebook Page','equipo'),
							'param_name' => 'href',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Replace en_US with your locale, e.g., ru_RU for Russian (Russia)','equipo'),
							'description' => esc_html__('You can change the language of the Page plugin by loading a localized version of the Facebook JavaScript SDK.','equipo'),
							'param_name' => 'language_code',
							'value'      => 'en_US',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('The pixel width of the plugin. Min. is 180 & Max. is 500','equipo'),
							'param_name' => 'width',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('The pixel height of the plugin. Min. is 70','equipo'),
							'param_name' => 'height',
							'value'      => '',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Show timeline','equipo'),
							'param_name' => 'timeline',
							'value'      => 'true',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Show events','equipo'),
							'param_name' => 'events',
							'value'      => 'true',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Show messages','equipo'),
							'param_name' => 'messages',
							'value'      => 'true',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Hide cover photo in the header','equipo'),
							'param_name' => 'hide_cover',
							'value'      => 'false',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Show profile photos when friends like this','equipo'),
							'param_name' => 'show_facepile',
							'value'      => 'false',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Use the small header instead','equipo'),
							'param_name' => 'small_header',
							'value'      => 'false',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Try to fit inside the container width','equipo'),
							'param_name' => 'adapt_container_width',
							'value'      => 'true',
						),

		    		)
		    	));

		    /* widget_flickr
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Flickr images','equipo'),
		    		'description'             => esc_html__('Use to add images from flickr','equipo'),
		    		'category'                => esc_html__('WordPress Widgets','equipo'),
		    		'base'                    => 'widget_flickr',
		    		'class'                   => 'widget_flickr',
		    		'icon'                    => 'widget_flickr',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/widget-flickr.js',
		    		'show_settings_on_create' => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Number of photos to show','equipo'),
							'param_name' => 'photos_number',
							'value'      => '6',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Flickr id','equipo'),
							'description'=> esc_html__('For more infomration go:','equipo').' '.'<a target="_blank" href="http://idgettr.com/">'.esc_html__( 'here', 'equipo' ).'</a>',
							'param_name' => 'flickr_id',
							'value'      => '',
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Image size','equipo'),
							'param_name' => 'image_size',
							'value'      => array(
								esc_html__('Small','equipo')      => 'square',
								esc_html__('Thumbnails','equipo') => 'thumb',
								esc_html__('Medium','equipo')     => 'mid',
							),
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Display','equipo'),
							'param_name' => 'image_size',
							'value'      => array(
								esc_html__('Latest','equipo') => 'latest',
								esc_html__('Random','equipo') => 'random',
							),
						),
						array(
							'param_name'=>'columns_mob',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Columns mobile', 'equipo'),
							'value'     => array(
								'1'  => '1',
								'2'  => '2',
								'3'  => '3',
								'4'  => '4',
								'5'  => '5',
								'6'  => '6',
								'7'  => '7',
								'8'  => '8',
								'9'  => '9',
								'10'  => '10'
							)
						),
						array(
							'param_name'=>'columns_tablet',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Columns tablet', 'equipo'),
							'value'     => array(
								'1'  => '1',
								'2'  => '2',
								'3'  => '3',
								'4'  => '4',
								'5'  => '5',
								'6'  => '6',
								'7'  => '7',
								'8'  => '8',
								'9'  => '9',
								'10'  => '10'
							)
						),
						array(
							'param_name'=>'columns_desk',
							'type'      => 'dropdown',
							'heading'   => esc_html__('Columns desktop', 'equipo'),
							'value'     => array(
								'1'  => '1',
								'2'  => '2',
								'3'  => '3',
								'4'  => '4',
								'5'  => '5',
								'6'  => '6',
								'7'  => '7',
								'8'  => '8',
								'9'  => '9',
								'10'  => '10'
							)
						),
		    		)

		    	));

		    /* widget_mailchimp
			----*/

 				$list_array = enovathemes_addons_mailchimp_list();

 				$list_values = array(''=>esc_html__('Choose','equipo'));

 				if ( !is_wp_error( $list_array ) && is_array($list_array)){

 					foreach ( $list_array as $list){
 						$list_values[$list['id']] = $list['name'];
 					}
 				}

				$list_values = array_flip($list_values);

				if (empty($list_values)) {
					array_push($list_values, esc_html__('Mailchimp did not return any list','equipo'));
				}

		    	vc_map(array(
		    		'name'                    => esc_html__('Mailchimp','equipo'),
		    		'description'             => esc_html__('Use to add AJAX mailchimp subscribe','equipo'),
		    		'category'                => esc_html__('WordPress Widgets','equipo'),
		    		'base'                    => 'widget_mailchimp',
		    		'class'                   => 'widget_mailchimp',
		    		'icon'                    => 'widget_mailchimp',
		    		'show_settings_on_create' => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => '',
						),
						array(
							'type'       => 'textarea',
							'heading'    => esc_html__('Description','equipo'),
							'param_name' => 'description',
							'value'      => '',
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('List','equipo'),
							'description'=> esc_html__('Make sure you have the Mailchimp API key and at least one list in your Mailchimp dashboard. Go to theme options >> general >> Mailchimp API key','equipo'),
							'param_name' => 'list',
							'value'      => $list_values,
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Show First Name field','equipo'),
							'param_name' => 'first_name',
							'value'      => 'false',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Required?','equipo'),
							'param_name' => 'required_first_name',
							'value'      => 'false',
							'dependency' => Array('element' => 'first_name', 'value' => 'true')
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Show Last Name field','equipo'),
							'param_name' => 'last_name',
							'value'      => 'false',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Required?','equipo'),
							'param_name' => 'required_last_name',
							'value'      => 'false',
							'dependency' => Array('element' => 'last_name', 'value' => 'true')
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Show phone field','equipo'),
							'param_name' => 'phone',
							'value'      => 'false',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Required?','equipo'),
							'param_name' => 'required_phone',
							'value'      => 'false',
							'dependency' => Array('element' => 'phone', 'value' => 'true')
						),
		    		)
		    	));

			/* widget_posts
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Recent posts','equipo'),
		    		'description'             => esc_html__('Use to add recent posts with image','equipo'),
		    		'category'                => esc_html__('WordPress Widgets','equipo'),
		    		'base'                    => 'widget_posts',
		    		'class'                   => 'widget_posts',
		    		'icon'                    => 'widget_posts',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/widget-posts.js',
		    		'show_settings_on_create' => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Number of posts','equipo'),
							'param_name' => 'number',
							'value'      => '',
						)
		    		)
		    	));

		    /* widget_login
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Login form','equipo'),
		    		'description'             => esc_html__('Use to add front-end login form','equipo'),
		    		'category'                => esc_html__('WordPress Widgets','equipo'),
		    		'base'                    => 'widget_login',
		    		'class'                   => 'widget_login',
		    		'icon'                    => 'widget_login',
		    		'show_settings_on_create' => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Registration page link','equipo'),
							'param_name' => 'registration_link',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Password recovery page','equipo'),
							'param_name' => 'forgot_link',
							'value'      => '',
						)
		    		)
		    	));

			/* widget_product_categories
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Product categories','equipo'),
		    		'description'             => esc_html__('Woocommerce','equipo'),
		    		'category'                => esc_html__('WordPress Widgets','equipo'),
		    		'base'                    => 'widget_product_categories',
		    		'class'                   => 'widget_product_categories',
		    		'icon'                    => 'widget_product_categories',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/widget-product-categories.js',
		    		'show_settings_on_create' => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => '',
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Order by','equipo'),
							'param_name' => 'orderby',
							'value'      => array(
								esc_html__('Category order','equipo') => 'order',
								esc_html__('Name','equipo') => 'name',
							),
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Show as dropdown','equipo'),
							'param_name' => 'dropdown',
							'value'      => '1',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Show product counts','equipo'),
							'param_name' => 'count',
							'value'      => '1',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Show hierarchy','equipo'),
							'param_name' => 'hierarchical',
							'value'      => '1',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Only show children of the current category','equipo'),
							'param_name' => 'show_children_only',
							'value'      => '1',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Hide empty categories','equipo'),
							'param_name' => 'hide_empty',
							'value'      => '1',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Maximum depth','equipo'),
							'param_name' => 'max_depth',
							'value'      => '',
						),
		    		)

		    	));

		    /* widget_products_by_rating
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Product by rating','equipo'),
		    		'description'             => esc_html__('Woocommerce','equipo'),
		    		'category'                => esc_html__('WordPress Widgets','equipo'),
		    		'base'                    => 'widget_products_by_rating',
		    		'class'                   => 'widget_products_by_rating',
		    		'icon'                    => 'widget_products_by_rating',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/widget-products-by-rating.js',
		    		'show_settings_on_create' => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Number of products to show','equipo'),
							'param_name' => 'number',
							'value'      => '',
						),
		    		)

		    	));

		    /* widget_products
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Products','equipo'),
		    		'description'             => esc_html__('Woocommerce','equipo'),
		    		'category'                => esc_html__('WordPress Widgets','equipo'),
		    		'base'                    => 'widget_products',
		    		'class'                   => 'widget_products',
		    		'icon'                    => 'widget_products',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/widget-products.js',
		    		'show_settings_on_create' => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Number of products to show','equipo'),
							'param_name' => 'number',
							'value'      => '',
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Show','equipo'),
							'param_name' => 'show',
							'value'      => array(
								esc_html__('All products','equipo') => '',
								esc_html__('Featured','equipo') => 'featured',
								esc_html__('On-sale products','equipo') => 'onsale',
							),
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Order by','equipo'),
							'param_name' => 'orderby',
							'value'      => array(
								esc_html__('Date','equipo') => 'date',
								esc_html__('Price','equipo') => 'price',
								esc_html__('Random','equipo') => 'random',
								esc_html__('Sales','equipo') => 'sales',
							),
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__('Order','equipo'),
							'param_name' => 'order',
							'value'      => array(
								esc_html__('ASC','equipo') => 'asc',
								esc_html__('DESC','equipo') => 'desc',
							),
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Hide free products','equipo'),
							'param_name' => 'hide_free',
							'value'      => '1',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__('Show hidden products','equipo'),
							'param_name' => 'show_hidden',
							'value'      => '1',
						),
		    		)

		    	));

		    /* widget_recent_product_reviews
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Recent product reviews','equipo'),
		    		'description'             => esc_html__('Woocommerce','equipo'),
		    		'category'                => esc_html__('WordPress Widgets','equipo'),
		    		'base'                    => 'widget_recent_product_reviews',
		    		'class'                   => 'widget_recent_product_reviews',
		    		'icon'                    => 'widget_recent_product_reviews',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/widget-products-reviews.js',
		    		'show_settings_on_create' => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Number of products to show','equipo'),
							'param_name' => 'number',
							'value'      => '',
						),
		    		)

		    	));

		    /* widget_recent_viewed_products
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Recent viewed products','equipo'),
		    		'description'             => esc_html__('Woocommerce','equipo'),
		    		'category'                => esc_html__('WordPress Widgets','equipo'),
		    		'base'                    => 'widget_recent_viewed_products',
		    		'class'                   => 'widget_recent_viewed_products',
		    		'icon'                    => 'widget_recent_viewed_products',
		    		'front_enqueue_js'        => EQUIPO_ENOVATHEMES_TEMPPATH .'/js/vc_elements/widget-products-viewed.js',
		    		'show_settings_on_create' => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => '',
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Number of products to show','equipo'),
							'param_name' => 'number',
							'value'      => '',
						),
		    		)

		    	));

		    /* widget_product_tag_cloud
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Product tag cloud','equipo'),
		    		'description'             => esc_html__('Woocommerce','equipo'),
		    		'category'                => esc_html__('WordPress Widgets','equipo'),
		    		'base'                    => 'widget_product_tag_cloud',
		    		'class'                   => 'widget_product_tag_cloud',
		    		'icon'                    => 'widget_product_tag_cloud',
		    		'show_settings_on_create' => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => '',
						)
		    		)

		    	));

		    /* widget_cart
			----*/

		    	vc_map(array(
		    		'name'                    => esc_html__('Cart','equipo'),
		    		'description'             => esc_html__('Woocommerce','equipo'),
		    		'category'                => esc_html__('WordPress Widgets','equipo'),
		    		'base'                    => 'widget_cart',
		    		'class'                   => 'widget_cart',
		    		'icon'                    => 'widget_cart',
		    		'show_settings_on_create' => true,
		    		'params'                  => array(
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__('Title','equipo'),
							'param_name' => 'title',
							'value'      => '',
						),
		    		)
		    	));

	}

	if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {

		class WPBakeryShortCode_et_Carousel extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Carousel_Item extends WPBakeryShortCodesContainer {}

		class WPBakeryShortCode_et_Pricing_Table_Container extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Pricing_Table extends WPBakeryShortCodesContainer {}

		class WPBakeryShortCode_et_Accordion extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Accordion_Item extends WPBakeryShortCodesContainer {}

		class WPBakeryShortCode_et_Tab extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Tab_Item extends WPBakeryShortCodesContainer {}

		class WPBakeryShortCode_et_Testimonial_Container extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Testimonial extends WPBakeryShortCodesContainer {}

		class WPBakeryShortCode_et_Client_Container extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Client extends WPBakeryShortCodesContainer {}

		class WPBakeryShortCode_et_Banner extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Popup_Banner extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Stagger_Box extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Icon_Box_Container extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Step_Box_Container extends WPBakeryShortCodesContainer {}
		
		// class WPBakeryShortCode_et_Header_Sidebar_Container extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Header_Mobile_Container extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Mobile_Container_Tab extends WPBakeryShortCodesContainer {}
		// class WPBakeryShortCode_et_Header_Modal_Container extends WPBakeryShortCodesContainer {}
		// class WPBakeryShortCode_et_Header_Modal_Container_Column extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Align_Container extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Vertical_Align_Top extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Vertical_Align_Middle extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Vertical_Align_Bottom extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Megamenu_Tab extends WPBakeryShortCodesContainer {}
		class WPBakeryShortCode_et_Megamenu_Tab_Item extends WPBakeryShortCodesContainer {}

		class WPBakeryShortCode_et_Woo_Categories extends WPBakeryShortCodesContainer {}

	}

}

?>

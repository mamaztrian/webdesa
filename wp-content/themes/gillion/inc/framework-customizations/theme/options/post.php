<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$header_options = array(

	'post_date_format' => array(
		'type'  => 'radio',
		'value' => 'friendly',
		'label' => esc_html__( 'Post Date Format', 'gillion' ),
		'desc'  => esc_html__( 'Choose post date format', 'gillion' ),
		'choices' => array(
			'standard' => esc_html__( 'Standard (from WordPress settings)', 'gillion' ),
			'friendly' => esc_html__( 'User Friendly (min, hours ago)', 'gillion' ),
		),
		'inline' => false,
	),

	'post_view_count' => array(
		'type'  => 'radio',
		'value' => 'default',
		'label' => esc_html__('Post View Count', 'gillion'),
		'desc'  => esc_html__('Choose post count option', 'gillion'),
		'choices' => array(
			'off' => esc_html__( 'Off', 'gillion' ),
			'default' => esc_html__( 'On (fast, does not work with cache plugins)', 'gillion' ),
			'ajax' => esc_html__( 'On (slow, works with cache plugins)', 'gillion' ),
		),
		'inline' => false,
	),

	'post_layout' => array(
		'type'  => 'radio',
		'value' => 'sidebar-right',
		'label' => esc_html__('Post Layout', 'gillion'),
		'desc'  => esc_html__('Choose post layout', 'gillion'),
		'choices' => array(
			'standard' => esc_html__( 'Standard (without sidebar)', 'gillion' ),
			'standard-mini' => esc_html__( 'Standard mini (without sidebar)', 'gillion' ),
			'sidebar-left' => esc_html__( 'Sidebar left', 'gillion' ),
			'sidebar-right' => esc_html__( 'Sidebar right', 'gillion' ),
		),
		'inline' => false,
	),

	'post_style' => array(
		'type'  => 'radio',
		'value' => 'standard',
		'label' => esc_html__( 'Post Style', 'gillion' ),
		'desc'  => esc_html__( 'Choose post style', 'gillion' ),
		'choices' => array(
			'standard' => esc_html__( 'Standard', 'gillion' ),
			'toptitle' => esc_html__( 'Standard (with title at the top)', 'gillion' ),
			'slider'   => esc_html__( 'Slider (will disable titlebar)', 'gillion' ),
		),
		'inline' => false,
	),

	'post_elements' => array(
		'type'  => 'checkboxes',
		'value' => array(
			'date' => true,
			'prev_next' => true,
			'athor_box' => true,
			'share' => true,
			'comments' => true,
		),
		'label' => esc_html__('Post Elements', 'gillion'),
		'desc'  => esc_html__('Select post elements you want to see in blog', 'gillion'),
		'choices' => array(
			'date' => esc_html__('Date', 'gillion'),
			'share' => esc_html__('Share', 'gillion'),
			'prev_next' => esc_html__('Prev/Next links', 'gillion'),
			'athor_box' => esc_html__('Author additional information box', 'gillion'),
			'comments' => esc_html__('Comments', 'gillion'),
		),
		'inline' => false,
	),

	'post_meta' => array(
		'type'  => 'radio',
		'value' => 'enabled',
		'label' => esc_html__( 'Post Meta', 'gillion' ),
		'desc'  => esc_html__( 'Choose post style', 'gillion' ),
		'choices' => array(
			'enabled' => esc_html__( 'Enabled', 'gillion' ),
			'enabled_single' => esc_html__( 'Enabled only in single post page ', 'gillion' ),
			'disabled'   => esc_html__( 'Disabled', 'gillion' ),
		),
		'inline' => false,
	),

	'single_related_posts' => array(
		'type' => 'switch',
		'label' => esc_html__( 'Related Posts', 'gillion' ),
		'desc' => esc_html__( 'Enable or disable related posts', 'gillion' ),
		'value' => 'on',
		'left-choice' => array(
			'value' => 'off',
			'label' => esc_html__('Off', 'gillion'),
		),
		'right-choice' => array(
			'value' => 'on',
			'label' => esc_html__('On', 'gillion'),
		),
	),

	'post_desc' => array(
		'type'  => 'slider',
		'value' => 45,
		'properties' => array(
			'min' => 10,
			'max' => 80,
		),
		'label' => esc_html__('Description Length', 'gillion'),
		'desc'  => esc_html__('Choose post description preview length', 'gillion'),
	),

	'single_image_captions' => array(
		'type' => 'switch',
		'label' => esc_html__( 'Image Captions', 'gillion' ),
		'desc' => esc_html__( 'Enable or disable image captions', 'gillion' ),
		'value' => 'on',
		'left-choice' => array(
			'value' => 'off',
			'label' => esc_html__('Off', 'gillion'),
		),
		'right-choice' => array(
			'value' => 'on',
			'label' => esc_html__('On', 'gillion'),
		),
	),

	'single_image_captions_label' => array(
		'type'  => 'text',
		'label' => esc_html__('Image Captions Label ', 'gillion'),
		'desc'  => esc_html__('Enter image captions label', 'gillion'),
		'value' => '',
	),




        'content_title4' => array( 'type' => 'html-full', 'value' => '', 'label' => false, 'html'  =>
            '<h3 class="hndle sh-custom-group-divder"><span>
                '.esc_html__( 'Post Categories', 'gillion' ).'
            </span></h3>',
        ),

    'global_categories' => array(
        'type'  => 'radio',
        'value' => 'style1',
        'label' => esc_html__( 'Style', 'gillion' ),
        'desc'  => esc_html__( 'Choose global categories style', 'gillion' ),
        'choices' => array(
            'style1' => esc_html__( 'Standard Text', 'gillion' ),
            'style2' => esc_html__( 'Fancy Button', 'gillion' ),
        ),
        'inline' => false,
    ),

    'global_categories_position' => array(
        'type'  => 'radio',
        'value' => 'title',
        'label' => esc_html__( 'Position', 'gillion' ),
        'desc'  => esc_html__( 'Choose post categories position', 'gillion' ),
        'choices' => array(
            'title' => esc_html__( 'Above Title ', 'gillion' ),
            'image' => esc_html__( 'Inside Image', 'gillion' ),
        ),
        'inline' => false,
    ),

);

$options = array(
	'post' => array(
		'title'   => esc_html__( 'Post', 'gillion' ),
		'type'    => 'tab',
		'icon'	  => 'fa fa-phone',
		'options' => array(
			'ad-box' => array(
				'title'   => esc_html__( 'Post', 'gillion' ),
				'type'    => 'box',
				'options' => $header_options
			),
		)
	)
);

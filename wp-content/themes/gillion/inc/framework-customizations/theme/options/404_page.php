<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$page_404_options = array(
	'404_status' => array(
		'type' => 'switch',
		'label' => esc_html__( 'Enable 404 page', 'gillion' ),
		'desc' => esc_html__( 'Enable or disable 404 page', 'gillion' ),
		'value' => true,
		'left-choice' => array(
			'value' => false,
			'label' => esc_html__('Off', 'gillion'),
		),
		'right-choice' => array(
			'value' => true,
			'label' => esc_html__('On', 'gillion'),
		),
	),

	'404_title' => array(
		'type'  => 'text',
		'value' => esc_html__('Page not found', 'gillion'),
		'label' => esc_html__('Title', 'gillion'),
		'desc'  => esc_html__('Enter 404 page title', 'gillion'),
	),

	'404_text' => array(
		'type'  => 'text',
		'value' => esc_html__("OOPS! Page you're looking for doesn't exist. Please use search for help, or go to home page", 'gillion'),
		'label' => esc_html__('Message', 'gillion'),
		'desc'  => esc_html__('Enter 404 page message', 'gillion'),
	),

	'404_image' => array(
		'label' => esc_html__( 'Image', 'gillion' ),
		'desc'  => esc_html__( 'Upload a background image for 404 page', 'gillion' ),
		'type'  => 'upload'
	),

	'404_background' => array(
		'type'  => 'color-picker',
		'value' => '',
		'label' => esc_html__('Background Color', 'gillion'),
		'desc'  => esc_html__('Select 404 page background color', 'gillion'),
	),

	'404_background2' => array(
		'type'  => 'color-picker',
		'value' => '',
		'label' => esc_html__('Background Color 2', 'gillion'),
		'desc'  => esc_html__('Select 404 page background color 2 to create a gradient effect', 'gillion'),
	),
);

$options = array(
	'404-page' => array(
		'title'   => esc_html__( '404 Page', 'gillion' ),
		'type'    => 'tab',
		'options' => array(
			'404-page-box' => array(
				'title'   => esc_html__( '404 Page Settings', 'gillion' ),
				'type'    => 'box',
				'options' => $page_404_options
			),
		)
	)
);

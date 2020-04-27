<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

class Widget_Social_V2 extends WP_Widget {

    /**
     * Widget constructor.
     */
    private $options;
    private $prefix;
    function __construct() {

        $widget_ops = array( 'description' => esc_html__( 'Show you social network icons', 'gillion' ) );
        parent::__construct( false, esc_html__( 'Shufflehound Social Icons', 'gillion' ), $widget_ops );
        $this->options = array(

            'id' => array( 'type' => 'unique' ),

            'title' => array(
                'type' => 'text',
                'label' => esc_html__('Widget Title', 'gillion'),
                'value' => esc_html__('Social Media', 'gillion'),
            ),

            'social_newtab' => array(
                'label' => esc_html__( 'Links In New Tab', 'gillion' ),
                'desc'  => esc_html__( 'Enable or disable social media link opening in new tab', 'gillion' ),
                'type'  => 'switch',
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

            'social_twitter' => array(
                'type'  => 'text',
                'value' => '',
                'label' => esc_html__('Twitter URL', 'gillion'),
            ),

            'social_facebook' => array(
                'type'  => 'text',
                'value' => '',
                'label' => esc_html__('Facebok URL', 'gillion'),
            ),

            'social_googleplus' => array(
                'type'  => 'text',
                'value' => '',
                'label' => esc_html__('Google+ URL', 'gillion'),
            ),

            'social_instagram' => array(
                'type'  => 'text',
                'value' => '',
                'label' => esc_html__('Instagram URL', 'gillion'),
            ),

            'social_pinterest' => array(
                'type'  => 'text',
                'value' => '',
                'label' => esc_html__('Pinterest URL', 'gillion'),
            ),

            'social_flickr' => array(
                'type'  => 'text',
                'value' => '',
                'label' => esc_html__('Flickr URL', 'gillion'),
            ),

            'social_custom' => array(
                'type' => 'addable-popup',
                'label' => esc_html__('Unlimited Social Media', 'gillion'),
                'desc'  => esc_html__('Add custom icons not included in upper list for other social media links', 'gillion'),
                'template' => '<i class="{{- icon }}"></i> {{- title }}',
                'popup-title' => null,
                'size' => 'small',
                'limit' => 10,
                'popup-options' => array(

                    'icon' => array(
                        'value' => '',
                        'type'  => 'icon',
                        'label' => esc_html__('Icon', 'gillion'),
                        'desc'   => esc_html__( 'Select Icon', 'gillion' ),
                        'set' => 'gillion-icons'
                    ),

                    'title' => array(
                        'type'  => 'text',
                        'value' => '',
                        'label' => esc_html__('Enter Title', 'gillion'),
                    ),

                    'link' => array(
                        'type'  => 'text',
                        'label' => esc_html__('Enter URL', 'gillion'),
                        'desc'  => esc_html__('Enter your custom link to show the icon', 'gillion'),
                    ),

                ),
            ),

        );
        $this->prefix = 'online_support';
    }

    function widget( $args, $instance ) {
        extract( $args );
        $params = array();

        foreach ( $instance as $key => $value ) {
            $atts[ $key ] = $value;
        }

        $filepath = get_template_directory().'/inc/widgets/social-v2/views/widget.php';

        $instance = $atts;
        $before_widget = str_replace( 'class="', 'class="widget_social_v2 ', $before_widget );

        if ( file_exists( $filepath ) ) {
            include ( $filepath );
        }
    }

    function update( $new_instance, $old_instance ) {
        return fw_get_options_values_from_input(
            $this->options,
            FW_Request::POST(fw_html_attr_name_to_array_multi_key($this->get_field_name($this->prefix)), array())
        );
    }

    function form( $values ) {

        $prefix = $this->get_field_id($this->prefix);
        $id = 'fw-widget-options-'. $prefix;

        echo '<div class="fw-force-xs fw-theme-admin-widget-wrap" id="'. esc_attr($id) .'">';
        echo fw()->backend->render_options($this->options, $values, array(
            'id_prefix' => $prefix .'-',
            'name_prefix' => $this->get_field_name($this->prefix),
        ));
        echo '</div>';
        $this->print_widget_javascript($id);

        return $values;
    }

    private function print_widget_javascript($id) {
        ?><script type="text/javascript">
            jQuery(function($) {
                var selector = '#<?php echo esc_js($id) ?>', timeoutId;

                $(selector).on('remove', function(){ // ReInit options on html replace (on widget Save)
                    clearTimeout(timeoutId);
                    timeoutId = setTimeout(function(){ // wait a few milliseconds for html replace to finish
                        fwEvents.trigger('fw:options:init', { $elements: $(selector) });
                    }, 100);
                });
            });
        </script><?php
    }

}

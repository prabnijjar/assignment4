<?php
/**
 * Cake Shop Bakery Theme Customizer
 *
 * @link: https://developer.wordpress.org/themes/customize-api/customizer-objects/
 *
 * @package Cake Shop Bakery
 */

if ( ! defined( 'CAKE_SHOP_BAKERY_URL' ) ) {
    define( 'CAKE_SHOP_BAKERY_URL', esc_url( 'https://www.themagnifico.net/themes/cake-shop-wordpress-theme/','cake-shop-bakery' ));
}

if ( ! defined( 'CAKE_SHOP_BAKERY_TEXT' ) ) {
    define( 'CAKE_SHOP_BAKERY_TEXT', __( 'Cake Shop Pro','cake-shop-bakery' ));
}

use WPTRT\Customize\Section\Cake_Shop_Bakery_Button;

add_action( 'customize_register', function( $manager ) {

    $manager->register_section_type( Cake_Shop_Bakery_Button::class );

    $manager->add_section(
        new Cake_Shop_Bakery_Button( $manager, 'cake_shop_bakery_pro', [
            'title'       => esc_html( CAKE_SHOP_BAKERY_TEXT, 'cake-shop-bakery' ),
            'priority'    => 0,
            'button_text' => __( 'GET PREMIUM', 'cake-shop-bakery' ),
            'button_url'  => esc_url( CAKE_SHOP_BAKERY_URL )
        ] )
    );

} );

if ( ! defined( 'CAKE_SHOP_BAKERY_LINK' ) ) {
    define( 'CAKE_SHOP_BAKERY_LINK', esc_url( 'https://www.themagnifico.net/themes/cake-shop-wordpress-theme/','cake-shop-bakery' ));
}

if ( ! defined( 'CAKE_SHOP_BAKERY_BUY_TEXT' ) ) {
    define( 'CAKE_SHOP_BAKERY_BUY_TEXT', __( 'Buy Cake Shop Pro','cake-shop-bakery' ));
}

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

    $cake_shop_bakery_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script(
        'cake-shop-bakery-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
        [ 'customize-controls' ],
        $cake_shop_bakery_version,
        true
    );

    wp_enqueue_style(
        'cake-shop-bakery-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
        [ 'customize-controls' ],
        $cake_shop_bakery_version
    );

} );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cake_shop_bakery_customize_register($wp_customize){

     // Pro Version
    class Cake_Shop_Bakery_Customize_Pro_Version extends WP_Customize_Control {
        public $type = 'pro_options';

        public function render_content() {
            echo '<span>For More <strong>'. esc_html( $this->label ) .'</strong>?</span>';
            echo '<a href="'. esc_url($this->description) .'" target="_blank">';
                echo '<span class="dashicons dashicons-info"></span>';
                echo '<strong> '. esc_html( CAKE_SHOP_BAKERY_BUY_TEXT,'cake-shop-bakery' ) .'<strong></a>';
            echo '</a>';
        }
    }

    // Custom Controls
    function Cake_Shop_Bakery_sanitize_custom_control( $input ) {
        return $input;
    }


    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';

    //Logo
    $wp_customize->add_setting('cake_shop_bakery_logo_max_height',array(
        'default'   => '24',
        'sanitize_callback' => 'cake_shop_bakery_sanitize_number_absint'
    ));
    $wp_customize->add_control('cake_shop_bakery_logo_max_height',array(
        'label' => esc_html__('Logo Width','cake-shop-bakery'),
        'section'   => 'title_tagline',
        'type'      => 'number'
    ));

    $wp_customize->add_setting('cake_shop_bakery_logo_title', array(
        'default' => true,
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'cake_shop_bakery_logo_title',array(
        'label'          => __( 'Enable Disable Title', 'cake-shop-bakery' ),
        'section'        => 'title_tagline',
        'settings'       => 'cake_shop_bakery_logo_title',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('cake_shop_bakery_theme_description', array(
        'default' => false,
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'cake_shop_bakery_theme_description',array(
        'label'          => __( 'Enable Disable Tagline', 'cake-shop-bakery' ),
        'section'        => 'title_tagline',
        'settings'       => 'cake_shop_bakery_theme_description',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('cake_shop_bakery_logo_title_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cake_shop_bakery_logo_title_color', array(
        'label'    => __('Site Title Color', 'cake-shop-bakery'),
        'section'  => 'title_tagline'
    )));

    $wp_customize->add_setting('cake_shop_bakery_logo_tagline_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cake_shop_bakery_logo_tagline_color', array(
        'label'    => __('Site Tagline Color', 'cake-shop-bakery'),
        'section'  => 'title_tagline'
    )));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_logo', array(
        'sanitize_callback' => 'Cake_Shop_Bakery_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Cake_Shop_Bakery_Customize_Pro_Version ( $wp_customize,'pro_version_logo', array(
        'section'     => 'title_tagline',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'cake-shop-bakery' ),
        'description' => esc_url( CAKE_SHOP_BAKERY_LINK ),
        'priority'    => 100
    )));

    // General Settings
     $wp_customize->add_section('cake_shop_bakery_general_settings',array(
        'title' => esc_html__('General Settings','cake-shop-bakery'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('cake_shop_bakery_preloader_hide', array(
        'default' => '0',
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'cake_shop_bakery_preloader_hide',array(
        'label'          => __( 'Show Theme Preloader', 'cake-shop-bakery' ),
        'section'        => 'cake_shop_bakery_general_settings',
        'settings'       => 'cake_shop_bakery_preloader_hide',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting( 'cake_shop_bakery_preloader_bg_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cake_shop_bakery_preloader_bg_color', array(
        'label' => esc_html__('Preloader Background Color','cake-shop-bakery'),
        'section' => 'cake_shop_bakery_general_settings',
        'settings' => 'cake_shop_bakery_preloader_bg_color'
    )));

    $wp_customize->add_setting( 'cake_shop_bakery_preloader_dot_1_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cake_shop_bakery_preloader_dot_1_color', array(
        'label' => esc_html__('Preloader First Dot Color','cake-shop-bakery'),
        'section' => 'cake_shop_bakery_general_settings',
        'settings' => 'cake_shop_bakery_preloader_dot_1_color'
    )));

    $wp_customize->add_setting( 'cake_shop_bakery_preloader_dot_2_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cake_shop_bakery_preloader_dot_2_color', array(
        'label' => esc_html__('Preloader Second Dot Color','cake-shop-bakery'),
        'section' => 'cake_shop_bakery_general_settings',
        'settings' => 'cake_shop_bakery_preloader_dot_2_color'
    )));

    $wp_customize->add_setting('cake_shop_bakery_scroll_hide', array(
      'default' => '',
      'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'cake_shop_bakery_scroll_hide',array(
        'label'          => __( 'Show Theme Scroll To Top', 'cake-shop-bakery' ),
        'section'        => 'cake_shop_bakery_general_settings',
        'settings'       => 'cake_shop_bakery_scroll_hide',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('cake_shop_bakery_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'cake_shop_bakery_sanitize_choices'
    ));
    $wp_customize->add_control('cake_shop_bakery_scroll_top_position',array(
        'label'       => esc_html__( 'Scroll To Top Positions','cake-shop-bakery' ),
        'type' => 'radio',
        'section' => 'cake_shop_bakery_general_settings',
        'choices' => array(
            'Right' => __('Right','cake-shop-bakery'),
            'Left' => __('Left','cake-shop-bakery'),
            'Center' => __('Center','cake-shop-bakery')
        ),
    ) );

    $wp_customize->add_setting( 'cake_shop_bakery_scroll_to_top_border_radius', array(
        'default'              => '',
        'transport'            => 'refresh',
        'sanitize_callback'    => 'cake_shop_bakery_sanitize_number_range'
    ) );
    $wp_customize->add_control( 'cake_shop_bakery_scroll_to_top_border_radius', array(
        'label'       => esc_html__( 'Scroll To Top Border Radius','cake-shop-bakery' ),
        'section'     => 'cake_shop_bakery_general_settings',
        'type'        => 'range',
        'input_attrs' => array(
            'step'             => 1,
            'min'              => 1,
            'max'              => 50,
        ),
    ) );

    $wp_customize->add_setting('cake_shop_bakery_sticky_header', array(
        'default' => false,
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'cake_shop_bakery_sticky_header',array(
        'label'          => __( 'Show Sticky Header', 'cake-shop-bakery' ),
        'section'        => 'cake_shop_bakery_general_settings',
        'settings'       => 'cake_shop_bakery_sticky_header',
        'type'           => 'checkbox',
    )));

    // Product Columns
    $wp_customize->add_setting( 'cake_shop_bakery_products_per_row' , array(
        'default'           => '3',
        'transport'         => 'refresh',
        'sanitize_callback' => 'cake_shop_bakery_sanitize_select',
    ) );

    $wp_customize->add_control('cake_shop_bakery_products_per_row', array(
        'label' => __( 'Product per row', 'cake-shop-bakery' ),
        'section'  => 'cake_shop_bakery_general_settings',
        'type'     => 'select',
        'choices'  => array(
            '2' => '2',
            '3' => '3',
            '4' => '4',
        ),
    ) );

    $wp_customize->add_setting('cake_shop_bakery_product_per_page',array(
        'default'   => '9',
        'sanitize_callback' => 'cake_shop_bakery_sanitize_float'
    ));
    $wp_customize->add_control('cake_shop_bakery_product_per_page',array(
        'label' => __('Product per page','cake-shop-bakery'),
        'section'   => 'cake_shop_bakery_general_settings',
        'type'      => 'number'
    ));

    //Woocommerce shop page Sidebar
    $wp_customize->add_setting('cake_shop_bakery_woocommerce_shop_page_sidebar', array(
        'default' => true,
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'cake_shop_bakery_woocommerce_shop_page_sidebar',array(
        'label'          => __( 'Hide Shop Page Sidebar', 'cake-shop-bakery' ),
        'section'        => 'cake_shop_bakery_general_settings',
        'settings'       => 'cake_shop_bakery_woocommerce_shop_page_sidebar',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('cake_shop_bakery_shop_page_sidebar_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'cake_shop_bakery_sanitize_choices'
    ));
    $wp_customize->add_control('cake_shop_bakery_shop_page_sidebar_layout',array(
        'type' => 'select',
        'label' => __('Woocommerce Shop Page Sidebar','cake-shop-bakery'),
        'section' => 'cake_shop_bakery_general_settings',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','cake-shop-bakery'),
            'Right Sidebar' => __('Right Sidebar','cake-shop-bakery'),
        ),
    ) );

    //Woocommerce Single Product page Sidebar
    $wp_customize->add_setting('cake_shop_bakery_woocommerce_single_product_page_sidebar', array(
        'default' => true,
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'cake_shop_bakery_woocommerce_single_product_page_sidebar',array(
        'label'          => __( 'Hide Single Product Page Sidebar', 'cake-shop-bakery' ),
        'section'        => 'cake_shop_bakery_general_settings',
        'settings'       => 'cake_shop_bakery_woocommerce_single_product_page_sidebar',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('cake_shop_bakery_single_product_sidebar_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'cake_shop_bakery_sanitize_choices'
    ));
    $wp_customize->add_control('cake_shop_bakery_single_product_sidebar_layout',array(
        'type' => 'select',
        'label' => __('Woocommerce Single Product Page Sidebar','cake-shop-bakery'),
        'section' => 'cake_shop_bakery_general_settings',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','cake-shop-bakery'),
            'Right Sidebar' => __('Right Sidebar','cake-shop-bakery'),
        ),
    ) );

    $wp_customize->add_setting('cake_shop_bakery_woocommerce_product_sale',array(
        'default' => 'Left',
        'sanitize_callback' => 'cake_shop_bakery_sanitize_choices'
    ));
    $wp_customize->add_control('cake_shop_bakery_woocommerce_product_sale',array(
        'label'       => esc_html__( 'Woocommerce Product Sale Positions','cake-shop-bakery' ),
        'type' => 'radio',
        'section' => 'cake_shop_bakery_general_settings',
        'choices' => array(
            'Right' => __('Right','cake-shop-bakery'),
            'Left' => __('Left','cake-shop-bakery'),
            'Center' => __('Center','cake-shop-bakery')
        ),
    ) );

     $wp_customize->add_setting( 'cake_shop_bakery_woo_product_sale_border_radius', array(
        'default'              => '',
        'transport'            => 'refresh',
        'sanitize_callback'    => 'cake_shop_bakery_sanitize_number_range'
    ) );
    $wp_customize->add_control( 'cake_shop_bakery_woo_product_sale_border_radius', array(
        'label'       => esc_html__( 'Woocommerce Product Sale Border Radius','cake-shop-bakery' ),
        'section'     => 'cake_shop_bakery_general_settings',
        'type'        => 'range',
        'input_attrs' => array(
            'step'             => 1,
            'min'              => 1,
            'max'              => 50,
        ),
    ) );

    //Products border radius
    $wp_customize->add_setting( 'cake_shop_bakery_woo_product_border_radius', array(
        'default'              => '0',
        'transport'            => 'refresh',
        'sanitize_callback'    => 'cake_shop_bakery_sanitize_number_range'
    ) );
    $wp_customize->add_control( 'cake_shop_bakery_woo_product_border_radius', array(
        'label'       => esc_html__( 'Product Border Radius','cake-shop-bakery' ),
        'section'     => 'cake_shop_bakery_general_settings',
        'type'        => 'range',
        'input_attrs' => array(
            'step'             => 1,
            'min'              => 1,
            'max'              => 170,
        ),
    ) );

    // Pro Version
    $wp_customize->add_setting( 'pro_version_general_setting_pro_option', array(
        'sanitize_callback' => 'Cake_Shop_Bakery_sanitize_custom_control'
    ) );
    $wp_customize->add_control( new Cake_Shop_Bakery_Customize_Pro_Version ( $wp_customize,'pro_version_general_setting_pro_option', array(
        'section'     => 'cake_shop_bakery_general_settings',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'cake-shop-bakery' ),
        'description' => esc_url( CAKE_SHOP_BAKERY_LINK ),
        'priority'    => 100
    )));

    //Slider
    $wp_customize->add_section('cake_shop_bakery_top_slider',array(
        'title' => esc_html__('Slider Option','cake-shop-bakery')
    ));

    $wp_customize->add_setting('cake_shop_bakery_slider_setting', array(
        'default' => 0,
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'cake_shop_bakery_slider_setting',array(
        'label'          => __( 'Enable Disable Slider', 'cake-shop-bakery' ),
        'section'        => 'cake_shop_bakery_top_slider',
        'settings'       => 'cake_shop_bakery_slider_setting',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('cake_shop_bakery_slider_loop', array(
        'default' => 1,
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'cake_shop_bakery_slider_loop',array(
        'label'          => __( 'Enable Disable Slider Loop', 'cake-shop-bakery' ),
        'section'        => 'cake_shop_bakery_top_slider',
        'settings'       => 'cake_shop_bakery_slider_loop',
        'type'           => 'checkbox',
    )));

    for ( $cake_shop_bakery_count = 1; $cake_shop_bakery_count <= 3; $cake_shop_bakery_count++ ) {
        $wp_customize->add_setting( 'cake_shop_bakery_top_slider_page' . $cake_shop_bakery_count, array(
            'default'           => '',
            'sanitize_callback' => 'cake_shop_bakery_sanitize_dropdown_pages'
        ) );
        $wp_customize->add_control( 'cake_shop_bakery_top_slider_page' . $cake_shop_bakery_count, array(
            'label'    => __( 'Select Slide Page', 'cake-shop-bakery' ),
            'section'  => 'cake_shop_bakery_top_slider',
            'type'     => 'dropdown-pages'
        ) );

    }

    //Slider Image Opacity
    $wp_customize->add_setting('cake_shop_bakery_slider_opacity_color',array(
      'default' => '',
      'sanitize_callback' => 'cake_shop_bakery_sanitize_choices'
    ));

    $wp_customize->add_control( 'cake_shop_bakery_slider_opacity_color', array(
    'label'       => esc_html__( 'Slider Image Opacity','cake-shop-bakery' ),
    'section'     => 'cake_shop_bakery_top_slider',
    'type'        => 'select',
    'choices' => array(
      '0' =>  esc_attr('0','cake-shop-bakery'),
      '0.1' =>  esc_attr('0.1','cake-shop-bakery'),
      '0.2' =>  esc_attr('0.2','cake-shop-bakery'),
      '0.3' =>  esc_attr('0.3','cake-shop-bakery'),
      '0.4' =>  esc_attr('0.4','cake-shop-bakery'),
      '0.5' =>  esc_attr('0.5','cake-shop-bakery'),
      '0.6' =>  esc_attr('0.6','cake-shop-bakery'),
      '0.7' =>  esc_attr('0.7','cake-shop-bakery'),
      '0.8' =>  esc_attr('0.8','cake-shop-bakery'),
      '0.9' =>  esc_attr('0.9','cake-shop-bakery')
    ),
    ));

    //Slider height
    $wp_customize->add_setting('cake_shop_bakery_slider_img_height',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('cake_shop_bakery_slider_img_height',array(
        'label' => __('Slider Height','cake-shop-bakery'),
        'description'   => __('Add the slider height in px(eg. 500px).','cake-shop-bakery'),
        'input_attrs' => array(
            'placeholder' => __( '500px', 'cake-shop-bakery' ),
        ),
        'section'=> 'cake_shop_bakery_top_slider',
        'type'=> 'text'
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_slider_setting_pro_option', array(
        'sanitize_callback' => 'Cake_Shop_Bakery_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Cake_Shop_Bakery_Customize_Pro_Version ( $wp_customize,'pro_version_slider_setting_pro_option', array(
        'section'     => 'cake_shop_bakery_top_slider',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'cake-shop-bakery' ),
        'description' => esc_url( CAKE_SHOP_BAKERY_LINK ),
        'priority'    => 100
    )));

    //Product
    $wp_customize->add_section('cake_shop_bakery_new_product',array(
        'title' => esc_html__('Featured Product','cake-shop-bakery'),
        'description' => esc_html__('Here you have to select product category which will display perticular new featured product in the home page.','cake-shop-bakery')
    ));

    $wp_customize->add_setting('cake_shop_bakery_new_product_setting', array(
        'default' => 0,
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'cake_shop_bakery_new_product_setting',array(
        'label'          => __( 'Enable Disable Product', 'cake-shop-bakery' ),
        'section'        => 'cake_shop_bakery_new_product',
        'settings'       => 'cake_shop_bakery_new_product_setting',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('cake_shop_bakery_new_product_title',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('cake_shop_bakery_new_product_title',array(
        'label' => esc_html__('Title','cake-shop-bakery'),
        'section' => 'cake_shop_bakery_new_product',
        'setting' => 'cake_shop_bakery_new_product_title',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('cake_shop_bakery_new_product_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('cake_shop_bakery_new_product_text',array(
        'label' => esc_html__('Text','cake-shop-bakery'),
        'section' => 'cake_shop_bakery_new_product',
        'setting' => 'cake_shop_bakery_new_product_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('cake_shop_bakery_new_product_number',array(
        'default' => '',
        'sanitize_callback' => 'absint'
    ));
    $wp_customize->add_control('cake_shop_bakery_new_product_number',array(
        'label' => esc_html__('No of Product','cake-shop-bakery'),
        'section' => 'cake_shop_bakery_new_product',
        'setting' => 'cake_shop_bakery_new_product_number',
        'type'  => 'number'
    ));

    $cake_shop_bakery_args = array(
       'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );
    $categories = get_categories( $cake_shop_bakery_args );
    $cats = array();
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cats[$category->slug] = $category->name;
    }
    $wp_customize->add_setting('cake_shop_bakery_new_product_category',array(
        'sanitize_callback' => 'cake_shop_bakery_sanitize_select',
    ));
    $wp_customize->add_control('cake_shop_bakery_new_product_category',array(
        'type'    => 'select',
        'choices' => $cats,
        'label' => __('Select Product Category','cake-shop-bakery'),
        'section' => 'cake_shop_bakery_new_product',
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_new_product_setting_pro_option', array(
        'sanitize_callback' => 'Cake_Shop_Bakery_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Cake_Shop_Bakery_Customize_Pro_Version ( $wp_customize,'pro_version_new_product_setting_pro_option', array(
        'section'     => 'cake_shop_bakery_new_product',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'cake-shop-bakery' ),
        'description' => esc_url( CAKE_SHOP_BAKERY_LINK ),
        'priority'    => 100
    )));

    // Footer
    $wp_customize->add_section('cake_shop_bakery_site_footer_section', array(
        'title' => esc_html__('Footer', 'cake-shop-bakery'),
    ));

    $wp_customize->add_setting('cake_shop_bakery_show_hide_footer',array(
        'default' => true,
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('cake_shop_bakery_show_hide_footer',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide Footer','cake-shop-bakery'),
        'section' => 'cake_shop_bakery_site_footer_section',
        'priority' => 1,
    ));

    $wp_customize->add_setting('cake_shop_bakery_footer_bg_image',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'cake_shop_bakery_footer_bg_image',array(
        'label' => __('Footer Background Image','cake-shop-bakery'),
        'section' => 'cake_shop_bakery_site_footer_section',
        'priority' => 1,
    )));

    $wp_customize->add_setting('cake_shop_bakery_show_hide_copyright',array(
        'default' => true,
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('cake_shop_bakery_show_hide_copyright',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide Copyright','cake-shop-bakery'),
        'section' => 'cake_shop_bakery_site_footer_section',
    ));

    $wp_customize->add_setting('cake_shop_bakery_footer_text_setting', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('cake_shop_bakery_footer_text_setting', array(
        'label' => __('Replace the footer text', 'cake-shop-bakery'),
        'section' => 'cake_shop_bakery_site_footer_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('cake_shop_bakery_copyright_background_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cake_shop_bakery_copyright_background_color', array(
        'label'    => __('Copyright Background Color', 'cake-shop-bakery'),
        'section'  => 'cake_shop_bakery_site_footer_section',
    )));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_footer_pro_option', array(
        'sanitize_callback' => 'Cake_Shop_Bakery_sanitize_custom_control'
    ) );
    $wp_customize->add_control( new Cake_Shop_Bakery_Customize_Pro_Version ( $wp_customize,'pro_version_footer_pro_option', array(
        'section'     => 'cake_shop_bakery_site_footer_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'cake-shop-bakery' ),
        'description' => esc_url( CAKE_SHOP_BAKERY_LINK ),
        'priority'    => 100
    )));

    // Post Settings
     $wp_customize->add_section('cake_shop_bakery_post_settings',array(
        'title' => esc_html__('Post Settings','cake-shop-bakery'),
        'priority'   =>40,
    ));

    $wp_customize->add_setting('cake_shop_bakery_post_page_title',array(
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('cake_shop_bakery_post_page_title',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Title', 'cake-shop-bakery'),
        'section'     => 'cake_shop_bakery_post_settings',
        'description' => esc_html__('Check this box to enable title on post page.', 'cake-shop-bakery'),
    ));

    $wp_customize->add_setting('cake_shop_bakery_post_page_meta',array(
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('cake_shop_bakery_post_page_meta',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Meta', 'cake-shop-bakery'),
        'section'     => 'cake_shop_bakery_post_settings',
        'description' => esc_html__('Check this box to enable meta on post page.', 'cake-shop-bakery'),
    ));

    $wp_customize->add_setting('cake_shop_bakery_post_page_thumb',array(
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('cake_shop_bakery_post_page_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Thumbnail', 'cake-shop-bakery'),
        'section'     => 'cake_shop_bakery_post_settings',
        'description' => esc_html__('Check this box to enable thumbnail on post page.', 'cake-shop-bakery'),
    ));

    $wp_customize->add_setting('cake_shop_bakery_post_page_btn',array(
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('cake_shop_bakery_post_page_btn',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Button', 'cake-shop-bakery'),
        'section'     => 'cake_shop_bakery_post_settings',
        'description' => esc_html__('Check this box to enable button on post page.', 'cake-shop-bakery'),
    ));

    $wp_customize->add_setting('cake_shop_bakery_single_post_thumb',array(
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('cake_shop_bakery_single_post_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Thumbnail', 'cake-shop-bakery'),
        'section'     => 'cake_shop_bakery_post_settings',
        'description' => esc_html__('Check this box to enable post thumbnail on single post.', 'cake-shop-bakery'),
    ));

    $wp_customize->add_setting('cake_shop_bakery_single_post_meta',array(
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('cake_shop_bakery_single_post_meta',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Meta', 'cake-shop-bakery'),
        'section'     => 'cake_shop_bakery_post_settings',
        'description' => esc_html__('Check this box to enable single post meta such as post date, author, category, comment etc.', 'cake-shop-bakery'),
    ));

    $wp_customize->add_setting('cake_shop_bakery_single_post_title',array(
            'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox',
            'default'           => 1,
    ));
    $wp_customize->add_control('cake_shop_bakery_single_post_title',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Title', 'cake-shop-bakery'),
        'section'     => 'cake_shop_bakery_post_settings',
        'description' => esc_html__('Check this box to enable title on single post.', 'cake-shop-bakery'),
    ));

    $wp_customize->add_setting('cake_shop_bakery_single_post_navigation_show_hide',array(
        'default' => true,
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('cake_shop_bakery_single_post_navigation_show_hide',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide Post Navigation','cake-shop-bakery'),
        'section' => 'cake_shop_bakery_post_settings',
    ));

    $wp_customize->add_setting('cake_shop_bakery_single_post_comment_title',array(
        'default'=> 'Leave a Reply',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('cake_shop_bakery_single_post_comment_title',array(
        'label' => __('Add Comment Title','cake-shop-bakery'),
        'input_attrs' => array(
        'placeholder' => __( 'Leave a Reply', 'cake-shop-bakery' ),
        ),
        'section'=> 'cake_shop_bakery_post_settings',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('cake_shop_bakery_single_post_comment_btn_text',array(
        'default'=> 'Post Comment',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('cake_shop_bakery_single_post_comment_btn_text',array(
        'label' => __('Add Comment Button Text','cake-shop-bakery'),
        'input_attrs' => array(
            'placeholder' => __( 'Post Comment', 'cake-shop-bakery' ),
        ),
        'section'=> 'cake_shop_bakery_post_settings',
        'type'=> 'text'
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_post_setting', array(
        'sanitize_callback' => 'Cake_Shop_Bakery_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Cake_Shop_Bakery_Customize_Pro_Version ( $wp_customize,'pro_version_post_setting', array(
        'section'     => 'cake_shop_bakery_post_settings',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'cake-shop-bakery' ),
        'description' => esc_url( CAKE_SHOP_BAKERY_LINK ),
        'priority'    => 100
    )));

    // Page Settings
    $wp_customize->add_section('cake_shop_bakery_page_settings',array(
        'title' => esc_html__('Page Settings','cake-shop-bakery'),
        'priority'   =>50,
    ));

    $wp_customize->add_setting('cake_shop_bakery_single_page_title',array(
            'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox',
            'default'           => 1,
    ));
    $wp_customize->add_control('cake_shop_bakery_single_page_title',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Page Title', 'cake-shop-bakery'),
        'section'     => 'cake_shop_bakery_page_settings',
        'description' => esc_html__('Check this box to enable title on single page.', 'cake-shop-bakery'),
    ));

    $wp_customize->add_setting('cake_shop_bakery_single_page_thumb',array(
        'sanitize_callback' => 'cake_shop_bakery_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('cake_shop_bakery_single_page_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Page Thumbnail', 'cake-shop-bakery'),
        'section'     => 'cake_shop_bakery_page_settings',
        'description' => esc_html__('Check this box to enable page thumbnail on single page.', 'cake-shop-bakery'),
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_single_page_setting', array(
        'sanitize_callback' => 'Cake_Shop_Bakery_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Cake_Shop_Bakery_Customize_Pro_Version ( $wp_customize,'pro_version_single_page_setting', array(
        'section'     => 'cake_shop_bakery_page_settings',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'cake-shop-bakery' ),
        'description' => esc_url( CAKE_SHOP_BAKERY_LINK ),
        'priority'    => 100
    )));
}
add_action('customize_register', 'cake_shop_bakery_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function cake_shop_bakery_customize_partial_blogname(){
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function cake_shop_bakery_customize_partial_blogdescription(){
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cake_shop_bakery_customize_preview_js(){
    wp_enqueue_script('cake-shop-bakery-customizer', esc_url(get_template_directory_uri()) . '/assets/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'cake_shop_bakery_customize_preview_js');

/*
** Load dynamic logic for the customizer controls area.
*/
function cake_shop_bakery_panels_js() {
    wp_enqueue_style( 'cake-shop-bakery-customizer-layout-css', get_theme_file_uri( '/assets/css/customizer-layout.css' ) );
    wp_enqueue_script( 'cake-shop-bakery-customize-layout', get_theme_file_uri( '/assets/js/customize-layout.js' ), array(), '1.2', true );
}
add_action( 'customize_controls_enqueue_scripts', 'cake_shop_bakery_panels_js' );

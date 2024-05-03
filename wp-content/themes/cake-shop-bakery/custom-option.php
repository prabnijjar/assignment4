<?php

    $cake_shop_bakery_theme_css= "";

    /*--------------------------- Scroll To Top Positions -------------------*/

    $cake_shop_bakery_scroll_position = get_theme_mod( 'cake_shop_bakery_scroll_top_position','Right');
    if($cake_shop_bakery_scroll_position == 'Right'){
        $cake_shop_bakery_theme_css .='#button{';
            $cake_shop_bakery_theme_css .='right: 20px;';
        $cake_shop_bakery_theme_css .='}';
    }else if($cake_shop_bakery_scroll_position == 'Left'){
        $cake_shop_bakery_theme_css .='#button{';
            $cake_shop_bakery_theme_css .='left: 20px;';
        $cake_shop_bakery_theme_css .='}';
    }else if($cake_shop_bakery_scroll_position == 'Center'){
        $cake_shop_bakery_theme_css .='#button{';
            $cake_shop_bakery_theme_css .='right: 50%;left: 50%;';
        $cake_shop_bakery_theme_css .='}';
    }

    /*--------------------------- Scroll To Top Border Radius -------------------*/

    $cake_shop_bakery_scroll_to_top_border_radius = get_theme_mod('cake_shop_bakery_scroll_to_top_border_radius');
    if($cake_shop_bakery_scroll_to_top_border_radius != false){
        $cake_shop_bakery_theme_css .='#colophon a#button{';
            $cake_shop_bakery_theme_css .='border-radius: '.esc_attr($cake_shop_bakery_scroll_to_top_border_radius).'px;';
        $cake_shop_bakery_theme_css .='}';
    }

    /*--------------------------- Slider Image Opacity -------------------*/

    $cake_shop_bakery_slider_img_opacity = get_theme_mod( 'cake_shop_bakery_slider_opacity_color','');
    if($cake_shop_bakery_slider_img_opacity == '0'){
        $cake_shop_bakery_theme_css .='.slider-box img{';
            $cake_shop_bakery_theme_css .='opacity:0';
        $cake_shop_bakery_theme_css .='}';
        }else if($cake_shop_bakery_slider_img_opacity == '0.1'){
        $cake_shop_bakery_theme_css .='.slider-box img{';
            $cake_shop_bakery_theme_css .='opacity:0.1';
        $cake_shop_bakery_theme_css .='}';
        }else if($cake_shop_bakery_slider_img_opacity == '0.2'){
        $cake_shop_bakery_theme_css .='.slider-box img{';
            $cake_shop_bakery_theme_css .='opacity:0.2';
        $cake_shop_bakery_theme_css .='}';
        }else if($cake_shop_bakery_slider_img_opacity == '0.3'){
        $cake_shop_bakery_theme_css .='.slider-box img{';
            $cake_shop_bakery_theme_css .='opacity:0.3';
        $cake_shop_bakery_theme_css .='}';
        }else if($cake_shop_bakery_slider_img_opacity == '0.4'){
        $cake_shop_bakery_theme_css .='.slider-box img{';
            $cake_shop_bakery_theme_css .='opacity:0.4';
        $cake_shop_bakery_theme_css .='}';
        }else if($cake_shop_bakery_slider_img_opacity == '0.5'){
        $cake_shop_bakery_theme_css .='.slider-box img{';
            $cake_shop_bakery_theme_css .='opacity:0.5';
        $cake_shop_bakery_theme_css .='}';
        }else if($cake_shop_bakery_slider_img_opacity == '0.6'){
        $cake_shop_bakery_theme_css .='.slider-box img{';
            $cake_shop_bakery_theme_css .='opacity:0.6';
        $cake_shop_bakery_theme_css .='}';
        }else if($cake_shop_bakery_slider_img_opacity == '0.7'){
        $cake_shop_bakery_theme_css .='.slider-box img{';
            $cake_shop_bakery_theme_css .='opacity:0.7';
        $cake_shop_bakery_theme_css .='}';
        }else if($cake_shop_bakery_slider_img_opacity == '0.8'){
        $cake_shop_bakery_theme_css .='.slider-box img{';
            $cake_shop_bakery_theme_css .='opacity:0.8';
        $cake_shop_bakery_theme_css .='}';
        }else if($cake_shop_bakery_slider_img_opacity == '0.9'){
        $cake_shop_bakery_theme_css .='.slider-box img{';
            $cake_shop_bakery_theme_css .='opacity:0.9';
        $cake_shop_bakery_theme_css .='}';
        }

    /*---------------------------Slider Height ------------*/

    $cake_shop_bakery_slider_img_height = get_theme_mod('cake_shop_bakery_slider_img_height');
    if($cake_shop_bakery_slider_img_height != false){
        $cake_shop_bakery_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $cake_shop_bakery_theme_css .='height: '.esc_attr($cake_shop_bakery_slider_img_height).';';
        $cake_shop_bakery_theme_css .='}';
    }

    /*---------------- Single post Settings ------------------*/

    $cake_shop_bakery_single_post_navigation_show_hide = get_theme_mod('cake_shop_bakery_single_post_navigation_show_hide',true);
    if($cake_shop_bakery_single_post_navigation_show_hide != true){
        $cake_shop_bakery_theme_css .='.nav-links{';
            $cake_shop_bakery_theme_css .='display: none;';
        $cake_shop_bakery_theme_css .='}';
    }

    /*--------------------------- Woocommerce Product Sale Positions -------------------*/

    $cake_shop_bakery_product_sale = get_theme_mod( 'cake_shop_bakery_woocommerce_product_sale','Right');
    if($cake_shop_bakery_product_sale == 'Right'){
        $cake_shop_bakery_theme_css .='.woocommerce ul.products li.product .onsale{';
            $cake_shop_bakery_theme_css .='left: auto; right: 15px;';
        $cake_shop_bakery_theme_css .='}';
    }else if($cake_shop_bakery_product_sale == 'Left'){
        $cake_shop_bakery_theme_css .='.woocommerce ul.products li.product .onsale{';
            $cake_shop_bakery_theme_css .='left: 15px; right: auto;';
        $cake_shop_bakery_theme_css .='}';
    }else if($cake_shop_bakery_product_sale == 'Center'){
        $cake_shop_bakery_theme_css .='.woocommerce ul.products li.product .onsale{';
            $cake_shop_bakery_theme_css .='right: 50%;left: 50%;';
        $cake_shop_bakery_theme_css .='}';
    }

    /*--------------------------- Woocommerce Product Sale Border Radius -------------------*/

    $cake_shop_bakery_woo_product_sale_border_radius = get_theme_mod('cake_shop_bakery_woo_product_sale_border_radius');
    if($cake_shop_bakery_woo_product_sale_border_radius != false){
        $cake_shop_bakery_theme_css .='.woocommerce ul.products li.product .onsale{';
            $cake_shop_bakery_theme_css .='border-radius: '.esc_attr($cake_shop_bakery_woo_product_sale_border_radius).'px;';
        $cake_shop_bakery_theme_css .='}';
    }

     /*--------------------------- Woocommerce Product Border Radius -------------------*/

    $cake_shop_bakery_woo_product_border_radius = get_theme_mod('cake_shop_bakery_woo_product_border_radius', 0);
    if($cake_shop_bakery_woo_product_border_radius != false){
        $cake_shop_bakery_theme_css .='.woocommerce ul.products li.product a img{';
            $cake_shop_bakery_theme_css .='border-radius: '.esc_attr($cake_shop_bakery_woo_product_border_radius).'px;';
        $cake_shop_bakery_theme_css .='}';
    }

    /*--------------------------- Footer background image -------------------*/

    $cake_shop_bakery_footer_bg_image = get_theme_mod('cake_shop_bakery_footer_bg_image');
    if($cake_shop_bakery_footer_bg_image != false){
        $cake_shop_bakery_theme_css .='#colophon{';
            $cake_shop_bakery_theme_css .='background: url('.esc_attr($cake_shop_bakery_footer_bg_image).')!important;';
        $cake_shop_bakery_theme_css .='}';
    }

    /*--------------------------- Copyright Background Color -------------------*/

    $cake_shop_bakery_copyright_background_color = get_theme_mod('cake_shop_bakery_copyright_background_color');
    if($cake_shop_bakery_copyright_background_color != false){
        $cake_shop_bakery_theme_css .='.footer_info{';
            $cake_shop_bakery_theme_css .='background-color: '.esc_attr($cake_shop_bakery_copyright_background_color).' !important;';
        $cake_shop_bakery_theme_css .='}';
    } 

    /*--------------------------- Site Title And Tagline Color -------------------*/

    $cake_shop_bakery_logo_title_color = get_theme_mod('cake_shop_bakery_logo_title_color');
    if($cake_shop_bakery_logo_title_color != false){
        $cake_shop_bakery_theme_css .='p.site-title a, .navbar-brand a{';
            $cake_shop_bakery_theme_css .='color: '.esc_attr($cake_shop_bakery_logo_title_color).' !important;';
        $cake_shop_bakery_theme_css .='}';
    }

    $cake_shop_bakery_logo_tagline_color = get_theme_mod('cake_shop_bakery_logo_tagline_color');
    if($cake_shop_bakery_logo_tagline_color != false){
        $cake_shop_bakery_theme_css .='.logo p.site-description, .navbar-brand p{';
            $cake_shop_bakery_theme_css .='color: '.esc_attr($cake_shop_bakery_logo_tagline_color).'  !important;';
        $cake_shop_bakery_theme_css .='}';
    }
<?php
/**
 * Category Section
 * 
 * slug: frosty-cake/category-section
 * title: Category Section
 * categories: frosty-cake
 */

return array(
    'title'      =>__( 'Category Section', 'frosty-cake' ),
    'categories' => array( 'frosty-cake' ),
    'content'    => '<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"className":"wp-block-group alignfull","layout":{"type":"constrained","contentSize":"90%"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"#de3654"}}},"color":{"text":"#de3654"}},"className":"category-heading","fontSize":"content-heading","fontFamily":"inter"} -->
<h4 class="wp-block-heading has-text-align-center category-heading has-text-color has-link-color has-inter-font-family has-content-heading-font-size" style="color:#de3654;font-style:normal;font-weight:400"><strong>'. esc_html('Just Picked','frosty-cake') .'</strong></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"#4a144b"}}},"color":{"text":"#4a144b"},"typography":{"letterSpacing":"2px"}},"fontSize":"extra-large","fontFamily":"kaushan-script"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color has-kaushan-script-font-family has-extra-large-font-size" style="color:#4a144b;letter-spacing:2px">'. esc_html('New Arrivals','frosty-cake') .'</h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"className":"arrivals-main"} -->
<div class="wp-block-column arrivals-main"><!-- wp:columns {"style":{"color":{"background":"#fff4f4"},"border":{"radius":"20px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns has-background" style="border-radius:20px;background-color:#fff4f4;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"40%","className":"arrivals-image"} -->
<div class="wp-block-column arrivals-image" style="flex-basis:40%"><!-- wp:image {"id":22,"width":"210px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image1.png" alt="" class="wp-image-22" style="width:210px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50);flex-basis:60%"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"2px"},"color":{"text":"#4a144b"},"elements":{"link":{"color":{"text":"#4a144b"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"fontSize":"upper-heading","fontFamily":"kaushan-script"} -->
<h3 class="wp-block-heading has-text-color has-link-color has-kaushan-script-font-family has-upper-heading-font-size" style="color:#4a144b;margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--20);margin-left:0;letter-spacing:2px">'. esc_html('Fresh Macrons','frosty-cake') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#757575"},"elements":{"link":{"color":{"text":"#757575"}}},"typography":{"lineHeight":"1.8"},"spacing":{"margin":{"right":"0","left":"0","top":"0","bottom":"0"}}},"fontFamily":"inter"} -->
<p class="has-text-color has-link-color has-inter-font-family" style="color:#757575;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;line-height:1.8">'. esc_html('Get latest news in your inbox. Consectetur is the adipiscing elitadipiscing elits eddo.','frosty-cake') .'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"arrivals-btn"} -->
<div class="wp-block-buttons arrivals-btn"><!-- wp:button {"backgroundColor":"accent","textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"30px"}},"className":"shop-btn","fontSize":"small","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size shop-btn has-inter-font-family has-small-font-size"><a class="wp-block-button__link has-background-color has-accent-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:30px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)">'. esc_html('Shop Now','frosty-cake') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"arrivals-main"} -->
<div class="wp-block-column arrivals-main"><!-- wp:columns {"style":{"color":{"background":"#fff5e2"},"border":{"radius":"20px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns has-background" style="border-radius:20px;background-color:#fff5e2;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"40%","className":"arrivals-image"} -->
<div class="wp-block-column arrivals-image" style="flex-basis:40%"><!-- wp:image {"id":30,"width":"210px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image2.png" alt="" class="wp-image-30" style="width:210px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50);flex-basis:60%"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"2px"},"color":{"text":"#4a144b"},"elements":{"link":{"color":{"text":"#4a144b"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"fontSize":"upper-heading","fontFamily":"kaushan-script"} -->
<h3 class="wp-block-heading has-text-color has-link-color has-kaushan-script-font-family has-upper-heading-font-size" style="color:#4a144b;margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--20);margin-left:0;letter-spacing:2px">'. esc_html('Stick Ice-cream','frosty-cake') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#757575"},"elements":{"link":{"color":{"text":"#757575"}}},"typography":{"lineHeight":"1.8"},"spacing":{"margin":{"right":"0","left":"0","top":"0","bottom":"0"}}},"fontFamily":"inter"} -->
<p class="has-text-color has-link-color has-inter-font-family" style="color:#757575;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;line-height:1.8">'. esc_html('Get latest news in your inbox. Consectetur is the adipiscing elitadipiscing elits eddo.','frosty-cake') .'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"arrivals-btn"} -->
<div class="wp-block-buttons arrivals-btn"><!-- wp:button {"textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"30px"},"color":{"background":"#ffbc3c"}},"className":"shop-btn2","fontSize":"small","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size shop-btn2 has-inter-font-family has-small-font-size"><a class="wp-block-button__link has-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:30px;background-color:#ffbc3c;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)">'. esc_html('Shop Now','frosty-cake') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"className":"arrivals-main"} -->
<div class="wp-block-column arrivals-main"><!-- wp:columns {"style":{"color":{"background":"#f1fffe"},"border":{"radius":"20px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns has-background" style="border-radius:20px;background-color:#f1fffe;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"40%","className":"arrivals-image"} -->
<div class="wp-block-column arrivals-image" style="flex-basis:40%"><!-- wp:image {"id":32,"width":"210px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image3.png" alt="" class="wp-image-32" style="width:210px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50);flex-basis:60%"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"2px"},"color":{"text":"#4a144b"},"elements":{"link":{"color":{"text":"#4a144b"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"fontSize":"upper-heading","fontFamily":"kaushan-script"} -->
<h3 class="wp-block-heading has-text-color has-link-color has-kaushan-script-font-family has-upper-heading-font-size" style="color:#4a144b;margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--20);margin-left:0;letter-spacing:2px">'. esc_html('Chocolate Ice-cream','frosty-cake') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#757575"},"elements":{"link":{"color":{"text":"#757575"}}},"typography":{"lineHeight":"1.8"},"spacing":{"margin":{"right":"0","left":"0","top":"0","bottom":"0"}}},"fontFamily":"inter"} -->
<p class="has-text-color has-link-color has-inter-font-family" style="color:#757575;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;line-height:1.8">'. esc_html('Get latest news in your inbox. Consectetur is the adipiscing elitadipiscing elits eddo.','frosty-cake') .'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"arrivals-btn"} -->
<div class="wp-block-buttons arrivals-btn"><!-- wp:button {"textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"30px"},"color":{"background":"#2ac2b9"}},"className":"shop-btn1","fontSize":"small","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size shop-btn1 has-inter-font-family has-small-font-size"><a class="wp-block-button__link has-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:30px;background-color:#2ac2b9;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)">'. esc_html('Shop Now','frosty-cake') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"arrivals-main"} -->
<div class="wp-block-column arrivals-main"><!-- wp:columns {"style":{"color":{"background":"#fdefff"},"border":{"radius":"20px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns has-background" style="border-radius:20px;background-color:#fdefff;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"40%","className":"arrivals-image"} -->
<div class="wp-block-column arrivals-image" style="flex-basis:40%"><!-- wp:image {"id":33,"width":"210px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image4.png" alt="" class="wp-image-33" style="width:210px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50);flex-basis:60%"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"2px"},"color":{"text":"#4a144b"},"elements":{"link":{"color":{"text":"#4a144b"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"fontSize":"upper-heading","fontFamily":"kaushan-script"} -->
<h3 class="wp-block-heading has-text-color has-link-color has-kaushan-script-font-family has-upper-heading-font-size" style="color:#4a144b;margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--20);margin-left:0;letter-spacing:2px">'. esc_html('Ice-cream with berry','frosty-cake') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#757575"},"elements":{"link":{"color":{"text":"#757575"}}},"typography":{"lineHeight":"1.8"},"spacing":{"margin":{"right":"0","left":"0","top":"0","bottom":"0"}}},"fontFamily":"inter"} -->
<p class="has-text-color has-link-color has-inter-font-family" style="color:#757575;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;line-height:1.8">'. esc_html('Get latest news in your inbox. Consectetur is the adipiscing elitadipiscing elits eddo.','frosty-cake') .'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"arrivals-btn"} -->
<div class="wp-block-buttons arrivals-btn"><!-- wp:button {"textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"30px"},"color":{"background":"#ab3fba"}},"className":"shop-btn3","fontSize":"small","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size shop-btn3 has-inter-font-family has-small-font-size"><a class="wp-block-button__link has-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:30px;background-color:#ab3fba;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)">'. esc_html('Shop Now','frosty-cake') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"background","style":{"color":{"background":"#4a144b"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":"30px"}},"fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:30px;background-color:#4a144b">'. esc_html('View More','frosty-cake') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></main>
<!-- /wp:group -->',
);
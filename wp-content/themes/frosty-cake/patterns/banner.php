<?php
/**
 * Banner Section
 * 
 * slug: frosty-cake/banner
 * title: Banner
 * categories: frosty-cake
 */

return array(
    'title'      =>__( 'Banner', 'frosty-cake' ),
    'categories' => array( 'frosty-cake' ),
    'content'    => '<!-- wp:group {"className":"slider-main-box","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group slider-main-box"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/main-image.png","id":15,"dimRatio":0,"customOverlayColor":"#ff8cb2","isUserOverlayColor":true,"minHeight":700,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover is-light" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ff8cb2"></span><img class="wp-block-cover__image-background wp-image-15" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/main-image.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"lineHeight":"1.5"}},"textColor":"accent","fontSize":"normal","fontFamily":"inter"} -->
<p class="has-accent-color has-text-color has-link-color has-inter-font-family has-normal-font-size" style="line-height:1.5"><strong>'. esc_html('10% Off on cup cakes','frosty-cake') .'</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"60px","fontStyle":"normal","fontWeight":"400"},"color":{"text":"#4a144b"},"elements":{"link":{"color":{"text":"#4a144b"}}}},"className":"banner-title","fontFamily":"kaushan-script"} -->
<h2 class="wp-block-heading banner-title has-text-color has-link-color has-kaushan-script-font-family" style="color:#4a144b;font-size:60px;font-style:normal;font-weight:400">'. esc_html('The Perfect Baked','frosty-cake') .'<br>'. esc_html('Cake Everyday!','frosty-cake') .'</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"slider-btn-box"} -->
<div class="wp-block-buttons slider-btn-box"><!-- wp:button {"backgroundColor":"accent","textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":"30px"},"typography":{"letterSpacing":"0px"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"is-style-outline shop-btn","fontSize":"upper-heading","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size is-style-outline shop-btn has-inter-font-family has-upper-heading-font-size" style="letter-spacing:0px"><a class="wp-block-button__link has-background-color has-accent-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:30px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60)">'. esc_html('Shop Now','frosty-cake') .'</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"elements":{"link":{"color":{"text":"#4a144b"}}},"border":{"radius":"30px"},"typography":{"letterSpacing":"0px"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"color":{"text":"#4a144b"}},"className":"is-style-outline slider-2nd-btn","fontSize":"upper-heading","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size is-style-outline slider-2nd-btn has-inter-font-family has-upper-heading-font-size" style="letter-spacing:0px"><a class="wp-block-button__link has-text-color has-link-color wp-element-button" style="border-radius:30px;color:#4a144b;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><strong>'. esc_html('How to Order?','frosty-cake') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:social-links {"iconColor":"accent","iconColorValue":"#DE3654","size":"has-small-icon-size","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|60"}}},"className":"is-style-logos-only social-icon-box"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only social-icon-box" style="margin-top:var(--wp--preset--spacing--60);padding-top:0;padding-bottom:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":41,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner-image.png" alt="" class="wp-image-41"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"opening-main-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group opening-main-box"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"background","className":"opening-box"} -->
<div class="wp-block-column is-vertically-aligned-center opening-box has-background-background-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"id":54,"sizeSlug":"full","linkDestination":"none","align":"center","className":"cake-icon"} -->
<figure class="wp-block-image aligncenter size-full cake-icon"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/cake-icon.png" alt="" class="wp-image-54"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"accent","fontFamily":"kaushan-script"} -->
<h3 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-kaushan-script-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">'. esc_html('Opening Hours&nbsp;','frosty-cake') .'</h3>
<!-- /wp:heading -->

<!-- wp:columns {"className":"opening-margin-remove"} -->
<div class="wp-block-columns opening-margin-remove"><!-- wp:column {"style":{"color":{"background":"#ffe8ec"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"className":"opening-inner-box"} -->
<div class="wp-block-column opening-inner-box has-background" style="background-color:#ffe8ec;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30","left":"0","right":"0"}},"color":{"text":"#4a144b"},"elements":{"link":{"color":{"text":"#4a144b"}}}},"fontFamily":"inter"} -->
<p class="has-text-align-center has-text-color has-link-color has-inter-font-family" style="color:#4a144b;margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--30);margin-left:0"><strong>'. esc_html('Monday - Friday','frosty-cake') .'</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"color":{"text":"#4a144b"},"elements":{"link":{"color":{"text":"#4a144b"}}}},"fontFamily":"inter"} -->
<p class="has-text-align-center has-text-color has-link-color has-inter-font-family" style="color:#4a144b;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><strong>09:00 - 16:00</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20","left":"0","right":"0"}},"color":{"text":"#4a144b"},"elements":{"link":{"color":{"text":"#4a144b"}}}},"fontFamily":"inter"} -->
<p class="has-text-align-center has-text-color has-link-color has-inter-font-family" style="color:#4a144b;margin-top:var(--wp--preset--spacing--30);margin-right:0;margin-bottom:var(--wp--preset--spacing--20);margin-left:0"><strong>'. esc_html('Saturday - Sunday','frosty-cake') .'</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"color":{"text":"#4a144b"},"elements":{"link":{"color":{"text":"#4a144b"}}}},"fontFamily":"inter"} -->
<p class="has-text-align-center has-text-color has-link-color has-inter-font-family" style="color:#4a144b;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><strong>10.00 - 19.00</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"phone-main-box","layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group phone-main-box"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"phone-box"} -->
<div class="wp-block-column is-vertically-aligned-center phone-box"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"30px"}},"backgroundColor":"background","className":"opening-margin-remove"} -->
<div class="wp-block-columns are-vertically-aligned-center opening-margin-remove has-background-background-color has-background" style="border-radius:30px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"color":{"background":"#ffe8ec"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"className":"phone-icon"} -->
<div class="wp-block-column is-vertically-aligned-center phone-icon has-background" style="background-color:#ffe8ec;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30);flex-basis:33.33%"><!-- wp:image {"id":73,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/phone-vector.png" alt="" class="wp-image-73"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#4a144b"},"elements":{"link":{"color":{"text":"#4a144b"}}}},"fontSize":"small","fontFamily":"inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-inter-font-family has-small-font-size" style="color:#4a144b">'. esc_html('For Order','frosty-cake') .'</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"textColor":"accent","fontSize":"small","fontFamily":"kaushan-script"} -->
<p class="has-accent-color has-text-color has-link-color has-kaushan-script-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0">(+00) 123456789</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);
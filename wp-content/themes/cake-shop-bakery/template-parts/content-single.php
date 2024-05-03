<?php
/**
 *  Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cake Shop Bakery
 */

$cake_shop_bakery_single_post_thumb =  get_theme_mod( 'cake_shop_bakery_single_post_thumb', 1 );
$cake_shop_bakery_single_post_meta =  get_theme_mod( 'cake_shop_bakery_single_post_meta', 1 );
$cake_shop_bakery_single_post_title = get_theme_mod( 'cake_shop_bakery_single_post_title', 1 );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ($cake_shop_bakery_single_post_title == 1 ) {?>
        
            <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
        <?php }?>
        <?php if ($cake_shop_bakery_single_post_thumb == 1 ) {?>
            <?php if(has_post_thumbnail()) {?>
                <?php the_post_thumbnail(); ?>
            <?php }?>
        <?php }?>
    </header>
    <?php if ($cake_shop_bakery_single_post_meta == 1 ) {?>
        <div class="meta-info-box my-2">
            <span class="entry-author"><?php esc_html_e('BY','cake-shop-bakery'); ?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
            <span class="ml-2"></i><?php echo esc_html(get_the_date()); ?></span>
        </div>
    <?php }?>
    <div class="entry-content">
        <?php
        the_content(sprintf(
            wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'cake-shop-bakery'),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
            esc_html( get_the_title() )
        ));

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'cake-shop-bakery'),
            'after' => '</div>',
        ));

        the_tags();
        ?>
    </div>
</article>
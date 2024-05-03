<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cake Shop Bakery
 */

$cake_shop_bakery_post_page_title =  get_theme_mod( 'cake_shop_bakery_post_page_title', 1 );
$cake_shop_bakery_post_page_meta =  get_theme_mod( 'cake_shop_bakery_post_page_meta', 1 );
$cake_shop_bakery_post_page_btn = get_theme_mod( 'cake_shop_bakery_post_page_btn', 1 );

?>

  <div class="col-lg-6 col-md-6 col-sm-6">
    <article id="post-<?php the_ID(); ?>" <?php post_class('article-box'); ?>>
      <?php
        if ( ! is_single() ) {
          // If not a single post, highlight the gallery.
          if ( get_post_gallery() ) {
            echo '<div class="entry-gallery">';
              echo ( get_post_gallery() );
            echo '</div>';
          };
        };
      ?>
      <div class="serv-cont">
        <?php if ($cake_shop_bakery_post_page_meta == 1 ) {?>
          <div class="meta-info-box my-2">
            <span class="entry-author"><?php esc_html_e('BY','cake-shop-bakery'); ?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
            <span class="ml-2"></i><?php echo esc_html(get_the_date()); ?></span>
          </div>
        <?php }?>
        <div class="post-summery mt-2">
          <?php if ($cake_shop_bakery_post_page_title == 1 ) {?>
            <?php the_title('<h3 class="entry-title pb-2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>');?>
          <?php }?>
          <p><?php echo wp_trim_words( get_the_content(), 30 ); ?></p>
          <?php if ($cake_shop_bakery_post_page_btn == 1 ) {?>
            <a href="<?php the_permalink(); ?>" class="btn-text"><?php esc_html_e('Read More','cake-shop-bakery'); ?></a>
          <?php }?>
        </div>
      </div>
    </article>
  </div>
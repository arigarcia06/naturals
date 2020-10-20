<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );
 ?>


 		 	<div class="product pro">
    						<div class="block2 block-archive ">
								
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<div class="block2-labelsale">nuevo</div>
									
									<img src="<?php echo get_the_post_thumbnail_url(); ?>">

									<div class="block2-overlay trans-0-4">
										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="btn-oficial cart-btn flex-c-m size1 bg4  hov1 s-text1 trans-0-4">
												<a href="<?php the_permalink(); ?>">Ver más</a>
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt">
									<a href="<?php the_permalink(); ?>" class="block2-name dis-block s-text3 p-b-5">
										<?php the_title(); ?>
									</a>

									<span class="block2-price m-text6 p-r-5">
										<?php echo $product->get_price_html(); ?>
									</span>
								</div>
							</div>
    				</div>
    		
    	
<?php
	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>

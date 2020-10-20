<?php
/**
* The template for displaying product content in the single-product.php template
*
* This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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
/**
* Hook: woocommerce_before_single_product.
*
* @hooked wc_print_notices - 10
*/
do_action( 'woocommerce_before_single_product' );
if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
		<section class="details" style="padding-top: 100px;">
		<div class="container">
		  <!--       Detail Product-->
		  <div class="row no-gutters">
			<!--               picture product-->
			<div class=" col-md-8">
	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>
</div>
<div class=" col-md-4">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>
</div>

	</div>

</section>
</div>
</div>
  <section class="products-relation">
	<div class="vw-sirat-aboutus-title ">
	  	<h3><span style="color: #f8615a;">Productos</span> Relacionados
	 		</h3>
	</div>
 		<div class="container">
	
		     <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 6 ); ?>
            <?php $loop = new WP_Query( $args ); ?>
	<div class="multiple-items">
	          				<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
							<div class="block2 block-res">
								
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
							<?php endwhile ?>
						</div>
	</div>
						
				
  </section>
<?php do_action( 'woocommerce_after_single_product' ); ?>

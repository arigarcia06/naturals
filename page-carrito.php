<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
 get_header();

?>

<section class="head-cart">
  
</section>
  <div class=" cart">
    <!-- <h2>Tu Carrito</h2> -->
  	<?php echo do_shortcode('[woocommerce_cart]'); ?>
  


		<div class="bottom-area d-flex px-3" style="    padding-bottom: 5%;">
	    						<div class="m-auto d-flex">
	    						
	    					    <a href="<?php echo bloginfo('url').'/index.php/shop';?>" class="btn-oficial d-flex justify-content-center align-items-center mx-1">

                  Volver a la tienda
                    </a>
	    						
    							</div>
    						</div></div>
<?php get_footer(); ?>

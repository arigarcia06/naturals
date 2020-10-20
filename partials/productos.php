<section class="bgwhite res-products p-t-100 p-b-100">
		<div class="sec-title res-sec p-b-22">
			<h3 class="products-text t-center">
				Nuestros <span style="color: #f8615a;">Productos</span> Recientes
			</h3>
		</div>

		<!-- Tab01 -->
		<div class="tab01 container">
			<!-- Tab panes -->
			<div class="tab-content p-t-35">
				<!-- - -->
				<div class="products-recents">
					<div class="">
						<?php $args = array( 'post_type' => 'product', 'posts_per_page' => 6 ); ?>
	      				<?php $loop = new WP_Query( $args ); ?>
		 				<div class="multiple-items">
	          				<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
							<div class="block2 ">
								
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
				</div>
			</div>
		</div>
	<div class="more-view more-res">
		<a href="<?php echo bloginfo('url').'/index.php/shop';?>" class="flex-c-m size2 sizeof m-text2 bg3 hov1 trans-0-4 btn-oficial">
		VER MÁS
		</a>
	</div>
</section>

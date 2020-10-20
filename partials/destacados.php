
	<!-- Banner -->
	<div id="recientes" class="banner product-desc bgwhite p-t-100 p-b-50">
		<div class="container">
			<div class="sec-title res-sec">
				<h3 class="m-text5 t-center">
					Nuestros <span style="color: #f8615a;">Productos</span> Destacados
				</h3>
			</div>
			<div class="desct-products">
					<!-- block1 -->
					<?php
 					$args = array(
			        'post_type'      => 'product',
			        'posts_per_page' => 3,
			        'orderby'        => 'rand',
			        'tax_query' => array(
			                array(
			                    'taxonomy' => 'product_visibility',
			                    'field'    => 'name',
			                    'terms'    => 'featured',
			                ),
			            ),
			        );
					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<a href="<?php the_permalink(); ?>">
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" >

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="<?php the_permalink(); ?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4 btn-oficial">
								<?php the_title(); ?>
							</a>
						</div>
					</div>
				</a>
				<?php endwhile;
				wp_reset_query(); ?>
			</div>
		</div>
	</div>
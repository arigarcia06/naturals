
	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">

			<div class="slick1">
				   <?php $args = array( 'post_type' => 'banner','order' => 'ASC'); ?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="item-slick1 item1-slick1" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>">
					<div class="content-principal">
						<div class="mask-item m-text1  ">
							<div class="here">
						<h1 class="caption1-slide1 xl-text2  p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
							<?php the_title(); ?>
						</h1>

						<h2 class="caption2-slide1 animated visible-false m-b-33" data-appear="fadeInDown">
							<?php the_content(); ?>
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="#footer" class="btn-oficial flex-c-m size2  s-text2 bgwhite hov1 trans-0-4">
								Contactar
							</a>
						</div>
					</div>
					</div>
				</div>
				  
			</div>
		<?php endwhile; ?>
			</div>
		</div>
	</section>
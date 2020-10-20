<section id="blog" class="blog bgwhite p-t-94 p-b-65">
			<div class="sec-title res-sec">
				<h3 class="blog-text t-center">
					Nuestro <span style="color: #f8615a;">Blog</span>
				</h3>
			</div>

			<div class="blog-content">
				<div class="multiple-card">
 			 	<?php $args = array( 'post_type' => 'post' , 'posts_per_page' => 6); ?>
        		<?php $loop = new WP_Query( $args ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post();?>
				<div class="item">
					<div class="block2-img img-blog wrap-pic-w of-hidden pos-relative">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" >
						<div class="text-blog">
							<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
						</div>
					</div>
				</div>
			<?php endwhile ?>
		</div>
			</div>
			<div class="more-view">
							<!-- Button -->
			<a href="<?php echo bloginfo('url').'/index.php/blog';?>" class="flex-c-m size2 sizeof m-text2 bg3 hov1 trans-0-4 btn-oficial">
			VER MÁS
			</a>
			</div>
	</section>

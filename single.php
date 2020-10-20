<?php get_header(); ?>

	<div class="blog-page" style="background-color: #fff!important; ">
	<?php while (have_posts() ) : the_post(); ?>
	<div class="header "  style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
	    <div class="mask-blog">
			<h3 style="font-weight: bold; color: #fff; text-align: center; font-size: 3rem;"><?php the_title(); ?></h3>
		</div>
	</div>
	<div class="container info-centro ">

		<?php the_content(); ?>
	</div>
		
		<?php endwhile; ?>
	</div>

	<div class="noticias">
		<?php get_template_part('partials/blog') ?>
	</div>

  <?php get_footer(); ?>
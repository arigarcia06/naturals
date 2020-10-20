<?php  get_header(); ?>  

  <section class="blog-page">
   <div class="container">
      <div class="sec-title sec-res" style="margin-bottom: -2%; margin-top: 3%; text-align: left; display: flex;">
        <h3 class="blog-text t-center">
          Nuestro <span style="color: #f8615a;">Posts</span> Recientes
        </h3>
      </div>
        <div class="row ">
          <div class=" container cards-products">      
            <?php $args = array( 'post_type' => 'post' , 'posts_per_page' => 6); ?>
            <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <div class="item">
        
        <div  class="block2-img img-blog wrap-pic-w of-hidden pos-relative">
          
          <img href="<?php the_permalink(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>" >
        <div class="text-blog">
          <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
        </div>
        </div>
      
      </div>
         <?php endwhile ?>
        </div>
      </div>
    </div>
  </section>
<?php  get_footer(); ?>  
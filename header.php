<!DOCTYPE html>
<html lang="en">
<head>
	    <?php wp_head(); ?>
		<title> <?php if (is_home()) {
				echo bloginfo('name');
			} elseif (is_category()) {
				single_cat_title();
				echo ' | ';
				echo bloginfo('name');
			} elseif (is_single() || is_page()) {
				single_post_title();
				echo ' | ';
				echo bloginfo('name');
			} else {
				wp_title('', true);
				echo ' | ';
				echo bloginfo('name');
			}		?> </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/fav.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/lightbox2/css/lightbox.min.css">
	  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
<?php if (is_home()) :?> 
	<!-- header fixed -->
	<div class="wrap_header fixed-header2 trans-0-4">
		<!-- Logo -->
		<a href="index.html" class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="IMG-LOGO">
		</a>

		<!-- Menu -->
		<div class="wrap_menu">
			<nav class="menu">
				<ul class="main_menu">
					<li>
						<a href="index.html">Inicio</a>
					
					</li>

					<li>
					<a href="#">Categorías</a>
					<ul class="sub_menu">
						<?php 
          				$orderby = 'name';
						$order = 'asc';
						$hide_empty = false ;
						$cat_args = array(
    					'orderby'    => $orderby,
    					'order'      => $order,
    					'hide_empty' => $hide_empty,
						);
 
						$product_categories = get_terms( 'product_cat', $cat_args );
 						if( !empty($product_categories) ){
    					echo '
 						<ul class="">';
   						foreach ($product_categories as $product_category) {
        				echo '
 						<li>';
				        echo '<a href="'.get_term_link($product_category).'" >';
				        echo $product_category->name;
				        echo '</a>';
				        echo '</li>';
    					}
    					echo '</ul>';
						} ?>
					</ul>

					</li>
						<li>
						<a href="<?php echo bloginfo('url');?>/index.php/tienda">Productos</a>
					</li>
						<li>
						<a href="#about">Nosotros</a>
					</li>

				<li>
						<a href="#blog">Blog</a>
					</li>

				

					<li>
						<a href="#footer">Contacto</a>
					</li>
				</ul>
			</nav>
		</div>

		<!-- Header Icon -->
		<div class="header-icons">
			<a href="#" class="header-wrapicon1 dis-block">
					<span class="topbar-email">
						naturaldefenders@example.com
					</span>
			</a>

			<span class="linedivide1"></span>

			<div class="header-wrapicon2">
				  <?php if( is_cart() && WC()->cart->cart_contents_count == 0){ $url_carro = get_permalink(wc_get_page_id('shop')); }else{ $url_carro = get_permalink(wc_get_page_id('cart')); } ?>
              <a href="<?php echo $url_carro; ?>" class="nav-link"><span class="fa fa-shopping-cart"></span><p class="mini-cart"><?php echo WC()->cart->get_cart_contents_count(); ?></p></a>
				

			</div>
		</div>
	</div>



	<!-- Header -->
	<header class="header2">
		<!-- Header desktop -->
		<div class="container-menu-header-v2 p-t-26">
			<div class="topbar2">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-whatsapp"></a>
				
				</div>

				<!-- Logo2 -->
				<a href="index.html" class="logo2">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="IMG-LOGO">
				</a>

				<div class="topbar-child2">
					<span class="topbar-email">
						naturaldefenders@example.com
					</span>

			

					<!--  -->
				<!-- 	<a href="#" class="header-wrapicon1 dis-block m-l-30">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a> -->

					<span class="linedivide1"></span>

					<div class="header-wrapicon2 m-r-13">
					  	  <?php if( is_cart() && WC()->cart->cart_contents_count == 0){ $url_carro = get_permalink(wc_get_page_id('shop')); }else{ $url_carro = get_permalink(wc_get_page_id('cart')); } ?>
              <a href="<?php echo $url_carro; ?>" class="nav-link"><span class="fa fa-shopping-cart"></span><p class="mini-cart"><?php echo WC()->cart->get_cart_contents_count(); ?></p></a>

						

					</div>
				</div>
			</div>

			<div class="wrap_header">

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
									<li>
						<a href="index.html">Inicio</a>
					
					</li>

					<li >
						<a href="#">Categorías</a>
						<ul class="sub_menu">
						<?php 
          				$orderby = 'name';
						$order = 'asc';
						$hide_empty = false ;
						$cat_args = array(
    					'orderby'    => $orderby,
    					'order'      => $order,
    					'hide_empty' => $hide_empty,
						);
 
						$product_categories = get_terms( 'product_cat', $cat_args );
 						if( !empty($product_categories) ){
    					echo '
 						<ul class="">';
   						foreach ($product_categories as $product_category) {
        				echo '
 						<li>';
				        echo '<a href="'.get_term_link($product_category).'" >';
				        echo $product_category->name;
				        echo '</a>';
				        echo '</li>';
    					}
    					echo '</ul>';
						} ?>
						</ul>
					</li>

					<li>
						<a href="#recientes">Productos</a>
					</li>
					<li>
						<a href="#about">Nosotros</a>
					</li>
				<li>
						<a href="#blog">Blog</a>
					</li>

					

					<li>
						<a href="#footer">Contacto</a>
					</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">

				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<!-- <a href="#" class="header-wrapicon1 dis-block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a> -->

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						  <?php if( is_cart() && WC()->cart->cart_contents_count == 0){ $url_carro = get_permalink(wc_get_page_id('shop')); }else{ $url_carro = get_permalink(wc_get_page_id('cart')); } ?>
              <a href="<?php echo $url_carro; ?>" class="nav-link"><span class="fa fa-shopping-cart"></span><p class="mini-cart"><?php echo WC()->cart->get_cart_contents_count(); ?></p></a>
						

				
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								naturaldefenders@example.com
							</span>

						
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-whatsapp"></a>
						
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.html">Inicio</a>
					
						
					</li>

					<li class="item-menu-mobile none-cat">
						<a href="#">Categorías</a>
						<ul class="sub_menu">
						<?php 
          				$orderby = 'name';
						$order = 'asc';
						$hide_empty = false ;
						$cat_args = array(
    					'orderby'    => $orderby,
    					'order'      => $order,
    					'hide_empty' => $hide_empty,
						);
 
						$product_categories = get_terms( 'product_cat', $cat_args );
 						if( !empty($product_categories) ){
    					echo '
 						<ul class="">';
   						foreach ($product_categories as $product_category) {
        				echo '
 						<li>';
				        echo '<a href="'.get_term_link($product_category).'" >';
				        echo $product_category->name;
				        echo '</a>';
				        echo '</li>';
    					}
    					echo '</ul>';
						} ?>
						</ul>
					</li>

					<li class="item-menu-mobile">
						<a href="#recientes">Productos</a>
					</li>
					<li class="item-menu-mobile">
						<a href="#about">Nosotros</a>
					</li>

					<li class="item-menu-mobile">
						<a href="#blog">Blog</a>
					</li>

					

					<li class="item-menu-mobile">
						<a href="#footer">Contacto</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
<?php else: ?>
		<div class="wrap_header fixed-header2 trans-0-4">
		<!-- Logo -->
		<a href="index.html" class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="IMG-LOGO">
		</a>

		<!-- Menu -->
		<div class="wrap_menu">
			<nav class="menu">
				<ul class="main_menu">
					<li>
						<a href="<?php echo bloginfo('url');?>">Inicio</a>
					
					</li>

					<li>
						<a href="#">Categorías</a>
						<ul class="sub_menu">
						<?php 
          				$orderby = 'name';
						$order = 'asc';
						$hide_empty = false ;
						$cat_args = array(
    					'orderby'    => $orderby,
    					'order'      => $order,
    					'hide_empty' => $hide_empty,
						);
 
						$product_categories = get_terms( 'product_cat', $cat_args );
 						if( !empty($product_categories) ){
    					echo '
 						<ul class="">';
   						foreach ($product_categories as $product_category) {
        				echo '
 						<li>';
				        echo '<a href="'.get_term_link($product_category).'" >';
				        echo $product_category->name;
				        echo '</a>';
				        echo '</li>';
    					}
    					echo '</ul>';
						} ?>
						</ul>
						
					</li>
						<li>
						<a href="<?php echo bloginfo('url');?>/index.php/tienda">Productos</a>
					</li>
						<li>
						<a href="<?php echo bloginfo('url');?>#about">Nosotros</a>
					</li>

				<li>
						<a href="<?php echo bloginfo('url');?>#blog">Blog</a>
					</li>

				

					<li>
						<a href="#footer">Contacto</a>
					</li>
				</ul>
			</nav>
		</div>

		<!-- Header Icon -->
		<div class="header-icons">
			<a href="#" class="header-wrapicon1 dis-block">
					<span class="topbar-email">
						naturaldefenders@example.com
					</span>
			</a>

			<span class="linedivide1"></span>

			<div class="header-wrapicon2">

				  <?php if( is_cart() && WC()->cart->cart_contents_count == 0){ $url_carro = get_permalink(wc_get_page_id('shop')); }else{ $url_carro = get_permalink(wc_get_page_id('cart')); } ?>
              <a href="<?php echo $url_carro; ?>" class="nav-link"><span class="fa fa-shopping-cart"></span><p class="mini-cart"><?php echo WC()->cart->get_cart_contents_count(); ?></p></a>
				
				

			</div>
		</div>
	</div>



	<!-- Header -->
	<header class="header2">
		<!-- Header desktop -->
		<div class="container-menu-header-v2 p-t-26">
			<div class="topbar2">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-whatsapp"></a>
				
				</div>

				<!-- Logo2 -->
				<a href="index.html" class="logo2">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="IMG-LOGO">
				</a>

				<div class="topbar-child2">
					<span class="topbar-email">
						naturaldefenders@example.com
					</span>


					<span class="linedivide1"></span>

					<div class="header-wrapicon2 m-r-13">
						  <?php if( is_cart() && WC()->cart->cart_contents_count == 0){ $url_carro = get_permalink(wc_get_page_id('shop')); }else{ $url_carro = get_permalink(wc_get_page_id('cart')); } ?>
              <a href="<?php echo $url_carro; ?>" class="nav-link"><span class="fa fa-shopping-cart"></span><p class="mini-cart"><?php echo WC()->cart->get_cart_contents_count(); ?></p></a>

						

					</div>
				</div>
			</div>

			<div class="wrap_header">

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
									<li>
						<a href="<?php echo bloginfo('url');?>">Inicio</a>
					
					</li>

					<li>
						<a href="#">Categorías</a>
						<ul class="sub_menu">
						<?php 
          				$orderby = 'name';
						$order = 'asc';
						$hide_empty = false ;
						$cat_args = array(
    					'orderby'    => $orderby,
    					'order'      => $order,
    					'hide_empty' => $hide_empty,
						);
 
						$product_categories = get_terms( 'product_cat', $cat_args );
 						if( !empty($product_categories) ){
    					echo '
 						<ul class="">';
   						foreach ($product_categories as $product_category) {
        				echo '
 						<li>';
				        echo '<a href="'.get_term_link($product_category).'" >';
				        echo $product_category->name;
				        echo '</a>';
				        echo '</li>';
    					}
    					echo '</ul>';
						} ?>
						</ul>
					</li>

					<li>
						<a href="<?php echo bloginfo('url');?>/index.php/tienda">Productos</a>
					</li>
					<li>
						<a href="<?php echo bloginfo('url');?>#about">Nosotros</a>
					</li>
				<li>
						<a href="<?php echo bloginfo('url');?>#blog">Blog</a>
					</li>

					

					<li>
						<a href="#footer">Contacto</a>
					</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">

				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<!-- <a href="#" class="header-wrapicon1 dis-block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a> -->

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						  <?php if( is_cart() && WC()->cart->cart_contents_count == 0){ $url_carro = get_permalink(wc_get_page_id('shop')); }else{ $url_carro = get_permalink(wc_get_page_id('cart')); } ?>
              <a href="<?php echo $url_carro; ?>" class="nav-link"><span class="fa fa-shopping-cart"></span><p class="mini-cart"><?php echo WC()->cart->get_cart_contents_count(); ?><p></a>
						

				
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								naturaldefenders@example.com
							</span>

						
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-whatsapp"></a>
						
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo bloginfo('url');?>">Inicio</a>
					
						
					</li>

					<li class="item-menu-mobile none-cat">
						<a href="#">Categorías</a>
						<ul class="sub_menu">
							<?php 
          				$orderby = 'name';
						$order = 'asc';
						$hide_empty = false ;
						$cat_args = array(
    					'orderby'    => $orderby,
    					'order'      => $order,
    					'hide_empty' => $hide_empty,
						);
 
						$product_categories = get_terms( 'product_cat', $cat_args );
 						if( !empty($product_categories) ){
    					echo '
 						<ul class="">';
   						foreach ($product_categories as $product_category) {
        				echo '
 						<li>';
				        echo '<a href="'.get_term_link($product_category).'" >';
				        echo $product_category->name;
				        echo '</a>';
				        echo '</li>';
    					}
    					echo '</ul>';
						} ?>
						</ul>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo bloginfo('url');?>/index.php/tienda">Productos</a>
					</li>
					<li class="item-menu-mobile">
						<a href="<?php echo bloginfo('url');?>#about">Nosotros</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo bloginfo('url');?>#blog">Blog</a>
					</li>

					

					<li class="item-menu-mobile">
						<a href="#footer">Contacto</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
<?php endif; ?>
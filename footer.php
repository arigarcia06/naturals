
	<!-- Footer -->
	<style type="text/css">
  
  .s-text12 p{
    color: black;
    font-family: 'poppins', sans-serif;
  }
</style>
	<footer id="footer" class=" bg-footer p-b-30 p-l-45 p-r-45">
		<div class="flex-w flex-here">
			<div class="hereone w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30" style="font-weight: bold">
					MÁS INFORMACIÓN
				</h4>

				<div class="res-text">
					<p class="s-text7 w-size27">
				  <ul>
	                <li><span style="margin-right: 10px;" class="fa fa-map-marker"></span>
	                <span class="text">Panamá, Panamá City</span>
	            </li>
	                <li>
	                	<span style="margin-right: 10px;" class="fa fa-phone"></span>
	                	<span  class="text">+50 7 1 234 5678</span></li>
	                <li>
	                	<span style="margin-right: 10px;" class="fa fa-envelope"></span>
	                	<span  class="text">naturaldefenders@gmail.com</span></li>
	              </ul>
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 fa-color color1  fa fa-facebook"></a>
						<a href="#" class="fs-18 fa-color color1  fa fa-instagram"></a>
						<a href="#" class="fs-18 fa-color  color1  fa fa-whatsapp"></a>
						
					</div>
				</div>
			</div>

		<div  class=" p-t-30 p-l-15 p-r-15 respon4 four">
			<div class="logo-footer">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
			</div>
		</div>


	<div class=" p-t-30 p-l-15 p-r-15 respon4 five">
		<h4 class="s-text12 p-b-10">
		    Contáctanos
		</h4>
	<?php if ( isset($_GET['sent']) ){
      if ( $_GET[ sent ] == '1' ){
        echo "<p>Recibimos tu mensaje, pronto te contactaremos</p>";

      }
      else {
        echo "<p>Hubo un error al enviar el Mensaje</p>";
        }
      }   ?>

		<form class="leave-comment" method="post" action="<?php echo admin_url('admin-post.php') ?>" id="contactForm" name="sentMessage" novalidate="novalidate">
			<div class="flex-form">
				<div class="bo4 of-hidden size15 m-b-20">
					<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" id="name" placeholder="Nombre y Apellido">
				</div>

				<div class="bo4 of-hidden size15 m-b-20">
					<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone" id="phone" placeholder="Teléfono">
				</div>
			</div>
			<div class="bo4 of-hidden size15 m-b-20">
				<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" id="email" placeholder="Email">
			</div>

			<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" id="message" placeholder="Mensaje"></textarea>

			<div class="w-size25">
				<!-- Button -->
				<input type="hidden" name="action" value="process_form">
				<button class="flex-c-m size2 bg1 hov1 m-text3 trans-0-4 btn-oficial" name="submit" type="submit">
					Enviar
				</button>
			</div>
		</form>
	</div>

		</div>
	</footer>



	<div class="suscribir">
		
			<div class="w-size8  p-l-15 p-r-15 respon3">
				<h4 style="text-align: center;" class="s-text12 this">
					¡Mantente en <span style="color: #f8615a;">contacto</span>!
				</h4>
				<p class="text2">Suscribete a nuestro Newsletter</p>

				<form class="form-sub">
					<div class="effect1">
						<input class="s-text7 w-full" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class=" p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4  hov1 m-text3 trans-0-4 btn-oficial">
							Subscribir
						</button>
					</div>

				</form>
			</div>
	</div>
		<div class="t-center p-t-15 p-b-15 p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2020 Todos los derechos son reservados.
			</div>
		</div>
	</footer>



  <div class="btn-whatsapp">
  <a href="https://api.whatsapp.com/send?phone=507" target="_blank">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ws.jpg" alt="">
  </a>
</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>


<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/select2/select2.min.js"></script>

<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick-custom.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  <?php wp_footer(); ?>
</body>
</html>

<!DOCTYPE html>
 <html lang="pt-br">
 <head>
 <title>Play-Kids Eventos - Decorando Emoções</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
 <meta name="keywords" content="" >
 <meta name="description" content="" >
 <script type="application/x-javascript"> addEventListener("load", function() {
setTimeout(hideURLbar, 0); }, false); function hideURLbar(){
window.scrollTo(0,1); } </script>
 <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
 <link href="css/style.css" rel='stylesheet' type='text/css' />
 <link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic'
rel='stylesheet' type='text/css'>
 <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
rel='stylesheet' type='text/css'>
 <script src="js/jquery-1.11.0.min.js"></script>
<!--start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>

<!--start-smoth-scrolling-->

</head>
<body>
	<!--start-header-->
  <?php include 'inc/header.php'; ?>

	<!--end-header-->
	<!--banner-starts-->
	<div class="clearfix"> </div>

							<img src="images/bnr-4.jpg" alt="">



		<div class="clearfix"> </div>
			<!--End-slider-script-->
	<!----end-banner---->
	<!----start-contact---->
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3>CONTATO</h3>
			</div>
			<div class="contact-bottom">

				<div class="contact-text">
          <div class="col-md-9 contact-left">
            <?php include 'inc/form.php' ?>
          </div>


					<!--<div class="col-md-9 contact-left">
						<input type="text" value="Nome" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nome';}" />
						<input type="text" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}" />
						<input type="text" value="Telefone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telefone';}" />
            <input type="text" value="Data" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Data';}" />
            <input type="text" value="Local" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Local';}" />
            <input type="text" value="Número de Pessoas" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Número de Pessoas';}" />
            <input type="text" value="Cidade" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Cidade';}" />
						<textarea value="Mensagem:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Mensagem..</textarea>
							<div class="submit-btn">
								<form>
									<input type="submit" value="Enviar">
								</form>
							</div>
					</div>-->
					<div class="col-md-3 contact-right">
						<div class="address">
							<h5>Entre em Contato</h5>
							<p>Play-Kids Eventos,
							<span>Rua Germano Negrini, 150</span>
							São Roque - SP.</p>
						</div>
						<div class="address">
							<p>Tel:1115550001,
							<span>Tel:190-4509-494</span>
							Email: <a href="mailto:example@email.com">email@playkids-eventos.com.br</a></p>
						</div>
					</div>
					<div class="clearfix"></div>

				</div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259" frameborder="0" style="border:0"></iframe>
			</div>
		</div>
	</div>
	<!----end-contact---->
	<!----start-footer---->

<?php include 'inc/footer.php'; ?>

	<!----end-footer---->
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title>Dream Wedding a Wedding Category Flat Bootstarp responsive Website Template| 404 :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dream Wedding Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.0.min.js"></script>
<!---- start-smoth-scrolling---->
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

<!---- start-smoth-scrolling---->

</head>
<body>
	<!----start-header---->
	<?php include 'inc/header.php'; ?>
	<!----end-header---->
	<!--banner-starts-->
	<div class="bnr" id="home">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
			    <li>
					<div class="banner">
						<div class="banner-text">
							<h1>Nulla elementum quam lacinia</h1>
							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eros massa, aliquet id fringilla at, ullamcorper eu diam. </p>
						</div>
					</div>
				</li>
				<li>
					<div class="banner1">
						<div class="banner-text">
							<h1>Nulla elementum quam lacinia</h1>
							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eros massa, aliquet id fringilla at, ullamcorper eu diam. </p>
						</div>
					</div>
				</li>
				<li>
					<div class="banner">
						<div class="banner-text">
							<h1>Nulla elementum quam lacinia</h1>
							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eros massa, aliquet id fringilla at, ullamcorper eu diam. </p>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--banner-ends-->
	<!--Slider-Starts-Here-->
				<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });

			    });
			  </script>
			<!--End-slider-script-->
	<!----end-banner---->
	<!----start-404---->
	<div class="error">
		<div class="container">
			<div class="error-top">
				<p>OOPS! - Aconteceu algo errado, não pudemos encontrar a página solicitada</p>
				<h3>404</h3>
				<div class="error-btn">
					<a href="index.php">Retornar ao Ínicio</a></div>
				</div>
			</div>
		</div>
	</div>
	<!----end-404---->
	<!----start-footer---->
<?php include 'inc/footer.php'; ?>
	<!----end-footer---->
</body>
</html>

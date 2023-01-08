<!DOCTYPE html>

<html lang="pt-br">
<head>

<!-- GOOGLE ANALYTICS -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-7RNDZR9046"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-7RNDZR9046');
	</script>
<!--FIM DO GOOGLE ANALYTICS-->

	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
	<meta name="description" content="Entre Conchas: exposição virtual"/>
	<meta name="keywords" content="entre conchas, exposição virtual, sambaqui, modos de vida nos sambaquis"/>
	<meta name="author" content="Sady Pereira do Carmo Junior, Ana Luisa de Mello Nascimento, Oriana Lea di Monaco, Marlon Andre Peron Generoso"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!-- GOOGLE SEARCH INDEX -->	
	<meta name="google-site-verification" content="oPNvCyIt981jCIevU5RoEGfTP7ZkYeoTBvahPsJjZW4" />
<!-- FIM DO GOOGLE SEARCH INDEX -->

	<title>Exposição Virtual Entre Conchas - MAE-UFPR</title>

<!-- LINKS CSS ADICIONAIS -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
<!-- FIM DOS CSS ADICIONAIS -->

<!-- MAIN CSS -->
	<link rel="stylesheet" href="css/tooplate-style.css"/>
	<link rel="stylesheet" href="css/geral.css"/>
<!-- FIM MAIN CSS -->

<!--Favicon-->
	<link rel="shortcut icon" href="images/mae_fav.ico"/>
<!--Fim do favicon-->

	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("Nov 26, 2021 20:00:00").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

		  // Get today's date and time
		  var now = new Date().getTime();

		  // Find the distance between now and the count down date
		  var distance = countDownDate - now;

		  // Time calculations for days, hours, minutes and seconds
		  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		  // Display the result in the element with id="timer"
		  document.getElementById("timer").innerHTML = days + "d " + hours + "h "
		  + minutes + "m " + seconds + "s ";

		  // If the count down is finished, write some text
		  if (distance < 0) {
		    clearInterval(x);
		    document.getElementById("timer").innerHTML = "EXPIRED";
		  }
		}, 1000);
	</script>
	
</head>
<body>

<!-- INDIOS SECTION -->
<section id="indiosTimer" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<!-- SECTION TITLE -->
				<div class="wow fadeInUp section-title" data-wow-delay="0.2s">
					<div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
						<p class="expoVirtual">EXPOSIÇÃO VIRTUAL</p>
						<center><img src="images/titulo_ec.png" id="tituloECTimer"/></center>
						<!-- Display the countdown timer in an element -->
						<p id="faltam">Faltam:</p>
						<p id="timer"></p>
						<p class="expoVirtual">para a inauguração!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- FIM DA INDIOS -->


<!-- MENU SECTION -->
<section id="menuTimer" class="parallax-section">
	
	<div id="esqueletoTimer">
		<img src="images/esqueleto_01.png"/>
	</div>
</section>
<!-- FIM DA MENU -->

<!-- FOOTER SECTION -->
<footer>
    <div class="container">
        <div class="row">
			<div class="wow fadeInUp col-md-12 col-sm-12 col-xs-12" data-wow-delay="0.8s">
				<div class="wow fadeInUp section-title" data-wow-delay="0.2s">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
						<div class="col-md-1 col-sm-2 col-xs-2">
							<div id="pin">
								<img src="images/pin.png"/>
							</div>
						</div>
						<div class="col-md-4 col-sm-10 col-xs-10">
							<p><strong>MUSEU DE ARQUEOLOGIA E ETNOLOGIA DA UFPR</strong></p>
							<p>Sede Histórica<br/>
								De terça a domingo, das 8h às 20h<br/>
								Rua XV de Novembro, 575<br/>
								PARANAGUÁ-PR<br/>
							</p>
							<p><strong>Mais informações:</strong><br/>
								(41) 3721-1200<br/>
								fb.com/maeufpr<br/>
								@maeufpr<br/>
							</p>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-4 logos">
							<div id="logoUFPR">
								<img src="images/logoUFPR.png" id="imgUFPRLogo"/>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-4 logos">
							<div id="logo_proec">
								<img src="images/logo_proec.png" id="img_proec_logo"/>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-4 logos">
							<div id="logo_mae">
								<img src="images/logo_mae.png" id="img_mae_logo"/>
							</div>
						</div>						
						<div class="col-md-1 col-sm-0 col-xs-0"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- FIM DO FOOTER -->

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>


<!-- FIM SCRIPTS -->

</body>
</html>

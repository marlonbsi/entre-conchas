<!DOCTYPE html>

<html lang="pt-br">
<head>
	<?php
		include_once 'html/head.html';
	?>

	<!-- Comportamento da modal da galeria de fotos
		Adaptado do Youtube PSC aula 43-->
	<script type="text/javascript">
		function clique(imagem){
			var modalJ=document.getElementById("janelaModal");
			var modalI=document.getElementById("imgModal");
			var modalB=document.getElementById("btnFechar");

			modalJ.style.display="block";
			modalI.src = imagem;
			modalB.onclick=function(){
				modalJ.style.display="none";
			}

			/*Evento que fecha a modal ao clicar fora da imagem*/
			modalJ.addEventListener('click', function(e) {
				if (e.target == this) modalJ.style.display="none";
			});
		}
	</script>

</head>
<body onload="setVolume()">

<!-- PRE LOADER -->
<div class="preloader">
     <div class="spinner">
          <span class="spinner-rotate"></span>
     </div>
</div>
<section id="cabecalho" class="parallax-section">
	<!--BARRA SUPERIOR: TÍTULO, PLAYER, HOME-->
	<div id="cab_menu">
		<div id="expo_titulo">
			<p>EXPOSIÇÃO VIRTUAL ENTRE CONCHAS</p>
		</div>
		<div id="cab_btn">
			<a href="index.php"><img src="images/home.png" id="btn_menu"/></a>
		</div>
	</div>
	<!--FIM BARRA SUPERIOR: TÍTULO, PLAYER, HOME-->

	<img src="images/home_bg2.png" id="cab_sl1"/>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<!-- SECTION TITLE -->
				<div class="wow fadeInUp section-title" data-wow-delay="0.2s">
					<div class="col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
						<img src="images/titulo_ec.png" id="titulo_ec"/>
						<br/>
						<img src="images/titulo_linha.png" id="titulo_linha"/>
					</div>
					<div class="col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
						<p>Os <strong>Sambaquis</strong> são monumentos construídos por populações indígenas pescadoras e coletoras
							que viveram principalmente no litoral brasileiro aproximadamente entre os anos 8.000 a.C. e 1.000 d.C.
						</p>
						<p>Sambaqui é uma palavra de origem tupi-guarani, língua na qual. <em>“Tambá”</em> significa “monte” e
							<em>“Ki”</em> significa “concha”. Sambaqui quer dizer, então, "monte de conchas".
						</p>
						<p>Os sambaquis são edificações de conchas, restos de fauna e habitações que podem conter até sepultamentos
							humanos. Construídos intencionalmente, estão entre os sítios arqueológicos brasileiros mais estudados,
							embora ainda existam muitas dúvidas e mistérios a seu respeito.
						</p>
						<p>Com base em pesquisas arqueológicas, a <strong>Entre Conchas</strong> aborda a cultura material
							encontrada nos sambaquis através do saber-fazer, das relações sociais, do meio ambiente, das ferramentas e
							do imaginário dos povos indígenas construtores de sambaqui. Nosso objetivo é que o público tenha um pequeno
							vislumbre sobre o modo de vida desses habitantes do litoral.
						</p>
						<p>Apesar de serem sítios arqueológicos muito antigos, muitos sambaquis hoje em dia continuam perceptíveis na
							natureza, apesar de anos de destruição e exploração para a produção de cal para rodovias. Eles tendem a
							estar cercados de vegetação - o que pode ser visto em fotos mais recentes. Por esse motivo, pode ser
							difícil reconhecer um sambaqui na paisagem. Ao se deparar com um morro próximo a manguezais, praias ou
							áreas aquáticas, você pode estar em frente a um Sambaqui! Acompanhe nossa exposição e confira algumas
							informações sobre esses monumentos e sobre as pessoas que os construíram.
						</p>
						<!--Player áudio do conjunto-->
						<!--PLAYER AGUARDANDO LIBERAÇÃO DA AUDIODESCRIÇÃO
						<div class="player_cj">
							<audio class="audio_cj" src="media/audio_conjunto1.mp3" controls>
								<p>Seu browser não suporta reprodução de áudio</p>
							</audio>
						</div>
					-->
					<!--Fim do player de áudio do conjunto-->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- FIM DA ABOUT -->

<!-- SAMBAQUIS SECTION -->
<section id="slidesSection" class="cja">
	<div class="container">
		<div class="row">
			<div class="wow fadeInUp section-title" data-wow-delay="0.2s">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
						<div class="slide_cj col-md-12 col-sm-12 col-xs-12">
							<div class="slideshow-container" id="slide_index">
								<div class="mySlides1">
									<center><img src="slides/sambaquis/01.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/02.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/03.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/04.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/05.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/06.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/07.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/08.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/09.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/10.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/11.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/12.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/13.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/14.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/15.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/16.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/17.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/18.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/19.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/20.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/21.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/22.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/23.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/24.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/25.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/26.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/27.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/28.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/29.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/30.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/31.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/32.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/sambaquis/33.png"></center>
								</div>
								<a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
								<a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
</section>
<!-- FIM DA SAMBAQUIS -->

<!-- MAPA SECTION -->
<section id="mapa" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<!-- SECTION TITLE -->
				<div class="wow fadeInUp section-title" data-wow-delay="0.2s">
					<div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
						<div id="mapa_img">
							<img src="images/mapa_04.png" id="mapa_01" onclick='clique("images/mapa_02.png")'/>
						</div>
						<div id="lupa">
							<img src="images/lupa.png" id="lupa_img" onclick='clique("images/mapa_02.png")'/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- FIM DA MAPA -->

	<div id="janelaModal">
		<span id="btnFechar">X</span>
		<img id="imgModal"/>
	</div>

<!-- MENU SECTION -->
<section id="menu" class="parallax-section">
	 <?php
		include_once 'html/menu.php';
	?>
</section>
<!-- FIM DO MENU -->

<!-- FOOTER SECTION -->
<footer>
    <?php
		include_once 'html/rodape.html';
	?>
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

<script>
	var slideIndex = [1,1];
	var slideId = ["mySlides1", "mySlides2"]
	showSlides(1, 0);
	showSlides(1, 1);

	function plusSlides(n, no) {
		showSlides(slideIndex[no] += n, no);
	}

	function showSlides(n, no) {
		var i;
		var x = document.getElementsByClassName(slideId[no]);

		if (n > x.length) {slideIndex[no] = 1}

		if (n < 1) {slideIndex[no] = x.length}

		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}

		x[slideIndex[no]-1].style.display = "block";
	}
</script>
<!-- FIM SCRIPTS -->
</body>
</html>

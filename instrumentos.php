<!DOCTYPE html>

<html lang="pt-br">
<head>
  <?php
    include_once 'html/head.html';
  ?>
</head>
<body>

  <?php
    include_once 'html/barra_superior.html';
  ?>
				<p>INSTRUMENTOS</p>
			</div>
		</div>
	</div>
</section>
<!-- FIM DA CABEÇALHO -->

<!-- TÍTULO SECTION -->
<section id="subtitulo2" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<!-- SECTION TITLE -->
				<div class="wow fadeInUp section-title" data-wow-delay="0.2s">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
						<p>Como a matéria orgânica dificilmente se preserva ao longo do tempo, a grande maioria
							dos artefatos que se conservaram nos sambaquis são fabricados em matérias primas
							duráveis, como rochas, conchas e ossos, que na maioria das vezes ainda guardam as
							informações de sua fabricação e utilização. Entre esses, vemos lâminas de machado,
							polidores, quebra-coquinhos, instrumentos de corte, raspadores, furadores e demais
							objetos utilizados no cotidiano de vida destes povos, em atividades como pesca,
							construção de edificações, embarcações, armadilhas de caça, ou criação de roças.
						</p>
						<!--Player áudio do texto
							<div class="player_cj">
								<audio class="audio_cj" src="media/audio_conjunto1.mp3" controls>
									<p>Seu browser não suporta reprodução de áudio</p>
								</audio>
							</div>-->
						<!--Fim do player de áudio do texto-->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- FIM DA TÍTULO -->

<!-- CONJUNTO A SECTION -->
<section id="slidesSection" class="cja" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<!-- SECTION TITLE -->
				<div class="wow fadeInUp section-title" data-wow-delay="0.2s">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
						<div class="slide_cj col-md-12 col-sm-12 col-xs-12">
							<div class="slideshow-container slides_conjuntos">
								<div class="mySlides1">
									<center><img src="slides/instrumentos/01.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/instrumentos/02.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/instrumentos/03.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/instrumentos/04.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/instrumentos/05.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/instrumentos/06.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/instrumentos/07.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/instrumentos/08.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/instrumentos/09.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/instrumentos/10.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/instrumentos/11.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/instrumentos/12.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/instrumentos/13.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/instrumentos/14.png"></center>
								</div>
								<a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
								<a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- FIM DA CONJUNTO A -->

<section id="instrumentos" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 box">
				<!-- SECTION TITLE -->
				<div class="wow fadeInUp section-title" data-wow-delay="0.2s">
					<div class="col-sm-12 wow fadeInUp" id="instrumentos_img" data-wow-delay="0.4s">
						<img src="images/instrumentos/encabamento.jpg" id="instrumentos_01"/>
						<figure>Formas de encabamentos de material lítico possivelmente usado pelos sambaquieiros.
							Pranchas XIX e XX dos Arquivos do Museu Nacional volume XI (PROUS, 1990 apud NEVES, 2008).
						</figure>

					</div>
				</div>
			</div>
		</div>
</section>

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

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
				<p>IMAGINÁRIO DOS CONSTRUTORES DE SAMBAQUIS</p>
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
						<p>Como a arqueologia trabalha com os aspectos da materialidade, alcançar pontos
              imaginários e simbólicos é uma tarefa bastante complexa e cheia de percalços
              teóricos; contudo, a cultura material nos deixa elementos que remetem a essas
              questões mais simbólicas e mitológicas dos povos. Nos sambaquis não é diferente:
              muitos objetos encontrados entre as conchas do sambaqui nos remetem a um mundo
              estético bastante interessante, a começar pela complexidade do próprio sambaqui
              e seus sepultamentos. Mas, além da própria arquitetura dos sambaquis, temos
              também muitos adornos corporais como colares e pingentes produzidos com conchas
              selecionadas e rochas.
            </p>
						<p>Existem objetos bastante icônicos: as esculturas em pedras, chamadas de zoólitos.
              São peças esculpidas e polidas em rochas com formas de animais, em especial aves e
              peixes. Após análises em alguns exemplares, foram encontradas nos zoólitos
              substâncias que alteram a consciência e como acompanhamento fúnebre, o que leva a
              acreditar que esses objetos estariam relacionados com rituais específicos.
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
<section id="slidesSection" class="cjb" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<!-- SECTION TITLE -->
				<div class="wow fadeInUp section-title" data-wow-delay="0.2s">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="slideshow-container slides_conjuntos">
								<div class="mySlides1">
									<center><img src="slides/imaginario/01.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/imaginario/02.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/imaginario/03.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/imaginario/04.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/imaginario/05.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/imaginario/06.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/imaginario/07.png"></center>
								</div>
								<div class="mySlides1">
									<center><img src="slides/imaginario/08.png"></center>
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

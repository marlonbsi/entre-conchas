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
				<p>DINÂMICAS SOCIAIS</p>
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
						<p>A intencionalidade na construção de sambaquis já é algo consensual entre os pesquisadores da
							área. Esses sítios não são meros acúmulos de restos alimentares, mas verdadeiras construções.
							As conchas aparecem tanto como materiais construtivos, para dar estabilidade e volume ao
							sambaqui, quanto como vestígios ligados a práticas simbólicas. Na maioria das vezes, essas
							duas utilidades das conchas convivem, de maneira conjunta e inseparável.
						</p>
						<p>As variações das formas e tamanhos dos sambaquis são reflexos de aspectos sociopolíticos, tempo
							de ocupação e densidade demográfica, o que demonstra uma complexidade, em termos de organização
							social, dos povos sambaquieiros. Podemos observar, principalmente nos sambaquis de maiores
							proporções, um processo contínuo de sedentarização e adensamento demográfico. Suspeita-se que
							poderiam apresentar organizações sociopolíticas semelhantes aos grupos agrícolas atuais,
							organizados em chefaturas e cacicados, envolvendo questões de desigualdade social, hierarquias e
							lideranças formalmente estabelecidas.
						</p>
						<p>Nos sambaquis também podem ser encontrados sepultamentos associados a itens que indicam aspectos
							da existência de status sociais diferenciados – como na presença de diferentes acompanhamentos
							funerários associados a cada indivíduo. Autores defendem que as sociedades sambaquieiras possuíam
							aspectos sociais bastante elaborados, e vestígios ósseos demonstram até marcadores de estresse
							fisiológico em alguns indivíduos, o que demonstra que havia, provavelmente, diferenciações nas
							atividades realizadas pelas pessoas.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- FIM DA TÍTULO -->

<!-- INDIOS SECTION -->
<section id="indios" >
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<!-- SECTION TITLE -->
				<div class="wow fadeInUp section-title" data-wow-delay="0.2s">
					<div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
						<div id="ilustracao">
							<img src="images/indios_il.jpg" id="indios_il"/>
							<figure>Milena Carolina Rankel, 2021. Aquarela e nanquim.</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- FIM DA INDIOS -->

<section class="cja" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<!-- SECTION TITLE -->
				<div class="wow fadeInUp section-title" data-wow-delay="0.2s">
					<center>
            <iframe id="videoDinamicas" src="https://www.youtube.com/embed/nNJaBLJWJls"
              title="Dinâmicas Sociais: Exposição virtual Entre Conchas" frameborder="0" allow="accelerometer;
              autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
          </center>
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

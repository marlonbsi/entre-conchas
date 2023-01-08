<?php
	$pageName = basename($_SERVER['PHP_SELF']);
?>
<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<!-- SECTION TITLE -->
				<div class="wow fadeInUp section-title" data-wow-delay="0.2s">
					<div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
						<div class="col-md-3 col-sm-2 col-xs-2"></div>
						<div class="col-md-2 col-sm-3 col-xs-4 botao_menu">
							<a href="diversidade.php">
								<?php
									if($pageName == "diversidade.php"){
								?>
										<img src="images/menu/diversidade2.png" id="btn_diversidade"/>
								<?php
									} else{
								?>
										<img src="images/menu/diversidade.png" id="btn_diversidade"/>
								<?php
									}
								?>
							</a>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-0"></div>
						<div class="col-md-2 col-sm-3 col-xs-4 botao_menu">
							<a href="instrumentos.php">
								<?php
									if($pageName == "instrumentos.php"){
								?>
										<img src="images/menu/instrumentos2.png" id="btn_cultura"/>
								<?php
									} else{
								?>
										<img src="images/menu/instrumentos.png" id="btn_cultura"/>
								<?php
									}
								?>
							</a>
						</div>
						<div class="col-md-3 col-sm-2 col-xs-2"></div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
						<div class="col-md-1 col-sm-1 col-xs-0"></div>
						<div class="col-md-2 col-sm-3 col-xs-4 botao_menu">
							<a href="dinamicas.php">
								<?php
									if($pageName == "dinamicas.php"){
								?>
										<img src="images/menu/dinamicas2.png" id="btn_dinamicas"/>
								<?php
									} else{
								?>
										<img src="images/menu/dinamicas.png" id="btn_dinamicas"/>
								<?php
									}
								?>
							</a>
						</div>
						<div class="col-md-2 col-sm-1 col-xs-0"></div>
						<div class="col-md-2 col-sm-3 col-xs-4 botao_menu">
							<a href="imaginario.php">
								<?php
									if($pageName == "imaginario.php"){
								?>
										<img src="images/menu/imaginario2.png" id="btn_imaginario"/>
								<?php
									} else{
								?>
										<img src="images/menu/imaginario.png" id="btn_imaginario"/>
								<?php
									}
								?>
							</a>
						</div>
						<div class="col-md-2 col-sm-1 col-xs-0"></div>
						<div class="col-md-2 col-sm-3 col-xs-4 botao_menu">
							<a href="sepultamentos.php">
								<?php
									if($pageName == "sepultamentos.php"){
								?>
										<img src="images/menu/sepultamentos2.png" id="btn_sepultamentos"/>
								<?php
									} else{
								?>
										<img src="images/menu/sepultamentos.png" id="btn_sepultamentos"/>
								<?php
									}
								?>
							</a>
						</div>
						<div class="col-md-1 col-sm-1 col-xs-0"></div>
					</div>
				<div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
					<div class="col-md-3 col-sm-2 col-xs-2"></div>
					<div class="col-md-2 col-sm-3 col-xs-4 botao_menu">
						<a href="sambaquis.php">
							<?php
								if($pageName == "sambaquis.php"){
							?>
									<img src="images/menu/sambaquis2.png" id="btn_sambaquis"/>
							<?php
								} else{
							?>
									<img src="images/menu/sambaquis.png" id="btn_sambaquis"/>
							<?php
								}
							?>
						</a>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-0"></div>
					<div class="col-md-2 col-sm-3 col-xs-4 botao_menu">
						<a href="bibliografia.php">
							<?php
								if($pageName == "bibliografia.php"){
							?>
									<img src="images/menu/bibliografia2.png" id="btn_guaraguacu"/>
							<?php
								} else{
							?>
									<img src="images/menu/bibliografia.png" id="btn_guaraguacu"/>
							<?php
								}
							?>
						</a>
					</div>
					<div class="col-md-3 col-sm-2 col-xs-2"></div>
				</div>

			</div>
		</div>
	</div>
</div> <!--FECHA O CONTAINER-->
	<div id="esqueleto">
		<img src="images/esqueleto_01.png"/>
	</div>

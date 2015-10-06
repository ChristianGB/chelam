@include('header')
    <section id="works" class="home-section">
    	<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="section-heading text-center">
					<h2 class="h-bold">Busca tus cervezas
					</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>
		<div class="container marginbot-50">
			<div class="row">
				
				<div class="col-md-12">
					
					<div class="col-md-4">
						<div class="col-md-2">

							<p>Tipo:</p>
						</div>
						<div class="col-md-2">

							<p>Ale</p>
						</div>
						<div class="col-md-2">
							<input type="checkbox">
						</div>

						<div class="col-md-2">
							<p>Lager</p>
						</div>
						<div class="col-md-2">
							<input type="checkbox">
						</div>
					</div>

					
					<div class="col-md-4">
						<div class="col-md-2">

							<p>Color:</p>
						</div>
						<div class="col-md-2">
							<p>Oscura</p>
						</div>
						<div class="col-md-2">
							<input type="checkbox">
						</div>

						<div class="col-md-2">
							<p>Clara</p>
						</div>
						<div class="col-md-2">
							<input type="checkbox">
						</div>
					</div>

					<div class="col-md-4">
						<div class="col-md-2">

							<p>Estados:</p>
						</div>
						<div class="col-md-2">
							<select>
								<option>Lista de estados</option>
								<option>Chiapas</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">

            <div class="row animatedParent">
                <div class="col-sm-12 col-md-12 col-lg-12" >

                    <div class="row gallery-item">
                        
							<?php

                			foreach ($allCervezas as $key) {
                			?>
                			<div class="col-md-3">
								<a href="img/Cervezas/<?php echo $key->Nombre ?>.png" title="Agregar al carrito" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg" class="cervezasChelas">
									<img src="img/Cervezas/<?php echo $key->Nombre ?>.png" class="img-responsive cervezasChelas" alt="img">

								</a>
							</div>
		                	<?php
		                	}
		                	?>

					</div>
	
                </div>
            </div>	

		</div>

	</section>
	<section id="works" class="home-section color-dark text-center bg-white">
		<div class="container">
        	<div class="row animatedParent">
        		<div class="col-xs-6 col-sm-4 col-md-4">
        			<div class="animated  slow">
		                <div class="service-box">
							<div class="service-icon">
								
							</div>
							<div class="service-desc">

								
								<p>
								FACEBOOK
								</p>	
								<p>twitter</p>					
								<p>Políticas de privacidad</p>
								<p>Políticas de devolución</p>
							</div>
		                </div>
					</div>
        		</div>
        		
				<div class="col-xs-6 col-sm-4 col-md-8">
        			<div class="animated  slow">
		                <div class="service-box">
							<div class="service-icon">
								
							</div>
							<div class="service-desc">
								<h5>blog</h5>
								<div class="divider-header"></div>
								<p>
								Noticia 1
								</p>
								<p>
								Noticia 2
								</p>
								<p>
								Noticia 3
								</p>
								
							</div>
		                </div>
					</div>
        		</div>
        	</div>
        </div>
	</section>
	@include('footer')
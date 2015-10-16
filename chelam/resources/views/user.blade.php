@include('header')

<section id="service" class="home-section color-dark bg-gray">
	<div class="text-center">
		<div class="container">
			<div class="row ">
		        <div class="col-xs-6 col-sm-4 col-md-4">
					<div class="">
		            <div >
						<div class="service-icon">
							<div class="comoImg2">
								<div class="imgUser" id="imgSesion"></div>
							</div>
						</div>
						<div class="service-desc">
							<h3 class="nombreUser"><?php echo \Session::get("nameUsuarioSesion") ?></h3>
							<div class="divider-header"></div>
							<p>
							<h5>Datos de compra</h5> <br><a href="#">Cambiar Contraseña.</a>
							</p>
						</div>
		            </div>
					</div>
		        </div>
		        <div class="col-xs-6 col-sm-4 col-md-8">
					
	            	<h4 class="hdCompras">HISTORIAL DE COMPRAS</h4>
	            	<div class="service-desc">
	            		<div class="divider-header"></div>
	            	</div>
					<div class="service-desc">
						<table class="table table table-hover">
							<thead>
								<th>Fecha</th>
								<th>Producto</th>
								<th>Costo</th>
								<th>Estatus</th>
							</thead>
							<tr>
								<td class="textRowCenter">01/09/2015</td>
								<td class="tdLeft">
									<ul>
										<li><b>Tzotzil</b> Lager 1x $65.00</li>
										<li><b>Amnesia</b> Nocturna 1x $65.00</li>
										<li><b>Apophis</b> Imperial Stout 1x $65.00</li>
										<li><b>Tzotzil</b> Ambar 1x $65.00</li>
									</ul>
								</td>
								<td class="ui-helper-center"><h5>$390.00</h5></td>
								<td class="textRowCenter"><i>Entregado</i></td>
							</tr>
						</table>		
					</div>
		        </div>
		    </div>
		</div>
	</div>
</section>

@include('footer')
@include('header')
<section class="hero" id="intro">
            <div class="container">
              
              <div class="row">


                <div class="col-md-8 col-md-offset-2 text-center inner">

					<div class="animatedParent">
						
						
						
						<form id="contact-form" action="crearusuario" method="post">
							<div class="row marginbot-20">
								<p id="texto">Registrate y Vive la Experiencia Chelam</p>
								<div class="col-md-6 xs-marginbot-20"></div>
								<div id="registro"></div>
								<div class="col-md-6">
									<button type="submit" id="bt_face">Login</button>
									<hr>
									<input type="text" class="form-control input-lg" id="username" placeholder="Usuario" required="required" name="userName"/>
				                  	<input type="email" class="form-control input-lg" id="email" placeholder="Email" required="required" name="email"/>
				                  	<input type="password" class="form-control input-lg" id="password" placeholder="Contraseña" required="required" name="password"/>


				                  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				                  	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				                  	<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
				                  	<input type="submit" class="btn btn-skin btn-block">
								</div>
							</div>
						</form>
					</div>
			   </div>
              </div>
            </div>
    </section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<ul class="footer-menu">
						<li><a href="#">Inicio</a></li>
						
					</ul>
				</div>
@include('footer')
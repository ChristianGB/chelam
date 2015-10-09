@include('header')
<section class="hero" id="intro">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
					<div class="animatedParent">
						<form id="contact-form" action="crearusuario" method="post">
							<div class="row marginbot-20">
								<div class="col-md-6 xs-marginbot-20"></div>
								<div class="col-md-6">
									<div id="registro"></div>
									<div class="contentRegistro">
										<button type="button" class="form-control btn btn-primary"><i class="fa fa-facebook"></i> Login</button>
										<hr>
										<input type="text" class="form-control input-lg inputRegistro" id="username" placeholder="Usuario" required="required" name="userName"/>
					                  	<input type="email" class="form-control input-lg inputRegistro" id="email" placeholder="Email" required="required" name="email"/>
					                  	<input type="password" class="form-control input-lg inputRegistro " id="password" placeholder="Contraseña" required="required" name="password"/>
					                  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
					                  	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					                  	<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
					                  	<input type="submit" class="form-control btn btn-danger" Value="Crear Cuenta">
									</div>
								</div>
							</div>
						</form>
					</div>
			   </div>
              </div>
            </div>
    </section>
@include('footer')
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script href="" type="text/javascript"></script>
    <script href="js.js" type="text/javascript"></script>
	
    <!-- css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	  <link href="css/nivo-lightbox.css" rel="stylesheet" />
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/chelas/imago_color.png"/>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Trigger the modal with a button -->
	

	<!-- Modal -->
	<div id="myModal" class="modal modal-wide fade in text-center" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title">¿Eres mayor de edad?</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="container modalImg">
	      	</div>
	        <div class="botonesSiNo col-md-12">
	        	<div class="col-md-6">
	        		<a class="btn btn-skin btn-scroll" id="btnSi">Si</a>
	        	</div>
	        	<div class="col-md-6">
	        		<a href="https://www.youtube.com/watch?v=k7exgdlVyU0" class="btn btn-skin btn-scroll" id="btnNo">No</a>
	        	</div>
	        </div>
	      </div>
	    </div>

	  </div>
	</div>
	<div id="navigation">
<<<<<<< HEAD
    <nav class="navbar navbar-custom" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="site-logo">
              <!--<a href="index.html" class="brand">CHELAM</a>-->
              <a href="/"><img src="img/chelas/logovert_color.png" class="miniLogo"></a>
            </div>
          </div>
          <div class="col-md-10">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!--Menu-->
            <div class="collapse navbar-collapse" id="menu">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="chelas">Chelas</a></li>
                <li><a href="chelapack">Chelapack</a></li>
                <li><a href="mayoreo">Mayoreo</a></li>
                <li><a href="#works">Membresias</a></li>
                <li><a href="#contact">Preguntas Frecuentes</a></li>
                <li><a href="#" onmouseover="Visible()">Iniciar sesión</a></li>
                <div class="login" id="login" onmouseover="Visible()" onmouseout="Hidden()">
                  <div class="tri"></div>
                  <button id="bt">facebook</button>
                  <hr>
                  <input placeholder="Email">
                  <input placeholder="Contraseña">
                  <button>Iniciar sesión</button>
                  <a href="">Recuperar Contraseña</a>
                  <hr>
                  <button>Crear cuenta</button>
                </div>
                <li><a href="listaCompras" onmouseover="VisibleFunction()"><span class="fa fa-shopping-cart fa-2x"></span></a></li>
                <li><a>0</a></li>
                <div class="informacion" id="inf" onmouseover="VisibleFunction()" onmouseout="HiddenFunction()">
                  <div class="dec"></div>
                  <h1>Tu Compra</h1>
                  <hr>
                  <img src="img/chelas/caja.png" class="imagen" >
                  <h2>ChelaPack</h2>
                  <p>Personalizado</p>
                  <h3>3 de 6 cervezas</h3>
                  <h4>$195.00</h4>
                  <h5>Envio incluido a todo México</h5>
                  <div class="precio">
                    <table align="center">
                      <tr>
                        <th><img src="img/x.png"></td>
                        <th>Amnecia</th>
                        <td>1 x $65</td>
                      </tr>
                      <tr>
                        <th><img src="img/x.png"></td>
                        <th>Trepadora</th>
                        <td>1 x $65</td>
                      </tr>
                      <tr>
                        <th><img src="img/x.png"></td>
                        <th>Tzotzil</th>
                        <td>1 x $65</td>
                      </tr>
                    </table>
                  </div>
                  <hr id="dow">
                  <div id="total">Total:</div>
                  <div class="valor">$195.00</div>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div> 	
</div>
=======
        <nav class="navbar navbar-custom" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-2">
                                           <div class="site-logo">
                                                    <!--<a href="index.html" class="brand">CHELAM</a>-->
                                              <a href="/"><img src="img/chelas/logovert_color.png" class="miniLogo"></a>
                                            </div>
                                          </div>
                                          

                                          <div class="col-md-10">
                         
                                                      
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      
                                            <div class="collapse navbar-collapse" id="menu">
                                              <ul class="nav navbar-nav navbar-right">
                                                    <li class="active"><a href="chelas">Chelas</a></li>
                                                    <li><a href="chelapack">Chelapack</a></li>
									                                  <li><a href="mayoreo">Mayoreo</a></li>
                                                    <li><a href="#works">Membresias</a></li>				
                                                    <li><a href="#contact">Preguntas Frecuentes</a></li>
                                                    <li><a href="login.html">Iniciar sesión</a></li>
                                                    <li><a href="#"><span class="fa fa-shopping-cart fa-2x"></span></a></li>
                                                    <li><a>0</a></li>
                                                    <!--
                                                    <div class="informacion" id="inf" onmouseover="VisibleFunction()" onmouseout="HiddenFunction()">
                                                      <div class="dec"></div>
                                                      <h1>Tu Compra</h1>
                                                      <hr>
                                                      <img src="img/chelas/caja.png" >
                                                    <h2>ChelaPack</h2>
                                                    <p>Personalizado</p>
                                                    <h3>3 de 6 cervezas</h3>
                                                    <h4>$195.00</h4>
                                                    <h5>Envio incluido a todo México</h5>
                                                      <div class="precio">
                                                        <h4>Amnecia Nocturna</h4>
                                                        <h4>Trepadora Red Ale</h4>
                                                        <h4>Tzotzil Porter</h4>
                                                        <h3>1 x $65</h3>
                                                        <h3>1 x $65</h3>
                                                        <h3>1 x $65</h3>
                                                      <img src="img/chelas/caja.png" class="imagen" >
                                                      <h2>ChelaPack</h2>
                                                      <p>Personalizado</p>
                                                      <h3>3 de 6 cervezas</h3>
                                                      <h4>$195.00</h4>
                                                      <h5>Envio incluido a todo México</h5>

                                                      <div class="precio">
                                                        <table align="center">
                                                            <tr>
                                                              <td><img src="img/x.png"></td>
                                                              <th>Amnecia</th>
                                                              <td>1 x $65</td>
                                                            </tr>
                                                            <tr>
                                                              <td><img src="img/x.png"></td>
                                                              <th>Trepadora</th>
                                                              <td>1 x $65</td>
                                                            </tr>
                                                            <tr>
                                                              <td><img src="img/x.png"></td>
                                                              <th>Tzotzil</th>
                                                              <td>1 x $65</td>
                                                            </tr>
                                                          </table>
                                                      </div>
                                                      <hr id="dow">
                                                      <div id="total">Total:</div>
                                                      <div class="valor">$195.00</div>
                                                      <button>Comprar</button>
                                                      </div>
                                                    </div>-->
                                              </ul>
                                            </div>
                             
                                          </div>
                                    </div>
                              </div>
                        
                        </nav>
    </div> 	
>>>>>>> origin/master

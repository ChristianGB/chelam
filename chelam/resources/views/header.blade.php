<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Chelam | Cervezas artesanales</title>
    
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index-styles.css">
    <link rel="stylesheet" href="css/main-queries.css">
    <link rel="stylesheet" href="css/index-queries.css">
    
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/animations.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/chelas/imago_color.png"/>
</head>
<!-- <body id="page-top" data-spy="scroll" data-target=".navbar-custom"> -->
	<!-- Trigger the modal with a button -->
	<!-- Modal -->
	<!-- <div id="myModal" class="modal modal-wide text-center" role="dialog">
	  <div class="modal-dialog">
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
	</div> -->

<header class="main-header">
    <img src="media/logos/tipo_gris.png" alt="Chelam">
    <div class="main-nav-btn">
        <i class="fa fa-bars fa-2x"></i>
    </div>
    <nav class="main-nav">
        <a href="#">Chelas</a>
        <a href="#">Chelapack</a>
        <a href="#">Mayoreo</a>
        <a href="#">Membresias</a>
        <?php
        if(\Session::get("nameUsuarioSesion") == null){
          ?>
          <a href="#" id="show-login">Iniciar Sesión</a>  
          <?php
        }else{
          ?>
          <a href="user" id="show-login"><?php echo \Session::get("nameUsuarioSesion") ?></a>
          <?php
        }
        ?>
        
        <a href="#"><i class="fa fa-shopping-cart"></i></a>
    </nav>
    <div class="login-container">
        <form action="login" class="login-form" method="post">
            <div class="input-group">
                <input type="email" id="user" name="user">
                <label for="user" class="label-movement">Email</label>
            </div>
            <div class="input-group">
                <input type="password" id="pass" name="pass">
                <label for="pass">Contraseña</label>
            </div>
            <div class="access-input-group">
                <a href="#">¿Olvidaste tu contraseña?</a>
                <input type="submit" id="submit" value="Ingresar">
                <a href="#">Quiero crear una cuenta</a>
            </div>
        </form>
    </div>
</header>
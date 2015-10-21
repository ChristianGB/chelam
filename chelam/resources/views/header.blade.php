<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Chelam | @yield('title')</title>
    
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/prefixfree.min.js"></script>
    <script src="js/animations.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/chelas/imago_color.png"/>

    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/main.css"> 
    <link rel="stylesheet" href="css/main-queries.css">

    @yield('page-css')
</head>
<body>
<!--   Ventana modal  -->
   <section class="modal">
      <div class="modal-content">
         <div class="modal-header">
           <img src="media/logos/tipo_color.png" alt="Chelam">
           <h2>La venta de alcohol a menores está penada por la ley</h2>
           <p>Al confirmar que eres mayor de edad, estás aceptando nuestros <a href="#">términos y condiciones</a> así como nuestra <a href="#">política de privacidad</a>.</p>
       </div>
       <div class="modal-buttons">
           <a href="#" class="btn" id="mayorEdad">Soy mayor de edad</a>
           <a href="https://www.youtube.com/watch?v=k7exgdlVyU0">No soy mayor de edad</a>
       </div>         
      </div>       
   </section>
<!--   Fin ventana modal  -->

<header class="main-header">
    <a href="/">
        <img src="media/logos/tipo_blc.png" alt="Chelam">
    </a>
    <div class="main-nav-btn">
        <i class="fa fa-bars fa-2x"></i>
    </div>
    <nav class="main-nav">
        <a href="/chelas">Chelas</a>
        <a href="/chelapack">Chela<strong>pack</strong></a>
        <a href="/mayoreo">Negocio</a>
        <a href="#">Miembros</a>
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
                <a href="/registrar"><strong>Quiero crear una cuenta</strong></a>
            </div>
        </form>
    </div>
</header>
@yield('content')    

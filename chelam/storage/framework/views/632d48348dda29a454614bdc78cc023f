</head>
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
    	<img src="media/logos/tipo_gris.png" alt="Chelam">
    </a>
    <div class="main-nav-btn">
        <i class="fa fa-bars fa-2x"></i>
    </div>
    <nav class="main-nav">
        <a href="/chelas">Chelas</a>
        <a href="/chelapack">Chelapack</a>
        <a href="/mayoreo">Mayoreo</a>
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
            <form action="user.html" class="login-form">
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
<body>

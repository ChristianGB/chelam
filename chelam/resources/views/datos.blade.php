@extends('header')

@section('title', 'Cervezas Artesanales')
@section('page-css')
<link rel="stylesheet" href="css/datos-styles.css"> 
@endsection

@section('content')
<section class="editor">
  <form action="" class="form">
      <div class="image-uploader">
          <div class="thumbnail">
              <img src="media/icons/sesion.png" alt="">
          </div>
          <a href="" class="select" id="file-chooser">Cambiar imagen de perfil</a>
          <span class="message blue show-message">Aún no tienes una imagen de perfil</span>
          <h1 id="user-name">Usuario X</h1>
      </div>
      <div class="datos">
         <div class="form-group">
             <label class="label" for="email">Correo electrónico</label>
             <input class="input" type="email" id="email" value="MiCorreoActual@correo.com">
         </div>
         <div class="form-group">
             <label class="label" for="cel">Número de contacto</label>
             <input class="input" type="tel" id="cel" placeholder="Para poder contactarte si hay algún problema">
         </div>
         <div class="form-group">
             <label class="label" for="nacimiento">Fecha de nacimiento</label>
             <input type="date" id="nacimiento" class="input error-input">
         </div>
         <div class="form-group genero-group">
             <h3 class="label">Género</h3>
             <input type="radio" name="sex" value="hombre">
             <span class="label">Hombre</span>
             <input type="radio" name="sex" value="mujer">
             <span class="label">Mujer</span>
             <span class="message red show-message">Por favor seleccione una opción</span>
         </div>
         
         <h2 class="label">Direcciones de envio</h2>
         <input type="text" value="Principal" class="direction">
         <input type="text" value="Secundaria" class="direction">
      </div>

<!-- Para mostrar el mensaje de error agregar clase show-message -->
      <span class="message red">Revise sus datos, por favor.</span>
      
      <input type="submit" value="Actualizar" class="subm">             
  </form>
</section>
@endsection
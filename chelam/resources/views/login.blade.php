@extends('header')
@section('title', 'Accede a tu cuenta')
@section('page-css')
<link rel="stylesheet" href="css/login-styles.css"> 
<link rel="stylesheet" href="css/login-queries.css">
@endsection

@section('content')
<section class="login">
<form action="user.html" class="login-form">
    <div class="login-group">
        <label for="email">Ingrese su correo</label>
        <input type="email" name="email" id="email">
    </div>
    <div class="login-group">
        <label for="pass">Ingrese su contraseña</label>
        <input type="password" name="pass" id="pass">
    </div>
    <a href="#">¿Olvidaste tu contraseña?</a>
    <a href="/registrar"><strong>Quiero crear una cuenta</strong></a>
    <input type="submit" value="Iniciar Sesión">
</form>
</section>
</body>
</html>
@endsection

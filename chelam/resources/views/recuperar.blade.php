@extends('header')
@section('title', 'Recuperar contraseña')
@section('page-css')
<link rel="stylesheet" href="css/recuperar-styles.css">
@endsection

@section('content')
<form action="" class="recuperar">
    <h1>Recuperar contraseña</h1>
    <p>Introduce el correo con el que te registraste</p>
    <input type="email" id="user" name="user" autofocus>
    <input type="submit" value="Recuperar contraseña">
</form>
<p class="message">No se ha encontrado el correo || Se ha enviado la contraseña a tu correo.</p>
@endsection

@include('header-start')
    <link rel="stylesheet" href="css/registro-styles.css">
    <link rel="stylesheet" href="css/registro-queries.css">
@include('header-end')
<section class="to-login">
        <h2>¿Ya tienes una cuenta?</h2>
        <p>No esperes más, <a href="/login">Inicia tu sesión aquí</a>.</p>
    </section>
    <section class="register">
        <form action="user.html" class="register-form">
            <div class="register-group">
                <label for="user">Ingrese un nombre de usuario</label>
                <input type="text" name="user" id="user">
            </div>
            <div class="register-group">
                <label for="email">Ingrese su correo</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="register-group">
                <label for="pass">Ingrese su contraseña</label>
                <input type="password" name="pass" id="pass">
            </div>
            <div class="register-group">
                <label for="pass2">Repita su contraseña</label>
                <input type="password" name="pass2" id="pass2">
            </div>
            <input type="submit" value="Crear cuenta">
        </form>
    </section>
</body>
</html>

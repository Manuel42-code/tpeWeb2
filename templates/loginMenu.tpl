{include file='templates/header.tpl'}


<h1>No tenes un usuario?</h1>
<a href=registrarUsuario>Registrarse</a>

<form action="ingreso" method="POST">
    <input type="text" name="usuario" placeholder="usuario"></input>
    <input type="password" name="contrasenia" placeholder="constraseña"></input>
    <input type="submit" value="Ingresar"></input>
</form>

<h2 class="error">{$error}</h2>


{include file='templates/footer.tpl'}
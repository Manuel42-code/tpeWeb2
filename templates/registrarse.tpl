{include file='templates/header.tpl'}


<h1>Crea tu usuario</h1>

<form action="registrarse" method="POST">
    <input type="text" name="usuario" placeholder="usuario"></input>
    <input type="password" name="contrasenia" placeholder="constraseña"></input>
    <input type="submit" value="registrarse"></input>
</form>


{include file='templates/footer.tpl'}
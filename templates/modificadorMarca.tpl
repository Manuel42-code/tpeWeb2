{include file='templates/header.tpl'}


<form action="modificarDatos/{$corredor->id_Piloto}" method="POST">
    <input type="text" name="nombre" placeholder="{$corredor->nombre}">
    <input type="text" name="apellido" placeholder="{$corredor->apellido}">
        <select name="marca">
            <option value="buick">Buick</option>
            <option value="chevrolet">Chevrolet</option>
            <option value="Ford">Ford</option>
            <option value="Oldsmobile">Oldsmobile</option>
            <option value="Pontiac">Pontiac</option>
        </select>
    <input type="text" name="img" placeholder="{$corredor->img}">
    <input type="number" name="numero" placeholder="{$corredor->numero}">
    <input type="number" name="cantCarreras" placeholder="{$corredor->cantCarreras}">
    <input type="number" name="poles" placeholder="{$corredor->poles}">
    <input type="number" name="ganadas" placeholder="{$corredor->ganadas}">
    <input type="submit" value="modificarDatos">
</form>

{include file='templates/footer.tpl'}
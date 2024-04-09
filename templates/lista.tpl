{include file='templates/header.tpl'}

{if $logueado == false}
<a href=ingresar>Ingresar</a>
{else}
 <a href=logout>Salir</a>
{/if}

{if $rol == "admin"}
<a href=usersList>Listar usuarios</a>
{/if}

<h1>{$titulo}</h1>

<a href=listaMarcas>Listar marcas que corrieron en la temporada</a>

    <table>
    <tr>
        <td>marca</td>
        <td>piloto</td>
        <td>numero</td>
    </tr>
        {foreach from=$corredores item=$corredor}
        <tr>
            
                <td><a href=verMarca/{$corredor->id_marca}>{$corredor->marca}</a></td>  
                <td><a href=verCorredor/{$corredor->id_Piloto}>{$corredor->nombre} {$corredor->apellido}</a></td> 
                <td>{$corredor->numero}</td> 

                {if $logueado == true && $rol == "admin"}
                    <td><a href=borrarCorredor/{$corredor->id_Piloto}>borrar</a></td>
                    <td><a href=modificarCorredor/{$corredor->id_Piloto}>modificar</a></td>
                {/if}

            </tr>
        {/foreach}
    </table>

{if $logueado==true && $rol==admin}
<h1>Agregar Corredor</h1>
<form action="agregarCorredor" method="POST">
    <input type="text" name="nombre" placeholder="nombre">
    <input type="text" name="apellido" placeholder="apellido">
        <select name="marca">
            <option></option>
            <option value="buick">Buick</option>
            <option value="chevrolet">Chevrolet</option>
            <option value="Ford">Ford</option>
            <option value="Oldsmobile">Oldsmobile</option>
            <option value="Pontiac">Pontiac</option>
        </select>
    <input type="text" name="img" placeholder="img">
    <input type="number" name="numero" placeholder="numero">
    <input type="number" name="cantCarreras" placeholder="cant. Carreras">
    <input type="number" name="poles" placeholder="poles">
    <input type="number" name="ganadas" placeholder="carreras ganadas">
    <input type="submit" value="agregarCorredor">
</form>
{/if}



{include file='templates/footer.tpl'}
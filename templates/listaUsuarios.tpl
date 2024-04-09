{include file='templates/header.tpl'}

<a href=home>Inicio</a>

<h1>{$titulo}</h1>

    <table class="tabla">
        {foreach from=$usuarios item=$usuario}
        {if $usuario->rol == "no-admin"}
        <tr>
            <td>
            {$usuario->nombre} - {$usuario->rol} - <a href=hacerAdmin/{$usuario->id_usuario}>Volver admin</a> - <a href=borrarUsuario/{$usuario->id_usuario}>Eliminar</a>
            </td>  
        </tr>
        {/if}
        {/foreach}
    </table>



{include file='templates/footer.tpl'}
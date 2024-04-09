{include file='templates/header.tpl'}



<h1>{$titulo}</h1>

    <table class="tabla">
    <tr>
        <td>logo</td>
        <td>marca</td>
    </tr>
        {foreach from=$marcas item=$marca}
        <tr>
            <td>{html_image file="{$marca->img}" width=300 height=250}</td> 
            <td><a href=verMarca/{$marca->id_marca}>{$marca->marca}</a></td>  
        </tr>
        {/foreach}
    </table>



{include file='templates/footer.tpl'}
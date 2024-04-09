{include file='header.tpl'}
<h1>{$titulo} {$marca->marca}<h1>

<table class="tabla">
    <tr>
        <td>Logo</td>
        <td>Marca</td>
        <td>Carreras ganadas</td>
    </tr>
    
    <tr>
        <td>{html_image file="{$marca->img}" width=300 height=250} </td>  
        <td>{$marca->marca}</td> 
        <td>{$marca->triunfos}</td>
    </tr>
</table>


<h2>{$subtitulo} {$marca->marca}</h2>
<table class="tabla">
    {foreach from=$corredores item=$corredor}
        <tr>
            <td><a href=verCorredor/{$corredor->id_Piloto}>{$corredor->nombre} {$corredor->apellido}</a></td> 
            <td>{$corredor->numero}</td>
            <td>{html_image file="{$corredor->img}" width=500 height=400} </td>  
        </tr>
        {/foreach}
</table>

    
{include file='footer.tpl'}
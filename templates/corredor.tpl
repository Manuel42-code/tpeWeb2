{include file='header.tpl'}
<h1>{$titulo} {$corredor->nombre} {$corredor->apellido}<h1>

<table class='tabla'>
    <tr>
        <td>Marca</td>
        <td>Numero</td>
        <td>Carreras corridas</td>
        <td>Poles</td>
        <td>Carreras ganadas</td>
    </tr>
    
    <tr>
        <td><a href=verCorredor/{$corredor->id_marca}>{$corredor->marca}</a></td>  
        <td>{$corredor->numero}</td> 
        <td>{$corredor->cantCarreras}</td> 
        <td>{$corredor->poles}</td> 
        <td>{$corredor->ganadas}</td>
    </tr>
    </table>

    {html_image file="{$corredor->img}" width=900 height=500} 

    <h1>Comentarios</h1>
    <div id='tabla-comentarios' data-id="{$corredor->id_Piloto}" {if $logueado == true} data-rol="{$rol}" {/if}>
    </div>

{if $rol}
    <div>
    <h1>Deja tu Comentario!</h1>
        <from>
            <input type="text" id="id_Piloto" hidden value="{$corredor->id_Piloto}">
            <input type="text" id="userId" hidden value="{$id_usuario}">
            <input type="text" id="comentario" placeholder="Escribi tu comentario">
            <input type="number" id="puntaje" placeholder="puntaje">
            <button id="btnComentar">Comentar</button>
        </from>
    </div>
    <div class="">
    <h2> Ordenar Comentarios </h2>
        <div class="ordenar">
            <button class="btnOrden" data-criterio="puntaje" data-orden="asc"> Ordenar Comentarios por Puntaje Ascendente</button>
            <button class="btnOrden" data-criterio="puntaje" data-orden="desc"> Ordenar Comentarios por Puntaje Descendente</button>
            <button class="btnOrden" data-criterio="fecha" data-orden="asc"> Ordenar Comentarios por Fecha Ascendente</button>
            <button class="btnOrden" data-criterio="fecha" data-orden="desc"> Ordenar Comentarios por Fecha Descendente</button>
        </div>
    </div>
    <div class=" filtro">
    <h3> Filtrar comentarios por puntaje </h3>
    <form>
        <label> Mostrar comentarios con puntaje =  </label>
            <input id="puntajeFiltro" type="number" min="1" max ="5" >
            <input id="filtrarPorPuntaje" type="submit" class="btn btn-secondary" >
    </form>
    </div>
{/if}

<script src="js/java.js"></script>
{include file='footer.tpl'}
<?php
/* Smarty version 4.3.1, created on 2024-04-02 15:35:31
  from 'C:\xampp\htdocs\WEB2\TPE copy\templates\corredor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_660c09a3bd6998_27610391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4c10f49a95f29250d5f18db59e9c51735507b01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE copy\\templates\\corredor.tpl',
      1 => 1712063043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_660c09a3bd6998_27610391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\WEB2\\TPEcopy\\libs\\smarty-4.3.1\\libs\\plugins\\function.html_image.php','function'=>'smarty_function_html_image',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['corredor']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['corredor']->value->apellido;?>
<h1>

<table class='tabla'>
    <tr>
        <td>Marca</td>
        <td>Numero</td>
        <td>Carreras corridas</td>
        <td>Poles</td>
        <td>Carreras ganadas</td>
    </tr>
    
    <tr>
        <td><a href=verCorredor/<?php echo $_smarty_tpl->tpl_vars['corredor']->value->id_marca;?>
><?php echo $_smarty_tpl->tpl_vars['corredor']->value->marca;?>
</a></td>  
        <td><?php echo $_smarty_tpl->tpl_vars['corredor']->value->numero;?>
</td> 
        <td><?php echo $_smarty_tpl->tpl_vars['corredor']->value->cantCarreras;?>
</td> 
        <td><?php echo $_smarty_tpl->tpl_vars['corredor']->value->poles;?>
</td> 
        <td><?php echo $_smarty_tpl->tpl_vars['corredor']->value->ganadas;?>
</td>
    </tr>
    </table>

    <?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['corredor']->value->img),'width'=>900,'height'=>500),$_smarty_tpl);?>
 

    <h1>Comentarios</h1>
    <div id='tabla-comentarios' data-id="<?php echo $_smarty_tpl->tpl_vars['corredor']->value->id_Piloto;?>
" <?php if ($_smarty_tpl->tpl_vars['logueado']->value == true) {?> data-rol="<?php echo $_smarty_tpl->tpl_vars['rol']->value;?>
" <?php }?>>
    </div>

<?php if ($_smarty_tpl->tpl_vars['rol']->value) {?>
    <div>
    <h1>Deja tu Comentario!</h1>
        <from>
            <input type="text" id="id_Piloto" hidden value="<?php echo $_smarty_tpl->tpl_vars['corredor']->value->id_Piloto;?>
">
            <input type="text" id="userId" hidden value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
">
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
<?php }?>

<?php echo '<script'; ?>
 src="js/java.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

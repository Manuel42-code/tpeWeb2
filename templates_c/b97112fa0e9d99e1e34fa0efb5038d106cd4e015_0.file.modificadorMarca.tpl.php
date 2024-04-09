<?php
/* Smarty version 4.3.1, created on 2024-02-26 04:38:21
  from 'C:\xampp\htdocs\WEB2\TPE copy\templates\modificadorMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dc07adc63f00_60603126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b97112fa0e9d99e1e34fa0efb5038d106cd4e015' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE copy\\templates\\modificadorMarca.tpl',
      1 => 1707793541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_65dc07adc63f00_60603126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="modificarDatos/<?php echo $_smarty_tpl->tpl_vars['corredor']->value->id_Piloto;?>
" method="POST">
    <input type="text" name="nombre" placeholder="<?php echo $_smarty_tpl->tpl_vars['corredor']->value->nombre;?>
">
    <input type="text" name="apellido" placeholder="<?php echo $_smarty_tpl->tpl_vars['corredor']->value->apellido;?>
">
        <select name="marca">
            <option value="buick">Buick</option>
            <option value="chevrolet">Chevrolet</option>
            <option value="Ford">Ford</option>
            <option value="Oldsmobile">Oldsmobile</option>
            <option value="Pontiac">Pontiac</option>
        </select>
    <input type="text" name="img" placeholder="<?php echo $_smarty_tpl->tpl_vars['corredor']->value->img;?>
">
    <input type="number" name="numero" placeholder="<?php echo $_smarty_tpl->tpl_vars['corredor']->value->numero;?>
">
    <input type="number" name="cantCarreras" placeholder="<?php echo $_smarty_tpl->tpl_vars['corredor']->value->cantCarreras;?>
">
    <input type="number" name="poles" placeholder="<?php echo $_smarty_tpl->tpl_vars['corredor']->value->poles;?>
">
    <input type="number" name="ganadas" placeholder="<?php echo $_smarty_tpl->tpl_vars['corredor']->value->ganadas;?>
">
    <input type="submit" value="modificarDatos">
</form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

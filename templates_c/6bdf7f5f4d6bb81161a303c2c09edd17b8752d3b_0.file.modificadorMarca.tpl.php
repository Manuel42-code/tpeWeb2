<?php
/* Smarty version 4.3.1, created on 2024-02-13 04:05:49
  from 'C:\xampp\htdocs\WEB2\TPE\templates\modificadorMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65cadc8d0500d0_38776050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bdf7f5f4d6bb81161a303c2c09edd17b8752d3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\modificadorMarca.tpl',
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
function content_65cadc8d0500d0_38776050 (Smarty_Internal_Template $_smarty_tpl) {
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

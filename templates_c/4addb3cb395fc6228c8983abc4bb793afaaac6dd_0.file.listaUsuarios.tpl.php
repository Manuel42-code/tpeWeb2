<?php
/* Smarty version 4.3.1, created on 2024-02-26 02:06:10
  from 'C:\xampp\htdocs\WEB2\TPE copy\templates\listaUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dbe4025eef68_33127881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4addb3cb395fc6228c8983abc4bb793afaaac6dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE copy\\templates\\listaUsuarios.tpl',
      1 => 1708909567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_65dbe4025eef68_33127881 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a href=home>Inicio</a>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

    <table class="tabla">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['usuario']->value->rol == "no-admin") {?>
        <tr>
            <td>
            <?php echo $_smarty_tpl->tpl_vars['usuario']->value->nombre;?>
 - <?php echo $_smarty_tpl->tpl_vars['usuario']->value->rol;?>
 - <a href=hacerAdmin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
>Volver admin</a> - <a href=borrarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
>Eliminar</a>
            </td>  
        </tr>
        <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>



<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 4.3.1, created on 2024-02-25 01:07:33
  from 'C:\xampp\htdocs\WEB2\TPE copy\templates\loginMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65da84c571c492_47486084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f6834543f8c0b3e215fab6eaa4c54832f599273' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE copy\\templates\\loginMenu.tpl',
      1 => 1708819622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_65da84c571c492_47486084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1>No tenes un usuario?</h1>
<a href=registrarUsuario>Registrarse</a>

<form action="ingreso" method="POST">
    <input type="text" name="usuario" placeholder="usuario"></input>
    <input type="password" name="contrasenia" placeholder="constraseña"></input>
    <input type="submit" value="Ingresar"></input>
</form>

<h2 class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h2>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

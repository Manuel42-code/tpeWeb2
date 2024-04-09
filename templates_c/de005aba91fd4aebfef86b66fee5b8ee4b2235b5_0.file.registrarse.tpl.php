<?php
/* Smarty version 4.3.1, created on 2024-02-25 01:07:34
  from 'C:\xampp\htdocs\WEB2\TPE copy\templates\registrarse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65da84c67e0d51_15918887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de005aba91fd4aebfef86b66fee5b8ee4b2235b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE copy\\templates\\registrarse.tpl',
      1 => 1708819199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_65da84c67e0d51_15918887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1>Crea tu usuario</h1>

<form action="registrarse" method="POST">
    <input type="text" name="usuario" placeholder="usuario"></input>
    <input type="password" name="contrasenia" placeholder="constraseña"></input>
    <input type="submit" value="registrarse"></input>
</form>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 4.3.1, created on 2024-02-26 04:37:09
  from 'C:\xampp\htdocs\WEB2\TPE copy\templates\listaMarcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dc07656fcaa9_52548202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '698837e1f1bd19d2f9194b648ff979b929d87363' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE copy\\templates\\listaMarcas.tpl',
      1 => 1707795681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_65dc07656fcaa9_52548202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\WEB2\\TPEcopy\\libs\\smarty-4.3.1\\libs\\plugins\\function.html_image.php','function'=>'smarty_function_html_image',),));
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

    <table class="tabla">
    <tr>
        <td>logo</td>
        <td>marca</td>
    </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
        <tr>
            <td><?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['marca']->value->img),'width'=>300,'height'=>250),$_smarty_tpl);?>
</td> 
            <td><a href=verMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
><?php echo $_smarty_tpl->tpl_vars['marca']->value->marca;?>
</a></td>  
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>



<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 4.3.1, created on 2024-02-12 21:35:35
  from 'C:\xampp\htdocs\WEB2\TPE\templates\corredor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65ca8117afccd2_37390013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b9646294d2a7a15cb2d935dde39a7c1e7102436' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE\\templates\\corredor.tpl',
      1 => 1707748904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65ca8117afccd2_37390013 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\WEB2\\TPE\\libs\\smarty-4.3.1\\libs\\plugins\\function.html_image.php','function'=>'smarty_function_html_image',),));
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

    <?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['corredor']->value->img),'width'=>800,'height'=>500),$_smarty_tpl);?>
 
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 4.3.1, created on 2024-02-26 04:36:35
  from 'C:\xampp\htdocs\WEB2\TPE copy\templates\marca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dc07432dc817_17004846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7402c1f6f909a04482964516bbf3ed966fcf6e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE copy\\templates\\marca.tpl',
      1 => 1707795949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65dc07432dc817_17004846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\WEB2\\TPEcopy\\libs\\smarty-4.3.1\\libs\\plugins\\function.html_image.php','function'=>'smarty_function_html_image',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['marca']->value->marca;?>
<h1>

<table class="tabla">
    <tr>
        <td>Logo</td>
        <td>Marca</td>
        <td>Carreras ganadas</td>
    </tr>
    
    <tr>
        <td><?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['marca']->value->img),'width'=>300,'height'=>250),$_smarty_tpl);?>
 </td>  
        <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->marca;?>
</td> 
        <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->triunfos;?>
</td>
    </tr>
</table>


<h2><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['marca']->value->marca;?>
</h2>
<table class="tabla">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['corredores']->value, 'corredor');
$_smarty_tpl->tpl_vars['corredor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['corredor']->value) {
$_smarty_tpl->tpl_vars['corredor']->do_else = false;
?>
        <tr>
            <td><a href=verCorredor/<?php echo $_smarty_tpl->tpl_vars['corredor']->value->id_Piloto;?>
><?php echo $_smarty_tpl->tpl_vars['corredor']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['corredor']->value->apellido;?>
</a></td> 
            <td><?php echo $_smarty_tpl->tpl_vars['corredor']->value->numero;?>
</td>
            <td><?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['corredor']->value->img),'width'=>500,'height'=>400),$_smarty_tpl);?>
 </td>  
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

    
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

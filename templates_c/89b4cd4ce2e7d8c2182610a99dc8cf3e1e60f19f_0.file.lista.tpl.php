<?php
/* Smarty version 4.3.1, created on 2024-03-25 20:39:48
  from 'C:\xampp\htdocs\WEB2\TPE copy\templates\lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6601d304a0cfa0_94468721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89b4cd4ce2e7d8c2182610a99dc8cf3e1e60f19f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE copy\\templates\\lista.tpl',
      1 => 1711395580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6601d304a0cfa0_94468721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['logueado']->value == false) {?>
<a href=ingresar>Ingresar</a>
<?php } else { ?>
 <a href=logout>Salir</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['rol']->value == "admin") {?>
<a href=usersList>Listar usuarios</a>
<?php }?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<a href=listaMarcas>Listar marcas que corrieron en la temporada</a>

    <table>
    <tr>
        <td>marca</td>
        <td>piloto</td>
        <td>numero</td>
    </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['corredores']->value, 'corredor');
$_smarty_tpl->tpl_vars['corredor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['corredor']->value) {
$_smarty_tpl->tpl_vars['corredor']->do_else = false;
?>
        <tr>
            
                <td><a href=verMarca/<?php echo $_smarty_tpl->tpl_vars['corredor']->value->id_marca;?>
><?php echo $_smarty_tpl->tpl_vars['corredor']->value->marca;?>
</a></td>  
                <td><a href=verCorredor/<?php echo $_smarty_tpl->tpl_vars['corredor']->value->id_Piloto;?>
><?php echo $_smarty_tpl->tpl_vars['corredor']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['corredor']->value->apellido;?>
</a></td> 
                <td><?php echo $_smarty_tpl->tpl_vars['corredor']->value->numero;?>
</td> 

                <?php if ($_smarty_tpl->tpl_vars['logueado']->value == true && $_smarty_tpl->tpl_vars['rol']->value == "admin") {?>
                    <td><a href=borrarCorredor/<?php echo $_smarty_tpl->tpl_vars['corredor']->value->id_Piloto;?>
>borrar</a></td>
                    <td><a href=modificarCorredor/<?php echo $_smarty_tpl->tpl_vars['corredor']->value->id_Piloto;?>
>modificar</a></td>
                <?php }?>

            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>

<?php if ($_smarty_tpl->tpl_vars['logueado']->value == true && $_smarty_tpl->tpl_vars['rol']->value == 'admin') {?>
<h1>Agregar Corredor</h1>
<form action="agregarCorredor" method="POST">
    <input type="text" name="nombre" placeholder="nombre">
    <input type="text" name="apellido" placeholder="apellido">
        <select name="marca">
            <option></option>
            <option value="buick">Buick</option>
            <option value="chevrolet">Chevrolet</option>
            <option value="Ford">Ford</option>
            <option value="Oldsmobile">Oldsmobile</option>
            <option value="Pontiac">Pontiac</option>
        </select>
    <input type="text" name="img" placeholder="img">
    <input type="number" name="numero" placeholder="numero">
    <input type="number" name="cantCarreras" placeholder="cant. Carreras">
    <input type="number" name="poles" placeholder="poles">
    <input type="number" name="ganadas" placeholder="carreras ganadas">
    <input type="submit" value="agregarCorredor">
</form>
<?php }?>



<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

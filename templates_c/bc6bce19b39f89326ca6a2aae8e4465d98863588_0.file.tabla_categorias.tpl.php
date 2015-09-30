<?php /* Smarty version 3.1.27, created on 2015-09-30 18:27:31
         compiled from "/opt/lampp/htdocs/datacom/templates/tabla_categorias.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1249600535560c0d734b5c04_07859113%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc6bce19b39f89326ca6a2aae8e4465d98863588' => 
    array (
      0 => '/opt/lampp/htdocs/datacom/templates/tabla_categorias.tpl',
      1 => 1443629965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1249600535560c0d734b5c04_07859113',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560c0d73578285_63379553',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c0d73578285_63379553')) {
function content_560c0d73578285_63379553 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1249600535560c0d734b5c04_07859113';
?>
<h6>Tabla de Categorias</h6>
<table class="table">
    <thead>
      	<tr>
        	<th>Id Categoria</th>
        	<th>Nombre Categoria</th>
      	</tr>
		</thead>
    <tbody>
    	<?php if (!empty($_smarty_tpl->tpl_vars['categorias']->value)) {?>
    	<?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['categoria']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
$foreach_categoria_Sav = $_smarty_tpl->tpl_vars['categoria'];
?>
    		<tr>
    			<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
</td>
    			<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre_categoria'];?>
</td>
    		</tr>
    	<?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}
?>
    	<?php } else { ?>
    		<tr>
    			<td>No existe</td>
    			<td>No existe</td>
    		</tr>
    	<?php }?>
    </tbody>
</table><?php }
}
?>
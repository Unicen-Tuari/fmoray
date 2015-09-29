<?php /* Smarty version 3.1.27, created on 2015-09-29 10:33:31
         compiled from "/opt/lampp/htdocs/datacom/templates/productos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:710618496560a4cdba83039_76461618%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5995d1ae1e01998b1c27fe67a1027198f6ab35be' => 
    array (
      0 => '/opt/lampp/htdocs/datacom/templates/productos.tpl',
      1 => 1443515607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '710618496560a4cdba83039_76461618',
  'variables' => 
  array (
    'productos' => 0,
    'producto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560a4cdbb4dcf0_61065233',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560a4cdbb4dcf0_61065233')) {
function content_560a4cdbb4dcf0_61065233 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '710618496560a4cdba83039_76461618';
?>
<div class="col-lg-3 col-md-3 col-sm-12 textos">
	<h1>Productos</h1>
	<ul>
		<li><a href="#">Componentes para Computadoras</a></li><br />
		<ul>
			<li><a href="#">Mouse</a></li>
			<li><a href="#">Parlantes</a></li>
			<li><a href="#">Teclados</a></li>
		</ul><br />
		<li><a href="#">Equipos de Escritorio</a></li><br />
		<li><a href="#">Equipos Portatiles</a></li><br />
		<li><a href="#">Impresoras</a></li><br />
		<li><a href="#">Memoria y Almacenamiento</a></li><br />
		<li><a href="#">Redes y Comunicaciones</a></li>
		
	</ul>
</div>
<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 textos alto">
	<?php if (!empty($_smarty_tpl->tpl_vars['productos']->value)) {?>
	<?php
$_from = $_smarty_tpl->tpl_vars['productos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['producto']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->_loop = true;
$foreach_producto_Sav = $_smarty_tpl->tpl_vars['producto'];
?>
	<div class="productos_lista">
		<div>
			<div>
				<h5><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombreCategoria'];?>
</h5>
				<span class="btnProducto"><img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value['ruta_imagen'];?>
" alt=""></span>
				<h5><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</h5>
				<p><span class="resaltar">$<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</span><br />o 10 cuotas de <span class="resaltar">$<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio']/10;?>
</span></p>
				<button class="btn btn-default btnProducto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">Mas...</button>
			</div>
		</div>
	</div>
	<?php
$_smarty_tpl->tpl_vars['producto'] = $foreach_producto_Sav;
}
?>
	<?php }?>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content  textmodal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Tu comentario nos interesa</h4>
			</div>
			<div class="modal-body">
				<form>
					<div>
						<label>Tu nombre:</label><br />
						<input class="input long" name="name" type="text" value=""/><br /><br />
						<label>Tu email:</label><br />
						<input class="input long" name="email" type="text" value=""/><br /><br />
						<label>Razon:</label><br /><br />
						<input type="radio" name="razon" value="presupuesto">Presupuesto<br />
						<input type="radio" name="razon" value="reparacion">Reparacion<br />
						<input type="radio" name="razon" value="servicio">Servicio<br />
						<input type="radio" name="razon" value="presupuesto">Observación<br />
						<input type="radio" name="razon" value="queja">Queja<br /><br />
						<label>Comentario:</label><br />
						<textarea class="long"name="comentario" id="" cols="52" rows="10"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
				<button type="button" class="btn btn-default">Enviar Comentario</button>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 src="js/prod.js"><?php echo '</script'; ?>
><?php }
}
?>
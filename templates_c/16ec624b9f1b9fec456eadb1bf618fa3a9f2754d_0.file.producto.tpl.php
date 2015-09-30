<?php /* Smarty version 3.1.27, created on 2015-09-30 21:34:57
         compiled from "/opt/lampp/htdocs/datacom/templates/producto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1760252936560c3961745e95_59612131%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16ec624b9f1b9fec456eadb1bf618fa3a9f2754d' => 
    array (
      0 => '/opt/lampp/htdocs/datacom/templates/producto.tpl',
      1 => 1443641693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1760252936560c3961745e95_59612131',
  'variables' => 
  array (
    'producto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560c396181d7f7_58663856',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c396181d7f7_58663856')) {
function content_560c396181d7f7_58663856 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/opt/lampp/htdocs/datacom/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '1760252936560c3961745e95_59612131';
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 infoProducto detalles">
	<?php if (!empty($_smarty_tpl->tpl_vars['producto']->value)) {?>
		<h1><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombreCategoria'];?>
</h1>
		<div><img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value['ruta_imagen'];?>
" alt=""></div>
		<h2><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</h2>
		<p><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</p>
		<h2>Precio:</h2>
		<p><span class="resaltar">$<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</span><br />o 12 cuotas de <span class="resaltar">$<?php echo smarty_modifier_truncate(($_smarty_tpl->tpl_vars['producto']->value['precio']/12),5,'');?>
</span></p>
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
</div><?php }
}
?>
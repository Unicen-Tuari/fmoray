<?php /* Smarty version 3.1.27, created on 2015-09-27 17:02:33
         compiled from "/opt/lampp/htdocs/datacom/templates/cartuchos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:144972435956080509e3cee6_67944395%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60867aea24c2cb230b5c5b055f3d6593b96ca09c' => 
    array (
      0 => '/opt/lampp/htdocs/datacom/templates/cartuchos.tpl',
      1 => 1434608539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144972435956080509e3cee6_67944395',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56080509efc7b2_36852815',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56080509efc7b2_36852815')) {
function content_56080509efc7b2_36852815 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '144972435956080509e3cee6_67944395';
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 textos detalles">
	<h1>Recarga de Cartuchos</h1>
	<div><img src="img/cartuchos.jpg" alt=""></div>
	<p>Recarga de toner, Cartuchos Alternativos HP y Epson, Cartuchos genericos, Toner Alternativos HP y Samsung, recarga de cartuchos originales.</p>
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
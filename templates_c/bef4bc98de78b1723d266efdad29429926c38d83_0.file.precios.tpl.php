<?php /* Smarty version 3.1.27, created on 2015-09-30 22:04:32
         compiled from "/opt/lampp/htdocs/datacom/templates/precios.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1047060047560c40507ccc59_94118297%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bef4bc98de78b1723d266efdad29429926c38d83' => 
    array (
      0 => '/opt/lampp/htdocs/datacom/templates/precios.tpl',
      1 => 1435178921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1047060047560c40507ccc59_94118297',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560c4050855c47_25980589',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c4050855c47_25980589')) {
function content_560c4050855c47_25980589 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1047060047560c40507ccc59_94118297';
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 textos detalles">
  	<h1>Lista de Precios</h1>
	<div><img src="img/precios.jpg" alt=""></div>
	<table class="table table-bordered table-responsive">
		<thead class="colorTabla">
			<tr class="centrar">
				<th >Producto</th>
				<th >Proceso</th>
				<th >Precio</th>
			</tr>
		</thead>
		<tbody id="infoTabla">
			
		</tbody>
		<tfoot class="colorTabla">
			<tr>
				<td><input id="producto" type="text" class="form-control" placeholder="Ingrese producto..."></td>
				<td><input id="proceso" type="text" class="form-control" placeholder="Ingrese proceso..."></td>
				<td><input id="precio" type="text" class="form-control" placeholder="Ingrese precio..."></td>
			</tr>
		</tfoot>
	</table>
	<form name="formPass">
		<input name="password" id="password" type="text" class="form-control" placeholder="Ingrese contraseña...">
		<button id="btnAgregar"type="button" class="btn btn-default" >Agregar</button>
	</form>
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
 src="js/main.js"><?php echo '</script'; ?>
><?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2015-09-26 00:38:09
         compiled from "/opt/lampp/htdocs/datacom/templates/soporte.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15233090685605ccd1598014_25656140%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acb91552f477226f19b480dd90c6236b30f39256' => 
    array (
      0 => '/opt/lampp/htdocs/datacom/templates/soporte.tpl',
      1 => 1435165405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15233090685605ccd1598014_25656140',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5605ccd168dab0_94471568',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5605ccd168dab0_94471568')) {
function content_5605ccd168dab0_94471568 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15233090685605ccd1598014_25656140';
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 textos detalles">
	<h1>Soporte tecnico y reparacion de computadoras personales, notebooks, tablets, impresoras</h1>
	<div><img src="img/mantenimiento.png" alt=""></div>
	<p>El analisis que se realiza para determinar el estado y la situacion de los equipos informaticos es realizado por tecnicos profesionales con mas de 15 años de experiencia. Los mismos realizan una serie de tests de bajo nivel sobre cada uno de los componentes y generan un informe con el resultado de todas las pruebas efectuadas. <span>En DATACOM realizamos tu diagnostico sin cargo.</span></p>
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
</div>			<?php }
}
?>
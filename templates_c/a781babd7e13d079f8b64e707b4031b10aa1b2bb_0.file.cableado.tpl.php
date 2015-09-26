<?php /* Smarty version 3.1.27, created on 2015-09-26 04:22:29
         compiled from "/opt/lampp/htdocs/datacom/templates/cableado.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1141983031560601658487a5_60771471%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a781babd7e13d079f8b64e707b4031b10aa1b2bb' => 
    array (
      0 => '/opt/lampp/htdocs/datacom/templates/cableado.tpl',
      1 => 1434608357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1141983031560601658487a5_60771471',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560601658fc273_99170714',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560601658fc273_99170714')) {
function content_560601658fc273_99170714 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1141983031560601658487a5_60771471';
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 textos detalles">
	<h1>Cableado e Instalacion de redes lan/wifi</h1>
	<div><img src="img/network.jpg" alt=""></div>
	<p>Le ofrecemos soluciones adaptadas a sus necesidades. Entre nuestras principales soluciones profesionales ofrecemos la logística, análisis e implementación de Redes Corporativas, Redes de Área Local (LAN), Redes Inalámbricas (Wireless) y las infraestructuras necesarias para configurar Redes Privadas Virtuales (VPN) en las empresas. Con las máximas garantías.</p>
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
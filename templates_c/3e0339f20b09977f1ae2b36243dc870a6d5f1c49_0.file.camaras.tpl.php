<?php /* Smarty version 3.1.27, created on 2015-09-27 17:02:33
         compiled from "/opt/lampp/htdocs/datacom/templates/camaras.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:574814322560805092c5184_04838199%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e0339f20b09977f1ae2b36243dc870a6d5f1c49' => 
    array (
      0 => '/opt/lampp/htdocs/datacom/templates/camaras.tpl',
      1 => 1434608480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '574814322560805092c5184_04838199',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5608050957a084_92777859',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5608050957a084_92777859')) {
function content_5608050957a084_92777859 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '574814322560805092c5184_04838199';
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 textos detalles">
	<h1>Reparacion de camaras digitales</h1>
	<div><img src="img/camaras.jpg" alt=""></div>
	<p>En DATACOM reparamos tu cámara digital compacta, cámara reflex, y GPS. Utilizamos solo repuestos originales y de calidad.
	Tratamos tu equipo como propio trabajando de manera profesional, para entregarte tu equipo como nuevo! en menor tiempo y al mejor costo.
	REPARAMOS TODAS LAS MARCAS</p>
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
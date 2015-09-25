<?php /* Smarty version 3.1.27, created on 2015-09-25 22:25:58
         compiled from "/opt/lampp/htdocs/datacom/templates/admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6881980205605add6e64c80_85632283%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae1a3e15c244a06bec3c01ab9545043a105c6cb3' => 
    array (
      0 => '/opt/lampp/htdocs/datacom/templates/admin.tpl',
      1 => 1443212586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6881980205605add6e64c80_85632283',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5605add6f1baf6_93503513',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5605add6f1baf6_93503513')) {
function content_5605add6f1baf6_93503513 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6881980205605add6e64c80_85632283';
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 textos detalles">
	<h1>Administrador</h1>
	<div class="table-responsive tope">
		<h6>Tabla de Productos</h6>
		<table class="table">
		    <thead>
		      <tr>
		         <th>Id Producto</th>
		         <th>Id Categoria</th>
		         <th>Descripcion</th>
		         <th>Precio</th>
		         <th>Ruta Imagen</th>
		      </tr>
   			</thead>
		    <tbody>
		      <tr>
		         <td>Tanmay</td>
		         <td>Bangalore</td>
		         <td>Tanmay</td>
		         <td>Bangalore</td>
		         <td>Tanmay</td>
		      </tr>
		      <tr>
		         <td>Mumbai</td>
		         <td>Sachin</td>
		         <td>Mumbai</td>
		         <td>Sachin</td>
		         <td>Mumbai</td>
		      </tr>
		    </tbody>
		</table>
	</div>
	<div class="table-responsive tope">
		<h6>Tabla de Categorias</h6>
		<table class="table">
		    <thead>
		      	<tr>
		        	<th>Id Categoria</th>
		        	<th>Nombre Categoria</th>
		      	</tr>
   			</thead>
		    <tbody>
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
		    </tbody>
		</table>
	</div>
	<div class="bordes col-lg-7">
		<h6>Agregar Producto</h6>
		<label>Categoria:</label>
		<select id="tinta" name="tinta">
		   <option value="1"> Elige un Color </option>
		       <optgroup label="Primarios">
		       <option onclick="amarillo()">Amarillo</option>
		       <option onclick="azul()">Azul</option>
		       <option onclick="rojo()">Rojo</option>
		   </optgroup>
		   <optgroup label="Secundarios">
		       <option onclick="naranja()">Naranja</option>
		       <option onclick="verde()">Verde</option>
		       <option onclick="violeta()">Violeta</option>
		   </optgroup>
		</select>
		<label>Descripcion:</label>
		<textarea rows="3" cols="20"></textarea></br>
		<label>Precio:</label>
		<input type="text" size="5"></br>
		<label>Ruta Imagen:</label>
		<input type="file"></br>
		<input type="button" value="Agregar">
	</div>
	<form action="index.php?action=categoriaNueva" method="POST" enctype="multipart/form-data">
		<div class="form-group bordes col-lg-4">
			<h6>Agregar Categoria</h6>
			<label for="categoria">Nombre Categoria:</label>
			<input class="form-control" type="text" id="categoria" name="categoria" size="7" placeholder="Categoria">
			<input type="submit" value="Agregar">
		</div>
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
</div><?php }
}
?>
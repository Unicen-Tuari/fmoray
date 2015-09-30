<?php /* Smarty version 3.1.27, created on 2015-09-30 19:42:03
         compiled from "/opt/lampp/htdocs/datacom/templates/admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:923768500560c1eebcb6313_28827586%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae1a3e15c244a06bec3c01ab9545043a105c6cb3' => 
    array (
      0 => '/opt/lampp/htdocs/datacom/templates/admin.tpl',
      1 => 1443634559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '923768500560c1eebcb6313_28827586',
  'variables' => 
  array (
    'productos' => 0,
    'producto' => 0,
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560c1eebde9eb0_11489991',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c1eebde9eb0_11489991')) {
function content_560c1eebde9eb0_11489991 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '923768500560c1eebcb6313_28827586';
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 textos detalles">
	<h1>Administrador</h1>
	<div id="tabla_productos" class="table-responsive tope">
		<h6>Tabla de Productos</h6>
		<table class="table">
		    <thead>
		      <tr>
		         <th>Id Producto</th>
		         <th>Id Categoria</th>
		         <th>Nombre</th>
		         <th>Descripcion</th>
		         <th>Precio</th>
		         <th>Ruta Imagen</th>
		      </tr>
   			</thead>
		    <tbody>
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
		    		<tr>
		    			<td><?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>

		    			<a class="glyphicon glyphicon-trash" href="index.php?action=borrarProducto&id_producto=<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"></a></td>
		    			<td><?php echo $_smarty_tpl->tpl_vars['producto']->value['id_categoria'];?>
</td>
		    			<td><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</td>
		    			<td class="fuentes"><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</td>
		    			<td><?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</td>
		    			<td><?php echo $_smarty_tpl->tpl_vars['producto']->value['ruta_imagen'];?>

		    			<?php if ((!$_smarty_tpl->tpl_vars['producto']->value['ruta_imagen'])) {?><a class="glyphicon glyphicon-plus botonAgregarImagenes" href="index.php?action=agregarImagenes&id_producto=<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"></a><?php }?></td>
		    		</tr>
		    	<?php
$_smarty_tpl->tpl_vars['producto'] = $foreach_producto_Sav;
}
?>
		    	<?php } else { ?>
		    		<tr>
		    			<td>No existe</td>
		    			<td>No existe</td>
		    			<td>No existe</td>
		    			<td>No existe</td>
		    			<td>No existe</td>
		    			<td>No existe</td>
		    		</tr>
		    	<?php }?>
		    </tbody>
		</table>
	</div>
	<div id="tabla_categorias" class="table-responsive tope">
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
		</table>
	</div>
	<form action="index.php?action=productoNuevo" method="POST" enctype="multipart/form-data">
		<div class="bordes col-lg-offset-2 col-lg-3">
			<h6>Agregar/Modificar Producto</h6>
			<label>Categoria:</label>
			<select id="idCategoria" name="idCategoria">	
			    <?php if (!empty($_smarty_tpl->tpl_vars['categorias']->value)) {?>
			    	<option value="0">Elige una Categoria</option>
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
						<option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre_categoria'];?>
</option>
				    <?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}
?>
				<?php } else { ?>
					<option value="0">No hay Categorias</option>
			    <?php }?>
			</select></br>
			<label>Nombre:</label>
			<textarea id="nombreProducto" name="nombreProducto" rows="1" cols="20"></textarea>
			<label>Descripcion:</label>
			<textarea id="textoDescripcion" name="textoDescripcion" rows="3" cols="20"></textarea>
			<label>Precio:</label>
			<input id="precio" name="precio" type="text" size="5">
			<label for ="imagesToUpload">Ruta Imagen:</label>
			<input class="input-file" type="file" id="imagesToUpload" name="imagesToUpload[]">
			<label for="ID">ID(Solo para Modificar):</label><input id="id" name="id" type="text" size="1">
			<input type="submit" value="Agregar">
		</div>
	</form>
	<form id="form_categorias" action="index.php?action=categoriaNueva" method="POST" enctype="multipart/form-data">
		<div class="form-group bordes col-lg-offset-2 col-lg-3">
			<h6>Agregar Categoria</h6>
			<label for="categoria">Nombre Categoria:</label>
			<input class="form-control" type="text" id="categoria" name="categoria" size="7" placeholder="Categoria">
			<label for="ID">ID(Solo para Modificar):</label><input id="id" name="id" type="text" size="1">
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
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="js/imgajax.js"><?php echo '</script'; ?>
>

	
<?php }
}
?>
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
		    	{if !empty($productos)}
		   		{foreach $productos as $producto}
		    		<tr>
		    			<td>{$producto.id_producto}
		    			<a class="glyphicon glyphicon-trash" href="index.php?action=borrarProducto&id_producto={$producto['id_producto']}"></a></td>
		    			<td>{$producto.id_categoria}</td>
		    			<td class="fuentes">{$producto.nombre}</td>
		    			<td class="fuentes">{$producto.descripcion}</td>
		    			<td>{$producto.precio}</td>
		    			<td>{$producto.ruta_imagen}
		    			{if (!$producto.ruta_imagen)}<a class="glyphicon glyphicon-plus botonAgregarImagenes" href="index.php?action=agregarImagenes&id_producto={$producto['id_producto']}"></a>{/if}</td>
		    		</tr>
		    	{/foreach}
		    	{else}
		    		<tr>
		    			<td>No existe</td>
		    			<td>No existe</td>
		    			<td>No existe</td>
		    			<td>No existe</td>
		    			<td>No existe</td>
		    			<td>No existe</td>
		    		</tr>
		    	{/if}
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
		    	{if !empty($categorias)}
		    	{foreach $categorias as $categoria}
		    		<tr>
		    			<td>{$categoria.id_categoria}</td>
		    			<td>{$categoria.nombre_categoria}</td>
		    		</tr>
		    	{/foreach}
		    	{else}
		    		<tr>
		    			<td>No existe</td>
		    			<td>No existe</td>
		    		</tr>
		    	{/if}
		    </tbody>
		</table>
	</div>
	<form action="index.php?action=productoNuevo" method="POST" enctype="multipart/form-data">
		<div class="bordes col-lg-offset-2 col-lg-3">
			<h6>Agregar/Modificar Producto</h6>
			<label>Categoria:</label>
			<select id="idCategoria" name="idCategoria">	
			    {if !empty($categorias)}
			    	<option value="0">Elige una Categoria</option>
				    {foreach $categorias as $categoria}
						<option value="{$categoria.id_categoria}">{$categoria.nombre_categoria}</option>
				    {/foreach}
				{else}
					<option value="0">No hay Categorias</option>
			    {/if}
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
<script type="text/javascript" src="js/imgajax.js"></script>

	

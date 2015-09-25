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
		    	{foreach $categorias as $categoria}
		    		<tr>
		    			<td>{$categoria.id_categoria}</td>
		    			<td>{$categoria.nombre_categoria}</td>
		    		</tr>
		    	{/foreach}
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
</div>
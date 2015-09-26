<div class="col-lg-3 col-md-3 col-sm-12 textos">
	<h1>Productos</h1>
	<ul>
		<li><a href="#">Componentes para Computadoras</a></li><br />
		<ul>
			<li><a href="#">Mouse</a></li>
			<li><a href="#">Parlantes</a></li>
			<li><a href="#">Teclados</a></li>
		</ul><br />
		<li><a href="#">Equipos de Escritorio</a></li><br />
		<li><a href="#">Equipos Portatiles</a></li><br />
		<li><a href="#">Impresoras</a></li><br />
		<li><a href="#">Memoria y Almacenamiento</a></li><br />
		<li><a href="#">Redes y Comunicaciones</a></li>
		
	</ul>
</div>
<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12 textos alto">
	{if !empty($productos)}
	{foreach $productos as $producto}
	<div class="productos_lista">
		<div>
			<div>
				<h5>{$producto['nombreCategoria']}</h5>
				<img src="{$producto.ruta_imagen}" alt="">
				<h5>{$producto.nombre}</h5>
				<p><span class="resaltar">${$producto.precio}</span><br />o 12 cuotas de <span class="resaltar">${$producto.precio / 12}</span></p>
			</div>
		</div>
	</div>
	{/foreach}
	{/if}
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
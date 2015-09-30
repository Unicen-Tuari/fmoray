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
    			<td>{$producto.id_producto}</td>
    			<td>{$producto.id_categoria}</td>
    			<td>{$producto.nombre}</td>
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
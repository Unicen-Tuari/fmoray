{if !empty($productos)}
	{foreach $productos as $producto}
		<tr>
			<td>{$producto.id_producto}</td>
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
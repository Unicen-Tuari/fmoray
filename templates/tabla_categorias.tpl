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
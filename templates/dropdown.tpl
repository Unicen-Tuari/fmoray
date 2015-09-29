{if !empty($categorias)}
	<option value="0">Elige una Categoria</option>
    {foreach $categorias as $categoria}
		<option value="{$categoria.id_categoria}">{$categoria.nombre_categoria}</option>
    {/foreach}
{else}
	<option value="0">No hay Categorias</option>
{/if}
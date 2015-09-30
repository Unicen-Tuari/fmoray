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
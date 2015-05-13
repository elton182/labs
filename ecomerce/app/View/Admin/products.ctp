
<h4><a href="add">Novo Produto</a></h4>		

<table class="table table-striped">
	<tr>
	<th>Id</th>
	<th>Nome</th>
	<th>Preço</th>
	<th>Ação</th>
	</tr>

<?php
	
	foreach ($products as $product) {
		echo '<tr>';
		echo '<td>'.$product['Product']['id'].'</td>';
		echo '<td><a href="/ecomerce/admin/productEdit/'.$product['Product']['id'].'">'.$product['Product']['name'].'</a></td>';
		echo '<td>'.$product['Product']['price'].'</td>';
		echo '<td><a href="/ecomerce/admin/productEdit/'.$product['Product']['id'].'">Editar</a></td>';
		echo '</tr>';
	}
	
?>
</table>
<?php

echo '<table class="table ">';

echo $this->Html->tableHeaders(['Projeto', 'Valor']);

foreach ($receitas as $receita) {
	echo $this->Html->tableCells([
		[$receita['Income']['project_id'],$receita['Income']['value']]]);	
}



?>

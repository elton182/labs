<div class="despesas form">
<?php echo $this->Form->create('Despesa'); ?>
	<fieldset>
		<legend><?php echo __('Add Despesa'); ?></legend>
	<?php
		echo $this->Form->input('idConta');
		echo $this->Form->input('idCentroCusto');
		echo $this->Form->input('valor');
		echo $this->Form->input('idUser');
		echo $this->Form->input('dataDespesa');
		echo $this->Form->input('dataTransacao');
		echo $this->Form->input('idTipoDespesa');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Despesas'), array('action' => 'index')); ?></li>
	</ul>
</div>

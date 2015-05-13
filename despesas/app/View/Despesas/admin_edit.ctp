<div class="despesas form">
<?php echo $this->Form->create('Despesa'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Despesa'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Despesa.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Despesa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Despesas'), array('action' => 'index')); ?></li>
	</ul>
</div>

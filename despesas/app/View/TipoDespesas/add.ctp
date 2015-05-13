<div class="tipoDespesas form">
<?php echo $this->Form->create('TipoDespesa'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipo Despesa'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipo Despesas'), array('action' => 'index')); ?></li>
	</ul>
</div>

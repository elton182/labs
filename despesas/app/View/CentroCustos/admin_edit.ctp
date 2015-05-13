<div class="centroCustos form">
<?php echo $this->Form->create('CentroCusto'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Centro Custo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('centroCusto');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CentroCusto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CentroCusto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Centro Custos'), array('action' => 'index')); ?></li>
	</ul>
</div>

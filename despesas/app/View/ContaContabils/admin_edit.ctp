<div class="contaContabils form">
<?php echo $this->Form->create('ContaContabil'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Conta Contabil'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('conta');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ContaContabil.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ContaContabil.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Conta Contabils'), array('action' => 'index')); ?></li>
	</ul>
</div>

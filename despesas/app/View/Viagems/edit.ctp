<div class="viagems form">
<?php echo $this->Form->create('Viagem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Viagem'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('destino');
		echo $this->Form->input('orcamento');
		echo $this->Form->input('situacao');
		echo $this->Form->input('idUser');
		echo $this->Form->input('dataViagem');
		echo $this->Form->input('dataTransacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Viagem.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Viagem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Viagems'), array('action' => 'index')); ?></li>
	</ul>
</div>

<div class="viagems form">
<?php echo $this->Form->create('Viagem'); ?>
	<fieldset>
		<legend><?php echo __('Add Viagem'); ?></legend>
	<?php

		$options = array(
			'class' => 'form-control'
		);

		echo $this->Form->input('destino',$options);
		echo $this->Form->input('orcamento',$options);
		echo $this->Form->input('situacao',$options);
		//echo $this->Form->input('idUser',$options);
		echo $this->Form->input('dataViagem');
		//echo $this->Form->input('dataTransacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Viagems'), array('action' => 'index')); ?></li>
	</ul>
</div>

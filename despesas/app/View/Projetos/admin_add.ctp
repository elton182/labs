<div class="projetos form">
<?php echo $this->Form->create('Projeto'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Projeto'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('apelido');
		echo $this->Form->input('orcamento');
		echo $this->Form->input('idUser');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Projetos'), array('action' => 'index')); ?></li>
	</ul>
</div>

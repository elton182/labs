<div class="projetos form">
<?php echo $this->Form->create('Projeto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Projeto'); ?></legend>
	<?php

		$options = array(
			'class' => 'form-control'
		);			

		echo $this->Form->input('id',$options);
		echo $this->Form->input('nome',$options);
		echo $this->Form->input('apelido',$options);
		echo $this->Form->input('orcamento',$options);		

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Projeto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Projeto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('action' => 'index')); ?></li>
	</ul>
</div>

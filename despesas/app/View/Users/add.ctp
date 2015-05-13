<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php

		$options = array(
			'class' => 'form-control'
		);		

		echo $this->Form->input('username',$options);
		echo $this->Form->input('password',$options);
		echo $this->Form->input('role',$options);
		echo $this->Form->input('email',$options);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>

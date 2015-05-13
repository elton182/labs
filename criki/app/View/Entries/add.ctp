<div class="entries form">
<?php echo $this->Form->create('Entry'); ?>
	<fieldset>
		<legend><?php echo __('Add Entry'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('content');
		echo $this->Form->input('access');
		echo $this->Form->input('user_id');
		echo $this->Form->input('ip');
		echo $this->Form->input('revision');
		echo $this->Form->input('accessed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Entries'), array('action' => 'index')); ?></li>
	</ul>
</div>

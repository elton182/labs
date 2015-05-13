<div class="">
<?php echo $this->Form->create('Upload'); ?>
	<fieldset>
		<legend><?php echo __('Edit Upload'); ?></legend>
	<?php
		echo $this->Form->input('id',array('class' => 'form-control'));
		echo $this->Form->input('filename',array('class' => 'form-control'));
		echo $this->Form->input('location',array('class' => 'form-control'));
		echo $this->Form->input('access',array('class' => 'form-control'));
		echo $this->Form->input('user_id',array('class' => 'form-control'));
		echo $this->Form->input('ip',array('class' => 'form-control'));
		echo $this->Form->input('revision',array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Upload.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Upload.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('action' => 'index')); ?></li>
	</ul>
</div>

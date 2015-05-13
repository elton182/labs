<div class="uploadRevisions form">
<?php echo $this->Form->create('UploadRevision'); ?>
	<fieldset>
		<legend><?php echo __('Add Upload Revision'); ?></legend>
	<?php
		echo $this->Form->input('filename');
		echo $this->Form->input('location');
		echo $this->Form->input('access');
		echo $this->Form->input('user_id');
		echo $this->Form->input('ip');
		echo $this->Form->input('revision');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Upload Revisions'), array('action' => 'index')); ?></li>
	</ul>
</div>

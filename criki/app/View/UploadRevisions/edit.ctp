<div class="uploadRevisions form">
<?php echo $this->Form->create('UploadRevision'); ?>
	<fieldset>
		<legend><?php echo __('Edit Upload Revision'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UploadRevision.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('UploadRevision.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Upload Revisions'), array('action' => 'index')); ?></li>
	</ul>
</div>

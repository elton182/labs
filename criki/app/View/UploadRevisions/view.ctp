<div class="uploadRevisions view">
<h2><?php echo __('Upload Revision'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($uploadRevision['UploadRevision']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($uploadRevision['UploadRevision']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($uploadRevision['UploadRevision']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Access'); ?></dt>
		<dd>
			<?php echo h($uploadRevision['UploadRevision']['access']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($uploadRevision['UploadRevision']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($uploadRevision['UploadRevision']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo h($uploadRevision['UploadRevision']['ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Revision'); ?></dt>
		<dd>
			<?php echo h($uploadRevision['UploadRevision']['revision']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Upload Revision'), array('action' => 'edit', $uploadRevision['UploadRevision']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Upload Revision'), array('action' => 'delete', $uploadRevision['UploadRevision']['id']), array(), __('Are you sure you want to delete # %s?', $uploadRevision['UploadRevision']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Upload Revisions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload Revision'), array('action' => 'add')); ?> </li>
	</ul>
</div>

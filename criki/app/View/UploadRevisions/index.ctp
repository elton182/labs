<div class="uploadRevisions index">
	<h2><?php echo __('Upload Revisions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('filename'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('access'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ip'); ?></th>
			<th><?php echo $this->Paginator->sort('revision'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($uploadRevisions as $uploadRevision): ?>
	<tr>
		<td><?php echo h($uploadRevision['UploadRevision']['id']); ?>&nbsp;</td>
		<td><?php echo h($uploadRevision['UploadRevision']['filename']); ?>&nbsp;</td>
		<td><?php echo h($uploadRevision['UploadRevision']['location']); ?>&nbsp;</td>
		<td><?php echo h($uploadRevision['UploadRevision']['access']); ?>&nbsp;</td>
		<td><?php echo h($uploadRevision['UploadRevision']['modified']); ?>&nbsp;</td>
		<td><?php echo h($uploadRevision['UploadRevision']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($uploadRevision['UploadRevision']['ip']); ?>&nbsp;</td>
		<td><?php echo h($uploadRevision['UploadRevision']['revision']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $uploadRevision['UploadRevision']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $uploadRevision['UploadRevision']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $uploadRevision['UploadRevision']['id']), array(), __('Are you sure you want to delete # %s?', $uploadRevision['UploadRevision']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Upload Revision'), array('action' => 'add')); ?></li>
	</ul>
</div>

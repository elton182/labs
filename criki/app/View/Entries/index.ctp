<div class="entries index">
	<h2><?php echo __('Entries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('content'); ?></th>
			<th><?php echo $this->Paginator->sort('access'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ip'); ?></th>
			<th><?php echo $this->Paginator->sort('revision'); ?></th>
			<th><?php echo $this->Paginator->sort('accessed'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($entries as $entry): ?>
	<tr>
		<td><?php echo h($entry['Entry']['id']); ?>&nbsp;</td>
		<td><?php echo h($entry['Entry']['title']); ?>&nbsp;</td>
		<td><?php echo h($entry['Entry']['content']); ?>&nbsp;</td>
		<td><?php echo h($entry['Entry']['access']); ?>&nbsp;</td>
		<td><?php echo h($entry['Entry']['modified']); ?>&nbsp;</td>
		<td><?php echo h($entry['Entry']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($entry['Entry']['ip']); ?>&nbsp;</td>
		<td><?php echo h($entry['Entry']['revision']); ?>&nbsp;</td>
		<td><?php echo h($entry['Entry']['accessed']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $entry['Entry']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $entry['Entry']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $entry['Entry']['id']), array(), __('Are you sure you want to delete # %s?', $entry['Entry']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Entry'), array('action' => 'add')); ?></li>
	</ul>
</div>

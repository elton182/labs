<div class="viagems index">
	<h2><?php echo __('Viagems'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('destino'); ?></th>
			<th><?php echo $this->Paginator->sort('orcamento'); ?></th>
			<th><?php echo $this->Paginator->sort('situacao'); ?></th>
			<th><?php echo $this->Paginator->sort('idUser'); ?></th>
			<th><?php echo $this->Paginator->sort('dataViagem'); ?></th>
			<th><?php echo $this->Paginator->sort('dataTransacao'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($viagems as $viagem): ?>
	<tr>
		<td><?php echo h($viagem['Viagem']['id']); ?>&nbsp;</td>
		<td><?php echo h($viagem['Viagem']['destino']); ?>&nbsp;</td>
		<td><?php echo h($viagem['Viagem']['orcamento']); ?>&nbsp;</td>
		<td><?php echo h($viagem['Viagem']['situacao']); ?>&nbsp;</td>
		<td><?php echo h($viagem['Viagem']['idUser']); ?>&nbsp;</td>
		<td><?php echo h($viagem['Viagem']['dataViagem']); ?>&nbsp;</td>
		<td><?php echo h($viagem['Viagem']['dataTransacao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $viagem['Viagem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $viagem['Viagem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $viagem['Viagem']['id']), array(), __('Are you sure you want to delete # %s?', $viagem['Viagem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Viagem'), array('action' => 'add')); ?></li>
	</ul>
</div>

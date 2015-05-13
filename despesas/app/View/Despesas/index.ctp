<div class="despesas index">
	<h2><?php echo __('Despesas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('idConta'); ?></th>
			<th><?php echo $this->Paginator->sort('idCentroCusto'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('idUser'); ?></th>
			<th><?php echo $this->Paginator->sort('dataDespesa'); ?></th>
			<th><?php echo $this->Paginator->sort('dataTransacao'); ?></th>
			<th><?php echo $this->Paginator->sort('idTipoDespesa'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($despesas as $despesa): ?>
	<tr>
		<td><?php echo h($despesa['Despesa']['id']); ?>&nbsp;</td>
		<td><?php echo h($despesa['Despesa']['idConta']); ?>&nbsp;</td>
		<td><?php echo h($despesa['Despesa']['idCentroCusto']); ?>&nbsp;</td>
		<td><?php echo h($despesa['Despesa']['valor']); ?>&nbsp;</td>
		<td><?php echo h($despesa['Despesa']['idUser']); ?>&nbsp;</td>
		<td><?php echo h($despesa['Despesa']['dataDespesa']); ?>&nbsp;</td>
		<td><?php echo h($despesa['Despesa']['dataTransacao']); ?>&nbsp;</td>
		<td><?php echo h($despesa['Despesa']['idTipoDespesa']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $despesa['Despesa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $despesa['Despesa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $despesa['Despesa']['id']), array(), __('Are you sure you want to delete # %s?', $despesa['Despesa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Despesa'), array('action' => 'add')); ?></li>
	</ul>
</div>

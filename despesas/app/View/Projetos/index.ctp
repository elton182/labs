<div class="projetos index">
	<h2><?php echo __('Projetos'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-condensed">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('apelido'); ?></th>
			<th><?php echo $this->Paginator->sort('orcamento'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody class="table table-hover">
	<?php foreach ($projetos as $projeto): ?>
	<tr>
		<td><?php echo h($projeto['Projeto']['id']); ?>&nbsp;</td>
		<td><?php echo h($projeto['Projeto']['nome']); ?>&nbsp;</td>
		<td><?php echo h($projeto['Projeto']['apelido']); ?>&nbsp;</td>
		<td><?php echo h($projeto['Projeto']['orcamento']); ?>&nbsp;</td>	
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $projeto['Projeto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $projeto['Projeto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $projeto['Projeto']['id']), array(), __('Are you sure you want to delete # %s?', $projeto['Projeto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Projeto'), array('action' => 'add')); ?></li>
	</ul>
</div>

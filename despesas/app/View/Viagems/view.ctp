<div class="viagems view">
<h2><?php echo __('Viagem'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($viagem['Viagem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destino'); ?></dt>
		<dd>
			<?php echo h($viagem['Viagem']['destino']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orcamento'); ?></dt>
		<dd>
			<?php echo h($viagem['Viagem']['orcamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Situacao'); ?></dt>
		<dd>
			<?php echo h($viagem['Viagem']['situacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdUser'); ?></dt>
		<dd>
			<?php echo h($viagem['Viagem']['idUser']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataViagem'); ?></dt>
		<dd>
			<?php echo h($viagem['Viagem']['dataViagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataTransacao'); ?></dt>
		<dd>
			<?php echo h($viagem['Viagem']['dataTransacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Viagem'), array('action' => 'edit', $viagem['Viagem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Viagem'), array('action' => 'delete', $viagem['Viagem']['id']), array(), __('Are you sure you want to delete # %s?', $viagem['Viagem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Viagems'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Viagem'), array('action' => 'add')); ?> </li>
	</ul>
</div>

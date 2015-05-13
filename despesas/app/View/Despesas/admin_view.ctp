<div class="despesas view">
<h2><?php echo __('Despesa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdConta'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['idConta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdCentroCusto'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['idCentroCusto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdUser'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['idUser']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataDespesa'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['dataDespesa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataTransacao'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['dataTransacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdTipoDespesa'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['idTipoDespesa']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Despesa'), array('action' => 'edit', $despesa['Despesa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Despesa'), array('action' => 'delete', $despesa['Despesa']['id']), array(), __('Are you sure you want to delete # %s?', $despesa['Despesa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Despesas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despesa'), array('action' => 'add')); ?> </li>
	</ul>
</div>

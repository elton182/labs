<div class="projetos view">
<h2><?php echo __('Projeto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($projeto['Projeto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($projeto['Projeto']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apelido'); ?></dt>
		<dd>
			<?php echo h($projeto['Projeto']['apelido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orcamento'); ?></dt>
		<dd>
			<?php echo h($projeto['Projeto']['orcamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdUser'); ?></dt>
		<dd>
			<?php echo h($projeto['Projeto']['idUser']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Projeto'), array('action' => 'edit', $projeto['Projeto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Projeto'), array('action' => 'delete', $projeto['Projeto']['id']), array(), __('Are you sure you want to delete # %s?', $projeto['Projeto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('action' => 'add')); ?> </li>
	</ul>
</div>

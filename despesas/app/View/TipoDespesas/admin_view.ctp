<div class="tipoDespesas view">
<h2><?php echo __('Tipo Despesa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipoDespesa['TipoDespesa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($tipoDespesa['TipoDespesa']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Despesa'), array('action' => 'edit', $tipoDespesa['TipoDespesa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo Despesa'), array('action' => 'delete', $tipoDespesa['TipoDespesa']['id']), array(), __('Are you sure you want to delete # %s?', $tipoDespesa['TipoDespesa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Despesas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Despesa'), array('action' => 'add')); ?> </li>
	</ul>
</div>

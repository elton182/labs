<div class="contaContabils view">
<h2><?php echo __('Conta Contabil'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contaContabil['ContaContabil']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conta'); ?></dt>
		<dd>
			<?php echo h($contaContabil['ContaContabil']['conta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($contaContabil['ContaContabil']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Conta Contabil'), array('action' => 'edit', $contaContabil['ContaContabil']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Conta Contabil'), array('action' => 'delete', $contaContabil['ContaContabil']['id']), array(), __('Are you sure you want to delete # %s?', $contaContabil['ContaContabil']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Conta Contabils'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conta Contabil'), array('action' => 'add')); ?> </li>
	</ul>
</div>

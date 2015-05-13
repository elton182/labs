<div class="centroCustos view">
<h2><?php echo __('Centro Custo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($centroCusto['CentroCusto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CentroCusto'); ?></dt>
		<dd>
			<?php echo h($centroCusto['CentroCusto']['centroCusto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($centroCusto['CentroCusto']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Centro Custo'), array('action' => 'edit', $centroCusto['CentroCusto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Centro Custo'), array('action' => 'delete', $centroCusto['CentroCusto']['id']), array(), __('Are you sure you want to delete # %s?', $centroCusto['CentroCusto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Centro Custos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro Custo'), array('action' => 'add')); ?> </li>
	</ul>
</div>

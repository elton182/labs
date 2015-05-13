<div class="entries view">
<h2><?php echo __('Entry'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entry['Entry']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($entry['Entry']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($entry['Entry']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Access'); ?></dt>
		<dd>
			<?php echo h($entry['Entry']['access']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($entry['Entry']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($entry['Entry']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo h($entry['Entry']['ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Revision'); ?></dt>
		<dd>
			<?php echo h($entry['Entry']['revision']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accessed'); ?></dt>
		<dd>
			<?php echo h($entry['Entry']['accessed']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entry'), array('action' => 'edit', $entry['Entry']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entry'), array('action' => 'delete', $entry['Entry']['id']), array(), __('Are you sure you want to delete # %s?', $entry['Entry']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry'), array('action' => 'add')); ?> </li>
	</ul>
</div>

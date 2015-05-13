<div class="entryRevisions view">
<h2><?php echo __('Entry Revision'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entryRevision['EntryRevision']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($entryRevision['EntryRevision']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($entryRevision['EntryRevision']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Access'); ?></dt>
		<dd>
			<?php echo h($entryRevision['EntryRevision']['access']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($entryRevision['EntryRevision']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($entryRevision['EntryRevision']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo h($entryRevision['EntryRevision']['ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Revision'); ?></dt>
		<dd>
			<?php echo h($entryRevision['EntryRevision']['revision']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accessed'); ?></dt>
		<dd>
			<?php echo h($entryRevision['EntryRevision']['accessed']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entry Revision'), array('action' => 'edit', $entryRevision['EntryRevision']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entry Revision'), array('action' => 'delete', $entryRevision['EntryRevision']['id']), array(), __('Are you sure you want to delete # %s?', $entryRevision['EntryRevision']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Revisions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Revision'), array('action' => 'add')); ?> </li>
	</ul>
</div>

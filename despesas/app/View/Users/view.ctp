<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="users view">
<h2><?php echo __('User'); ?></h2>	
	<table class="table table-bordered table-condensed">
	<thead>
	</thead>
		<tr>
			<td>Campo</td>
			<td>Valor</td>
		</tr>	
	<tbody class="table table-hover">
	<dl>
		<tr>
			<td>
				<dt><?php echo __('Id'); ?></dt>
			</td>
			<td>
				<dd>
					<?php echo h($user['User']['id']); ?>
					&nbsp;
				</dd>
			</td>
		</tr>
		<tr>
			<td>
				<dt><?php echo __('Username'); ?></dt>
			</td>
			<td>
				<dd>
					<?php echo h($user['User']['username']); ?>
					&nbsp;
				</dd>
			</td>
		</tr>
		<tr>
			<td>
				<dt><?php echo __('Password'); ?></dt>
			</td>
			<td>
				<dd>
					<?php echo h('********'); ?>
					&nbsp;
				</dd>
			</td>
		</tr>
		<tr>
			<td>
				<dt><?php echo __('Role'); ?></dt>
			</td>
			<td>
				<dd>
					<?php echo h($user['User']['role']); ?>
					&nbsp;
				</dd>
			</td>
		</tr>
		<tr>
			<td>
				<dt><?php echo __('Created'); ?></dt>
			</td>
			<td>
				<dd>
					<?php echo h($user['User']['created']); ?>
					&nbsp;
				</dd>
			</td>
		</tr>
		<tr>
			<td>
				<dt><?php echo __('Modified'); ?></dt>
			</td>
			<td>
				<dd>
					<?php echo h($user['User']['modified']); ?>
					&nbsp;
				</dd>
			</td>
		</tr>
		<tr>
			<td>
				<dt><?php echo __('Email'); ?></dt>
			</td>
			<td>
				<dd>
					<?php echo h($user['User']['email']); ?>
					&nbsp;
				</dd>
			</td>
	</dl>	
	</tbody>
	</table>
</div>



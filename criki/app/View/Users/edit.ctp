<div class="users form">
<div class="row">
<div class="col-sm-4 col-md-4">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php	
		echo $this->Form->input('id',array('class' => 'form-control'));
		echo $this->Form->input('username',array('class' => 'form-control'));
		echo $this->Form->input('email',array('class' => 'form-control'));
		echo $this->Form->input('password',array('class' => 'form-control'));
		echo $this->Form->input('access',array('class' => 'form-control'));
		echo $this->Form->input('login',array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>
</div>
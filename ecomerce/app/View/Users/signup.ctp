<div class="row">
	
	<div class="col-md-4 col-ld-4">
		
		<?php echo $this->Form->create('User'); ?>
			<fieldset>
				<legend><?php echo __('Cadastre seu usuário'); ?></legend>
			<?php

				$options = array(
					'class' => 'form-control',
					'required'
				);		

				echo $this->Form->input('Nome',$options);
				echo $this->Form->input('Senha',array('class' => 'form-control','type' => 'password', 'required'));
				//echo $this->Form->input('role',$options);
				echo $this->Form->input('E-mail',array('class' => 'form-control','type' => 'email','required'));
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Gravar')); ?>
		
	</div>

</div>
<h4>
<?php echo $this->Session->flash(); ?>
</h4>
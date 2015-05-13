
<div class="row">
	<div class="col-sm-4 col-md-4">

		<?php echo $this->form->create('User') ?>
		<p>Please fill out the form below to register an account.</p>

		<?php echo $this->form->input('username',array('class' => 'form-control')) ?>

		<label>Password</label>
		<?php echo $this->form->password('password',array('class' => 'form-control')) ?>


		<?php echo $this->form->input('email',array('class' => 'form-control')) ?>

		<?php echo $this->form->submit('Register') ?>
		<?php echo $this->form->end(); ?>

	</div>
</div>
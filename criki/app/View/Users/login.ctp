


<?php echo $this->form->create('User') ?>
<p>Please log in.</p>
<label>Email Address:</label>
<?php echo $this->form->input('User/email') ?>
<label>Password</label>
<?php echo $this->form->password('password') ?>
<?php echo $this->form->submit('login') ?>
<?php //echo $this->html->tagErrorMsg('User/email', $login_error) ?>
<?php echo $this->form->end(); ?>

<?php 
	if (!empty($login_error)) {
		echo '<h3>'.$login_error.'</h3>';
	}
?>
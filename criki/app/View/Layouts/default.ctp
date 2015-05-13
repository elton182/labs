<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body style="padding:30px">
	<h1> Criki! It's a wiki!</h1>
	<div id="nav">
		[
		<?php echo $this->html->link('home','/') ?>
		|
		<?php echo $this->html->link('users','/users') ?>
		|
		<?php echo $this->html->link('entries', '/entries') ?>
		|
		<?php echo $this->html->link('entry revisions', '/entry_revisions') ?>
		|
		<?php echo $this->html->link('uploads', '/uploads') ?>
		|
		<?php echo $this->html->link('upload revisions', '/upload_revisions') ?>
		|
		<?php echo $this->html->link('settings', '/settings') ?>
		|
		<?php 
			if (isset($this->Session) && $this->Session->check('User')) {
				echo $this->html->link('logout', '/users/logout');
			} else {
				echo $this->html->link('login', '/users/login');
				echo ' | ';
				echo $this->html->link('register', '/users/register');
			} ?>									
		]
				
	</div>
	<div id="container">
		<div id="header">
			<h1><?php echo 'header'; ?></h1>
		</div>
		<div id="content">
<html>
  <head>
   
  </head>

  <body>
    <!--Div that will hold the pie chart-->    
  </body>
</html>		

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">

			<p>
				<?php echo 'footer'; ?>
			</p>
		</div>
	</div>
	<div>

	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>

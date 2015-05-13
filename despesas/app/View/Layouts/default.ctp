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

$cakeDescription = __d('cake_dev', 'Controle de Despesas');
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

		echo $this->Html->script('jQuery');
		echo $this->Html->script('bootstrap');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-theme');

		echo $this->Html->css('custom');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');		

	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, ''); ?></h1>
		</div>
		<!-- If you’d like some sort of menu to
		show up on all of your views, include it here -->
		
		<?php $this->startIfEmpty('navbar'); ?>
		<p></p>
		<?php echo $this->element('navbar'); ?>
		<?php $this->end(); ?>		
		<?php echo $this->fetch('navbar'); ?>

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

	</div>
	<div id="footer">
		
		<p><h4>Desenvolvido por FVE - Sistemas e Consultoria</h4></p>
	</div>	
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>

<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>
<h3><?php echo __d('cake_dev', 'Controle de Despesas.', Configure::version()); ?></h2>

<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>

<p>
<?php
// In a view file.
// Create a navbar block

?>
</p>


<p>

</p>


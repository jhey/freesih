<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>

<h2><?php echo __('Login'); ?></h2>
			
	<?php echo $this->Facebook->login(array('perms' => 'email,publish_stream')); ?>
<?php echo $this->Facebook->logout() ?>
	<br><br>

	<?php echo $this->Facebook->registration(array(
  'redirect-uri' => 'http://freeish.azurewebsites.net/login',
));	
?>
<?php echo $this->Facebook->registration();  ?>
<br><br>


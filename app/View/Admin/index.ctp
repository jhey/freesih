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



<?php


?>


<h2><?php echo __('Administration'); ?></h2>
			
<br><br>


<div id="page-content" class="col-sm-4 admin_choices">
	
	<ul class="x">
		<li class="list-group-item"><?php echo $this->Html->link(__('New Freeby'), array('controller' => 'freebies', 'action' => 'add'), array('class' => '')); ?></li>
		<li class="list-group-item"><?php echo $this->Html->link(__('View Freebies'), array('controller' => 'freebies', 'action' => 'index'), array('class' => '')); ?></li>
		<li class="list-group-item"><?php echo $this->Html->link(__('Edit Freebies'), array('controller' => 'freebies', 'action' => 'mod'), array('class' => '')); ?></li>
	</ul>
	
	<ul class="x">
		<li class="list-group-item"><?php echo $this->Html->link(__('New Needy'), array('controller' => 'needies', 'action' => 'add'), array('class' => '')); ?></li>
		<li class="list-group-item"><?php echo $this->Html->link(__('View Needies'), array('controller' => 'needies', 'action' => 'index'), array('class' => '')); ?></li>
		<li class="list-group-item"><?php echo $this->Html->link(__('Edit Needies'), array('controller' => 'needies', 'action' => 'mod'), array('class' => '')); ?></li>
	</ul>
	
</div>


<div id="page-content" class="col-sm-4 admin_choices">
	
	<ul class="x">
		<li class="list-group-item"><?php echo $this->Html->link(__('New Categories'), array('controller' => 'categories', 'action' => 'add'), array('class' => '')); ?></li>
		<li class="list-group-item"><?php echo $this->Html->link(__('View Categories'), array('controller' => 'categories', 'action' => 'index'), array('class' => '')); ?></li>
	</ul>
	
</div>


	
<hr>

</p>
	
	

	
	

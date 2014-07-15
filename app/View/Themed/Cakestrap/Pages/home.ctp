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

<h2><?php echo __d('cake_header', 'FREEish, give it away'); ?></h2>




<div id="homesplash">
	
	
	<p>
	<br>
	<h3>
		Give stuff away for free to those in need. Love & Help thy neighbour as thyself.
		</h3>
	<br>
</p>
	
	
		<ul class="nav nav-pills">

			
			<li>
			
			<?php echo $this->Html->link(__('Give'), 
							 array('controller' => 'freebies', 		'action' => 'add'), 
							 array('class' => 'home_button btn btn-primary btn-lg')); ?>
			
</li>	<li>

	<?php echo $this->Html->link(__('Need'), 
							  array('controller' => 'needies', 		'action' => 'add'), 
							 array('class' => 'home_button btn btn-primary btn-lg')); ?></li>
			
			
			

			</ul>
	
	<hr>
	
	<ul class="nav nav-pills">

			
			<li><?php echo $this->Html->link(__('View Free items'), 
							 array('controller' => 'freebies', 		'action' => 'index'), 
							 array('class' => 'home_button btn btn-primary btn-lg')); ?>
			</li>	<li>

	<?php echo $this->Html->link(__('View Needed items'), 
							  array('controller' => 'needies', 		'action' => 'index'), 
							 array('class' => 'home_button btn btn-primary btn-lg')); ?></li>
			
			
			

			</ul>
	
	
		<hr>
	

<ul class="nav nav-pills">
<li>
<?php echo $this->Html->link(__('Help Out'), 
 array('controller' => 'helpout', 'action' => 'index'), 
array('class' => 'home_button btn btn-info btn-lg')); ?></li>
</ul>
	
	
	
</div>



<br><br>



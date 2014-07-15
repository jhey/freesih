<nav class="xnavbar xnavbar-default" role="navigation">
	

			<?php echo $this->Html->link('<span class="glyphicon glyphicon-leaf"></span> FREEish, give it away',
																  '/', 
																 array('escape' => false)); ?> 
				
	
	
<!--
	
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button> /.navbar-toggle 
		<?php echo $this->Html->Link('URL Builder', '/', array('class' => 'navbar-brand')); ?>
	</div>
	
-->
	
	<div class="fright">
	
			<div class="fright">
				<?php echo $this->Html->link(__('Help'), '/helps', array()); ?>
				&nbsp;&nbsp;
				
				
				<?php echo $this->Html->link(__('Login'), '/login', array()); ?>
				
				
			</div>
	</div>	

		
	
</nav><!-- /.navbar navbar-default -->

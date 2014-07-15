
<div id="page-container" class="row">

		<div id="page-content-before" class="col-sm-12">
			

			
			<div class="fright">
		&nbsp;&nbsp;
				</div>
		
		<div class="fright">
			<a href="<?php echo $this->Html->url(array('controller'=>'freebies', 
													   'action'=>'index',)); ?>" >
				<button type="button" class="btn btn-info btn-m"><span class="glyphicon glyphicon-eye-open"> All</span></button></a>
	
			</div>
			</div>
			
	
	
	<!--

	<div id="sidebar" class="col-sm-3">
		<div class="actions">
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('List Freebies'), array('action' => 'index')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	
-->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Add Freeby'); ?></h2>

		<div class="freebies form">
		
			<?php echo $this->Form->create('Freeby', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' =>'Wheelchair Remington 2000', 'label' => 'Freeby Title')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('category_id', array('class' => 'form-control' )); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('contact', array('class' => 'form-control', 'placeholder' =>'Jon Doe - jdoe@start.com - Start Houston', 'label' => 'Your Contact Info')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('location', array('class' => 'form-control', 'placeholder' =>'1121 Delano St, Houston, TX 77003', 'label' => 'Location of Freeby')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('condition', array('class' => 'form-control', 'placeholder' =>'Slighty used', 'label' => 'Condition of item')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' =>'Very good chair', 'label' => 'Description of item')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
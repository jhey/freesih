
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
		<h2>Actions</h2>

					
<ul class="list-group">	
			<li class="list-group-item">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-th-list"></span> List Urls', 
									 array('controller' => 'urls', 'action' => 'index'), array('escape' => false)); ?>
		</li>
	
	
	</ul>
	
			
			<?php echo $this->element('menu/side_menu_full'); ?>
			
			
				
		
			
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Add Url'); ?></h2>

		<div class="urls form">
		
			<?php echo $this->Form->create('Url', array('role' => 'form')); ?>

				<fieldset>

<div class="form-group"><?php echo $this->Form->input('base', array('class' => 'form-control',
									'label' => 'Original URL:','placeholder' =>'http://...')); ?></div>
					
					
<div class="form-group"><?php echo $this->Form->input('source_id', array('class' => 'form-control',
									'label' => 'Source:')); ?></div>
					
<div class="form-group"><?php echo $this->Form->input('media_id', array('class' => 'form-control',
									'label' => 'Medium:')); ?></div>
					
<div class="form-group"><?php echo $this->Form->input('type_id', array('class' => 'form-control',
									'label' => 'Campaign Type:')); ?></div>
					
<div class="form-group"><?php echo $this->Form->input('name', array('class' => 'form-control',
									'label' => 'Campaign Name:','placeholder' =>'tradeshow')); ?></div>
					
					
<div class="form-group"><?php echo $this->Form->input('description', array('class' => 'form-control',
									'label' => 'Description:','placeholder' =>'Brief description of Email')); ?></div>

					
<div class="form-group"><?php echo $this->Form->input('build', array('class' => 'form-control',
									'label' => 'PROS Custom URL:',)); ?></div>
					
<div class="form-group"><?php echo $this->Form->input('bit', array('class' => 'form-control',
									'label' => 'Short URL:','placeholder' =>'click "Shorten URL"')); ?></div>
					
<?php echo $this->Form->button('Save', array('name' => 'type_2', 'class' => 'btn btn-large btn-success')); ?>				
					
					

					
<?php //echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-success')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>
			
<!--

			<?php echo $this->Form->create('Url',array('action' => 'get_bits', 'type' => 'POST'), array('role' => 'form')); ?>
			<?php echo $this->Form->submit('xShorten', array('class' => 'btn btn-large btn-warning')); ?>
			<?php echo $this->Form->end(); ?>
			
			<?php echo $this->Form->create('Url',array('action' => 'add', 'type' => 'POST'), array('role' => 'form')); ?>
			<?php echo $this->Form->submit('xSave', array('class' => 'btn btn-large btn-warning')); ?>
			<?php echo $this->Form->end(); ?>
		
			<?php echo $this->Form->create('Url',array('action' => 'get_fake_bits', 'type' => 'POST'), array('role' => 'form')); ?>
			
			<?php echo $this->Form->submit('funcs', array('class' => 'btn btn-large btn-success')); ?>
						<?php echo $this->Form->end(); ?>

			
-->
	
		<br>
			
			
		<?php echo $this->Form->create('Url', array('action' => 'get_bits', 'type' => 'POST')); ?>
		<?php echo $this->Form->submit('Shorten URL', array('class' => 'btn btn-large btn-warning')); ?>
						
<?php //echo $form->submit( 'next.arrow.png', array( 'name' => 'task', 'value' => 'prev', 'div' => false ) ); 
 ?>

			<?php echo $this->Form->end(); ?>
			
		
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
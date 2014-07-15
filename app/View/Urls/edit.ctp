
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">

			<h2>Actions</h2>
			
			<ul class="list-group">
				<li class="list-group-item ">

					<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-minus-sign"></span> Delete Url', 
											array('action' => 'delete', $this->Form->value('Url.id')),
													 array('escape' => false), 
													 __('Are you sure you want to delete # %s?', $this->Form->value('Url.id'))); ?>	
				</li>
	
				<li class="list-group-item">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-th-list"></span> List Urls', array('controller' => 'urls', 'action' => 'index'), array('escape' => false)); ?>
		</li>
	
	
					
			</ul><!-- /.list-group -->
			
			<?php echo $this->element('menu/side_menu_full'); ?>
			
			
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Edit Url'); ?></h2>

		<div class="urls form">
		
			<?php echo $this->Form->create('Url', array('role' => 'form')); ?>

				<fieldset>

					
<div class="form-group"><?php echo $this->Form->input('base', array('class' => 'form-control',
									'label' => 'Original URL:',)); ?></div>
					
					
<div class="form-group"><?php echo $this->Form->input('source_id', array('class' => 'form-control',
									'label' => 'Source:',)); ?></div>
					
<div class="form-group"><?php echo $this->Form->input('media_id', array('class' => 'form-control',
									'label' => 'Medium:',)); ?></div>
					
<div class="form-group"><?php echo $this->Form->input('type_id', array('class' => 'form-control',
									'label' => 'Campaign Type:',)); ?></div>
					
<div class="form-group"><?php echo $this->Form->input('name', array('class' => 'form-control',
									'label' => 'Campaign Name:',)); ?></div>
					
					
<div class="form-group"><?php echo $this->Form->input('description', array('class' => 'form-control',
									'label' => 'Description:',)); ?></div>

					
<div class="form-group"><?php echo $this->Form->input('build', array('class' => 'form-control',
									'label' => 'PROS Custom URL:',)); ?></div>
					
<div class="form-group"><?php echo $this->Form->input('bit', array('class' => 'form-control',
									'label' => 'Short URL:')); ?></div>

					<?php echo $this->Form->submit('Save', array('class' => 'btn btn-large btn-success')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>
			
				<br>
		<?php echo $this->Form->create('Url', array('action' => 'get_bits', 'type' => 'POST')); ?>
		<?php //echo $this->Form->input('bit', array('type' => 'input','hiddenField' => 'N',  'disabled')); ?>
		<?php //echo $this->Form->hidden('finbit'); ?>
		<?php echo $this->Form->submit('Shorten URL', array('class' => 'btn btn-large btn-warning')); ?>
		<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
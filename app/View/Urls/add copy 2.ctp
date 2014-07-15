
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
		<h2>Actions</h2>
			
			<ul class="list-group">

<li class="list-group-item">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-th-list"></span> List Urls', 
							 array('action' => 'index'),
							array('escape' => false)); ?>
</li>
				
</ul>	<ul class="list-group">	
			
<li class="list-group-item">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-th-list"></span> List Sources', array('controller' => 'sources', 'action' => 'index'), array('escape' => false)); ?>
</li>
		

<li class="list-group-item">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span> New Source', array('controller' => 'sources', 'action' => 'add'), array('escape' => false)); ?>
</li>
				
			</ul>	<ul class="list-group">	
			
<li class="list-group-item">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-th-list"></span> List Media', array('controller' => 'media', 'action' => 'index'), array('escape' => false)); ?>
</li>
				
<li class="list-group-item">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span> New Media', array('controller' => 'media', 'action' => 'add'), array('escape' => false)); ?>
</li>
			</ul>	<ul class="list-group">	
						
<li class="list-group-item">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-th-list"></span> List Types', array('controller' => 'types', 'action' => 'index'), array('escape' => false)); ?>
</li>
				
<li class="list-group-item">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span> New Type', array('controller' => 'types', 'action' => 'add'), array('escape' => false)); ?>
</li>
			
			
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Add Url'); ?></h2>

		<div class="urls form">
		
			<?php echo $this->Form->create('Url', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('base', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('source_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('media_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('type_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('description', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('build', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('bit', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-success')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>
			
			<br>
		<?php echo $this->Form->create('Url', array('action' => 'get_bits', 'type' => 'POST')); ?>
		<?php //echo $this->Form->input('bit', array('type' => 'input','hiddenField' => 'N',  'disabled')); ?>
		<?php //echo $this->Form->hidden('finbit'); ?>
		<?php echo $this->Form->submit('Generate Bitly', array('class' => 'btn btn-large btn-warning')); ?>
		<?php echo $this->Form->end(); ?>
			

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
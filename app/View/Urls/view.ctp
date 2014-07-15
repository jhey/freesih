
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<h2>Actions</h2>

			<ul class="list-group">			
		<li class="list-group-item">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> Edit',
																 array('action' => 'edit', $url['Url']['id']), 
																 array('escape' => false)); ?> 
				</li>
				
				
	<li class="list-group-item">
		<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-minus-sign"></span> Delete', array('action' => 'delete', $url['Url']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $url['Url']['id'])); ?> </li>
		
		
				
		
				<li class="list-group-item">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-th-list"></span> List Urls', 
									 array('controller' => 'urls', 'action' => 'index'), array('escape' => false)); ?>
		</li>
				
				
	<li class="list-group-item">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span> New Url', 
							 array('controller' => 'urls', 'action' => 'add'), 
							 array('escape' => false)); ?>
</li>
			
		
			</ul><!-- /.list-group -->			
			
			<?php echo $this->element('menu/side_menu_full'); ?>
			
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="urls view">

			<h2><?php  echo __('Url'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($url['Url']['id']); ?>
			&nbsp;
		</td>
</tr>
				<tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($url['Url']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($url['Url']['modified']); ?>
			&nbsp;
		</td>
</tr>
						
						<tr>		<td><strong><?php echo __('Original Url'); ?></strong></td>
		<td><?php echo $this->Html->link($url['Url']['base'], $url['Url']['base'], 
		array('target'=>'_blank')); ?>
		</td>
</tr>
						
						<tr>		<td><strong><?php echo __('Campaign Type'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($url['Type']['name'], array('controller' => 'types', 'action' => 'view', $url['Type']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>
						<tr>		<td><strong><?php echo __('Campaign Name'); ?></strong></td>
		<td>
			<?php echo h($url['Url']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Source'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($url['Source']['name'], array('controller' => 'sources', 'action' => 'view', $url['Source']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Medium'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($url['Media']['name'], array('controller' => 'media', 'action' => 'view', $url['Media']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>
						<tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($url['Url']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Pros Custom Url'); ?></strong></td>
		<td>
			
			<?php echo $this->Html->link($url['Url']['build'], $url['Url']['build'],
		array('target'=>'_blank')); ?>
		</td>
</tr><tr>		<td><strong><?php echo __('Short Url'); ?></strong></td>
		<td>
			
			<?php echo $this->Html->link($url['Url']['bit'], $url['Url']['bit'],
		array('target'=>'_blank')); ?>
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

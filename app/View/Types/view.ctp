
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Type'), array('action' => 'edit', $type['Type']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Type'), array('action' => 'delete', $type['Type']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $type['Type']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Types'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Type'), array('action' => 'add'), array('class' => '')); ?> </li>
	</ul><!-- /.list-group -->
	
	<?php echo $this->element('menu/side_menu_options'); ?>
			
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="types view">

			<h2><?php  echo __('Campaign Type'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($type['Type']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($type['Type']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($type['Type']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($type['Type']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($type['Type']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Urls'); ?></h3>
				
				<?php if (!empty($type['Url'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Original Url'); ?></th>
		<th><?php echo __('Campaign Name'); ?></th>
<!--		<th><?php echo __('Created'); ?></th>-->
<!--		<th><?php echo __('Modified'); ?></th>-->
<!--		<th><?php echo __('Source Id'); ?></th>-->
<!--		<th><?php echo __('Media Id'); ?></th>-->
<!--		<th><?php echo __('Type Id'); ?></th>-->
		<th><?php echo __('Short URL'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($type['Url'] as $url): ?>
		<tr>
			<td><?php echo $url['id']; ?></td>
			<td><?php echo $url['base']; ?></td>
			<td><?php echo $url['name']; ?></td>
<!--
			<td><?php echo $url['created']; ?></td>
			<td><?php echo $url['modified']; ?></td>
			<td><?php echo $url['source_id']; ?></td>
			<td><?php echo $url['media_id']; ?></td>
			<td><?php echo $url['type_id']; ?></td>
-->
			<td><?php echo $url['bit']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'urls', 'action' => 'view', $url['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'urls', 'action' => 'edit', $url['id']), array('class' => 'btn btn-default btn-xs')); ?>
<!--				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'urls', 'action' => 'delete', $url['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $url['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
								
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Url'), array('controller' => 'urls', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

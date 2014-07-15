
<div id="page-container" class="row">

	
	<div class="fright">
			<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('View All'), array('controller' => 'categories', 'action' => 'index'), array('class' => 'btn btn-primary btn-success', 'escape' => false)); ?>				
	</div>
	
<!--
	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Freebies'), array('controller' => 'freebies', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Freeby'), array('controller' => 'freebies', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Needies'), array('controller' => 'needies', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Needy'), array('controller' => 'needies', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul>
		</div>
	</div>
	
-->
	<div id="page-content" class="col-sm-9">
		
		<div class="categories view">

			<h2><?php  echo __('Category'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Short Name'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['short_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Freebies'); ?></h3>
				
				<?php if (!empty($category['Freeby'])): ?>
					
					<div class="table table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
<!--											<th><?php echo __('Id'); ?></th>-->
<!--		<th><?php echo __('Category Id'); ?></th>-->
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Contact'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Condition'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
<!--		<th><?php echo __('Modified'); ?></th>-->
<!--									<th class="actions"><?php echo __('Actions'); ?></th>-->
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($category['Freeby'] as $freeby): ?>
		<tr>
<!--			<td><?php echo $freeby['id']; ?></td>-->
<!--			<td><?php echo $freeby['category_id']; ?></td>-->
<!--			<td><?php echo $freeby['name']; ?></td>-->
			<td>
			<?php echo $this->Html->link($freeby['name'], array('controller' => 'freebies', 'action' => 'view', $freeby['id']), array('class' => ' ')); ?>
			</td>
			
			<td><?php echo $freeby['contact']; ?></td>
			<td><?php echo $freeby['location']; ?></td>
			<td><?php echo $freeby['condition']; ?></td>
			<td><?php echo $freeby['description']; ?></td>
			<td><?php echo $freeby['created']; ?></td>
<!--			<td><?php echo $freeby['modified']; ?></td>-->
<!--
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'freebies', 'action' => 'view', $freeby['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'freebies', 'action' => 'edit', $freeby['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'freebies', 'action' => 'delete', $freeby['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $freeby['id'])); ?>
			</td>
-->
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Freeby'), array('controller' => 'freebies', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

					
			<div class="related">

				<h3><?php echo __('Related Needies'); ?></h3>
				
				<?php if (!empty($category['Needy'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
<!--											<th><?php echo __('Id'); ?></th>-->
<!--		<th><?php echo __('Category Id'); ?></th>-->
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Contact'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
<!--		<th><?php echo __('Modified'); ?></th>-->
<!--									<th class="actions"><?php echo __('Actions'); ?></th>-->
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($category['Needy'] as $needy): ?>
		<tr>
<!--			<td><?php echo $needy['id']; ?></td>-->
<!--			<td><?php echo $needy['category_id']; ?></td>-->
<!--			<td><?php echo $needy['name']; ?></td>-->
			<td>
				<?php echo $this->Html->link($needy['name'], array('controller' => 'needies', 'action' => 'view', $needy['id']), array('class' => ' ')); ?>
				
			</td>
			<td><?php echo $needy['contact']; ?></td>
			<td><?php echo $needy['location']; ?></td>
			<td><?php echo $needy['description']; ?></td>
			<td><?php echo $needy['created']; ?></td>
<!--			<td><?php echo $needy['modified']; ?></td>-->
<!--
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'needies', 'action' => 'view', $needy['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'needies', 'action' => 'edit', $needy['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'needies', 'action' => 'delete', $needy['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $needy['id'])); ?>
			</td>
-->
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Needy'), array('controller' => 'needies', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

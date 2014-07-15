
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<h2>Actions</h2>
					
<ul class="list-group">	
	
	
	<li class="list-group-item">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span> New Url', 
							 array('controller' => 'urls', 'action' => 'add'), 
							 array('escape' => false)); ?>
</li>
	</ul>
	
			<?php echo $this->element('menu/side_menu_full'); ?>
			
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="urls index">
		
			<h2><?php echo __('Urls'); ?></h2>
			
			<div class="table-responsive">
				
				<table cellpadding="0" cellspacing="0"  style="width:100%" class="table table-striped table-bordered">
					<thead>
						<tr>
<!--
							
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('base'); ?></th>
-->
							
							<th width="10%"><?php echo $this->Paginator->sort('Campaign Name'); ?></th>

							<!--
							<th width="10%"><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<th><?php echo $this->Paginator->sort('source_id'); ?></th>
							<th><?php echo $this->Paginator->sort('media_id'); ?></th>
							<th><?php echo $this->Paginator->sort('type_id'); ?></th>
							
-->
							<th width="20%"><?php echo $this->Paginator->sort('Description'); ?></th>
							<th width="10%"><?php echo $this->Paginator->sort('Custom URL'); ?></th>
							<th width="10%"><?php echo $this->Paginator->sort('Short URL'); ?></th>
							
							<th width="30%" class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($urls as $url): ?>
	<tr>
<!--
		
		<td><?php echo h($url['Url']['id']); ?>&nbsp;</td>
		<td><?php echo h($url['Url']['base']); ?>&nbsp;</td>
-->
		
		<td><?php echo h($url['Url']['name']); ?>&nbsp;</td>
		
			<!--
		<td><?php echo $this->Time->niceShort($url['Url']['created']); ?>&nbsp;</td>
	
		<td><?php echo $this->Time->niceShort($url['Url']['modified']); ?>&nbsp;</td>

		<td>
			<?php echo $this->Html->link($url['Source']['name'], array('controller' => 'sources', 'action' => 'view', $url['Source']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($url['Media']['name'], array('controller' => 'media', 'action' => 'view', $url['Media']['id'])); ?>
		</td>s
		<td>
			<?php echo $this->Html->link($url['Type']['name'], array('controller' => 'types', 'action' => 'view', $url['Type']['id'])); ?>
		</td>
-->
		<td><?php echo h($url['Url']['description']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($url['Url']['build'], $url['Url']['build'], array('target'=>'_blank')); ?></td>
		<td><?php echo $this->Html->link($url['Url']['bit'], $url['Url']['bit'], 		array('target'=>'_blank')); ?></td>
		<td class="actions">
			<!-- 
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $url['Url']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $url['Url']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), 
											 array('action' => 'delete', 
																 $url['Url']['id']), 
											 array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $url['Url']['id'])); ?>
		-->

			
			
	<div class="btn-group">
		
<a href="<?php echo $this->Html->url(array('controller'=>'urls', 'action'=>'view', $url['Url']['id'])); ?>" ><button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></a>
<a href="<?php echo $this->Html->url(array('controller'=>'urls', 'action'=>'edit', $url['Url']['id'])); ?>" ><button type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a>
      
<?php echo $this->Form->postLink('<button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-minus-sign"></span></button>', 
											 array('action' => 'delete', $url['Url']['id']), 
											 array('escape' => false),
											 __('Are you sure you want to delete # %s?', $url['Url']['id'])
											); ?>
			
	
      </div>
			
			
	
			
			
			
			
			
			
		
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
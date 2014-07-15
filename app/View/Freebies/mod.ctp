
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Freeby'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul>
			
		</div>
		
	</div>
	

	
	<?php //echo $xtemp; ?>
	

	

	
	
	
		<div id="page-content-before" class="col-sm-12">
			
			<div class="fright">
			<a href="<?php echo $this->Html->url(array('controller'=>'freebies', 
													   'action'=>'add',)); ?>" >
				<button type="button" class="btn btn-success btn-m"><span class="glyphicon glyphicon-plus-sign"> New</span></button></a>
</div>
			
			<div class="fright">
		&nbsp;&nbsp;
				</div>
			
		<div class="fright">
			<?php
//$murl = $_SERVER[ 'REQUEST_URI' ];
//$murl = "http://www.yahoo.com";
//echo $this->Facebook->share($murl);
	?>
			</div>
			
			
		
			</div>
	
			
	<div id="page-content" class="col-sm-11">

		
		
		
		
		<div class="freebies index">
		
			<h2>
				
				<?php echo __('Freebies'); ?></h2>
			
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
<!--							<th><?php echo $this->Paginator->sort('id'); ?></th>-->
							<th><?php echo $this->Paginator->sort('category_id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('contact'); ?></th>
							<th><?php echo $this->Paginator->sort('location'); ?></th>
							<th><?php echo $this->Paginator->sort('condition'); ?></th>
							<th><?php echo $this->Paginator->sort('description'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($freebies as $freeby): ?>
	<tr>
<!--		<td><?php echo h($freeby['Freeby']['id']); ?>&nbsp;</td>-->
		<td>
			<?php echo $this->Html->link($freeby['Category']['name'], array('controller' => 'categories', 'action' => 'view', $freeby['Category']['id'])); ?>
		</td>
		
		<td>
			<?php echo $this->Html->link($freeby['Freeby']['name'], array('action' => 'view', $freeby['Freeby']['id']), array('class' => ' ')); ?>
			&nbsp;</td>
		
		<td><?php echo h($freeby['Freeby']['contact']); ?>&nbsp;</td>
		<td><?php echo h($freeby['Freeby']['location']); ?>&nbsp;</td>
		<td><?php echo h($freeby['Freeby']['condition']); ?>&nbsp;</td>
		<td><?php echo h($freeby['Freeby']['description']); ?>&nbsp;</td>
		<td><?php echo h($this->Time->niceShort($freeby['Freeby']['created'])); ?>&nbsp;</td>
		
<!--		<td><?php echo h($this->Time->niceShort($freeby['Freeby']['created'])); ?>&nbsp;</td>-->
		
		<td><?php echo h($freeby['Freeby']['created']); ?>&nbsp;</td>
<!--		<td><?php echo h($freeby['Freeby']['modified']); ?>&nbsp;</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $freeby['Freeby']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $freeby['Freeby']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $freeby['Freeby']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $freeby['Freeby']['id'])); ?>
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



<div id="page-container" class="row">
			

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
			<a href="<?php echo $this->Html->url(array('controller'=>'freebies', 
													   'action'=>'index',)); ?>" >
				<button type="button" class="btn btn-info btn-m"><span class="glyphicon glyphicon-eye-open"> All</span></button></a>
	
			</div>
			</div>
			
		
	
	
		
	
	
	<div id="page-content" class="col-sm-9">
		
		<div class="freebies view">

			<h2><?php  echo __('Freeby'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
<!--
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($freeby['Freeby']['id']); ?>
			&nbsp;
		</td>
</tr>
-->
	<tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($freeby['Freeby']['name']); ?>
			&nbsp;
		</td>
</tr>
						
											<tr>		<td><strong><?php echo __('Category'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($freeby['Category']['name'], array('controller' => 'categories', 'action' => 'view', $freeby['Category']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>
						
						
						<tr>		<td><strong><?php echo __('Contact'); ?></strong></td>
		<td>
			<?php echo h($freeby['Freeby']['contact']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Location'); ?></strong></td>
		<td>
			<?php echo h($freeby['Freeby']['location']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Condition'); ?></strong></td>
		<td>
			<?php echo h($freeby['Freeby']['condition']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($freeby['Freeby']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($freeby['Freeby']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($freeby['Freeby']['modified']); ?>
			&nbsp;
		</td>
</tr>	
						
						<tr>		
							<td><strong><?php echo __('Full Url'); ?></strong></td>
		<td>
		
			<a href="<?php  echo $fulurl; ?>" class=""><?php  echo $fulurl; ?></a>
			&nbsp;
		</td>
</tr>	
						<tr>		
							<td><strong><?php echo __('Short Url'); ?></strong></td>
		<td>
		
			<a href="<?php  echo $biturl; ?>" class=""><?php  echo $biturl; ?></a>
			&nbsp;
		</td>
</tr>
						
						
	<tr>		
							<td><strong><?php echo __('Share on Facebook'); ?></strong></td>
		<td>
		
	<?php echo $this->Facebook->share($fulurl); ?>
			&nbsp;
		</td>
</tr>		
								<tr>		
							<td><strong><?php echo __('Facebook eMail'); ?></strong></td>
		<td>
			
<?php echo
$this->Facebook->sendButton($fulurl);
			?>
			
			&nbsp;
		</td>
</tr>
							
	<tr>		
							<td><strong><?php echo __('Share on Twitter'); ?></strong></td>
		<td>
		
			
			
	<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php  echo $biturl; ?>" data-via="jhey" data-size="medium" data-hashtags="Free">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			&nbsp;
		</td>
</tr>					
					
					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

<div class="news">
	<?php
		if (count($nodes) == 0) {
			echo __d('croogo', 'No items found.');
		}
	?>

	<?php
		foreach ($nodes as $node):
			$this->Nodes->set($node);
	?>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="thumbnail">
				<?php
				    $this->Helpers->load('Multiattach.Multiattach');
				    $this->Multiattach->set($node["Multiattach"]);
				    $images = $this->Multiattach->filter(array('mime'=>'#image#i'));
				    $imageF = array(
				        'plugin' => 'Multiattach',
				        'controller' => 'Multiattach',
				        'action' => 'displayFile', 
				        'admin' => false,
				        );
				    if(!empty($images)){
					    foreach ($images as $image) {
					        ?><img src="<?php echo $this->Html->url($imageF + array('dimension' => 'main_slide', 'filename' => $image["Multiattach"]['filename']) ); ?>" alt="<?php echo $image["Multiattach"]['comment']; ?>" />
					        <?php
					    }
					}else{
						echo $this->Html->image('default-thumbnail.jpg');
					}
				?>
				<div class="caption">
					<i class="glyphicon glyphicon-time"><?php echo $this->Nodes->field('created'); ?></i>
					<h5><?php echo $this->Html->link($this->Nodes->field('title'), $this->Nodes->field('url')); ?></h5>
					<?php echo $this->Nodes->excerpt(); ?>
				</div>
			</div>
		</div>
	<?php
		endforeach;
	?>
	<div class="paging"><?php echo $this->Paginator->numbers(); ?></div>
</div>
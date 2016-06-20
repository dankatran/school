<?php $this->Nodes->set($node); ?>
<div class="col-md-12">	
	<h4 class="col-md-12"><?php echo $this->Nodes->field('title'); ?></h4>
	<i class="glyphicon glyphicon-time"><?php echo $this->Nodes->field('created'); ?></i>
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
		        ?><img src="<?php echo $this->Html->url($imageF + array('dimension' => 'main_slide', 'filename' => $image["Multiattach"]['filename']) ); ?>" alt="<?php echo $image["Multiattach"]['comment']; ?>" class = 'img-responsive col-md-4 col-xs-12 col-sm-6'/>
		        <?php
		    }
		}else{
			echo $this->Html->image('default-thumbnail.jpg', array('class'=>'img-responsive col-md-4 col-xs-12 col-sm-6'));
		}
	?>
	<div class="content">
		<?php echo $this->Nodes->body(); ?>
	</div>
	<?php if (CakePlugin::loaded('Comments')): ?>
		<div id="comments" class="node-comments col-md-12">
			<?php
				$type = $types_for_layout[$this->Nodes->field('type')];

				if ($type['Type']['comment_status'] > 0 && $this->Nodes->field('comment_status') > 0) {
					echo $this->element('Comments.comments', array('model' => 'Node', 'data' => $node));
				}

				if ($type['Type']['comment_status'] == 2 && $this->Nodes->field('comment_status') == 2) {
					echo $this->element('Comments.comments_form', array('model' => 'Node', 'data' => $node));
				}
			?>
		</div>
	<?php endif; ?>
</div>


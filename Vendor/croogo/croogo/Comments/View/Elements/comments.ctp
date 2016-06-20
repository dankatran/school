<div class="comments">
<?php
	$commentHeading = $node['Node']['comment_count'] . ' ';
	if ($node['Node']['comment_count'] == 1) {
		$commentHeading .= __d('croogo', 'Bình luận');
	} else {
		$commentHeading .= __d('croogo', 'Bình luận');
	}
	echo $this->Html->tag('h3', $commentHeading);

	foreach ($comments as $comment) {
		echo $this->element('Comments.comment', array('comment' => $comment, 'level' => 1));
	}
?>
</div>
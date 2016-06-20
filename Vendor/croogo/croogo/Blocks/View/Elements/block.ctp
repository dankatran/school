<?php
$this->set(compact('block'));
$b = $block['Block'];
$class = 'block block-' . $b['alias'];
if ($block['Block']['class'] != null) {
	$class .= ' ' . $b['class'];
}
?>
<div id="block-<?php echo $b['id']; ?>" class="block">
<?php if ($b['show_title'] == 1): ?>
	<div class="title"><?php echo $b['title']; ?></div>
<?php endif; ?>
	<div>
<?php
	echo $this->Layout->filter($b['body'], array(
		'model' => 'Block', 'id' => $b['id']
	));
?>
	</div>
</div>
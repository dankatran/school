<?php
	echo $this->Form->create('Node', array('url' => array('admin' => false, 'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'search')));
	$this->Form->unlockField('q');
	echo $this->Form->input('q', array(
		'label' => false,
		'class' => 'form-control',
		'placeholder' => 'Tìm kiếm...'
	));
	//echo $this->Form->button(__d('croogo', 'Search'), array('div' => false, 'class' =>'btn btn-primary'));
	echo $this->Form->end();
?>
<div class="row">
	<legend><?php echo $title_for_layout; ?></legend>
	<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'forgot')));?>
		<fieldset>
		<?php
			echo $this->Form->input('username', array(
				'label' => false,
				'class' => 'form-control',
				'placeholder' => 'Vui lòng nhập tên đăng nhập'
			));
		?>
		</fieldset>
	<?php echo $this->Form->end(array(
		'class' => 'btn btn-primary',
		'label' => 'Xác nhận',
		'div' => false
	));?>
</div>

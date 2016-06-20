<div class="col-md-12">
	<legend><?php echo $title_for_layout; ?></legend>
	<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));?>
		<fieldset>
		<?php
			echo $this->Form->input('username', array(
				'label' => false,
				'class' => 'form-control',
				'placeholder' => 'Tên đăng nhập'
			));
			echo $this->Form->input('password', array(
				'label' => false,
				'placeholder' => 'Mật khẩu',
				'class' => 'form-control',
			));
		?>
		</fieldset>
	<?php 
		echo $this->Form->end(array(
			'label' => 'Đăng nhập',
			'class' => 'btn btn-primary',
			'div' => false
		)); 
	?>
	<?php
		echo $this->Html->link(__d('croogo', 'Quên mật khẩu?'), array(
			'controller' => 'users', 'action' => 'forgot',
		)).' | ';
		echo $this->Html->link(__d('croogo', 'Đăng ký'), array(
			'controller' => 'users', 'action' => 'add',
		));
	?>
</div>
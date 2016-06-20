<div class="col-md-12">
	<legend><?php echo $title_for_layout; ?></legend>
	<?php echo $this->Form->create('User');?>
		<fieldset>
		<?php
			echo $this->Form->input('role_id', array(
				'class' => 'form-control',
				'label' => false,
				'empty' => 'Chọn tài khoản',
				'required' => true
			));
			echo $this->Form->input('username', array(
				'class' => 'form-control',
				'label' => false,
				'placeholder' => 'Tên đăng nhập'
			));
			echo $this->Form->input('name', array(
				'class' => 'form-control',
				'label' => false,
				'placeholder' => 'Họ tên'
			));
			echo $this->Form->input('email', array(
				'class' => 'form-control',
				'label' => false,
				'placeholder' => 'Địa chỉ email',
			));
			echo $this->Form->input('password', array(
				'value' => '',
				'class' => 'form-control',
				'label' => false,
				'placeholder' => 'Mật khẩu'
			));
			echo $this->Form->input('verify_password', array(
				'type' => 'password',
				'value' => '',
				'class' => 'form-control',
				'label' => false,
				'placeholder' => 'Nhập lại mật khẩu'
			));
		?>
		</fieldset>
	<?php 
		echo $this->Form->button('<i class="glyphicon glyphicon-registration-mark"></i> Đăng ký',array(
			'class' => 'btn btn-primary',
			'div' => false,
			'type' => 'submit'
		), array('escape'=>false));
	?>
</div>
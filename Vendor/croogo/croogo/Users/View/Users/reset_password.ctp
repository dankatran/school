<legend>Thay mật khẩu</legend>
<?php 
	echo $this->Form->create('User', array(
		'url' => array('plugin' => 'users', 'controller' => 'users', 'action' => 'reset_password', $this->Session->read('Auth.User.username'))
	));
	echo $this->Form->input('id');
	echo $this->Form->input('password', $options = array(
		'label' => false,
		'placeholder' => 'Nhập mật khẩu mới',
		'class' => 'form-control',
		'value' => ''
	));
	echo $this->Form->input('verify_password', $options = array(
		'class' => 'form-control',
		'type' => 'password',
		'label' => false,
		'placeholder' => 'Nhập lại mật khẩu mới'
	));
	echo $this->Form->button('<i class="glyphicon glyphicon-repeat"></i> Xác nhận', $options = array(
		'class' => 'btn btn-primary',
		'escape' => false
	));
?>
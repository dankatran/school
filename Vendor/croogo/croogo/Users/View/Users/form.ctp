<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<legend><i class="glyphicon glyphicon-edit"></i> Sửa thông tin</legend>
	<?php 
		echo $this->Form->create('User');
		echo $this->Form->input('id');
		echo $this->Form->input('name', $options = array(
			'class' => 'form-control',
			'label' => 'Họ tên'
		));
		echo $this->Form->input('username', $options = array(
			'class' => 'form-control',
			'label' => 'Tên đăng nhập'
		));
		echo $this->Form->input('email', $options = array(
			'class' => 'form-control',
			'label' => 'Địa chỉ email'
		));
		echo $this->Form->input('website', $options = array(
			'class' => 'form-control',
			'label' => 'Địa chỉ facebook'
		));
		echo $this->Form->input('phone', $options = array(
			'class' => 'form-control',
			'label' => 'Số điện thoại',
			'placeholder' => 'Số điện thoại'
		));
		echo $this->Form->input('address', $options = array(
			'class' => 'form-control',
			'label' => 'Địa chỉ',
			'placeholder' => 'Địa chỉ'
		));
		echo $this->Form->input('birthday', $options = array(
 			'label' => 'Ngày sinh',
 			'class' => 'datetime form-control',
 			'minYear' => date('Y')-70,
		));
		echo $this->Form->button('<i class="glyphicon glyphicon-floppy-save"></i> Xác nhận', $options = array(
			'class' => 'btn btn-primary',
			'type' => 'submit'
		), array('escape' => false));
	?>
</div>
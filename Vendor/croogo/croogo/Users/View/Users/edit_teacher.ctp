<legend><i class="glyphicon glyphicon-edit"></i> Cập nhật thông tin giáo viên <?php echo $name['User']['name']; ?></legend>
<?php 
	echo $this->Form->create('User');
	echo $this->Form->input('id');
	echo '<div class="col-md-4 col-xs-12">'.$this->Form->input('university', $options = array(
		'label' => 'Trường tốt nghiệp',
		'class' => 'form-control',
		'placeholder' => 'Trường tốt nghiệp'
	)).'</div>';
	echo '<div class="col-md-4 col-xs-12">'.$this->Form->input('subject_id', $options = array(
		'label' => 'Ngành học',
		'class' => 'form-control',
		'empty' => 'Chọn ngành học'
	)).'</div>';
	echo '<div class="col-md-4 col-xs-12">'.$this->Form->input('department_id', $options = array(
		'label' => 'Tổ chuyên môn',
		'class' => 'form-control',
		'empty' => 'Chọn tổ chuyên môn'
	)).'</div>';
	if($name['User']['department_id'] == 10){
		$position = array(
			9 => 'Hiệu trưởng',
			10 => 'Phó hiệu trưởng'
		);
		echo '<div class="col-md-12">'.$this->Form->input('position', $options = array(
			'class' => 'form-control',
			'empty' => 'Chọn chức vụ',
			'label' => 'Chức vụ',
			'options' => $position
		)).'</div>';
	}
	echo '<div class="col-md-12 col-xs-12">'.$this->Form->input('body', $options = array(
		'class' => 'form-control',
		'label' => 'Giới thiệu bản thân',
		'placeholder' => 'Giới thiệu bản thân'
	)).'</div>';
	echo '<div class="col-md-12 col-xs-12">'.$this->Form->button('<i class="glyphicon glyphicon-floppy-save"></i> Lưu thông tin', $options = array(
		'class' => 'btn btn-primary',
		'type' => 'submit'
	), array('escape' => false)).'</div>';
<legend><?php echo $title_for_layout; ?></legend>
<div id="loading" style="display:none; position: absolute; left: 38%; z-index: 999"><?php echo $this->Html->image('712.gif'); ?></div>
<?php 
	$options = "<option value=''>Lớp học</option>";
		while($year = each($years)) {
			$options .= "<option value='$year[0]'>$year[1]</option>";
	}
	$options = "<option value=''>Lớp học</option>";
		while($class = each($classrooms)) {
			$options .= "<option value='$class[0]'>$class[1]</option>";
	}
	echo $this->Form->create('User');
	echo $this->Form->input('id');
	//Năm học
	$year = json_decode($this->data['User']['year_id']);
	//Lớp học
	$class = json_decode($this->data['User']['classroom_id']);
	if(empty($year[0])){
		echo '<div class="col-md-5">'.$this->Form->input('year_id1', $options = array(
			'class' => 'form-control years',
			'empty' => 'Chọn năm học',
			'label' => false,
			'options' => $years,
			'required' => true
		)).'</div>';
	}else{
		echo '<div class="col-md-5">'.$this->Form->input('year_id1', $options = array(
			'class' => 'form-control years',
			'empty' => 'Chọn năm học',
			'label' => false,
			'options' => $years,
			'required' => true,
			'value' => $year[0]
		)).'</div>';
	}
	if(empty($class[0])){
		echo '<div class="col-md-6">'.$this->Form->input('classroom_id1', $options = array(
			'class' => 'form-control classrooms',
			'empty' => 'Chọn lớp học',
			'label' => false,
			'options' => $classrooms,
			'required' => true
		)).'</div>';
	}else{
		echo '<div class="col-md-6">'.$this->Form->input('classroom_id1', $options = array(
			'class' => 'form-control classrooms',
			'empty' => 'Chọn lớp học',
			'label' => false,
			'options' => $classrooms,
			'required' => true,
			'value' => $class[0]
		)).'</div>';
	}
	echo '<div class="col-md-1">';
		echo '<a type="button" data-toggle="collapse" data-target="#demo" class="glyphicon glyphicon-plus"></a>';
	echo '</div>';
	echo '<div id="demo" class="collapse">';
		echo '<div class="col-md-5">'.$this->Form->input('year_id2', $options = array(
			'class' => 'form-control years2',
			'empty' => 'Chọn năm học',
			'label' => false,
			'options' => $years
		)).'</div>';
		echo '<div class="col-md-6">'.$this->Form->input('classroom_id2', $options = array(
			'class' => 'form-control classrooms2',
			'empty' => 'Chọn lớp học',
			'label' => false,
			'options' => $classrooms
		)).'</div>';
		echo '<div class="col-md-1">';
			echo '<a type="button" data-toggle="collapse" data-target="#demo1" class="glyphicon glyphicon-plus"></a>';
		echo '</div>';
	echo '</div>';
	echo '<div id="demo1" class="collapse">';
		echo '<div class="col-md-5">'.$this->Form->input('year_id3', $options = array(
			'class' => 'form-control years3',
			'empty' => 'Chọn năm học',
			'label' => false,
			'options' => $years
		)).'</div>';
		echo '<div class="col-md-6">'.$this->Form->input('classroom_id3', $options = array(
			'class' => 'form-control classrooms3',
			'empty' => 'Chọn lớp học',
			'label' => false,
			'options' => $classrooms
		)).'</div>';
	echo '</div>';
	$position = array(
		1 => 'Bí thư',
		2 => 'Phó bí thư',
		3 => 'Ủy viên',
		4 => 'Lớp trưởng',
		5 => 'Lớp phó học tập',
		6 => 'Lớp phó văn thể mỹ',
		7 => 'Lớp phó lao động',
		8 => 'Thủ quỹ'
	);
	echo '<div class="col-md-12">'.$this->Form->input('position', $options = array(
		'label' => false,
		'class' => 'form-control',
		'empty' => 'Chức vụ',
		'options' => $position
	)).'</div>';
	echo '<div class="col-md-12">'.$this->Form->input('body', $options = array(
		'label' => 'Giới thiệu bản thân',
		'class' => 'form-control',
		'placeholder' => 'Giới thiệu bản thân',
	)).'</div>';
	echo '<div class="col-md-12">'.$this->Form->button('<i class="glyphicon glyphicon-floppy-open"></i> Lưu thông tin', $options = array(
		'class' => 'btn btn-primary',
		'escape' => false
	)).'</div>';
?>
<script type="text/javascript">
	$(document).ready(function() {
		$(".years").change(function() {
			$("#loading").show();
		    var url = "/years/classrooms";
	        var yearid = $(this).val();
	        $.ajax({
	            type: 'GET',
	            url: url,
	            data: { yearid : yearid },
	            success: function (data){
	            	console.log(data);
	            	$("#loading").fadeOut(1000);
	            	$('.classrooms').html(data);
	            }
	        });
	    });
	    $(".years2").change(function() {
			$("#loading").show();
		    var url = "/years/classrooms";
	        var yearid = $(this).val();
	        $.ajax({
	            type: 'GET',
	            url: url,
	            data: { yearid : yearid },
	            success: function (data){
	            	console.log(data);
	            	$("#loading").fadeOut(1000);
	            	$('.classrooms2').html(data);
	            }
	        });
	    });
	    $(".years3").change(function() {
			$("#loading").show();
		    var url = "/years/classrooms";
	        var yearid = $(this).val();
	        $.ajax({
	            type: 'GET',
	            url: url,
	            data: { yearid : yearid },
	            success: function (data){
	            	console.log(data);
	            	$("#loading").fadeOut(1000);
	            	$('.classrooms3').html(data);
	            }
	        });
	    });
	});
</script>
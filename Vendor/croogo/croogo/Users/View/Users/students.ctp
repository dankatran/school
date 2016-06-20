<legend><i class="glyphicon glyphicon-education"></i> Danh sách học sinh</legend>
<div id="loading" style="display:none; position: absolute; left: 46%; z-index: 999"><?php echo $this->Html->image('712.gif'); ?></div>
<?php
	foreach ($years as $key => $y) {
		$options[$y['Year']['id']] = $y['Year']['name'];
	}
	foreach ($classrooms as $key => $c) {
		$class[$c['Classroom']['id']] = $c['Classroom']['name'];
	}
?>
<div class="col-md-6 col-xs-12">
	<?php
		echo $this->Form->input('year_id', $options = array(
			'class' => 'form-control years',
			'label' => false,
			'empty' => 'Chọn năm học',
			'options' => $options
		));
	?>
</div>
<div class="col-md-6 col-xs-12">
	<?php
		echo $this->Form->input('classroom_id', $options = array(
			'class' => 'form-control classrooms',
			'label' => false,
			'empty' => 'Chọn lớp học',
			'options' => $class
		));
	?>
</div>
<div class="table-responsive col-md-12">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th><i class="glyphicon glyphicon-user"></i> Họ tên</th>
				<th>Lớp học</th>
				<th>Năm học</th>
				<th>Chức vụ</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($students as $key => $s) { ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td>
						<?php 
							echo $this->Html->link($s['User']['name'],array(
								'plugin' => 'users',
								'controller' => 'users',
								'action' => 'view',
								'username' => $s['User']['username']
							)); 
						?>
					</td>
					<td>
						<?php
							$class = json_decode($s['User']['classroom_id']);
							if(!empty($class)){
								foreach ($class as $key => $value) {
									if($value != 0){
										echo $classrooms[$value-1]['Classroom']['name'].'<br>';
									}
								}
							}
						?>
					</td>
					<td>
						<?php
							$year = json_decode($s['User']['year_id']);
							if(!empty($year)){
								foreach ($year as $key => $y) {
									if($y != 0){
										echo $years[$y-1]['Year']['name'].'<br>';
									}
								}
							}
						?>
					</td>
					<td>
						<?php
							if($s['User']['position'] == 1){
								echo 'Bí thư';
							}
							if($s['User']['position'] == 2){
								echo 'Phó Bí thư';
							}
							if($s['User']['position'] == 3){
								echo 'Ủy viên';
							}
							if($s['User']['position'] == 4){
								echo 'Lớp trưởng';
							}
							if($s['User']['position'] == 5){
								echo 'Lớp phó học tập';
							}
							if($s['User']['position'] == 6){
								echo 'Lớp phó văn thể mỹ';
							}
							if($s['User']['position'] == 7){
								echo 'Lớp phó lao động';
							}
							if($s['User']['position'] == 8){
								echo 'Thủ quỹ';
							}
						?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<!--Load class-->
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
	});
</script>
<!--Filter Ajax by year-->
<script type="text/javascript">
	$(document).ready(function(){
		$('.years').change(function(){
			var yearid = $(this).val();
			$.ajax({
			 	url: "/users/users/years", 
			 	method: "GET",
				data: { yearid : yearid},
				dataType: "html",
			 	success: function(result){
			 		console.log(result);
			        $(".table-responsive").html(result);
			    }
			})
		});
	});
</script>
<!--Filter Ajax by class-->
<script type="text/javascript">
	$(document).ready(function(){
		$('.classrooms').change(function(){
			//$("#loading").show();
			var classid = $(this).val();
			$.ajax({
			 	url: "/users/users/classrooms", 
			 	method: "GET",
				data: { classid : classid},
				dataType: "html",
			 	success: function(result){
			 		console.log(result);
			        $(".table-responsive").html(result);
			        //$("#loading").fadeOut(1000);
			    }
			})
		});
	});
</script>


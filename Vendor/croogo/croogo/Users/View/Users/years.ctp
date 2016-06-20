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

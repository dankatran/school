<legend>Danh sách học sinh</legend>
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Họ tên</th>
				<th>Lớp học</th>
				<th>Năm học</th>
				<th>Hoạt động</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($students as $key => $s) { ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $s['User']['name']; ?></td>
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
								foreach ($year as $key => $value) {
									if($value != 0){
										echo $years[$value-1]['Year']['name'].'<br>';
									}
								}
							}
						?>
					</td>
					<td>
						<?php 
							echo $this->Html->link('', array(
								'controller' => 'users', 
								'action' => 'edit', 
								$s['User']['id']
							), array(
								'class' => 'icon-pencil icon-large',
								'data-title' => 'Sữa thông tin '.$s['User']['name'].'',
								'rel' => 'tooltip'
							));
						?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<legend><i class="fa fa-maxcdn"></i> Ban giám hiệu</legend>
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Họ tên</th>
				<th>Chức vụ</th>
				<th>Trường tốt nghiệp</th>
				<th>Chuyên ngành</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($managers as $key => $m) { ?>
			<tr>
				<td><?php echo $key+1; ?></td>
				<td><?php echo $this->Html->link($m['User']['name'], array('plugin' => 'users', 'controller' => 'users', 'action' => 'view', 'username' => $m['User']['username'])); ?></td>
				<td>
					<?php 
						if($m['User']['position'] == 9){
							echo 'Hiệu trưởng';
						}
						if($m['User']['position'] == 10){
							echo 'Hiệu phó';
						}
					?>
				</td>
				<td><?php echo $m['User']['university']; ?></td>
				<td><?php echo $m['Subject']['name']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<legend><i class="glyphicon glyphicon-user"></i> Danh sách giáo viên</legend>
<div class="table-responsive">
	<table class="table table-hover" id="mt">
		<thead>
			<tr>
				<th>#</th>
				<th><i class="glyphicon glyphicon-user"></i> Họ tên</th>
				<th>Tổ chuyên môn</th>
				<th>Trường tốt nghiệp</th>
				<th>Chuyên ngành</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($teachers as $key => $t) { ?>
				<tr class="header">
					<td><?php echo $key+1; ?></td>
					<td>
						<?php 
							echo $this->Html->link($t['User']['name'], array(
								'plugin' => 'users',
								'controller' => 'users',
								'action' => 'view',
								'username' => $t['User']['username']
							)); 
						?>
					</td>
					<td><?php echo $t['Department']['name']; ?></td>
					<td><?php echo $t['User']['university']; ?></td>
					<td><?php echo $t['Subject']['name']; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php 
		if($total > 15){
			echo $this->element('pagi'); 
		}
	?>
</div>
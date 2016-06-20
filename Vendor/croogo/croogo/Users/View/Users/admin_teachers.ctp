<legend>Danh sách giáo viên</legend>
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Họ tên</th>
				<th>Tổ chuyên môn</th>
				<th>Trường tốt nghiệp</th>
				<th>Chuyên ngành</th>
				<th>Hoạt động</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($teachers as $key => $t) { ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $t['User']['name']; ?></td>
					<td><?php echo $t['Department']['name']; ?></td>
					<td><?php echo $t['User']['university']; ?></td>
					<td><?php echo $t['Subject']['name']; ?></td>
					<td>
						<?php 
							echo $this->Html->link('', array(
								'controller' => 'users', 
								'action' => 'edit', 
								$t['User']['id']
							), array(
								'class' => 'icon-pencil icon-large',
								'data-title' => 'Sữa thông tin '.$t['User']['name'].'',
								'rel' => 'tooltip'
							));
						?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
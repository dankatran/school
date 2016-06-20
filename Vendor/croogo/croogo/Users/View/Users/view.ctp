<legend><i class="glyphicon glyphicon-eye-open"></i> <?php echo $title_for_layout; ?></legend>
<div class="table-responsive">
	<table class="table table-hover">
		<tbody>
			<tr>
				<td class="col-md-3 col-xs-12 col-sm-6"><i class="glyphicon glyphicon-user"></i> Họ tên</td>
				<td class="col-md-9 col-xs-12 col-sm-6"><?php echo $user['User']['name'];?></td>
			</tr>
			<?php
				if($user['User']['role_id'] == 4){ 
			?>
				<?php 
					if($user['User']['department_id'] != 10){
				?>
					<tr>
						<td><i class="glyphicon glyphicon-th-large"></i> Tổ chuyên môn</td>
						<td><?php echo $user['Department']['name'];?></td>
					</tr>
				<?php } else{?>
					<tr>
						<td><i class="glyphicon glyphicon-tree-conifer"></i> Chức vụ</td>
						<td>
							<?php 
								if($user['User']['position'] == 9){
									echo 'Hiệu trưởng';
								}else{
									echo 'Hiệu phó';
								}
							?>
						</td>
					</tr>
				<?php } ?>
				<tr>
					<td>Trường tốt nghiệp</td>
					<td><?php echo $user['User']['university'];?></td>
				</tr>
				<tr>
					<td>Chuyên ngành</td>
					<td><?php echo $user['Subject']['name'];?></td>
				</tr>
			<?php		
				}
			?>
			<?php
				if($user['User']['role_id'] == 5){ 
			?>
				<tr>
					<td>
						Lớp học
					</td>
					<td>
						<?php 
							$class = json_decode($user['User']['classroom_id']);
							foreach ($class as $key => $value) {
								foreach ($classrooms as $key => $c) {
									if($value == $c['Classroom']['id']){
										echo $c['Classroom']['name'].' / '.$c['Year']['name'].'<br>';
									}
								}
							}
						?>
					</td>
				</tr>
				<tr>
					<td>
						<i class="fa fa-th-large"></i> Chức vụ
					</td>
					<td>
						<?php
							if($user['User']['position'] == 1){ 
								echo 'Bí thư';
							}
							if($user['User']['position'] == 2){ 
								echo 'Phó Bí thư';
							}
							if($user['User']['position'] == 3){ 
								echo 'Ủy viên';
							}
							if($user['User']['position'] == 4){ 
								echo 'Lớp trưởng';
							}
							if($user['User']['position'] == 5){ 
								echo 'Lớp phó học tập';
							}
							if($user['User']['position'] == 6){ 
								echo 'Lớp phó văn thể mỹ';
							}
							if($user['User']['position'] == 7){ 
								echo 'Lớp phó lao động';
							}
							if($user['User']['position'] == 8){ 
								echo 'Thủ quỹ';
							}
						?>
					</td>
				</tr>
			<?php } ?>
			<tr>
				<td><i class="glyphicon glyphicon-phone"></i> Số điện thoại</td>
				<td><?php echo $user['User']['phone'];?></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-envelope"></i> Địa chỉ email</td>
				<td><?php echo $user['User']['email'];?></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-home"></i> Địa chỉ</td>
				<td><?php echo $user['User']['address'];?></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-time"></i> Sinh nhật</td>
				<td><?php echo $user['User']['birthday'];?></td>
			</tr>
			<tr>
				<td><i class="fa fa-facebook-square"></i> Facebook</td>
				<td><?php echo $user['User']['website'];?></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-time"></i> Ngày đăng ký</td>
				<td><?php echo $user['User']['created'];?></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-stats"></i> Tình trạng</td>
				<td>
					<?php 
						if($user['User']['status']==1){
							echo '<i class="fa fa-hand-o-right"></i> Đã kích hoạt';
						}else{
							echo 'Chưa kích hoạt';
						}
					?>
				</td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-info-sign"></i> Giới thiệu bản thân</td>
				<td><?php echo $user['User']['body'];?></td>
			</tr>
		</tbody>
	</table>
	<hr>
	<?php
		if($user['User']['id'] == $this->Session->read('Auth.User.id')){
			echo '<div class="col-md-4 col-xs-12 col-sm-4">'.$this->Html->link(__('<i class="glyphicon glyphicon-refresh"></i> Cập nhập thông tin tài khoản'), array('plugin'=>'users','controller'=>'users','action'=>'edit', 'id' => $user['User']['id'].'-'.$user['User']['username']), array('class'=>'btn btn-primary form-control','escape' => false)).'</div>';
		}
		if($user['User']['id'] == $this->Session->read('Auth.User.id') && $user['User']['role_id'] == 5){
			echo '<div class="col-md-4 col-xs-12 col-sm-4">'.$this->Html->link('<i class="glyphicon glyphicon-refresh"></i> Cập nhật thông tin học sinh', array('plugin' => 'users','controller' => 'users', 'action' => 'edit_student', 'id' => $this->Session->read('Auth.User.id').'-'.$this->Session->read('Auth.User.username')), array('class' => 'btn btn-danger form-control','escape' => false)).'</div>';
		}
		if($user['User']['id'] == $this->Session->read('Auth.User.id') && $user['User']['role_id'] == 4){
			echo '<div class="col-md-4 col-xs-12 col-sm-4">'.$this->Html->link('<i class="glyphicon glyphicon-refresh"></i> Cập nhật thông giáo viên', array('plugin' => 'users','controller' => 'users', 'action' => 'edit_teacher', 'id'=>$this->Session->read('Auth.User.id')), array('class' => 'btn btn-danger form-control','escape' => false)).'</div>';
		}
	?>
</div>
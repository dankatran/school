<legend><i class="glyphicon glyphicon-eye-open"></i> Tài khoản của tôi</legend>
<div class="table-responsive">
	<table class="table table-hover">
		<tbody>
			<tr>
				<td class="col-md-3 col-xs-12 col-sm-5"><i class="glyphicon glyphicon-user"></i> Họ tên</td>
				<td class="col-md-9 col-xs-12 col-sm-7">
					<?php echo $this->Session->read('Auth.User.name'); ?>
				</td>
			</tr>
			<tr>
				<td class="col-md-3 col-xs-12 col-sm-5"><i class="glyphicon glyphicon-phone"></i> Số điện thoại</td>
				<td class="col-md-9 col-xs-12 col-sm-7">
					<?php echo $this->Session->read('Auth.User.phone'); ?>
				</td>
			</tr>
			<tr>
				<td class="col-md-3 col-xs-12 col-sm-5"><i class="glyphicon glyphicon-envelope"></i> Địa chỉ email</td>
				<td class="col-md-9 col-xs-12 col-sm-7">
					<?php echo $this->Session->read('Auth.User.email'); ?>
				</td>
			</tr>
			<tr>
				<td class="col-md-3 col-xs-12 col-sm-5"><i class="glyphicon glyphicon-home"></i> Địa chỉ</td>
				<td class="col-md-9 col-xs-12 col-sm-7">
					<?php echo $this->Session->read('Auth.User.address'); ?>
				</td>
			</tr>
			<tr>
				<td class="col-md-3 col-xs-12 col-sm-5"><i class="glyphicon glyphicon-time"></i> Sinh nhật</td>
				<td class="col-md-9 col-xs-12 col-sm-7">
					<?php echo $this->Session->read('Auth.User.birthday'); ?>
				</td>
			</tr>
			<tr>
				<td class="col-md-3 col-xs-12 col-sm-5"><i class="fa fa-facebook"></i> Facebook</td>
				<td class="col-md-9 col-xs-12 col-sm-7">
					<?php echo $this->Session->read('Auth.User.website'); ?>
				</td>
			</tr>
			<tr>
				<td class="col-md-3 col-xs-12 col-sm-5"><i class="glyphicon glyphicon-time"></i> Ngày đăng ký</td>
				<td class="col-md-9 col-xs-12 col-sm-7">
					<?php echo $this->Session->read('Auth.User.created'); ?>
				</td>
			</tr>
			<tr>
				<td class="col-md-3 col-xs-12 col-sm-5"><i class="glyphicon glyphicon-stats"></i> Tình trạng</td>
				<td class="col-md-9 col-xs-12 col-sm-7">
					<?php 
						if($this->Session->read('Auth.User.status') == 1){
							echo '<i class="fa fa-hand-o-right"></i> Đã kích hoạt';
						}
						else{
							echo 'Chưa kích hoạt';
						}
					?>
				</td>
			</tr>
			<tr>
				<td class="col-md-3 col-xs-12 col-sm-5"><i class="glyphicon glyphicon-info-sign"></i> Giới thiệu bản thân</td>
				<td class="col-md-9 col-xs-12 col-sm-7">
					<?php echo $this->Session->read('Auth.User.body'); ?>
				</td>
			</tr>
		</tbody>
	</table>
	<hr>
	<?php
		echo $this->Html->link('<i class="glyphicon glyphicon-refresh"></i> Cập nhật tài khoản', array('controller' => 'users', 'action' => 'edit', 'id' => $this->Session->read('Auth.User.id')), array('class' => 'btn btn-danger', 'escape' => false)).' ';
		if($this->Session->read('Auth.User.role_id') == 4 || $this->Session->read('Auth.User.role_id') == 1){
			echo $this->Html->link('<i class="glyphicon glyphicon-refresh"></i> Cập nhật thông tin giáo viên', array('controller' => 'users', 'action' => 'edit_teacher', 'id' => $this->Session->read('Auth.User.id').'-'.$this->Session->read('Auth.User.username')), array('class' => 'btn btn-success', 'escape' => false)).' ';
			echo $this->Html->link('<i class="glyphicon glyphicon-plus-sign"></i> Nhập điểm thi', array('plugin' => '', 'controller' => 'points', 'action' => 'add'), array('class' => 'btn btn-danger', 'escape' => false)).' ';
		}
		if($this->Session->read('Auth.User.role_id') == 5 || $this->Session->read('Auth.User.role_id') == 1){
			echo $this->Html->link('<i class="glyphicon glyphicon-education"></i> Cập nhật thông tin học sinh', array('controller' => 'users', 'action' => 'edit_student', 'id' => $this->Session->read('Auth.User.id').'-'.$this->Session->read('Auth.User.username')), array('class' => 'btn btn-success', 'escape' => false));
		}
	?>
</div>
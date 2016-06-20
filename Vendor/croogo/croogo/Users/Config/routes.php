<?php

CroogoRouter::mapResources('Users.Users', array(
	'prefix' => '/:api/:prefix/',
));

Router::connect('/:api/:prefix/users/lookup', array(
	'plugin' => 'users',
	'controller' => 'users',
	'action' => 'lookup',
), array(
	'routeClass' => 'ApiRoute',
));

// Users
CroogoRouter::connect('/dang-ky-tai-khoan', array('plugin' => 'users', 'controller' => 'users', 'action' => 'add'));
CroogoRouter::connect('/dang-nhap', array('plugin' => 'users', 'controller' => 'users', 'action' => 'login'));
CroogoRouter::connect('/dang-xuat', array('plugin' => 'users', 'controller' => 'users', 'action' => 'logout'));
CroogoRouter::connect('/quen-mat-khau', array('plugin' => 'users', 'controller' => 'users', 'action' => 'forgot'));
CroogoRouter::connect('/xem-thong-tin/:username', array(
	'plugin' => 'users', 'controller' => 'users', 'action' => 'view'), array('pass' => array('username')
));
CroogoRouter::connect('/thay-doi-mat-khau/:username', array(
	'plugin' => 'users', 'controller' => 'users', 'action' => 'reset_password'), array('pass' => array('username')
));
CroogoRouter::connect('/sua-tai-khoan/:id', array(
	'plugin' => 'users', 'controller' => 'users', 'action' => 'edit'), array('pass' => array('id')
));
CroogoRouter::connect('/tai-khoan-cua-toi', array('plugin' => 'users', 'controller' => 'users', 'action' => 'index'));
//Lớp học
CroogoRouter::connect('/danh-sach-lop', array('plugin' => '', 'controller' => 'classrooms', 'action' => 'index'));
//Phòng ban
CroogoRouter::connect('/to-chuyen-mon', array('plugin' => '', 'controller' => 'departments', 'action' => 'index'));
CroogoRouter::connect('/admin/to-chuyen-mon', array('plugin' => '', 'controller' => 'departments', 'action' => 'index', 'admin' => true));
CroogoRouter::connect('/giao-vien-cua-to/:id-:slug/*', array('plugin' => '', 'controller' => 'departments', 'action' => 'view'), array('pass' => array('id','slug')));
//Thời khóa biểu
CroogoRouter::connect('/thoi-khoa-bieu', array('plugin' => '', 'controller' => 'schedules', 'action' => 'index'));
CroogoRouter::connect('/them-khoa-bieu', array('plugin' => '', 'controller' => 'schedules', 'action' => 'add'));
CroogoRouter::connect('/thoi-khoa-bieu-lop/:slug/*', array('plugin' => '', 'controller' => 'classrooms', 'action' => 'schedule'), array('pass'=>array('slug')));
CroogoRouter::connect('/sua-thoi-khoa-bieu/:id/*', array('plugin' => '', 'controller' => 'schedules', 'action' => 'edit'), array('pass'=>array('id')));
//Điểm thi
CroogoRouter::connect('/diem-thi-lop/:slug/*', array('plugin' => '', 'controller' => 'classrooms', 'action' => 'points'), array('pass'=>array('slug')));
CroogoRouter::connect('/xem-diem-thi', array('plugin' => '', 'controller' => 'points', 'action' => 'index'));
CroogoRouter::connect('/diem-thi-hoc-sinh/:classid-:slug/*', array('plugin' => 'users', 'controller' => 'users', 'action' => 'point'), array('pass'=>array('slug','classid')));
CroogoRouter::connect('/nhap-diem-thi', array('plugin' => '', 'controller' => 'points', 'action' => 'add'));
//Học sinh
CroogoRouter::connect('/danh-sach-hoc-sinh-lop/:slug/*', array('plugin' => '', 'controller' => 'classrooms', 'action' => 'students'), array('pass'=>array('slug')));
CroogoRouter::connect('/cap-nhat-thong-tin-hoc-sinh/:id', array(
	'plugin' => 'users', 'controller' => 'users', 'action' => 'edit_student'), array('pass' => array('id')));
CroogoRouter::connect('/thong-tin-hoc-sinh', array('plugin' => '', 'controller' => 'students', 'action' => 'mystudent'));
//Giáo viên
CroogoRouter::connect('/danh-sach-giao-vien', array('plugin' => 'users', 'controller' => 'users', 'action' => 'teachers'));
CroogoRouter::connect('/cap-nhat-thong-tin-giao-vien/:id', array(
	'plugin' => 'users', 'controller' => 'users', 'action' => 'edit_teacher'), array('pass' => array('id')
));
CroogoRouter::connect('/ban-giam-hieu', array('plugin' => 'users', 'controller' => 'users', 'action' => 'managers'));
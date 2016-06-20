<?php

CroogoNav::add('sidebar', 'users', array(
	'icon' => 'user',
	'title' => __d('croogo', 'Quản lý nhân sự'),
	'url' => array(
		'admin' => true,
		'plugin' => 'users',
		'controller' => 'users',
		'action' => 'index',
	),
	'weight' => 50,
	'children' => array(
		'users' => array(
			'title' => __d('croogo', 'Người dùng'),
			'url' => array(
				'admin' => true,
				'plugin' => 'users',
				'controller' => 'users',
				'action' => 'index',
			),
			'weight' => 10,
		),
		'departments' => array(
			'title' => __d('croogo', 'Tổ chuyên môn'),
			'url' => array(
				'admin' => true,
				'plugin' => '',
				'controller' => 'departments',
				'action' => 'index',
			),
			'weight' => 10,
		),
		'teachers' => array(
			'title' => __d('croogo', 'Giáo viên'),
			'url' => array(
				'admin' => true,
				'plugin' => 'users',
				'controller' => 'users',
				'action' => 'teachers',
			),
			'weight' => 20,
		),
		'classrooms' => array(
			'title' => __d('croogo', 'Danh sách lớp'),
			'url' => array(
				'admin' => true,
				'plugin' => '',
				'controller' => 'classrooms',
				'action' => 'index',
			),
			'weight' => 30,
		),
		'students' => array(
			'title' => __d('croogo', 'Học sinh'),
			'url' => array(
				'admin' => true,
				'plugin' => 'users',
				'controller' => 'users',
				'action' => 'students',
			),
			'weight' => 40,
		),
		'roles' => array(
			'title' => __d('croogo', 'Roles'),
			'url' => array(
				'admin' => true,
				'plugin' => 'users',
				'controller' => 'roles',
				'action' => 'index',
			),
			'weight' => 50,
		),
	),
));

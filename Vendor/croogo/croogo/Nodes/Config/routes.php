<?php

CroogoRouter::mapResources('Nodes.Nodes', array(
	'prefix' => '/:api/:prefix/',
));

Router::connect('/:api/:prefix/nodes/lookup', array(
	'plugin' => 'nodes',
	'controller' => 'nodes',
	'action' => 'lookup',
), array(
	'routeClass' => 'ApiRoute',
));

// Basic
CroogoRouter::connect('/', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'home'
));

CroogoRouter::connect('/promoted/*', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'promoted'
));

CroogoRouter::connect('/search/*', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'search'
));

CroogoRouter::connect('/thong-bao', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'thongbao'
));

CroogoRouter::connect('/lich-cong-tac', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'lich_cong_tac'
));
CroogoRouter::connect('/lich-cong-tac/:slug', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'view',
	'type' => 'lich-cong-tac'
));

CroogoRouter::connect('/tin-tuc', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'index', 'type' => 'tin-tuc'
));
// Content types
CroogoRouter::contentType('blog');
CroogoRouter::contentType('node');
if (Configure::read('Croogo.installed')) {
	CroogoRouter::routableContentTypes();
}

// Page
CroogoRouter::connect('/about', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'view',
	'type' => 'page', 'slug' => 'about'
));
CroogoRouter::connect('/page/:slug', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'view',
	'type' => 'page'
));
CroogoRouter::connect('/thong-bao/:slug', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'view',
	'type' => 'thong-bao'
));
CroogoRouter::connect('/tin-tuc/:slug', array(
	'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'view',
	'type' => 'tin-tuc'
));
// Học Sinh
CroogoRouter::connect('/danh-sach-hoc-sinh', array(
	'plugin' => 'users', 'controller' => 'users', 'action' => 'students'
));
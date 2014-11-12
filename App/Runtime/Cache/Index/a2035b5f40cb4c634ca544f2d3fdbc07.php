<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<meta charset="UTF-8">
<head>
	<title><?php echo (($title)?($title):"Picloud"); ?>--__NAME__</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/common.css" />
	
</head>
<body>
	<div id="wrap">
		<nav class="navbar-default navbar-static-side" role="navigation">
			<div class="sidebar-collapse">
                			<ul class="nav" id="side-menu" style="display: block;">
                				<li class="nav-header">
                				<li>Dashboard</li>
                				<li>UserConfig</li>
                				<li>PictureServer</li>
                				<li>AppCenter</li>
                			</ul>
                		</div>				
		</nav>
		<div class="page-wrapper">
			
		<h3>您好，<?php echo session('uid');?> </h3>
		<div class="well">
		  	您可以点击左侧的菜单选择您需要的操作。<br>
			<a href="<?php echo U('Index/Login/logout');?>">退出登录</a>
		</div>
			
		</div>
	</div>
	<script type="text/javascript" src="__PUBLIC__/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
</body>
</html>
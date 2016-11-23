<!DOCTYPE html>
<html>
<head>
	<title>系统基本信息</title>
	<style type="text/css">
		li{
			list-style: none;
			margin:20px 0px;
			border-bottom: 1px dotted #ccc; 
			padding-bottom: 5px;
		}
		label{
			text-align: right; 
			display: inline-block;  		
			width: 150px;
		}

		span{
			margin-left: 10px;
		}
	</style>
</head>
<body>
	<h3>系统基本信息</h3>
	<ul>
		<li>
			<label>操作系统</label>
			<span><?PHP echo PHP_OS; ?></span>
		</li>
		<li>
			<label>运行环境</label>
			<span><?PHP echo $_SERVER ['SERVER_SOFTWARE']; ?></span>
		</li>
		<li>
			<label>版本</label>
			<span> <?PHP echo PHP_VERSION; ?></span>
		</li>
		<li>
			<label>上传附件限制</label>
			<span><?PHP echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件"; ?></span>
		</li>
		<li>
			<label>北京时间</label>
			<span><?php date_default_timezone_set('PRC'); echo date("Y-m-d G:i:s");?></span>
		</li>
		<li>
			<label>服务器域名/IP</label>
			<span>{{$_SERVER['SERVER_NAME']}}/{{$_SERVER['SERVER_ADDR']}}</span>
		</li>
		<li>
			<label>Host</label>
			<span>{{$_SERVER['HTTP_HOST']}}</span>
		</li>
	</ul>
	<?php var_dump($_SERVER)?>
</body>
</html>
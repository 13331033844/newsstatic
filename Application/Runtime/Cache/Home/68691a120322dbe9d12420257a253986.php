<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>新闻列表</title>
</head>
<body>
	<table border=1>
		<tr><td>新闻列表</td><td></td></tr>
		<?php
 foreach ($topic as $key => $value) { echo '<tr><td><a href="'.$_SERVER['PHP_SELF'].'?c=index&a=newsdetail&id='.$value['id'].'">test</a><a href="'.APP_PATH.'news/'.$value['id'].'.shtml'.'">'.$value['title'].'</a>'.date('Y-m-d H:i:s',$value['time']).'</td><td><a href="'.$_SERVER['PHP_SELF'].'?c=index&a=edit&id='.$value['id'].'">edit</a></td></tr>'; } ?>
	</table>
</body>
</html>
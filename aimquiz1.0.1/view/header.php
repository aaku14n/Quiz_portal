<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="<?php echo URL;?>bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo URL;?>bootstrap/css/simple-sidebar.css"/>
<script src="<?php echo URL;?>bootstrap/js/jquery.min.js"></script>
<title>Online Quiz</title>
</head>
<?php 
			$url = isset($_GET['url'])? $_GET['url'] : NULL;
			$url = explode('/',$url);

?>
<body>
	<div class="nav">
		<div class="">
			<a href="<?php echo URL;?>"><h2 >AIM Quizes</h2></a> </div>
		<div class="">
  <ul class="nav nav-tabs">
  <li role="presentation" class="<?php if (empty($url[0])) {
  echo 'active';
  }?>"><a href="<?php echo URL;?>">Home</a></li>
  <li role="presentation" class="<?php if ($url[0]=='std_profile') {
  	echo 'active';
  }?>"><a href="<?php echo URL.'std_profile';?>">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
  <li role="presentation" class="<?php if ($url[0]=='aim_admin') {
  	echo 'active';
  }?> pull-right"><a href="<?php echo URL;?>aim_admin">Admin</a></li>
</ul></div>
</div>

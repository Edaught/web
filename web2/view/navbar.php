<?php
	$path = $_SERVER["DOCUMENT_ROOT"] . "bootstrap/web2/";
	$model = $path . "model/";
	$index = $path . "index.php";
	//include_once($index);
?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Website Test Users</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="">Home</a></li>
			<li><a href="listusers.php">List des utilisateurs</a></li>
			<li><a href="users.php">Add User</a></li> 
		</ul>
	</div>
</nav>
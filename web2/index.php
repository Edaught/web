
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Entreprise</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Website Test Users</a>
					</div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="view/listusers.php">List des utilisateurs</a></li>
						<li><a href="controller/users.php">Add User</a></li> 
						<li>
						<span class="glyphicon glypicon-search" aria-hidden=true> 
								<form class="form-group" method="GET" action="search.php">
									<input class="form-control" placeholder="Search..." name="search">
								</form>
							</span>
						</li>
					</ul>
				</div>
			</nav>
			<div class="container">
				<h1> Welcome to my awesome page !</h1>
			</div>
		</div>
	</div>
</body>
</html>
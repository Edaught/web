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
			<?php
			include_once ("navbar.php");
			?>
			<div class="container">
				
				<?php
				//add a verification for external inputs
				if(isset($_GET["uuid"]) && !empty($_GET["uuid"])){
					include_once("../controller/function.php");
					$websiteFunctions = new websiteFunctions();
					if($websiteFunctions -> checkUUIDExist($_GET["uuid"])){
						$websiteFunctions -> getLink($_GET["uuid"]);
						echo "<p> Merci de vous êtes inscrit sur notre site ! <br>";
						echo "Pour finaliser votre inscription merci de cliquer sur le lien suivant pour confirmer votre inscription : " . $link ."<br/></p>";
					}else{
						echo "<p> Une erreur est survenue </p> <br>";
					}
				}

				?>
			</div>
		</div>
	</div>
</body>
</html>
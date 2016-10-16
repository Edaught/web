<?php
include("function.php");

if(	isset($_POST["nom"])
	&& isset($_POST["prenom"])
	&& isset($_POST["birthdate"])
	&& isset($_POST["tel"])
	&& isset($_POST["password"])
	&& isset($_POST["email"])
	&& is_string($_POST["nom"])
	&& !empty($_POST["nom"])
	&& is_string($_POST["prenom"])
	&& !empty($_POST["prenom"])
	&& !empty($_POST["birthdate"])
	&& is_string($_POST["tel"])
	&& !empty($_POST["password"])
	&& 
	) {
	$websiteFunctions = new WebsiteFunctions;
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$birthdate = $_POST["birthdate"];
	$tel = $_POST["tel"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$websiteFunctions->addUser($nom,$prenom,$birthdate,$tel,$email,md5($password));
}

?>
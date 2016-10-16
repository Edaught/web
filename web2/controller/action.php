<?php
include ($_SERVER["DOCUMENT_ROOT"] . "bootstrap/web2/controller/function.php");

/*@Description: This file is expecting a POST request containing variables needed to create a new user
 * POST variables(types): nom (string), prenom(string), birthdate(date), tel(string 10 num), password(string),
 * email(string)
 * @Called by : users.php
 * @Call : need to call the confirmation page
 * @Includes : function.php*/

//TODO: ADD SERVER REQUEST METHOD
$websiteFunctions = new WebsiteFunctions;
$POSTArray = array($_POST["nom"], $_POST["prenom"], $_POST["birthdate"], $_POST["tel"], $_POST["password"], $_POST["email"]);
if ($websiteFunctions -> testIsset($POSTArray)) {
	echo "hello <br/>";
	//if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["birthdate"]) && isset($_POST["tel"]) && isset($_POST["password"]) && isset($_POST["email"]) && is_string($_POST["nom"]) && !empty($_POST["nom"]) && is_string($_POST["prenom"]) && !empty($_POST["prenom"]) && !empty($_POST["birthdate"]) && is_string($_POST["tel"]) && !empty($_POST["password"]) && !empty($_POST["email"])) {
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$birthdate = $_POST["birthdate"];
	$tel = $_POST["tel"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$websiteFunctions -> addUser($nom, $prenom, $birthdate, $tel, $email, md5($password));
}
?>
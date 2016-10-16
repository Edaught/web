<?php
class WebsiteFunctions {
	
	public function addUser($nom,$prenom,$birthdate,$tel,$email,$password){
		require_once("../controller/conn.php");
		$query = "INSERT INTO UsersA() values(".$nom.",".$prenom.",".$tel.",".$birthdate.",".$email.",".$password.")";
		try {
			$result = $conn->query($query);
		} catch (PDOException $err) {
			echo $err->getMessage();
		}
	}

	public function usersView(){
		require_once("../controller/conn.php");
		$query = "SELECT nom,prenom,email,tel,dateofbirth FROM UsersA";
		$result = $conn->query($query);
		echo "<table class="table"> <thead><tr>";
		foreach ($result as $key => $value) {
			echo "<th>". $key . "</th>"
		}
		echo "</tr></thead><tbody>"
		foreach ($query as $key => $value) {
			echo "<tr>";
			echo "<td>" . $value["nom"] ."</td>";
			echo "<td>" . $value["prenom"] ."</td>";
			echo "<td>" . $value["email"] ."</td>";
			echo "<td>" . $value["tel"] ."</td>";
			echo "<td>" . $value["dateofbirth"] ."</td>";
			echo "</tr>";	
		}
		echo "</tbody></table>";
	}

	public function emailAlreadyExist($email){
		$email = "\"".$email."\"";
		require_once("../controller/conn.php");
		$query = "SELECT COUNT(*) FROM UsersA WHERE email=".$email;
		$result = $conn->query($query,PDO::FETCH_NUM);
		if($result->rowCount() == 1)
			return True;
		return False;
	}	

	public function testIsset($array):
	foreach ($array as $key) {
		if(!isset($key) || empty($key))
			return False
	}
	return True;
}
?>
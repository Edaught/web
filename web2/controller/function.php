<?php
class WebsiteFunctions {
    private $dbPath;

    public function __construct() {
        $this -> dbPath = "../model/conn.php";
    }

    
    private function addDoubleQuote($string){
        return "\"" . $string . "\"";
    }
    /*@Description : List all the users from the database
     * @Inputs :
     * @Outputs :
     *
     * */
    public function addUser($nom, $prenom, $birthdate, $tel, $email, $password) {
        require_once ($this -> dbPath);
        $nom = $this->addDoubleQuote($nom);
        $prenom = $this->addDoubleQuote($prenom);
        $email = $this->addDoubleQuote($email);
        $password = $this->addDoubleQuote($password);
        $query = "INSERT INTO UsersA() values(" . $nom . "," . $prenom . "," . $tel . "," . $birthdate . "," . $email . "," . $password . ")";
        try {
            $result = $conn -> query($query);
        } catch (PDOException $err) {
            echo $err -> getMessage();
        }
        $conn = NULL;
    }
    
    public function getUsers(){
        require($this -> dbPath);
        $query = "SELECT nom,prenom,email,tel,dateofbirth FROM UsersA";
        try {
            $result = $conn -> query($query);
        } catch (PDOException $err) {
            echo $err -> getMessage();
        }
        $conn = NULL;
        return $result;
    }
    
    public function usersXMLList($users){
        $user = new SimpleXMLElement("<user></user>");
        $br = "<br/>";
        foreach ($users as $key => $value) {
            $user -> addChild("nom",$value["nom"]);
            $user -> addChild("prenom",$value["prenom"]);
            $user -> addChild("email",$value["email"]);
            $user -> addChild("tel",$value["tel"]);
            $user -> addChild("birthdate",$value["dateofbirth"]);
        }
        $fd = fopen("users.xml", "w");
        fwrite($fd, $user->asXML());
        fclose($fd);
    }
    /*@Description : List all the users from the database
     * @Inputs :
     * @Outputs :
     *
     * */
    public function usersView() {
        require_once ($this -> dbPath);
        $query = "SELECT nom,prenom,email,tel,dateofbirth FROM UsersA";
        $result = $conn -> query($query);
        echo "<table class='table'> <thead><tr>";
        echo "</tr></thead><tbody>";
        foreach ($result as $key => $value) {
            echo "<tr>";
            echo "<td>" . $value["nom"] . "</td>";
            echo "<td>" . $value["prenom"] . "</td>";
            echo "<td>" . $value["email"] . "</td>";
            echo "<td>" . $value["tel"] . "</td>";
            echo "<td>" . $value["dateofbirth"] . "</td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    }

    /*@Description : Test if the email is already in the database, return True if it exists already, False if not.
     * @Inputs : $email (format: test@fake.com)
     * @Outputs : boolean
     * */
    public function emailAlreadyExist($email) {
        require_once ($this -> dbPath);
        $email = "\"" . $email . "\"";
        $query = "SELECT COUNT(*) FROM UsersA WHERE email=" . $email;
        $result = $conn -> query($query, PDO::FETCH_NUM);
        if ($result -> rowCount() == 1)
            return True;
        return False;
    }

    /*@Description: Test if any element in the $array is set or empty return "False" otherwise return True
     * @Inputs: $array ($_POST or $_GET)
     * @Outputs: boolean
     * */
    public function testIsset($array) {
        foreach ($array as $key) {
            if (!isset($key) || empty($key))
                return False;
        }
        return True;
    }

}
?>
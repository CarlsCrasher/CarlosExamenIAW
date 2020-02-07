<?php
  
    function getConnection (){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "examen";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            return false;
        } 
        return $conn;
    
    }

    function getSentence($username){
        $conn = getConnection();
        $search = '%'.$username.'%';
        $sentencia = $_GET['quote'];
        $sql = "SELECT sentence FROM refranero WHERE sentence LIKE '$sentencia%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          
            while($row = $result->fetch_assoc()) {
                echo $row["sentence"] . "<br>";
            }
        } else {
            echo "0 results"; 
        }
        $conn->close();
    }


?>
<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$id_escolido = $_POST["id"];

$sql = "DELETE  FROM militar_registrado WHERE id='$id_escolido'";



if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    header("location:/projeto_registro/administra_registro_militar.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
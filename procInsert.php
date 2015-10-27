<?php
include ("connect.php");





$nome_completo = $_POST["nome_complet"];
$posto = $_POST["posto"];
$local = $_POST["local"];
$login = $_POST["login"];
$password = $_POST["password"];
echo $nome_completo;
echo $posto;
echo $local;
echo $login;
echo $password;

$sql = "INSERT INTO militar_registrado (nome_completo, posto, local, login, password) VALUES ('$nome_completo', '$posto', '$local', '$login', md5('$password'))";



if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    header("location:/projeto_registro/administra_registro_militar.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();





?>
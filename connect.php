<?php
/* Faz a coneção no Banco de Dados */
/*informacoes passadas para fazer a coneccao servidor */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atividade_militar";

/*conectando com o servidor usando as informacoes passadas*/
$conn = new mysqli($servername, $username, $password, $dbname);

/*tratamento de erro na coneccao com o servidor*/
if($conn->connect_error) {
	die("Connection Falied: " .$conn->connect_error);
}


?>
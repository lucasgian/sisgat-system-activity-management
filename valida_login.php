<?php
/*informacoes passadas para fazer a coneccao servidor 
$servername = "localhost";
$username = "root";
$userpassword = "";
$dbname = "atividade_militar";

/*conectando com o servidor usando as informacoes passadas
$conn = new mysqli($servername, $username, $userpassword, $dbname);*/
include ("connect.php");
$correto_login = 0;



/*tratamento de erro na coneccao com o servidor*/
if($conn->connect_error) {
	die("Connection falied: " .$conn->connect_error);
}

/*resebendo informacoes passadas pelo aquivo registro_confirma_usario.php*/
$login =  $_POST["login"];
$password =  md5($_POST["password"]);

$login_erro = "correct";
$sql = "SELECT login, password, permissao FROM militar_registrado WHERE login = '".$login."' AND password = '".$password."'";
$registro_militares = mysqli_query($conn, $sql) or die ("Erro!");

/*Realiza a busca no banco de dados e faz a comparacao entre os valores armazenados e os recebidos */
if(mysqli_num_rows($registro_militares)){
	while($row = mysqli_fetch_assoc($registro_militares)) {
		if($row["login"] == $login && $row["password"] == $password) {
			//header("location:certo.php");
			
			if($row["permissao"] == adm) {
				header("location:administra_registro_militar.php");
				$correto_login = 1;
			}
			else{
				header("location:registro_usuario_militar.php?login=$login");
				$correto_login = 1;
			}
		}
		// echo "id: " . $row["id"]. " - Name: " . $row["login"]. " " . $row["password"]. "<br>";
	}
}


if($correto_login != 1) {
	//header("location:erro.php");
	header("location:index.php");
	$login_erro = "erro";
}

$conn->close();
?>

<?php
/*informacoes passadas para fazer a coneccao servidor 
$servername = "localhost";
$username = "root";
$userpassword = "";
$dbname = "atividade_militar";

/*conectando com o servidor usando as informacoes passadas
$conn = new mysqli($servername, $username, $userpassword, $dbname);

/*tratamento de erro na coneccao com o servidor
if($conn->connect_error){
	die("Connection falied: " .$conn->connect_error);
}*/

/*if(!isset($_POST)||empty($_POST)){
	header("location:registro_usuario_militar.php");
	echo '<div>
			<input type="submit" name="cont" value="erro">
		</div>
	';
}else {*/
//header("location:confirma_usuario.php");

include ("connect.php");

$login = $_GET["login"];
$nome = $_POST["nome"];
$posto = $_POST["posto"];
$local = $_POST["local"];
$dd = $_POST["dd"];
$ctt = $_POST["ctt"];
$ctt_final = $_POST["ctt_final"];
$atividade = $_POST["atividade"];
$dia_saida = $_POST["dia"];
$mes_saida = $_POST["mes"];
$ano_saida = $_POST["ano"];
$dia_retorno = $_POST["diaRet"];
$mes_retorno = $_POST["mesRet"];
$ano_retorno = $_POST["anoRet"];


$ctt = $ctt . $ctt_final;

$sql = 	"INSERT INTO registros (login, nome, posto, local, dd, ctt, atividade, dia_saida, mes_saida, ano_saida, dia_retorno, mes_retorno, ano_retorno) VALUES 
('$login', '$nome', '$posto', '$local', '$dd', '$ctt', '$atividade', '$dia_saida', '$mes_saida', '$ano_saida', '$dia_retorno', '$mes_retorno', '$ano_retorno')";

if ($conn->query($sql) === TRUE) {

    //echo "sucesso";
	 // Invoca um dilog box ao fim do processo 
	//header("location:registro_usuario_militar.php?enviado=sucesso");
	//echo $nome;
	header("location:registro_usuario_militar.php?login=$login&&enviado=sucesso");
	//$enviado = "sucesso";
	//print_r($_POST);
	//echo "<script>alert('Enviado com sucesso!');history.back();</script>";
	//echo "<script>alert('Enviado com sucesso!');document.location='formulario.php';</script>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

//}
$conn->close();
?>
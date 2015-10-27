<?php
include ("connect.php");
// Recebendo valores do formulario de alterações de usuario vindos do aquivo procAcao.php
$senha = md5($_POST["senha"]);
$idMilitar = $_POST["idMilitar"];
$confirmaSenha = $_POST["confirmaSenha"];

$novo_posto = $_POST['posto'];
$novo_nome = $_POST['novo_nome'];
$novo_login = $_POST['novo_login'];
$novo_local = $_POST['local'];
$nova_senha = $_POST['senha'];

// Select do banco de dados para saber se ouve ou não alterações no formulario as comparando com os dados presentes no banco de dados
$sql = "SELECT nome_completo, login, posto, local, FROM militar_registrado";
$result = $conn->query($sql);

if($result->num_rows > 0) {
	while($row = $result->cubrid_fetch_assoc()) {

	}
}

// Casso haja apenas alterarção na Senha do usario sem serem feitas nos outros campos
if(!isset($confirmaSenha) /*$confirmaSenha != "z3r0"*/) {
	$sql = "UPDATE militar_registrado SET password='$senha' WHERE id= '".$idMilitar."'";

	echo $idMilitar;
	if ($conn->query($sql) === TRUE) {
		header("location:administra_registro_militar.php?alteraçãosenha=sucesso");
	}
	else {
		echo "Error updating record: " . $conn->error;
	}
	
}

else {
	
// Caso haja apenas alterações nos campos e não
	if(isset($nova_senha)/*$nova_senha == "z3r0"*/) {
		$sql = "UPDATE militar_registrado SET posto='$novo_posto' nome_completo='$novo_nome' local='$novo_local' WHERE id='".$idMilitar."' ";
		header("location:administra_registro_militar.php?alteraçãoDados=sucesso");
	}

// Caso não haja alteração na senha e apenas nos outros campos
	else {
		$sql = "UPDATE militar_registrado SET posto='$novo_posto' nome_completo='$novo_nome' local='$novo_local' password='$nova_senha' WHERE id='".$idMilitar."' ";
		header("location:administra_registro_militar.php?alteraçãoCompleta=sucesso");
	}
	//echo $novo_local;
}
$conn->close(); 

















/*<?php
include ("connect.php");
// Recebendo valores do formulario de alterações de usuario vindos do aquivo procAcao.php
$senha = md5($_POST["senha"]);
$idMilitar = $_POST["idMilitar"];
$confirmaSenha = $_POST["confirmaSenha"];

$novo_posto = $_POST['posto'];
$novo_nome = $_POST['novo_nome'];
$novo_login = $_POST['novo_login'];
$novo_local = $_POST['local'];
$nova_senha = $_POST['senha'];

// Select do banco de dados para saber se ouve ou não alterações no formulario as comparando com os dados presentes no banco de dados
$sql = "SELECT nome_completo, login, posto, local, FROM militar_registrado";
$result = $conn->query($sql);

if($result->num_rows > 0) {
	while($row = $result->cubrid_fetch_assoc()) {

	}
}

// Casso haja apenas alterarção na Senha do usario sem serem feitas nos outros campos
if($confirmaSenha != "z3r0") {
	$sql = "UPDATE militar_registrado SET password='$senha' WHERE id= '".$idMilitar."'";

	echo $idMilitar;
	if ($conn->query($sql) === TRUE) {
		header("location:administra_registro_militar.php?alteraçãosenha=sucesso");
	}
	else {
		echo "Error updating record: " . $conn->error;
	}
	
}

else {
	
// Caso haja apenas alterações nos campos e não
	if($nova_senha == "z3r0") {
		$sql = "UPDATE militar_registrado SET posto='$novo_posto' nome_completo='$novo_nome' local='$novo_local' WHERE id='".$idMilitar."' ";
		header("location:administra_registro_militar.php?alteraçãoDados=sucesso");
	}

// Caso não haja alteração na senha e apenas nos outros campos
	else {
		$sql = "UPDATE militar_registrado SET posto='$novo_posto' nome_completo='$novo_nome' local='$novo_local' password='$nova_senha' WHERE id='".$idMilitar."' ";
		header("location:administra_registro_militar.php?alteraçãoCompleta=sucesso");
	}
	//echo $novo_local;
}
$conn->close(); 
?>*/
?>
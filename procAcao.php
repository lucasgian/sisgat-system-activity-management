<?php
include ("connect.php");


// Bibliotecas do HTML , CSS e JS
echo "<div> <meta name='viewport' content='width=device-width, initial-scale=1'> 
<link rel='stylesheet' type='text/css' href='css/style.css'>
<link rel='stylesheet' href='css/bootstrap.min.css'>
<link rel='stylesheet' href='boostrap-select/css/bootstrap-select.css'>
<link rel='stylesheet prefetch' href='css/pure-min.css'>
<script src='js/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script>
<script src='boostrap-select/js/bootstrap-select.js'></script>
<script src='js/modal.js'></script>
<script src='js/confirm_password.js'></script>
<meta charset='utf-8' />";

//REMOVE USUÁRIO //
if(isset($_POST['btnRemove'])||!empty($_POST['btnRemove'])) {
	$id_escolido = $_POST["btnRemove"];
	$sql = "DELETE  FROM militar_registrado WHERE id='$id_escolido'";
	if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
		header("location:/projeto_registro/administra_registro_militar.php");
	} else {
		echo "Error deleting record: " . $conn->error;
	}
	$conn->close();
}

if(isset($_POST['btnGravar'])||!empty($_POST['btnGravar'])) {
	$nome_completo = $_POST["nome_complet"];
	$posto = $_POST["posto"];
	$local = $_POST["local"];
	$login = $_POST["login"];
	$password = $_POST["password"];
	$sql = "INSERT INTO militar_registrado (nome_completo, posto, local, login, password) VALUES ('$nome_completo', '$posto', '$local', '$login', md5('$password'))";
	if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
		header("location:/projeto_registro/administra_registro_militar.php");
	} else {
		echo "Error deleting record: " . $conn->error;
	}
	$conn->close();
}


if(isset($_POST['btnAtualiza'])||!empty($_POST['btnAtualiza'])) {
	$id_militar = $_POST["btnAtualiza"];
	//echo $id_militar;
	
	$sql = "SELECT nome_completo, posto, local, login, password FROM militar_registrado WHERE id = '".$id_militar."' ";
	$result = $conn->query($sql);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			$nome_completo = $row["nome_completo"];
			$posto = $row["posto"];
			$local = $row["local"];
			$login = $row["login"];
			$password = $row["password"];

			echo "<div class='container'>";
			echo "<fieldset>";
			echo "<nav class='navbar navbar-inverse'> <nav>";
			echo "<div id='a'> </div>";
			echo "<form class='pure-form' action='alterar_banco.php' method='post'>";
			echo "<table class='table table-hover  nomecompleto cabecalhoColor ' id='tb_1'>";

			echo "<tr>";

			echo "<td>";
			echo "<label>Nome Completo:</label>";
			echo "</td>";

			echo "<td class='nomes'>";
			echo "<input class='form-control' type='text' value='$nome_completo' name='novo_nome' placeholder='$nome_completo' required>";
			echo "</td>";

			echo "</tr>";

			echo "<tr>";
			echo "<td>";
			echo "<label>Posto / G</label>";
			echo "</td>";
			echo "<td>";
			echo "<select class='selectpicker show-tick' data-style='btn-info' name='posto' required>
			<option value='$posto'>Graduação Atual $posto</option>
			<option value='Cel'>Cel</option>
			<option value='Ten Cel'>Ten Cel</option>
			<option value='Major'>Major</option>
			<option value='Cap'>Cap</option>
			<option value='1 Ten'>1° Ten</option>
			<option value='2 Ten'>2° Ten</option>
			<option value='Sub Ten'>Sub Ten</option>
			<option value='1 Sgt'>1° Sgt</option>
			<option value='2 Sgt'>2° Sgt</option>
			<option value='3 Sgt'>3° Sgt</option>
			<option value='Cabo'>Cabo</option>
			<option value='Sd Ep'>Sd Ep</option>
			<option value='Sd Ev'>Sd Ev</option>
			</select>";

			echo "</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td>";
			echo "<label>Local</label>";
			echo "</td>";

			echo "<td>";
			echo "<select class='selectpicker show-tick' data-style='btn-info' name='local' required>
			<option value='$local'>Local Atual $local</option>
			<option value='CMO'>CMO</option>
			<option value='9 RM'>9° RM</option>
			<option value='B ADM AP / CMO'>B ADM AP / CMO</option>
			<option value='6CTA'>6CTA</option>
			<option value='9 BCOM'>9° BCOM</option>
			<option value='CIA GD'>9° CIA GD</option>
			</select>";

			echo "</td>";

			echo "</tr>";

			echo "<tr>";
			echo "<td>";
			echo "<label>Login</label>";
			echo "</td>";
		
			echo "<td>";		
			echo "<input class='form-control' type='text' value='$login' name='novo_login' placeholder='$login' required>";

			echo "</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td>";
			echo "<label>Password</label>";
			echo "</td>";

			echo "<td>";
			


			echo "<button type='button' class='btn btn-danger btn' data-toggle='modal' data-target='#myModal'>NOVA SENHA</button>

			<!-- Modal -->
			<div class='modal fade' id='myModal' role='dialog'>
			<div class='modal-dialog'>

			<!-- Modal content-->
			<div class='modal-content'>
			<div class='modal-header'>
			<button type='button' class='close' data-dismiss='modal'>Fechar</button>
			<h2 class='modal-title' align='center'><font color='#B80000'>Alteração de Senha</font></h2>
			</div>
			<div class='modal-body'>


			<form class='pure-form' action='alterar_banco.php' method='post'> 
			<fieldset>
			<legend align='center'>Informe Nova Senha e Confirme</legend>
			<table class='table'>
			<tr>
			<td>
			<div align='right'> <input type='password'  placeholder='Senha' name='senha' id='password' autofocus required> </div>
			</td>
			<td>
			<div align='left'> <input type='password'  placeholder='Confirmar Senha' name='confirmaSenha' id='confirm_password' autofocus required> </div>
			</td>
			</table>


			<script src='js/confirm_password.js'></script>
			</fieldset>

			</form> 


			<!-- <p>Informe Nova Senha</p> -->

			</div>
			<div class='modal-footer'>
			<!-- <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button> -->
			</div>
			</div>

			</div>
			</div>";
			echo "</td>";
			echo "</tr>";

			echo "</table>";
			echo "<fieldset>";
			echo "<div align='center'>";
			//echo "<button class='btn btn-primary' type='button' id=''>ALTERAR</button>";
			echo "<div align='center' ><button type='submit' class='pure-button pure-button-primary tamBotton' value='$id_militar' name='idMilitar' id='$id_militar'><h3>Confirmar</h3></button> </div>";
			echo "</form>";

			echo "</div>";
			
			echo "</div>";
			echo "<br>";
			echo "<form action='administra_registro_militar.php' method='post'>
					<div class=''>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
						<button class='btn btn-info btn-lg localizacaoBotton'><span class='glyphicon glyphicon-repeat'>&nbsp;Menu</span></button>
					</div>
				</form>";
			
		}
	}
	$conn->close();
}

// <div align='center' ><button type='submit' class='pure-button pure-button-primary' name='btnConfirma' id='$id_militar'>Confirmar</button> </div>

?>
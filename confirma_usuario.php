<html>
<head> <title>Longin-confirma</title>
<!--importação de class para o projeto-->
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<!--conteiner cria uma organização para a pagina -->
<body class="conteiner">

	<!--<?php
		/*if(empty($_GET["login_erro"])){

		}
		else{
				echo '<div class="alert alert-success">
      				<strong>Success!</strong> Indicates a successful or positive action.
    				</div>';
		}
	*/
	?> -->

	<!-- form subemete os dados de entrada a um programa que encarrega de processar esse dados-->
	<form class="form-inline" role="form" action="valida_login.php" method="post">
		<fieldset>
			<legend>Login_Militar</legend>
			<table cellspacing="10" align="center">
				<tr>
					<td>
						<label for="login">Login </label>
					</td>
					<td align="left">
						<input class="form-control" type="text" name="login" placeholder="Login" autofocus required>
					</td>
				</tr>
				<tr>
					<td>
						<label for="password">Password </label>
					</td>
					<td align="left">
						<input class="form-control" type="password" name="password" placeholder="Password" required>
					</td>
				</tr>
				<tr>
					<nav class="navbar navbar-inverse">
						<td>
							<input class="btn btn-info" type="submit">
						</td>
						<td align="left">
							<input class="btn btn-info" type="reset" value="Limpar"> 
						</td>
					</nav>
				</tr>
			</table>
		</fieldset>
	</form>
</body>


</html>


















<!--<form class="form-inline" role"form">

		div do Login recebe o valor de entrada
		<div class="table-responsive" class="form-group">
			<table class="table table-hover">
			<br>
				<tr>
					<td> <label for="Login"> Login Access:</label> <td> 
					<td><input class="form-control" type="Login" nome="nome" maxlength="20" required><td>
				<tr>
			</table>
		</div>

		div do Senha recebe o valor de entrada
		<div class="table-responsive" class="form-group">
			<table class="table table-hover">
				<tr>
					<td> <label for="Senha"> Senha Access:</label> </td>
					<td> <input class="form-control" type="Senha" nome"nome" maxlength="20" required></td>
				</tr>
			</table>
		</div>

		div botao de armazenamento de cache de senha
		<table>
		<div class="checkbox">
			<td><input type="checkbox"> Memorizar Senha
		</div>

		<td><button type="submit" class="btn btn-default">Submit</button>
		</table> -->
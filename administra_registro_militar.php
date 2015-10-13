<html>
<head>
  <title>Administrador</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
</head>
<body class="container">
	<form class="form-inline" role="form" action="inserir_registro.php" method="post">
		<fieldset>
			<legend>Administra_Registro</legend>
			<table class="table table-hover" cellspacing="10" align="center">
				<tr>
					<td align="center">
						<label for="adicionar_cadastro"><font color="black" >Adicionar Militar Aos Cadastros</font></label>
						<!-- Adicionar militar aos cadastros (unico) -->
						<button class="btn btn-group-justified btn-success" type="button" id="myBtn"><font color="white"><b>Adicionar Cadastro</b></font></button>

						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">

									<div class="modal-header" style="padding: 20px 50px;">
										<button class="close" type="button" data-dismiss="modal">&times;</button>
										<h4>Adicionar Cadastro</h4>
									</div>

									<div class="modal-body" style="padding: 80px 50px;">
										<!-- Corpo do Modal -->
										<table class="table table-hover" cellspacing="10" align="center">
											<tr>
												<td>
													<label for="nome_completo">Nome Completo:</label>
												</td>
												<td>
													<input class="form-control" type="text" name="nome_completo" maxlength="90" placeholder="Afonso Barros de Medeiros" size="25" required>
												</td>
											</tr>
											<tr>
												<td>
													<label for="posto">Posto:</label>
												</td>
												<td>
													<input class="form-control" type="text" name="posto" maxlength="40" placeholder="3-Sargento" size="25" required>
												</td>
											</tr>
											<tr>
												<td>
													<label for="local_base">Local De Atuação</label>
												</td>
												<td>
													<input class="form-control" type="text" name="local" maxlength="40" placeholder="DTI-Base-CMO" size="25" required>
												</td>
											</tr>								
										</table>
										<div id="a"></div>
										<table class="table table-hover" id="tb_1">
											<tr>
												<td bgcolor="#dff0d8">
													<label for="login"><font >Novo Login</font></label>
												</td>
												<td bgcolor="#dff0d8">
													<input class="form-control" type="text" name="login" placeholder="Login" required>
												</td>
											</tr>
											<tr>
												<td bgcolor="#dff0d8">
													<label for="password"><font >Novo Password</font></label>
												</td>
												<td bgcolor="#dff0d8">
													<input class="form-control" type="text" name="password" placeholder="Password" required>
												</td>
											</tr>
										</table>
									</div>

								</div>
							</div>
						</div>
					</td>



					<td align="center">
						<label for="remover_cadastro"><font color="black" >Remover Militar Dos Cadastros</font></label>
						<!-- Remover militar aos cadastros (unico) -->
						<button class="btn btn-group-justified btn-danger" type="button"><font color="white"><b>Remover Cadastro</b></font></button>
					</td>
				</tr>
				<tr>
					<td align="center">
						<label for="alterar_cadastros"><font color="black" >Alterar Cadastro Do Militar</font></label>
						<!-- Alterar militar aos cadastros (unico) -->
						<button class="btn btn-group-justified btn-warning" type="button"><font color="white"><b>Alterar Cadastro</b></font></button>
					</td>
				
					<td align="center">
						<label for="lista_usuario"><font color="black" >Listar Militares Cadastrados</font></label>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
						<!-- Listar usuario militar cadastrados (Todos) -->
						<button class="btn btn-group-justified btn-info" type="button"><font color="white" ><b>Listar Militares</b></font></button>

					</td>
				</tr>
				<tr>
					
					<td align="center">
						<label for="listar_registros"><font color="black" >Listar Registros De Um Militar</font></label>
						<br>
						<!-- Listar registros de militar cadastrados (Todos) -->
						<button class="btn btn-group-justified btn-info" type="button"><font color="white"><b>Listar Registros</b></font></button>

					</td>

				
					<td align="center">
						<label for="listar_todos_registros"><font color="black" >Listar Todos Os Registros</font></label>
						<!-- Listar registros cadastrados (Todos) -->
						<button class="btn btn-group-justified btn-info" type="button"><font color="white"><b>Listar Todos Os Registros</b></font></button>
					</td>
				</tr>
				<tr>
					<td align="center">
						<label for="listar_militar_registro"><font color="black" >Listar Militar De Um Registro</font></label>
						<!-- Listar militar do registro (unico) -->
						<button class="btn btn-group-justified btn-info" type="button"><font color="white"><b>Listar Militar Do Registro</b></font></button>
					</td>
				
					<td align="center">
						<label for="listar_militar_retorno"><font color="black" >Listar Militares Que Irão Retornar</font></label>
						<!-- Listar militar que retronam (todos) -->
						<button class="btn btn-group-justified btn-info" type="button"><font color="white"><b>Listar Militares Retorno</b></font></button>
					</td>
				</tr>
				

				<nav class="navbar navbar-inverse">
				</nav>
			</table>
		</fieldset>
	</form>

	<script>
		$(document).ready(function(){
   		$("#myBtn").click(function(){
        $("#myModal").modal();
    });
	});
	</script>

</body>
</html>



<!-- <tr>
					<td align="center">
						<label for="adicionar_cadastro"><font color="black" >Adicionar Militar Aos Cadastros</font></label>
						Adicionar militar aos cadastros (unico) 
						<button class="btn btn-group-justified btn-success" type="button"><font color="white"><b>Adicionar Cadastro</b></font></button>
					</td>
				</tr>
				<tr>
					<td align="center">
						<label for="remover_cadastro"><font color="black" >Remover Militar Dos Cadastros</font></label>
						Remover militar aos cadastros (unico) 
						<button class="btn btn-group-justified btn-danger" type="button"><font color="white"><b>Remover Cadastro</b></font></button>
					</td>
				</tr>
				<tr>
					<td align="center">
						<label for="alterar_cadastros"><font color="black" >Alterar Cadastro Do Militar</font></label>
						<!-Alterar militar aos cadastros (unico) -
						<button class="btn btn-group-justified btn-warning" type="button"><font color="white"><b>Alterar Cadastro</b></font></button>
					</td>
				</tr>
				<tr>
					<td align="center">
						<label for="lista_usuario"><font color="black" >Listar Militares Cadastrados</font></label>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
						Listar usuario militar cadastrados (Todos) 
						<button class="btn btn-group-justified btn-info" type="button"><font color="white" ><b>Listar Militares</b></font></button>

					</td>
				</tr>
				<tr>
					
					<td align="center">
						<label for="listar_registros"><font color="black" >Listar Registros de um Militar</font></label>
						<br>
						<Listar registros de militar cadastrados (Todos) 
						<button class="btn btn-group-justified btn-info" type="button"><font color="white"><b>Listar Registros</b></font></button>

					</td>

				</tr>
				<tr>
					<td align="center">
						<label for="listar_todos_registros"><font color="black" >Listar Todos Os Registros</font></label>
						- Listar registros cadastrados (Todos) 
						<button class="btn btn-group-justified btn-info" type="button"><font color="white"><b>Listar Todos Os Registros</b></font></button>
					</td>
				</tr>
				<tr>
					<td align="center">
						<label for="listar_militar_registro"><font color="black" >Listar Militar De Um Registro</font></label>
						 Listar militar do registro (unico) 
						<button class="btn btn-group-justified btn-info" type="button"><font color="white"><b>Listar Militar Do Registro</b></font></button>
					</td>
				</tr>
				<tr>
					<td align="center">
						<label for="listar_militar_retorno"><font color="black" >Listar Militares Que Irão Retornar</font></label>
						 Listar militar que retronam (todos) 
						<button class="btn btn-group-justified btn-info" type="button"><font color="white"><b>Listar Militares Retorno</b></font></button>
					</td>
				</tr>
				
-->
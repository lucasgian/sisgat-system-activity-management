

<html>
<head>
  <title>Administrador</title>
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="boostrap-select/css/bootstrap-select.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="boostrap-select/js/bootstrap-select.js"></script>
  <script src="js/modal.js"></script>
  <meta charset="utf-8" />
</head>
<body class="container">
	 <!--<form class="form-inline" role="form"  action="insert_usuario.php"  method="post"> -->
		<fieldset>
			<legend>Administra_Registro</legend>
			<table class="table table-hover" cellspacing="10" align="center">
				<tr>
					<td align="center">
						<label for="adicionar_cadastro"><font color="black" >Adicionar Militar Aos Cadastros</font></label>
						<!-- Adicionar militar aos cadastros (unico) -->
						<button class="btn btn-group-justified btn-success" type="button" id="addCadastro"><font color="white"><b>Adicionar Cadastro</b></font></button>

						<div class="modal fade" id="myModalAdd" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">

									<div class="modal-header" style="padding: 20px 50px;">
										<button class="close" type="button" data-dismiss="modal">Fechar</button>
										<h3>Adicionar Cadastro</h3>
									</div>

									<div class="modal-body" style="padding: 80px 50px;">
										<!-- Corpo do Modal -->
										<form class="form-inline" role="form" action="procAcao.php" method="post">
											<table class="table table-hover" cellspacing="10" align="center">
												<tr>
													<td>
														<label for="nome_complet">Nome Completo:</label>
													</td>
													<td>
														<input class="form-control" type="text" name="nome_complet" placeholder="Afonso Barros de Medeiros" size="25" required>
													</td>
												</tr>
												<tr>
													<td>
														<label for="posto">Posto:</label>
													</td>
													<td>
														<select class="selectpicker show-tick" data-style="btn-primary" name="posto" required="true">
											                <option value="">P/G</option>
											                <option value="Cel">Cel</option>
											                <option value="Ten Cel">Ten Cel</option>
											                <option value="Major">Major</option>
											                <option value="Cap">Cap</option>
											                <option value="1 Ten">1° Ten</option>
											                <option value="2 Ten">2° Ten</option>
											                <option value="Sub Ten">Sub Ten</option>
											                <option value="1 Sgt">1° Sgt</option>
											                <option value="2 Sgt">2° Sgt</option>
											                <option value="3 Sgt">3° Sgt</option>
											                <option value="Cabo">Cabo</option>
											                <option value="Sd Ep">Sd Ep</option>
											                <option value="Sd Ev">Sd Ev</option>
											            </select>
													</td>
												</tr>
												<tr>
													<td>
														<label for="local_base">Local De Atuação</label>
													</td>
													<td>
														<select class="selectpicker show-tick" data-style="btn-primary" name="local" required>
											                <option value="">Local</option>
											                <option value="CMO">CMO</option>
											                <option value="9 RM">9° RM</option>
											                <option value="B ADM AP / CMO">B ADM AP / CMO</option>
											                <option value="6CTA">6CTA</option>
											                <option value="9 BCOM">9° BCOM</option>
											                <option value="CIA GD">9° CIA GD</option>
											            </select>
													</td>
												</tr>								
											</table>
											<div id="a"></div>
											
												<table class="table table-hover" id="tb_1">
													<tr>
														<td >
															<label for="login"><font color="">Novo Login</font></label>
														</td>
														<td >
															<input class="form-control" type="text" name="login" placeholder="Login" required>
														</td>
													</tr>
													<tr>
														<td >
															<label for="password"><font color="">Novo Password</font></label>
														</td>
														<td >
															<input class="form-control" type="text" name="password" placeholder="Password" required>
														</td>
													</tr>
												</table>
												<button class="btn btn-group-justified btn-success" name="btnGravar" type="submit"> <h3> Cadastrar </h3></button>
										</form>
									</div>

								</div>
							</div>
						</div>
					</td>
					



					<td align="center">
						<label for="remover_cadastro"><font color="black" >Remover Militar Dos Cadastros</font></label>
						<!-- Remover militar aos cadastros (unico) -->
						<button class="btn btn-group-justified btn-danger" type="button" id="remCadastro"><font color="white"><b>Remover Cadastro</b></font></button>

						<div class="modal fade" id="myModalRem" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header" style="padding: 20px 50px;">
										<button class="close" type="button" data-dismiss="modal">Fechar</button> 
										<h3>Remover Cadastro</h3>
									</div>
									<div class="modal-body" style="padding: 50px 0px;">
										<?php
											
											include ("connect.php");

											$sql = "SELECT id, nome_completo, login, posto, local, permissao FROM militar_registrado order by nome_completo";
											$result = $conn->query($sql);

											if ($result->num_rows > 0) {
											    // output data of each row
												echo "<table class='table'>
												<tr class='nomecompleto cabecalho'>

												<td>
												Nome
												</td>

												<td>
												Posto / G
												</td>

												<td>
												Login
												</td>

												<td>
												Local
												</td>

												<td>
												Ação
												</td>";


												echo "</tr>";
											    while($row = $result->fetch_assoc()) {
											    	
												   $login = $row["login"];
												   $nome_completo = $row["nome_completo"];
												   $posto = $row["posto"];
												   $local = $row["local"];
												   $id = $row["id"];
												   $permissao = $row["permissao"];

												   if($permissao != "adm") {
												  
													  // tabela de sql com os registro de usuarios listados
													   echo "<form class='form-inline' role='form' action='procAcao.php' method='post'>";
													   echo "<table class='table table-hover'>";
													   echo "<tr class='nomecompleto'>";
													   
													   // nome do usuario do registro
													   echo "<td class='nomes'>";
													   echo "<b> $nome_completo ";
													  
													   
													   // posto de graduacao do usuario
													   echo "<td class='nomes'>";
													   echo $posto;
													   echo "</td>";
													 
													   // login do usuario
													   echo "<td class='nomes'>";
													   echo $login;
													   echo "</td>";

													   // local de atuacao militar
													   echo "<td class='nomes'>";
													   echo $local;
													   echo "</td>";


													   // icone para excluir usuario
													   echo "<td class='excluir'>";
													   echo "<button type='submit' value='$id' name='btnRemove' class='btn btn-danger'>Excluir</button>";
													   echo "</td>";

													   echo "</tr>";
													   echo "</table>";
													   echo "</form>";

												   }
											    }
											} else {
											    echo "0 results";
											}
											$conn->close();
										?>
									</div>
								</div>
							</div>
						</div>


					</td>
				</tr>


				<tr>
					<td align="center">
						<label for="alterar_cadastros"><font color="black" >Alterar Cadastro Do Militar</font></label>
						<!-- Alterar militar aos cadastros (unico) -->
						<button class="btn btn-group-justified btn-warning" type="button" id="altCadastro"><font color="white"><b>Alterar Cadastro</b></font></button>

						<div class="modal fade" id="myModalAlt" role="dialog">

							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header" style="padding: 20px 50px;">
										<button class="close" type="button" data-dismiss="modal">Fechar</button>
										<h3>Alterar Cadastro</h3>
									</div>
									<div class="modal-body" style="padding: 50px 0px;">
										<?php
											include ("connect.php");

											$sql = "SELECT id, nome_completo, login, posto, local, permissao FROM militar_registrado order by nome_completo"; 
											$result = $conn->query($sql);

											if($result->num_rows > 0) {
												echo "<table class='table'>";
												echo "<tr class='nomecompleto cabecalho'>";

												echo "<td>";
												echo "Nome";
												echo "</td>";
												
												echo "<td>";
												echo "Posto / G";
												echo "</td>";

												echo "<td>";
												echo "Login";
												echo "</td>";

												echo "<td>";
												echo "Local";
												echo "</td>";

												echo "<td>";
												echo "Ação";
												echo "</td>";

												echo "</tr>";

												while($row = $result->fetch_assoc()) {

													$login = $row["login"];
													$nome_completo = $row["nome_completo"];
													$posto = $row["posto"];
													$local = $row["local"];
													$permissao = $row["permissao"];
													$id = $row["id"];

													if($permissao != "adm") {
														
														echo "<form class='form-inline' role='form' action='procAcao.php' method='post'>";
														echo "<table class='table table-hover'>";
														echo "<tr class='nomecompleto'>";

														echo "<td class='nome'>";
														echo "<b> $nome_completo";
														echo "</td>";

														echo "<td class='name'>";
														echo $posto;
														echo "</td>";

														echo "<td class='name'>";
														echo $login;
														echo "</td>";

														echo "<td class='name'>";
														echo $local;
														echo "</td>";

														echo "<td>";
														echo "<button class='btn btn-warning' value='$id' name='btnAtualiza' type='submit'>Alterar</button>";
														echo "</td>";	

														echo "</tr>";
														echo "</form>";
														echo "</table>";
													}
												}
											}

										?>
									</div>
								</div>
							</div>
						</div>

					</td>
				





					<td align="center">
						<label for="lista_usuario"><font color="black" >Listar Militares Cadastrados</font></label>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
						<!-- Listar usuario militar cadastrados (Todos) -->
						<button class="btn btn-group-justified btn-info" type="button" id="listarMil"><font color="white" ><b>Listar Militares</b></font></button>
						<div class="modal fade" id="myModalMil" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header" style="padding: 20px 50px;">
										<button class="close" type="button" data-dismiss="modal">Fechar</button>
										<h3>Listar Militares</h3>
									</div>

									<div class="modal-body" style="padding: 50px 0px;">
										<?php
											
												include ("connect.php");

											$sql = "SELECT id, nome_completo, login, posto, local, permissao FROM militar_registrado order by nome_completo"; 
											$result = $conn->query($sql);

											/*$sql_2 = "SELECT login FROM registros WHERE login = '".$login."' ";
											$result_2 = $conn->query($sql_2);*/

											if($result->num_rows > 0) {
												echo "<table class='table'>";
												echo "<tr class='nomecompleto cabecalhoListas'>";

												echo "<td>";
												echo "Nome";
												echo "</td>";
												
												echo "<td>";
												echo "Posto / G";
												echo "</td>";

												echo "<td>";
												echo "Login";
												echo "</td>";

												echo "<td>";
												echo "Local";
												echo "</td>";

												echo "<td>";
												echo "N° Registros";
												echo "</td>";

												echo "</tr>";


												
												

												while($row = $result->fetch_assoc()) {

													$login = $row["login"];
													$nome_completo = $row["nome_completo"];
													$posto = $row["posto"];
													$local = $row["local"];
													$permissao = $row["permissao"];
													$id = $row["id"];


													$sql_2 = "SELECT login FROM registros WHERE login = '".$login."' ";
													$result_2 = $conn->query($sql_2);


													$numero_registros = 0;

													while($row = $result_2->fetch_assoc()) {
														//$login = $row["login"];
														$numero_registros++;
													}

													if($permissao != "adm") {
														
														echo "<form class='form-inline' role='form' action='procAcao.php' method='post'>";
														echo "<table class='table table-hover'>";
														echo "<tr class='nomecompleto'>";

														echo "<td class='nome'>";
														echo "<b> $nome_completo";
														echo "</td>";

														echo "<td class='name'>";
														echo $posto;
														echo "</td>";

														echo "<td class='name'>";
														echo $login;
														echo "</td>";

														echo "<td class='name'>";
														echo $local;
														echo "</td>";

														echo "<td class='name'>";
														echo $numero_registros;
														echo "</td>";

														echo "</tr>";
														echo "</form>";
														echo "</table>";
													}
												}
											}
								
										?>

									</div>
								</div>
							</div>
						</div>

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
						<button class="btn btn-group-justified btn-info" id="listarReg" type="button"><font color="white"><b>Listar Todos Os Registros</b></font></button>
						<div class="modal fade" id="myModalReg" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header" style="padding: 20px 50px;">
										<button class="close" type="button" data-dismiss="modal">Fechar</button>
										<h3>Listar Registros</h3>
									</div>

									<div class="modal-body" style="padding: 50px 0px;">
										<?php
											include ("connect.php");

											$sql = "SELECT login, nome, dd, ctt, atividade, dia_saida, mes_saida, ano_saida, dia_retorno, mes_retorno, ano_retorno FROM registros";
											$result = $conn->query($sql); 

											if($result->num_rows > 0) {
												$login = $row["login"];
												$nome = $row["nome"];
												$dd = $row["dd"];
												$ctt = $row["ctt"];
												$atividade = $row["atividade"];
												$dia_saida = $row["dia_saida"];
												$mes_saida = $row["mes_saida"];
												$ano_saida = $row["ano_saida"];
												$dia_retorno = $row["dia_retorno"];
												$mes_retorno = $row["mes_retorno"];
												$ano_retorno = $row["ano_retorno"];

												//$ctt = $dd. "-". $ctt;
												echo $login;

												echo "<table class='table'>";
												echo "<tr class='nomecompleto cabecalhoListas'>";

												echo "<td>";
												echo "Nome";
												echo "</td>";
												
												echo "<td>";
												echo "Login";
												echo "</td>";

												echo "<td>";
												echo "Telefone";
												echo "</td>";

												echo "<td>";
												echo "Atividade";
												echo "</td>";

												echo "<td>";
												echo "Dia de Saída";
												echo "</td>";

												echo "</tr>";


												while($row = $result->fetch_assoc()) {

													
														echo "<table class='table table-hover'>";
														echo "<tr class='nomecompleto'>";

														echo "<td class='nome'>";
														echo "<b> $nome";
														echo "</td>";

														echo "<td class='name'>";
														echo $login;
														echo "</td>";

														echo "<td class='name'>";
														echo $ctt;
														echo "</td>";

														echo "<td class='name'>";
														echo $atividade;
														echo "</td>";

														echo "<td class='name'>";
														echo $dia_saida;
														echo "</td>";

														echo "</tr>";
														echo "</table>";



												}


											}

										?>



									</div>
								</div>
							</div>
						</div>

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
	<!--</form> -->

	


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
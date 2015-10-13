<html>
<head> 
	<title> Registro_militar </title> 
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
</head>
<body class="container">

<?php
  if(empty($_GET["enviado"])) {
    /*echo '<div class="alter alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Erro!</strong> Não Houve Exito.
          </div>
    ';*/
    }
  

  else  {
    echo '<div class="alert alert-success" align="center">
      <span class="glyphicon glyphicon-ok"></span>
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <h3><font color="black"> Registro </font></h3>
      <h4><font color="black"> Gravado Com Sucesso </font></h4>
    </div>';
}
?>


  <form class="form-inline" role="form" action="enviar_registro.php" method="post"> 

    <fieldset>
      <legend>Registro_Militar</legend>
  
      <table class="table table-hover" cellspacing="10" align="center">
        
        <tr>
          <td> 
            <label for="nome">Nome: </label>
          </td>
          <td align="left">
            <input class="form-control" type="text" name="nome" maxlength="250" placeholder="Afonso" pattern="[A-Za-z]{3,}$" autofocus required="required">
          </td>
        </tr>


        <tr>
          <td>
            <label for="posto">Posto: </label>
          </td>
          <td align="left">
            <input class="form-control" type="text" name="posto" maxlength="30" placeholder="3-Sargento" required>
          </td>
        </tr>


        <tr>
          <td>
            <label for="local">Local: </label>
          </td>
          <td align="left">
            <input class="form-control" type="text" name="local" maxlength="60" placeholder="Comando Militar do Oeste" required>
          </td>
        </tr>



        <tr>
          <td>
            <label for="dd">Telefone de Contato: </label>
          </td>
          <td align="left">
            <input class="form-control" type="text" name="dd"  size="2" maxlength="2" placeholder="DD" pattern="[0-9]{2}" required>
            <input for="ctt" class="form-control" type="text" name="ctt" maxlength="9" placeholder="0-0000-0000" pattern="[0-9]{9}" required>
          </td>
        </tr>


        <tr>
          <td>
            <label for="atividade">Atividade: </label>
          </td>
          <td align="left">
            <textarea class="form-control"  rows="4" cols="50" name="atividade" maxlength="500" placeholder="Periodo de Ferias" required></textarea>
          </td>
        </tr>


        <tr>
          <td>
            <label for="saida">Saida: </label>
          </td>
          <td align="left">
            <input type="text" name="dia" size="2" maxlength="2" placeholder=" Dia" pattern="[0-9]{2}" required>
          
            <input type="text" name="mes" size="2" maxlength="2" placeholder=" Mes" pattern="[0-9]{2}" required>

            <input type="text" name="ano" size="4" maxlength="4" placeholder=" Ano" pattern="[0-9]{4}" required>
          </td>
        </tr>


        <tr>
          <td>
            <label for="retorno">Retorno: </label>
          </td>
          <td align="left">
            <input type="text" name="diaRet" size="2" maxlength="2" placeholder=" Dia" pattern="[0-9]{2}" required>
            <input type="text" name="mesRet" size="2" maxlength="2" placeholder=" Mes" pattern="[0-9]{2}" required>
            <input type="text" name="anoRet" size="4" maxlength="4" placeholder=" Ano" pattern="[0-9]{4}" required>
          </td>
        </tr>
          <nav class="navbar navbar-inverse">
        
          </nav>
          <tr>
            <td colspan="2" align="center">
              <button type="button" class="btn btn-danger" id="myBtn">Enviar</button>



              <div class="modal fade" id="myModal" role="dialog">

                <div class="modal-dialog">

                  <div class="modal-content">

                    <div class="modal-header" style="padding:35px 50px;">

                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4><b>Os dados abaixos estão corretos?</b></h4>

                    </div>

                    <div class="modal-body" style="padding:40px 50px;">

                      <form role="form" action="enviar_registro.php">

                        <div class="form-group">
                          <label><font color="#CC0000"> Confirmação. </font></label>
                        </div>

                        <div class="form-group">
                         <label> Confirmação de Registro Transfere a Responsabilidade Para Usuario !</label>
                        </div>

                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Sim</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Não</button>

                      </form>
                    </div>
                  </div>
              
                </div>

              </div> 

              <input class="btn btn-warning" type="reset" value="Limpar">

            </td>
          </tr>
      </table>
      <form role="form" action="confirma_usuario.php">
        <button class="btn btn-info" type="submit"><span class="glyphicon glyphicon-repeat"></span>  Novo Login </button>
      </form>
    </fieldset> 
</form>

</body>
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
</html>
	

<html lang="pt-br">
<head> 
	<title> Registro_militar </title> 
 <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="boostrap-select/css/bootstrap-select.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="boostrap-select/js/bootstrap-select.js"></script>
  <meta charset="utf-8" />
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
      <h4><font color="black"> Registrado com Sucesso </font></h4>
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
            <input class="form-control" type="text" name="nome" maxlength="250" placeholder="Afonso" size="23" pattern="[A-Za-z]{3,}$" autofocus required="required">
          </td>
        </tr>


        <tr>
          <td>
            <label for="posto">Posto / G : </label>
          </td>
          <td align="left">
           <!-- <input class="form-control" type="text" name="posto" maxlength="30" placeholder="3-Sargento" required>-->
            <select class="selectpicker show-tick" data-style="btn-primary" name="posto" required>
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
            <label for="local">Local: </label>
          </td>
          <td align="left">
            <!-- <input class="form-control" type="text" name="local" maxlength="60" placeholder="Comando Militar do Oeste" size="23" required> -->

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



        <tr>
          <td>
            <label for="dd">Telefone de Contato: </label>
          </td>
          <td align="left">
            <input class="form-control" type="text" name="dd"  size="2" maxlength="2" placeholder="DD" pattern="[0-9]{2}" required>
            <input for="ctt" class="form-control" type="text" name="ctt" maxlength="4" placeholder="0000" pattern="[0-9]{4}" size="4" required>
            <input for="ctt_final" class="form-control" type="text" name="ctt_final" maxlength="5" placeholder="00000" pattern="[0-9]{5}" size="5" required>
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
            <!--<input type="text" name="dia" size="2" maxlength="2" placeholder=" Dia" pattern="[0-9]{2}" required>-->
            <select class="selectpicker show-tick" data-style="btn-primary" data-width="60px" name="dia">
                <option value="">Dia</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
          
            <!-- <input type="text" name="mes" size="2" maxlength="2" placeholder=" Mes" pattern="[0-9]{2}" required> -->

            <select class="selectpicker show-tick" data-style="btn-primary" data-width="120px" name="mes" required>
                <option value="">Mes</option>
                <option value="Janeiro">Janeiro</option>
                <option value="Fevereiro">Fevereiro</option>
                <option value="Março">Março</option>
                <option value="Abril">Abril</option>
                <option value="Maio">Maio</option>
                <option value="Junho">Junho</option>
                <option value="Julho">Julho</option>
                <option value="Agosto">Agosto</option>
                <option value="Setembro">Setembro</option>
                <option value="Outubro">Outubro</option>
                <option value="Novembro">Novembro</option>
                <option value="Dezembro">Dezembro</option>
            </select>

            <input type="text" name="ano" size="4" maxlength="4" placeholder=" Ano" pattern="[0-9]{4}" required>
            <!-- <select class="selectpicker show-tick" data-style="btn-info" data-width="80px" name="ano">
                <option value="">Ano</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
            </select>-->


          </td>
        </tr>


        <tr>
          <td>
            <label for="retorno">Retorno: </label>
          </td>
          <td align="left">
            <!-- <input type="text" name="diaRet" size="2" maxlength="2" placeholder=" Dia" pattern="[0-9]{2}" required> -->

            <select class="selectpicker show-tick" data-style="btn-primary" data-width="60px" name="diaRet" required>
                <option value="">Dia</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>

            <!--<input type="text" name="mesRet" size="2" maxlength="2" placeholder=" Mes" pattern="[0-9]{2}" required> -->
             <select class="selectpicker show-tick" data-style="btn-primary" data-width="120px" name="mesRet" required>
                <option value="">Mes</option>
                <option value="Janeiro">Janeiro</option>
                <option value="Fevereiro">Fevereiro</option>
                <option value="Março">Março</option>
                <option value="Abril">Abril</option>
                <option value="Maio">Maio</option>
                <option value="Junho">Junho</option>
                <option value="Julho">Julho</option>
                <option value="Agosto">Agosto</option>
                <option value="Setembro">Setembro</option>
                <option value="Outubro">Outubro</option>
                <option value="Novembro">Novembro</option>
                <option value="Dezembro">Dezembro</option>
            </select>


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
      <form role="form" action="index.php">
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



<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>

</html>
	

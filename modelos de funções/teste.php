 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <meta charset="utf-8">


<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-danger btn-sm" id="myBtn">Enviar</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Os dados abaixos estão corretos?</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname">Nome: </label>
              Lucas Silva
            </div>
            <div class="form-group">
              <label for="psw">Posto: </label>
              Estagiário
            </div>
              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Sim</button>
              <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Não</button>
          </form>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>



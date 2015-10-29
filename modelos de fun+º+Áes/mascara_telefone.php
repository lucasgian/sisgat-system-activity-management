<script type="text/javascript" src="js/jquery.mask.min.js"/></script>


<label for="txttelefone">Telefone</label>
<input type="tel" name="txttelefone" id="txttelefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" />
<script type="text/javascript">$("#txttelefone").mask("(00) 0000-00009");</script>
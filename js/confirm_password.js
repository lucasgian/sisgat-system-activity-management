var password = document.getElementById("password"),
  confirm_password = document.getElementById("confirm_password");

function validatePassword() {
  /*if(password.value == "") {
  	password.setCustomValidity("Esse Campo Não Pode Ficar Vazio");
  	alert("Esse Campo Não Pode Ficar Vazio");

  } else */if (confirm_password.value != password.value) {
    confirm_password.setCustomValidity("Senha Não Compativel");

  }

   else {
    confirm_password.setCustomValidity('');
  }
}

function valida_form() {
	if(senha.value == "") {
		senha.setCustomValidity("Esse Campo Não Pode Ficar Vazio");
		return false
	}
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
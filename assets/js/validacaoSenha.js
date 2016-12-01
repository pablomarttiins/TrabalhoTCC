var password = document.getElementById("senha")
  , confirm_password = document.getElementById("confirmaSenha");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas Divergentes!");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

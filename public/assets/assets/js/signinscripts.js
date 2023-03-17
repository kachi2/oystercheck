const checkFields = () => {
    if (getEmail.value.length == 0 || getPassword.value.length == 0) {
        getSignInButton.disabled = true;
    } else {
        getSignInButton.disabled = false;
    }
}

const changeButtonState = () =>{
    getSignInButton.innerHTML = '<div class="spinner-border spinner-border-sm" role="status">  <span class="visually-hidden"></span></div>';
    getSignInButton.disabled = true;
}

let getEmail = document.getElementById('email');
getEmail.addEventListener('keyup', checkFields);
let getPassword = document.getElementById('password');
getPassword.addEventListener('keyup', checkFields);

let getSignInButton = document.getElementById('signin_button');
let signInForm = document.getElementById('signin_form');
signInForm.addEventListener('submit', changeButtonState);

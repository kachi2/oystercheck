const checkFields = () => {
    if (getFirstName.value.length == 0 || getLastName.value.length == 0 || getEmail.value.length == 0 || getPhone.value.length == 0 || getCompanyName.value.length == 0 || getPrivacyTerms.checked == false) {
        getSignUpButton.disabled = true;
    } else {
        getSignUpButton.disabled = false;
    }
}

const changeButtonState = () =>{
    getSignUpButton.innerHTML = '<div class="spinner-border spinner-border-sm" role="status">  <span class="visually-hidden"></span></div>';
    getSignUpButton.disabled = true;
}

let getFirstName = document.getElementById('fname');
getFirstName.addEventListener('keyup', checkFields);
let getLastName = document.getElementById('lname');
getLastName.addEventListener('keyup', checkFields);
let getEmail = document.getElementById('email');
getEmail.addEventListener('keyup', checkFields);
let getPhone = document.getElementById('phone');
getPhone.addEventListener('keyup', checkFields);
let getCompanyName = document.getElementById('company_name');
getCompanyName.addEventListener('keyup', checkFields);
let getPrivacyTerms = document.getElementById('checkbox');
getPrivacyTerms.addEventListener('click', checkFields);
let getSignUpButton = document.getElementById('signup_button');
let signUpForm = document.getElementById('signup_form');
signUpForm.addEventListener('submit', changeButtonState);



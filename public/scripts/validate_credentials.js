
const form = document.querySelector('#form');
const errorFillAllFields = document.querySelector('#error-fillAllFields');
const errorPasswordLength = document.querySelector('#error-passwordLength');
const errorPasswordTooWeak = document.querySelector('#error-passwordTooWeak');
const errorEmailNotValid = document.querySelector('#error-emailNotValid');


function validateCredentials(event) {
    
    var username = form.username.value;
    var password = form.password.value;
    if(form.email)
        var email = form.email.value;

    if(errorFillAllFields){
        if (username.length == 0 || password.length == 0 || (form.email && email.length == 0)) {
            event.preventDefault();
            errorFillAllFields.classList.remove('hidden');
            return false;
        }else{
            errorFillAllFields.classList.add('hidden');
        }
    }

    if(errorPasswordLength){
        if (password.length < 8) {
            event.preventDefault();
            errorPasswordLength.classList.remove('hidden');
            return false;
        }else{
            errorPasswordLength.classList.add('hidden');
        }
    }

    if(errorPasswordTooWeak){
        if (!/[A-Z]/.test(password) || 
            !/[a-z]/.test(password) || 
            !/[0-9]/.test(password) || 
            !/[\W_]/.test(password)) {
            
            event.preventDefault();
            errorPasswordTooWeak.classList.remove('hidden');
            return false;
        }else{
            errorPasswordTooWeak.classList.add('hidden');
        }
    }

    if(form.email && errorEmailNotValid){
        if (!email.includes('@')){

            event.preventDefault();
            errorEmailNotValid.classList.remove('hidden');
            return false;
        }else{
            errorEmailNotValid.classList.add('hidden');
        }
    }
    
}


form.addEventListener('submit', validateCredentials);


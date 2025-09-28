
const emailField = document.querySelector('#email');
const usernameField = document.querySelector('#username');
const errorMail = document.querySelector('#error-emailAlreadyUsed');
const errorUsername = document.querySelector('#error-usernameAlreadyUsed');


function OnEmailBlur(event){
    if(emailField.value)
        fetch(BASE_URL + 'register/checkMail/' + emailField.value)
        .then(onResponseReturnJson)
        .then(checkMail)
        
    if(usernameField.value)
        fetch(BASE_URL + 'register/checkUsername/' + usernameField.value)
        .then(onResponseReturnJson)
        .then(checkUsername)
}

function checkMail(data){
    if(data.exists){
        errorMail.classList.remove('hidden')
    }else{
        errorMail.classList.add('hidden')
    }

}

function checkUsername(data){
    if(data.exists){
        errorUsername.classList.remove('hidden')
    }else{
        errorUsername.classList.add('hidden')
    }

}

emailField.addEventListener('blur', OnEmailBlur);
usernameField.addEventListener('blur', OnEmailBlur);


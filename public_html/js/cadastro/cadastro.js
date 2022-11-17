const inputs = document.querySelectorAll('.input');
const button = document.querySelector('.form-button');
const formCadastro = document.querySelector('.form-cadastro');

/////////////////////////////////////////////////// Funções de Validação do formulario ///////////////////////////////////////////////


const validateUser = () => {
    const [username, usernameConf] = inputs;

    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if(username.value.match(validRegex) && username === usernameConf){
        alert ('este email é valido!');
        console.log(2);
        return true;
    } else {
        alert ('o email digitado é invalido');
        console.log(3);
        return false;
    }
}



/////////////////////////////////////// Funções de visual do span do formulario; ///////////////////////////////////////////////////////

const handleFocus = ({target}) => {
    const span = target.previousElementSibling;
    span.classList.add('span-active');
}

const handleFocusOut = ({target}) => {
if(target.value === '') {
const span = target.previousElementSibling;
span.classList.remove('span-active');
}
}

inputs.forEach((input) => {
    input.addEventListener('focus', handleFocus);
})

inputs.forEach((input) => {
    input.addEventListener('focusout', handleFocusOut);
})

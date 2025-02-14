let form = document.querySelector('#form');
let login = document.querySelector('#log');
let pass = document.querySelector('#pass');
let repeat = document.querySelector('#repeat');
let register = document.querySelector('#reg');

let userName = login.value;
let password = pass.value;
let repeatP = repeat.value;

register.addEventListener('submit', checkRegistation(), );

function checkRegistation(event){
   
    event.preventDefault();

    if((userName !== '') || (password !== '') || (repeatP !== '')){
        console.log('TU LOX');
        if(password === repeatP){
            alert('Вы зарегистрированны');
            console.log('userName');
            console.log('password');
            console.log('repeatP');
        }
        else{
            alert('Пароли не совпадают  ');
        }
       alert('Заполните все поля');
    }
    else{
        alert('Заполните все поля');
    }
    

}




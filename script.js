/*CREATE NODOS*/
const wrapper = document.querySelector('.wrapper');
const LoginLink = document.querySelector('.login-link');
const RegisterLink = document.querySelector('.register-link');
const BtnLogin = document.querySelector('.buttonLogin');
const IconClose = document.querySelector('.icon-close');
/*ADD CLASS 'active' BY CLICK TO CLASS 'wrapper'*/
RegisterLink.addEventListener('click', () => {
    wrapper.classList.add('active');
})
/*ADD CLASS 'remove' BY CLICK TO CLASS 'wrapper'*/
LoginLink.addEventListener('click', () => {
    wrapper.classList.remove('active');
})
/*ADD CLASS 'btnActive' BY CLICK TO CLASS 'wrapper'*/
BtnLogin.addEventListener('click', () => {
    wrapper.classList.add('btnActive');
})
/*REMOVE CLASS 'btnActive' BY CLICK TO CLASS 'wrapper'*/
IconClose.addEventListener('click', () => {
    wrapper.classList.remove('btnActive');
})
/*FUNCTION OF THE BURGER MENU BUTTON THAT ADDES THE CLASS 'navegation' TO THE CLASS '.containerBurgerMenu'*/
function burgerMenu(){
    document.querySelector(".navegation").classList.toggle("viewBurgerMenu") 
}
/*EMPTY IMPUTS FROM THE REGISTER FORM*/
function validateRegister(){
    formRegister.reset();
    return false;
}
/*EMPTY IMPUTS FROM THE LOGIN FORM*/
function validateLogin(){
    formLogin.reset();
    return false;
}
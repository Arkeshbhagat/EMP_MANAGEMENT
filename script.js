const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnpopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');
const btnDPopup=document.querySelector('.btnDisplay-popup');


registerLink.addEventListener('click', () => {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', () => {
    wrapper.classList.remove('active');
});

btnpopup.addEventListener('click', () => {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', () => {
    wrapper.classList.remove('active-popup');
});

btnDPopup.addEventListener('click',()=>{
    wrapper.classList.add('active-D-popup');
})

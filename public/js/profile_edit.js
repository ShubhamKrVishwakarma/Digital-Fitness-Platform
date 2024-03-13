const oldPassToggle = document.querySelector('#oldPassToggle');
const oldPass = document.querySelector('#profileOldPassInput');
oldPassToggle.addEventListener('click', () => {
    const oldType = oldPass.getAttribute('type') === 'password' ? 'text' : 'password';
    oldPass.setAttribute('type', oldType);
    oldPassToggle.classList.toggle('bi-eye');
});

const newPassToggle = document.querySelector('#newPassToggle');
const newPass = document.querySelector('#profileNewPassInput');
newPassToggle.addEventListener('click', () => {
    const newType = newPass.getAttribute('type') === 'password' ? 'text' : 'password';
    newPass.setAttribute('type', newType);
    newPassToggle.classList.toggle('bi-eye');
});

const rePassToggle = document.querySelector('#rePassToggle');
const rePass = document.querySelector('#profileRePassInput');
rePassToggle.addEventListener('click', () => {
    const reType = rePass.getAttribute('type') === 'password' ? 'text' : 'password';
    rePass.setAttribute('type', reType);
    rePassToggle.classList.toggle('bi-eye');
});
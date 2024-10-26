const sound = new Audio('assets/audio/btn-start.mp3');

const btnStart = document.getElementById('btn-start');

const modalCredential = document.getElementById('modal-credential');

btnStart.addEventListener('click', () => {
    sound.play();
    modalCredential.showModal();
});

document.getElementById("register").addEventListener("submit", function(event) {
    event.preventDefault();
});

document.querySelector('.modal__btn-submit').addEventListener('click', () => {
    const inputName = document.getElementById('input-name').value;
    const inputPassword = document.getElementById('input-password').value;

    if ((inputName.trim() === '') || (inputPassword.trim() === '')) {
        const message = document.getElementById("login-error-message");
        message.innerHTML = "Por favor, ingrese su nombre y contraseña";
    } else {
        const modalCategory = document.getElementById('modal-category');
        modalCategory.showModal();
        modalCredential.close();
    }
});
const btnStart = document.getElementById('btn-start');
const modalCredential = document.getElementById('modal-credential');
const btnSubmit = document.querySelector('.modal__btn-submit');

btnStart.addEventListener('click', () => {
    modalCredential.showModal();
});

btnSubmit.addEventListener('click', () => {
    const inputName = document.getElementById('input-name').value;
    const inputPassword = document.getElementById('input-password').value;

    if ((inputName.trim() === '') || (inputPassword.trim() === '')) {
        const message = document.getElementById("error-message");
        message.innerHTML = "Por favor, ingrese su nombre y contraseña";
    } else {
        const modalCategory = document.getElementById('modal-category');
        modalCategory.showModal();
        modalCredential.close();
    }
});
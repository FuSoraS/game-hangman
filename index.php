<?php include('include/header.php'); ?>

<body>
    <main class="start">
        <h1 class="title">Adivina la palabra</h1>
        <button id="btn-start">Comenzar<i class="fa-solid fa-play"></i></button>
    </main>
    <dialog id="modal-credential" class="modal">
        <div class="modal__content">
            <h2 class="modal__title">Crear credenciales</h2>
            <p class="modal__text"><i class="fa-solid fa-user"></i>Ingrese su nombre</p>
            <input type="text" id="input-name">
            <p class="modal__text"><i class="fa-solid fa-lock"></i>Ingrese su contraseña</p>
            <input type="password" id="input-password">
            <span id="error-message"></span>
            <button class="modal__btn-submit">Enviar</button>
        </div>
    </dialog>

    <dialog id="modal-category" class="modal">
        <div class="modal__content">
            <h2 class="modal__title">Elija la categoría</h2>
            <button class="btn-category"><i class="fa-solid fa-lemon"></i>Frutas</button>
            <button class="btn-category"><i class="fa-solid fa-carrot"></i>Verduras</button>
            <button class="btn-category"><i class="fa-solid fa-paw"></i>Animales</button>
        </div>
    </dialog>

</body>

</html>
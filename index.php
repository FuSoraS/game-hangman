<?php include('include/header.php'); ?>

<div class="body">
    <nav class="nav">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="credits.php">Creditos</a></li>
        </ul>
    </nav>
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
</div>
<video muted autoplay loop>
    <source src="video/bg-video.mp4" type="video/mp4">
</video>

<?php include('include/footer.php'); ?>
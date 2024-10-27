<?php 
$additionalCss = "css/index.css";
$titlePage = "Inicio";
include('include/header.php');
?>

<?php include('include/nav.php'); ?>
<div class="index-body">
    <main class="start">
        <h1 class="title">El ahorcado</h1>
        <button id="btn-start">Comenzar<i class="fa-solid fa-play"></i></button>
    </main>
    <dialog id="modal-credential" class="modal">
        <form id="register" class="modal__content">
            <h2 class="modal__title">Registrarse</h2>
            <p class="modal__text"><i class="fa-solid fa-user"></i>Ingrese su nombre</p>
            <input type="text" id="input-name" class="input-register">
            <p class="modal__text"><i class="fa-solid fa-lock"></i>Ingrese su contraseña</p>
            <input type="password" id="input-password" class="input-register">
            <span id="login-error-message"></span>
            <button class="btn modal__btn-submit btn-save">Guardar</button>
        </form>
    </dialog>

    <dialog id="modal-category" class="modal">
        <div class="modal__content">
            <h2 class="modal__title">Elija la categoría</h2>
            <button class="btn btn-category"><i class="fa-solid fa-lemon"></i>Frutas</button>
            <button class="btn btn-category"><i class="fa-solid fa-carrot"></i>Verduras</button>
            <button class="btn btn-category"><i class="fa-solid fa-paw"></i>Animales</button>
        </div>
    </dialog>
</div>
<video muted autoplay loop class="video-bg-fire">
    <source src="assets/video/bg-fire.mp4" type="video/mp4">
</video>

<?php include('include/footer.php'); ?>
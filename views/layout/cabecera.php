<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<?php require(__DIR__ . '/modalRegistrarse.php'); // Estudiar las rutas en PHP ?>  

<header>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container  p-2">

            <div class="collapse navbar-collapse d-flex align-items-center gap-2">

                <!-- Logo de Animapp -->
                <div class="col-2 d-flex justify-content-center align-items-end gap-2 h-2">
                    <img class="img-fluid w-25 h-25 rounded-circle" src="/AnimApp/images/Logo_Animapp.jpg" alt="Logo">
                    <p class="pb-1 text-white">AnimApp</p>
                </div>

                <!-- Lista del menu de navegacion -->
                <div class="container-lista col-6 h-100">
                    <ul class="lista w-100 d-flex justify-content-around list-unstyled mb-0 fw-semibold">
                        <li class="py-1 px-3"><a class="text-decoration-none text-white" href="/AnimApp/index.php">Incicio</a></li>
                        <li class="py-1 px-3"><a class="text-decoration-none text-white" href="/AnimApp/views/servicios.php">Servicios</a></li>
                        <li class="py-1 px-3"><a class="text-decoration-none text-white" href="/AnimApp/views/adopciones.php">Adopciones</a></li>
                        <li class="py-1 px-3"><a class="text-decoration-none text-white" href="/AnimApp/views/apoyanos.php">Apoyanos</a></li>
                        <li class="py-1 px-3"><a class="text-decoration-none text-white" href="/AnimApp/views/contacto.php">contacto</a></li>
                    </ul>
                </div>

                <!-- Botones de Iniciar y Registrarse -->
                <?php if (isset($_SESSION['usuario'])): ?>
                    <div class="col-5 d-flex align-items-center">
                        <p class="h-auto mb-0 text-decoration-underline fw-medium">Bienvenid@: 👤<?php echo $_SESSION['usuario']; ?></p>
                        <button class="btn btn-dark ms-3"><a class="text-decoration-none text-white" href="/AnimApp/controller/logout.php">Cerrar sesión</a></button>
                    </div>
                <?php else: ?>
                    <div class="col-3 d-flex justify-content-center gap-2">
                        <ul class="ul-first list-unstyled d-flex gap-2 mb-0">
                            <li>
                                <a class="btn btn-light text-dark text-decoration-none" href="/AnimApp/controller/login.php">Iniciar sesión</a>
                            </li>
                            <li>
                                <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#mi-modal-registrarse">Registrarse</button>

                            </li>
                        </ul>
                    </div>
                <?php endif; ?>

            </div>

        </div>
    </nav>
</header>
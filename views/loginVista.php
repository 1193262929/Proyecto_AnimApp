<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/registro.css">
</head>

<body>
    <div class="page-wrapper">

        <?php require('../views/layout/cabecera.php'); ?>

        <main class="main-login">

            <div class="container bg-danger container-registro-login bg-info w-50 p-0 my-5 rounded d-flex">

                <div class="container-logo bg-dark w-50 d-flex flex-column align-items-center gap-5 justify-content-center rounded-start">
                    <img class="img-fluid w-50 h-50 rounded-circle" src="/AnimApp/images/Logo_AnimApp.jpg" alt="">
                    <p class="w-50 text-white text-center fs-5">"Conectando corazones peludos con hogares llenos de amor."</p>
                </div>

                <div class="container w-50 text-center py-3 rounded-end bg-white">
                    <h1>Iniciar Sesión</h1>
                    <form method="post">
                        <div class="form-group my-5 d-flex justify-content-center">
                            <input type="email" class="form-control w-75" name="email" placeholder="Email">
                        </div>

                        <div class="form-group my-5 d-flex justify-content-center">
                            <input type="password" class="form-control w-75" name="password" placeholder="Password">
                        </div>

                        <div class="form-group my-5">
                            <!-- <p>¿No tienes cuenta? <a  data-bs-toggle="modal" data-bs-target="#mi-modal-registrarse" href="#">Registrate aquí</a></p> -->
                            <p>¿No tienes cuenta?
                                <button type="button" class="btn btn-white text-info" data-bs-toggle="modal" data-bs-target="#mi-modal-registrarse">Registrate aquí</button>

                        </div>

                        <button type="submit" class="btn btn-dark w-75 mb-5">Iniciar sesion</button>

                    </form>
                    <?php if (isset($error)) echo "<p class='p-0' style='color:red;'>$error</p>"; ?>
                </div>
            </div>

        </main>
       

    </div>
    <?php require('../views/layout/footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
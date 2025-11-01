<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/registro.css">
</head>

<body>
    <div class="page-wrapper">

        <?php require(__DIR__ . '/layout/cabecera.php'); ?>

        <main>

            <div class="container-formulario-registro text-center container-fluid py-2 d-flex justify-content-center">

                <form action="/AnimApp/includes/registroDueno.php" method="POST" class="bg-white w-50 py-3 my-5 d-flex flex-column align-items-center rounded">
                    <h2>Registro</h2>

                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="nombre">Nombres</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>

                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control" name="apellido" id="apellidos" required>
                    </div>

                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="telefono">Telefono</label>
                        <input type="tel" class="form-control" name="telefono" id="telefono" required>
                    </div>

                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" required>
                    </div>

                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="direccion">Ciudad</label>
                        <input type="text" class="form-control" name="ciudad" id="ciudad" required>
                    </div>

                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>

                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" id="contrasena" required>
                    </div>

                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="contrasena2">Verificar contraseña</label>
                        <input type="password" class="form-control" name="contrasena2" id="contrasena2" required>
                        <div class="form-check mt-2">
                            <p><strong>¿Ya tienes cuenta?</strong> Iniciar sesión</p>
                            <input class="form-check-input" type="checkbox" id="gridCheck" required>
                            <label class="form-check-label" for="gridCheck">
                                Acepto Terminos y Condiciones
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-dark w-50 my-3">Crear cuenta</button>
                </form>

            </div>

        </main>

        <?php require(__DIR__ . '/layout/footer.php'); ?>
    </div>
</body>

</html>
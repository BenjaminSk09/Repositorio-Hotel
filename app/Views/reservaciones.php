<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Reservaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark text-white">

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('reservaciones') ?>">Reservaciones</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('hoteles') ?>">Pagina Hoteles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('clientes') ?>">Pagina Clientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-4 text-center">
        <h1 class="text-center display-1 text-white">Pagina Reservaciones</h1>
        <p class="text-center text-white h4">En la siguiente pagina podras acceder a
            las reservaciones, podras crear una nueva reservacion, actualizar los datos de cualquier reservacion,
            asi como eliminar cualquier reservacion.
        </p>
        <div class="text-center mb-4">
            <a href="nuevo_reservacion" class="btn btn-primary"><i class="bi bi-cloud-plus-fill text-white"></i> NUEVA
                RESERVACION</a>
        </div>
        <div class="table-responsive">
            <table class="table table-dark table-bordered border-light table-hover border border-3 rounded-3">
                <thead class="table-light">
                    <tr>
                        <th>Reservacion ID</th>
                        <th>Fecha</th>
                        <th>Cliente ID</th>
                        <th>Hotel ID</th>
                        <th>Descripcion</th>
                        <th>Usuario ID</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($datos as $reservaciones): ?>
                    <tr>
                        <td><?php echo $reservaciones ['reservacion_id'] ?></td>
                        <td><?php echo $reservaciones ['fecha'] ?></td>
                        <td><?php echo $reservaciones ['cliente_id'] ?></td>
                        <td><?php echo $reservaciones ['hotel_id'] ?></td>
                        <td><?php echo $reservaciones ['descripcion'] ?></td>
                        <td><?php echo $reservaciones ['usuario_id'] ?></td>
                        <td>
                            <a href="<?= base_url('buscar_reservacion/').$reservaciones['reservacion_id']?>"
                                class="btn btn-info"><i class="bi bi-arrow-clockwise"></i> Actualizar</a>
                            <a href="<?= base_url('eliminar_reservacion/').$reservaciones['reservacion_id']?>"
                                class="btn btn-danger"><i class="bi bi-x-circle"></i> Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Hoteles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark text-white">

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('hoteles') ?>">Hoteles</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('clientes') ?>">Página Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('reservaciones') ?>">Pagina Reservaciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-center display-1 text-white my-4">Página Hoteles</h1>
    <p class="text-center text-white h4">En la siguiente pagina podras acceder a
        los hoteles, podras registrar un nuevo hotel en la base de datos, actualizar los datos de cualquier hotel,
        y eliminar un hotel de la base de datos.
    </p>
    <div class="container text-center">
        <div class="text-center mb-4">
            <a href="nuevo_hotel" class="btn btn-primary"><i class="bi bi-cloud-plus-fill"></i> NUEVO HOTEL</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-dark table-hover border border-3 rounded-3">
                <thead class="table-light">
                    <tr>
                        <th>Hotel Id</th>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Ciudad Id</th>
                        <th>Categoría Id</th>
                        <th>Usuario Id</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($datos as $hoteles): ?>
                    <tr>
                        <td><?php echo $hoteles['hotel_id'] ?></td>
                        <td><?php echo $hoteles['nombre'] ?></td>
                        <td><?php echo $hoteles['correoelectronico'] ?></td>
                        <td><?php echo $hoteles['telefono'] ?></td>
                        <td><?php echo $hoteles['direccion'] ?></td>
                        <td><?php echo $hoteles['ciudad_id'] ?></td>
                        <td><?php echo $hoteles['categoria_id'] ?></td>
                        <td><?php echo $hoteles['usuario_id'] ?></td>
                        <td>
                            <a href="<?= base_url('buscar_hotel/').$hoteles['hotel_id']?>" class="btn btn-info my-1"><i
                                    class="bi bi-pencil"></i> Actualizar</a>
                            <a href="<?= base_url('eliminar_hotel/').$hoteles['hotel_id']?>"
                                class="btn btn-danger my-1"><i class="bi bi-trash"></i> Eliminar</a>
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
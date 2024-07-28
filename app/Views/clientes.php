<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark text-white">

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('clientes') ?>">Clientes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('hoteles') ?>">Pagina Hoteles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('reservaciones') ?>">Pagina Reservaciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-center display-1 text-white my-4">Página Clientes</h1>
    <p class="text-center text-white h4">En la siguiente pagina podras acceder a 
        los clientes, podras crear un usuario nuevo para un cliente, actualizar los datos de un cliente, 
        y eliminar un cliente.
</p>
    <div class="container text-center">
        <a href="nuevo_cliente" class="btn btn-primary my-3"><i class="bi bi-cloud-plus-fill"></i> NUEVO CLIENTE</a>
        <div class="table-responsive">
            <table class="table table-bordered table-dark table-hover border border-3 rounded-3">
                <thead class="table-light">
                    <tr>
                        <th class="d-none d-md-table-cell">ID Cliente</th>
                        <th class="d-none d-md-table-cell">Nombre</th>
                        <th class="d-none d-md-table-cell">Apellido</th>
                        <th class="d-none d-md-table-cell">NIT</th>
                        <th class="d-none d-md-table-cell">Teléfono</th>
                        <th class="d-none d-md-table-cell">Correo Electrónico</th>
                        <th class="d-none d-md-table-cell">Dirección</th>
                        <th class="d-none d-md-table-cell">Contraseña</th>
                        <th class="d-none d-md-table-cell">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($datos as $clientes): ?>
                    <tr class="border border-2 rounded-2">
                        <td class="d-none d-md-table-cell"><?php echo $clientes['cliente_id'] ?></td>
                        <td class="d-none d-md-table-cell"><?php echo $clientes['nombre'] ?></td>
                        <td class="d-none d-md-table-cell"><?php echo $clientes['apellido'] ?></td>
                        <td class="d-none d-md-table-cell"><?php echo $clientes['nit'] ?></td>
                        <td class="d-none d-md-table-cell"><?php echo $clientes['telefono'] ?></td>
                        <td class="d-none d-md-table-cell"><?php echo $clientes['correo_electronico'] ?></td>
                        <td class="d-none d-md-table-cell"><?php echo $clientes['direccion'] ?></td>
                        <td class="d-none d-md-table-cell"><?php echo $clientes['contrasenia'] ?></td>
                        <td class="d-none d-md-table-cell">
                            <a href="<?= base_url('buscar_cliente/').$clientes['cliente_id']?>" class="btn btn-info my-1"><i
                                    class="bi bi-pencil"></i> Actualizar</a>
                            <a href="<?= base_url('eliminar_cliente/').$clientes['cliente_id']?>" class="btn btn-danger my-1"><i
                                    class="bi bi-trash"></i> Eliminar</a>
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

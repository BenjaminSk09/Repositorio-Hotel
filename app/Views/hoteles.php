<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Hoteles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark text-white">
    <h1 class="text-center display-1 text-white">Pagina Hoteles</h1>
    <div class="container text-center">
        <a href="nuevo_hotel" class="btn"><i class="bi bi-cloud-plus-fill text-white">NUEVO HOTEL</i></a>
        <table class="table table-border table-bordered border-secondary border-opacity-50 ">
            <thead>
                <tr>
                    <th>Hotel Id</th>
                    <th>Nombre</th>
                    <th>Correo Electronico</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Ciudad Id</th>
                    <th>Categoria Id</th>
                    <th>Usuario Id</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datos as $hoteles): ?>
                <tr>
                    <td><?php echo $hoteles ['hotel_id'] ?></td>
                    <td><?php echo $hoteles ['nombre'] ?></td>
                    <td><?php echo $hoteles ['correoelectronico'] ?></td>
                    <td><?php echo $hoteles ['telefono'] ?></td>
                    <td><?php echo $hoteles ['direccion'] ?></td>
                    <td><?php echo $hoteles ['ciudad_id'] ?></td>
                    <td><?php echo $hoteles ['categoria_id'] ?></td>
                    <td><?php echo $hoteles ['usuario_id'] ?></td>
                    <td>

                        <a href="<?= base_url('buscar_hotel/').$hoteles['hotel_id']?>" class="btn btn-info"><i
                                class="bi bi-arrow-clockwise">Actualizar</i></a>
                        <a href="<?= base_url('eliminar_hotel/').$hoteles['hotel_id']?>" class="btn btn-danger"><i
                                class="bi bi-arrow-clockwise">Eliminar</i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>


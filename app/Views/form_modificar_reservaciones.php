<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Reservaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark text-white">
    <div class="container py-5">
        <h1 class="text-center mb-4">Modificar Reservaciones</h1>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 bg-secondary rounded-3 border border-light border-3 p-4">
                <form action="<?= base_url('modificar_reservaciones') ?>" method="post">
                    <div class="mb-3">
                        <label for="txtReservacion" class="form-label">Id del Cliente</label>
                        <input type="text" id="txtReservacion" name="txtReservacion" class="form-control"
                            placeholder="Ingrese el Id del Cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="txtFecha" class="form-label">Fecha</label>
                        <input type="date" id="txtFecha" name="txtFecha" class="form-control"
                            placeholder="Ingrese la Fecha" required>
                    </div>
                    <div class="mb-3">
                        <label for="txtClienteId" class="form-label">Id del cliente</label>
                        <input type="text" id="txtClienteId" name="txtClienteId" class="form-control"
                            placeholder="Ingrese el Id del Cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="txtHotelId" class="form-label">Id del Hotel</label>
                        <input type="number" id="txtHotelId" name="txtHotelId" class="form-control"
                            placeholder="Ingrese el Id del Hotel" required>
                    </div>
                    <div class="mb-3">
                        <label for="txtDescripcion" class="form-label">Descripcion</label>
                        <input type="text" id="txtDescripcion" name="txtDescripcion" class="form-control"
                            placeholder="Ingrese la Descripción" required>
                    </div>
                    <div class="mb-3">
                        <label for="txtUsuarioId" class="form-label">Id del Usuario</label>
                        <select class="form-select" id="txtUsuarioId" name="txtUsuarioId" required>
                            <option selected disabled>Seleccione el No de Casa</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="300">300</option>
                            <option value="301">301</option>
                            <option value="777">777</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success w-100" value="Guardar Cambios">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

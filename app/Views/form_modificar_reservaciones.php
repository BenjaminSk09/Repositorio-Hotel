<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>modificar reservaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
<div class="container text-center">
    <h1>Modificar Reservaciones</h1>
        <div class="row justify-content-center">
            <div class="col-4 border p-4">
            <form action="<?= base_url('modificar_reservaciones') ?>" method="post">
                    <div class="mb-3">
                        <label for="txtReservacion" class="form-label">Id del cliente</label>
                        <input type="text" id="txtReservacion" name="txtReservacion" class="form-control"
                            placeholder="ingrese la Reservacion" >
                    </div>
                    <div class="mb-3">
                        <label for="txtFecha" class="form-label">Apellido</label>
                        <input type="text" id="txtFecha" name="txtFecha" class="form-control"
                            placeholder="ingrese La Fecha">
                    </div>
                    <div class="mb-3">
                        <label for="txtClienteId" class="form-label">Nombre</label>
                        <input type="text" id="txtClienteId" name="txtClienteId" class="form-control"
                            placeholder="ingrese el Id del cliente">
                    </div>
                    <div class="mb-3">
                        <label for="txtHotelId" class="form-label">Correo Electronico</label>
                        <input type="text" id="txtHotelId" name="txtHotelId" class="form-control"
                            placeholder="ingrese el Id del hotel">

                    </div>
                    <div class="mb-3">
                        <label for="txtDescripcionm" class="form-label">Calle o Avenida</label>
                        <input type="text" id="txtDescripcion" name="txtDescripcion" class="form-control"
                            placeholder="ingrese la descripcion">
                    </div>
                    
                    <div class="mb-3">
                        <label for="txtUsuarioId" class="form-label">No de Casa</label>
                        <input type="text" id="txtUsuarioId" name="txtUsuarioId" class="form-control"
                            placeholder="ingrese el id del usuario">
                    </div>
                    
                    <div class="mb-3  ">
                        <input type="submit" class="btn btn-success form-control" value="Guardar Cambios">
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
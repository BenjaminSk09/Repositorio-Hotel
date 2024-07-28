<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Hoteles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark text-white">
    <div class="container my-4">
        <h1 class="text-center display-4 mb-4">Agregar Hoteles</h1>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="border border-light rounded-3 p-4 bg-dark">
                    <form action="<?= base_url('agregar_hoteles') ?>" method="post">
                        <div class="mb-3">
                            <label for="txtHotelId" class="form-label">Id del Hotel</label>
                            <input type="number" id="txtHotelId" name="txtHotelId" class="form-control border-3 border-light"
                                placeholder="Ingrese el Id del Hotel">
                        </div>
                        <div class="mb-3">
                            <label for="txtNombre" class="form-label">Nombre</label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control border-3 border-light"
                                placeholder="Ingrese su Nombre">
                        </div>
                        <div class="mb-3">
                            <label for="txtCorreo" class="form-label">Correo</label>
                            <input type="email" id="txtCorreo" name="txtCorreo" class="form-control border-3 border-light"
                                placeholder="Ingrese su Correo Electrónico">
                        </div>
                        <div class="mb-3">
                            <label for="txtTelefono" class="form-label">Teléfono</label>
                            <input type="number" id="txtTelefono" name="txtTelefono" class="form-control border-3 border-light"
                                placeholder="Ingrese su No. Teléfono">
                        </div>
                        <div class="mb-3">
                            <label for="txtDireccion" class="form-label">Dirección</label>
                            <input type="text" id="txtDireccion" name="txtDireccion" class="form-control border-3 border-light"
                                placeholder="Ingrese su Dirección">
                        </div>
                        <div class="mb-3">
                            <label for="txtCiudadId" class="form-label">Id de la Ciudad</label>
                            <select class="form-select border-3 border-light" id="txtCiudadId" name="txtCiudadId">
                                <option selected>Seleccione una ID para la Ciudad</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="11">11</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="txtCategoriaId" class="form-label">Id de la Categoría</label>
                            <select class="form-select border-3 border-light" id="txtCategoriaId" name="txtCategoriaId">
                                <option selected>Seleccione una ID para la Categoría</option>
                                <option value="102">102</option>
                                <option value="103">103</option>
                                <option value="104">104</option>
                                <option value="105">105</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="txtUsuarioId" class="form-label">Id del Usuario</label>
                            <select class="form-select border-3 border-light" id="txtUsuarioId" name="txtUsuarioId">
                                <option selected>Seleccione un ID para el Usuario</option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="300">300</option>
                                <option value="301">301</option>
                                <option value="777">777</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-success form-control" value="Guardar Cambios">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

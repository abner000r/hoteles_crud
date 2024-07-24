<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevos Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Nuevo Plan</h1>
        <div class="row">
            <div class="col col-4 col - d-flex justify-content-center align-items-center">
                <form action="agregar_reservacion" method="post">
                    <div class="mb-3">
                        <label for="txtReserva" class="form-label">Reservacion Id:</label>
                        <input type="text" id="txtReserva" name="txtReserva" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtFecha" class="form-label">Fecha:</label>
                        <input type="text" id="txtFecha" name="txtFecha" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCliente" class="form-label">Cliente:</label>
                        <input type="number" id="txtCliente" name="txtCliente" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtHotel" class="form-label">Hotel Id:</label>
                        <input type="text" id="txtHotel" name="txtHotel" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtDescripcion" class="form-label">Descripcion:</label>
                        <input type="text" id="txtDescripcion" name="txtDescripcion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtUsuario" class="form-label">Usuario Id:</label>
                        <input type="text" id="txtUsuario" name="txtUsuario" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnGuardarReserva" name="btnGuardarReserva" class="form-control" value="GuardarrReserva">
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php
session_start();

if (isset($_SESSION['usuario'])) {
    // El usuario está logeado
    $nombre_usuario = $_SESSION['usuario'];
    
    // Aquí puedes mostrar el contenido de la página principal
} else {
    // El usuario no está logeado, redirigir al inicio de sesión
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Pacientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<?php include('template/nabvar.php')?>
    <div class="container">
      
        <div class="row">
            <div class="col-md-12 mt-5">
                <h2 class="text-center">CRUD de Pacientes</h2>
                <hr>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPatientModal">Agregar Paciente</button>
                <br><br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Nombre Paciente</th>
                            <th>Tipo Doc</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2023-06-01</td>
                            <td>Juan Pérez</td>
                            <td>DNI</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#patientDetailsModal">Ver detalles</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2023-06-02</td>
                            <td>María López</td>
                            <td>DNI</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#patientDetailsModal">Ver detalles</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2023-06-03</td>
                            <td>Ana Rodríguez</td>
                            <td>Carnet</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#patientDetailsModal">Ver detalles</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Agregar Paciente -->
    <div class="modal fade" id="addPatientModal" tabindex="-1" role="dialog" aria-labelledby="addPatientModalLabel" aria-hidden="true">
        <!-- Resto del código... -->
    </div>

<!-- Modal Detalles del Paciente -->
<div class="modal fade" id="patientDetailsModal" tabindex="-1" role="dialog" aria-labelledby="patientDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="patientDetailsModalLabel">Detalles del Paciente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputFecha">Fecha</label>
                            <input type="text" class="form-control" id="inputFecha" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputNombre">Nombre Paciente</label>
                            <input type="text" class="form-control" id="inputNombre" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputTipoDoc">Tipo Doc</label>
                            <input type="text" class="form-control" id="inputTipoDoc" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputDocumento">Documento</label>
                            <input type="text" class="form-control" id="inputDocumento" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputDireccionOrigen">Dirección Origen</label>
                            <input type="text" class="form-control" id="inputDireccionOrigen" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputTelefono1">Teléfono 1</label>
                            <input type="text" class="form-control" id="inputTelefono1" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="text" class="form-control" id="inputEmail" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputCiudadOrigen">Ciudad Origen</label>
                            <input type="text" class="form-control" id="inputCiudadOrigen" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputDeptoOrigen">Dpto de Origen</label>
                            <input type="text" class="form-control" id="inputDeptoOrigen" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputCiudadDestino">Ciudad Destino</label>
                            <input type="text" class="form-control" id="inputCiudadDestino" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputDeptoDestino">Dpto de Destino</label>
                            <input type="text" class="form-control" id="inputDeptoDestino" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputClinicaHospital">Clínica - Hospital</label>
                            <input type="text" class="form-control" id="inputClinicaHospital" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputAutorizacion">Autorización</label>
                            <input type="text" class="form-control" id="inputAutorizacion" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputTotalServicios">Total Servicios Autorizados</label>
                            <input type="text" class="form-control" id="inputTotalServicios" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputFechaAutorizacion">Fecha de Autorización</label>
                            <input type="text" class="form-control" id="inputFechaAutorizacion" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputFechaVencimiento">Fecha de Vencimiento</label>
                            <input type="text" class="form-control" id="inputFechaVencimiento" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputHoraRecogida">Hora Recogida</label>
                            <input type="text" class="form-control" id="inputHoraRecogida" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputHoraRetorno">Hora Retorno</label>
                            <input type="text" class="form-control" id="inputHoraRetorno" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputConductor">Conductor</label>
                            <input type="text" class="form-control" id="inputConductor" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputTelefonoConductor">Teléfono Conductor</label>
                            <input type="text" class="form-control" id="inputTelefonoConductor" readonly>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="inputObservacion">Observación</label>
                            <textarea class="form-control" id="inputObservacion" rows="3" readonly></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputEstado">Estado</label>
                            <input type="text" class="form-control" id="inputEstado" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputUsuario">Usuario del Sistema</label>
                            <input type="text" class="form-control" id="inputUsuario" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

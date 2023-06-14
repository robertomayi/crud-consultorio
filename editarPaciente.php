<?php 

    include("conexion.php");
    $dni = $_GET["dni"];

    //este query trae el detalle del paciente
    $sql = "SELECT * FROM tabla_pacientes WHERE DOCUMENTO = '{$dni}' ";
    $query = $GLOBALS['conex']->prepare($sql);
    $query->execute();
    $row = $query->fetchAll(PDO::FETCH_ASSOC);
    var_dump($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Pacientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
        <div class="container">
            <h1>Editar Paciente</h1>
            <hr>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputFecha">Fecha</label>
                            <input type="text" class="form-control" id="inputFecha" value="<?php echo $row[0]["FECHA"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputNombre">Nombre Paciente</label>
                            <input type="text" class="form-control" id="inputNombre" value="<?php echo $row[0]["NOMBRE_PACIENTE"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputTipoDoc">Tipo Doc</label>
                            <input type="text" class="form-control" id="inputTipoDoc" value="<?php echo $row[0]["TIPO_DOC"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputDocumento">Documento</label>
                            <input type="text" class="form-control" id="inputDocumento" value="<?php echo $row[0]["DOCUMENTO"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputDireccionOrigen">Dirección Origen</label>
                            <input type="text" class="form-control" id="inputDireccionOrigen" value="<?php echo $row[0]["DIRECCION_ORIGEN"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputTelefono1">Teléfono 1</label>
                            <input type="text" class="form-control" id="inputTelefono1" value="<?php echo $row[0]["TELEFONO1"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="text" class="form-control" id="inputEmail" value="<?php echo $row[0]["EMAIL"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputCiudadOrigen">Ciudad Origen</label>
                            <input type="text" class="form-control" id="inputCiudadOrigen" value="<?php echo $row[0]["CIUDAD_ORIGEN"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputDeptoOrigen">Dpto de Origen</label>
                            <input type="text" class="form-control" id="inputDeptoOrigen" value="<?php echo $row[0]["FECHA"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputCiudadDestino">Ciudad Destino</label>
                            <input type="text" class="form-control" id="inputCiudadDestino" value="<?php echo $row[0]["FECHA"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputDeptoDestino">Dpto de Destino</label>
                            <input type="text" class="form-control" id="inputDeptoDestino" value="<?php echo $row[0]["FECHA"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputClinicaHospital">Clínica - Hospital</label>
                            <input type="text" class="form-control" id="inputClinicaHospital" value="<?php echo $row[0]["FECHA"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputAutorizacion">Autorización</label>
                            <input type="text" class="form-control" id="inputAutorizacion" value="<?php echo $row[0]["FECHA"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputTotalServicios">Total Servicios Autorizados</label>
                            <input type="text" class="form-control" id="inputTotalServicios" value="<?php echo $row[0]["FECHA"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputFechaAutorizacion">Fecha de Autorización</label>
                            <input type="text" class="form-control" id="inputFechaAutorizacion" value="<?php echo $row[0]["FECHA"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputFechaVencimiento">Fecha de Vencimiento</label>
                            <input type="text" class="form-control" id="inputFechaVencimiento" value="<?php echo $row[0]["FECHA"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputHoraRecogida">Hora Recogida</label>
                            <input type="text" class="form-control" id="inputHoraRecogida" value="<?php echo $row[0]["FECHA"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputHoraRetorno">Hora Retorno</label>
                            <input type="text" class="form-control" id="inputHoraRetorno" value="<?php echo $row[0]["FECHA"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputConductor">Conductor</label>
                            <input type="text" class="form-control" id="inputConductor" value="<?php echo $row[0]["FECHA"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputTelefonoConductor">Teléfono Conductor</label>
                            <input type="text" class="form-control" id="inputTelefonoConductor" value="<?php echo $row[0]["FECHA"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="inputObservacion">Observación</label>
                            <textarea class="form-control" id="inputObservacion" rows="3"  readonly><?php echo $row[0]["FECHA"] ?></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputEstado">Estado</label>
                            <input type="text" class="form-control" id="inputEstado" value="<?php echo $row[0]["FECHA"] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputUsuario">Usuario del Sistema</label>
                            <input type="text" class="form-control" id="inputUsuario" value="<?php echo $row[0]["FECHA"] ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
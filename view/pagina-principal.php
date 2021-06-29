<?php
    require_once '../app/config.php'
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquí va nombre</title>
    <?php
        require_once '../app/dependencias.php';
    ?>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form class="shadow p-4 rounded-bottom fondo_formularios">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h5>GESTOR DE ARCHIVOS</h5>
                        </div>
                    </div>
                    <hr class="divisor_horizontal">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="container">
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control form-control-sm rounded-pill" id="nombres" name="nombres" placeholder="selecciona archivo">
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        
                                            <input type="text" class="form-control form-control-sm rounded-pill" id="apellido_paterno" name="apellido_paterno" placeholder="Mostrar archivo">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        
                                            <input type="text" class="form-control form-control-sm rounded-pill" id="apellido_materno" name="apellido_materno" placeholder="Mostrar archivo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <span class="btn btn-sm rounded-pill botones" id="boton_registrar"><i class="fas fa-folder-open"></i></i>EXAMINAR</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <span class="btn btn-sm rounded-pill botones" id="boton_registrar"><i class="fas fa-sign-in-alt mr-2"></i>SUBIR</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <span class="btn btn-sm rounded-pill botones" id="boton_registrar"><i class="fas fa-times"></i></i>CANCELAR</span>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row mt-5">
                                <div class="col-md-4">
                                        <div class="form-group">
                                        <span class="btn btn-sm rounded-pill botones" id="boton_registrar"><i class="fas fa-folder-open mr-2"></i></i>CATEGORIA </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <span class="btn btn-sm rounded-pill botones" id="boton_registrar"><i class="fas fa-sign-in-alt mr-2"></i>SUBIR</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <span class="btn btn-sm rounded-pill botones" id="boton_registrar"><i class="fas fa-times"></i>ELIMINAR</span>
                                        </div>
                                </div>
                                <div class="row">
                                <div class="col-md-4">
                                        <div class="form-group">
                                        <span class="btn btn-sm rounded-pill botones" id="boton_registrar"><i class="fas fa-folder-open mr-2"></i>CATEGORIA</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <span class="btn btn-sm rounded-pill botones" id="boton_registrar"><i class="fas fa-sign-in-alt mr-2"></i>SUBIR </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <span class="btn btn-sm rounded-pill botones" id="boton_registrar"><i class="fas fa-times"></i>ELIMNAR</span>
                                        </div>
                                        
                                
                                </div>
                                
                            </div>
                        </div>
                    </div>
                
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
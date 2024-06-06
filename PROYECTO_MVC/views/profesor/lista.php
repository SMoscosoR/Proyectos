<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>.:Empleados:.</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <img src="icons/bootstrap-logo.svg" alt="" width="30" height="24">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Profesores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="empleados.php">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dueño.php">Dueño</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="areas.php">Áreas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="proyecots.php">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clientes.php">Clientes</a>
                </li>             
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
<style>
        img {
            width: 16px;
            height: auto;
        }
    </style>
<body>
    <h1>EMPRESA</h1>
    <div>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#insertarRegistroModal">Agregado</button>
    </div><br>
    <table border="1" style="width: 100%;">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Lastname</td>
            <td>Edad</td>
            <td>Salario</td>
            <td>Áreas</td>
            <td colspan="2">Acción</td>
        </tr>
    <?php
        foreach($result as $row){
            echo "
                <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[lastname]</td>
                    <td>$row[edad]</td>
                    <td>$row[salario]</td>
                    <td>$row[areas]</td>
                    <td>
                    <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#editarRegistroModal'><img src='icons/pencil-solid.svg'></button>
                    </td>
                    <td>
                    <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#eliminarRegistroModal'><img src='icons/trash-solid.svg'></button>
                    </td>
                </tr>
            ";
        }
    ?>
    </table>
    <!-- Modal Agregar -->
    <div class="modal fade" id="insertarRegistroModal" tabindex="-1" role="dialog" aria-labelledby="agregarDatosModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agregarDatosModalLabel">Insertar nuevos registros</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <!--<span aria-hidden="true">&times;</span>-->
                    </button>
                </div>
                <form action="index.php?page=insertar" method="POST" name="registroForm" id="registroForm" class="text-left">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" id="id" name="id" class="form-control" aria-describedby="idHelp">
                            <small id="idHelp" class="form-text text-muted">Ingrese el id del empleado.</small>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" aria-describedby="nombreHelp">
                            <small id="nombreHelp" class="form-text text-muted">Ingrese el nombre del empleado.</small>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" id="apellido" name="apellido" class="form-control" aria-describedby="apellidoHelp">
                            <small id="apellidoHelp" class="form-text text-muted">Ingrese el apellido del empleado.</small>
                        </div>
                        <div class="form-group">
                            <label for="edad">Job</label>
                            <input type="text" id="edad" name="edad" class="form-control" aria-describedby="edadHelp">
                            <small id="edadHelp" class="form-text text-muted">Ingrese la edad del empleado.</small>
                        </div>
                        <div class="form-group">
                            <label for="salario">Salario</label>
                            <input type="salario" id="salario" name="salario" class="form-control" aria-describedby="salarioHelp">
                            <small id="salarioHelp" class="form-text text-muted">Ingrese el salario del empleado.</small>
                        </div>
                        <div class="form-group">
                            <label for="area">Área</label>
                            <input type="area" id="area" name="area" class="form-control" aria-describedby="areaHelp">
                            <small id="areaHelp" class="form-text text-muted">Ingrese el área del empleado.</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" id="btnInsertar" name="btnInsertar" class="btn btn-primary">Insertar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Editar-->
    <div class="modal fade" id="editarRegistroModal" tabindex="-1" role="dialog" aria-labelledby="editarDatosModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarDatosModalLabel">Editar registros</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <!--<span aria-hidden="true">&times;</span>-->
                    </button>
                </div>
                <form action="index.php?page=editar" method="POST" name="registroForm" id="registroForm" class="text-left">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" id="id" name="id" class="form-control" aria-describedby="idHelp">
                            <small id="idHelp" class="form-text text-muted">Ingrese el id del empleado.</small>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" aria-describedby="nombreHelp">
                            <small id="nombreHelp" class="form-text text-muted">Ingrese el nombre del empleado.</small>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" id="apellido" name="apellido" class="form-control" aria-describedby="apellidoHelp">
                            <small id="apellidoHelp" class="form-text text-muted">Ingrese el apellido del empleado.</small>
                        </div>
                        <div class="form-group">
                            <label for="edad">Job</label>
                            <input type="text" id="edad" name="edad" class="form-control" aria-describedby="edadHelp">
                            <small id="edadHelp" class="form-text text-muted">Ingrese la edad del empleado.</small>
                        </div>
                        <div class="form-group">
                            <label for="salario">Salario</label>
                            <input type="salario" id="salario" name="salario" class="form-control" aria-describedby="salarioHelp">
                            <small id="salarioHelp" class="form-text text-muted">Ingrese el salario del empleado.</small>
                        </div>
                        <div class="form-group">
                            <label for="area">Área</label>
                            <input type="area" id="area" name="area" class="form-control" aria-describedby="areaHelp">
                            <small id="areaHelp" class="form-text text-muted">Ingrese el área del empleado.</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" id="btnEditar" name="btnEditar" class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#btnInsertar').click(function(){
                alert("Click");
                datos=$('#registroForm').serialize();

                console.log(datos);
        });
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#btnEditar').click(function(){
                alert("Click");
                datos=$('#registroForm').serialize();

                console.log(datos);
        });
    });
    </script>
    <?php
        include 'db/db.php';

        // Verificar si se está enviando una solicitud POST para eliminar
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
            $id = $_POST['delete_id'];
            $sql = "DELETE FROM Empleados WHERE id = $id";
            if (mysqli_query($db, $sql)) {
                echo "<script>alert('Curso eliminado exitosamente.'); window.location.href='';</script>";
            } else {
                $error = mysqli_error($db);
                echo "<script>alert('Error al eliminar el Curso: $error');</script>";
            }
        }

        // Obtener todos los profesores
        $sql = "SELECT * FROM Empleados";
        $result = mysqli_query($db, $sql);
    ?>
</body>
</html>

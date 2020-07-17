<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Adm. de Usuarios</title>
</head>

<body>

    <div class="container py-5">
        <h1>Panel de administración de Usuarios</h1>
        <a href="../../panel.php" class="btn btn-outline-secondary m-3">Volver al panel</a>
        <table class="table table-stripped table-hover table-border ">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre de Usu</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Imagen perfil</th>
                    <th colspan="2" class="">
                        <a href="formAgregarProducto.php" class=" btn btn-primary">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Jesus</td>
                    <td>jesus@gmail.com</td>
                    <td>paramore</td>
                    <td>
                        <img src="productos/noDisponible.jpg" class="img-thumbnail">
                    </td>
                    <td>
                        <a href="formModificarProducto.php" class="t-1 btn btn-info">
                            modificar
                        </a>

                        <a href="formEliminarProducto.php" class="mt-1 btn btn-danger">
                            eliminar
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Jesus</td>
                    <td>jesus@gmail.com</td>
                    <td>paramore</td>
                    <td>
                        <img src="productos/noDisponible.jpg" class="img-thumbnail">
                    </td>
                    <td>
                        <a href="formModificarProducto.php" class="t-1 btn btn-info">
                            modificar
                        </a>

                        <a href="formEliminarProducto.php" class="mt-1 btn btn-danger">
                            eliminar
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
        <a href="../../panel.php" class="btn btn-outline-secondary m-3">Volver al panel</a>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
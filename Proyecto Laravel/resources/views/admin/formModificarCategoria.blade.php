<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Adm. de Marcas</title>
</head>

<body>

<div class="alert bg-light py-3">

    <form action="/modificarCategoria/{{$categorias->idCategoria}}" method="post">
        @csrf
        Marca:
        <br>
        <input type="text" class="form-control" name="catNombre" id="catNombre" class="form-control" value="{{$categorias->catNombre}}">
        <br>
        <ul style="color:red">
            @foreach($errors->all() as $error)

                <li>{{$error}}</li>

            @endforeach
        </ul>
        <button type="submit" class="btn btn-dark px-4">
            Modificar Categoria
        </button>
        <a href="/admin/admCategorias" class="btn btn-outline-secondary ml-3">
            volver al panel de categorias
        </a>

    </form>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>

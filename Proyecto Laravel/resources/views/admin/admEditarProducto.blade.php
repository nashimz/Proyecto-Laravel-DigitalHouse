
@extends('layout/plantilla')

@section('title', 'Modificacion de un producto')


@section('main')

    @section('h1', 'Modificacion de un producto')

    <div class="card bg-light col-md-7 mt-5 p-3 mx-auto">
    <form action="/admin/admEditarProducto/{{$producto->idProducto}}" method="post" enctype="multipart/form-data">
        @csrf

        <ul style="color:red">
            @foreach($errors->all() as $error)

                <li>{{$error}}</li>

            @endforeach
        </ul>
        <div class="form-group">
            <label for="prdNombre">Nombre del Producto: </label>
            <input type="text" class="form-control" name="prdNombre"  value="{{ $producto->prdNombre }}" id="prdNombre" placeholder="nombre del Producto" >
        </div>
        <div class="form-group">
        <label for="prdPrecio">Precio: </label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <div class="input-group-text">$</div>
            </div>
            <input type="number" name="prdPrecio" value="{{ $producto->prdPrecio }}" class="form-control" id="prdPrecio" placeholder="0" min="0" step="0" >
        </div>
        </div>

        <div class="form-group">
        <label>Marca:</label>
        <select name="idMarca" class="form-control" >
            <option value="{{ $producto->getMarca->idMarca }}">{{ $producto->getMarca->mkNombre }}  </option>
    @foreach ( $marcas as $marca )
            <option value="{{ $producto->idMarca }}">{{ $marca->mkNombre }}</option>
    @endforeach
        </select>
        </div>

        <div class="form-group">
        <label>Categoría:</label>
        <select name="idCategoria" class="form-control" >
            <option value="{{ $producto->getCategoria->idCategoria }}">{{ $producto->getCategoria->catNombre }}</option>
@foreach($categorias as $categoria)
            <option value="{{$categoria->idCategoria}}">{{$categoria->catNombre}}</option>
@endforeach

        </select>
        </div>

        <div class="form-group">
        <label for="prdPresentacion">Presentación:</label>
        <textarea name="prdPresentacion" class="form-control" id="prdPresentacion">{{ $producto->prdPresentacion }}</textarea>
        </div>

        <div class="form-group">
        <label for="prdStock">Stock:</label>
        <input type="number" name="prdStock" value="{{ $producto->prdStock }}"class="form-control" id="prdStock"  min="0" step="1">
        </div>

        Imagen: <br>

        <img src="/images/productos/{{$producto->prdImagen}}" style="width:100px">
        <br>
        <br>
        <input type="file" name="prdImagen"  class="form-control">
        <input type="hidden" name="original" value="{{$producto->prdImagen}}">
        <br>
        <button type="submit" class="btn btn-dark px-4">
            <i class="far fa-plus-square fa-lg mr-2"></i>
            Modificar Producto
        </button>
        <a href="/admin/admProductos" class="btn btn-outline-secondary ml-3">
            volver al panel de productos
        </a>


    </form>
    </div>

@endsection


@extends('layout/plantilla')

    @section('title', 'Alta de un nuevo Producto')


    @section('main')

        @section('h1', 'Alta de un nuevo producto')

        <div class="card bg-light col-md-7 mt-5 p-3 mx-auto">
        <form action="/admin/formAgregarProducto" method="post" enctype="multipart/form-data">
            @csrf
            <ul style="color:red">
                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>

                @endforeach
            </ul>
            <div class="form-group">
                <label for="prdNombre">Nombre del Producto:</label>
                <input type="text" class="form-control" name="prdNombre"  value="{{ old('prdNombre') }}" id="prdNombre" placeholder="nombre del Producto" >
            </div>
            <div class="form-group">
            <label for="prdPrecio">Precio:</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" name="prdPrecio" value="{{ old('prdPrecio') }}" class="form-control" id="prdPrecio" placeholder="0" min="0" step="0" >
            </div>
            </div>

            <div class="form-group">
            <label>Marca:</label>
            <select name="idMarca" class="form-control" >
                <option value="">Seleccione una marca</option>
        @foreach ( $marcas as $marca )
                <option value="{{ $marca->idMarca }}">{{ $marca->mkNombre }}</option>
        @endforeach
            </select>
            </div>

            <div class="form-group">
            <label>Categoría:</label>
            <select name="idCategoria" class="form-control" >
                <option value="">Seleccione una Categoría</option>
@foreach($categorias as $categoria)
                <option value="{{$categoria->idCategoria}}">{{$categoria->catNombre}}</option>
@endforeach

            </select>
            </div>

            <div class="form-group">
            <label for="prdPresentacion">Presentación:</label>
            <textarea name="prdPresentacion" class="form-control" id="prdPresentacion">{{ old('prdPresentacion') }}</textarea>
            </div>

            <div class="form-group">
            <label for="prdStock">Stock:</label>
            <input type="number" name="prdStock" value="{{ old('prdStock') }}"class="form-control" id="prdStock"  min="0" step="1">
            </div>

            Imagen: <br>
            <input type="file" name="prdImagen" class="form-control">
            <br>
            <button type="submit" class="btn btn-dark px-4">
                <i class="far fa-plus-square fa-lg mr-2"></i>
                Agregar Producto
            </button>
            <a href="/admin/admProductos" class="btn btn-outline-secondary ml-3">
                volver al panel de productos
            </a>


        </form>
        </div>

    @endsection


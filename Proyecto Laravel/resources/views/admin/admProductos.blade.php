@extends('layout/plantilla')

    @section('title', 'Panel de administración de Productos')


    @section('main')

        @section('h1', 'Panel de administración de Productos')

{{--  muestreo si NO hay contenidos --}}
    @if ( count( $productos  ) == 0 )
        <div class="alert alert-warning">No se han encontrado registros</div>
    @else
{{--  muestreo si hay contenidos --}}
        {{-- mensajes de ok --}}
        @if( session()->has('mensaje') )
            <div class="alert alert-success">
                {{ session()->get('mensaje') }}
            </div>
        @endif

        <table class="table table-bordered table-stripped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre producto</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Categoría</th>
                    <th>Stock</th>
                    <th>Presentacion</th>
                    <th>Imagen</th>
                    <th colspan="2" class="text-center">
                        <a href="/admin/formAgregarProducto" class="btn btn-outline-light px-4">
                            <i class="far fa-plus-square fa-lg mr-2"></i>
                            agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach( $productos  as  $producto )
                <tr>
                    <td>{{ $producto->prdNombre }}</td>
                    <td>{{ $producto->prdPrecio }}</td>
                    <td>{{ $producto->getMarca->mkNombre }} </td>
                    <td>{{ $producto->getCategoria->catNombre }}
                    <td>{{ $producto->prdStock }}</td>
                    <td>{{ $producto->prdPresentacion }}</td>

                    <td>
                        <img src="/images/productos/{{ $producto->prdImagen }}" style="width:100px;height:100px;">
                    </td>
                    <td>
                        <a href="/admin/admEditarProducto/{{ $producto->idProducto }}" class="btn btn-outline-secondary px-4">
                            <i class="far fa-edit fa-lg mr-2"></i>
                            Modificar
                        </a>
                    </td>
                    <td>
                        <!--<a href="/formEliminarProducto/{{ $producto->idProducto }}" class="btn btn-outline-secondary px-4">
                            <i class="far fa-minus-square fa-lg mr-2"></i>
                            Eliminar
                        </a>-->

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-secondary px-4" data-toggle="modal" data-target="#modal{{ $producto->idProducto }}">
                            <i class="far fa-minus-square fa-lg mr-2"></i>
                            Eliminar
                        </button>

                        <!-- Modal -->
                        {{-- <div class="modal fade" id="modal{{ $producto->idProducto }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que quiere eliminar el producto?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" >

                                        {{ $producto->prdNombre }}
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-danger" href="/formEliminarProducto/{{ $producto->idProducto }}">
                                            <a style="color:white" href="/formEliminarProducto/{{ $producto->idProducto }}">
                                                Eliminar
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $productos ->links() }}

    @endif

    @endsection


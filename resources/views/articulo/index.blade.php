@extends('layouts.plantillabase');

@section('contenido')

<a href="articulos/create" class="btn btn-success">Nuevo</a>

<table class="table table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precios</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
            <tr>
                <td>{{$articulo->id}}</td>
                <td>{{$articulo->codigo}}</td>
                <td>{{$articulo->descripcion}}</td>
                <td>{{$articulo->cantidad}}</td>
                <td>{{$articulo->precio}}</td>
                <td>                     
                    <form action="{{route('articulos.destroy',$articulo->id)}}" method="POST">
                        <a class="btn btn-warning" href="/articulos/{{$articulo->id}}/edit">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
    
@endsection
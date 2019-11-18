@extends('layout')

@section('content')

<div class="col-sm-12 ">
    <h1 class="pb-2 mt-4 mb-2 border-bottom text-center">
        CRUD Laravel
    </h1>
</div>

<div class="col-sm-8">

    <h2>
        Lista de Productos
        <a class="btn btn-primary float-right text-white">Nuevo</a>
    </h2>
    <table class="table table-hover table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th colspan="3"> </th>
        </thead>
        <tbody>
            <tr>
                <td>ijsdijd</td>
                <td>ijsduf8hehumojjndconskvopodvpsd</td>
                <td><a class="btn btn-link" href="">ver</a> </td>
                <td><a class="btn btn-link" href="">editar</a> </td>
                <td><a class="btn btn-link" href="">borrar</a> </td>
            </tr>
        </tbody>
    </table>

</div>



@endsection
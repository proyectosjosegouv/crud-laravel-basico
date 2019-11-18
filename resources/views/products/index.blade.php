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
        <a class="btn btn-primary float-right text-white" href={{ route('products.create') }}>Nuevo</a>
    </h2>
    <table class="table table-hover table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th colspan="3"> </th>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td><strong>{{$product->name}}</strong> - {{$product->short}}</td>
                <td><a class="btn btn-link" href={{ route('products.show',$product->id) }}>ver</a> </td>
                <td><a class="btn btn-link" href={{ route('products.edit',$product->id) }}>editar</a> </td>
                <td>
                    <form action={{ route('products.destroy', $product->id)}} method="POST">
                        {{ @csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-link">borrar</button>
                    </form> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {!! $products->render() !!}

</div>



@endsection
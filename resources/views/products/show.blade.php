@extends('layout')

@section('content')

<div class="col-sm-12 ">
    <h1 class="pb-2 mt-4 mb-2 border-bottom text-center">
        CRUD Laravel
    </h1>
</div>

<div class="col-sm-8">

    <h2>
        {{{ $product->name}}}
        <a class="btn btn-outline-secondary float-right" href={{ route('products.edit', $product->id) }}>Editar</a>
    </h2>
    <p>
        {{$product->short}}
    </p>
    <p>
        {!! $product->body !!}
    </p>
    <a class="btn btn-primary text-white" href={{ url()->previous() }}>Regresar</a>
</div>



@endsection
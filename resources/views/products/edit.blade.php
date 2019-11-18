@extends('layout')

@section('content')

<div class="col-sm-12 ">
    <h1 class="pb-2 mt-4 mb-2 border-bottom text-center">
        CRUD Laravel
    </h1>
</div>

<div class="col-sm-8">

    <h2>
        Nuevo Producto
        <a class="btn btn-primary float-right text-white" href={{ url()->previous() }}>Regresar</a>
    </h2>

    <form action={{ route('products.update', $product->id) }} method="POST">
        {{ @csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="name">Nombre del nuevo producto</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">  <!-- IMPORTANTE : name tanto para validaciones como para leer los datos -->
        </div>

        <div class="form-group">
            <label for="short">Breve descripción del producto</label>
            <input type="text" class="form-control" id="short" name="short" value="{{ $product->short }}">
        </div>

        <div class="form-group">
            <label for="body">Breve descripción del producto</label>
            <textarea type="text" class="form-control" rows="6" id="body" name="body" >{!! $product->body !!}</textarea>
        </div>

        <!-- OBLIGATORIO: contenido de value con COMILLAS:  value="{{ $product->short }}" -->

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    
    
</div>



@endsection
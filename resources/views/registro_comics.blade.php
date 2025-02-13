@extends('layouts.plantilla')

@section('titulo_documento', 'Registro de comics')

@section('contenido')

@if(session()->has('agregar'))
{!! "<script> Swal.fire({
    icon: 'success',
    title: 'Comic " . session()->get("agregar") . " se a guardado exitosamente',
    showConfirmButton: false,
    timer: 2000
  }) </script>"!!}
@endif

<form action="{{route('addCom')}}" method="POST" class="form-articulos comics">
    @csrf
    <div class="cont-form">
        <div class="titulo-arti">
            <h2>Nuevo comic</h2>
        </div>
        <div>
            <div class="form-floating mb-3 inputs-articulos">
                <input name="fecha-comic" value="{{old('fecha-comic')}}" type="date" class="form-control" id="floatingInput" placeholder="10/12/2022">
                <label for="floatingInput">Fecha</label>
            </div>
            <p class="text-danger fst-italic p">{{$errors -> first('fecha-comic')}}</p>

            <div class="form-floating mb-3 inputs-articulos">
                <input name="id-comic" value="{{old('id-comic')}}" type="text" class="form-control" id="floatingInput" placeholder="1254685">
                <label for="floatingInput">id de comic</label>
            </div>
            <p class="text-danger fst-italic p">{{$errors -> first('id-comic')}}</p>

            <div class="form-floating mb-3 inputs-articulos">
                <input name="nombre-comic" value="{{old('nombre-comic')}}" type="text" class="form-control" id="floatingInput" placeholder="Spider-Man">
                <label for="floatingInput">Nombre</label>
            </div>
            <p class="text-danger fst-italic p">{{$errors -> first('nombre-comic')}}</p>

            <div class="form-floating mb-3 inputs-articulos">
                <input name="compañia-comic" value="{{old('compañia-comic')}}" type="text" class="form-control" id="floatingInput" placeholder="Marvel">
                <label for="floatingInput">Compañia</label>
            </div>
            <p class="text-danger fst-italic p">{{$errors -> first('compañia-comic')}}</p>

            <div class="form-floating mb-3 inputs-articulos">
                <input name="cantidad-comic" value="{{old('cantidad-comic')}}" type="text" class="form-control" id="floatingInput" placeholder="Marvel">
                <label for="floatingInput">Cantidad</label>
            </div>
            <p class="text-danger fst-italic p">{{$errors -> first('cantidad-comic')}}</p>

            <div class="form-floating mb-3 inputs-articulos">
                <input name="precio-compra-comic" value="{{old('precio-compra-comic')}}" type="text" class="form-control" id="floatingInput" placeholder="12">
                <label for="floatingInput">Precio de compra</label>
            </div>
            <p class="text-danger fst-italic p">{{$errors -> first('precio-compra-comic')}}</p>

            <fieldset disabled>
                <div class="form-floating mb-3 inputs-articulos">
                    <input name="precio-venta-arti" value="{{old('precio-venta-comic')}}" type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                    <label for="floatingInput">Precio de venta</label>
                </div>
            </fieldset>
            <p class="text-danger fst-italic p">{{$errors -> first('precio-venta-comic')}}</p>

        </div>
        <div class="cont-boton-arti">
            <button type="submit" class="btn btn-outline-success boton-arti">Agregar</button>
        </div>
    </div>
    {{-- imagen --}}
    <img class="imgComics" src="/img/spiderman.jpg" alt="Imagen de articulos">
</form>


@stop

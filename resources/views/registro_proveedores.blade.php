@extends('layouts.plantilla')

@section('titulo_documento', 'Registro de proveedores')

@section('contenido')

@if(session()->has('agregar'))
{!! "<script> Swal.fire({
    icon: 'success',
    title: 'Proveedor " . session()->get("agregar") . " se a guardado exitosamente',
    showConfirmButton: false,
    timer: 2000
  }) </script>"!!}
@endif

<form action="{{route('addProv')}}" method="POST" class="form-proveedores">
    @csrf
    <div class="cont-form">
        <div class="titulo-pro">
            <h2>Nuevo proveedor</h2>
        </div>
        <div class="inputs-cont">
            <div class="form-floating mb-3 inputs-articulos">
                <input name="nom-empresa" value="{{old('nom-empresa')}}" type="text" class="form-control" id="floatingInput" placeholder="10/12/2022">
                <label for="floatingInput">Nombre de la empresa</label>
            </div>
            <p class="text-danger fst-italic p">{{$errors -> first('nom-empresa')}}</p>

            <div class="form-floating mb-3 inputs-articulos">
                <input name="direccion" value="{{old('direccion')}}" type="text" class="form-control" id="floatingInput" placeholder="1254685">
                <label for="floatingInput">Direccion</label>
            </div>
            <p class="text-danger fst-italic p">{{$errors -> first('direccion')}}</p>

            <div class="form-floating mb-3 inputs-articulos">
                <input name="pais" value="{{old('pais')}}" type="text" class="form-control" id="floatingInput" placeholder="Spider-Man">
                <label for="floatingInput">Pais</label>
            </div>
            <p class="text-danger fst-italic p">{{$errors -> first('pais')}}</p>

            <div class="form-floating mb-3 inputs-articulos">
                <input name="contacto" value="{{old('contacto')}}" type="text" class="form-control" id="floatingInput" placeholder="Marvel">
                <label for="floatingInput">Contacto</label>
            </div>
            <p class="text-danger fst-italic p">{{$errors -> first('contacto')}}</p>

            <div class="form-floating mb-3 inputs-articulos">
                <input name="no-fijo" value="{{old('no-fijo')}}" type="text" class="form-control" id="floatingInput" placeholder="12">
                <label for="floatingInput">Numero fijo</label>
            </div>
            <p class="text-danger fst-italic p">{{$errors -> first('no-fijo')}}</p>

            <div class="form-floating mb-3 inputs-articulos">
                <input name="no-celular" value="{{old('no-celular')}}" type="text" class="form-control" id="floatingInput" placeholder="12">
                <label for="floatingInput">Numero celular</label>
            </div>
            <p class="text-danger fst-italic p">{{$errors -> first('no-celular')}}</p>

            <div class="form-floating mb-3 inputs-articulos">
                <input name="correo" value="{{old('correo')}}" type="text" class="form-control" id="floatingInput" placeholder="12">
                <label for="floatingInput">Correo</label>
            </div>
            <p class="text-danger fst-italic p">{{$errors -> first('correo')}}</p>

        </div>
        <div class="cont-boton-arti btn-comic">
            <button type="submit" class="btn btn-outline-success boton-arti">Agregar</button>
        </div>
    </div>
    {{-- imagen --}}
</form>


@stop

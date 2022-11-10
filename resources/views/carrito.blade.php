@extends('layouts.plantilla')

@section('titulo_documento', 'Carrito')

@section('contenido')

<div class="cont-carrito">
    <form class="form-carrito">
        <h1 class="h1"><strong>Carrito de ventas</strong></h1>
        <div class="cont-info">
            <label for="exampleDataList" class="form-label">Busca el id del articulo</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
            <datalist id="datalistOptions">
            <option value="Comic #1 Amazing Fantasy">
            <option value="Comic #116 Superman Infinitte Crisis">
            <option value="Comic #20 The Amazing Spiderman">
            <option value="Comic #5 The Avengers">
            <option value="Comic #20 Secret Avengers">
            </datalist>
        </div>
        <div class="rectangulo">
        </div>
        <div class="cont-labels">
            <div>
                <label for="">Total: </label>
                <label for="">$0</label>
            </div>
            <div><button type="button" class="btn btn-success btn-carrito">Comprar</button></div>
        </div>
    </form>
</div>

@stop

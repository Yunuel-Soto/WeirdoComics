@extends('layouts.plantilla')

@section('titulo_documento', 'Tienda')

@section('contenido')

<div class="cont-tienda">
    <div class="row row-cols-1 row-cols-md-3 g-4 cont-cards">

        <div class="col">
          <div class="card" id="card-color">
                <img src="/img/spiderman.jpg" class="card-img-top img-card" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Comic #1 spiderman</h5>
                    <p class="card-text">Hay en existencia: <label for="">5</label> piezas </p>
                    <div class="tienda-selec">
                        <button type="button" class="btn btn-primary">Comprar</button>
                        <div>
                            <a href="">Eliminar</a>
                            <a href="">Actualizar</a>
                        </div>
                    </div>
                </div>
          </div>
        </div>

        <div class="col">
          <div class="card" id="card-color">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>

      </div>
</div>

@stop

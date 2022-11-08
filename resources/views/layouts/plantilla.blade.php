<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <title>@yield('titulo_documento')</title>
</head>
<body>
    <header class="encabezado">
        <nav class="menu">
            <ol class="menu-ol">
                <li><a href="{{ route('ini') }}" class="{{request()->routeIs('ini')?' text-warning fs-4':''}}">Weirdo Comics</a></li>
            </ol>
            <ul class="menu-ul">
                <li>
                    <a class="{{request()->routeIs('regc')?' text-warning fs-4':''}}" href="#" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Comics
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('regc')}}">Registro de Comics</a></li>
                      <li><a class="dropdown-item" href="#">Comics de la tienda</a></li>
                    </ul>
                </li>
                <li>
                    <a class="{{request()->routeIs('rega')?' text-warning fs-4':''}}" href="#" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Articulos
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('rega')}}">Registro de Articulos</a></li>
                      <li><a class="dropdown-item" href="#">Articulos de la tienda</a></li>
                    </ul>
                </li>
                <li><a href="">En Tienda</a></li>
                <li>
                    <a class="{{request()->routeIs('regpro')?' text-warning fs-4':''}}" href="#" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Proveedores
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('regpro')}}">Registro de Proveedores</a></li>
                      <li><a class="dropdown-item" href="#">Proveedores</a></li>
                    </ul>
                </li>
                <li><a href="">Pedidos</a></li>
            </ul>
        </nav>
    </header>
    <div class="fondo">

    </div>
    @yield('contenido')
</body>
</html>

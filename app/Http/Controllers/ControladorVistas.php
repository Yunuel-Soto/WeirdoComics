<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarProveedor;
use App\Http\Requests\validarRegistroArticulos;
use App\Http\Requests\validarRegistroComics;
use Illuminate\Http\Request;

class ControladorVistas extends Controller
{

    public function vistaMenu(Request $request){
        return view('menu');
    }

    public function vistaProveedores(){
        return view('agenda_proveedores');
    }

    public function vistaConsultaCA(){
        return view('consulta_comics_articulos');
    }

    public function vistaLevantamiento(){
        return view('levantamiento');
    }

    public function vistaLogin(){
        return view('login');
    }

    public function vistaRegistroA(){
        return view('registro_articulos');
    }

    public function vistaRegistroC(){
        return view('registro_comics');
    }

    public function vistaTienda(){
        return view('tienda');
    }
    public function vistaCarrito(){
        return view('carrito');
    }
    public function vistaRegistroPro(){
        return view('registro_Proveedores');
    }
    public function AgregarArticulo(validarRegistroArticulos $req){
        $nombre = $req->input('nombre-arti');
        return redirect()->route('rega')->with('agregar', $nombre);
    }
    public function AgregarComic(validarRegistroComics $req){
        $nombre = $req->input('nombre-comic');
        return redirect()->route('regc')->with('agregar', $nombre);
    }
    public function AgregarProveedor(validarProveedor $req){
        $nombre = $req->input('nom-empresa');
        return redirect()->route('regpro')->with('agregar', $nombre);
    }

}

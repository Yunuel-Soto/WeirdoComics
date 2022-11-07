<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarRegistroArticulos;
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

    public function vistaVentasM(){
        return view('ventas_mostrador');
    }
    public function Agregar_Articulo(validarRegistroArticulos $req){
        $nombre = $req->input('nombre-arti');
        return redirect()->route('rega')->with('agregar', $nombre);
    }

}

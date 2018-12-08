<?php

namespace App\Http\Controllers;

use App\Ajudante;
use App\Coleta;
use App\Motorista;
use App\Usuario;
use App\Veiculo;
use Illuminate\Http\Request;

class ColetaController extends Controller
{
    protected $model = 'App\Coleta';

    public function index()
    {
        return view('coleta.index');
    }

    public function create()
    {
        $motoristas = Motorista::all();
        $ajudantes = Ajudante::all();
        $veiculos = Veiculo::all();
        $usuarios = Usuario::all();
        return view('coleta.create')->with(['motoristas' => $motoristas, 'ajudantes' => $ajudantes, 'veiculos' => $veiculos, 'usuarios' => $usuarios]);
    }

    public function store(Request $request)
    {
        $users = [1,2,3];
        $coleta = new $this->model($request->all());
        $coleta->save();
        $coleta->Usuario()->attach($users);
        return redirect()->action('ColetaController@index');
    }


}

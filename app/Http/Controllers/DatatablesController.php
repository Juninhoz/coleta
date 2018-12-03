<?php

namespace App\Http\Controllers;

use App\Ajudante;
use App\Motorista;
use App\Veiculo;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{
    /*
     * Retorna lista com todos os motoristas
     */
    public function anyData()
    {
        return Datatables::of(Motorista::query())
            ->addColumn('action', function ($motorista) {
                $url = action('MotoristasController@edit', ['id' => $motorista->id]);
                return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })->make(true);
    }

    public function veiculosAnyData()
    {
        return Datatables::of(Veiculo::query())
            ->addColumn('action', function ($veiculo) {
                $url = action('VeiculosController@edit', ['id' => $veiculo->id]);
                return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })->make(true);
    }

    public function ajudantesAnyData()
    {
        return Datatables::of(Ajudante::query())
            ->addColumn('action', function ($ajudante) {
                $url = action('AjudantesController@edit', ['id' => $ajudante->id]);
                return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })->make(true);
    }


}

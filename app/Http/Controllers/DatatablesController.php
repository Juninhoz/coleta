<?php

namespace App\Http\Controllers;

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
        return Datatables::of(Motorista::query())->make(true);
    }

    public function veiculosAnyData()
    {
        return Datatables::of(Veiculo::query())
            ->addColumn('action', function ($veiculo) {
                return '<a href="veiculos/edit/'. $veiculo->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })->make(true);
    }


}

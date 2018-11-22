<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AjudantesRequest;
use App\Ajudante;

class AjudantesController extends Controller
{
    protected $model = 'App/Ajudante';

    public function index()
    {
        return view('ajudantes.index');
    }

    public function create()
    {
        return view('ajudantes.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function edit()
    {

    }

    public function update()
    {

    }

}

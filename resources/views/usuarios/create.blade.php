@extends('layouts.template')

@section('conteudo')

    <div class="row">
        <div class="col-lg-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb">
                <li><a href="{{ action('HomeController@index') }}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{ action('UsuariosController@index') }}"> Usuarios</a></li>
                <li class="active">Novo</li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Novo Usuario
                </header>
                <div class="panel-body">
                    <form role="form" action="{{ action('UsuariosController@store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" id="" placeholder="Nome" name="nome" value="{{ old('nome') }}">
                                    @if($errors->has('nome'))
                                        <strong style="color: red">{{ $errors->first('nome') }}</strong>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="" placeholder="Email" name="email" value="{{ old('email') }}">
                                    @if($errors->has('email'))
                                        <strong style="color: red">{{ $errors->first('email') }}</strong>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Senha</label>
                                    <input type="text" class="form-control" id="" placeholder="Senha" name="senha" value="{{ old('senha') }}">
                                @if($errors->has('senha'))
                                        <strong style="color: red">{{ $errors->first('senha') }}</strong>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Endereço</label>
                                    <input type="text" class="form-control" id="" placeholder="Endereço" name="endereco" value="{{ old('endereco') }}">
                                    @if($errors->has('endereco'))
                                        <strong style="color: red">{{ $errors->first('endereco') }}</strong>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Latitude</label>
                                    <input type="text" class="form-control" id="" placeholder="Latitude" name="latitude" value="{{ old('latitude') }}">
                                    @if($errors->has('latitude'))
                                        <strong style="color: red">{{ $errors->first('latitude') }}</strong>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Longitude</label>
                                    <input type="text" class="form-control" id="" placeholder="Longitude" name="longitude" value="{{ old('longitude') }}">
                                    @if($errors->has('longitude'))
                                        <strong style="color: red">{{ $errors->first('longitude') }}</strong>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-5">
                                <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Cadastrar</button>
                                <button type="reset" class="btn btn-danger"><i class="fa fa-trash"></i> Limpar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

@endsection
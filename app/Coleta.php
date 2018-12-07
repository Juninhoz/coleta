<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coleta extends Model
{
    protected $table = 'coleta';

    protected $fillable = [
        'motorista_id',
        'ajudante_id',
        'usuario_id',
        'veiculo_id',
        'data',
        'quantidade',
        'observacao'
    ];

    public function Motorista()
    {
        return $this->hasOne('App\Motorista');
    }

    public function Ajudante()
    {
        return $this->hasOne('App\Ajudante');
    }

    public function Usuario()
    {
        return $this->hasMany('App\ColetaUsuario');
    }

    public function Veiculo()
    {
        return $this->hasOne('App\Veiculo');
    }
}

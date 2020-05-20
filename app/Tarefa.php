<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = [
        'nome',
        'pontos',
        'data_entrega'
    ];
}

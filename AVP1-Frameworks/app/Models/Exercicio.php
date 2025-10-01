<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{

    protected $table = 'exercicios';
    protected $fillable =
    [
        'exercicio','duracao','calorias_gastas','data','user_id'
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

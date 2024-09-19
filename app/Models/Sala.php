<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipamento;

class Sala extends Model
{
    use HasFactory;
    
    protected $fillable = 
    [
        'nome','altura','largura'
    ];

    public function equipamentos(){
        return $this->hasMany(Equipamento::class);
    }

    public function mesas(){
        return $this->hasMany(Mesa::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use Hasfactory;

    protected $fillable = [
        'hostname',
        'ip',
        'username',
        'login_at',
	'teclado',
	'mouse',
	'monitor'
    ];
}

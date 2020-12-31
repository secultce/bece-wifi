<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'name', 'cpf'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produc extends Model
{
    use HasFactory;

    protected $table ='producs';
    protected $primarykey = 'id';
    protected $fillable = [
        'nombre',
        'detalles',
        'precio'
    ];
}

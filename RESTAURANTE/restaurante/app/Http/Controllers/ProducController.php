<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produc;

class ProducController extends Controller
{
    public function listar_productos(){
        $producs = produc::all();
        return view('users.listar_productos',compact('producs'));
    }
}

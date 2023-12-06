<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPlano extends Model
{
    use HasFactory;
    public function create()
    {
        $planos = TipoPlano::all();
        return view('_admin.tiposplanos.create', compact("tipoplano"));
    }
}
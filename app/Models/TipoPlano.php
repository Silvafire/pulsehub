<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoPlano extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps=false;
    protected $fillable=['nome','descricao', 'planos_id'];

    public function create()
    {
        $planos = TipoPlano::all();
        return view('_admin.tiposplanos.create', compact("tipoplano"));
    }
}
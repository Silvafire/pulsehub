<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plano extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps=false;
    protected $fillable=['Series','Duracao_Total','Tmp_Exercicio','Repeticoes' ,'modalidades_id'];

    public function create()
    {
        $planos = Plano::all();
        return view('_admin.planos.create', compact("plano"));
    }
}
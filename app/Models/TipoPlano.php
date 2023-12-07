<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoPlano extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps=false;
    protected $fillable=['nome','descricao'];

    public function planos(){
        return $this->hasMany(Plano::class,'tipo_plano_id','id');
    }
}

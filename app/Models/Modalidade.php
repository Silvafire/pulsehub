<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modalidade extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps=false;
    protected $fillable=['nome','descricao', 'tipo_eventos_mod_id', 'modalidade_id', 'staff_id', 'staff_modalidades'];

    public function tipo(){
        return $this->belongsTo(Tipo_eventos_mod::class,'tipo_eventos_mod_id','id');
    }
    public function planos(){
        return $this->hasMany(Plano::class,'modalidade_id','id');
    }
    public function staff(){
        return $this->belongsToMany(Staff::class,'staff_modalidades','modalidade_id','staff_id');
    }
}

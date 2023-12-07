<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plano extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps=false;
    protected $fillable=['series','duracao_total','tmp_exercicio','repeticoes' ,'modalidade_id','tipo_plano_id'];

    public function modalidade(){
        return $this->belongsTo(Modalidade::class,'modalidade_id','id');
    }
    public function tipo_plano(){
        return $this->belongsTo(TipoPlano::class,'tipo_plano_id','id');
    }
}

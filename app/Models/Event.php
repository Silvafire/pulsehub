<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps=false;
    protected $fillable=['nome','descricao', 'tipo_eventos_mod_id'];

    public function tipo(){
        return $this->belongsTo(Tipo_eventos_mod::class,'tipo_eventos_mod_id','id');
    }

}

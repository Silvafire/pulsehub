<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tipo_eventos_mod extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='tipo_eventos_mod';
    protected $fillable=['nome'];

    public function modalidades(){
        return $this->hasMany(Modalidade::class,'tipo_eventos_mod_id','id');
 
    }

    public function eventos(){
        return $this->hasMany(Event::class,'tipo_eventos_mod_id','id');
    }

}

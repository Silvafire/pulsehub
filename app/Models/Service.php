<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [ 'nome', 'descricao'];

    public function images(){
        return $this->hasMany(ImageService::class,'imagem_id','id');

    }

}

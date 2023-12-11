<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoPost extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps=false;
    protected $fillable = ['nome'];

   public function post(){
    return $this->hasMany(Post::class,'tipo_post_id','id');
   }
}

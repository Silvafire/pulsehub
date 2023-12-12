<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoPost extends Model
{
    use HasFactory, SoftDeletes;
    protected $table="tipo_post";
    public $timestamps=false;
    protected $fillable = ['nome','id_users'];

   public function post(){
    return $this->hasMany(Post::class,'tipo_post_id','id');
   }
}

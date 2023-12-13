<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    protected $table="post";
    public $timestamps=false;
    protected $fillable = ['imagem', 'titulo', 'descricao', 'informacao', 'tipo_post_id'];

    public function tipo_post(){
        return $this->belongsTo(TipoPost::class.'tipo_post_id','id')->withTrashed();
    }

    public function user(){
        return $this->belongsTo(User::class.'user_id','id')->withTrashed();
    }
}

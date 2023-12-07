<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoPost extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps=false;
    protected $fillable = ['nome', 'tipo_post_id'];

    public function create()
    {
        $post = TipoPost::all();
        return view('_admin.tipo_post.create', compact("tipopost"));
    }
}

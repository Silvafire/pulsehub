<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostUsers extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps=false;
    protected $fillable = ['id_post', 'id_user'];

    public function create()
    {
        $postusers = Plano::all();
        return view('_admin.post_users.create', compact("postusers"));
    }
}

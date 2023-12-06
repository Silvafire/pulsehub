<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps=false;

    public function create()
    {
        $post = Post::all();
        return view('_admin.post.create', compact("post"));
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;
    public function create()
    {
        $planos = Plano::all();
        return view('_admin.planos.create', compact("plano"));
    }
}
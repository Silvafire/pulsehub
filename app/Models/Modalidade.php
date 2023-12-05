<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidade extends Model
{
    use HasFactory;
    public function create()
    {
        $modalidades = Modalidade::all();
        return view('_admin.modalidades.create', compact("modalidade"));
    }
}

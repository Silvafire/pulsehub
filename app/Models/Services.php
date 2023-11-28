<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    public function create()
    {
        $services = Services::all();
        return view('_admin.services.create', compact(
            "Serviços"
        ));
    }
}

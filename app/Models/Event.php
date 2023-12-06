<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['nome', 'descricao'];
    public function create()
    {
        $events = Event::all();
        return view('_admin.events.create', compact(
            "evento"
        ));
    }
}

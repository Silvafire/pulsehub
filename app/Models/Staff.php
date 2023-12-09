<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Staff extends Model
{
    use HasFactory, SoftDeletes;
    protected $table="staff";
    protected $fillable=['nome','apelido', 'especializacao','link_facebook','link_instagram','link_email','img'];

    public function modalidades(){
        return $this->belongsToMany(Modalidade::class,'staff_modalidades','staff_id','modalidade_id');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Table_staff_modalidades extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table="table_staff_modalidades";
    protected $fillable=['staff_id'];

    public function modalidades(){
        return $this->hasMany(Modalidade::class,'table_staff_modalidades_id','id');
    }

}

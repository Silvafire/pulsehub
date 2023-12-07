<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageService extends Model
{
    use HasFactory;
    protected $table='image_services';
    public $timestamps=false;
    protected $fillable=['imagem','service_id'];
    
    public function service(){
        return $this->belongsTo(Service::class,'service_id','id');
 
    }
}

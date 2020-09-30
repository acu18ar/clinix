<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'description'
    ];

    //RELACIONES
    //como unrol tiene permisos....  uno a muchos
    public function permissions(){

        return $this->hasMany('App\Models\Permission');
    }

    // de muchos a muchos de usur a roles
    public function users (){
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }



    //ALMACENAMIENTO

    // VALIDACION

    // RECUPERACION DE INFORMACION

    //OTROS


}

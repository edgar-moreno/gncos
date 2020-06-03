<?php

namespace App\PermissionGNCOS\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    
    // en: From here

    protected $fillable = [
        'name',
    ];

    public function roles(){
        return $this->belongsToMany('App\PermissionGNCOS\Models\Role')->withTimestamps();
    }

}

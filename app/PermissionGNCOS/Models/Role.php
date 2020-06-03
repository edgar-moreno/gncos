<?php

namespace App\PermissionGNCOS\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // en: From here

    protected $fillable = [
        'name',
    ];

    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function permissions(){
        return $this->belongsToMany('App\PermissionGNCOS\Models\Permission')->withTimestamps();
    }
}

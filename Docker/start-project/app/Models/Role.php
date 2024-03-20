<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model{
    use HasFactory;

    private static $keys = ['role_id', 'resource_id'] ;

    public function role(){
        return $this->belongsToMany('App\Models\Role', 'permissions');
    }

}

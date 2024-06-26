<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model{
    use HasFactory;

    private static $keys = ['role_id', 'resource_id'] ;

    public function role(){
        return $this->belongsTo('App\Models\Role');
    }

    public function resource(){
        return $this->hasOne('App\Models\Resource');
    }

    public static function getKeys(){
        return self::$keys;
    }
}

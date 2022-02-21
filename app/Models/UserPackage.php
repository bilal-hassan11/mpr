<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPackage extends Model
{
    use HasFactory;

    public function parentPackage(){
        return $this->belongsTo(Package::class,'user_id');
    }

    public function childProfit(){
        return $this->hasMany(UserProfit::class,'user_package_id');
    }
}

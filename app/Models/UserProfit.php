<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfit extends Model
{
    use HasFactory;

    protected $table = 'user_profits';
    
    public function parentPackage(){
        return $this->belongsTo(Package::class,'package_id')->orderBy('id','DESC');
    }
}

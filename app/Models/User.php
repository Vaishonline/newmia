<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SoftDeletes;

class User extends Model
{
    //use SoftDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];

    public function roles(){
        return $this->belongsTo('App\Role');
    }

    public function sales_manager_users(){
        return $this->hasOne('App\User');
    }

    public function shops()
    {
        return $this->hasMany('App\Shop');
    }

    public function costumer_orders(){
        return $this->hasMany('App\costumerOrder');
    }
}

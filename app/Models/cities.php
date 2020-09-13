<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    use HasFactory;

    public function states()
    {
        return $this->belongsTo('App\State');
    }

    public function shop_registration_requests(){
        return $this->hasMany('App\shopRegistrationRequest');
    }


}

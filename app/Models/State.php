<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function shops(){
        return $this->hasMany('App\State');
    }

    public function cities()
    {
        return $this->hasMany('App\State');
    }

    public function shop_registration_requests(){
        return $this->hasMany('App\shopRegistrationRequest');
    }


}

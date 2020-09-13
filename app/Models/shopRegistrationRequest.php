<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\SoftDeletes;
class shopRegistrationRequest extends Model
{

    use HasFactory;

    protected $dates = ['deleted_at'];

    public function states(){
        return $this->belongsTo('App\State');

    }

    public function cities(){
        return $this->belongsTo('App\cities');
    }

    public function category_shop_requests(){
        return $this->hasMany('App\categoryShopRequest');
    }
}

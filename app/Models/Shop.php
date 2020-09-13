<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SoftDeletes;

class Shop extends Model
{
    use HasFactory;

    protected $dates = ['deleted_at'];

    public function users(){
    return $this->belongsTo('App\User');
}

    public function states(){
        return $this->belongsTo('App\State');
    }

    public function category_shops(){
        return $this->hasMany('App\categoryShop');
    }

    public function costumer_orders(){
        return $this->hasMany('App\costumerOrder');
    }

    public function product_shops(){
        return $this->hasMany('App\productShop');
    }

    public function subscriptions(){
        return $this->hasMany('App\Subscription');
    }
}

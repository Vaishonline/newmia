<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];

    public function category_shop_requests(){
        return $this->hasMany('App\categoryShopRequest');
    }

    public function category_shops(){
        return $this->hasMany('App\categoryShop');
    }

    public function products(){
        return$this->hasMany('App\Product');
    }

    public function product_shops(){
        return $this->hasMany('App\productShop');
    }

}

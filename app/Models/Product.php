<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];

    public function categories(){
        return $this->belongsTo('App\categories');
    }

    public function product_images(){
        return$this->hasMany('App\Product');
    }

    public function product_shops(){
        return $this->hasMany('App\productShop');
    }
}

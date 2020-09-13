<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productShop extends Model
{
    use HasFactory;

    public function shops()
    {
        return$this->belongsTo('App\Shop');
    }

    public function products(){
        return $this->belongsTo('App\Product');
    }

    public function categories(){
        return $this->belongsTo('App\categories');
    }
}

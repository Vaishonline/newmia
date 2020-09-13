<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryShop extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsTo('App\categories');
    }

    public function shops()
    {
        return$this->belongsTo('App\Shop');
    }
}

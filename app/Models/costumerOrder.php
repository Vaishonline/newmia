<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class costumerOrder extends Model
{
    use HasFactory;

    public function shops()
    {
        return$this->belongsTo('App\Shop');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }
}

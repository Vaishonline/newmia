<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscription extends Model
{
    use HasFactory;

    public function shops()
    {
        return$this->belongsTo('App\Shop');
    }
}

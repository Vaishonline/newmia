<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use App\Models\SoftDeletes;

class salesManager extends Model
{

    use HasFactory;

    protected $dates = ['deleted_at'];

    public function sales_manager_users()
    {
        return $this->hasOne('App\salesManagerUser');
    }
}

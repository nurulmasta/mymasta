<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users_company extends Model
{
    //
    public $timestamps = false;
    protected $table = 'users_company';
    protected $fillable = [
         'user_id', 'company_id',
    ];
}

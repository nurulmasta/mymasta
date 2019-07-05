<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    //
   
    protected $table = 'company';
    protected $fillable = [
        'name', 'industry', 'registration_number',
    ];
}

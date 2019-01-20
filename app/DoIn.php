<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoIn extends Model
{
    protected $table = "doin";

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];
}

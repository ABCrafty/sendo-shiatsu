<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shiatsu extends Model
{
    protected $table = "shiatsu";

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];
}

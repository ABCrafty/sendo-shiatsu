<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $table = "homepage";

    protected $fillable = [

    ];

    protected $hidden = [
        'id',
        '_token'
    ];
}

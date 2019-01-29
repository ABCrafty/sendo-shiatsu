<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    protected $table = "prices";

    protected $fillable = ['title', 'price', 'center'];

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];
}

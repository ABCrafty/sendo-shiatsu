<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $table = "homepage";

    protected $fillable = [
        'first_presta_title',
        'first_presta_content',
        'second_presta_title',
        'second_presta_content',
        'third_presta_title',
        'first_presta_content',
        'shiatsu_text',
        'shiatsu_image',
        'doin_text',
        'doin_image',
    ];

    protected $guarded = ['id'];

    protected $hidden = [
        'id',
        '_token'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoIn extends Model
{
    protected $table = "doin";

    protected $fillable = [
        'first_paragraph_title',
        'first_paragraph_content',
        'second_paragraph_title',
        'second_paragraph_content',
        'third_paragraph_title',
        'third_paragraph_content',
        'wellness',
        'image'
    ];

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shiatsu extends Model
{
    protected $table = "shiatsu";

    protected $guarded = [
        'id'
    ];

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

    protected $hidden = [

    ];
}

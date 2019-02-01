<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestations extends Model
{
    protected $table = "prestations";

    protected $guarded = ['id', '_token'];

    protected $fillable = [
        'first_prestation_title',
        'first_prestation_content',
        'first_prestation_image',
        'first_prestation_horaires',
        'second_prestation_title',
        'second_prestation_content',
        'second_prestation_image',
        'third_prestation_title',
        'third_prestation_content',
        'third_prestation_image',
    ];
}

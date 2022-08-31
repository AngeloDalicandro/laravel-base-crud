<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\type;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type'
    ];
}

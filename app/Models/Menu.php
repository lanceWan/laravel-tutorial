<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
		'name',
        'icon',
        'parent_id',
        'slug',
        'url',
        'heightlight_url',
        'sort',
    ];
}

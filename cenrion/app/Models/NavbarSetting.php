<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavbarSetting extends Model
{
    protected $table = 'navbar_settings';

    protected $fillable = [
        'key',
        'name',
        'description',
        'route',
        'status',
    ];
}

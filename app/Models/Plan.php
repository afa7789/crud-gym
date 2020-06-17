<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';
    protected $fillable = [
        'id',
        'name',
        'type_id',
        'quantity',
        'value',
        'tolerance'
    ];

}

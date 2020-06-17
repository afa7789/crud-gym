<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberEntrance extends Model
{
    protected $table = 'member_entrances';
    protected $fillable = [
        'id',
        'member_id',
        'entry'
    ];
}

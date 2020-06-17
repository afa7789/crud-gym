<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = [
        'id',
        'social_id',
        'email',
        'name',
        'birth_date',
        'phone_number',
        'address',
        'description',
        'instagram',
        'twitter',
        'facebook',
        'image'
    ];

}

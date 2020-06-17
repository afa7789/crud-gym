<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = [
        'id',
        'member_id',
        'data',
        'payment_status_id'
    ];
}

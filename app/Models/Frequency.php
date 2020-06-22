<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{
    protected $table = 'frenquencies';
    protected $fillable = [
        'id',
        'member_id',
        'date_frequencies',
        'counter'
    ];


    function listAdmin(){
        $admins = Admin::all();

        return $admins;
    }
}

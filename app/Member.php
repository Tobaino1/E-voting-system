<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'phone_no',
        'dob',
        'gender',
        'email',
        'address',
        'state',
        'lgalcda',
        'party_reg_no',
        'acc_no',
        
    ];
}

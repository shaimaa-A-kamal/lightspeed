<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Account extends Model
{
    use  HasFactory, Notifiable;

    protected $fillable = [
        'account_no',
        'account_name',
        'tel',
        'address',
        'account_status',
        'active'
    ];

    protected $hidden = [
        'user_pwd'
    ];

    // protected $dateFormat='Y-m-d';
    // const CREATED_AT = 'adding_date';

}

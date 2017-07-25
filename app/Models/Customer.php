<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $fillable = ['first_name', 'last_name', 'email', 'password', 'mobile_no', 'address'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;


    protected $fillable = ['f_name', 'l_name',	'email',	'phone',	'country',	'city',	'zip',	'user_id',	'plan_id',	'payment'];
}

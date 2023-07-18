<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survival extends Model
{
    use HasFactory;
    protected $fillable = ['banner_title','banner_des','banner_img'];
}

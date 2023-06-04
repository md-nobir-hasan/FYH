<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Congrat extends Model
{
    use HasFactory;


    protected $fillable = ['image',	'title', 'subtitle',  'description',	'option_title',	'button_one', 'button_two'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Congrat extends Model
{
    use HasFactory;


    protected $fillable = [
    'image','heading','title','subtitle','opOne','opTwo','opThree','opFour','opFive','icon','option_title','button_one','button_two',
    ];
}

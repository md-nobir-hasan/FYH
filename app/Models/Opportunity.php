<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    use HasFactory;


    protected $fillable = [
        'title','heading','subtitle','opOne','opTwo','opThree','opFour','opFive','opSix','opSeven','opEight','opNine','icon',
    ];
}

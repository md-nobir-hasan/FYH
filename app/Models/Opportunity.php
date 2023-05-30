<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    use HasFactory;


    protected $fillable = ['title',	'subtitle',	'description',	'benefit_title',	'benefit_subtitle',	'story_title',	'story_subtitle' ,'service_title' ,'service_subtitle'];
}

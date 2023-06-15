<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;


    protected $fillable = ['image', 'title_one','title_one_description','title_two','title_two_description','benefit_title','benefit_subtitle','story_title','story_subtitle','feature_title',
    'feature_subtitle','image_title','image_subtitle','service_title','service_subtitle','share_title','share_subtitle', 'lgImage','move_title',
    'move_subtile',
    'intr_title',
    'intr_subtile',
    'help_image',
    'help_title',
    'help_subtile',
    'thank_heading',
    'thank_image',
    'thank_subtitle',
    'thank_title',
    'customer_title', 'customer_subtitle'];
}

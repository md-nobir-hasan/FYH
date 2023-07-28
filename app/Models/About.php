<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['title',	'title_description', 'heading',	'heading_description', 'images', 'images_description', 'first_image', 'first_image_story', 'second_image',	'second_image_story'];
}

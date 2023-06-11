<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'title',	'image', 'description',	'address', 'profession', 'priority', 'city', 'country', 'user_id','views', 'status', 'feature'];
}

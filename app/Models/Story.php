<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'title',	'image', 'description',	'address', 'profession', 'priority', 'city', 'country_id', 'user_id','views', 'status', 'feature','feature_img','views'];


    public function country()  {
        return $this->belongsTo(Country::class);
  }
}

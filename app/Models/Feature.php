<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

   protected $fillable = ['title','name','route_name','feature_id'];


   public function created_by(){
    return $this->belongsTo(User::class,'created_by');
}
public function updated_by(){
    return $this->belongsTo(User::class,'updated_by');
}
public function deleted_by(){
    return $this->belongsTo(User::class,'deleted_by');
}
public function children(){
    return $this->hasMany(Feature::class)->orderBy('title','asc');
}

}

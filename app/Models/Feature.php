<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

   protected $fillable = ['title','name'];


   public function created_by(){
    return $this->belongsTo(User::class,'created_by');
}
public function updated_by(){
    return $this->belongsTo(User::class,'updated_by');
}
public function deleted_by(){
    return $this->belongsTo(User::class,'deleted_by');
}

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['title','logo','phone','email','address','fb_page','youtube','linkedin','twitter','whats_app'];

    public function created_by(){
        return $this->belongsTo(User::class,'created_by');
    }
    public function updated_by(){
        return $this->belongsTo(User::class,'updated_by');
    }
}

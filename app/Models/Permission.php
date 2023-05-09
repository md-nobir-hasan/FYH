<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public function created_by(){
        return $this->belongsTo(User::class,'created_by');
    }
    public function updated_by(){
        return $this->belongsTo(User::class,'updated_by');
    }
    public function deleted_by(){
        return $this->belongsTo(User::class,'deleted_by');
    }

    public function feature(){
        return $this->belongsTo(Feature::class,'feature_id','id');
    }
}

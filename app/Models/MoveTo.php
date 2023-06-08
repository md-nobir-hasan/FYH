<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoveTo extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','description','image','priority','status'];
}

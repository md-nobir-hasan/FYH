<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;


    protected $fillable = ['title','image','description','priority','slug', 'user_id', 'menu_id'];

 
    public function menu()
    {
         return $this->belongsTo(Menu::class, 'menu_id');
    }







}

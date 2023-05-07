<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['name','link_id','client_type_id','serial'];

    public function submenus(){
        return $this->hasMany(Submenu::class,'menu_id');
    }
}

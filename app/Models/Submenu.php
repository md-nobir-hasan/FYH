<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;

    protected $fillable = ['menu_id','name','link_id','serial'];

    public function created_by(){
        return $this->belongsTo(User::class,'created_by');
    }
    public function updated_by(){
        return $this->belongsTo(User::class,'updated_by');
    }
    public function deleted_by(){
        return $this->belongsTo(User::class,'deleted_by');
    }
    public function menu(){
        return $this->belongsTo(Menu::class,'menu_id')->where('deleted_by',null);
    }
    public function link(){
        return $this->belongsTo(Link::class,'link_id');
    }


}

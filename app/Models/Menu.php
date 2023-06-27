<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['name','link_id','client_type_id','serial'];


    public function created_by(){
        return $this->belongsTo(User::class,'created_by');
    }
    public function updated_by(){
        return $this->belongsTo(User::class,'updated_by');
    }
    public function deleted_by(){
        return $this->belongsTo(User::class,'deleted_by');
    }

    public function submenus(){
        return $this->hasMany(Submenu::class,'menu_id')->orderBy('serial','asc');
    }
    public function client_type(){
        return $this->belongsTo(ClientType::class,'client_type_id');
    }
    public function link(){
        return $this->belongsTo(Link::class,'link_id');
    }


    public function content()
    {
        return $this->hasOne(Content::class);
    }
}

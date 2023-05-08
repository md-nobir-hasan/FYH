<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientType extends Model
{
    use HasFactory;
    protected $fillable = ['name','ct_code'];

    public function menu(){
        $data = Menu::with(['client_type','link'])->where('client_type_id',$this->id)->get();
       return $data;
    }
}

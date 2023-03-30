<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public function permission(){
        return $this->hasMany(Permission::class,'role_id');
    }
    public function permissionCheck($id){
        $permisition = Permission::where('role_id',$this->id)
                                    ->where('feature_id',$id)
                                    ->first();
       return $permisition;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class ClientType extends Model
{
    use HasFactory, Billable;
    protected $fillable = ['name', 'plan_id', 'interval_count','price','dis','des', 'billing_period' ,'currency' ];

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
        $data = Menu::with(['client_type','link'])->where('client_type_id',$this->id)->get();
       return $data;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientType extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','dis','des','currency_id','pay_duration_id'];

    public function created_by(){
        return $this->belongsTo(User::class,'created_by');
    }
    public function updated_by(){
        return $this->belongsTo(User::class,'updated_by');
    }
    public function deleted_by(){
        return $this->belongsTo(User::class,'deleted_by');
    }
    public function currency(){
        return $this->belongsTo(Currency::class,'currency_id');
    }
    public function payDuration(){
        return $this->belongsTo(PaymentDuration::class,'pay_duration_id');
    }

    public function menu(){
        $data = Menu::with(['client_type','link'])->where('client_type_id',$this->id)->get();
       return $data;
    }
}

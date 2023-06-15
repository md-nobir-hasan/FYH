<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','client_type_id','paypal_token','order_id','order_status','pa_email','pa_id','pa_status','pa_fname','pa_lname','pa_country_code','capture_link','refund_link','order_link','amount' ,'currency','paypal_fee','net_amount','end_time'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function clientType(){
        return $this->belongsTo(ClientType::class);
    }
}

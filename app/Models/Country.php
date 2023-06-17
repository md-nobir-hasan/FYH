<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['country'];


    public function billing()  {
         return $this->hasOne(Billing::class);
    }

    public function story()  {
        return $this->hasOne(Story::class);
   }
}

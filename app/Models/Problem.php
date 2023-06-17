<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;

    protected $fillable = ['subject',
    'description',
    'answer',
    'status',
    'solveDate',
    'user_id',
    'admin_id'
];

    protected $casts = [
        'email_verified_at' => 'solveDate',
    ];



    public function user() {
         return $this->belongsTo(User::class);
    }
}

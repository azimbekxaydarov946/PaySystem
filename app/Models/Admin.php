<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'ism',
        'familiya',
        'sharifi',
        'email',
        'parol',
        'manzil',
        'telefonRaqam'
    ];

    public function login()
    {
        return $this->hasOne(Login::class, 'admin_id', 'id');
    }

}

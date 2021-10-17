<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Malumoti extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'nomi'
     ];

     public function xodim()
     {
         return $this->hasMany(Xodim::class, 'malumot_id', 'id');
     }
}

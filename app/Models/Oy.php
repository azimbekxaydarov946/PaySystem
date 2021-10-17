<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oy extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'nomi'
     ];

     public function ishhaqi()
     {
         return $this->hasMany(Ishhaqi::class, 'oy_id', 'id');
     }
}


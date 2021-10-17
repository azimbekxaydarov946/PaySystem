<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bolim extends Model
{
    use HasFactory;
    protected $fillable=[
       'id',
       'nomi'
    ];

    public function lavozim()
    {
        return $this->hasMany(Lavozim::class, 'bolim_id', 'id');
    }
}

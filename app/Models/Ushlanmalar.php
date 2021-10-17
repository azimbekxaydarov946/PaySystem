<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ushlanmalar extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'daromadsoliq',
        'kasabauyushmasi',
        'pensiyajamgarmasi'
    ];

    public function ishhaqi()
    {
        return $this->hasMany(Ishhaqi::class, 'ushlanma_id', 'id');
    }
}

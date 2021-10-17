<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ishhaqi extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'ishhaqi',
        'mukofat',
        'kunlik',
        'soatlik',
        'sofishhaqi',
        'yil',
        'ushlanma_id',
        'oy_id',
        'lavozim_id'
    ];

    public function lavozim()
    {
        return $this->hasMany(Lavozim::class, 'lavozim_id', 'id');
    }

    public function oy()
    {
        return $this->belongsTo(Oy::class, 'oy_id', 'id');
    }

    public function ushlanman()
    {
        return $this->belongsTo(Ushlanmalar::class, 'ushlanma_id', 'id');
    }
}


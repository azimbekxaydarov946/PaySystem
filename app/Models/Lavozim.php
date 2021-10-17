<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lavozim extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'nomi',
        'ishhaqi_id',
        'bolim_id'
    ];

    public function bolim()
    {
        return $this->belongsTo(Bolim::class, 'bolim_id', 'id');
    }
    public function ishhaqi()
    {
        return $this->belongsTo(Ishhaqi::class, 'ishhaqi_id', 'id');
    }
    public function xodim()
    {
        return $this->hasMany(Xodim::class, 'lavozim_id', 'id');
    }
}

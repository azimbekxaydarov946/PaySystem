<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xodim extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'ism',
        'familiya',
        'sharif',
        'manzil',
        'telefonraqam',
        'email',
        'bankschot',
        'parol',
        'status',
        'shahar_id',
        'malumot_id',
        'lavozim_id'
    ];

    public function shahar()
    {
        return $this->belongsTo(Shahar::class, 'shahar_id', 'id');
    }
    public function malumoti()
    {
        return $this->belongsTo(Malumoti::class, 'malumot_id', 'id');
    }
    public function lavozim()
    {
        return $this->belongsTo(Lavozim::class, 'lavozim_id', 'id');
    }

    public function login()
    {
        return $this->hasOne(Login::class, 'xodim_id', 'id');
    }
    public function tatil()
    {
        return $this->hasMany(Tatil::class, 'xodim_id', 'id');
    }

}
